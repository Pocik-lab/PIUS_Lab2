<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class AdressFactory extends Factory
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
            'city' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'house' => $this->faker->randomDigitNotNull(),
            'flat' => $this->faker->randomDigitNotNull(),
            'code' => $this->faker->postcode(),
            'add_time' => $this->faker->dateTimeBetween($startDate = '-8 years', $endDate = 'now', $timezone = null),
        ];
    }
}
