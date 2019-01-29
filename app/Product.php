<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price','category_id'];


    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function inventories(){
    	return $this->hasMany('App\Inventory');
    }

    public function stock(){
    	return $this->hasOne('App\Stock');
    }
}
