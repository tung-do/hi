<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;

class GetOrderController extends Controller
{
    public function hi(Request $request){
    	$a = OrderDetail::where('idOrder','=',$request->idorder)->get();
    	return response()->json($a);
    }
}
