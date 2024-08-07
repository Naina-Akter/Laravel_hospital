<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor=Doctor::paginate(2);
      $doctor= Doctor::all();
      return view("pages.doctor.index", compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dept= Department::all();
        return view("pages.doctor.create", compact('dept'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time(). '.' . $request->img->extension();
      
      $input = $request->all();
      $input['img'] = $filename;
      $input['password'] = Hash::make($request->password);

      if(Doctor::create($input)) {
         $request->img->move('assets/images/uploads', $filename);
         return redirect()->back();
      }
        // dd($input);
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
        $doctor= Doctor::findorfail($id);
        $dept = Department::all();
        return view('pages.doctor.edit' , compact('doctor', 'dept'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = Doctor::findorfail($id);
        $input = $request->all();
  
        if($request->hasFile('img')){
           $filename = time() . '.' . $request->img->extension();
           $input['img'] = $filename;
           $request->img->move('assets/images/uploads', $filename);
        }
  
       
        if($doctor->update($input)){
           return redirect()->back();
        };
  
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
