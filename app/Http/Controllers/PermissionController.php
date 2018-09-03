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
        $paginate = config('app.pagenation_count', 3);
        
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

        $permission->name         = $request->input('name');
        $permission->display_name = $request->input('display-name');
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
        
        $permission->name         = $request->input('name');
        $permission->display_name = $request->input('display-name');
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
