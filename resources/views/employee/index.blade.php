@extends('layouts.app')

@section('content')
	<div class="contrainer">
		<div class="row justify-content-center">
	        <div class="col-md-8">
	        	<center><h1>Employee</h1></center><br>
	        	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	        	<form class="form-inline my-2 my-lg-0" action="/employee/index" method="get">
					    <input class="form-control mr-sm-2" type="search" placeholder="Name" aria-label="Search" name="name">
					    
					    <button class="icon icon-search btn btn-outline-success my-2 my-sm-0" type="submit" style="font-size: 30px;"></button>
				 </form>
				</nav>

	        	<div class="card" style="width: 60rem;">
					<table class="table table-hover" id="">
						<thead>
							<tr class="table-success">
					            <th scope="col">  Name </th>
					            <th scope="col"> Email </th>
					            <th scope="col"> Birthdate </th>
					            <th scope="col"> Job </th>
					            <th scope="col"> Domicile </th>
					            <th scope="col">Update/Delete</th>
					            
				          	</tr>
						</thead>
						<tbody>
							@foreach($employees as $employee)
							   <tr scope="row">
				              <td>{{ $employee->name}}</td>
				              <td>{{ $employee->email}}</td>
				              @php($fecha = date("d-m-Y", strtotime($employee->birthdate)))
				              <td>{{ $fecha }}</td>
				              <td>{{$employee->job}}</td>
				              <td>{{ $employee->domicile }}</td>
				         
				             <td>
					            <div class=row style="justify-content:center;">
					              	<a href="{{ url('/employee/'.$employee->idEmployee.'/edit') }}" class="icon icon-edit white-text btn btn-info" style="width: 60px; height: 60px; border-radius: 30px; font-size: 30px; padding: 10px 16px;"></a>
					              
									<form action="/employee/{{$employee->idEmployee}}" method="POST">
										{{ method_field('delete') }}
										{{ csrf_field() }}
		                            	<input type="submit" class="btn btn-danger form-control" value="&#xf2ed" style="width: 60px; height: 60px; border-radius: 30px; font-size: 30px; font-family: 'Font Awesome\ 5 Free';" onclick="return confirm('¿Deseas eliminar el registro?')">
									</form>	
								</div>		
							  </td>          	
			            	</tr>
							@endforeach
						</tbody>	
					</table>
					<nav aria-label="Page navigation example">
					    <ul class="pagination justify-content-center">
					    	{{ $employees->links() }}
						</ul>
					</nav>
				</div>
	        </div>
	    </div>
	</div>
@endsection