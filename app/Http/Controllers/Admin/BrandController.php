<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Traits\LogExceptions;
use App\Models\Brand;


class BrandController extends Controller
{
    use LogExceptions;
    public function index(Request $request)
    {        
        
        if ($request->ajax()) {
            // dd("ajax");with('')->
            $data = Brand::with('dosage_form', 'generic', 'manufacturer')->select('*');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.brand');
    }
   
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'brand_type' => 'required',
                'brand_name' => 'required',
                'brand_generic_id' => 'required',
                'brand_manufacturer_id' => 'required',
                'brand_dosage_form_id' => 'required',
                'brand_strength_id' => 'required',
                'brand_pack_size_id' => 'required',
                'brand_price' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = new Brand();
            $obj->brand_type = $request->brand_type ?? '';
            $obj->brand_name = $request->brand_name ?? '';
            $obj->brand_generic_id = $request->brand_generic_id ?? '1';
            $obj->brand_manufacturer_id = $request->brand_manufacturer_id ?? '1';
            $obj->brand_dosage_form_id = $request->brand_dosage_form_id ?? '1';
            $obj->brand_strength_id = $request->brand_strength_id ?? '1';
            $obj->brand_pack_size_id = $request->brand_pack_size_id ?? '1';
           
            if ($request->hasFile('brand_image')) {
                $file = $request->file('brand_image');
                $brand_image = rand(1, 1000000) . '__' . $file->getClientOriginalName();
                $file->storeAs('public/images/brand', $brand_image);
            }
            $obj->brand_image = $request->brand_image ?? '';

            $obj->brand_price = $request->brand_price ?? '';
            $obj->brand_is_hightlight = $request->brand_is_hightlight ?? '0';
            $obj->brand_is_new_product = $request->brand_is_new_product ?? '0';
            $obj->brand_is_new_brand = $request->brand_is_new_brand ?? '0';
            $obj->brand_is_new_presentation = $request->brand_is_new_presentation ?? '0';
            $obj->brand_is_active = $request->brand_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Brand record created successfully'
                ], 200);

        } catch (\Exception $ex) {

            $this->logException($ex, $request->route()->getName(), __METHOD__);
            return response()->json([
                    'message' => 'Something went wrong!',
                    'error' => $ex
                ], 400);
        }
    }


    public function edit($id)
    {
       try{

            $data = Brand::findOrFail($id);            
            return response()->json([
                'message' => 'Edit', 
                'data' => $data
            ], 200);
            
        } catch (\Exception $ex) {

            $this->logException($ex, \Route::currentRouteName(), __METHOD__);
            return response()->json([
                    'message' => 'Something went wrong!',
                    'error' => $ex,
                    'message' => $ex->getMessage()
                ], 400);
        }

       
    }

  

    public function update(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'brand_type' => 'required',
                'brand_name' => 'required',
                'brand_generic_id' => 'required',
                'brand_manufacturer_id' => 'required',
                'brand_dosage_form_id' => 'required',
                'brand_strength_id' => 'required',
                'brand_pack_size_id' => 'required',
                'brand_price' => 'required'  
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = Brand::findOrFail($request->id);
            $obj->brand_type = $request->brand_type ?? '';
            $obj->brand_name = $request->brand_name ?? '';
            $obj->brand_generic_id = $request->brand_generic_id ?? '1';
            $obj->brand_manufacturer_id = $request->brand_manufacturer_id ?? '1';
            $obj->brand_dosage_form_id = $request->brand_dosage_form_id ?? '1';
            $obj->brand_strength_id = $request->brand_strength_id ?? '1';
            $obj->brand_pack_size_id = $request->brand_pack_size_id ?? '1';
           
            if ($request->hasFile('brand_image')) {
                $file = $request->file('brand_image');
                $brand_image = rand(1, 1000000) . '__' . $file->getClientOriginalName();
                $file->storeAs('public/images/brand', $brand_image);
                $obj->brand_image = $request->brand_image ?? '';
            }
           

            $obj->brand_price = $request->brand_price ?? '';
            $obj->brand_is_hightlight = $request->brand_is_hightlight ?? '0';
            $obj->brand_is_new_product = $request->brand_is_new_product ?? '0';
            $obj->brand_is_new_brand = $request->brand_is_new_brand ?? '0';
            $obj->brand_is_new_presentation = $request->brand_is_new_presentation ?? '0';
            $obj->brand_is_active = $request->brand_is_active ?? '1';
            $obj->save();

            return response()->json([
                'message' => 'Brand record updated successfully'
            ], 200);
        } catch (\Exception $ex) {

            $this->logException($ex, $request->route()->getName(), __METHOD__);
            return response()->json([
                    'message' => 'Something went wrong!',
                    'error' => $ex
                ], 400);
        }
    }

    public function destroy($id)
    {
        try{
            $obj = Brand::findOrFail($id);
            $obj->delete();

            return response()->json([
                'message' => 'Brand record deleted successfully'
                ], 200);
        } catch (\Exception $ex) {

            $this->logException($ex, \Route::currentRouteName(), __METHOD__);
            return response()->json([
                    'message' => 'Something went wrong!',
                    'error' => $ex,
                    'message' => $ex->getMessage()
                ], 400);
        }
    }
}
