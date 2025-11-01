@extends('layouts.app')

@section('main')
<div class="register-card mx-auto my-5">    
    <div class="form-header text-center">
        <h3 class="fw-bold text-primary">Student Registration</h3>
        <p class="text-muted mb-0">Fill in your information below</p>
        <hr class="mx-auto mt-3" style="width:80px; height:3px; background:#4364f7; border:none;">
        @include('layouts.components.message')
    </div>

    <form action="{{ route('frontend.pages.register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <!-- Student ID -->
            <div class="col-md-6">
                <label for="student_id" class="form-label fw-semibold">Student ID</label>
                <input type="text" 
                       class="form-control @error('student_id') is-invalid @enderror" 
                       id="student_id" 
                       name="student_id" 
                       value="{{ old('student_id') }}" 
                       placeholder="e.g. STU-00123" required>
                @error('student_id')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Full Name -->
            <div class="col-md-6">
                <label for="name" class="form-label fw-semibold">Full Name</label>
                <input type="text" 
                       class="form-control @error('name') is-invalid @enderror" 
                       id="name" 
                       name="name" 
                       value="{{ old('name') }}" 
                       placeholder="Enter your full name" required>
                @error('name')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       id="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       placeholder="example@email.com" required>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Phone -->
            <div class="col-md-6">
                <label for="phone" class="form-label fw-semibold">Phone</label>
                <input type="tel" 
                       class="form-control @error('phone') is-invalid @enderror" 
                       id="phone" 
                       name="phone" 
                       value="{{ old('phone') }}" 
                       placeholder="e.g. +8801XXXXXXXXX" required>
                @error('phone')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="col-md-6">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       id="password" 
                       name="password" 
                       placeholder="Enter password" required>
                @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="col-md-6">
                <label for="password_confirm" class="form-label fw-semibold">Confirm Password</label>
                <input type="password" 
                       class="form-control @error('password_confirmation') is-invalid @enderror" 
                       id="password_confirm" 
                       name="password_confirmation" 
                       placeholder="Confirm password" required>
                @error('password_confirmation')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address -->
            <div class="col-12">
                <label for="address" class="form-label fw-semibold">Address</label>
                <textarea class="form-control @error('address') is-invalid @enderror" 
                          id="address" 
                          name="address" 
                          rows="2" 
                          placeholder="Enter your address" required>{{ old('address') }}</textarea>
                @error('address')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Photo -->
            <div class="col-12">
                <label for="photo" class="form-label fw-semibold">Upload Photo</label>
                <input class="form-control @error('photo') is-invalid @enderror" 
                       type="file" 
                       id="photo" 
                       name="photo" 
                       accept="image/*" required>
                @error('photo')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-semibold">Register</button>
        </div>

        <!-- Login Link -->
        <div class="text-center mt-3">
            <p class="text-muted mb-0">Already registered? 
                <a href="{{ route('frontend.pages.login') }}" class="text-primary fw-semibold text-decoration-none">Login here</a>
            </p>
        </div>
    </form>
</div>
@endsection
