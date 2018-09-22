<?php

namespace App\Http\Controllers;

use Session;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->checkPermission('read-category');

        $paginate = config('app.pagenation_count', 3);
        
        $categories = Category::orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.category-list' ,[
            'categories' => $categories,
        ]);
    }



    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $categories = Category::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.category-list', [
            'categories' => $categories
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('create-category');
        $categories = Category::where('parent_id', '=', 0)->get();
        return view('backend.pages.category-create', [
            'categories' => $categories
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
            'slug' => 'required|unique:categories|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $category = new Category();
        
        $parent_id = $request->input('parent_id') ? $request->input('parent_id') : 0;
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $category->slug             = $slug;

        $display_name_en = $request->input('display-name-en');
        $category->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $category->options            = null;

        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');

        $category->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_keywords),
            'description' => $request->input('meta-description')
        ];
        $category->description  = $request->input('description');
        $category->parent_id = $parent_id;
        $category->image_url             = [
            'logo' => $request->input('logo-url'),
            'banner' => $request->input('banner-url'),
            'icon' => $request->input('icon-url'),
            'thumbnail' => $request->input('thumbnail-url')
        ];
        
        $category->save();

        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.categories.edit', $category->id);
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
        $this->checkPermission('update-category');

        $category = Category::findOrFail($id);

        $categories = Category::where('parent_id', '=', 0)->get();

        return view('backend.pages.category-edit', [
            'category' => $category,
            'categories' => $categories
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
            'slug' => 'required|max:255|unique:categories,id,'.$id,
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255'
        ]);
        
        $category = Category::findOrFail($id);
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $category->slug             = $slug;

        $display_name_en = $request->input('display-name-en');

        $category->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        $category->options            = null;

        $meta_title = $request->input('meta-title');
        $meta_keywords = $request->input('meta-keywords');
        
        $category->meta             = [
            'title' => strtolower($meta_title),
            'keywords' => strtolower($meta_keywords),
            'description' => $request->input('meta-description')
        ];
        $category->description  = $request->input('description');
        $category->image_url             = [
            'logo' => $request->input('logo-url'),
            'banner' => $request->input('banner-url'),
            'icon' => $request->input('icon-url'),
            'thumbnail' => $request->input('thumbnail-url')
        ];
        
        $category->save();
        Session::flash('message', 'Successfully Updated!');
        return redirect()->route('backend.categories.edit', $category->id);
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
