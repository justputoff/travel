<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $packages = Package::with('destination')->get();
        return view('pages.books.index', compact('packages'));
    }

    public function create(Request $request)
    {
        $package = Package::findOrFail($request->package_id);
        return view('pages.books.create', compact('package'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'package_id' => 'required|integer',
            'booking_date' => 'required|date',
            'number_of_people' => 'required|integer',
            'total_price' => 'required|numeric',
        ]);

        Booking::create($request->all());

        return redirect()->route('books.index')->with('success', 'Booking created successfully.');
    }

    public function show($id)
    {
        $booking = Booking::with(['user', 'package'])->findOrFail($id);
        return view('pages.books.show', compact('booking'));
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $users = User::all();
        $packages = Package::all();
        return view('pages.books.edit', compact('booking', 'users', 'packages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'package_id' => 'required|integer',
            'booking_date' => 'required|date',
            'number_of_people' => 'required|integer',
            'total_price' => 'required|numeric',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($request->all());

        return redirect()->route('books.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('books.index')->with('success', 'Booking deleted successfully.');
    }
}