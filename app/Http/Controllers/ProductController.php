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
        $request->validate([
            'name' => 'required|unique:brands|max:255',
        ]);
        
        $product = new Product();
        
        $name = $request->input('name');

        $slug = preg_replace('/\s+/u', '-', trim($name));

        $product->slug             = $slug;
        $product->name  = strtolower($name);
        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        $product->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_title),
            'description' => $request->input('meta-description')
        ];
        $product->description  = $request->input('short_description');
        $product->description  = $request->input('description');
        $product->video_url  = $request->input('video-url');

        $product->comment             = [
            'comment_1' => $request->input('comment-1'),
            'comment_2' => $request->input('comment-2')
        ];
        $product->variation  = [
            'color'         => $request->input('color'),
            'style'         => $request->input('style'),
            'price'         => $request->input('price'),
            'sku'           => $request->input('sku'),
            'stock_manage'  => $request->input('stock-manage'),
            'size'          => $request->input('size')
        ];
        $product->images_url = [
            'thumbnail_1' => $request->input('thumbnail-url-1'),
            'thumbnail_2' => $request->input('thumbnail-url-2')
        ];
        $product->featured  = [
            'featured_1' => $request->input('featured-1'),
            'featured_2' => $request->input('featured-2')
        ];
        
        $product->save();

        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.brands.edit', $brand->id);
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
