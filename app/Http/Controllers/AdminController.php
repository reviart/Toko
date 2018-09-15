<?php

namespace App\Http\Controllers;

use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
    	//diri sendiri

    	//Role::create(['name' => 'admin']);        
    	//Auth::user()->assignRole(['admin', 'employee', 'customers']);

    	/*Permission::create(['name' => 'add post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);*/

        //Auth::user()->givePermissionTo(['add post', 'edit post', 'delete post']);

        //$role = Role::findByName('admin');
        //$role->givePermissionTo(['add post', 'edit post', 'delete post']);

        return "success admin";
    }


}
