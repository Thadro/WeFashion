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

    		// Create categories
    		\App\Models\Category::truncate();

    		\App\Models\Category::insert(
    			[
    				"id" => 1,
            "name" => "Homme"
        	]
        );

        \App\Models\Category::insert(
    			[
        		"id" => 2,
        		"name" => "Femme"
        	]
        );

    		// Create products
    		\App\Models\Product::truncate();

    		$input = [1, 2];
        for ($i=0; $i < 80; $i++) { 
        		$random = array_rand($input, 1); // Pick up the 1 or 2 category

        		if($input[$random] == 1){
        			// Homme
        			$files = glob(getcwd() . '/public/img/img/hommes' . '/*.*');
        		} else {
        			// Femme
        			$files = glob(getcwd() . '/public/img/img/femmes' . '/*.*');
        		}

        		$file = array_rand($files);
				    $file = $files[$file];
				    $file = str_replace(getcwd().'/public', '', $file);

		        \App\Models\Product::insert([
		            "identifier" => strtoupper(uniqid(16)),
		            "image" => $file,
		            "name" => $faker->sentence(4, true),
		            "description" => $faker->text(190),
		            "price" => $faker->numberBetween(10, 45),
		            "category_id" => $input[$random],
		            "has_discount" => $faker->randomElement([true, false])
		        ]);
		    }
    }
}
