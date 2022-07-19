<?php

namespace Database\Seeders;

use App\Models\DepartmentStaffStructure;
use Illuminate\Database\Seeder;

class DepartmentStaffStructureSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(): void
  {
    DepartmentStaffStructure::factory(58)->create();
  }
}
