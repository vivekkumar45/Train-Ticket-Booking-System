<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function myBookings()
    {
        $bookings = Booking::all(); // or add a condition to fetch bookings for the authenticated user
        return view('mybooking', compact('bookings'));
    }

    // Add other methods for storing or managing bookings if needed
}
