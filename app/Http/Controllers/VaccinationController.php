<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use Illuminate\Http\Request;

class VaccinationController extends Controller
{

    // READ
    public function index()
    {
        return Vaccination::all();
    }

    // CREATE
    public function store(Request $request)
    {
        $vaccination = Vaccination::create($request->all());
        return response()->json($vaccination);
    }

    // READ SINGLE
    public function show($id)
    {
        return Vaccination::find($id);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $vaccination = Vaccination::find($id);
        $vaccination->update($request->all());
        return response()->json($vaccination);
    }

    // DELETE
    public function destroy($id)
    {
        Vaccination::destroy($id);
        return response()->json(['message' => 'Record deleted']);
    }
}