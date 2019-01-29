<?php

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 200; $i++) { 
	        DB::table('stock')->insert([
	            'product_id' => $i,
	            'stock' => random_int(0,100),
	        ]);
    	}
    }
}
