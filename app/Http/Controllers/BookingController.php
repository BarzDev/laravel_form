<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::paginate(7);
        return view('index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //  dd($request->all());
        Booking::create($request->validate([
            'name' => 'required',
            'phone' => 'required|max:14',
            'booking_date' => 'required|date',
            'type' => 'required'
        ]));

        return redirect()->route('index')->with('success', 'Booking added!');
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
        $booking = Booking::findOrFail($id);
       return view('edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
     {
        $updateData = $request->validate([
        'name' => 'required',
        'phone' => 'required|max:14',
        'booking_date' => 'required|date',
        'type' => 'required'
    ]);

        $booking = Booking::findOrFail($id);
        $booking->update($updateData);
        return redirect()->route('index')->with('success', 'Booking updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('index')->with('success', 'Booking deleted successfully!');
    }
}
