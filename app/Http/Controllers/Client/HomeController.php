<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\ProductStyle;

class HomeController extends Controller
{
	public function __construct(){
		$category = Category::where('status',1)->get();
		$product = Product::where('status',1)->get();
		$productstyle = ProductStyle::where('status',1)->get();
		view()->share(['category'=>$category,'product'=>$product,'productstyle'=>$productstyle]);
	}

	public function index(){
		$product['productnew'] = Product::orderBy('id','DESC')->where('status',1)->take(8)->get();
		$product['productre'] = Product::orderBy('id','DESC')->where([
			['status', '=', 1],
			['price', '<', 2000000]
		])->take(8)->get();
		return view('client.index',$product);
	}

	public function type($id){
		if($id == 1){
			$sex['s1'] = Product::orderBy('id','DESC')->where([
				['status', '=', 1],
				['idSex', '=', 3]
			])->get();
			$sex['tieude'] = "Sản phẩm dành cho Nam";
		}
		else{
			if($id == 2){
				$sex['s1'] = Product::orderBy('id','DESC')->where([
					['status', '=', 1],
					['idSex', '=', 4]
				])->get();
				$sex['tieude'] = "Sản phẩm dành cho Nữ";
			}
		}
		return view('client.sex',$sex);
	}

	public function selling($id){
    	if($id == 1){
    		$mucgia['product1'] = Product::orderBy('id','DESC')->where([
				['status', '=', 1],
				['price', '<', 5000000]
			])->get();
    		$mucgia['tieude'] = "Sản phẩm dưới 5 triệu";
    		    	}elseif ($id == 2) {
    		    		$mucgia['product1'] = Product::orderBy('id','DESC')->where([
				['status', '=', 1],
				['price', '>', 5000000],
				['price', '<', 20000000]
			])->get();
    		    		$mucgia['tieude'] = "Sản phẩm từ 5 triệu đến 20 triệu";
    		    	}elseif ($id == 3) {
    		    		$mucgia['product1'] = Product::orderBy('id','DESC')->where([
				['status', '=', 1],
				['price', '>', 20000000],
				['price', '<', 40000000]
			])->get();
    		    		$mucgia['tieude'] = "Sản phẩm từ 20 triệu đến 40 triệu";
    		    	}else{
    		    		$mucgia['product1'] = Product::orderBy('id','DESC')->where([
				['status', '=', 1],
				['price', '>', 40000000]
			])->get();
    		    		$mucgia['tieude'] = "Sản phẩm trên 40 triệu";
    		    	}
    		    	return view('client.mucgia',$mucgia);
    }

    public function category($id){
    	$category['thuonghieu'] = Product::orderBy('id','DESC')->where([
				['status', '=', 1],
				['idCategory', '=', $id]
			])->get();
    	$category['tieude'] = Category::find($id);
    	return view('client.thuonghieu',$category);
    }

    public function style($id){
    	$style['style'] = Product::orderBy('id','DESC')->where([
				['status', '=', 1],
				['idProductStyle', '=', $id]
			])->get();
    	$style['tieude'] = ProductStyle::find($id);
    	return view('client.kieudang',$style);
    }

    public function show($id){
    	$product['show'] = Product::find($id);
    	$product['pro'] = ProductStyle::where('status',1)->get();
    	$product['cate'] = Category::where('status',1)->get();
    	return view('client.chitiet',$product);
    }
    public function done(){
    	return view('client.hoanthanh');
    }
    public function search(Request $request){
    	$find = $request->find;
    	$find = str_replace(' ', '%', $find);
    	$data['kq'] = Product::where('name','like','%'.$find.'%')->orWhere('price', 'like','%'.$find)->get();
    	$data['key'] = $request->find;
    	return view('client.kq',$data);
    }

}
