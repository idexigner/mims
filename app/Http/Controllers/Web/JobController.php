<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;
use Carbon\Carbon;

class JobController extends Controller
{
    use LogExceptions;
    public function get_home_job(Request $request){
        try{
            $today = Carbon::today()->toDateString();
            $data = Job::select('*')
                ->where('job_category', $request->category ?? "Medical")
                ->where('job_is_active', 1)
                ->whereDate('job_publish_date', '<=', $today)
                ->whereDate('job_application_deadline', '>=', $today)
                ->orderBy('job_id', 'DESC')
                ->limit(5)
                ->get();      

            return response()->json([
                'message' => 'Get Home Job', 
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
