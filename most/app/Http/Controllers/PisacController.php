<?php

namespace App\Http\Controllers;

use App\Models\Pisac;
use Illuminate\Http\Request;

class PisacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PisacResurs::collection(\App\Models\Pisac::all());
    }

    public function show($id)
    {
        return new PisacResurs(\App\Models\Pisac::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
        ]);

        $zemlja = \App\Models\Pisac::create($validatedData);

        return new PisacResurs($pisac);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
        ]);

        $pisac = \App\Models\Pisac::findOrFail($id);
        $pisac->update($validatedData);

        return new PisacResurs($pisac);
    }

    public function destroy($id)
    {
        $pisac = \App\Models\Pisac::findOrFail($id);
        $pisac->delete();

        return response()->json(null, 204);
    }

}
