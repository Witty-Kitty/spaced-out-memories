 <!DOCTYPE html>
 <html>

 	<head>

 			<title>Spaced-Out Memories</title>
 			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
 			{{--<link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">--}}
 	</head>

 	<body>
 	<div class="container">
 		@if(Session::has('global'))
 		<p>	{{ Session::get('global') }}</p>
 		@endif

 		{{--@include('layouts.navigation')--}}
 		@yield('content')
 	</div>
 	</body>


 </html>