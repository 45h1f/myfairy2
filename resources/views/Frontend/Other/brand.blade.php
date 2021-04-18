@extends('layouts.front')
@section('front_title')
    Brand Advocate
@endsection
@section('front_css')
@endsection
@section('front_content')
<div class="main">

    <section class="main-pt brand-advocate-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="brand-advocate-form-wrap">
                        <form class="brand-advocate-form">
                            <h2>Brand Advocates</h2>
                            <label for="fname">
                                <p>First name</p>
                                <input type="text" id="fname">
                            </label>
                            <label for="lname">
                                <p>Last name</p>
                                <input type="text" id="lname">
                            </label>
                            <label for="email">
                                <p>Email Address</p>
                                <input type="email" id="email">
                            </label>
                            <label for="check-here" class="login-check">
                                <input type="checkbox" id="check-here">
                                <p>you're okay with our <a href="javascript:void(0)">Terms of Service Privacy Policy</a>, and our default <a href="javascript:void(0)">Notification Settings</a>.</p>
                            </label>
                            <button class="btn w-100 justify-content-center">Get My Referral Link!</button>
                        </form>
                        <svg width="247" height="279" viewBox="0 0 247 279" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M239.231 67.7723C139.281 208.622 57.2199 240.093 16.4613 237.697C7.53321 237.172 2.69338 228.211 4.64752 219.484L49.6056 18.6953C51.7777 8.99439 61.4027 2.89107 71.1036 5.06318L228.548 40.3163C240.894 43.0805 246.552 57.4549 239.231 67.7723Z" fill="#F2F4FF" stroke="#F2F4FF"/></svg>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="brand-advocate-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/brand-advocate-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

@endsection
@section('front_js')
@endsection
