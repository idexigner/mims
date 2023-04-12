<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\LogExceptions;


class SiteSettingController extends Controller
{
    use LogExceptions;
    public function setSiteSetting($key, $value){

        SiteSetting::where('key',$key)->update(['value'=>$value]);
    
    }

    public function scroller(){
        return view('admin.pages.scroller');
    }

    public function scroller_update(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'scroller_title' => 'required',   
                'scroller_text' => 'required',              
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $this->setSiteSetting('scroller_title', $request->scroller_title);
            $this->setSiteSetting('scroller_text', $request->scroller_text);
           
            return response()->json([
                'message' => 'Scroller record updated successfully'
            ], 200);
        } catch (\Exception $ex) {

            $this->logException($ex, $request->route()->getName(), __METHOD__);
            return response()->json([
                    'message' => 'Something went wrong!',
                    'error' => $ex
                ], 400);
        }
    }
}
