<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $seat = Seat::paginate(5);
         return view('pages.seat.index', compact('seat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.seat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Seat::create($request->all());
        return redirect()->route('seats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         
            
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $seat = Seat::findorfail($id);
         return view('pages.seat.edit', compact('seat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function booked(Request $request, string $id)
    {
        $seat =Seat::findorfail($id);
        $seat->status='1';
        $seat->update();
        return redirect()->route('seats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
