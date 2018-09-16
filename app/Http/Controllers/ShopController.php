<?php

namespace App\Http\Controllers;

use Session;
use App\Shop;
use App\Thana;
use App\Country;
use App\Division;
use App\District;
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
        $paginate = config('app.pagenation_count', 3);
        
        $shops = Shop::orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.shop-list', [
            'shops' => $shops,
        ]);
    }


    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $shops = Shop::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.shop-list', [
            'shops' => $shops
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        $divisions = Division::get();
        $districts = District::get();
        $thanas = Thana::get();
        return view('backend.pages.shop-create' ,[
            'countries' => $countries,
            'districts' => $districts,
            'divisions' => $divisions,
            'thanas' => $thanas,
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
            'slug' => 'required|unique:shops|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $shop = new Shop();
        
        $status = $request->input('status') ? $request->input('status') : "active";
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $shop->slug             = $slug;
        $display_name_en = $request->input('display-name-en');
        $shop->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];

        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        $shop->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_title),
            'description' => $request->input('meta-description')
        ];
        $shop->address             = [
            'line_1' => $request->input('address-line-1'),
            'line_2' => $request->input('address-line-2'),
            'zip' => $request->input('zip'),
            'country_id' => $request->input('country-id'),
            'district_id' => $request->input('district-id'),
            'division_id' => $request->input('division-id'),
            'thana_id' => $request->input('thana-id'),
        ];
        $shop->status           =  $status;
        $shop->description  = $request->input('description');
        $shop->images_url  = $request->input('image-url');
        
        $shop->save();

        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.shops.edit', $shop->id);
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
        $request->validate([
            'slug' => 'required|max:255|unique:shops,id,'.$id,
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $shop = shop::findOrFail($id); 
        
        $status = $request->input('status') ? $request->input('status') : "active";
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $shop->slug             = $slug;
        $display_name_en = $request->input('display-name-en');
        $shop->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];

        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        $shop->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_title),
            'description' => $request->input('meta-description')
        ];
        $shop->address             = [
            'line_1' => $request->input('address-line-1'),
            'line_2' => $request->input('address-line-2'),
            'zip' => $request->input('zip'),
            'district' => $request->input('district_id'),
            'division' => $request->input('division'),
            'thana' => $request->input('thana')
        ];
        $shop->status           =  $status;
        $shop->description  = $request->input('description');
        $shop->images_url  = $request->input('image-url');
        
        $shop->save();

        Session::flash('message', 'Successfully Updated!');
        return redirect()->route('backend.shops.edit', $shop->id);
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
