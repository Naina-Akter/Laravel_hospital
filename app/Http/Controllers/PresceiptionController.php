<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Presceiption;
 


class PresceiptionController extends Controller{

    


   public function index(){
      
       $presceiption = Presceiption::all();
     return view("pages.presceiption.index",compact('presceiption'));
      
   }
}