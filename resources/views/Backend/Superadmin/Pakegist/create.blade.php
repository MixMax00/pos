@extends('Backend.Superadmin.Dashboard')


@section('title')

 Add Package

@endsection

@section('header')
   <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Super Admin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Package Add</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
@endsection


@section('admin')

<div class="row mt-2">
	 <div class="col-12 col-md-12 col-lg-12">
         <div class="mb-3">
             <span><strong class="text-white-100">Packages</strong> Add New package</span>
         </div>
         <div class="card bg-white p-3">
             <form>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" required name="name" type="text" id="name">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="description">Package Description:</label>
                            <input class="form-control" required name="description" type="text" id="description">
                        </div>
                    </div>
                   <div class="clearfix"></div>
                   <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="location_count">Number of Locations:</label>
                            <input class="form-control" required min="0" name="location_count" type="number" id="location_count">
                            <span class="help-block">0 = infinite</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="location_count">Number of active users:</label>
                            <input class="form-control" required min="0" name="user_count" type="number" id="location_count">
                            <span class="help-block">0 = infinite</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                     <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="location_count">Number of products:</label>
                            <input class="form-control" required min="0" name="product_count" type="number" id="product_count">
                            <span class="help-block">0 = infinite</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="location_count">Number of Invoices:</label>
                            <input class="form-control" required min="0" name="invoice_count" type="number" id="invoice_count">
                            <span class="help-block">0 = infinite</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="location_count">Price Interval:</label>
                            <select class="form-control select2" required id="interval" name="interval">
                                <option selected="selected" value="">Please Select</option>
                                <option value="days">Days</option>
                                <option value="months">Months</option>
                                <option value="years">Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="interval_count  ">Interval:</label>
                            <input class="form-control" required min="1" name="interval_count" type="number">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="trial_days  ">Trial Days:</label>
                            <input class="form-control" required min="0" name="trial_days" type="number">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                         <div class="form-group">
                            <label for="price">Price:</label>
                            <div class="input-group-prepend">
                                  <span class="input-group-text">
                                   <b>BDT ৳</b>
                                  </span>
                                   <input class="form-control input_number" required name="price" type="text" id="price">
                            </div>
                            <span class="help-block">
                                0 = Free Package                        </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                       <div class="form-group">
                            <label for="sort_order  ">Sort Order:</label>
                            <input class="form-control" required name="sort_order" type="number" value="1">
                        </div>
                    </div>
                     <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                     </div>   
                    <div class="clearfix"></div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="is_private" type="checkbox" value="1">
                                Private Superadmin only
                            </label>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="is_one_time" type="checkbox" value="1">
                                One time only subscription
                            </label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" id="enable_custom_link" name="enable_custom_link" type="checkbox" value="1">
                                Enable custom subscription link
                            </label>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[assetmanagement_module]" type="checkbox" value="1">
                                Asset Management
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[connector_module]" type="checkbox" value="1">
                                Connector Module
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[crm_module]" type="checkbox" value="1">
                                Crm Module
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[essentials_module]" type="checkbox" value="1">
                                Essentials Module
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[manufacturing_module]" type="checkbox" value="1">
                                Manufacturing Module
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[productcatalogue_module]" type="checkbox" value="1">
                                Product Catalogue Module
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[project_module]" type="checkbox" value="1">
                                Project Module
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[repair_module]" type="checkbox" value="1">
                                Repair Module
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" name="custom_permissions[woocommerce_module]" type="checkbox" value="1">
                                WooCommerce Module
                            </label>
                        </div>
                    </div>
                                    
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input class="input-icheck" checked="checked" name="is_active" type="checkbox" value="1">
                                Activate
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary pull-right btn-flat">Save</button>
                    </div>
                </div>
             </form>
         </div>   
     </div>
</div>
@endsection