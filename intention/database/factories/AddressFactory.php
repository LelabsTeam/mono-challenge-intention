<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->randomNumber(2),
            'street' => $this->faker->streetName(),
            'complement' => $this->faker->sentence(),
            'postcode' => $this->faker->postcode(),
            'user_id' => User::factory(),
        ];
    }
}
