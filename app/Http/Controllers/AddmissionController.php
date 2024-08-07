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
        $seat= Seat::all();
        $dept=Department::all();
        return view("pages.addmission.create", compact('seat', 'dept'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Addmission::create($request->all());
       return redirect()->route('addmissions.index');
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
        $addmission=Addmission::findorfail($id);
        $dept=Department::all();
    
        return view('pages.Addmission.edit',compact('addmission','dept'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $addmission=Addmission::findorfail($id);
        // $addmission->update($request->all());
        // return redirect()->route('addmissions.index');
        dd($addmission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
