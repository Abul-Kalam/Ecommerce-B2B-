<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $preferences = Preference::all();
        $backend_theme = $preferences->where('name', 'backend-theme')->first();
        $backend_layout = $preferences->where('name', 'backend-layout')->first();

        // $featuredImage = $preferences->where('name', 'featured-image')->first();
        
        
        
        return view('backend.pages.preference-edit', [
            'backend_theme' => $backend_theme,
            'backend_layout' => $backend_layout,
        ]);
    }

    public function update(Request $request)
    {
        // return 'Working';
        $backend_theme = $request->input('backend-theme');
        $backend_layout = $request->input('backend-layout');
        
        
        

        Preference::setValue('backend-theme', $backend_theme);
        Preference::setValue('backend-layout', $backend_layout);
        

        // return $topLeadBoxBgColor;

        return redirect()->route('backend.preferences.edit');
        
    }

  
}
