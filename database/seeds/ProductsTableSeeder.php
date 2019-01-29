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
        $categories = Category::all();
        for ($i=0; $i < 20; $i++) {
            foreach ($categories as $category) {
    	        DB::table('products')->insert([
    	            'name' => str_random(10),
    	            'description' => str_random(10),
    	            'category_id' => $category->id,
    	            'price' => random_int(1000,10000),
    	        ]);
            }
    	}
    }
}
