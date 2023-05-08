<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Traits\LogExceptions;
use App\Models\SpecialReport;

class SpecialReportController extends Controller
{
    use LogExceptions;
    public function index(Request $request)
    {        
        if ($request->ajax()) {
            // dd("ajax");
            $data = SpecialReport::select('*')->orderBy('special_report_id', 'DESC');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.special_report');
    }
   
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'special_report_title' => 'required',
                'special_report_description' => 'required',
                'special_report_image' => 'required'              
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = new SpecialReport();
            $obj->special_report_title = $request->special_report_title ?? '';
            $obj->special_report_description = $request->special_report_description ?? '';
            $obj->special_report_link_address = $request->special_report_link_address ?? '';


            if ($request->hasFile('special_report_image')) {
                $file = $request->file('special_report_image');
                $special_report_image = rand(1, 1000000) . '__' . $file->getClientOriginalName();
                $file->storeAs('public/images/special_report', $special_report_image);
            }
            $obj->special_report_image = $special_report_image ?? '';
            
            $obj->special_report_is_featured = $request->special_report_is_featured ?? '0';
            $obj->special_report_is_active = $request->special_report_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Special Report record created successfully'
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

            $data = SpecialReport::findOrFail($id);            
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
                'special_report_title' => 'required',
                'special_report_description' => 'required',
                        
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = SpecialReport::findOrFail($request->id);
            $obj->special_report_title = $request->special_report_title ?? '';
            $obj->special_report_description = $request->special_report_description ?? '';
            $obj->special_report_link_address = $request->special_report_link_address ?? '';


            if ($request->hasFile('special_report_image')) {
                $file = $request->file('special_report_image');
                $special_report_image = rand(1, 1000000) . '__' . $file->getClientOriginalName();
                $file->storeAs('public/images/special_report', $special_report_image);
                $obj->special_report_image = $special_report_image ?? '';
            }
            
            $obj->special_report_is_featured = $request->special_report_is_featured ?? '0';
            $obj->special_report_is_active = $request->special_report_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Special Report record updated successfully'
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
            $obj = SpecialReport::findOrFail($id);
            $obj->delete();

            return response()->json([
                'message' => 'Special Report record deleted successfully'
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
