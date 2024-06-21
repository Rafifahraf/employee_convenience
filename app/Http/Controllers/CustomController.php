<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class CustomController extends Controller
{
    public function show_dashboard()
    {
        $employee = new Employee();
        return view('employee.dashboard', [
            'total_worker' => $employee->all()->count(),
            'male_worker' => $employee->where('gender', '=', 1)->count(),
            'female_worker' => $employee->where('gender', '=', 0)->count()

        ]);
    }

    public function register_process(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        return redirect()->route('login');
    }

    public function show_register()
    {
        return view('auth.register');
    }

    public function login_process(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with('message', 'The provided credentials do not match our records.', );
    }

    public function show_login()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
