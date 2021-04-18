@extends('admin.layouts.auth.master')
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


    </style>

@endpush
@section('content')
    <div class="container">


        <div class="content-container messenger">
            @include('admin.layouts.auth.topnav')
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
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


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
@endpush
