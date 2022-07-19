<?php

namespace Database\Seeders;

use App\Imports\EmploymentClassifierImport;
use App\Imports\EmploymentClassifiersImport;
use App\Models\EmploymentClassifier;
use App\Models\User;
use Goutte\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class EmploymentClassifierSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    if (!Storage::exists('prof.xlsx')) {
      define("BASE_URL", 'https://cnas.gov.md/');
      header('Content-type: text/html; charset=utf-8');

      ini_set('error_reporting', E_ALL);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);

      $url = 'https://cnas.gov.md/lib.php?l=ro&idc=473&t=/Pentru-platitorii-de-contributii/Clasificatoare&';

      $client = new Client();

      $crawler = $client->request('GET', $url);

      $block = $crawler->filter('.bg38 > div')->last();
      $url = $block->filter('table tr .clb table tr td a')
        ->reduce(function ($node, $i) {
          $containsName = str_contains($node->text(), 'Clasificator al Ocupaţiilor');
          $notContainsName = !str_contains($node->text(), 'Ocupații derivate');
          if (!($containsName && $notContainsName)) {
            return false;
          }
          return true;
        })->first()->attr('href');
      $url = BASE_URL . $url;

      $client = new Client();
      $crawler = $client->request('GET', $url);
      $link = $crawler->filter('#main a')->attr('href');
      $fileUrl = BASE_URL . $link;
      $file = file_get_contents($fileUrl);

      Storage::put('prof.xlsx', $file);
    }
    $import = Excel::toCollection(new EmploymentClassifiersImport(), Storage::path('prof.xlsx'));
    foreach ($import[0] as $key => $value) {
      if ($key > 0) {
        EmploymentClassifier::create([
          'title_ro' => $value[1],
          'title_ru' => $value[2],
          'code' => $value[0],
          'revision_code' => 'COORM 006-2021',
          'user_id' => User::first()->id,
        ]);
      }
      Storage::delete('prof.xlsx');
    }
  }
}
