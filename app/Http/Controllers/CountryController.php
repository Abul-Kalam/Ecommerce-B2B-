<?php

namespace App\Http\Controllers;

use Session;
use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hello";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.country-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'slug' => 'required|unique:categories|max:255',
        //     'display-name-en' => 'required|max:255',
        //     'display-name-bn' => 'required|max:255'
        // ]);
        
        $country = new Country();
        
        $country->localization     = [
            'en' => [
                'display_name' => $request->input('display-name-en')
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $country->currency             = [
            'local' => $request->input('local'),
            'global' => $request->input('global'),
            'alternative' => $request->input('alternative')
        ];
        
        $country->iso2  = $request->input('iso2');

        $country->image_url             = [
            'currency_url' => $request->input('currency-url'),
        ];
        
        $sell_status = $request->input('sell-status') ? $request->input('sell-status') : "true";
        $buy_status = $request->input('buy-status') ? $request->input('buy-status') : "true";

        $country->save();

        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.countries.edit', $country->id);
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
        $country = Country::findOrFail($id);

        return view('backend.pages.country-edit' ,[
            'country' => $country,
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
