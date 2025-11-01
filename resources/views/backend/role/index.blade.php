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
                            <div class="card-header d-flex">
                                <div>
                                    <h3 class="page-title">All Category</h3>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Photo</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key=>$item)
                                                <tr>
                                                    <td>{{ $key+1}}</td>
                                                    <td>{{ $item->name}}</td>
                                                    <td>{{ $item->slug}}</td>
                                                    <td><img width="30px" src="{{ URL::to('/media/category/'. $item->photo)}}" alt=""></td>
                                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="{{ route('category.show', $item->id) }}"> <i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-warning" href="{{ route('category.edit', $item->id) }}"> <i class="fa fa-edit"></i></a>
                                                        <form 
                                                            action="{{ route('category.destroy', $item->id) }}" 
                                                            method="POST" 
                                                            style="display: inline;"
                                                            onsubmit="return confirm('Are you sure you want to delete this category?');"
                                                        >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Category">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach                                   
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