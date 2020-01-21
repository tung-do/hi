<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use DB;
use Auth;
use App\User;

class IndexController extends Controller
{
	public function index(){
		$count['sp'] = DB::table('Product')->count();
	    $count['dc'] = DB::table('Order')->where('status',0)->count();
	    $count['ht'] = DB::table('Order')->where('status',2)->count();
	    $count['hb'] = DB::table('Order')->where('status',3)->count();
	    return view('admin.index',$count);
	}
	public function out(){
		Auth::logout();
		return redirect()->intended('login/');
	}
    
}
