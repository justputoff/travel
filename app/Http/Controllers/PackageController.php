<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('pages.packages.index', compact('packages'));
    }

    public function show($id)
    {
        $package = Package::with('destination')->findOrFail($id);
        return view('pages.packages.show', compact('package'));
    }

    public function create()
    {
        $destinations = Destination::all();
        return view('pages.packages.create', compact('destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'destination_id' => 'required|integer',
        ]);

        Package::create($request->all());

        return redirect()->route('packages.index')->with('success', 'Package created successfully.');
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $destinations = Destination::all();
        return view('pages.packages.edit', compact('package', 'destinations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'destination_id' => 'required|integer',
        ]);

        $package = Package::findOrFail($id);
        $package->update($request->all());

        return redirect()->route('packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('packages.index')->with('success', 'Package deleted successfully.');
    }
}
