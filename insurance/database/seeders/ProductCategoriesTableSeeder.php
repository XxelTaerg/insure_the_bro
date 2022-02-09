<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::query()->delete();
        ProductCategory::create(['name' => 'Авто']);
        ProductCategory::create(['name' => 'Здоровье']);
        ProductCategory::create(['name' => 'Недвижимость']);
        ProductCategory::create(['name' => 'Путешествия']);
    }
}
