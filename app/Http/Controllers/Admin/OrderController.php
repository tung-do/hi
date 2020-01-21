<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductStyle;
use App\Category;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order['order'] = Order::where('status',0)->paginate(10);
        $order['danggiao'] = Order::where('status',1)->paginate(10);
        $order['hoanthanh'] = Order::where('status',2)->paginate(10);
        $order['huybo'] = Order::where('status',3)->paginate(10);
        return view('admin.order',$order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.order');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        
    }
    public function danggiao(Request $request, $id){
        $order = Order::find($id);
        $order->status = '1';
        $order->update();
        return redirect('admin/order');
    }
    public function huybo(Request $request, $id){
        $order = Order::find($id);
        $order->status = '3';
        $order->update();
        return redirect('admin/order');
    }
    public function hoanthanh(Request $request, $id){
        $order = Order::find($id);
        $order->status = '2';
        $order->update();
        return redirect('admin/order');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
