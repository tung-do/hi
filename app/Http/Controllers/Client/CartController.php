<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Product;
use App\ProductStyle;
use App\Category;
use App\Order;
use App\OrderDetail;
use Validator;
use Mail;
use App\Mail\ShoppingMail;

class CartController extends Controller
{
    public function __construct(){
        $category = Category::where('status',1)->get();
        $product = Product::where('status',1)->get();
        $productstyle = ProductStyle::where('status',1)->get();
        view()->share(['category'=>$category,'product'=>$product,'productstyle'=>$productstyle]);
    }
    public function add($id){
        $productadd = Product::find($id);
        Cart::add(['id' => $id, 'name' =>$productadd->name, 'qty' => 1, 'price' => $productadd->price, 'weight' => 550, 'options' => ['image' => $productadd->image,'idsp' => $productadd->id]]);
        return redirect('cart/showcart');
    }
    public function addspeed($id){
        $productadd2 = Product::find($id);
        Cart::add(['id' => $id, 'name' =>$productadd2->name, 'qty' => 1, 'price' => $productadd2->price, 'weight' => 550, 'options' => ['image' => $productadd2->image,'idsp' => $productadd2->id]]);
        return back();
    }
    public function showcart(){
        $cartshow['total'] = Cart::total();
        $cartshow['cartshow'] = Cart::content();
        return view('client.showcart',$cartshow);
    }
    public function delete($id){
        if($id == 'allcart'){
            Cart::destroy();
        }
        else{
            Cart::remove($id);
        }
        return back();
        
    }
    public function updatecart(Request $request){
        $sl = $request->rowId;
        foreach (Cart::content() as $cart) {
            if($sl == $cart->rowId){
                $cartid = $cart->id;
                $proid = Product::find($cartid);
                if($request->sl > $proid->quantity){
                    
                }else{
                    Cart::update($request->rowId, $request->sl);
                }
            }

        }
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->all();
        $a = str_replace(',', '', $request->monney);
        $data['monney'] = str_replace('.00', '', $a);
        $data['code_order'] = 'code'.rand();
        $data['status'] = 0;
        $order = Order::create($data);
        $idOrder = $order->id;
        $orderdetail = [];
        $orderdetail2 = [];
        foreach (Cart::content() as $key => $cart) {
            $orderdetail['code_oder'] = $data['code_order'];
            $orderdetail['idOrder'] = $idOrder;
            $orderdetail['idProduct'] = $cart->id;
            $orderdetail['nameProduct'] = $cart->name;
            $orderdetail['quantity'] = $cart->qty;
            $orderdetail['price'] = $cart->price;
            $orderdetail2[$key] = OrderDetail::create($orderdetail);

        }
        Mail::to($order->emailkh)->send(new ShoppingMail($order,$orderdetail2));
        Cart::destroy();
        return response()->json();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
