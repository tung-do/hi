<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStyle extends Model
{
	protected $table = 'productstyle';
	protected $fillable = ['idCategory','name','status',];
	public function Category(){
    	return $this->belongsTo('App\Category','idCategory','id');
    }
}
