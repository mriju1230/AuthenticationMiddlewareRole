@extends('layouts.backapp')

@section('main')

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Admin Details</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admins</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title mb-0">Admin Information</h4>
                        <div class="ml-auto">
                            <a href="{{ route('admin.index') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-list"></i> All Admins
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Full Name</th>
                                <td>{{ $admin->first_name }} {{ $admin->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $admin->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $admin->phone ?? '—' }}</td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td>{{ ucfirst($admin->admin_role) }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if($admin->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                    @if($admin->photo)
                                        <img src="{{ asset('media/admins/' . $admin->photo) }}" 
                                             alt="{{ $admin->first_name }}" 
                                             width="120" 
                                             class="rounded border p-1 shadow-sm">
                                    @else
                                        <span class="text-muted">No photo uploaded</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $admin->created_at->format('d M, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $admin->updated_at->format('d M, Y h:i A') }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="card-footer text-end">
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back</a>
                        <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning">Edit Admin</a>
                    </div>
                </div>
            </div>
        </div>
                    
    </div>			
</div>
<!-- /Page Wrapper -->

@endsection
