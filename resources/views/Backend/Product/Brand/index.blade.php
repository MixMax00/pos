@extends('layouts.pos_master')

@section('title')
All Brand

@endsection


@section('content')


<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
    <div class="card">
    		<div class="card-header d-flex d-lg-flex justify-content-end">
    		 	<a href="{{ route('brand.create') }}" class="btn-sm btn btn-primary"><i class="fas fa-plus"></i></a>
    		</div>
    		<div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                      <tr>
                          <th style="width: 1%">
                              #
                          </th>
                          <th style="width: 20%">
                              Brand Name
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
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm mb-1" href="{{ route('brand.edit', $data->id) }}">
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
                        url : '/brand/delete/'+deleteId,
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
