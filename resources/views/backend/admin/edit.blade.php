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
                                    <h3 class="page-title">Edit Brands</h3>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ route('brand.index') }}" class="btn btn-primary">All Brands </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    {{-- Brand Name --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Brand Name</label>
                                        <div class="col-lg-9">
                                            <input 
                                                type="text" 
                                                name="name" 
                                                value="{{ old('name', $brand->name) }}" 
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Enter brand name"
                                            >
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Brand Logo --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Brand Logo</label>
                                        <div class="col-lg-9">
                                            <input 
                                                type="file" 
                                                name="logo" 
                                                class="form-control @error('logo') is-invalid @enderror"
                                            >
                                            <p class="text-danger mb-2">N.B: If you don’t want to update the logo, leave this blank.</p>

                                            {{-- Show current logo --}}
                                            @if($brand->logo)
                                                <div class="mt-2">
                                                    <img src="{{ asset('media/brands/' . $brand->logo) }}" 
                                                        alt="Current Logo" 
                                                        width="120" 
                                                        class="rounded border p-1 shadow-sm">
                                                </div>
                                            @endif

                                            @error('logo')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Submit --}}
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update Brand</button>
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