<?php

namespace Database\Factories\Products;

use Illuminate\Support\Str;
use App\Models\Products\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = ucfirst($this->faker->sentence(2));
        return [
            'category_id' => $this->faker->numberBetween(1, 25),
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
