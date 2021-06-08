<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 10000),
            'image' => 'images/shoes-img1.png',
            'order_id' => Order::factory()->create()
        ];
    }
}
