<?php

namespace App\Http\Controllers;

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
        $this->checkPermission('manage-brands');
        $paginate = config('app.pagenation_count', 3);
        
        $brands = Brand::with('country')->orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.brand-list' ,[
            'brands' => $brands,
        ]);
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

    public function create()
    {   
        $this->checkPermission('manage-brands');
        $countries = Country::get();
        return view('backend.pages.brand-create', [
            'countries' => $countries,
        ]);
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
            'name' => 'required|unique:brands|max:255'
        ]);
        
        $brand = new Brand();
        
        $name = $request->input('name');

        $slug = preg_replace('/\s+/u', '-', trim($name));

        $brand->slug             = $slug;
        $brand->name             = strtolower($name);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $this->checkPermission('manage-brands');
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
            'name' => 'required|max:255|unique:brands,id,'.$id,
        ]);
        
        $brand = Brand::findOrFail($id);
        
        $name = $request->input('name');

        $slug = preg_replace('/\s+/u', '-', trim($name));

        $brand->slug             = $slug;
        $brand->name             = strtolower($name);
        
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

        Session::flash('message', 'Successfully Updated!');
        return redirect()->route('backend.brands.edit', $brand->id);
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
