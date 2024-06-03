<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'package'])->get();
        return view('pages.payment.index', compact('bookings'));
    }

    public function create(Request $request)
    {
        $booking = Booking::with(['user', 'package'])->findOrFail($request->booking_id);
        return view('pages.payment.create', compact('booking'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|integer',
            'payment_method' => 'required|string',
        ]);

        Payment::create([
            'booking_id' => $request->booking_id,
            'payment_method' => $request->payment_method,
            'amount' => Booking::findOrFail($request->booking_id)->total_price,
            'payment_date' => now(),
            'status' => 'success', // Menambahkan status
        ]);

        return redirect()->route('payments.index')->with('success', 'Payment made successfully.');
    }
}