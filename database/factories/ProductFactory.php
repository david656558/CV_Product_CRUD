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
            'name' => $this->faker->name(),
            'description' => $this->faker->name(),
            'image' => '/storage/product/99417bdceeb8411af391b89799c3acf2.png',
            'price' => '200',
            'start_date' => time(),
            'end_date' => time() + 3600,
            'status' => '1',
        ];
    }

}
