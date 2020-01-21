<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name','description','quantity','price','image','idCategory','idProductStyle','idSex','status',];
    public function ProductStyle(){
    	return $this->belongsTo('App\ProductStyle','idProductStyle','id');
    }
    public function Category(){
    	return $this->belongsTo('App\Category','idCategory','id');
    }
}
