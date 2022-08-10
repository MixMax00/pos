@extends('layouts.pos_master')

@section('title')
All User

@endsection


@section('content')


<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
    <div class="card">
    		<div class="card-header d-flex d-lg-flex justify-content-end">
    		 	<a href="{{ route('adduser.create') }}}}" class="btn-sm btn btn-primary"><i class="fas fa-plus"></i></a>
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
                             Name
                          </th>
                          <th>
                              Role
                          </th>
                          <th>
                             Email
                          </th>
                          <th style="width: 20%">
                             Action
                          </th>
                      </tr>
                  </thead>
                  <tbody>


                        <tr>
                            <td>

                            </td>
                            <td>


                            </td>
                            <td>

                            </td>
                            <td>

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
                                <a class="btn btn-info btn-sm" href="">
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


                  </tbody>
              </table>
            </div>
        <!-- /.card-body -->
        </div>
    </div>
</div>


@endsection
