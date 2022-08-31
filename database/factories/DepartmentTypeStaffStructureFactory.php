<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class DepartmentTypeStaffStructureFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
    public function definition(): array
    {
        return [
        'department_type_id' => $this->faker->numberBetween(1, 3),
        'staff_structure_id' => 1,
        ];
    }
}
