<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\ProductStyle;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product']=Product::orderBy('id','DESC')->paginate(6);
        $data['category']=Category::where('status',1)->get();
        $data['style']=ProductStyle::where('status',1)->get();
        return view('admin.product',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category']=Category::where('status',1)->get();
        $data['style']=ProductStyle::where('status',1)->get();
        return view('admin.addproduct',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = new Product;
        $file = $request->image;
        $file_name = $file->getClientOriginalName();
        $file->move('imgupload',$file_name);
        $data->name = $request->name;
        $data->idCategory = $request->idCategory;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->idProductStyle = $request->idProductStyle;
        $data->status = $request->status;
        $data->idSex = $request->sex;
        $data->image = $file_name;
        $data->save();
        return redirect('admin/product');
       // dd($data);
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
        $data['product']=Product::find($id);
        $data['category']=Category::where('status',1)->get();
        $data['style']=ProductStyle::where('status',1)->get();
        return response()->json($data);
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
        $data = Product::find($id);
        if($request->hasFile('image')){
            $file = $request->image;
             $file_name = $file->getClientOriginalName();
             $file->move('imgupload/',$file_name);
            $data->image = $file_name;
        }else{
            $data->image = $data->image;
        }
        $data->name = $request->name;
        $data->idCategory = $request->idCategory;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->idProductStyle = $request->idProductStyle;
        $data->status = $request->status;
        $data->idSex = $request->sex;
        $data->update();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return response()->json();
    }
}
