@extends('adminlte::page')

@section('content')
    <table class="table table-striped table-bordered" id="example">
        <thead style="background-color: #fff">
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Bags</th>
                <th>previous_bags</th>
                <th>bill_paid</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody><?php $i=0?>
        	@foreach($showdata as $showoff)
        	<?php $i++?>
            <tr>
            	<td>{{$i}}</td>
            	<td>{{ Carbon\Carbon::parse($showoff->date)->format('d-m-Y') }}</td><br>
            	
            	<td>{{$showoff->bags}}</td>
            	<td>{{$showoff->previous_bags}}</td>
            	<td>{{$showoff->bill_paid}}</td>
            	<td><a href="#"><b class="btn btn-primary">View</b></a>
            		<a href="#"><b class="btn btn-success">Edit</b></a>
            		<!-- <a href="{{url('remove',[$showoff->id])}}"><b class="del btn btn-danger" onclick="return confirm('Are you sure?')">Delete</b></a> -->
            		<button value="{{$showoff->id}}" id="dele" class="del btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

    <script src="//code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.del').click(function(){

			var id= $(this).val();
			$.ajax({
				type: "get",
				url: "remove/{id}",
				data: {id:id,"_token": "{{ csrf_token() }}"},
				ataType:"json",
          success: function (data) {
              console.log(data);
              //$( "#disp" ).append( "<strong>"+data.description+":</strong></br>");
              //document.getElementById('disp').innerHTML=data.description;
          },
          error: function (data) {
              console.log('Error:', data);
          }
			});
		});
	});
</script>