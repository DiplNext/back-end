<?php

namespace Database\Factories;

use App\Models\DepartmentStaffStructure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class DepartmentStaffStructureFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'department_id' => $this->faker->numberBetween(1, 58),
      'staff_structure_id' => 1,
    ];
  }
}
