<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\Stock;
use App\Product;
class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$inventories = Inventory::orderBy('created_at','desc')->paginate(15);
    	return view('inventory.index',compact('inventories'));
    }

    public function create(){
    	$inventory = new Inventory;
        $products = Product::all();
    	return view('inventory.create', compact('inventory','products'));
    }
    public function createP($id){
        $inventory = new Inventory;
        $products = Product::all();
        $preProduct = Product::find($id);
        return view('inventory.create', compact('inventory','products','preProduct'));
    }

    public function store(Request $request){

    	$inventory = new Inventory($request->all());
        if($request->type == env('REMOVE_STOCK') and $request->quantity > Stock::find($request->product_id)->stock){
            \Session::flash('errorMessage', 'The quantity is greater than the stock!');
            return redirect('/inventory');
        }
        $inventory->type = $request->type;
    	if($inventory->save()){
    		$stock = Stock::find($inventory->product_id);
            if($inventory->type == env('ADD_STOCK'))
                $stock->stock += $inventory->quantity;
            elseif($inventory->type == env('REMOVE_STOCK'))
                $stock->stock -= $inventory->quantity;
    		$stock->save();
            \Session::flash('message', 'inventory Saved!');
            return redirect('/inventory');
    	}else{
            \Session::flash('errorMessage', 'Something was wrong!');
            return redirect('/inventory');
        }
    }

    public function showProduct($id){
        $product = Product::find($id);
        $inventories = $product->inventories()->paginate(15);
        return view('inventory.index',compact('inventories','product'));
    }

}
