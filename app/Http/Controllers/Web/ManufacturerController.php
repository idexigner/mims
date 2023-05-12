<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;
use Yajra\DataTables\DataTables;


class ManufacturerController extends Controller
{
    use LogExceptions;
    public function get_brand(Request $request){
        try{

            $data = Manufacturer::select('brand_id', 'brand_name', 'brand_type')
                ->where($request->condition, 1)
                ->where('brand_is_active',1)
                ->orderBy('brand_id', 'DESC')
                ->limit($request->limit ?? 7)
                ->get();      

            return response()->json([
                'message' => 'Get Manufacturer', 
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

    public function manufacturer_detail(Request $request,$id=''){
        
        // dd('asd');
        if($id == ''){
            $id = $request->id;
        }
        $manufacturer = Manufacturer::where('manufacturer_id', $id)->first();
        if ($request->ajax()) {
            // dd("ajax");
            // dd($id);
            $data = Brand::with('generic')
                ->where('brand_manufacturer_id', $id)
                ->where('brand_is_active', 1);
                // ->get();
            // $data = Manufacturer::with('brands.generic')
            // ->where('manufacturer_id', $id)
            // ->where('manufacturer_is_active', 1);
            return DataTables::of($data)->make(true);
        }

        return view('frontend.manufacturer')->with(compact('id', 'manufacturer'));
    }

    public function brand_detail($id){
        return view('frontend.brand-detail')->with(compact('id'));

       
            
                 
            // $brands = Manufacturer::with('dosage_form', 'generic', 'manufacturer', 'strength')
            //         ->where('brand_name', $brand->brand_name)
            //         ->where('brand_is_active', 1)
            //         ->get();
                   
            // $data = compact('brand', 'brands');
           
            
            
       
    }

    public function get_brand_detail($id){
        try{  
            
            $data = Manufacturer::with('dosage_form', 'generic', 'manufacturer', 'strength', 'pack_size')
                ->where('brand_id',$id)->first();

            // dd($data);
            return response()->json([
                'message' => 'Get Manufacturer Detail', 
                'data' => $data
            ], 200);

        } catch (\Exception $ex) {
                
            $this->logException($ex, \Route::currentRouteName(), __METHOD__);
            return response()->json([
                'message' => 'Something went wrong! Get Manufacturer Detail',
                'error' => $ex,
                'message' => $ex->getMessage()
            ], 400);
        }
    }

    public function brand_information($id){
        return view('frontend.brand-information')->with(compact('id'));

       
            
                 
            // $brands = Manufacturer::with('dosage_form', 'generic', 'manufacturer', 'strength')
            //         ->where('brand_name', $brand->brand_name)
            //         ->where('brand_is_active', 1)
            //         ->get();
                   
            // $data = compact('brand', 'brands');
           
            
            
       
    }

    public function get_brand_information($id){
        try{  
            
            $data = Manufacturer::with('dosage_form', 'generic', 'manufacturer', 'strength', 'pack_size')
                ->where('brand_id',$id)->first();

            $data['brands'] = Manufacturer::with('dosage_form', 'generic', 'manufacturer', 'strength', 'pack_size')
                    ->where('brand_name', $data->brand_name)
                    ->where('brand_is_active', 1)
                    ->get();

            // dd($data);
            return response()->json([
                'message' => 'Get Manufacturer Detail', 
                'data' => $data
            ], 200);

        } catch (\Exception $ex) {
                
            $this->logException($ex, \Route::currentRouteName(), __METHOD__);
            return response()->json([
                'message' => 'Something went wrong! Get Manufacturer Detail',
                'error' => $ex,
                'message' => $ex->getMessage()
            ], 400);
        }
    }
}
