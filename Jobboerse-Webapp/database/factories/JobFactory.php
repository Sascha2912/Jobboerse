<?php

namespace Database\Factories;

use \App\Models\Category;
use \App\Models\Company;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    protected $model = Job::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'salary' => $this->faker->numberBetween(5000, 10000),
            // Verwenden der Category-Factory, um eine Kategorie zu erstellen.
            'category_id' => Category::factory(),
            // Verwenden der Company-Factory, um ein Unternehmen zu erstellen.
            'company_id' => Company::factory(),
        ];
    }
}
