<?php

namespace App\Http\Controllers;

use Session;
use App\Role;
use Carbon\Carbon;
use App\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->checkPermission('manage-users');
        $paginate = config('app.pagenation_count', 5);

        $roles = Role::orderBy('created_at', 'DESC')->paginate($paginate);
        
        return view('backend.pages.role-list', [
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->checkPermission('manage-users');
        
        $permissions = Permission::get();

        return view('backend.pages.role-create', [
            'permissions' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');
        $roles = Role::where('display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.role-list', [
            'roles' => $roles
        ]);
       
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'display-name' => 'required|max:255',
            'name' => 'required|unique:roles|max:255'
        ]);
    
        $role = new Role();
        $name = $request->input('name');
        $display_name = $request->input('display-name');

        $role->name         = strtolower($name);
        $role->display_name = strtolower($display_name);
        $role->description  = $request->input('description');
        $role->save();

        Session::flash('message', 'Successfully Created!');

        $role->permissions()->sync($request->input('permissions'));


        return redirect()->route('backend.roles.edit', $role->id);
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

        $this->checkPermission('manage-users');
        $role = Role::findOrFail($id);

        $permissions = Permission::get();
        
        return view('backend.pages.role-edit', [
            'role' => $role,
            'permissions' => $permissions
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
            'display-name' => 'required|max:255',
            'name' => 'required|max:255|unique:roles,id,'.$id
        ]);

        $role = Role::findOrFail($id);
        
        $name = $request->input('name');
        $display_name = $request->input('display-name');

        $role->name         = strtolower($name);
        $role->display_name = strtolower($display_name);
        $role->description  = $request->input('description');
        $role->save();

        Session::flash('message', 'Successfully Updated!');
        
        $role->permissions()->sync($request->input('permissions'));

        return redirect()->route('backend.roles.edit', $role->id);
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
