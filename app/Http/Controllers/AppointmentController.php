<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $purpose = $request->user()->Appointment;
        return response()->json($purpose);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'purpose' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
        ]);
    
        try {
            $validated['user_id'] = Auth::id();
            $appointment = Appointment::create($validated);
    
            return response()->json([
                'message' => 'You have successfully reserved an appointment.',
                'data' => $appointment], 201);
        } 
        catch (\Exception $e) {

            return response()->json([
                'message' => 'Failed to reserve appointment. ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json($appointment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'purpose'=>'required',
            'appointment_date'=>'required',
            'appointment_time'=>'required',
        ]);

        $appointment=Appointment::findOrFail($id);
        $appointment->update($validated);

        return response()->json(['message'=>'Your Appointment details have been updated.', 'data'=>$appointment]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $appointment=Appointment::findOrFail($id);
        $appointment->delete();

        return response()->json(['message'=>'Your appointment have been cancelled.' ],200);
    }
}
