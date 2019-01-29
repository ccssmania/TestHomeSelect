<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 200; $i++) {
	        DB::table('products')->insert([
	            'name' => str_random(10),
	            'description' => str_random(10),
	            'category_id' => random_int(1,50),
	            'price' => random_int(1000,10000),
	        ]);
    	}
    }
}
