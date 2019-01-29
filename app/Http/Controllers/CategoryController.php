<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

use Validator;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$categories = Category::paginate(15);
    	return view('category.index',compact('categories'));
    }

    public function create(){
    	$category = new Category;
    	return view('category.create', compact('category'));
    }

    public function store(Request $request){

    	$this->validate($request,[
            'description' => 'required',
        ]);
    	$category = new Category($request->all());

    	if($category->save()){
            \Session::flash('message', 'category Saved!');
            return redirect('/category');
    	}else{
            \Session::flash('errorMessage', 'Something was wrong!');
            return redirect('/category');
        }
    }

    public function edit($id){
        $category = Category::find($id);
    	return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        isset($request->name) ? $category->name = $request->name : '';
        isset($request->description) ? $category->description = $request->description : '';

        if($category->save()){
            \Session::flash('message', 'Category Edited!');
            return redirect('/category');
        }else{
            \Session::flash('errorMessage', 'Something was wrong!');
            return redirect('/category');
        }
        
    }
   
}
