@extends('admin.layouts.app')
@section('title', 'Subscription')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection



@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Subscribed Customer List</h5>
        
    </div>
    <div class="table-responsive text-nowrap">
        <div class="container">
            <table class="table" id="datatable-subscription">
                <thead>
                    <tr>
                        <th>Subscriber Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($subscriptions as $subscription)
                    <tr>
                        <td>{{$subscription->name}}</td>
                        <td>{{$subscription->email}}</td>
                        <td>{{$subscription->phone}}</td>
                        <td>{{$subscription->message}}</td>
                       
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable-subscription').DataTable();
        } );
    </script>
@endsection