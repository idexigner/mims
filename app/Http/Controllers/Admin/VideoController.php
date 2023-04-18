<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Traits\LogExceptions;
use App\Models\Video;

class VideoController extends Controller
{
    use LogExceptions;
    public function index(Request $request)
    {        
        if ($request->ajax()) {
            // dd("ajax");
            $data = Video::select('*');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.video');
    }
   
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'video_title' => 'required',
                'video_link' => 'required'
                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = new Video();
            $obj->video_title = $request->video_title ?? '';
            $obj->video_link = $request->video_link ?? '';
            $obj->video_is_featured = $request->video_is_featured ?? 1;
            $obj->video_is_active = $request->video_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Video record created successfully'
                ], 200);

        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Errror'
            ], 500);

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

            $data = Video::findOrFail($id);            
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
                'video_title' => 'required',
                'video_link' => 'required'
                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = Video::findOrFail($request->id);
            $obj->video_title = $request->video_title ?? '';
            $obj->video_link = $request->video_link ?? '';
            $obj->video_is_featured = $request->video_is_featured ?? 1;
            $obj->video_is_active = $request->video_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Video record updated successfully'
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
            $obj = Video::findOrFail($id);
            $obj->delete();

            return response()->json([
                'message' => 'Video record deleted successfully'
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
