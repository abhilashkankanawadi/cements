@extends('adminlte::page')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid">
	<div class="row">
		<h2>Enter Details</h2>
	<form method="POST" action="{{url('/adding')}}">
		{{ csrf_field() }}
		<div class="form-group col-md-6">
      <label for="date">Date</label>
      <input type="date" class="form-control" id="date1" placeholder="date" name="date">
      @if ($errors->has('date'))

                	<span class="text-danger ">{{ $errors->first('date') }}</span>

            	@endif
    </div>

    <div class="form-group col-md-6">
      <label for="bags">Bags</label>
      <input type="text" class="form-control" id="bag" placeholder="bags" name="bags">
    </div>
    <div class="form-group col-md-6">
      <label for="previous_bags">Previos Bags</label>
      <input type="text" class="form-control" id="previous_bag" placeholder="previous_bags" name="previous_bags">
    </div>
    <div class="form-group col-md-6">
      <label for="bill_paid">Bill Paid</label>
      <input type="text" class="form-control" id="bill_paids" placeholder="Password" name="bill_paid">
    </div>
    <div class="form-group col-md-6">
      <label for="bag_rate">Bag Rate</label>
      <input type="text" class="form-control" id="bag_rates" placeholder="Bag Rate" name="bag_rate">
    </div>
    <div class="form-group col-md-6">
      <label for="unload_charge">Unloading Charges</label>
      <input type="text" class="form-control" id="unload_charges" placeholder="Enter Unloading Charge" name="unload_charge">
    </div>
    <div class="form-group col-md-6">
      <label for="invoice_number">Invoice Number</label>
      <input type="text" class="form-control" id="invoice_numbers" placeholder="Invoice number" name="invoice_number">
    </div>
    <div class="form-group col-md-6">
      <label for="vehicle_number">Vehicle Number</label>
      <input type="text" class="form-control" id="vehicle_number" placeholder="Enter Vehicle Number" name="vehicle_number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Attach Bill image</label>
      <input type="file" class="form-control" id="bill_images" placeholder="" name="bill_image">
    </div>
    <div class="form-group col-md-6">
      <label for="receiver_name">Received By</label>
      <input type="text" class="form-control" id="receiver_names" placeholder="Enter your name" name="receiver_name">
    </div>
    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
	</form>
	</div>
</div>
@endsection