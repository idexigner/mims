<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Traits\LogExceptions;
use App\Models\News;

class NewsController extends Controller
{
    use LogExceptions;
    public function index(Request $request)
    {        
        if ($request->ajax()) {
            // dd("ajax");
            $data = News::select('*');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.news');
    }
   
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'news_title' => 'required',
                'news_description' => 'required',
                'news_image' => 'required',
                'news_publish_date' => 'required',
                'news_unpublish_date' => 'required'                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = new News();
            $obj->news_title = $request->news_title ?? '';
            $obj->news_description = $request->news_description ?? '';

            $obj->news_publish_date = ($request->news_publish_date)? date('Y-m-d', strtotime($request->news_publish_date)): '';
            $obj->news_unpublish_date = ($request->news_unpublish_date)? date('Y-m-d', strtotime($request->news_unpublish_date)): '';

            if ($request->hasFile('news_image')) {
                $file = $request->file('news_image');
                $news_image = rand(1, 1000000) . '__' . $file->getClientOriginalName();
                $file->storeAs('public/images/news', $news_image);
            }
            $obj->news_image = $news_image ?? '';
            $obj->news_is_active = $request->news_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'News record created successfully'
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

            $data = News::findOrFail($id);            
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
                'news_title' => 'required',
                'news_description' => 'required',
                'news_publish_date' => 'required',
                'news_unpublish_date' => 'required'                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = News::findOrFail($request->id);
            $obj->news_title = $request->news_title ?? '';
            $obj->news_description = $request->news_description ?? '';

            $obj->news_publish_date = ($request->news_publish_date)? date('Y-m-d', strtotime($request->news_publish_date)): '';
            $obj->news_unpublish_date = ($request->news_unpublish_date)? date('Y-m-d', strtotime($request->news_unpublish_date)): '';

            if ($request->hasFile('news_image')) {
                $file = $request->file('news_image');
                $news_image = rand(1, 1000000) . '__' . $file->getClientOriginalName();
                $file->storeAs('public/images/news', $news_image);
                $obj->news_image = $news_image ?? '';
            }
            
            $obj->news_is_active = $request->news_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'News record updated successfully'
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
            $obj = News::findOrFail($id);
            $obj->delete();

            return response()->json([
                'message' => 'News record deleted successfully'
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
