<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Customer;
 


class AppointmentController extends Controller{

    


   public function index(){
      
      $appoint= Appointment::all();
     return view("pages.appointment.index",compact('appoint'));
      
   }

  





   public function destroy(string $id)
   {
       $appoint = Appointment::findorfail($id);
       $appoint->delete();
       return back();
   }
}