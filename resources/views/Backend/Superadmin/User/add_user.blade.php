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
        <li class="breadcrumb-item active">Add User</li>
      </ol>
      </div><!-- /.col -->
      </div><!-- /.row -->
      @endsection
      @section('content')
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="{{ route('business.store') }}" accept-charset="UTF-8" id="business_register_form" enctype="multipart/form-data"><input name="_token" type="hidden" value="">
		  @csrf
          <input name="language" type="hidden">
          <fieldset>
            <legend>Business details:</legend>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Business Name:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-suitcase"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Business Name" required name="business_name" type="text" id="name">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="start_date">Start Date:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Start Date"  name="start_date" type="date">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="currency_id">Currency:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-money-bill-alt"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="BD" name="currency" type="text">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="logo">Logo:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-file"></i>
                      </span>
                    </div>
                    <input class="form-control" readonly name="logo" type="file">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="website">Website:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-globe"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Website" name="website" type="text" id="website">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mobile">Business contact number:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-phone"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Business contact number" name="mobile" type="text" id="mobile">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="alternate_number">Alternate contact number:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-phone"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Alternate contact number" name="alternate_number" type="text" id="alternate_number">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Division:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-globe"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="division" required name="division" type="text" id="country">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="state">District:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="district" required name="district" type="text" id="state">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="city">Upzila:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="upzila" required name="upzila" type="text" id="city">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="zip_code">Zip Code:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Zip/Postal Code" required name="zip_code" type="text" id="zip_code">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
			  <div class="col-md-6">
                <div class="form-group">
                  <label for="zip_code">Landarea:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="landarea" required name="landarea" type="text" id="zip_code">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </fieldset>
          <!-- tax details -->
          <!-- Owner Information -->
          <hr>
          <fieldset>
            <legend>Owner information</legend>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="surname">Prefix:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-info"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Mr / Mrs / Miss" name="surname" type="text" id="surname">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="first_name">First Name:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-info"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="First Name" required name="first_name" type="text" id="first_name">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-info"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Last Name" name="last_name" type="text" id="last_name">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="clearfix"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Username:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Username" required name="name" type="text" id="username">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" type="text" id="email">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="password">Password:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Password" required name="password" type="password" value="" id="password">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="confirm_password">Confirm Password:*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Confirm Password" required name="confirmation_password" type="password" value="" id="confirm_password">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6">
              </div>
              <div class="clearfix"></div>
            </div>
            </fieldset>                    <div class="clearfix"></div>
            <div class="col-md-12"><hr></div>
            <div class="row justify-content-end mb-2">
              <input class="btn btn-success float-end" type="submit" value="Submit">
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  @endsection