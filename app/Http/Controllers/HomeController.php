<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Seat;
use App\Models\Appointment;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
       
    {   $patient= Patient::count();
        $doctor= Doctor::count();
        $seat= Seat::count();
        $appointment=Appointment::count();
        return view('pages.dashboard',compact('patient','doctor','seat','appointment'));
    }
}
