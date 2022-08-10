@extends('layouts.pos_master')


@section('title')

 User Manage

@endsection

@section('header')
   <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Super Admin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('super.index') }}">All Busisenss</a></li>
          <li class="breadcrumb-item active">Manage User</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
@endsection



@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
		 <div class="card-header">
		 	<h5>User Manage</h5> 
		 </div>
		 <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
           
                      <th style="width: 20%">
                          User Name
                      </th>
                      <th style="width: 30%">
                          User Email
                      </th>
                      <th>
                          Role
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                    <tr>
                        <td>
                            <a>
                                {{ $user->name }}
                            </a>
                            <br/>
                            <small>
                               {{ $user->created_at->format('d-M-y') }}
                            </small>
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                           user
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm mb-1" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Update Password
                            </a>
                            <a class="btn btn-danger btn-sm mb-1" href="{{ route('user.dashboard', ['id'=>$user->id]) }}">
                                <i class="fas fa-trash">
                                </i>
                                Login Without Password
                            </a>
                        </td>
                    </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
	</div>
</div>
@endsection