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
        // if ($request->ajax()) {
        //     $data = Generic::select('*');
            
        //     return DataTables::of($data)
        //         ->addColumn('action', function ($row) {
        //             $btn = '<a href="#" class="edit btn btn-primary data-id="'.$post->id.'" btn-sm">Edit</a> ';
        //             $btn .= '<a href="#" class="delete btn btn-danger btn-sm">Delete</a>';

        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        if ($request->ajax()) {
            // dd("ajax");
            $data = Generic::select('*');
            return DataTables::of($data)->make(true);
        }

        return view('admin.pages.generic');
    }
    public function storesaa(){
        dd("Test2");
    }
    // public function store(Request $request)
    // {
    //     // dd("Test");
    //     $request->validate([
    //         'generic_name' => 'required'
    //     ]);

    //     Generic::create($request->all());

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Generic created successfully.',
    //     ]);
    // }


    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'generic_name' => 'required',
            // 'content' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $post = new Generic;
        $post->generic_name = $request->generic_name;
        // $post->content = $request->content;
        $post->save();

        return response()->json(['message' => 'Post created successfully'], 200);
    }

    // public function edit(Generic $generic)
    // {
    //     return response()->json([
    //         'success' => true,
    //         'data' => $generic,
    //     ]);
    // }

    public function edit($id)
    {
        // dd("test");
        $post = \DB::table('generic')->where('generic_id', $id)->first();//Generic::findOrFail($id);
        
        // dd(isset($post));
        if($post){
            return response()->json(['message' => 'Edit', 'data' => $post], 200);
        }else{
            return response()->json(['message' => 'Edit', 'data' => $post], 200);

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

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'generic_name' => 'required'
        ]);

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
