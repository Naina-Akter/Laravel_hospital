<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Customer;
 


class AppointmentController extends Controller{

    


   public function index(){
      
      $appoint= Appointment::paginate(5);
     return view("pages.appointment.index",compact('appoint'));
      
   }

   public function approve($id)
   {
      $appointment = Appointment::find($id);
      $appointment->status = '1';
      $appointment->update();
      return redirect()->route('appointments.index');   
   }





  
}