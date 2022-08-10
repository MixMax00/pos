@extends('layouts.pos_master')

@section('title')
 Add User
@endsection




@section('content')
<form action="{{ route('adduser.store') }}" method="POST">
@csrf
<div class="row mb-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card p-3">
           
               
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" id="firstName" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Last Name Name</label>
                            <input type="text" name="last_name" id="lastName" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label></label>
                            <input type="checkbox" name="status" id="status" value="active"/> Is Active
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>


<div class="row mb-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="user_name" id="userName" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="last_name" id="password" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Confiram Password</label>
                            <input type="password" name="confirman_password" id="confiramPassword" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role_id" class="form-control">
                                @foreach($roles as $role)
                                <option>{{  $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="row mb-3 text-align-center">
   <div class="col-12">
    <input type="submit" value="Save" class="btn btn-primary"/>
   </div>
</div>

</form>




@endsection
