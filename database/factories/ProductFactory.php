<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pplus_ref' => $this->faker->regexify('[0-9a-zA-Z]{6}'),
            'woocom_ref' => rand(1000, 9999),
            'name' => implode(' ', $this->faker->words(3)),
            'description' => $this->faker->sentence(),
            'price' => rand(1995, 19995),
            'is_variant' => $this->faker->boolean(20),
        ];
    }
}
