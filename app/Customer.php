<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['idUser','address','phone',];
    public function User(){
    	return $this->belongsTo('App\User','idUser','id');
    }
}
