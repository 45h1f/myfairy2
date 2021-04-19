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
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @yield('front_css')
</head>

<body>
    <!-- navbar -->
    <header class="market-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="market-logo-wrap">
                    <a class="navbar-brand" href="{{URL::to('/')}}">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/logo-lg.png')}}" alt="">
                    </a>
                </div>
                <h1 class="market-logo">Fairy <span>Marketplace</span></h1>
                <ul class="list-unstyled market-option-head">
                    <li class="market-cart"><a href="javascript:void(0)"><svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>2</span></a></li>
                    <li><a href="javascript:void(0)"><svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.57 20.0975C13.6069 19.506 12.3931 19.506 11.43 20.0975L7.26776 22.6538C6.51239 23.1177 5.57162 22.4422 5.76971 21.5782L6.89873 16.6536C7.14459 15.5812 6.78371 14.4603 5.95838 13.7328L2.16765 10.3912C1.5077 9.8095 1.86641 8.72046 2.74291 8.6448L7.66299 8.22005C8.77667 8.12391 9.74453 7.41657 10.1743 6.38468L12.0769 1.81702C12.4187 0.996352 13.5813 0.996356 13.9231 1.81702L15.8257 6.38468C16.2555 7.41656 17.2233 8.12391 18.337 8.22005L23.2571 8.6448C24.1336 8.72046 24.4923 9.8095 23.8323 10.3912L20.0416 13.7328C19.2163 14.4603 18.8554 15.5812 19.1013 16.6536L20.2303 21.5782C20.4284 22.4422 19.4876 23.1177 18.7322 22.6538L14.57 20.0975Z" stroke="black" stroke-width="2"/></svg></a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user-img.png" alt=""> Rebecca Moore</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- navbar -->

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
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

	<!-- custom js -->
	<script src="{{URL::to('storage/app/public/Frontassets/js/custom.js')}}"></script>
    @yield('front_js')
    {!! Toastr::message() !!}
</body>

</html>
