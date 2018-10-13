<?php

namespace App\Http\Controllers;

use Session;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Product";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.pages.product-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $product = new Product();
        

       $name = $request->input('name');

       $status = $request->input('status') ? $request->input('status') : "active";

       $slug = preg_replace('/\s+/u', '-', trim($name));

       $product->name             = $name;
       $product->slug             = $slug;
       $product->status           =  $status;

       $product->description  = $request->input('description');
       $product->short_description  = $request->input('short-description');
       $product->video_url  = $request->input('video-url');
       $product->shop_id  = $request->input('shop-id');

       $meta_title = $request->input('meta-title');
       $meta_keywords = $request->input('meta-keywords');

       $product->meta  = [
        'title'       => strtolower($meta_title),
        'keywords'    => strtolower($meta_title),
        'description' => $request->input('meta-description')
        ];

       $product->variation  = [
        'color'       => $request->input('color'),
        'size'        => $request->input('size'),
        'style'        => $request->input('style'),
        'price'        => $request->input('sku'),
        'sku'        => $request->input('style'),
        'stock_manage'        => $request->input('stock-manage'),
        ];
       $product->image_url  = [
        'image_url1'       => $request->input('image-url1'),
        'image_url2'        => $request->input('image-url2'),
        'image_url3'        => $request->input('image-url3')
        ];
        $product->save();
       

        
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
