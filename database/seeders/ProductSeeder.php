<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $count = 1;

        while($count <= 20) {
            $this->addProduct($count, $faker);
            $count += 1;
        }
    }

    private function addProduct(int $count, Faker $faker)
    {
        Product::create([
            'name' => "Товар $count",
            'price' => $faker->randomFloat(2, 100, 100000),
            'description' => "Описание товара $count: $faker->realText",
            'quantity' => $faker->numberBetween(1, 100),
            'active' => true,
        ]);
    }
}
