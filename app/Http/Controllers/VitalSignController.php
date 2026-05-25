<?php

namespace App\Http\Controllers;

use App\Models\VitalSign;
use Illuminate\Http\Request;

class VitalSignController extends Controller
{
    public function index()
    {
        return response()->json(VitalSign::all());
    }

    public function store(Request $request)
    {
        $vitalSign = VitalSign::create($request->all());
        return response()->json($vitalSign, 201);
    }

    public function show(VitalSign $vitalSign)
    {
        return response()->json($vitalSign->load('medicalRecord'));
    }

    public function update(Request $request, VitalSign $vitalSign)
    {
        $vitalSign->update($request->all());
        return response()->json($vitalSign);
    }

    public function destroy(VitalSign $vitalSign)
    {
        $vitalSign->delete();
        return response()->json(null, 204);
    }
}
