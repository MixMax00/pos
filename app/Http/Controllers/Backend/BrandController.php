<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Brand::all();
        return view('Backend.Product.Brand.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Backend.Product.Brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->passes()){
            Brand::create([
                'name' => $request->name,
                'created_at' => Carbon::now(),
            ]);

            Toastr::success('Brands Insert Successfully!!');

            return redirect()->route('brand.index');
        }else{
            Toastr::error("Please input valid name!!!");
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
        $edit = Brand::find($id);
        return view('Backend.Product.Brand.edit', compact('edit'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        $brand_info = Brand::find($id);

        if($validator->passes()){
            Brand::where('id', $brand_info->id)->update([
                'name' => $request->name,
                'updated_at' => Carbon::now(),
            ]);

            Toastr::success('Brands Update Successfully!!');

            return redirect()->route('brand.index');
        }else{
            Toastr::error("Please input valid name!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleted($id){
        $delete_id = Brand::find($id);
        $delete_id->delete();
        return response()->json(['status' => "Brand Deleted Successfully!!"]);
    }
}
