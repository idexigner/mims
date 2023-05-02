<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;
use Carbon\Carbon;


class VideoController extends Controller
{
    use LogExceptions;
    public function get_home_video(Request $request){
        try{
          
            $data = Video::select('*')               
                ->where('video_is_featured', 1)
                ->where('video_is_active', 1)
                ->orderBy('video_id', 'DESC')
                ->limit(10)
                ->get();      

            return response()->json([
                'message' => 'Get Video', 
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
