<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'fullName' => $this->faker->unique()->name,
            'phoneNumber' => $this->faker->unique()->phoneNumber,
            'facebook' => $this->faker->unique()->url,
            'birthday' => (int)('16248'.rand(10000,99999)),
            'job' => $this->faker->jobTitle,
            'gender' => rand(1,2),
            'role' => 2,
            'avatar' => $this->faker->imageUrl(300,300),
            'status' => 1,
            'created_at'=> now(),
        ];

    }
}
