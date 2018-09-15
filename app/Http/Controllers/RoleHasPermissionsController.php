<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleHasPermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin|user']);
    }

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
        //return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
          'role_name' => 'required|string',
          'permission_name' => 'required|string'
        ]);*/

        $role_name = $request->get('role_name');
        $permission_name = $request->get('permission_name');

        Role::findByName($role_name)->givePermissionTo($permission_name);

        return "success";
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
    public function update(Request $request, $permission_name_before)
    {        
        $role_name = $request->get('role_name');
        $permission_name = $request->get('permission_name');

        Role::findByName($role_name)->syncPermissions([$permission_name_before, $permission_name]);
        return "success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $role_name = $request->get('role_name');
        $permission_name = $request->get('permission_name');

        Role::findByName($role_name)->revokePermissionTo($permission_name);
        return "success";
    }
}
