<?php

namespace App\Http\Controllers;

use App\Models\Allergy;
use Illuminate\Http\Request;

class AllergyController extends Controller
{
    public function index()
    {
        return response()->json(Allergy::all());
    }

    public function store(Request $request)
    {
        $allergy = Allergy::create($request->all());
        return response()->json($allergy, 201);
    }

    public function show(Allergy $allergy)
    {
        return response()->json($allergy->load('patient'));
    }

    public function update(Request $request, Allergy $allergy)
    {
        $allergy->update($request->all());
        return response()->json($allergy);
    }

    public function destroy(Allergy $allergy)
    {
        $allergy->delete();
        return response()->json(null, 204);
    }
}
