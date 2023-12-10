<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = 1;

        while ($count <= 5) {
            $this->addCategory($count);
            $count += 1;
        }
    }

    private function addCategory(int $count)
    {
        Category::create([
           'name' => "Категория $count"
        ]);
    }
}
