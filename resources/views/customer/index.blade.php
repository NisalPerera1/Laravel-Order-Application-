@extends('order.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"><br>
                <h2>Here is the Existing Customer Details</h2><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('customer.create')}}"> Create New Customer</a>                
                <a class="btn btn-Primary" href="{{route('order.index')}}"> Go To Orders</a><br>

            </div><br>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif



    <table class="table table-bordered">
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Shipping Address</th>
            <th width="280px">Action</th>
        </tr>
<!--this is for view details.data object assigned in the controller -->
<tbody>
        @foreach ($data as $datanew)
            <tr>
                <td>{{ $datanew->id }}</td>
                <td>{{ $datanew->name }}</td>
                <td>{{ $datanew->email }}</td>
                <td>{{ $datanew->shipping_address }}</td>

                <td>
                <!--we cant set the delete function as before. it will be sending as post request.So I created a form -->
                <!--in here method = form method -->
                <form action="{{ route('customer.destroy', $datanew->id) }}" method="POST">

                <!--Couldnt get outside edit button from form created for delete.css flipping  -->
                <a class="btn btn-primary" href="{{ route('customer.edit', $datanew->id) }}">Edit</a>

                <!--we cant set the delete function as before. it will be sending as post request. -->
                <form action="{{ route('customer.destroy', $datanew->id) }}" method="POST">
                <!--in here method = form method -->

                @csrf
                 <!--Here is the Button method method -->
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger" type="" >Delete</button>
                        </form>


                </td>
            </tr>
        @endforeach



    </table>
@endsection
