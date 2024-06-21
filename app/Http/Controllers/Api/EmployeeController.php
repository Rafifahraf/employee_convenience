<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::all();
        return response()->json([
            'employee' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data yang sudah di kirim dari created.blade.php
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required|max_digits:13',
            'address' => 'required',
            'departement' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'avatar' => 'required'

        ]);

        //memasukan data yang sudah di kirim ke database
        Employee::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'departement' => $request->departement,
            'position' => $request->position,
            'salary' => $request->salary,
            'avatar' => $request->avatar
        ]);

        return response()->json([
            'message'=> 'data success created'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {

        return response()->json([
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //validasi data yang sudah di kirim dari created.blade.php
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required|max_digits:13',
            'address' => 'required',
            'departement' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'avatar' => 'required'

        ]);

        //memasukan data yang sudah di kirim ke database
        $employee->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'departement' => $request->departement,
            'position' => $request->position,
            'salary' => $request->salary,
            'avatar' => $request->avatar
        ]);

        return response()->json([
            'message' => 'data success update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json([
            'message' => 'data success delete'
        ]);
    }
}
