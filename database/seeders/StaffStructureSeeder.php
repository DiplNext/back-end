<?php

namespace Database\Seeders;

use App\Models\StaffStructure;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class StaffStructureSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
    public function run(): void
    {
        StaffStructure::create([
        'parent_id' => null,
        'staff_order' => '150',
        'title' => 'Agropiese T.G.R. GRUP',
        'user_id' => User::first()->id,
        'created_at' => Carbon::createFromFormat('d-m-Y H:i:s', '03-06-2022 08:00:00')
        ->format('d-m-Y H:i:s')
        ]);
    }
}
