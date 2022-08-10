@extends('layouts.pos_master')

@section('title')
 Super Admin
@endsection


@section('header')
   <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Super Admin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Home</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')

@include('Backend.layouts.navbar.admin_top_navbar')

@yield('admin')

@endsection