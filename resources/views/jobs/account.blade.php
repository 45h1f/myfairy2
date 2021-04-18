@extends('admin.layouts.auth.master')

@push('styles')

    <link rel="stylesheet" href="{{asset('/public/assets/admin/custom/css/calendar.css')}}">
    <style>

        .account-type {
            background: #593E98 !important;
            color: white !important;
            line-height: 33px;
            font-weight: 400;
        }

        .h-separator {
            min-width: 10%;
        }

        .btn-edit-profile {
            background: #F2F5F9 !important;
            color: #A9A9B1 !important;
            font-weight: 400 !important;
            border: unset;
            height: 48px !important;
            line-height: 30px;
            padding: 2px;
        }

        .btn-print {
            background: #F2F5F9 !important;
            color: #A9A9B1 !important;
            font-weight: 400;
            border: unset;
            height: 46px !important;
            line-height: 20px;
            width: 70px !important;
            border-radius: 10px !important;
            font-size: 12px !important;
            padding: 0px !important;
            padding-top: 12px !important;
        }

        .profile-image {
            max-width: 90px;
        }

        .profile-past-counter {
            border-right: 4px solid #dedede !important;
        }

        .profile-view-booking-btn {
            background: #FF392B !important;
            color: white !important;
            height: 35px !important;
            text-align: center !important;
            width: 150px !important;
            display: block !important;
            margin: auto !important;

        }

        #hourly-rate-box {
            background: #0FE07B !important;
            height: 100px !important;
            width: 120px !important;
            border-radius: 10px !important;
            color: white !important;
            text-align: center;
        }

        small {
            color: #A9A9B1 !important;
            font-weight: 200;
        }

        .bold-number {
            font-size: x-large;
        }

        #media-image-size {
            max-width: 50px !important;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

            @include('admin.layouts.auth.topnav')

            <div class="data payment m-0">

                <div class="d-flex flex-row-reverse">
                    <a href="#" class="btn p-2 account-type">Premium</a>
                    <h6 class="p-2 pl-5 pt-3">Account Type :</h6>
                    <h6 class="pr-4 pt-3 h-separator"></h6>
                    <h6 class="p-2"><a href="{{route('edit.profile')}}" class="btn p-2 btn-primary btn-edit-profile"><i
                                class="fa fa-edit"></i> Edit Profile </a></h6>
                    <h6 class="p-2"><a href="#" class="btn p-2 btn-primary btn-print"><i class="fa fa-2x fa-print"></i></a>
                    </h6>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img class="profile-image" src="{{asset('/public/assets/admin/images/profile.PNG')}}"/>
                                    <h5 class="pt-2">Rabecca Moore 22</h5>
                                    <p class="text-small-centered text-muted">example212@gmail.com</p>
                                    <h6 class="pt-2 text-center">My Bookings</h6>
                                    <div class="row">
                                        <div class="col-md-6 text-center profile-past-counter">
                                            <b class="font-weight-bold">5</b><br> <span class="text-muted"> Past </span>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <b class="font-weight-bold">2</b><br> <span
                                                class="text-muted"> Upcoming </span>
                                        </div>
                                        <div class="mt-4 w-100"><a class="btn btn-danger  profile-view-booking-btn">View
                                                Bookings</a></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 mt-2 ml-2">
                                <div class="row mt-4">
                                    <div class="col-md-6 text-left ">
                                        <b class="font-weight-bold">Gender</b><br> <span
                                            class="text-muted mt-2">Female</span>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <b class="font-weight-bold">Birthday</b><br> <span class="text-muted mt-2"> Oct, 23, 2000 </span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6 text-left ">
                                        <b class="font-weight-bold">Phone Number</b><br> <span class="text-muted mt-2">+2 01129206865</span>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <b class="font-weight-bold">Address</b><br> <span class="text-muted mt-2"> Cairo St 42, Egypt </span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6 text-left ">
                                        <b class="font-weight-bold">City</b><br> <span
                                            class="text-muted mt-2">Cairo</span>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <b class="font-weight-bold">Zip Code</b><br> <span class="text-muted mt-2">380000</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6 text-left ">
                                        <b class="font-weight-bold">Registration date</b><br> <span
                                            class="text-muted mt-2">Aug, 25 ,2015</span>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <b class="font-weight-bold">Zip Code</b><br> <span class="text-muted mt-2">380000</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-4 mt-4">
                                    <div href="#" class="btn p-2 pt-4 " id="hourly-rate-box">
                                        <small class="text-sm-center text-muted text-light"
                                               style="color: white !important;"> Hourly Rate <br></small> <b
                                            class="text-center" style="font-weight: bolder; font-size: 28px">$ 50</b>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <div href="#" class="btn pl-2">
                                        <small class="font-weight-bold">Reviews</small><br>
                                        <div class="text-muted bold-number  ">212</div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <div href="#" class="btn p-4 ">
                                        <small class="font-weight-bold">Rating</small><br>
                                        <div class="text-muted bold-number  ">189</div>
                                    </div>
                                </div>
                                <div class="row mt-5 ml-4">
                                    <div class="col-md-12">

                                        <div href="#">
                                            <h4 data-toggle="modal" id="modalTrigger" data-target="#exampleModal">
                                                Biography <i class="fa fa-edit text-muted"></i>
                                            </h4>
                                            <br/>
                                            <small class="text-muted mt-1"> English School </small>
                                        </div>

                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="media">
                                            <img class="mr-3 w-100" id="media-image-size"
                                                 src="{{asset('/public/assets/admin/images/profile.PNG')}}" alt="">
                                            <div class="media-body">
                                                <h6 class="mt-0">Harvard English University</h6>
                                                <small class="text-muted">Harvard English University Harvard </small>
                                            </div>
                                        </div>
                                        <div class="media mt-3">
                                            <div class="media-body">
                                                <small class="text-muted">Education </small>
                                                <h6 class="mt-0">Harvard English University</h6>
                                            </div>
                                        </div>
                                        <div class="media mt-3 mb-3">
                                            <div class="media-body">
                                                <small class="text-muted">Certification </small>
                                                <h6 class="mt-0">Harvard English University</h6>
                                            </div>
                                        </div>
                                        <div class="media mt-3 mb-3">
                                            <div class="media-body">
                                                <small class="text-muted">Certification </small>
                                                <h6 class="mt-0">Harvard English University</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="container-x">
                                    <div class="book-booking-wrap">
                                        <div class="book-date-wrap">
                                            <h4>Schedule</h4>
                                        </div>
                                        <div class="book-avilable-time-wrap">
                                            <div class="book-time-carousel owl-carousel owl-theme owl-loaded">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                         style="transform: translate3d(-434px, 0px, 0px); transition: all 0.25s ease 0s; width: 869px;">
                                                        <div class="owl-item"
                                                             style="width: 114.667px; margin-right: 30px;">
                                                            <div class="item active">
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">7:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">8:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">11:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">12:00 AM</a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item"
                                                             style="width: 114.667px; margin-right: 30px;">
                                                            <div class="item">
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">3:00 PM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">4:00 PM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">9:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">10:00 AM</a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item"
                                                             style="width: 114.667px; margin-right: 30px;">
                                                            <div class="item">
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">1:00 pM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">2:00 PM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">6:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">5:00 AM</a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item  "
                                                             style="width: 114.667px; margin-right: 30px;">
                                                            <div class="item">
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">7:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">8:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">11:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">12:00 AM</a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item  "
                                                             style="width: 114.667px; margin-right: 30px;">
                                                            <div class="item">
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">3:00 PM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">4:00 PM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">9:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">10:00 AM</a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item  "
                                                             style="width: 114.667px; margin-right: 30px;">
                                                            <div class="item">
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time active">1:00 pM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">2:00 PM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">6:00 AM</a>
                                                                <a href="javascript:void(0)"
                                                                   class="profile-shedule-time">5:00 AM</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-nav">
                                                    <button type="button" role="presentation" class="owl-prev">
                                                        <svg viewBox="0 0 8 14" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 1L0.999999 7L7 13" stroke="#593E98"
                                                                  stroke-width="2" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" role="presentation" class="owl-next disabled">
                                                        <svg viewBox="0 0 8 14" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 1L7 7L1 13" stroke="#593E98" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="owl-dots disabled"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end container -->
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="testi_item">
                                        <h4>Fanny Spencer</h4>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                        <a href="#" style="color: yellow">12</a> <small> 15 minutes ago </small>
                                        <p class="lead text-muted">
                                            As conscious traveling P across her face
                                            As conscious traveling P across her face
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testi_item">
                                        <h4>Fanny Spencer</h4>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                        <a href="#" style="color: yellow">12</a> <small> 15 minutes ago </small>
                                        <p class="lead text-muted">
                                            As conscious traveling P across her face
                                            As conscious traveling P across her face
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.components.modals.modal')
@endsection
@push('scripts')
    <script>

    </script>
    </script>
    @endpush

