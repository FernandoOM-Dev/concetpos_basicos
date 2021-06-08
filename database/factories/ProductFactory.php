<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->sentence($nbWords = 6, $variableNbWords = true);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 10000),
            'description' => $this->faker->text($maxNbChars = 200)
        ];
    }
}
