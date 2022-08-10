<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminDashboardController extends Controller
{
    public function superAdmin(){
        return view('Backend.Superadmin.Dashboard');
    }
}
