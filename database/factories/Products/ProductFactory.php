<?php

namespace Database\Factories\Products;

use Illuminate\Support\Str;
use App\Models\Products\Product;
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
        $name = ucfirst($this->faker->unique()->word);
        return [
            'sub_category_id' => $this->faker->numberBetween(1, 50),
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->numberBetween(1, 10),
            'brand' => ucfirst($this->faker->word),
            'mini_description' => $this->faker->paragraph(5, true),
            'long_description' => $this->faker->paragraph(20, true),
            'available' => $this->faker->numberBetween(0, 1),
        ];
    }
}
