<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
        /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        // You can pass data to the view if needed
        return view('backend.pages.dashboard');
    }
    
    /**
     * Display a listing of the admins.
     */
    public function index()
    {
        $admins = Admin::latest()->get();
        return view("backend.admin.index", compact('admins'));
    }

    /**
     * Show the form for creating a new admin.
     */
    public function create()
    {
        return view("backend.admin.create");
    }

    /**
     * Store a newly created admin in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "first_name" => "required|string|max:100",
            "last_name"  => "required|string|max:100",
            "email"      => "required|email|unique:admins,email",
            "phone"      => "nullable|string|max:20",
            "password"   => "required|min:6",
            "admin_role" => "required|string",
            "photo"      => "nullable|image|mimes:jpg,jpeg,png,webp|max:2048"
        ], [
            "email.unique" => "This admin email already exists.",
        ]);

        // Handle photo upload
        $fileName = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('media/admins/'), $fileName);
        }

        // Create new admin
        Admin::create([
            "first_name" => $request->first_name,
            "last_name"  => $request->last_name,
            "email"      => $request->email,
            "phone"      => $request->phone,
            "password"   => Hash::make($request->password),
            "photo"      => $fileName,
            "admin_role" => $request->admin_role,
            "status"     => 1, // active by default
        ]);

        return redirect()->route('admin.index')->with('success', "Admin created successfully!");
    }

    /**
     * Display the specified admin.
     */
    public function show(Admin $admin)
    {
        return view('backend.admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified admin.
     */
    public function edit(Admin $admin)
    {
        return view("backend.admin.edit", compact('admin'));
    }

    /**
     * Update the specified admin in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            "first_name" => "required|string|max:100",
            "last_name"  => "required|string|max:100",
            "email"      => "required|email|unique:admins,email," . $admin->id,
            "phone"      => "nullable|string|max:20",
            "admin_role" => "required|string",
            "photo"      => "nullable|image|mimes:jpg,jpeg,png,webp|max:2048",
        ]);

        // Handle photo update
        $fileName = $admin->photo;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $newFile = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Delete old photo if exists
            if ($admin->photo && file_exists(public_path('media/admins/' . $admin->photo))) {
                unlink(public_path('media/admins/' . $admin->photo));
            }

            $file->move(public_path('media/admins/'), $newFile);
            $fileName = $newFile;
        }

        $admin->update([
            "first_name" => $request->first_name,
            "last_name"  => $request->last_name,
            "email"      => $request->email,
            "phone"      => $request->phone,
            "admin_role" => $request->admin_role,
            "photo"      => $fileName,
        ]);

        return redirect()->route('admin.index')->with('success', "Admin updated successfully!");
    }

    /**
     * Remove the specified admin from storage.
     */
    public function destroy(Admin $admin)
    {
        if ($admin->photo && file_exists(public_path('media/admins/' . $admin->photo))) {
            @unlink(public_path('media/admins/' . $admin->photo));
        }

        $admin->delete();

        return back()->with('success', 'Admin deleted successfully!');
    }

    public function login(Request $request){
        // validation
        $credentials = $request->validate([
           'email'      => 'required|email|max:100',
            'password'   => 'required',
        ]);
        // return $request->all();
        // auth check
        if(Auth::guard('admin') -> attempt($credentials)){
            return redirect('/backend.admin.dashboard');
        }


        return back();
    }

    public function logout(){
        Auth::guard('admin') ->logout();
        return redirect('/admin-panel');
    }
}
