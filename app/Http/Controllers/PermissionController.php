<?php
namespace App\Http\Controllers;

use Session;
use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->checkPermission('manage-users');
        
        $paginate = config('app.pagenation_count', 17);
        
        $permissions = Permission::orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.permission-list', [
            'permissions' => $permissions,
        ]);
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');
        $permissions = Permission::where('display_name', 'like', '%'.$keywords.'%')->paginate(2);

        return view('backend.pages.permission-list', [
            'permissions' => $permissions
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
        return view('backend.pages.permission-create');
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
            'display-name' => 'required|max:255',
            'name' => 'required|unique:permissions|max:255'
        ]);

        $permission = new Permission();
        
        $name = $request->input('name');

        $name = preg_replace('/\s+/u', '-', trim($name));


        $display_name = $request->input('display-name');

        $permission->name         = strtolower($name);
        $permission->display_name = strtolower($display_name);
        $permission->description  = $request->input('description');
        $permission->save();

        Session::flash('message', 'Successfully Created!');

        return redirect()->route('backend.permissions.edit', $permission->id);
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
        $permission = Permission::findOrFail($id);

        return view('backend.pages.permission-edit', [
            'permission' => $permission,
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
            'name' => 'required|max:255|unique:permissions,id,'.$id
        ]);
        $permission = Permission::findOrFail($id);
        
        $name = $request->input('name');

        $name = preg_replace('/\s+/u', '-', trim($name));
        $display_name = $request->input('display-name');

        $permission->name         = strtolower($name);
        $permission->display_name = strtolower($display_name);
        $permission->description  = $request->input('description');
        $permission->save();

        Session::flash('message', 'Successfully Updated!');
        
        return redirect()->route('backend.permissions.edit', $permission->id);
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
