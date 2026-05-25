<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return response()->json(Appointment::all());
    }

    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());
        return response()->json($appointment, 201);
    }

    public function show(Appointment $appointment)
    {
        return response()->json($appointment->load(['patient', 'doctor']));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->all());
        return response()->json($appointment);
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return response()->json(null, 204);
    }
}
