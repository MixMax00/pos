@extends('layouts.pos_master')

@section('title')
 Add Role
@endsection




@section('content')
<form action="{{ route('role.store') }}" method="POST">
@csrf
<div class="row mb-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card p-3">   
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" name="name" id="name" class="form-control"/>
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
                        <label>User</label>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <input type="checkbox" name="add_user" value="adduser" id="lastName" class="custom-checkbox"/><span class="pl-2"> Add User </span>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="edit_user" value="edituser" id="lastName" class="custom-checkbox"/><span class="pl-2"> Edit User </span>
                    </div>
                    <div class="form-group">
                       <input type="checkbox" name="delete_user"  value="deleteuser" id="lastName" class="custom-checkbox"/> <span class="pl-2"> Delete User </span>
                    </div>
                    <div class="form-group">
                       <input type="checkbox" name="view_user" value="viewuser" id="lastName" class="custom-checkbox"/> <span class="pl-2"> View User </span>
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
                        <label>Role</label>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <input type="checkbox" name="add_user" value="adduser" id="lastName" class="custom-checkbox"/><span class="pl-2"> Add Role </span>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="edit_user" value="edituser" id="lastName" class="custom-checkbox"/><span class="pl-2"> Edit Role </span>
                    </div>
                    <div class="form-group">
                       <input type="checkbox" name="delete_user"  value="deleteuser" id="lastName" class="custom-checkbox"/> <span class="pl-2"> Delete Role </span>
                    </div>
                    <div class="form-group">
                       <input type="checkbox" name="view_user" value="viewuser" id="lastName" class="custom-checkbox"/> <span class="pl-2"> View Role </span>
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
                        <label>Product</label>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <input type="checkbox" name="add_user" value="adduser" id="lastName" class="custom-checkbox"/><span class="pl-2"> Add Product </span>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="edit_user" value="edituser" id="lastName" class="custom-checkbox"/><span class="pl-2"> Edit Product </span>
                    </div>
                    <div class="form-group">
                       <input type="checkbox" name="delete_user"  value="deleteuser" id="lastName" class="custom-checkbox"/> <span class="pl-2"> Delete Product </span>
                    </div>
                    <div class="form-group">
                       <input type="checkbox" name="view_user" value="viewuser" id="lastName" class="custom-checkbox"/> <span class="pl-2"> View Product </span>
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
