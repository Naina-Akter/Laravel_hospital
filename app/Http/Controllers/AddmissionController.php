<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addmission;
use App\Models\Department;
use App\Models\Seat;
class AddmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addmission= Addmission::all();
        return view('pages.addmission.index', compact('addmission'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
             
      
    }

     
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         
    }

    
 
    public function destroy(string $id)
    {
        
    }


    public function admit(Request $request)
    {
        return view('pages.addmission.admit');

         
    }

     

}
