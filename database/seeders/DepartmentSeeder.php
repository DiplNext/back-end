<?php

namespace Database\Seeders;

use App\Imports\DepartmentTypesImport;
use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class DepartmentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
    public function run(): void
    {
        $import = Excel::toCollection(new DepartmentTypesImport(), Storage::path('department_types.xlsx'));
        foreach ($import[0] as $key => $value) {
            if ($key > 3) {
                if ($value[0] != null) {
                    Department::create([
                    'parent_id' => null,
                    'department_type_id' => $value[0],
                    'code' => $value[5],
                    'title' => $value[3],
                    'short_title' => $value[4],
                    'employees_count' => 0,
                    'supervisors_count' => 0,
                    'user_id' => User::first()->id,
                    ]);
                }
            }
        }
    }
}
