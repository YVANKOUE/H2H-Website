<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::factory()->count(50)->create();
    }
}
