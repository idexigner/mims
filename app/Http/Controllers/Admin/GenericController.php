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
            $data = Generic::select('*');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.generic');
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
            $obj->generic_overdoses_effect = $request->generic_overdose_effect ?? '';
            $obj->generic_storage_condition = $request->generic_storage_condition ?? '';
            $obj->generic_pregnancy_lactations   = $request->generic_pregnancy_lactation ?? '';
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

        // return view('posts.edit', compact('post'));
    }

    // public function update(Request $request, Generic $generic)
    // {
    //     $request->validate([
    //         'generic_name' => 'required'
    //     ]);

    //     $generic->update($request->all());

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Generic updated successfully.',
    //     ]);
    // }

    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'generic_name' => 'required'
        ]);
        $id= 1;
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $post = Generic::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return response()->json(['message' => 'Post updated successfully'], 200);
    }

    // public function destroy(Generic $generic)
    // {
    //     $generic->delete();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Generic deleted successfully.',
    //     ]);
    // }

    public function destroy($id)
    {
        $post = Generic::findOrFail($id);
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully'], 200);
    }
}
