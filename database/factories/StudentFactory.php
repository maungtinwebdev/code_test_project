<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'name' => $this->faker->name(),
            'father_name' => $this->faker->name(),
            'grade' => rand(1,15),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}
