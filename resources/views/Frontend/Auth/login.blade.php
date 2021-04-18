<!DOCTYPE html>
<html>

<head>
	<title>Login - Fairy</title>

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

</head>

<body>
    <section class="signup-sec">
        <div class="container-fluid p-0 h-100">
            <div class="signup-wrap">
                <div class="signup-aside">
                    <h2>Discover the world’s top Fairies & Creatives.</h2>
                    <div class="signup-img"><img src="{{URL::to('storage/app/public/Frontassets/images/signup-img.svg')}}" alt=""></div>
                </div>
                <div class="signup-main">
                    <p class="not-member">Not a member? <a href="{{URL::to('sign-up')}}">Sign up now</a></p>
                    <div class="signup-form-wrap">
                        <h4>Sign In to Fairy</h4>
                        <div class="signup-google">
{{--                            <a href="javascript:void(0)" class="google-btn"><i class="fab fa-google"></i> Sign In With Google</a>--}}
{{--                            <a href="javascript:void(0)" class="twitter-btn"><i class="fab fa-twitter"></i></a>--}}
                        </div>
{{--                        <div class="signup-or"><p>or</p></div>--}}
                        <form class="signup-form">
                            <label for="email">
                                <p>Email Address</p>
                                <input type="email" name="email" id="email">
                            </label>
                            <label for="pass">
                                <p>Password <a href="javascript:void(0)">Forgot password</a></p>
                                <input type="password" name="password" id="pass" placeholder="6+ characters">
                            </label>
                            <button class="btn">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

</body>

</html>
