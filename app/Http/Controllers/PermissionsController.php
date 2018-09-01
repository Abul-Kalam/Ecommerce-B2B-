<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'display_name' => 'required|max:255',
            'name' => 'required|unique:permissions|max:255'
        ]);

        $permission = new Permission();

        $permission->name         = $request->input('name');
        $permission->display_name = $request->input('display_name');
        $permission->description  = $request->input('description');
        $permission->save();

        Session::flash('message', 'Successfully Created!');

        return redirect()->route('permissions.edit', $permission->id);
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
        $request->validate([
            'display_name' => 'required|max:255',
            'name' => 'required|max:255|unique:permissions,id,'.$id
        ]);
        $permission = Permission::findOrFail($id);
        
        $permission->name         = $request->input('name');
        $permission->display_name = $request->input('display_name');
        $permission->description  = $request->input('description');
        $permission->save();

        Session::flash('message', 'Successfully Updated!');
        
        return redirect()->route('permissions.edit', $permission->id);
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
