<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 80; $i++) { 
		        \App\Models\Product::insert([
		            "identifier" => strtoupper(uniqid(16)),
		            "image" => '',
		            "name" => $faker->sentence(4, true),
		            "description" => $faker->text(190),
		            "price" => $faker->numberBetween(10, 45),
		            "category_id" => $faker->randomElement([2, 3]),
		            "has_discount" => $faker->randomElement([true, false])
		        ]);
		    }
    }
}
