@extends('customer.layout')

@section('content')


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<br>
<h2>Enter Your New Customer Details</h2><br>
<!--this form is for create items  -->

<!--onsubmit sending inputs to the itemcontroller's store function with POST method  -->
<form action="{{route('customer.update', $datanew->id)}}" method="POST">
@csrf
@method('PUT')

<div class="row">

<div class="col-lg-12">
<div class= " form-group"> 
<label>Customer Name</label>
<input type="text" class="form-control" name="name" value="{{$datanew->name}}" >
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Customer's Email</label>
<input type="text" class="form-control" name="email" value="{{$datanew->email}}">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Shipping Address</label>
<input type="text" class="form-control" name="shipping_address" value="{{$datanew->shipping_address}}">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<button type="submit" class="btn btn-primary" >Submit</button>

<!--href is assigned to index-->
<a class="btn btn-danger" href="{{route('customer.index')}}">Back</a>

</div>
</div>

</div>
</form>

@endsection