<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
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
            'name' => $this->faker->unique()->name,
            'title' => $this->faker->title,
            'code' => rand(1111, 9999),
            'qty' => rand(1, 9999),
            'category_id' => Category::factory(),
            'brand' => Brand::factory(),
        ];
    }
}
