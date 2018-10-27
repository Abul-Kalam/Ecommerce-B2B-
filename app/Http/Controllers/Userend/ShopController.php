<?php

namespace App\Http\Controllers\Userend;

use Session;
use App\User;
use App\Shop;
use App\Thana;
use App\Country;
use App\Division;
use App\District;
use App\Role;
use Illuminate\Support\Facades\Hash;
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

        // return view('backend.pages.shop-list', [
        //     'shops' => $shops,
        // ]);

        // return response()->json([
        //     'shops' => $shops,
        //     'massage' =>'shops Successfully Created '
        // ], 200);
    }


    // public function test()
    // {
    //     $shops = Shop::orderBy('created_at', 'DESC')->get();
    //     return response()->json([
    //         'shops' =>  $shops,
    //         'massage' =>'shops Successfully Created '
    //     ], 200);
    // }



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

        // $this->checkPermission('manage-shops');

        // $countries = Country::get();
        // $divisions = Division::get();
        // $districts = District::get();
        // $thanas = Thana::get();
        // return view('userend.pages.shop-register' ,[
        //     'countries' => $countries,
        //     'districts' => $districts,
        //     'divisions' => $divisions,
        //     'thanas' => $thanas,
        // ]);

        // return view('userend.pages.shop-register', [
          
        //     ]);
    }
    
    public function register()
    {

        // $this->checkPermission('manage-shops');

        $countries = Country::get();
        $divisions = Division::get();
        $districts = District::get();
        $thanas = Thana::get();
        return view('userend.pages.shop-register' ,[
            'countries' => $countries,
            'districts' => $districts,
            'divisions' => $divisions,
            'thanas' => $thanas,
        ]);

        // return view('userend.pages.shop-register', [
          
        //     ]);
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
            'name' => 'required',
            'shop-name' => 'required|unique:shops|max:255',
            'phone-number' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'country-id' => 'required|max:255',
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

        $user = new User();


        $user->name  = $request->input('name');
        $user->phone_number  = $request->input('phone-number');
        $password = $request->input('password');
        $user->password = Hash::make($password) ;
        $user->email  = $request->input('email');

        $issaved =  $user->save();

        $user->roles()->sync([5]);

        $status = $request->input('status') ? $request->input('status') : "active";
        $name = $request->input('shop-name');
        $slug = preg_replace('/\s+/u', '-', trim($name));
        
        $shop->slug             = $slug;
        $shop->name             = strtolower($name);
        //$meta_title = $request->input('meta-title');
        $shop->country_id  = $request->input('country-id');

        // $shop_user = User::where('email', $email)->first();

        // if ($shop_user) {
        //         $user_id = $shop_user->id;
        // }
        // else {  
        //     Session::flash('message', 'register!');
        //     return view('userend.pages.register', [
          
        //         ]);
        // }
       
        
        // $meta_keywords = $request->input('meta-keywords');
        // $shop->meta             = [
        //     'title' => strtolower($meta_title),
        //     'keywords' => strtolower($meta_title),
        //     'description' => $request->input('meta-description')
        // ];
        // $shop->address             = [
        //     'business_line_1' => $request->input('business-address-line-1'),
        //     'business_line_2' => $request->input('business-address-line-2'),
        //     'business_zip' => $request->input('business-zip'),
        //     'business_country_id' => $request->input('business-country-id'),
        //     'business_district_id' => $request->input('business-district-id'),
        //     'business_division_id' => $request->input('business-division-id'),
        //     'business_thana_id' => $request->input('business-thana-id'),


        //     'warehouse_line_1' => $request->input('warehouse-address-line-1'),
        //     'warehouse_line_2' => $request->input('warehouse-address-line-2'),
        //     'warehouse_zip' => $request->input('warehouse-zip'),
        //     'warehouse_country_id' => $request->input('warehouse-country-id'),
        //     'warehouse_district_id' => $request->input('warehouse-district-id'),
        //     'warehouse_division_id' => $request->input('warehouse-division-id'),
        //     'warehouse_thana_id' => $request->input('warehouse-thana-id'),

        //     'return_line_1' => $request->input('return-address-line-1'),
        //     'return_line_2' => $request->input('return-address-line-2'),
        //     'return_zip' => $request->input('return-zip'),
        //     'return_country_id' => $request->input('return-country-id'),
        //     'return_district_id' => $request->input('return-district-id'),
        //     'return_division_id' => $request->input('return-division-id'),
        //     'return_thana_id' => $request->input('return-thana-id'),
        // ];
        // $shop->status           =  $status;
        // $shop->description  = $request->input('description');
        // $shop->images_url  = $request->input('image-url');


        // $issaved = $shop->save();
        //  $shop->shopusers()->sync($user->id);

        //  if ($issaved) {
        //     return redirect('userend/login');
        // } else {
        //     return "you are not regester";
        // }

        return $shop;

       
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
