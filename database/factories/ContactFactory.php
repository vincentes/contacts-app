<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(), // password
            'email' => $this->faker->unique()->safeEmail(),
            'title' => $this->faker->sentence(2, false),
        ];
    }
}
