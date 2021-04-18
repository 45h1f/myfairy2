@extends('admin.layouts.auth.master')

@include('admin.components.calendar.index')

@push('styles')
    <style>

        .table {
            margin-top: 80px;
            height: 382px;
        }

        .table tr {
            display: flex;
            align-items: center;
            padding: 12px 0;
        }

        .table td {
            border: none;
            font-size: 12px;
            padding: 0px 0px 0px 46px;
            margin: auto 0;
            font-family: 'Poppins', sans-serif;
        }

        .table thead th {
            border: none;
            color: #d2d5d7;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            padding: 0px 0px 0px 46px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(247, 248, 255, 1);
        }
        .table .customer {
            width: 170px;
        }

        .table .date {
            width: 160px;
        }

        .table .time {
            width: 110px;
        }

        .table .location {
            width: 175px;
        }

        .table svg {
            margin-right: 15px;
        }

        .data {
            padding-left: 4rem!important;
        }

        .book-h1 {
            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 30px;
            line-height: 150%;
            /* identical to box height, or 45px */


            color: #2B2B4C;
        }

        .data-btn {
            height: 56px;
            background: #F4F2FF;
            border-radius: 78px;
            padding: 15px 25px;
            width: 216px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 150%;
            /* identical to box height, or 21px */


            color: #593E98;
        }

        .data-btn:hover {
            text-decoration: none;
        }

        .bookTab {
            font-family: Poppins!important;
            font-style: normal!important;
            font-weight: 600!important;
            font-size: 18px!important;
            line-height: 150%!important;
            /* identical to box height, or 27px */


            color: #1B2B39!important;
        }

        .activeTab {
            font-family: Poppins!important;
            font-style: normal!important;
            font-weight: 600!important;
            font-size: 18px!important;
            line-height: 150%!important;
            /* identical to box height, or 27px */


            color: #593E98!important;
            padding-left: 10px;
            padding-right: 10px;
        }

        .small-border::after {
            content: '';
            position: absolute;
            width: 2px;
            height: 55%;
            top: 15px;
            right: 0;
            background-color: rgba(225, 225, 225, 0.54);
        }

        .thin-border {
            min-width: 15%!important;
        }

        .time-element {
            padding-right: 20px!important;
        }

        .loc-img {
            position: absolute;
            right: 20px;
            top: 20px;
            height: 41px;
            width: 41px;
            background-image: url({{asset('public/assets/icons/loc.svg')}});

        }

        .main-booking .loc-img {
            position: absolute;
            right: 20px;
            top: 20px;
            height: 41px;
            width: 41px;
            background-image: url({{asset('public/assets/icons/locred.svg')}});

        }

        .book {
            position: relative!important;
            width: 92%!important;
        }

        .time-element {
            /* width: 25%!important; */
        }

        .main-booking .active-book {
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 2px 3px 10px 5px rgba(89, 62, 152, 0.5);
            z-index: 9999999;
        }

        .main-booking .active-blue {
            width: 73px;height: 80px; position: absolute;right: 17;top: 0;
            background: #3744BD;
border: 1px solid rgba(210, 209, 255, 0.42);
box-sizing: border-box;
border-radius: 15px;
display: flex;
        }

        .shad {
            position: absolute;
            right: 15px;
            top: 33px;
        }

    </style>
@endpush

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

            @include('admin.layouts.auth.topnav')

            <div class="data payment m-0" style="margin-top: 140px!important;">
                <div class="d-flex align-items-center">
                    <h1 class="book-h1">Bookings</h1>
                    <a href="{{route('admin.event.show')}}" class=" d-flex align-items-center justify-content-center data-btn">
                        10 june 2020 &nbsp; <img src="{{asset('public/assets/icons/calender.svg')}}" alt="">
                    </a>

                    <div  class="tabe  mr-6" id="tab_up">
                        <span class="bookTab activeTab">All</span>
                        <span class="bookTab">Upcoming</span>
                        <span class="bookTab">Past</span>
                    </div>
                </div>

                <div class="d-flex mt-5   align-items-center">
                    <h5><b>Wed</b>, Jun 10</h5><br>
                    {{-- <a href="" class="btn ml-3 d-flex align-items-center justify-content-center">Show page</a> --}}
                </div>
            </div>
            <div class="data payment m-0" style="padding-left: 15px!important; padding-right: 15px!important;">

                <div class="row  mt-2">
                    <div class="col-md-8  " style="padding-left: 0px!important;">
                        <div class="w-100 py-3" style="padding-left: 65px!important; border-radius: 23px; background: #F9FAFC;">
                        <div class=" times" id="times">
                        <div style="position: relative;" class="main-booking-raw" id="main-booking1" onclick="tog(id);">
                            <div class="d-flex book align-items-center mb-3 active-book">

                                <div class="p-lg-3 time-one time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1 text-center thin-border small-border">
                                    <span class="text-muted d-block pb-2">customer</span>
                                    <b class="mt-1">Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-sm-center text-center d-block pb-2">price</span>
                                    <b >$540</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-center d-block pb-2">Duration</span>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-left address ">
                                    <span class="text-muted text-left d-block pb-2">Address</span>
                                    <b >San Francisco,<br> <span>California</span></b>
                                    <a href="" class="loc-img">
                                        {{-- <img  src="" alt=""> --}}
                                    </a>
                                </div>

                            </div>
                            <div class="active-blue">
                                <svg class="shad" width="5" height="12" viewBox="0 0 5 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="2.25234" cy="2" rx="1.97597" ry="2" fill="white"/>
                                    <ellipse cx="2.25234" cy="10" rx="1.97597" ry="2" fill="white"/>
                                    </svg>

                            </div>
                        </div>
                        <div style="position: relative;" class="main-booking-raw main-booking" id="main-booking2" onclick="tog(id);">
                            <div class="d-flex book align-items-center mb-3 active-book active-book" id="book1">

                                <div class="p-lg-3 time-two time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1 text-center thin-border small-border">
                                    <span class="text-muted d-block pb-2">customer</span>
                                    <b class="mt-1">Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-sm-center text-center d-block pb-2">price</span>
                                    <b >$540</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-center d-block pb-2">Duration</span>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-left address ">
                                    <span class="text-muted text-left d-block pb-2">Address</span>
                                    <b >San Francisco,<br> <span>California</span></b>
                                    <a href="" class="loc-img">
                                        {{-- <img  src="" alt=""> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="active-blue">
                                <svg class="shad" width="5" height="12" viewBox="0 0 5 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="2.25234" cy="2" rx="1.97597" ry="2" fill="white"/>
                                    <ellipse cx="2.25234" cy="10" rx="1.97597" ry="2" fill="white"/>
                                    </svg>

                            </div>
                        </div>
                        <script>
                            function tog(id) {
                                var active = document.getElementById(id);
                                var ele = document.getElementsByClassName('main-booking-raw');
                                for(var i =0; i < ele.length; i++){
                                    ele[i].classList.remove('main-booking');
                                }
                                active.classList.add('main-booking');
                            }
                        </script>

                        <div style="position: relative;" class="main-booking-raw" id="main-booking3" onclick="tog(id);">
                            <div class="d-flex book align-items-center mb-3 active-book">

                                <div class="p-lg-3 time-one time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1 text-center thin-border small-border">
                                    <span class="text-muted d-block pb-2">customer</span>
                                    <b class="mt-1">Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-sm-center text-center d-block pb-2">price</span>
                                    <b >$540</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-center d-block pb-2">Duration</span>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-left address ">
                                    <span class="text-muted text-left d-block pb-2">Address</span>
                                    <b >San Francisco,<br> <span>California</span></b>
                                    <a href="" class="loc-img">
                                        {{-- <img  src="" alt=""> --}}
                                    </a>
                                </div>

                            </div>
                            <div class="active-blue">
                                <svg class="shad" width="5" height="12" viewBox="0 0 5 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="2.25234" cy="2" rx="1.97597" ry="2" fill="white"/>
                                    <ellipse cx="2.25234" cy="10" rx="1.97597" ry="2" fill="white"/>
                                    </svg>

                            </div>
                        </div>
                        <div style="position: relative;" class="main-booking-raw" id="main-booking4" onclick="tog(id);">
                            <div class="d-flex book align-items-center mb-3 active-book">

                                <div class="p-lg-3 time-one time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1 text-center thin-border small-border">
                                    <span class="text-muted d-block pb-2">customer</span>
                                    <b class="mt-1">Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-sm-center text-center d-block pb-2">price</span>
                                    <b >$540</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border small-border">
                                    <span class="text-muted text-center d-block pb-2">Duration</span>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-left address ">
                                    <span class="text-muted text-left d-block pb-2">Address</span>
                                    <b >San Francisco,<br> <span>California</span></b>
                                    <a href="" class="loc-img">
                                        {{-- <img  src="" alt=""> --}}
                                    </a>
                                </div>

                            </div>
                            <div class="active-blue">
                                <svg class="shad" width="5" height="12" viewBox="0 0 5 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="2.25234" cy="2" rx="1.97597" ry="2" fill="white"/>
                                    <ellipse cx="2.25234" cy="10" rx="1.97597" ry="2" fill="white"/>
                                    </svg>

                            </div>
                        </div>
                            <div class="time-table d-flex align-items-center mb-2">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="time-data d-flex w-100">
                                <div class="ml-4">05:00</div>
                                <div>06:00</div>
                                <div>07:00</div>
                                <div>08:00</div>
                                <div>09:00</div>
                                <div>10:00</div>
                                <div>11:00</div>
                                <div>12:00</div>
                                <div>13:00</div>
                                <div>14:00</div>
                                <div>15:00</div>
                                <div>16:00</div>
                            </div>
                         </div>
                        </div>
                    </div>
                    <div class="col-md-4  pr-0">
                        <div class="container">
                             <h5 class="mb-3">
                                 <b>wed</b>, june 10
                             </h5>
                            <div class="calendar-wrapper"></div>
                            <div class="pt-2">
                                <img src="{{asset('/public/assets/admin/images/calendar-svg.png')}}"/>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="{{asset('/public/assets/admin/custom/js/bookings.js')}}"></script>
@endpush

