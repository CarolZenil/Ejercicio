@extends('layouts.app')

@section('content')
	<div class="container">
   	 	<div class="row justify-content-center">
        	<div class="col-md-8">
        	    <center><h1>Update employee</h1></center>

		      	<form class="" action=" /employee/{{ $employee->idEmployee }}" method="post" enctype="multipart/form-data">
		      		{{ method_field('PUT') }}
		        	{{ csrf_field() }}

			        <div class="form-group ">
				        <label for="">Name: </label>
				         <input type="text" class="form-control" name="name" value="{{ $employee->name }}">
				    </div>
		        	 <div class="form-group ">
				        <label for="">Email: </label>
				         <input type="email" class="form-control" name="email" value="{{ $employee->email }}">
				    </div>
		        	
		        	<div class="form-group ">
				        <label for="">Birthdate: </label>
				         <input type="date" class="form-control" name="birthdate"  value="{{$birthdate}}" required>
				    </div>


				    <div class="form-group ">
				        <label for="">Job: </label>
				         <input type="text" class="form-control" name="job" value="{{ $employee->job }}">
				    </div>

				    <div class="form-group ">
				        <label for="">Domicile: </label>
				         <input type="text" class="form-control" name="domicile" value="{{ $employee->domicile }}">
				    </div>			     
		        	<center><button type="submit" class="btn btn-primary">Save</button></center>
		      	</form>
        	</div>
      	</div>
  	</div>
@endsection