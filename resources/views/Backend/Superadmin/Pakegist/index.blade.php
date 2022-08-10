@extends('Backend.Superadmin.Dashboard')


@section('title')

 List Package

@endsection

@section('header')
   <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Super Admin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Package List</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
@endsection


@section('admin')

<div class="row mt-2">
	 <div class="col-12 col-md-12 col-lg-12">
         <div class="card bg-white">
             <div class="row">
                 <div class="col-12 col-md-12 col-lg-12">
                     <a href="{{ route('pakegist.create') }}" class="btn btn-info"><i class="fas fa-plus"></i></a>
                 </div>
             </div>
             <div class="row p-3">
                 <div class="col-12 col-md-4 col-lg-4">
                     <div class="card shadow-lg">
                         <div class="card-header">
                             <h4>Package Name</h4>
                         </div>
                         <div class="card-body text-center">
                              1 Business Locations<br>
                               2 Users<br>
                               Products  Unlimited<br>
                               Invoices Unlimited<br>
                               Asset Management<br>
                               Connector Module<br>
                               Crm Module<br>
                               Essentials Module<br>
                               Manufacturing Module<br>       
                               Product Catalogue Module<br>
                               Project Module<br>
                               Repair Module<br></br>
                              <h3 class="text-center">
                                <span class="display-6" data-currency_symbol="true">15575.0000</span>
                                <small>
                                    / 335 Days
                                </small>
                              </h3>  
                         </div>
                         <div class="card-footer text-center">
                            Yearly
                         </div>
                     </div>
                 </div>
             </div>
         </div>   
     </div>
</div>
@endsection