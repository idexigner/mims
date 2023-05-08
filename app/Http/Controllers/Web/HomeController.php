<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
}
