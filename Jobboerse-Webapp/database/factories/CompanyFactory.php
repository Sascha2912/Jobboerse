<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => $this->faker->company,
          'street' => $this->faker->streetName,
          'house_number' => $this->faker->houseNumber,
          'postal_code' => $this->faker->postalCode,
          'city' => $this->faker->city,
          'user_id' => User::inRandomOrder()->first()->id,  
        ];
    }
}
