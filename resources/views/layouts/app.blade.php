<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{URL::to('assets/img/favicon.png')}}">
	<link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}"> </head>
	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>

<body>
	@yield('content')

	<script src="{{URL::to('assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{URL::to('assets/js/popper.min.js')}}"></script>
	<script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::to('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{URL::to('assets/js/script.js')}}"></script>
</body>

</html>