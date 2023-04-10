<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Generic;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GenericController extends Controller
{    
    
    public function index(Request $request)
    {
        // dd("asdasd");
        if ($request->ajax()) {
            $data = Generic::select('*');

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="#" class="edit btn btn-primary btn-sm">Edit</a> ';
                    $btn .= '<a href="#" class="delete btn btn-danger btn-sm">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.generic');
    }
    public function storesaa(){
        dd("Test2");
    }
    public function store(Request $request)
    {
        // dd("Test");
        $request->validate([
            'generic_name' => 'required'
        ]);

        Generic::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Generic created successfully.',
        ]);
    }

    public function edit(Generic $generic)
    {
        return response()->json([
            'success' => true,
            'data' => $generic,
        ]);
    }

    public function update(Request $request, Generic $generic)
    {
        $request->validate([
            'generic_name' => 'required'
        ]);

        $generic->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Generic updated successfully.',
        ]);
    }

    public function destroy(Generic $generic)
    {
        $generic->delete();

        return response()->json([
            'success' => true,
            'message' => 'Generic deleted successfully.',
        ]);
    }
}
