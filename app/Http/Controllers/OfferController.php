<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "offer";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.offer-create');
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
        
        $offer = new Offer();
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $offer->slug             = $slug;
        $offer->localization     = [
            'en' => [
                'display_name' => $request->input('display-name-en')
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $offer->options            = null;
        $offer->meta             = [
            'title' => $request->input('meta-title'),
            'keywords' => $request->input('meta-keywords'),
            'description' => $request->input('meta-description')
        ];
        $offer->description  = $request->input('description');
        $offer->image_url  = $request->input('feature-image-url');
        
        $offer->save();

        return redirect()->route('backend.offers.edit', $offer->id);
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
        //
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
