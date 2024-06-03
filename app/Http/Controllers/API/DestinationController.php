<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Destination::with('packages')->get(); // Eager loading
        return response()->json([
            'data' => $data,
            'message' => 'Sukses',
            'code' => 200,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Destination::with('packages')->findOrFail($id); // Eager loading
        return response()->json([
            'data' => $item,
            'message' => 'Sukses',
            'code' => 200,
        ], 200);
    }
}
