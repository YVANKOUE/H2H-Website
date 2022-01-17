<?php

namespace Database\Factories\Products;

use Illuminate\Support\Str;
use App\Models\Products\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = ucfirst($this->faker->sentence(2));
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
