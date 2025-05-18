<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Show the booking form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Handle form submission and store booking data.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'comment' => 'nullable|string',
            'branche' => 'required|string|max:255',
            'number_of_people' => 'required|integer|min:1',
            'booking_time' => 'required|date_format:H:i',
            'booking_date' => 'required|date',
        ]);



        booking::create($request->all());

        return back()->with('success', 'Appointment booked successfully.');
    }
}
