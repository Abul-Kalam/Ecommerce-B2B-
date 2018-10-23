<?php

namespace App\Http\Controllers;

use Session;
use App\User;
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

        $this->checkPermission('manage-shops');
        $paginate = config('app.pagenation_count', 3);
        
        $shops = Shop::orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.shop-list', [
            'shops' => $shops,
        ]);

    }




    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $keywords = strtolower($keywords);

        $shops = Shop::where('name', 'like', '%'.$keywords.'%')->paginate(5);

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

        $this->checkPermission('manage-shops');

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
            // 'name' => 'required|unique:shops|max:255',
            // 'business-address-line-1' => 'required|max:255',
            // 'business-address-line-2' => 'required|max:255',
            // 'business-zip' => 'required',
            // 'business-country-id' => 'required',
            // 'business-district-id' => 'required',
            // 'business-division-id' => 'required',
            // 'business-thana-id' => 'required',

            // 'warehouse-address-line-1' => 'required|max:255',
            // 'warehouse-address-line-2' => 'required|max:255',
            // 'warehouse-zip' => 'required',
            // 'warehouse-country-id' => 'required',
            // 'warehouse-district-id' => 'required',
            // 'warehouse-division-id' => 'required',
            // 'warehouse-thana-id' => 'required',

            // 'return-address-line-1' => 'required|max:255',
            // 'return-address-line-2' => 'required|max:255',
            // 'return-zip' => 'required',
            // 'return-country-id' => 'required',
            // 'return-district-id' => 'required',
            // 'return-division-id' => 'required',
            // 'return-thana-id' => 'required',
        ]);
        
        $shop = new Shop();
        
        $status = $request->input('status') ? $request->input('status') : "active";
        $name = $request->input('name');
        $slug = preg_replace('/\s+/u', '-', trim($name));

        $shop->slug             = $slug;
        $shop->name             = strtolower($name);

        $meta_title = $request->input('meta-title');

        $email = $request->input('shop-email-admin');

        $shop_user = User::where('email', $email)->first();
        $user_id = $shop_user->id;

        $meta_keywords = $request->input('meta-keywords');
        $shop->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_title),
            'description' => $request->input('meta-description')
        ];
        $shop->address             = [
            'business_line_1' => $request->input('business-address-line-1'),
            'business_line_2' => $request->input('business-address-line-2'),
            'business_zip' => $request->input('business-zip'),
            'business_country_id' => $request->input('business-country-id'),
            'business_district_id' => $request->input('business-district-id'),
            'business_division_id' => $request->input('business-division-id'),
            'business_thana_id' => $request->input('business-thana-id'),


            'warehouse_line_1' => $request->input('warehouse-address-line-1'),
            'warehouse_line_2' => $request->input('warehouse-address-line-2'),
            'warehouse_zip' => $request->input('warehouse-zip'),
            'warehouse_country_id' => $request->input('warehouse-country-id'),
            'warehouse_district_id' => $request->input('warehouse-district-id'),
            'warehouse_division_id' => $request->input('warehouse-division-id'),
            'warehouse_thana_id' => $request->input('warehouse-thana-id'),

            'return_line_1' => $request->input('return-address-line-1'),
            'return_line_2' => $request->input('return-address-line-2'),
            'return_zip' => $request->input('return-zip'),
            'return_country_id' => $request->input('return-country-id'),
            'return_district_id' => $request->input('return-district-id'),
            'return_division_id' => $request->input('return-division-id'),
            'return_thana_id' => $request->input('return-thana-id'),
        ];
        $shop->status           =  $status;
        $shop->description  = $request->input('description');
        $shop->images_url  = $request->input('image-url');

        
        
        $shop->save();
        $shop->shopusers()->sync($user_id);

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
        $this->checkPermission('manage-shops');
        $shop = shop::with('shopusers')->findOrFail($id);
        $countries = Country::get();
        $divisions = Division::get();
        $districts = District::get();
        $thanas = Thana::get();
        
        return view('backend.pages.shop-edit', [
            'shop' => $shop,
            'countries' => $countries,
            'districts' => $districts,
            'divisions' => $divisions,
            'thanas' => $thanas,
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
            'name' => 'required|max:255|unique:shops,id,'.$id,
           
            'business-address-line-1' => 'required|max:255',
            'business-address-line-2' => 'required|max:255',
            'business-zip' => 'required',
            'business-country-id' => 'required',
            'business-district-id' => 'required',
            'business-division-id' => 'required',
            'business-thana-id' => 'required',

            'warehouse-address-line-1' => 'required|max:255',
            'warehouse-address-line-2' => 'required|max:255',
            'warehouse-zip' => 'required',
            'warehouse-country-id' => 'required',
            'warehouse-district-id' => 'required',
            'warehouse-division-id' => 'required',
            'warehouse-thana-id' => 'required',

            'return-address-line-1' => 'required|max:255',
            'return-address-line-2' => 'required|max:255',
            'return-zip' => 'required',
            'return-country-id' => 'required',
            'return-district-id' => 'required',
            'return-division-id' => 'required',
            'return-thana-id' => 'required',
            
        ]);
        
        $shop = shop::findOrFail($id);
        
        $status = $request->input('status') ? $request->input('status') : "active";
        $name = $request->input('name');
        $slug = preg_replace('/\s+/u', '-', trim($name));

        $shop->slug             = $slug;
        $shop->name             = strtolower($name);


        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        $shop->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_title),
            'description' => $request->input('meta-description')
        ];
        $shop->address             = [
            'business_line_1' => $request->input('business-address-line-1'),
            'business_line_2' => $request->input('business-address-line-2'),
            'business_zip' => $request->input('business-zip'),
            'business_country_id' => $request->input('business-country-id'),
            'business_district_id' => $request->input('business-district-id'),
            'business_division_id' => $request->input('business-division-id'),
            'business_thana_id' => $request->input('business-thana-id'),


            'warehouse_line_1' => $request->input('warehouse-address-line-1'),
            'warehouse_line_2' => $request->input('warehouse-address-line-2'),
            'warehouse_zip' => $request->input('warehouse-zip'),
            'warehouse_country_id' => $request->input('warehouse-country-id'),
            'warehouse_district_id' => $request->input('warehouse-district-id'),
            'warehouse_division_id' => $request->input('warehouse-division-id'),
            'warehouse_thana_id' => $request->input('warehouse-thana-id'),

            'return_line_1' => $request->input('return-address-line-1'),
            'return_line_2' => $request->input('return-address-line-2'),
            'return_zip' => $request->input('return-zip'),
            'return_country_id' => $request->input('return-country-id'),
            'return_district_id' => $request->input('return-district-id'),
            'return_division_id' => $request->input('return-division-id'),
            'return_thana_id' => $request->input('return-thana-id'),
        ];


        $email = $request->input('shop-email-admin');

        $shop_user = User::where('email', $email)->first();
        $user_id = $shop_user->id;

        $shop->status           =  $status;
        $shop->description  = $request->input('description');
        $shop->images_url  = $request->input('image-url');
        
        $shop->save();
        $shop->shopusers()->sync($user_id);
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
