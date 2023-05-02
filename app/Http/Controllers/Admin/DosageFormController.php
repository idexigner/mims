<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Traits\LogExceptions;
use App\Models\DosageForm;

class DosageFormController extends Controller
{
    use LogExceptions;
    public function index(Request $request)
    {        
        if ($request->ajax()) {
            // dd("ajax");
            $data = DosageForm::select('*')->orderBy('dosageform_id', 'DESC');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.dosageform');
    }
   
    public function list(Request $request)
    {
        $search = $request->input('query');
        $data = DosageForm::where('dosageform_name', 'LIKE', '%' . $search . '%')->limit(20)->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'dosageform_name' => 'required'
                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = new DosageForm();
            $obj->dosageform_name = $request->dosageform_name ?? '';
            $obj->dosageform_is_active = $request->dosageform_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Dosage Form record created successfully'
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

            $dosageform = DosageForm::findOrFail($id);            
            return response()->json([
                'message' => 'Edit', 
                'data' => $dosageform
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
                'dosageform_name' => 'required',                
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = DosageForm::findOrFail($request->id);
            $obj->dosageform_name = $request->dosageform_name ?? '';
            $obj->dosageform_is_active = $request->dosageform_is_active ?? '1';
            $obj->save();

            return response()->json([
                'message' => 'Dosage Form record updated successfully'
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
            $obj = DosageForm::findOrFail($id);
            $obj->delete();

            return response()->json([
                'message' => 'Dosage Form record deleted successfully'
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
