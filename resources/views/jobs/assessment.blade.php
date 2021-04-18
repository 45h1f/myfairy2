@extends('jobs.layouts.auth.master')

@section('content')
<style>
    .content-grid {
        cursor: pointer;
    }
</style>
@include('jobs.layouts.auth.topnav')
<div class="inner-content">
    <div class="row m-0">
        <div class="col-md-12 content-inner-left " style="background: #ffffff;">
            <h3 class="heading-result">Audio/Video Assessment Submission</h3>
            @for ($i = 0; $i < 8; $i++)

            <div class="content-grid  {{($i == 2)?'active-grid':''}}" onclick="tog(id);" id="content-grid{{$i}}">
                <div class="ul-content-grid"></div>
                <div class="content-rect d-flex">
                    <div class="">
                        <span class="va-text">Q{{$i+1}}</span>
                    </div>
                    <div class="row w-100">
                        <div class="col-md-12 pl-1 d-flex">
                            <div class="content-grid-text" style="margin-left: 5%!important;">
                                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit consectetur quis maecenas odio maecenas. </p>
                                <p>Answer: <span  class="record1"> <span class="record-ico"><img src="{{asset('/public/assets/jobs/images/mic.svg')}}" alt=""></span> Recordings 12</span>
                                <span  class="record2"> <span class="record-ico"><img src="{{asset('/public/assets/jobs/images/video.svg')}}" alt=""></span> Videos 12</span>
                                </p>
                            </div>
                            <div class="va-mic">
                                <img src="{{asset('/public/assets/jobs/images/mic1.svg')}}" alt="">
                            </div>
                            <div class="va-video">
                                <img src="{{asset('/public/assets/jobs/images/video1.svg')}}" alt="">
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

    </div>
</div>



@endsection
