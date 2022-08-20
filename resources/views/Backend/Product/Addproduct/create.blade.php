@extends('layouts.pos_master')
@section('title')
Add Product
@endsection
@section('content')
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card p-3">
                <div class="title">
                    <h3>Add Product</h3>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Product Name:</label>
                        <input type="text" name="product_name" class="form-control"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>SKU:</label>
                        <input type="text" name="sku" class="form-control"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Barcode Type:*</label>
                        <input type="text" name="barcode" class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Unit:</label>
                        <select class="form-control" name="unit">
                            @foreach($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->name  }} {{ $unit->short_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Model:</label>
                        <input type="text" name="model" class="form-control"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Brand:</label>
                        <select class="form-control" name="brand">
                            @foreach($brands as $brand)
                            <option value="{{ $unit->id }}">{{ $brand->name  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Quantity</label>
                        <input type="number" name="qty" min="1" class="form-control"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Business Locations: </label>
                        <select class="form-control" name="bussnes_location">
                            @foreach($business as $data)
                            <option value="{{ $data->business_name }}">{{ $data->business_name  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Weight</label>
                        <input type="text" name="weight" class="form-control"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <label>Product Description</label>
                        <textarea id="tiny" name="description">

                        </textarea>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Product Image</label>
                        <input type="file" name="image" class="form-control"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <label>Exe. tax:*</label>
                       <input type="number" name="exe_tex" id="exeTex" class="form-control"/>
                   </div>
                    <div class="col-12 col-md-4">
                        <label>Inc. tax:*</label>
                       <input type="number" name="inc_tex" id="incTex" class="form-control"/>
                   </div>
                    <div class="col-12 col-md-4">
                        <label>Total Tex.</label>
                       <input type="number" name="total_tex" id="totalTex" class="form-control"/>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </div>
</form>
@endsection



@section('script')
<script>
  



    $(document).ready(function(){

        $('textarea#tiny').tinymce({ height: 300, /* other settings... */ });

        $('#exeTex').change(function(){
           var exeTex = $(this).val();
           console.log(exeTex);
           var totalTex = $('#totalTex').val();
           var total = parseInt(totalTex) + parseInt(exeTex);
           console.log(total);
           $('#totalTex').val(total);
           $totalTex = $('#totalTex').val();
        });

        $('#incTex').change(function(){
            var incTex = $(this).val();
            console.log(incTex);
            var totalTex = $('#totalTex').val(); 
            var total = parseInt(totalTex) + parseInt(incTex);
            console.log(total);
            $('#totalTex').val(total);
        });
     
    });
</script>

@endsection