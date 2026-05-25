<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        return response()->json(MedicalRecord::all());
    }

    public function store(Request $request)
    {
        $record = MedicalRecord::create($request->all());
        return response()->json($record, 201);
    }

    public function show(MedicalRecord $medicalRecord)
    {
        return response()->json($medicalRecord->load(['patient', 'doctor', 'labResults', 'medications', 'vitalSigns']));
    }

    public function update(Request $request, MedicalRecord $medicalRecord)
    {
        $medicalRecord->update($request->all());
        return response()->json($medicalRecord);
    }

    public function destroy(MedicalRecord $medicalRecord)
    {
        $medicalRecord->delete();
        return response()->json(null, 204);
    }
}
