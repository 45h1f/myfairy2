@extends('layouts.front')
@section('front_title')
    How it Work
@endsection
@section('front_css')
@endsection
@section('front_content')
<div class="main">

    <section class="main-pt how-it-work-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2 class="sec-head">How It works?</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed.</p>
                </div>
                <div class="col-lg-7">
                    <div class="how-work-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/how-it-work-img.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <span class="how-it-work-bg"><img src="{{URL::to('storage/app/public/Frontassets/images/how-work-bg.svg')}}" alt=""></span>
        </div>
    </section>

</div>
@endsection
@section('front_js')
@endsection
