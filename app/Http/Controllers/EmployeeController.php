<?php

namespace App\Http\Controllers;

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
        return view('employee.index', [
            'employee' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data yang sudah di kirim
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

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employee.detail', [
            'detail' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.update', [
            'data' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //validasi data yang sudah di kirim
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

        return redirect()->to("employee/$employee->id");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
