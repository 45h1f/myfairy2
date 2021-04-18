@extends('jobs.layouts.auth.master')

@section('content')
<style>
    .content-grid {
        cursor: pointer;
    }
</style>
@include('jobs.layouts.auth.navbar')
<div class="inner-content">
    <div class="row m-0">
        <div class="col-md-8 content-inner-left">
            <h3 class="heading-result">243, results found</h3>
            @for ($i = 0; $i < 8; $i++)

            <div class="content-grid  {{($i == 2)?'active-grid':''}}" onclick="tog(id);" id="content-grid{{$i}}">
                <div class="ul-content-grid"></div>
                <div class="content-rect d-flex">
                    <div class="grid-content-img">
                        <img src="{{asset('public/assets/jobs/images/content-logo.svg')}}" alt="">
                    </div>
                    <div class="row w-100">
                        <div class="col-md-4 pl-5">
                            <div class="content-grid-text">
                                <p>UI designer</p>
                                <p>Fairy</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-grid-text">
                                <p>Mountain view, USA</p>
                                <p>Location</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-grid-text">
                                <p>$40,00-45,800</p>
                                <p>Monthly salary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endfor

            <script>
                function tog(id) {
                    var action = document.getElementById(id);
                    var allcls = document.getElementsByClassName('content-grid');
                    for(var i = 0; i < allcls.length; i++) {
                        allcls[i].classList.remove('active-grid');
                    }
                    action.classList.add('active-grid');

                }
            </script>
        </div>

        <div class="col-md-4 bg-white content-inner-right">
            <div class="right-top-content mt-5 d-flex">
                <img src="{{asset('public/assets/jobs/images/fairy53.svg')}}" alt="">
                <div class="headings-right-content ml-4">
                    <h3>Fairy</h3>
                    <h6>Product Designing Company</h6>
                </div>
            </div>

            <div class="right-top-content mt-5">
                <div class="headings-right-content-2nd">
                    <h3>Senior UI/UX designer</h3>
                    <h6 class="ml-4">Mountain view, USA</h6>
                </div>
            </div>

            <div class="right-top-content mt-5 d-flex">
                <div class="doc-logo">
                    <img src="{{asset('public/assets/jobs/images/doc.svg')}}" alt="">
                </div>
                <div class="content-after-doc">
                    <h3 class="right-content-headings">
                        Description
                        <p class="right-content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit consectetur quis maecenas odio maecenas. Donec placerat massa adipiscing ut. Dignissim quisque augue neque eget tempus dignissim fermentum. Integer consequat felis, ipsum feugiat. Read More</p>
                    </h3>

                </div>
            </div>

            <div class="right-top-content mt-5 d-flex">
                <div class="doc-logo-warn">
                    <img src="{{asset('public/assets/jobs/images/warn.svg')}}" alt="">
                </div>
                <div class="content-after-doc">
                    <h3 class="right-content-headings">
                        Minimum Qualifications
                        <p class="right-content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit consectetur quis maecenas odio maecenas. Donec placerat massa adipiscing ut. Dignissim quisque augue neque eget tempus dignissim fermentum. Integer consequat felis, ipsum feugiat. Read More</p>
                    </h3>

                </div>
            </div>

            <div class="right-top-content mt-5 d-flex">
                <a class="w-100 apply-button-right" href="">Apply</a>
            </div>
        </div>

    </div>
</div>



@endsection
