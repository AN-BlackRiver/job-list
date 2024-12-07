<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->numberBetween($min = 45000, $max = 90000),
            'location' => $this->faker->randomElement(['Удаленно', 'В офисе']),
            'schedule' => 'Полный рабочий день',
            'url' => $this->faker->url(),
            'featured' => false
        ];
    }
}
