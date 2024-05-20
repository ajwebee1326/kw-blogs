@extends('admin.layouts.app')
@section('title', 'Demo Users')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Demo List</h5>
        <a href="" class="btn btn-primary btn-sm">Add DemoUsers</a>
    </div>
    <div class="table-responsive text-nowrap">
        <div class="container">
            <table class="table table-hover" id="datatable-blog">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    
@endsection