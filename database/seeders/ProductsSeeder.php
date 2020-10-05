<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 25; $i++) {
            DB::table('products')->insert([
                'name' => 'Track suits for men '.($i + 1),
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 29, $max = 99),
                'description' => $faker->text($maxNbChars = 600),
                'colors' => json_encode(
                    $faker->randomElements(["Black", "White", "Blue", "Red", "Green", "Orange"], 4)
                ),
                'sizes' => json_encode([
                    "SM", "M", "L", "Xl", "2XL"
                ]),
                'quantity' => $faker->numberBetween($min = 10, $max = 200)
            ]);
        }
        
    }
}
