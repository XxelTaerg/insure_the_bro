<?php

namespace Database\Factories;

use App\Models\InsuranceCompany;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'percent' => $this->faker->randomFloat(30,2,100),
            'period' => $this->faker->randomNumber(),
            'company_id' => InsuranceCompany::inRandomOrder()->first()->id,
            'category_id' => ProductCategory::inRandomOrder()->first()->id
        ];
    }
}
