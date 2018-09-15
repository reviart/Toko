<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('home', compact('users'));

        //roles table
        //create role
        /*Role::create(['name' => 'admin']);
        Role::create(['name' => 'employee']);
        Role::create(['name' => 'customers']);*/

        // model_has_roles table
        // assign admin for user X (assignRole(['writer', 'admin']))
        // Auth::user()->assignRole('customers');
        // return "success";
        
        //check user x has role 'admin or etc'
        /*if (Auth::user()->hasRole('admin')) {
            return "dia admin";
        }else{
            return "dia bukan admin";
        }*/

        //remove role 'admin' for user x
        //Auth::user()->removeRole('user');

        //sync or update role from writer to user
        //Auth::user()->syncRoles(['writer', 'user']);

        //-----------------------------------------------------------------------------------
        //permissions table
        //create permission
        /*Permission::create(['name' => 'add post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);*/

        //model_has_permissions table
        //give permission edit&delete to user X
        //Auth::user()->givePermissionTo(['edit post', 'delete post']);

        //check user x has x permission 
        //dd(Auth::user()->hasPermissionTo('edit post')); hasPermissionTo(Permission::find(1)->id);
        //check user x has more permission
        //dd(Auth::user()->hasAllPermissionTo('edit post', 'add post'));

        //revoke permission for user x
        //Auth::user()->revokePermissionTo(['add post', 'edit post', 'delete post']);

        //sync from edit to delete
        //Auth::user()->syncPermissions(['edit post', 'delete post']);

        //-----------------------------------------------------------------------------------
        //role_has_permissions table
        //give permission to role(admin)
        //$role = Role::findByName('admin'); //or by id find(1);
        //Role::findByName('admin')->givePermissionTo(['add post', 'edit post', 'delete post']);

        //sync (role)admin's permission
        //Role::findByName('admin')->syncPermissions(['edit post', 'delete post']);

        //revoke (role)admin's permission
        //Role::findByName('admin')->revokePermissionTo(['add post', 'edit post', 'delete post']);

        //-------------------
        //get all roles name by guard or model, not auth
        //$roles = $user->getRoleNames();

        /*$user = Auth::user();
        if ($user->hasRole('admin')) {
            return "dia admin";
        }
        else if ($user->hasRole('employee')) {
            return "dia employee";
        }
        else if ($user->hasRole('customers')) {
            return "dia customers";
        }
        else{
            return "sistem jebol";
        }        */

        //return "success";
    }
}
