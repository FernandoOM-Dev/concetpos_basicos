<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Image::factory(10)->create();
        Item::factory(10)->create();
        Order::factory(30)->create();
        Product::factory(100)->create();
    }
}
