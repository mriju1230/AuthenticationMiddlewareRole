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
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title mb-0">Category Details</h4>
                        <div class="ml-auto">
                            <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-list"></i> All Category
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Category Name</th>
                                <td>{{ $category->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Category Photo</th>
                                <td>
                                    @if($category->photo)
                                        <img src="{{ asset('media/category/' . $category->photo) }}" 
                                            alt="{{ $category->name }}" 
                                            width="120" 
                                            class="rounded border p-1 shadow-sm">
                                    @else
                                        <span class="text-muted">No photo uploaded</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $category->created_at->format('d M, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $category->updated_at->format('d M, Y h:i A') }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('category.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
                    
    </div>			
</div>
<!-- /Page Wrapper -->

@endsection
