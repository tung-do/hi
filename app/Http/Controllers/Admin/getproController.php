<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\ProductStyle;

class getproController extends Controller
{
    public function hi(Request $request){
    	$a = ProductStyle::where('idCategory','=',$request->idcate)->get();
    	return response()->json($a);
    }
}
