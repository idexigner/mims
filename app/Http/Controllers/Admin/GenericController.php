<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Generic;
use App\Traits\LogExceptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;


class GenericController extends Controller
{    
    use LogExceptions;
    public function index(Request $request)
    {        
        if ($request->ajax()) {
            // dd("ajax");
            $data = Generic::with('indications')->select('*')->orderBy('generic_id', 'DESC');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.generic');
    }
   
    public function list(Request $request)
    {
        $search = $request->input('query');
        $generics = Generic::where('generic_name', 'LIKE', '%' . $search . '%')->limit(20)->get();
        return response()->json($generics);
    }

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'generic_name' => 'required',
                'generic_classification' => 'required',
                'generic_safety_remark' => 'required'
                // 'content' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = new Generic;
            $obj->generic_name = $request->generic_name ?? '';
            $obj->generic_classification = $request->generic_classification ?? '';
            $obj->generic_safety_remark = $request->generic_safety_remark ?? '';
            $obj->generic_indication = $request->generic_indication ?? '';
            $obj->generic_indication_tags = $request->generic_indication_tags ?? '';
            $obj->generic_dosage_administration = $request->generic_dosage_administration ?? '';
            $obj->generic_contraindication_precaution = $request->generic_contraindication_precaution ?? '';
            $obj->generic_composition = $request->generic_composition ?? '';
            $obj->generic_pharmacology = $request->generic_pharmacology ?? '';
            $obj->generic_interaction = $request->generic_interaction ?? '';
            $obj->generic_side_effect = $request->generic_side_effect ?? '';
            $obj->generic_overdose_effect = $request->generic_overdose_effect ?? '';
            $obj->generic_storage_condition = $request->generic_storage_condition ?? '';
            $obj->generic_pregnancy_lactation   = $request->generic_pregnancy_lactation ?? '';
            $obj->generic_is_active = $request->generic_is_active ?? '1';
            $obj->save();

            return response()->json([
                    'message' => 'Generic record created successfully'
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

            $generic = Generic::findOrFail($id);            
            return response()->json([
                'message' => 'Edit', 
                'data' => $generic
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
                'generic_name' => 'required',
                'generic_classification' => 'required',
                'generic_safety_remark' => 'required'
                // 'content' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $obj = Generic::findOrFail($request->id);
            $obj->generic_name = $request->generic_name ?? '';
            $obj->generic_classification = $request->generic_classification ?? '';
            $obj->generic_safety_remark = $request->generic_safety_remark ?? '';
            $obj->generic_indication = "asas";//$request->generic_indication ?? '';
            $obj->generic_indication_tags = $request->generic_indication_tags ?? '';
            $obj->generic_dosage_administration = $request->generic_dosage_administration ?? '';
            $obj->generic_contraindication_precaution = $request->generic_contraindication_precaution ?? '';
            $obj->generic_composition = $request->generic_composition ?? '';
            $obj->generic_pharmacology = $request->generic_pharmacology ?? '';
            $obj->generic_interaction = $request->generic_interaction ?? '';
            $obj->generic_side_effect = $request->generic_side_effect ?? '';
            $obj->generic_overdose_effect = $request->generic_overdose_effect ?? '';
            $obj->generic_storage_condition = $request->generic_storage_condition ?? '';
            $obj->generic_pregnancy_lactation   = $request->generic_pregnancy_lactation ?? '';
            $obj->generic_is_active = $request->generic_is_active ?? '1';
            $obj->save();

            return response()->json([
                'message' => 'Generic record updated successfully'
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
            $obj = Generic::findOrFail($id);
            $obj->delete();

            return response()->json([
                'message' => 'Generic record deleted successfully'
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
