<?php

namespace App\Http\Controllers\Api;

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
        $paginate = config('app.pagenation_count', 3);
        
        $product = Product::orderBy('created_at', 'DESC')->paginate($paginate);

        return response()->json([
            //'product' => $product,
            'massage' =>'Product Successfully Created '
        ], 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
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
        $product->description  = $request->input('short-description');
        $product->description  = $request->input('description');
        $product->video_url  = $request->input('video-url');
        $product->variation  = [
            'color'         => $request->input('color'),
            'style'         => $request->input('style'),
            'price'         => $request->input('price'),
            'sku'           => $request->input('sku'),
            'stock_manage'  => $request->input('stock-manage'),
            'size'          => $request->input('size')
        ];
        $product->image_url = [
            'thumbnail_1' => $request->input('thumbnail-url-1'),
            'thumbnail_2' => $request->input('thumbnail-url-2')
        ];
        $product->featured  = [
            'featured_1' => $request->input('featured-1'),
            'featured_2' => $request->input('featured-2')
        ];
        
        $product->save();

        return response()->json([
            //'product' => $product,
            'massage' =>'Product Successfully Created '
        ], 200);
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
