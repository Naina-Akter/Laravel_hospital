<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
 


class AppointmentController extends Controller{

    


   public function index(){
      
      //print_r(Role::all());
     return view("pages.appointment.index");
      
   }
}