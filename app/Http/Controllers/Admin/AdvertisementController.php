<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Traits\LogExceptions;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{
    use LogExceptions;
    public function index(Request $request)
    {        
        if ($request->ajax()) {
            // dd("ajax");
            $data = Advertisement::select('*');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.advertisement');
    }
   
    public function list(Request $request)
    {
        $search = $request->input('query');
        $data = Advertisement::where('advertisement_name', 'LIKE', '%' . $search . '%')->limit(20)->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'advertisement_name' => 'required'
                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = new Advertisement();
            $obj->advertisement_name = $request->advertisement_name ?? '';
            $obj->advertisement_is_active = $request->advertisement_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Advertisement record created successfully'
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

            $data = Advertisement::findOrFail($id);            
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
                'advertisement_name' => 'required',                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = Advertisement::findOrFail($request->id);
            $obj->advertisement_name = $request->advertisement_name ?? '';
            $obj->advertisement_is_active = $request->advertisement_is_active ?? '1';
            $obj->save();

            return response()->json([
                'message' => 'Advertisement record updated successfully'
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
            $obj = Advertisement::findOrFail($id);
            $obj->delete();

            return response()->json([
                'message' => 'Advertisement record deleted successfully'
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
