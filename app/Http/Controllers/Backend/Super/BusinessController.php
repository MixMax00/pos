<?php

namespace App\Http\Controllers\Backend\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\Business;
use App\Models\User;
use Image;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validation = Validator::make($request->all(), [
        //     'business_name'=> 'required',
        //     'start_date' => 'required',
        //     'currency' => 'required',
        //     'website' => 'required',
        //     'mobile' => 'required|min:11|numeric',
        //     // 'alternate_number' => 'required|min:11|numeric',
        //     'division' => 'required',
        //     'district' => 'required',
        //     'upzila' => 'required',
        //     'zip_code' => 'required',
        //     'landarea' => 'required',
        //     'surname' => 'required',
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'name' => 'required|string|max:255|unique:users',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' =>'required|string|min:8|confirmed',

        // ]);

        if($request->hasFile('logo')){
            $main_file = $request->file('logo');
            $main_file_ext = $main_file->getClientOriginalExtension();
            $logo_name = time().'.'.$main_file_ext;
            $logo_path = public_path('Backend/upload/'.$logo_name);
            $img = Image::make($main_file->getRealPath())->resize(300, 200)->save($logo_path,50);


            $user = User::create([
                    'name' =>$request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                $role = Role::find(2);
                $user->assignRole($role);

             if ($user->id) {
                Business::create([
                    'user_id' => $user->id,
                    'start_date' => $request->start_date,
                    'currency' => $request->currency,
                    'website' => $request->website,
                    'mobile' => $request->mobile,
                    'alternate_number' => $request->alternate_number,
                    'division' => $request->division,
                    'district' => $request->district,
                    'upzila' => $request->upzila,
                    'zip_code' => $request->zip_code,
                    'landarea' => $request->landarea,
                    'logo' => $logo_name,
                    'surname' => $request->surname,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                ]);  
             }

            Toastr::success('Post added successfully');
            return redirect()->back();  
        }else{
            return 'img pai nai';
        }


        // if ($validation->passes()) {
            

            
        // }else{
        //     $messages = $validation->messages();

        //     foreach ($messages->all() as $message)
        //     {
        //         Toastr::error($message, 'Failed', ['timeOut' => 10000]);

        //     }
        //     return redirect()->back()->withErrors($validation);
        // }


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
    public function update(Request $request, $id)
    {
        //
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
