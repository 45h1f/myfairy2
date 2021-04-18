@extends('customer.layouts.auth.master')
@push('styles')
    <style>

        /* .table {
            margin-top: 80px;
            height: 382px;
        } */

        /* .table tr {
            display: flex;
            align-items: center;
            padding: 12px 0;
        } */

        .table td {
            border: none;
            font-size: 12px;
            /* padding: 0px 0px 0px 46px; */
            margin: auto 0;
            font-family: 'Poppins', sans-serif;
        }

        .table thead th {
            border: none;
            color: #d2d5d7;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            /* padding: 0px 0px 0px 46px; */
        }

        .view {
            background: none!important;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 150%;
            /* identical to box height, or 18px */
            margin-top: 10px;
            width: 100%!important;
            color: #403669;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(247, 248, 255, 1);
        }
        /* .table .customer {
            width: 20p%;
        }

        .table .date {
            width: 15%;
        }

        .table .time {
            width: 15%;
        }

        .table .location {
            width: 30%;
        }

        .table svg {
            margin-right: 20%;
        } */

    </style>
@endpush

@section('content')

    <div class="container">
        <div class="content-container" id="content-container">
            @include('customer.layouts.auth.topnav')

            <div class="data container  m-0" style="margin-top: 140px!important;">
                <div class="row">
                    <div class="col-md-9 d-flex" style="padding-left: 0">
                        {{-- <div class="row"> --}}
                            <div class="col-md-3 statistics mr-4">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative">
                                        <img src="{{asset('public/assets/icons/dash1.svg')}}" alt="">
                                    </div>
                                    <div class="col-md-5 offset-1">
                                        <span class="stat d-block">Visitors</span>
                                        <span class="visit">2,100</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 statistics mr-4">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative">
                                        <img src="{{asset('public/assets/icons/dash2.svg')}}" alt="">

                                    </div>
                                    <div class="col-md-5 offset-1">
                                        <span class="stat d-block">Customers</span>
                                        <span class="visit">2,100</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 statistics custom ">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative">
                                        <img src="{{asset('public/assets/icons/dash3.svg')}}" alt="">
                                    </div>
                                    <div class="col-md-5 offset-1">
                                        <span class="stat d-block">Orders</span>
                                        <span class="visit">2,100</span>

                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}

                    </div>


                </div>
            </div>
            <div class="data container  m-0">
                <div class="row ">
                    <div class="col-md-8  mt-5" style="padding-left: 0; padding-right: 0;">
                        <div class="bookings d-flex justify-content-lg-between">
                            <div class="booking d-flex align-items-center">
                                <a href="#" class="d-flex justify-content-center align-items-center">
                                    <i class="far fa-bookmark"></i>
                                </a>
                                <p class="mb-0">Booking</p>
                            </div>
                            <div>
                                <button>
                                    <svg width="18" height="18" viewBox="0 0 20 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.7778 1H1L8.11111 9.40889V15.2222L11.6667 17V9.40889L18.7778 1Z"
                                            stroke="#593E98" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <sanp>Status</sanp>

                                </button>
                                <button onclick="displayCalendar()">
                                    <i class="far fa-calendar"></i>
                                    <sanp>Date</sanp>
                                    <div class="calendar showDate" id="calendar">
                                        <div class="calendar__picture">
                                            <h2>18, Sunday</h2>
                                            <h3>November</h3>
                                        </div>
                                        <div class="calendar__date">
                                            <div class="calendar__day">M</div>
                                            <div class="calendar__day">T</div>
                                            <div class="calendar__day">W</div>
                                            <div class="calendar__day">T</div>
                                            <div class="calendar__day">F</div>
                                            <div class="calendar__day">S</div>
                                            <div class="calendar__day">S</div>
                                            <div class="calendar__number"></div>
                                            <div class="calendar__number"></div>
                                            <div class="calendar__number"></div>
                                            <div class="calendar__number">1</div>
                                            <div class="calendar__number">2</div>
                                            <div class="calendar__number">3</div>
                                            <div class="calendar__number">4</div>
                                            <div class="calendar__number">5</div>
                                            <div class="calendar__number">6</div>
                                            <div class="calendar__number">7</div>
                                            <div class="calendar__number">8</div>
                                            <div class="calendar__number">9</div>
                                            <div class="calendar__number">10</div>
                                            <div class="calendar__number">11</div>
                                            <div class="calendar__number">12</div>
                                            <div class="calendar__number">13</div>
                                            <div class="calendar__number">14</div>
                                            <div class="calendar__number">15</div>
                                            <div class="calendar__number">16</div>
                                            <div class="calendar__number">17</div>
                                            <div class="calendar__number calendar__number--current">18</div>
                                            <div class="calendar__number">19</div>
                                            <div class="calendar__number">20</div>
                                            <div class="calendar__number">21</div>
                                            <div class="calendar__number">22</div>
                                            <div class="calendar__number">23</div>
                                            <div class="calendar__number">24</div>
                                            <div class="calendar__number">25</div>
                                            <div class="calendar__number">26</div>
                                            <div class="calendar__number">27</div>
                                            <div class="calendar__number">28</div>
                                            <div class="calendar__number">29</div>
                                            <div class="calendar__number">30</div>
                                        </div>
                                    </div>

                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="data container  m-0" >
                <div class="row">
                    <div class="col-md-8" style="padding-left: 0; padding-right: 0;">
                        <table id="example" class="table table-striped" style="width:100%; margin-top: 45px;">
                            <thead>
                            <tr>
                                <th class="customer">Customer</th>
                                <th class="date">Date</th>
                                <th class="time">Time</th>
                                <th class="location">Location</th>
                                <th colspan="2">Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="customer">Jackson</td>
                                <td class="date">10 May, 2020</td>
                                <td class="time">8:00 AM</td>
                                <td class="location">2320 Wedgewood Dr, El Dorado, KS, 67042</td>
                                <td><button class="btn">Confirmed</button></td>
                                <td><svg width="4" height="16" viewBox="0 0 4 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z"
                                            fill="#C5C7CD" />
                                    </svg>
                                </td>

                            </tr>
                            <tr>
                                <td class="customer">Ahmad Umar</td>
                                <td class="date">6 May, 2020</td>
                                <td class="time">12:00 PM</td>
                                <td class="location">2320 Wedgewood Dr, El Dorado, KS, 67042</td>
                                <td><button class="btn">Confirmed</button></a></td>
                                <td><svg width="4" height="16" viewBox="0 0 4 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z"
                                            fill="#C5C7CD" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="customer">Jeffrey Thomas</td>
                                <td class="date">5 May, 2020</td>
                                <td class="time">8:00 AM</td>
                                <td class="location">2320 Wedgewood Dr, El Dorado, KS, 67042</td>
                                <td><button class="btn">Confirmed</button></a></td>
                                <td><svg width="4" height="16" viewBox="0 0 4 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z"
                                            fill="#C5C7CD" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="customer">Olivia</td>
                                <td class="date">2 May, 2020</td>
                                <td class="time">8:00 AM</td>
                                <td class="location">2320 Wedgewood Dr, El Dorado, KS, 67042</td>
                                <td><button class="btn cancel">Canceled</button></a></td>
                                <td><svg width="4" height="16" viewBox="0 0 4 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z"
                                            fill="#C5C7CD" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="customer">James</td>
                                <td class="date">1 May, 2020</td>
                                <td class="time">8:00 AM</td>
                                <td class="location">2320 Wedgewood Dr, El Dorado, KS, 67042</td>
                                <td><button class="btn">Confirmed</button></a></td>
                                <td><svg width="4" height="16" viewBox="0 0 4 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z"
                                            fill="#C5C7CD" />
                                    </svg>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4" >
                        <div class="card" style="margin-top: 45px;">
                            <div class="d-flex title align-items-center justify-content-lg-between mb-3">
                                <div>
                                    <h2>My Cards</h2>
                                </div>
                                <div>
                                    <a href="#">
                                        <svg width="23" height="5" viewBox="0 0 23 5" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11.6983" cy="2.35453" r="2.35453" fill="#31193B" />
                                            <circle cx="2.35453" cy="2.35453" r="2.35453" fill="#31193B" />
                                            <circle cx="20.6455" cy="2.35453" r="2.35453" fill="#31193B" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                            <img class="card-img-top mb-5" src="{{asset('public/assets/icons/bankaccount.svg')}}" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-lg-between mb-4">
                                    <h5 class="card-title">Transactions</h5>
                                    <a href="#"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#"><img src="{{asset('public/assets/icons/received.svg')}}" alt=""></i></a>
                                        <div>
                                            <p>Received</p>
                                            <span>12 May, 2020</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="money">+ $1,000</p>
                                    </div>
                                </div>
                                <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#"><img src="{{asset('public/assets/icons/withdraw.svg')}}" alt=""></a>
                                        <div>
                                            <p>Withdrawn</p>
                                            <span>6 May, 2020</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="money withdrawn">- $5,200</p>
                                    </div>
                                </div>
                                <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#"><img src="{{asset('public/assets/icons/received.svg')}}" alt=""></a>
                                        <div>
                                            <p>Received</p>
                                            <span>12 May, 2020</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="money">+ $600</p>
                                    </div>
                                </div>
                                <hr>
                                <a class="view" href="#">View All</a>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
