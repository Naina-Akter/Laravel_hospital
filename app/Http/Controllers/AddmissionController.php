<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addmission;
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
       return view('pages.addmission.create');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
