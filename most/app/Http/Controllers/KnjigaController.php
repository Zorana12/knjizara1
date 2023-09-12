<?php

namespace App\Http\Controllers;

use App\Http\Resources\KnjigaResurs;
use Illuminate\Http\Request;

class KnjigaController extends Controller
{
    public function index()
    {
        return KnjigaResurs::collection(\App\Models\Knjiga::all());
    }

    public function show($id)
    {
        return new KnjigaResurs(\App\Models\Knjiga::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
            'opis' => 'required',
            'pisac_id' => 'required',
            'zanr_id' => 'required',
            'cena' => 'required',
        ]);

        $knjiga = \App\Models\Knjiga::create($validatedData);

        return new KnjigaResurs($knjiga);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
            'opis' => 'required',
            'pisac_id' => 'required',
            'zanr_id' => 'required',
            'cena' => 'required',
        ]);

        $knjiga = \App\Models\Knjiga::findOrFail($id);
        $knjiga->update($validatedData);

        return new KnjigaResurs($knjiga);
    }

    public function destroy($id)
    {
        $knjiga = \App\Models\Knjiga::findOrFail($id);
        $knjiga->delete();

        return response()->json(null, 204);
    }
}
