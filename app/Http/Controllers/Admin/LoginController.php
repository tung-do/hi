<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getlogin(){
    	return view('admin.login');
    }
    public function postlogin(Request $request){
    	// $email = $request->email;
    	// $password = $request->password;
    	$arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if($request->ghinho = 'yes'){
        	$ghinho = true;
        }else{
        	$ghinho = false;
        }
        if (Auth::attempt($arr,$ghinho)) {
        	return redirect()->intended('admin/');
        } else {
        	return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không chính xác');
        }
    }
}
