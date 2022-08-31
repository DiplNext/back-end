<?php

namespace Database\Seeders;

use App\Models\DepartmentType;
use App\Models\User;
use Illuminate\Database\Seeder;

class DepartmentTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
    public function run(): void
    {
        $departmentTypes = [
        [
        'department_level' => 1,
        'title' => 'Bord',
        'short_title' => 'brd.',
        'user_id' => User::first()->id
        ],
        [
        'department_level' => 2,
        'title' => 'Direcția',
        'short_title' => 'dir.',
        'user_id' => User::first()->id
        ],
        [
        'department_level' => 3,
        'title' => 'Secția',
        'short_title' => 'sec.',
        'user_id' => User::first()->id
        ],
        ];
        foreach ($departmentTypes as $departmentType) {
            DepartmentType::create($departmentType);
        }
    }
}
