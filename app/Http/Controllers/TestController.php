<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class TestController extends Controller
{
    
    public function testRoute()
    {
        // $role = Role::create(['name' => 'User']);
        // $permission = Permission::create(['name' => 'View User']);

        // $permission = Permission::find(5);
        // $role = Role::find(1);
        // $user = User::find(1);
        // $user->assignRole($role);
    }
}
