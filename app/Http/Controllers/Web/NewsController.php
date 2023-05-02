<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;
use Carbon\Carbon;

class NewsController extends Controller
{
    use LogExceptions;
    public function get_home_news(Request $request){
        try{
            $today = Carbon::today()->toDateString();
            $data = News::select('*')                
                ->where('news_is_active', 1)
                ->whereDate('news_publish_date', '<=', $today)
                ->whereDate('news_unpublish_date', '>=', $today)
                ->orderBy('news_id', 'DESC')
                ->limit(5)
                ->get();      

            return response()->json([
                'message' => 'Get News', 
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
