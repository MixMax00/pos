<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index($id = null)
    {

        if ($id) {
            $userName = User::find($id);
            return view('Backend.User.Home.Dashboard',compact('userName'));
        }else{
           return view('Backend.User.Home.Dashboard');
        }
    }
}
