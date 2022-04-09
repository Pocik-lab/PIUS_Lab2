<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buyer;
use App\Models\Adress;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Faker\Factory as Faker;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create('ru_RU');
        Buyer::factory()
                ->count(100)
                ->has(Adress::factory()
                                ->count($this->faker->randomDigitNotNull())
                                ->state(new Sequence (
                                    ['adress_name' => 'Дом'],
                                    ['adress_name' => 'Работа'],
                                )), 'adresses')
                ->create();
    }
}
