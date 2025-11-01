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
                        @include('backend.components.message')
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <div>
                                    <h3 class="page-title mb-0">All Admins</h3>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ route('admin.create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Add New Admin
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="datatable table table-striped align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($admins as $key => $admin)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>

                                                    <td>
                                                        @if($admin->photo)
                                                            <img src="{{ asset('media/admins/' . $admin->photo) }}" alt="Admin Photo" width="40" height="40" class="rounded-circle border">
                                                        @else
                                                            <img src="{{ asset('media/default-avatar.png') }}" alt="No Photo" width="40" height="40" class="rounded-circle border">
                                                        @endif
                                                    </td>

                                                    <td>{{ $admin->first_name }} {{ $admin->last_name }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->phone ?? '—' }}</td>
                                                    <td><span class="badge bg-info text-dark">{{ ucfirst($admin->admin_role) }}</span></td>

                                                    <td>
                                                        @if($admin->status)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>

                                                    <td>{{ \Carbon\Carbon::parse($admin->created_at)->diffForHumans() }}</td>

                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="{{ route('admin.show', $admin->id) }}" title="View"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-warning" href="{{ route('admin.edit', $admin->id) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this admin?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center text-muted">No admins found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                               
            </div>			
        </div>
        <!-- /Page Wrapper -->

@endsection