<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'hours' => 24,
            'description' => $this->faker->text(),
            'url' => $this->faker->url(),
            'category' => $this->faker->randomElement(['fullstack', 'frontend', 'backend', 'design']),
            'timezone' => $this->faker->randomElement([
                '(GMT-06:00) Central America',
                '(GMT-06:00) Guadalajara, Mexico City, Monterrey',
                '(GMT-06:00) Saskatchewan', 
                '(GMT-05:00) Bogota, Lima, Quito',
                '(GMT-05:00) Eastern Time (US & Canada)'
            ]),
            'region' => $this->faker->randomElement([
                'Asia', 'Africa', 'North America', 'South America', 'Europe', 'Australia/New Zealand'
            ]),
            'type' => $this->faker->randomElement(['contract', 'full-time']),
        ];
    }
}
