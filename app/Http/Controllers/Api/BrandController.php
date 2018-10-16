<?php

namespace App\Http\Controllers\Api;

use Session;
use App\Brand;
use App\Country;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $paginate = config('app.pagenation_count', 3);
        
        $brands = Brand::with('country')->orderBy('created_at', 'DESC')->paginate($paginate);

        return response()->json([
            'brands' => $brands,
            'massage' =>'Brand Successfully Created '
        ], 200);
    }
    // with('country')->
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $brands = Brand::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.brand-list', [
            'brands' => $brands
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:brands|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $brand = new Brand();
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $brand->slug             = $slug;

        $display_name_en = $request->input('display-name-en');
        $brand->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        $brand->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_title),
            'description' => $request->input('meta-description')
        ];
        $brand->about  = $request->input('about');
        $brand->country_id  = $request->input('country-id');

        $brand->images_url             = [
            'logo' => $request->input('logo-url'),
            'banner' => $request->input('banner-url'),
            'icon' => $request->input('icon-url'),
            'thumbnail' => $request->input('thumbnail-url')
        ];
        
        $brand->save();

       
        return response()->json([
            'massage' =>'Brands Successfully Created '
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        
        $brand = Brand::findOrFail($id);
        $countries = Country::get();
        return view('backend.pages.brand-edit', [
            'brand' => $brand,
            'countries' => $countries,
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
        $request->validate([
            'slug' => 'required|max:255|unique:brands,id,'.$id,
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $brand = Brand::findOrFail($id);
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $brand->slug             = $slug;
        $brand->localization     = [
            'en' => [
                'display_name' => $request->input('display-name-en')
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $brand->meta             = [
            'title' => $request->input('meta-title'),
            'keywords' => $request->input('meta-keywords'),
            'description' => $request->input('meta-description')
        ];
        $brand->about  = $request->input('about');
        $brand->country_id  = $request->input('country-id');

        $brand->images_url             = [
            'logo' => $request->input('logo-url'),
            'banner' => $request->input('banner-url'),
            'icon' => $request->input('icon-url'),
            'thumbnail' => $request->input('thumbnail-url')
        ];
        
        $brand->save();

        return response()->json([
            'massage' =>'Brands Successfully Update '
        ], 200);
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
