<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductStyle;
use App\Category;

class ProductStyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $style['productstyle'] = ProductStyle::paginate(5);
        $style['category'] = Category::where('status',1)->get();
        return view('admin.productstyle',$style);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productstyle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $style['productstyle'] = ProductStyle::paginate(5);
        ProductStyle::create([
            'name'=>$request->name,
            'idCategory'=>$request->idCategory,
            'status' => $request->status
        ]);
        return view('admin.productstyle',$style);
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
        $style = ProductStyle::find($id);
        return response()->json($style);
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
        $productstyle = ProductStyle::find($id);
        $data = $request->all();
        $productstyle->update($data);
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $style = ProductStyle::find($id);
        $style->delete();
        return response()->json($style);
    }
}
