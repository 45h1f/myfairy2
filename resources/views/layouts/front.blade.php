<!DOCTYPE html>
<html>

<head>
	<title>@yield('front_title') - Fairy</title>

	<!-- meta tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- favicon-icon  -->
<link rel="icon" href="{{URL::to('storage/app/public/Frontassets/images/favicon.png')}}" type="image/x-icon">

	<!-- font-awsome css  -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/css/font-awsome.css')}}">

	<!-- fonts css -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/fonts/fonts.css')}}">

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/css/bootstrap.min.css')}}">

	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/css/owl.carousel.min.css')}}">

	<!-- style css  -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/css/style.css')}}">

	<!-- responsive css  -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/css/responsive.css')}}">
    @yield('front_css')
</head>

<body>
@include('Includes.Front.header')

@yield('front_content')

@include('Includes.Front.footer')

    <!-- jquery -->
	<script src="{{URL::to('storage/app/public/Frontassets/js/jquery.min.js')}}"></script>

	<!-- bootstrap js -->
	<script src="{{URL::to('storage/app/public/Frontassets/js/bootstrap.bundle.js')}}"></script>

	<!-- owl.carousel js -->
	<script src="{{URL::to('storage/app/public/Frontassets/js/owl.carousel.min.js')}}"></script>

	<!-- lazyload js -->
	<script src="{{URL::to('storage/app/public/Frontassets/js/lazyload.js')}}"></script>

	<!-- custom js -->
	<script src="{{URL::to('storage/app/public/Frontassets/js/custom.js')}}"></script>
    @yield('front_js')
</body>

</html>
