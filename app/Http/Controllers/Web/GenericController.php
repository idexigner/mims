<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Generic;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;
use Yajra\DataTables\DataTables;

class GenericController extends Controller
{
    use LogExceptions;
    // public function get_generic(Request $request){
    //     try{

    //         $data = Generic::select('generic_id', 'generic_name', 'generic_type')
    //             ->where($request->condition, 1)
    //             ->where('generic_is_active',1)
    //             ->orderBy('generic_id', 'DESC')
    //             ->limit($request->limit ?? 7)
    //             ->get();      

    //         return response()->json([
    //             'message' => 'Get Generic', 
    //             'data' => $data
    //         ], 200);

    //     } catch (\Exception $ex) {

    //         $this->logException($ex, \Route::currentRouteName(), __METHOD__);
    //         return response()->json([
    //                 'message' => 'Something went wrong!',
    //                 'error' => $ex,
    //                 'message' => $ex->getMessage()
    //             ], 400);
    //     }
    // }

   

    public function generic_detail($id){
        return view('frontend.generic-detail')->with(compact('id'));

       
            
                 
            // $generics = Generic::with('dosage_form', 'generic', 'manufacturer', 'strength')
            //         ->where('generic_name', $generic->generic_name)
            //         ->where('generic_is_active', 1)
            //         ->get();
                   
            // $data = compact('generic', 'generics');
           
            
            
       
    }

    public function get_generic_detail($id){
        try{  
            
            $data = Generic::with('brands.manufacturer', 'indications')
                ->where('generic_id',$id)->first();

            // dd($data);
            return response()->json([
                'message' => 'Get Generic Detail', 
                'data' => $data
            ], 200);

        } catch (\Exception $ex) {
                
            $this->logException($ex, \Route::currentRouteName(), __METHOD__);
            return response()->json([
                'message' => 'Something went wrong! Get Generic Detail',
                'error' => $ex,
                'message' => $ex->getMessage()
            ], 400);
        }
    }
}
