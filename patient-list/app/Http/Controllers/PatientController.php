<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    // Display a listing of the patients
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    // Show the form to create a new patient
    public function create()
    {
        return view('patients.create');
    }

    // Store a newly created patient in the database
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'required|max:15',
            'dob' => 'required|date',
            'address' => 'required',
        ]);

        Patient::create($request->all());
        return redirect()->route('patients.index');
    }

    // Show the form to edit an existing patient
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    // Update the specified patient in the database
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:patients,email,' . $patient->id,
            'phone' => 'required|max:15',
            'dob' => 'required|date',
            'address' => 'required',
        ]);

        $patient->update($request->all());
        return redirect()->route('patients.index');
    }

    // Delete the specified patient from the database
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index');
    }
}
