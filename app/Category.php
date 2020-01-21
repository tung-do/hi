<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name','status',];
    public function productStyle(){
    	return $this->hasMany('App\ProductStyle','idCategory','id'); //lien ket 1 nhieu toi bang product style trong do field idCategory cua bang category la khoa ngoai voi id cua bang productstyle
    }
}
