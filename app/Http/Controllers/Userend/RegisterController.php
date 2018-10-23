<?php

namespace App\Http\Controllers\Userend;

use Session;
use Carbon\Carbon;
use App\Thana;
use App\Country;
use App\Division;
use App\District;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/backend/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create()
    {
        return view('userend.pages.register', [
          
        ]);
    }


    public function userendstore(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|max:255'
        ]);
        
        $user = new User();
        
       
        $name = $request->input('name');
        $user->name             = strtolower($name);
        $user->email  = $request->input('email');
        $user->phone_number  = $request->input('phone-number');
        $user->password  = bcrupt($request->input('password'));

        
        
        $user->save();
        // Session::flash('message', 'Successfully Created!');

        return "ok";

       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function add()
    // {
    //    return " hello";
    // }

    // public function resgisterUser() {
    //     return "working";
    // }
}
