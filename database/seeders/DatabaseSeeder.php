<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
    public function run(): void
    {
        $this->call([
        UserSeeder::class,
        StaffStructureSeeder::class,
        DepartmentTypeSeeder::class,
        DepartmentSeeder::class,
        DepartmentTypeStaffStructureSeeder::class,
        DepartmentStaffStructureSeeder::class,
        EmploymentClassifierSeeder::class,
        ]);
    }
}
