<?php

namespace App\Http\Controllers\Backend;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Business;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $units = Unit::all();
        $brands = Brand::all();
        $categories = Category::all();
        $business = Business::all();
        return view('Backend.Product.Addproduct.create', [
            'units' => $units,
            'brands' => $brands,
            'categories' => $categories,
            'business' => $business,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'product_name' => 'required|string|max:100',
            'sku' => 'required|string',
            'barcode' => 'required|string',
            'unit' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'model' => 'required|string',
            'qty' => 'required',
            'bussnes_location' => 'required|string',
            'weight' => 'required',
            'description' => 'required',
            'exe_tex' => 'required',
            'inc_tex' => 'required',
            'total_tex' => 'required',
            'image' => 'required|image|mimes:jpg,png',
        ]);

        if($validators->passes()){
            if($request->hasFile('image')){
                $image_name = $request->file('image');
                $file_ext = $image_name->getClientOriginalExtension();
                $file_name = $request->product_name.'-'.time().'.'.$file_ext;
                $directory = public_path('storage/product/'.$file_name);
                $upload = Image::make($image_name->getRealPath())->resize(300, 200)->save($directory,90);
                if($upload){
                    Product::create([
                        'product_name' => $request->product_name,  
                        'sku' => $request->sku,
                        'barcode' => $request->barcode,
                        'unit' => $request->unit,
                        'brand' => $request->brand,     
                        'category' => $request->category,
                        'model' => $request->model,
                        'qty' => $request->qty,
                        'bussnes_location' => $request->bussnes_location,
                        'weight' => $request->weight,
                        'description' => $request->description,
                        'exe_tex' => $request->exe_tex,
                        'inc_tex' => $request->inc_tex,
                        'total_tex' => $request->total_tex,
                        'image' => $file_name,
                    ]);

                    Toastr::success('Product Add Successfully!!');
                    return back();
                }else{

                }
            }
        }else{
            Toastr::error($validators->errors());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
