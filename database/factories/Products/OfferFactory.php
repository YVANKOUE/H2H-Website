<?php

namespace Database\Factories\Products;

use Illuminate\Support\Str;
use App\Models\Products\Offer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = ucfirst($this->faker->unique()->word);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'discount' => $this->faker->numberBetween(10, 75),
            'from' => $this->faker->date(),
            'to' => $this->faker->date('Y-m-d', '2025-12-25')
        ];
    }
}
