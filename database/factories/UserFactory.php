<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory
 */
class UserFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
    public function definition(): array
    {
        return [
        'first_name' => $this->faker->firstName(),
        'last_name' => $this->faker->lastName(),
        'email' => $this->faker->unique()->safeEmail(),
        'password' => Hash::make("testpassword"),
        'idnp' => $this->faker->numerify('#############'),
        'birth_date' => $this->faker->dateTime(),
        'sex' => $this->faker->numberBetween(1, 2),
        'partners_fk_id' => 50411,
        'crm_user_id' => 40011,
        ];
    }

  /**
   * Indicate that the model's email address should be unverified.
   *
   * @return static
   */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
            'email_verified_at' => null,
            ];
        });
    }
}
