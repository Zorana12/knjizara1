<?php

namespace App\Http\Controllers;

use App\Models\Zanr;
use Illuminate\Http\Request;

class ZanrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ZanrResurs::collection(\App\Models\Zanr::all());
    }

    public function show($id)
    {
        return new ZanrResurs(\App\Models\Zanr::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'zanr' => 'required',
        ]);

        $zanr = \App\Models\Zanr::create($validatedData);

        return new ZanrResurs($zanr);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'zanr' => 'required',
        ]);

        $zanr = \App\Models\Zanr::findOrFail($id);
        $zanr->update($validatedData);

        return new ZanrResurs($zanr);
    }

    public function destroy($id)
    {
        $zanr = \App\Models\Zanr::findOrFail($id);
        $zanr->delete();

        return response()->json(null, 204);
    }
}
