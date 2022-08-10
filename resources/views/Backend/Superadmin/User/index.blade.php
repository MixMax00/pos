@extends('Backend.Superadmin.Dashboard')


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
          <li class="breadcrumb-item active">All Business</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
@endsection


@section('admin')

<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
    		<div class="card-header d-flex d-lg-flex justify-content-end">
    		 	<a href="{{ route('super.create') }}" class="btn-sm btn btn-primary"><i class="fas fa-plus"></i></a>
    		</div>
    		<div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                      <tr>
                          <th style="width: 1%">
                              #
                          </th>
                          <th style="width: 20%">
                              User Name
                          </th>
                          <th style="width: 30%">
                              User Email
                          </th>
                          <th>
                              Project Progress
                          </th>
                          <th style="width: 8%" class="text-center">
                              Status
                          </th>
                          <th style="width: 20%">
                          </th>
                      </tr>
                  </thead>
                  <tbody>

                      @foreach($all_user as $user)
                        <tr>
                            <td>
                                {{ $loop->index +1 }}
                            </td>
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
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                    </div>
                                </div>
                                <small>
                                    57% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('super.show', ['super'=>$user->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Manage
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                      @endforeach

                  </tbody>
              </table>
            </div>
        <!-- /.card-body -->
        </div>
	</div>
</div>
@endsection