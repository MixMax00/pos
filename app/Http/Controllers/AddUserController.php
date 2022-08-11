<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\UserInfo;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use Carbon\Carbon;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_info = UserInfo::with('user_info','user_role')->get();
        return view('Backend.UserInfo.index', compact('user_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $roles = Role::all();
       return view('Backend.UserInfo.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id = User::create([
            'name'=>$request->user_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now(),
        ]);

        UserInfo::create([
            'user_id'=>$user_id->id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'status'=>$request->status,
            'role_id' => $request->role_id,
            'created_at'=>Carbon::now(),
        ]);

        $user_id->assignRole($request->role_id);

        Toastr::success("User Insert Successfully!!");

        return redirect()->route('adduser.index');

        
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
       $roles = Role::all();
       $edit = UserInfo::find($id);
       $user =  User::where('id',$edit->user_id)->first();
       return view('Backend.UserInfo.edit', compact('roles','edit','user'));
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
        $user_info = UserInfo::find($id);
        $user = User::where('id',$user_info->user_id)->first();
        User::where('id',$user->id)->update([
            'name'=>$request->user_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'updated_at'=>Carbon::now(),
        ]);

        UserInfo::where('id',$id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'status'=>$request->status,
            'role_id' => $request->role_id,
            'created_at'=>Carbon::now(),
        ]);

        $role = Role::where('id',$user_info->role_id)->first();
        
        if ($user) {
            $user->removeRole($role);
        }


        $user->assignRole($request->role_id);

        Toastr::success("User Updated Successfully!!");

        return redirect()->route('adduser.index');
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
