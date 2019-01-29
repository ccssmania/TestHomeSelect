<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Stock;
use App\Category;
class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$products = Product::paginate(15);
    	return view('product.index',compact('products'));
    }

    public function create(){
    	$product = new Product;
    	$categories = Category::all();
    	return view('product.create', compact('product','categories'));
    }

    public function store(Request $request){
    	$this->validate($request,[
            'description' => 'required',
        ]);
    	$product = new Product($request->all());
    	if($product->save()){
    		$stock = new Stock;
    		$stock->product_id = $product->id;
    		$request->stock ? $stock->stock = $request->stock : false;
    		$stock->save();
            \Session::flash('message', 'Product Saved!');
            return redirect('/products');
    	}else{
            \Session::flash('errorMessage', 'Something was wrong!');
            return redirect('/products');
        }
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
    	return view('product.edit', compact('product','categories'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        isset($request->name) ? $product->name = $request->name : '';
        isset($request->price) ? $product->price = $request->price : '';
        isset($request->description) ? $product->description = $request->description : '';

        if($product->save()){
            \Session::flash('message', 'Product Edited!');
            return redirect('/products');
        }else{
            \Session::flash('errorMessage', 'Something was wrong!');
            return redirect('/products');
        }
        
    }

    public function destroy($id){
        $product = Product::find($id);
        if($product->stock->stock == 0){
        	$product->stock->delete();
	        if($product->delete()){
	            \Session::flash('message', 'Product Deleted');
	            return redirect('/products');
	        }else{
	            \Session::flash('errorMessage', 'Something was wrong');
	            return redirect('/products');
	        }
        }else{
        	\Session::flash('errorMessage', 'The stock of the product es greater than 0');
	        return redirect('/products');
        }
    }
}
