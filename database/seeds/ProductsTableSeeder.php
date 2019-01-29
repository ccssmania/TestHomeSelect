<?php

use Illuminate\Database\Seeder;
use App\Category;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all()->pluck('id')->toArray();
        for ($i=0; $i < 200; $i++) {
	        DB::table('products')->insert([
	            'name' => str_random(10),
	            'description' => str_random(10),
	            'category_id' => array_rand($categories),
	            'price' => random_int(1000,10000),
	        ]);
    	}
    }
}
