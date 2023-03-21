@extends('order.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"><br>
                <h2>Here is the Existing Order Details</h2><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> Create New Order</a>
                <a class="btn btn-Primary" href="{{route('customer.index')}}"> View Customers</a><br>
<br>
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
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Total Amount</th>
            <th width="280px">Action</th>
        </tr>

@foreach($orderdata as $data)

@endforeach


    </table>
@endsection
