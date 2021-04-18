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

    </style>
@endpush

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

            @include('admin.layouts.auth.topnav')

            <div class="data payment m-0">
                <div class="d-flex align-items-center">
                    <h1>Bookings</h1>
                    <a href="#" class="btn d-flex align-items-center justify-content-center">
                        15 june 2020 &nbsp; <i class="fas fa-calendar-alt"></i>
                    </a>

                    <div  class="tabe  mr-6" id="tab_up">
                        <span class="bookTab activeTab">All</span>
                        <span class="bookTab">Upcoming</span>
                        <span class="bookTab">Past</span>
                    </div>
                </div>

                <div class="d-flex mt-5   align-items-center">
                    <h5><b>wed</b>, june 10</h5><br>
                    <a href="{{route('admin.event.show')}}" class="btn ml-3 d-flex align-items-center justify-content-center">Show page</a>
                </div>

                <div class="row  mt-5">
                    <div class="col-md-8  pl-0 mt-3">

                        <div class="row times" id="times">
                            <div class="d-flex book align-items-center mb-3 active-white">
                                <div class="p-lg-3 time-one time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1 text-center thin-border ">
                                    <span class="text-muted">customer</span><br><br>
                                    <b >Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-sm-center text-center">price</span><br><br>
                                    <b >$343</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-center">Duration</span><br><br>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-center address">
                                    <span class="text-muted text-center">Address</span><br><br>
                                    <b >San Francisco</b>
                                </div>
                                <div class="p-3 pt-1 pl-3 text-center ">
                                    <i class="fas fa-thumbtack"></i>
                                </div>
                            </div>
                            <div class="d-flex book align-items-center mb-3">
                                <div class="p-lg-3 time-two time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span class="text-muted">customer</span><br><br>
                                    <b >Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-sm-center   text-center">price</span><br><br>
                                    <b >$343</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-center">Duration</span><br><br>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-center address">
                                    <span class="text-muted   text-center">Address</span><br><br>
                                    <b >San Francisco</b>
                                </div>
                                <div class="p-3 pt-1 pl-3 text-center ">
                                    <i class="fas fa-thumbtack"></i>
                                </div>
                            </div>
                            <div class="d-flex book align-items-center mb-3">
                                <div class="p-lg-3 time-three time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span class="text-muted">customer</span><br><br>
                                    <b >Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-sm-center   text-center">price</span><br><br>
                                    <b >$343</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-center">Duration</span><br><br>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-center address">
                                    <span class="text-muted   text-center">Address</span><br><br>
                                    <b >San Francisco</b>
                                </div>
                                <div class="p-3 pt-1 pl-3 text-center ">
                                    <i class="fas fa-thumbtack"></i>
                                </div>
                            </div>
                            <div class="d-flex book align-items-center mb-3">
                                <div class="p-lg-3 time-four time-element p-5"><b> 14:00 - </b> <span class="text-muted"> 16:00 </span></div>
                                <div class="h6 p-lg-3 pt-1  text-center  thin-border ">
                                    <span class="text-muted">customer</span><br><br>
                                    <b >Jacson</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-sm-center   text-center">price</span><br><br>
                                    <b >$343</b>
                                </div>
                                <div class="p-3  pt-1 text-center thin-border">
                                    <span class="text-muted text-center">Duration</span><br><br>
                                    <b >2 hours</b>
                                </div>
                                <div class="p-3  pt-1 text-center address">
                                    <span class="text-muted   text-center">Address</span><br><br>
                                    <b >San Francisco</b>
                                </div>
                                <div class="p-3 pt-1 pl-3 text-center ">
                                    <i class="fas fa-thumbtack"></i>
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

