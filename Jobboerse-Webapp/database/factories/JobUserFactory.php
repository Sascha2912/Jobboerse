<?php

namespace Database\Factories;

use \App\Models\User;
use \App\Models\Job;
use App\Models\Job_User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job_User>
 */
class JobUserFactory extends Factory
{
    protected $model = Job_User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Verwendet bereits existierenden Jobs und User für die Test-Daten.
           'job_id' => Job::inRandomOrder()->first()->id,
           'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
