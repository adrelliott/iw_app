<?php

namespace Database\Factories;

use App\Models\SibList;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiblistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SibList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sib_ref' => rand(200, 900),
            'name' => implode(' ', $this->faker->words(3)),
            'description' => $this->faker->sentence(),
            'is_active' => $this->faker->boolean(75),
        ];
    }
}
