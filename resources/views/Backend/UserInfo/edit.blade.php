@extends('layouts.pos_master')

@section('title')
 Update User
@endsection




@section('content')
<form action="{{ route('adduser.update', $edit->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row mb-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card p-3">
           
               
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" id="firstName" value="{{ $edit->first_name }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Last Name Name</label>
                            <input type="text" name="last_name" value="{{ $edit->last_name }}" id="lastName" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" id="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label></label>
                            <input type="checkbox" {{ $edit->status == "active" ? 'checked' : ' ' }} name="status" id="status" value="active"/> Is Active
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
                            <input type="text" name="user_name" value="{{ $user->name }}" id="userName" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control"/>
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
                                <option {{ $role->id == $edit->role_id ? 'selected' : ' ' }}  value="{{ $role->id }}">{{  $role->name }}</option>
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
