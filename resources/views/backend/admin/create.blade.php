@extends('layouts.backapp')

@section('main')

    <!-- Page Wrapper -->
        <div class="page-wrapper">
        
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <div>
                                    <h3 class="page-title">Add New Admin</h3>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ route('admin.index') }}" class="btn btn-primary">All Admin </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- First Name -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label">First Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') is-invalid @enderror" placeholder="Enter first name">
                                        @error('first_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label">Last Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control @error('last_name') is-invalid @enderror" placeholder="Enter last name">
                                        @error('last_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email address">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password">
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Photo -->
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label">Photo</label>
                                    <div class="col-lg-9">
                                        <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
                                        @error('photo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Admin Role -->
                                <div class="form-group row mb-4">
                                    <label class="col-lg-3 col-form-label">Admin Role</label>
                                    <div class="col-lg-9">
                                        <select name="admin_role" class="form-control @error('admin_role') is-invalid @enderror">
                                            <option value="">Select Role</option>
                                            <option value="superadmin" {{ old('admin_role') == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                                            <option value="manager" {{ old('admin_role') == 'manager' ? 'selected' : '' }}>Manager</option>
                                            <option value="staff" {{ old('admin_role') == 'staff' ? 'selected' : '' }}>Staff</option>
                                        </select>
                                        @error('admin_role')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
                               
            </div>			
        </div>
        <!-- /Page Wrapper -->

@endsection