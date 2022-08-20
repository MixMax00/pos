@extends('layouts.pos_master')

@section('title')
Edit Category

@endsection


@section('content')

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <form action="{{ route('category.update',$edit->id) }}" method="POST" class="p-3">
                @csrf
                @method("PUT")
               <div class="form-group">
                <label for="brandName">Brand Name</label>
                <input type="text" name="name" value="{{ $edit->name }}" class="form-control" id="brandName">
               </div>
               <div class="form-group">
                <label for="brandName">Brand Name</label>
                <input type="text" name="name" value="{{ $edit->name }}" class="form-control" id="brandName">
               </div>
               <div class="form-group">
                <input type="submit" value="Update"  class="btn btn-primary">
               </div>
            </form>
        </div>
    </div>
</div>



@endsection
