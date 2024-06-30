<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bills;
 


class BillController extends Controller{

    


   public function index(){
      
      //print_r(Role::all());
     return view("pages.bill.index");
      
   }
}