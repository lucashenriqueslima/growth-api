<?php

namespace App\Http\Controllers;

use App\Models\Biker;
use Illuminate\Http\Request;

class BikerController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, Biker $biker)
    {
        $request->validate([
            'status' => 'required|in:avaible,not_avaible',
        ]);

        $biker->update([
            'status' => $request->status,
        ]);

        return response(status: 200);
    }

    public function destroy(string $id)
    {
        //
    }
}
