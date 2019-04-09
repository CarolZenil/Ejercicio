@extends('layouts.app')

@section('content')
	<div class="container">
   	 	<div class="row justify-content-center">
        	<div class="col-md-8">
        	    <center><h1>Create employee</h1></center>

		      	<form class="" action=" {{ url('/employee')}}" method="post" enctype="multipart/form-data">
		      		
		        	{{ csrf_field() }}

			        <div class="form-group ">
				        <label for="n">Name: </label>
				         <input type="text" class="form-control" name="name" required>
				    </div>
		        	 <div class="form-group ">
				        <label for="">Email: </label>
				         <input type="email" class="form-control" name="email" required>
				    </div>
		        	
		        	<div class="form-group ">
				        <label for="fecha">Birthdate: </label>
				         <input type="date" class="form-control" name="birthdate" required>
				    </div>


				    <div class="form-group ">
				        <label for="">Job: </label>
				         <input type="text" class="form-control" name="job" required>
				    </div>

				    <div class="form-group ">
				        <label for="">Domicile: </label>
				         <input type="text" class="form-control" name="domicile" required>
				    </div>			     
		        	<center><button type="submit" class="btn btn-primary">Save</button></center>
		      	</form>
        	</div>
      	</div>
  	</div>
@endsection