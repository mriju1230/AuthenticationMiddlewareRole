<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    /**
     * Show admin login page.
     */
    public function showAdminLogin()
    {
        return view('backend.pages.index');
    }

    /**
     * Handle admin login form.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard')->with('success', 'Welcome back, Admin!');
        }

        return back()->withErrors(['email' => 'Invalid login credentials']);
    }

    /**
     * Display admin dashboard.
     */
    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }

    /**
     * Log admin out.
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.page')->with('success', 'You have been logged out.');
    }

    /**
     * (Optional) Index method for admin management
     */
    public function index()
    {
        // Example admin list page (if using resource route)
        return view('backend.pages.index');
    }
}
