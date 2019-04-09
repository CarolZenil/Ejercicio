<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>Ejercicio</title>
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('assets/css/app.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
</head>
<body>
	<!---nav-->
	<div class="">
		<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" href="{{ url('/employee') }}">Employee</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{ url('/employee/create') }}">Create new</a>
		  </li>
		</ul>
	</div>
	<main class="py-4">
        @yield('content')
    </main>
</body>
</html>