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
                                    <h3 class="page-title">Edit Category</h3>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ route('category.index') }}" class="btn btn-primary">All Category </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    {{-- Category Name --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Name</label>
                                        <div class="col-lg-9">
                                            <input 
                                                type="text" 
                                                name="name" 
                                                value="{{ old('name', $category->name) }}" 
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Enter category name"
                                            >
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Category Logo --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Photo</label>
                                        <div class="col-lg-9">
                                            <input 
                                                type="file" 
                                                name="photo" 
                                                class="form-control @error('photo') is-invalid @enderror"
                                            >
                                            <p class="text-danger mb-2">N.B: If you don’t want to update the photo, leave this blank.</p>

                                            {{-- Show current logo --}}
                                            @if($category->photo)
                                                <div class="mt-2">
                                                    <img src="{{ asset('media/category/' . $category->photo) }}" 
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
                                        <button type="submit" class="btn btn-primary">Update Category</button>
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