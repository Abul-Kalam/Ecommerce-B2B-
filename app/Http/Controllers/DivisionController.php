<?php

namespace App\Http\Controllers;

use Session;
use App\Country;
use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $this->checkPermission('read-division');
        $paginate = config('app.pagenation_count', 3);
        
        $divisions = Division::with('country')->orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.division-list' ,[
            'divisions' => $divisions,
        ]);
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $divisions = Division::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.division-list', [
            'divisions' => $divisions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $this->checkPermission('create-division');
        $countries = Country::get();
        return view('backend.pages.division-create' , [
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
            'slug' => 'required|unique:divisions|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'country-id' => 'required'
        ]);
        
        $division = new Division();
        
        $display_name_en = $request->input('display-name-en');

        $division->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
       

        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));
        
        $division->slug  =  $slug;

        $division->country_id  = $request->input('country-id');

      

        $division->save();
        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.divisions.edit', $division->id);

       
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
        $this->checkPermission('update-division');
        
        $division = Division::findOrFail($id);
        $countries = Country::get();
        return view('backend.pages.division-edit' , [
            'countries' => $countries,
            'division' => $division,
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
            'slug' => 'required|max:255|unique:divisions,id,'.$id,
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'country-id' => 'required'
        ]);
        
        $division = Division::findOrFail($id);
        
        
        $display_name_en = $request->input('display-name-en');

        $division->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
       

        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));
        
        $division->slug  =  $slug;

        $division->country_id  = $request->input('country-id');

      

        $division->save();
        Session::flash('message', 'Successfully Update!');
        return redirect()->route('backend.divisions.edit', $division->id);
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
