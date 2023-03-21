@extends('customer.layout')

@section('content')
<br>
<h2>Enter Your Customer Details</h2><br>
<!--this form is for create items  -->

<!--onsubmit sending inputs to the itemcontroller's store function with POST method  -->
<form action="{{route('customer.store')}}" method="POST">
@csrf

<div class="row">

<div class="col-lg-12">
<div class= " form-group"> 
<label>Customer Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Customer Name">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Customer's Email</label>
<input type="text" class="form-control" id="itemdescription" name="email" placeholder="Enter Email">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Shipping Address</label>
<input type="text" class="form-control" id="itemdescription" name="shipping_address" placeholder="Enter Shipping Address">
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