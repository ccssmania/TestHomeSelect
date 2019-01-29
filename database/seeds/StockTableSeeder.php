<?php

use Illuminate\Database\Seeder;
use App\Product;
class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach($products as $product) { 
	        DB::table('stock')->insert([
	            'product_id' => $product->id,
	            'stock' => random_int(0,100),
	        ]);
    	}
    }
}
