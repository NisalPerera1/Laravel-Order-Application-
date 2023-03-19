@extends('order.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"><br>
                <h2>Here is the Existing Customer Details</h2><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> Create New Customer</a>                
                <a class="btn btn-Primary" href="{{'orders'}}"> Go To Orders</a><br>

            </div><br>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Shipping Address</th>
            <th width="280px">Action</th>
        </tr>
    </table>
@endsection
