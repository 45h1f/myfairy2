@extends('admin.layouts.auth.master')

@push('styles')
    <style>
        .times{
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            display: contents;
        }
        .payment{
            min-height: 100vh;
        }
        .time-element {
            height: 70px;
            padding-top: 9px !important;
            border-right: unset;
            margin-top: 2px;
            min-width: 13%;
        }
        .thin-border {
            border-right: unset;
            min-width: 18%;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="content-container" id="content-container">
           @include('admin.layouts.auth.topnav')
            <div class="data payment m-0">
                <div class="service-content">
                    <div class="w-50 float-left">
                        <h1>My Services</h1>
                    </div>
                    <div class="w-50 float-right mb-4" dir="rtl">
                        <a href="{{route('add.service')}}" class="btn d-flex service-new-button  flex-right">
                            Add new Service
                        </a>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="services-cont mt-4" >
                            <div class="service mb-4 d-flex align-items-center ">
                                <div class="h5 p-lg-3  pt-lg-1 time-element p-5 pt-1">
                                     <img src="{{asset('/public/assets/admin/images/connects/service.png')}}">
                                </div>

                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span>Service type</span><br><br>
                                    <b >English teacher</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-sm-center   text-center">Experience</span><br><br>
                                    <b >3 years</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-center">Price</span><br><br>
                                    <b >$20</b>
                                </div>
                                <div class="p-3  pt-3 text-center d-flex">
                                    <a class="ask d-flex align-items-center justify-content-center" href="#">
                                    <i class="fa  fa-question-circle"></i>
                                    </a>
                                    <button class="btn service-edit-button">Edit</button>
                                </div>
                            </div>

                            <div class="service mb-4 d-flex align-items-center ">
                                <div class="h5 p-lg-3  pt-lg-1 time-element p-5 pt-1">
                                     <img src="{{asset('/public/assets/admin/images/connects/service.png')}}">
                                </div>

                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span>Service type</span><br><br>
                                    <b >English teacher</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-sm-center   text-center">Experience</span><br><br>
                                    <b >3 years</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-center">Price</span><br><br>
                                    <b >$20</b>
                                </div>
                                <div class="p-3  pt-3 text-center d-flex">
                                    <a class="ask d-flex align-items-center justify-content-center" href="#">
                                    <i class="fa  fa-question-circle"></i>
                                    </a>
                                    <button class="btn service-edit-button">Edit</button>
                                </div>
                            </div>

                            <div class="service mb-4 d-flex align-items-center ">
                                <div class="h5 p-lg-3  pt-lg-1 time-element p-5 pt-1">
                                     <img src="{{asset('/public/assets/admin/images/connects/service.png')}}">
                                </div>

                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span>Service type</span><br><br>
                                    <b >English teacher</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-sm-center   text-center">Experience</span><br><br>
                                    <b >3 years</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-center">Price</span><br><br>
                                    <b >$20</b>
                                </div>
                                <div class="p-3  pt-3 text-center d-flex">
                                    <a class="ask d-flex align-items-center justify-content-center" href="#">
                                    <i class="fa  fa-question-circle"></i>
                                    </a>
                                    <button class="btn service-edit-button">Edit</button>
                                </div>
                            </div>

                            <div class="service mb-4 d-flex align-items-center ">
                                <div class="h5 p-lg-3  pt-lg-1 time-element p-5 pt-1">
                                     <img src="{{asset('/public/assets/admin/images/connects/service.png')}}">
                                </div>

                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span>Service type</span><br><br>
                                    <b >English teacher</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-sm-center   text-center">Experience</span><br><br>
                                    <b >3 years</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-center">Price</span><br><br>
                                    <b >$20</b>
                                </div>
                                <div class="p-3  pt-3 text-center d-flex">
                                    <a class="ask d-flex align-items-center justify-content-center" href="#">
                                    <i class="fa  fa-question-circle"></i>
                                    </a>
                                    <button class="btn service-edit-button">Edit</button>
                                </div>
                            </div>

                            <div class="service mb-4 d-flex align-items-center ">
                                <div class="h5 p-lg-3  pt-lg-1 time-element p-5 pt-1">
                                     <img src="{{asset('/public/assets/admin/images/connects/service.png')}}">
                                </div>

                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span>Service type</span><br><br>
                                    <b >English teacher</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-sm-center   text-center">Experience</span><br><br>
                                    <b >3 years</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-center">Price</span><br><br>
                                    <b >$20</b>
                                </div>
                                <div class="p-3  pt-3 text-center d-flex">
                                    <a class="ask d-flex align-items-center justify-content-center" href="#">
                                    <i class="fa  fa-question-circle"></i>
                                    </a>
                                    <button class="btn service-edit-button">Edit</button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
