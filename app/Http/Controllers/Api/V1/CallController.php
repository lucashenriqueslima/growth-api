<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $associateId)
    {
        try {
            $call = Call::create([
                'associate_id' => $associateId,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);

            return response()->json($call, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating call'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Call $call)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Call $call)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Call $call)
    {
        //
    }
}
