<?php

namespace App\Http\Controllers;

use Session;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = config('app.pagenation_count', 3);
        
        $tags = Tag::orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.tag-list', [
            'tags' => $tags,
        ]);
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');
        $tags = tag::where('slug', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.tag-list', [
            'tags' => $tags
        ]);
       
    }


  


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.tag-create');
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
            'slug' => 'required|unique:categories|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $tag = new Tag();
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $tag->slug             = $slug;
        $display_name_en = $request->input('display-name-en');
        $tag->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        $tag->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_keywords),
            'description' => $request->input('meta-description')
        ];
        $tag->description  = $request->input('description');
        
        $tag->save();

        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.tags.edit', $tag->id);
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
        $tag = Tag::findOrFail($id);

        return view('backend.pages.tag-edit', [
            'tag' => $tag,
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
            'slug' => 'required|unique:categories|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $tag = Tag::findOrFail($id);
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $tag->slug             = $slug;
        $display_name_en = $request->input('display-name-en');
        $tag->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        $tag->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_keywords),
            'description' => $request->input('meta-description')
        ];
        $tag->description  = $request->input('description');
        
        $tag->save();
        Session::flash('message', 'Successfully Updated!');
        return redirect()->route('backend.tags.edit', $tag->id);
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
