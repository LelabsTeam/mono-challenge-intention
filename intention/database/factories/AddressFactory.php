<?php

namespace Database\Factories;

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
            'user_id' => $this->faker->randomDigitNotZero(),
            'intention_id' => $this->faker->randomDigitNotZero(),
        ];
    }
}
