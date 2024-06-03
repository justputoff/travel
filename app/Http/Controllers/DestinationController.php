<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Destination::with('packages')->get(); // Eager loading
        return view('pages.destination.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        Destination::create($request->all());

        return redirect()->route('destination.index')->with('success', 'Destination created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Destination::with('packages')->findOrFail($id); // Eager loading
        return view('pages.destination.show', [
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Destination::findOrFail($id);
        return view('pages.destination.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        $item = Destination::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('destination.index')->with('success', 'Destination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Destination::findOrFail($id);
        $item->delete();

        return redirect()->route('destination.index')->with('success', 'Destination deleted successfully');
    }
}