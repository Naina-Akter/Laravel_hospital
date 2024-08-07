<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $doctor = Doctor::all();
        $department= Department::all();
        return view('frontend.home', compact('doctor','department'));
    }


    public function store_app(Request $request)
          
   {       $appointment = $request->except('submit');
            Appointment::create($appointment);
            return redirect()->back();
   }
}
