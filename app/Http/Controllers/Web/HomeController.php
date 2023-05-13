<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }

    public function disclaimer(){
        return view('frontend.disclaimer');
    }

    public function privacy_policy(){
        return view('frontend.privacy_policy');
    }

    public function search(Request $request){
        // return "asdasdasdasd";
        // dd("asd");
        $data = Brand::with('dosage_form')
        // ->select('brand_id', 'brand_name', 'brand_type', 'dosage_form')
        ->where('brand_name', 'like', $request->keyword.'%')
        // ->where('brand_is_active',1)
        // ->orderBy('brand_id', 'DESC')
        ->limit(20)
        ->get();      

        // dd($data);
        return response()->json([
            'message' => 'Brand Search', 
            'data' => $data
        ], 200);
    }
}
