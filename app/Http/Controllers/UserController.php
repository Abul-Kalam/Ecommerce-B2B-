<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\User;
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
        return "ueser";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.user-create');
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
            'email' => 'required|max:255',
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
        $user->first_name  = $request->input('first-name');
        $user->last_name  = $request->input('last-name');
        $user->name  = $request->input('name');
        $user->about  = $request->input('about');
        $user->email= $request->input('email');
        $user->avatar_url  = $request->input('avatar-url');
        $password = $request->input('password');
        $user->password = Hash::make($password) ;
        // $user->update([
        //     'last_login_at' => Carbon::now()->toDateTimeString(),
        //     'last_login_ip' => $request->getClientIp()
        // ]);

        $user->last_login_at = Carbon::now()->toDateTimeString() ;
        $user->last_login_ip = $request->getClientIp() ;
        
        
        
        $user->save();

        Session::flash('message', 'Successfully Created!');
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

        return view('backend.pages.user-edit', [
            'user' => $user,
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
            'email' => 'required|max:255',

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
        $user->first_name  = $request->input('first-name');
        $user->last_name  = $request->input('last-name');
        $user->name  = $request->input('name');
        $user->about  = $request->input('about');
        $user->email= $request->input('email');
        $user->avatar_url  = $request->input('avatar-url');
        if ($request->input('password') )
        {
            $user->password  = Hash::make('password') ;
        }
        else {
            $user->password  = $user->password;
        }
        // $user->update([
        //     'last_login_at' => Carbon::now()->toDateTimeString(),
        //     'last_login_ip' => $request->getClientIp()
        // ]);

        $user->last_login_at = Carbon::now()->toDateTimeString() ;
        $user->last_login_ip = $request->getClientIp() ;
        
        
        
        $user->save();

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
