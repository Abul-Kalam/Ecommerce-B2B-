<?php

namespace App\Http\Controllers;

use Session;
use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "shop";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.shop-create');
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
            'slug' => 'required|unique:categories|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $shop = new Shop();
        
        $status = $request->input('status') ? $request->input('status') : "active";
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $shop->slug             = $slug;
        $shop->localization     = [
            'en' => [
                'display_name' => $request->input('display-name-en')
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        //$shop->options            = null;
        $shop->meta             = [
            'title' => $request->input('meta-title'),
            'keywords' => $request->input('meta-keywords'),
            'description' => $request->input('meta-description')
        ];
        $shop->address             = [
            'address_line_1' => $request->input('address-line-1'),
            'address_line_2' => $request->input('address-line-2'),
            'zip' => $request->input('zip'),
            'district' => $request->input('district'),
            'division' => $request->input('division'),
        ];
        $shop->status           =  $status;
        $shop->description  = $request->input('description');
        $shop->logo_urls  = $request->input('feature-image-url');
        
        $shop->save();

        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.shop.edit', $shop->id);
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
        $shop = shop::findOrFail($id); 

        
        return view('backend.pages.shop-edit', [
            'shop' => $shop,
        ]);
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
