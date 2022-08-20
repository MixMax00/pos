@extends('layouts.pos_master')

@section('title')
Add Brand

@endsection


@section('content')

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <form action="{{ route('brand.store') }}" method="POST" class="p-3">
                @csrf
               <div class="form-group">
                <label for="brandName">Brand Name</label>
                <input type="text" name="name" class="form-control" id="brandName">
               </div>
               <div class="form-group">
                <input type="submit"  class="btn btn-primary">
               </div>
            </form>
        </div>
    </div>
</div>



@endsection
