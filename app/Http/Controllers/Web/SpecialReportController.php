<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\SpecialReport;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;

class SpecialReportController extends Controller
{
    use LogExceptions;
    public function get_home_special_report(Request $request){
        try{

            $data = SpecialReport::select('*')
                ->where('special_report_is_active', 1)
                ->where('special_report_is_featured',1)
                ->limit($request->limit)
                ->orderBy('special_report_id', 'DESC')
                ->get();      

            return response()->json([
                'message' => 'Get Special Report', 
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
}
