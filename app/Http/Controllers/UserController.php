<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Thana;
use App\Country;
use App\Division;
use App\District;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = config('app.pagenation_count', 3);
        
        $users = User::orderBy('created_at', 'DESC')->paginate($paginate);

        // return view('backend.pages.user-list' ,[
        //     'users' => $users,
        // ]);


        return view('backend.pages.user-list', [
            'users' => $users
        ]);
    }


    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $users = User::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.user-list', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $roles = Role::get();
        $countries = Country::get();
        $divisions = Division::get();
        $districts = District::get();
        $thanas = Thana::get();
        return view('backend.pages.user-create', [
            'countries' => $countries,
            'districts' => $districts,
            'divisions' => $divisions,
            'thanas' => $thanas,
            'roles' => $roles
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
            'name' => 'required|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'first-name' => 'required|max:255',
            'last-name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255',

        ]);
        
        $user = new User();
        
        $user->localization     = [
            'en' => [
                'display_name' => $request->input('display-name-en')
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];


        $user->billing_address = [
            'line_1' => $request->input('billing-address-line-1'),
            'line_2' => $request->input('billing-address-line-2'),
            'zip' => $request->input('billing-zip'),
            'district_id' => $request->input('billing-district-id'),
            'division_id' => $request->input('billing-division-id'),
            'thana_id' => $request->input('billing-thana-id'),
        ];

        $shipping_address_line_1 = $request->input('shipping-address-line-1') ? $request->input('shipping-address-line-1') : 
        $request->input('billing-address-line-1');

        $shipping_address_line_2 = $request->input('shipping-address-line-2') ? $request->input('shipping-address-line-2') : 
        $request->input('billing-address-line-2');

        $shipping_zip = $request->input('shipping-zip') ? $request->input('shipping-zip') : 
        $request->input('billing-zip');

        $shipping_district = $request->input('shipping-district-id') ? $request->input('shipping-district-id') : 
        $request->input('billing-district-id');

        $shipping_division = $request->input('shipping-division-id') ? $request->input('shipping-division-id') : 
        $request->input('billing-division-id');

        $shipping_thana = $request->input('shipping-thana-id') ? $request->input('shipping-thana-id') : 
        $request->input('billing-thana-id');


        $user->shipping_address = [
            'line_1' => $shipping_address_line_1,
            'line_2' => $shipping_address_line_2,
            'zip' => $shipping_zip,
            'district_id' => $shipping_district,
            'division_id' =>$shipping_division,
            'thana_id' => $shipping_thana,
        ];

       

       

        $user->first_name  = $request->input('first-name');
        $user->last_name  = $request->input('last-name');
        $user->name  = $request->input('name');
        $user->about  = $request->input('about');
        $user->email= $request->input('email');
        $user->avatar_url  = $request->input('avatar-url');
        $password = $request->input('password');
        $user->password = Hash::make($password) ;
        
        $user->last_login_at = Carbon::now()->toDateTimeString() ;
        $user->last_login_ip = $request->getClientIp() ;
        
        
        
        $user->save();
        $user->roles()->sync([$request->input('role')]);
        Session::flash('message', 'Successfully Updated!');
        return redirect()->route('backend.users.edit', $user->id);
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
        $user = User::findOrFail($id);

        $roles = Role::get();
        $countries = Country::get();
        $divisions = Division::get();
        $districts = District::get();
        $thanas = Thana::get();
        return view('backend.pages.user-edit', [
            'user' => $user,
            'countries' => $countries,
            'districts' => $districts,
            'divisions' => $divisions,
            'thanas' => $thanas,
            'roles' => $roles
            
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
            'name' => 'required|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'first-name' => 'required|max:255',
            'last-name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,id,'.$id,

        ]);
        
        $user =  User::findOrFail($id);
        
        $user->localization     = [
            'en' => [
                'display_name' => $request->input('display-name-en')
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];


        $user->billing_address = [
            'line_1' => $request->input('billing-address-line-1'),
            'line_2' => $request->input('billing-address-line-2'),
            'zip' => $request->input('billing-zip'),
            'district_id' => $request->input('billing-district-id'),
            'division_id' => $request->input('billing-division-id'),
            'thana_id' => $request->input('billing-thana-id'),
        ];

        $shipping_address_line_1 = $request->input('shipping-address-line-1') ? $request->input('shipping-address-line-1') : 
        $request->input('billing-address-line-1');

        $shipping_address_line_2 = $request->input('shipping-address-line-2') ? $request->input('shipping-address-line-2') : 
        $request->input('billing-address-line-2');

        $shipping_zip = $request->input('shipping-zip') ? $request->input('shipping-zip') : 
        $request->input('billing-zip');

        $shipping_district = $request->input('shipping-district-id') ? $request->input('shipping-district-id') : 
        $request->input('billing-district-id');

        $shipping_division = $request->input('shipping-division-id') ? $request->input('shipping-division-id') : 
        $request->input('billing-division-id');

        $shipping_thana = $request->input('shipping-thana-id') ? $request->input('shipping-thana-id') : 
        $request->input('billing-thana-id');


        $user->shipping_address = [
            'line_1' => $shipping_address_line_1,
            'line_2' => $shipping_address_line_2,
            'zip' => $shipping_zip,
            'district_id' => $shipping_district,
            'division_id' =>$shipping_division,
            'thana_id' => $shipping_thana,
        ];

       

       

        $user->first_name  = $request->input('first-name');
        $user->last_name  = $request->input('last-name');
        $user->name  = $request->input('name');
        $user->about  = $request->input('about');
        $user->email= $request->input('email');
        $user->avatar_url  = $request->input('avatar-url');
        $password = $request->input('password');
        $user->password = Hash::make($password) ;
        
        $user->last_login_at = Carbon::now()->toDateTimeString() ;
        $user->last_login_ip = $request->getClientIp() ;
        
        
        
        $user->save();
        $user->roles()->sync([$request->input('role')]);
        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.users.edit', $user->id);
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
