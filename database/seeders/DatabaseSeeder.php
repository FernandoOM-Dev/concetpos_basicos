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
        User::factory()->create([
            'email' => 'admin@mail.com',
            'is_admin' => 'true'
        ]);
    }
}
