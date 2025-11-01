@extends('layouts.app')
@section('main')
  <div class="login-card">
    <div class="form-header">
      <h3 class="fw-bold text-primary">Student Login</h3>
      <p class="text-muted mb-0">Enter your credentials to access your account</p>
      <hr class="mx-auto mt-3" style="width:80px; height:3px; background:#4364f7; border:none;">
       @include('layouts.components.message')
    </div>

    <form action="" method="POST">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label fw-semibold">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="remember" name="remember">
          <label class="form-check-label small-text" for="remember">
            Remember me
          </label>
        </div>
        <a href="#" class="small-text text-primary text-decoration-none">Forgot password?</a>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold rounded-pill">Login</button>
      </div>

      <div class="text-center mt-3 small-text">
        Don't have an account? <a href="{{ route('frontend.pages.register') }}" class="text-primary fw-semibold text-decoration-none">Register Now</a>
      </div>
    </form>
  </div>

  @endsection