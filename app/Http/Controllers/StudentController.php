<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function studentLogin(){
        return view('frontend.pages.login');
    }
    
    public function studentReg(){
        return view('frontend.pages.register');
    }

    public function register(Request $request)
    {
        // validation with custom messages
        $request->validate([
            'student_id' => 'required|string|max:8|unique:students,student_id',
            'name'       => 'required|string|max:100',
            'email'      => 'required|email|max:100|unique:students,email',
            'phone'      => 'required|string|max:20|unique:students,phone',
            'password'   => 'required|string|min:6|confirmed',
            'address'    => 'required|string|max:255',
            'photo'      => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'student_id.required' => 'Please enter your Student ID.',
            'student_id.unique'   => 'This Student ID is already registered.',
            'student_id.max'      => 'Student ID cannot exceed 8 characters.',
            'name.required'       => 'Please enter your full name.',
            'name.max'            => 'Name cannot exceed 100 characters.',
            'email.required'      => 'Please enter your email address.',
            'email.email'         => 'Please enter a valid email address.',
            'email.unique'        => 'This email is already registered.',
            'email.max'           => 'Email cannot exceed 100 characters.',
            'phone.required'      => 'Please enter your phone number.',
            'phone.unique'        => 'This phone number is already registered.',
            'phone.max'           => 'Phone number cannot exceed 20 characters.',
            'password.required'   => 'Please enter a password.',
            'password.min'        => 'Password must be at least 6 characters.',
            'password.confirmed'  => 'Passwords do not match.',
            'address.required'    => 'Please enter your address.',
            'address.max'         => 'Address cannot exceed 255 characters.',
            'photo.required'      => 'Please upload a photo.',
            'photo.image'         => 'Uploaded file must be an image.',
            'photo.mimes'         => 'Photo must be a JPG or PNG file.',
            'photo.max'           => 'Photo cannot exceed 2MB.',
        ]);

        // file upload
        $filename = null;
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('media/student/'), $filename);
        }

        // data store
        Student::create([
            'student_id' => $request->student_id,
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password'   => Hash::make($request->password),
            'address'    => $request->address,
            'photo'      => $filename,
        ]);

        // redirect with success message
        return redirect()->back()->with('success', 'Student registered successfully!');
    }
}
