<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker = Faker::create('ru_RU');
        return [
            'name' => $this->faker->firstName(),
            'blocked' => $this->faker->boolean($chanceOfGettingTrue = 75),
            'surname' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'registration' => $this->faker->dateTimeBetween($startDate = '-8 years', $endDate = 'now', $timezone = null),
        ];
    }
}
