<?php

namespace Database\Seeders;

use App\Models\DepartmentTypeStaffStructure;
use Illuminate\Database\Seeder;

class DepartmentTypeStaffStructureSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
    public function run(): void
    {
        DepartmentTypeStaffStructure::factory(3)->create();
    }
}
