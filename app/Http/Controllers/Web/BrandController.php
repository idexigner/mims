<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;
use Yajra\DataTables\DataTables;

class BrandController extends Controller
{
    use LogExceptions;
    public function get_brand(Request $request){
        try{

            $data = Brand::select('brand_id', 'brand_name', 'brand_type')
                ->where($request->condition, 1)
                ->where('brand_is_active',1)
                ->orderBy('brand_id', 'DESC')
                ->limit($request->limit ?? 7)
                ->get();      

            return response()->json([
                'message' => 'Get Brand', 
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

    public function herbal_list(Request $request){
        if ($request->ajax()) {
            // dd("ajax");
            $data = Brand::with('dosage_form', 'generic', 'manufacturer', 'strength')
            ->where('brand_type', 'Herbal')
            ->where('brand_is_active', 1);
            return DataTables::of($data)->make(true);
        }

        return view('frontend.herbal');
    }
}
