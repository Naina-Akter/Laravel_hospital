<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $doctor = Doctor::all();
        return view('frontend.home', compact('doctor'));
    }
}
