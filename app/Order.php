<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['code_order','idUSer','namekh','diachikh','emailkh','phonekh','monney','message','status',];
    public function User(){
    	return $this->belongsTo('App\User','idUser','id');
    }
}
