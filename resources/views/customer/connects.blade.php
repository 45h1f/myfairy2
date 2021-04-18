@extends('customer.layouts.auth.master')
	<!-- style css  -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/css/style.css')}}">

	<!-- responsive css  -->
	<link rel="stylesheet" type="text/css" href="{{URL::to('storage/app/public/Frontassets/css/responsive.css')}}">
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
        .scrolling-element-inside {
            direction: ltr;
        }
    </style>


    <style>
        #chat-contacts::-webkit-scrollbar-track
        {
            background-color: #fefeff !important;
            cursor: pointer !important;
        }
        #chat-contacts::-webkit-scrollbar
        {
            width: 15px;
            background-color: #b01313;
            cursor: pointer !important;

        }
        #chat-contacts::-webkit-scrollbar-thumb
        {
            background-color: #ffffff;
            cursor: pointer !important;
        }
        #chat-contacts::-webkit-scrollbar-thumb:hover
        {
            background-color:  #f1e8e8;
            border-radius: 5px;
            cursor: pointer !important;
        }

        .chat-history{
            height: 50vh;
            overflow-y: scroll;
        }
        .chat-history::-webkit-scrollbar-track
        {
            background-color: #fefeff !important;
            cursor: pointer !important;
        }
        .chat-history::-webkit-scrollbar
        {
            width: 15px;
            background-color: #b01313;
            cursor: pointer !important;

        }
        .chat-history::-webkit-scrollbar-thumb
        {
            background-color: #f1e8e8;
            cursor: pointer !important;
        }
        .chat-history::-webkit-scrollbar-thumb:hover
        {
            background-color:  #f1e8e8;
            border-radius: 5px;


            cursor: pointer !important;
        }

        .msg-count {
            position: absolute;
            width: 28px;
            height: 28px;
            /* top: 331.5px; */
            right: 35px;
            bottom: 15px;
            border-radius: 50%;
            padding: 5px;
            color: #ffffff;
            padding-left: 10px;
            padding-top: 2px;

            background: #593E98;
        }

        .book-btn {
            background: #FFFFFF!important;
            border: 2px solid #593E98!important;
            box-sizing: border-box!important;
            border-radius: 6px!important;
            font-family: Prompt;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 18px;
            /* identical to box height, or 129% */

            letter-spacing: -0.078px;

            color: #593E98;
        }

        .m1-modal {
            background: #FFFFFF;
            box-shadow: 0px 34px 81px rgba(89, 100, 194, 0.1);
            border-radius: 31px;
            border:none;
        }

        .m1-header {
            border: none;
        }

        .m1-close-btn {
            background: #FFFFFF;
            border-radius: 75px;
            padding: 0 !important;
            margin: 0 !important;
        }

        .m1-title {
            font-family: Prompt;
            font-style: normal;
            font-weight: 600;
            font-size: 28px;
            line-height: 20px;
            /* or 71% */
            letter-spacing: -0.24px;
            color: #131313;
        }

        .m1-table {
            margin: 0;
            padding: 0;
        }

        .m1-table tbody tr:hover {
            background-color: #fff;
            background: #FFFFFF;
/* 12 */

            box-shadow: 0px -19px 33px rgba(89, 100, 194, 0.04), 0px 34px 81px rgba(89, 100, 194, 0.1);
        }

        .m1-table tr {
            display: table-row;
        }
        .m1-table th {
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 150%;
            /* identical to box height, or 22px */
            color: #B8B8C1 !important;
            /* width: 150px !important; */
            padding: 0.75rem !important;
            margin: auto;

        }

        .m1-table td {
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 22px;
            color: #1B1E24;
            margin: auto !important;
            padding: 0.75rem !important;
            vertical-align: middle;
        }

        .m1-img {
            width: 90px;
            height: 68px;
            background: linear-gradient(179.7deg, rgba(0, 0, 0, 0.29) 0.26%, rgba(0, 0, 0, 0) 38.61%), url(.jpg);
            border-radius: 11px;
        }

        .m1-status-btn-active {
            border: none;
            background: rgba(173, 243, 176, 0.53);
            border-radius: 73px;
            padding: 0.25rem 1rem;
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 19px;
            /* identical to box height */


            color: #008806;
        }

        .m1-status-btn-inactive {
            border: none;
            background: rgba(243, 173, 173, 0.53);
            padding: 0.25rem 1rem;
            border-radius: 73px;
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 19px;
            /* identical to box height */


            color: #1B1E24;
        }

        .m1-btn-arrow {
            background: #F2F5F9;
            border-radius: 13px;
            border: none;
            padding: 10px 20px;
            /* font-size: 18px; */
        }
        .m1-btn-arrow svg {
            margin-right: 0;
        }

        .m1-row-title {
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 22px;

            color: #1B1E24;
        }

        .m1-row-price {
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 19px;
            /* identical to box height */


            color: #1B1E24;
        }

        .m1-row-rating {

        }

        .m1-row-rating svg {
            width: 16px;
            height: 15.2px;
            margin-right: 0;
        }

        .m1-row-rating-txt {
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 19px;
            /* identical to box height */


            color: #FF9900;
        }

        .m1-row-rating-no {
            color: #B8B8C1;
            font-family: Sofia Pro;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 19px;
        }

        .m2-title {
            font-family: Prompt;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 18px;
            /* identical to box height, or 100% */

            letter-spacing: -0.078px;

            color: #131313;
        }

        .m2-body {
            padding: 0;
        }

        #m2-calendar {
            background: #FFFFFF;
            border: 2px dashed #7B75BF;
            box-sizing: border-box;
            border-radius: 12px;
        }
        @media (min-width: 576px) {
            .modal-dialog1 {
                max-width: 700px!important;
                margin: 1.75rem auto;
            }
        }




    </style>

@endpush
@section('content')
    <div class="container">


        <div class="content-container messenger">
            @include('customer.layouts.auth.topnav')
            <div class="row">




                </div>
            <div class="container chat-container " style="margin-top: 96px!important;">
                <div class="row" style="margin-left: 40px!important;margin-right: 40px!important;">


                    <div class="col-md-4 chat-contacts pr-0 scrolling-element-inside " id="chat-contacts">
                        <h2>Messages</h2>
                        <input type="search" class="form-control" placeholder="Search Name" aria-label="Search" aria-describedby="basic-addon1">
                        <div class="chat activeChat d-flex justify-content-between" style="position: relative;">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img1.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>

                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                            <label for="" class="msg-count">3</label>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img2.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img3.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img4.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img5.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img6.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img7.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img1.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img2.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img3.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img4.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img5.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img1.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img2.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img3.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img4.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                        <div class="chat d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="{{asset('/public/assets/admin/images/connects/img5.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Ronald Robertson</h6>
                                    <span class="text">Loraem ipsum dolor</span>
                                </div>
                            </div>
                            <div>
                                <span class="time">30 Min</span>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-8 p-0 mt-3 myChat">
                        <div class="d-flex justify-content-between frind">
                            <div class="d-flex align-items-center contact-chat">
                                <img src="{{asset('public/assets/icons/ronald.svg')}}" alt="">
                                <p>Ronald Robertson</p>
                            </div>
                            <div class="d-flex align-items-center func pr-3">
                                <a href="#"><i class="fas fa-video"></i></a>
                                <a href="#"><i class="fas fa-phone-alt"></i></a>
                            </div>
                        </div>

                        <div class="chat-history">
                            <div class="chat-content" style="position: relative">
                                <div class="d-flex">
                                    <div class="align-self-end">
                                        <img src="{{asset('public/assets/icons/ronald.svg')}}" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>Lorem ipsum dolor sit amet,</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ullamcorper nec neque
                                            non. Ultrices ornare egestas tellus massa. Justo vitae aliquam aliquam mauris,
                                            id.
                                            Venenatis justo et tempor non commodo.
                                        </p>
                                    </div>
                                </div>
                                <span>Seen 12:45 pm</span>
                            </div>
                            <div class="friend-message text-right">
                                <div>
                                    <div class="messages">
                                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et
                                            ullamcorper nec neque non. Ultrices ornare egestas tellus massa. </p>
                                        <p class="text-left">Lorem ipsum dolor sit amet,</p>
                                    </div>
                                </div>
                                <span>Seen 12:45 pm</span>
                            </div>
                            <div class="chat-content" style="position: relative">
                                <div class="d-flex">
                                    <div class="align-self-end">
                                        <img src="{{asset('public/assets/icons/ronald.svg')}}" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>Lorem ipsum dolor sit amet,</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ullamcorper nec neque
                                            non.
                                        </p>

                                    </div>
                                </div>
                                <span>Seen 12:45 pm</span>
                            </div>
                            {{-- <div class="friend-message text-right">
                            <div>
                                <div class="messages">
                                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et
                                        ullamcorper nec neque non. Ultrices ornare egestas tellus massa. </p>
                                    <p class="text-left">Lorem ipsum dolor sit amet,</p>
                                </div>
                            </div>
                            <span>Seen 12:45 pm</span>
                        </div> --}}
                        </div>
                        <div class="mt-4 ml-3 position-relative">
                            <i class="fas fa-camera"></i>
                            <input type="text" class="form-control" placeholder="Type a message" aria-label="Search"
                                   aria-describedby="basic-addon1">
                                   <svg class="fa-telegram-plane" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33.6585 0.500246L1.03792 16.5557L14.0329 21.2659L30.553 4.12474L16.1472 23.0775L22.7933 35.1883L33.6585 0.500246Z" fill="#593E98"/>
                                    </svg>
                                    <button type="button" data-toggle="modal" data-target="#booknow" class=" book-btn" style="    position: absolute;top: 0; right: 120px;height: 40px;width: 120px;top: 10px;">Book Now!</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="modal fade" id="booknow" tabindex="-1" aria-labelledby="booknowModalLabel" aria-hidden="true">
        <div id="custom-rm" class="modal-dialog modal-dialog1">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
                <div class="modal-body">
                    <div class="serivce-type-wrap" id="serviewrap1">
                        @include('customer.popup1')
                    </div>
                    <div class="book-booking-wrap" style="display: none;" id="bookwrap1">
                        {{-- <div class="book-date-wrap">
                            <h4>Select Booking Date</h4>
                            <div class="book-date-box">
                                <input type="text" id="datepicker"/>
                            </div>
                        </div> --}}
                        <div class="mx-5 my-4">
                                <h4 class="m2-title">Select Booking Date</h4>

                                <div class="calendar-wrapper"></div>
                                </div>
                        <div class="book-avilable-time-wrap">
                            <h4>Available Time</h4>
                            <div class="book-time-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">7:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">8:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">11:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">12:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time">3:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">4:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">9:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">10:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">1:00 pM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">2:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">6:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">5:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">7:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">8:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">11:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">12:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time">3:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">4:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">9:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">10:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">1:00 pM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">2:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">6:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">5:00 AM</a>
                                </div>
                            </div>
                        </div>
                        <div class="book-reminder">
                            <h4>Reminder</h4>
                            <p>Select alert <span>30 minutes before <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 15L8 8L1 1" stroke="#979797" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></p>
                            <a href="javascript:void(0)" class="btn justify-content-center w-100 book-next">Next</a>
                        </div>
                    </div>
                    <div class="book-review-wrap" >
                        <div class="review-book-head">
                            <button class="book-back"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 13.5L0.999999 7.5L7 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <h3 class="book-review-label">Review booking</h3>
                        </div>
                        <div class="review-book-content">
                            <h4>Date & Time</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-date.svg')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>Monday,October 24</h5>
                                    <p>10:00 AM</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <h4>Fairy</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-img.png')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>Alice Daniela</h5>
                                    <p>English Language</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <h4>Address</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-map.png')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>San Francisco, California</h5>
                                    <p>0.31 i away</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <h4>Payment</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-paypal.png')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>San Francisco, California</h5>
                                    <p>0.31 i away</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <div class="price-box">
                                <p class="review-price">Price <span>$60</span></p>
                                <p class="review-hour-price">$60/ hour <span>$60</span></p>
                                <p class="review-total-price">Total <span>$60</span></p>
                                <a href="javascript:void(0)" class="btn justify-content-center w-100">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('customer.popup1')


@endsection
@push('scripts')
    <script>
        let contacts = document.getElementById("chat-contacts");
        let chat = contacts.getElementsByClassName("chat");

        for (let i = 0; i < chat.length; i++) {
            chat[i].addEventListener("click", function () {

                let current = document.getElementsByClassName("activeChat");
                current[0].className = current[0].className.replace(" activeChat", "");
                this.className += " activeChat";
            });
        }
    </script>
    @include('customer.components.calendar.index')
    <script>

        // mobiscroll.setOptions({
        //     locale: mobiscroll.localeEn,  // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        //     theme: 'ios',                 // Specify theme like: theme: 'ios' or omit setting to use default
        //         themeVariant: 'light'     // More info about themeVariant: https://docs.mobiscroll.com/5-1-1/range#opt-themeVariant
        // });

        // $(function () {
        //     // Mobiscroll Range initialization
        //     $('#m2-calendar').mobiscroll().datepicker({
        //         controls: ['calendar'],   // More info about controls: https://docs.mobiscroll.com/5-1-1/range#opt-controls
        //         select: 'range',          // More info about select: https://docs.mobiscroll.com/5-1-1/range#methods-select
        //         display: 'inline',        // Specify display mode like: display: 'bottom' or omit setting to use default
        //         rangeHighlight: true,
        //         showRangeLabels: false,
        //         rangeStartLabel: 'Outbound',
        //         rangeEndLabel: 'Return',
        //         rangeStartHelp: 'Set dates',
        //         rangeEndHelp: 'Set dates'
        //     });
        //     $(".mbsc-calendar-cell div:first-child:not('.mbsc-calendar-cell-inner')").addClass('d-none');

        // });


    </script>


	<!-- custom js -->
	<script src="{{URL::to('storage/app/public/Frontassets/js/custom.js')}}"></script>

    <script>
        function dishide(){
            document.getElementById('serviewrap1').style.display = "none";
            document.getElementById('bookwrap1').style.display = "block";
            document.getElementById('custom-rm').classList.remove("modal-dialog1");
        }
    </script>
@endpush
