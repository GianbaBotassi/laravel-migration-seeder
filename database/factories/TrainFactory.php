<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => fake()->randomNumber(9, true),
            'company' => fake()->word(),
            'carriages' => fake()->numberBetween(0, 22),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->dateTimeInInterval('+2 hours', '+6 hours'),
            'arrival_time' => fake()->dateTimeInInterval('+6 hours', '+12 hours'),
            'in_time' => fake()->boolean(),
            'is_canceled' => fake()->boolean()
        ];
    }
}


//             $table->string('code', 10)->unique();
//             $table->string('company', 32);
//             $table->integer('carriages');
//             $table->string('departure_station', 32);
//             $table->string('arrival_station', 32);
//             $table->timestamp('departure_time');
//             $table->timestamp('arrival_time')->default('2023-07-13 15:30:00');
//             $table->boolean('in_time');
//             $table->boolean('is_canceled')->default(false);
