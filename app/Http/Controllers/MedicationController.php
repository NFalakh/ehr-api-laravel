<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    public function index()
    {
        return response()->json(Medication::all());
    }

    public function store(Request $request)
    {
        $medication = Medication::create($request->all());
        return response()->json($medication, 201);
    }

    public function show(Medication $medication)
    {
        return response()->json($medication->load('medicalRecord'));
    }

    public function update(Request $request, Medication $medication)
    {
        $medication->update($request->all());
        return response()->json($medication);
    }

    public function destroy(Medication $medication)
    {
        $medication->delete();
        return response()->json(null, 204);
    }
}
