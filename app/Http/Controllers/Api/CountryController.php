<?php

namespace App\Http\Controllers\Api;

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
        $paginate = config('app.pagenation_count', 3);
        
        $countries = Country::orderBy('created_at', 'DESC')->paginate($paginate);

        return response()->json([
            'countries' => $countries,
            'massage' =>'Countries Successfully Created '
        ], 200);
    }


    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $countries = Country::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.country-list', [
            'countries' => $countries
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'iso2' => 'required|unique:countries|max:2',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $country = new Country();
        
        $display_name_en = $request->input('display-name-en');

        $country->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
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
        
        $iso2 = $request->input('iso2');
        $country->iso2  = strtolower($iso2);

        $country->image_urls             = [
            'currency_local' => $request->input('currency-local'),
            'currency_global' => $request->input('currency-global'),
            'currency_alternative' => $request->input('currency-alternative'),
        ];
        
        $country->sell_status = $request->input('sell-status');
        $country->buy_status = $request->input('buy-status');

        $country->save();

        // Session::flash('message', 'Successfully Created!');
        // return redirect()->route('backend.countries.edit', $country->id);

        return response()->json([
            'massage' =>'Countries Successfully Store '
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

        $request->validate([
            'iso2' => 'required|max:255|unique:countries,id,'.$id,
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);

        $country = Country::findOrFail($id);
        
        $display_name_en = $request->input('display-name-en');

        $country->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
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
        
        $iso2 = $request->input('iso2');
        $country->iso2  = strtolower($iso2);

        $country->image_urls             = [
            'currency_local' => $request->input('currency-local'),
            'currency_global' => $request->input('currency-global'),
            'currency_alternative' => $request->input('currency-alternative'),
        ];
        $country->sell_status = $request->input('sell-status');
        $country->buy_status = $request->input('buy-status');

        $country->save();

        return response()->json([
            'massage' =>'Countries Successfully Update'
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
