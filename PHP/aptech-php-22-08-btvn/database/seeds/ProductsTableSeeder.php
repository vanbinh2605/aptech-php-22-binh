<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10 ; $i++){
            DB::table('products')->insert(
                [
                    'name' => $faker->name,
                    'price' => $faker->numberBetween($min=10.000, $max = 100.000),
                    'description' => $faker->text 
                ]
                );
        }
    }
}
