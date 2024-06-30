<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
 


class UserController extends Controller{

    


   public function index(){
      
      //print_r(Role::all());
     return view("pages.user.index");
      
   }
}