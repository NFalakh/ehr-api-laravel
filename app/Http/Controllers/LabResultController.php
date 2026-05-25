<?php

namespace App\Http\Controllers;

use App\Models\LabResult;
use Illuminate\Http\Request;

class LabResultController extends Controller
{
    public function index()
    {
        return response()->json(LabResult::all());
    }

    public function store(Request $request)
    {
        $labResult = LabResult::create($request->all());
        return response()->json($labResult, 201);
    }

    public function show(LabResult $labResult)
    {
        return response()->json($labResult->load('medicalRecord'));
    }

    public function update(Request $request, LabResult $labResult)
    {
        $labResult->update($request->all());
        return response()->json($labResult);
    }

    public function destroy(LabResult $labResult)
    {
        $labResult->delete();
        return response()->json(null, 204);
    }
}
