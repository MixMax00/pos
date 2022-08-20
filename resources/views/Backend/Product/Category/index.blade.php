@extends('layouts.pos_master')

@section('title')
All Category

@endsection


@section('content')


<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
    <div class="card">
    		<div class="card-header d-flex d-lg-flex justify-content-end">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus"></i></button>
    		</div>
    		<div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                      <tr>
                          <th style="width: 1%">
                              #
                          </th>
                          <th style="width: 20%">
                              Category Name
                          </th>
                          <th style="width: 20%">
                            Category Des
                           </th>
                          <th style="width: 20%">
                             Action
                          </th>
                      </tr>
                  </thead>
                  <tbody>

                   @foreach($datas as $data)
                        <tr>
                            <input type="hidden" value="{{ $data->id }}" class="brandId">
                            <td>
                                {{ $loop->index +1  }}
                            </td>
                            <td>
                             {{ $data->name }}
                            </td>
                            <td>
                                {{ $data->description }}
                               </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm mb-1" href="{{ route('category.edit', $data->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <button type="button" class="btn btn-danger btn-sm mb-1 delete" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete  
                                </button>
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






<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Category Name:</label>
              <input type="text" class="form-control" name="name" id="catName">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Description:</label>
              <textarea class="form-control" name="description" id="description"></textarea>
            </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>
      </div>
      <form>
    </div>
  </div>


@endsection

@section('script')
<script>
    $(document).ready(function(){

        $('.delete').click(function(e){
            e.preventDefault();



            var deleteId = $(this).closest('tr').find('.brandId').val();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {


                    var data = {
                        "_token" : $("input[name_token]").val(),
                        "id" : deleteId,
                    };
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type : "DELETE",
                        url : '/category/delete/'+deleteId,
                        data: data,
                        success: function(respons){
                            Swal.fire(
                                'Deleted!',
                                respons.status,
                                'success'
                                ).then((result) => {
                                    location.reload();
                                });
                        }
                    });
                }
            });
        });
    });
</script>

@endsection
