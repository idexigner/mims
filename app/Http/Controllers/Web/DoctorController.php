<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Traits\LogExceptions;

class DoctorController extends Controller
{
    use LogExceptions;

    public function index()
    {
       
        return view('frontend.doctor');
    }

    public function get_home_doctor(Request $request){
        try{

            $data = Doctor::select('doctor_id', 'doctor_name', 'doctor_specialization', 'doctor_image')
                ->where('doctor_is_active', 1)
                ->where('doctor_is_featured',1)
                ->limit(3)
                ->get();      

            return response()->json([
                'message' => 'Get Doctor', 
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

    public function get_doctor(Request $request){
        try{

            $data = Doctor::select('*')
                ->where('doctor_is_active', 1)
                ->limit(50)
                ->get();      

            return response()->json([
                'message' => 'Get All Doctos', 
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
}
