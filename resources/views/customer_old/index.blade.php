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

    </style>
@endpush

@section('content')

    <div class="container">
        <div class="content-container" id="content-container">
            @include('admin.layouts.auth.topnav')

            <div class="data container  m-0">
                <div class="row">
                    <div class="col-md-10 ">
                        <div class="row">
                            <div class="col-md-3 statistics mr-4">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative">
                                        <svg class="visitors" width="61" height="28" viewBox="0 0 61 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 25.7456C4.16667 25.5789 9.4 22.8456 13 13.2456C17.5 1.24555 31.5 -2.75445 43.5 9.24555C46 12.2455 52.6 17.2455 59 13.2456" stroke="#3847DC" stroke-width="3" stroke-linecap="round"/>
                                        </svg>

                                        <svg width="59" height="47" viewBox="0 0 59 47" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.386 11.429C8.99204 17.697 5.90035 21.0847 3.40082 22.7509C1.65989 23.9114 0 25.7499 0 27.8422V43C0 45.2091 1.79086 47 4 47H55C57.2091 47 59 45.2091 59 43V16.3352C59 13.0698 55.2991 11.2384 52.3187 12.5725C44.7648 15.954 45.0551 9.83686 42.9561 7.36375C30.5351 -4.83201 16.0439 -0.766754 11.386 11.429Z"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="30" y1="4.5" x2="30" y2="60"
                                                                gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3847DC" stop-opacity="0.3" />
                                                    <stop offset="1" stop-color="#3847DC" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
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
                                        <svg class="customers" width="61" height="27" viewBox="0 0 61 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 1.50054C4.16667 1.66721 9.4 4.40054 13 14.0005C17.5 26.0005 31.5 30.0005 43.5 18.0005C46 15.0006 52.6 10.0006 59 14.0005" stroke="#3847DC" stroke-width="3" stroke-linecap="round"/>
                                        </svg>
                                        <svg width="60" height="46" viewBox="0 0 60 46" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.386 13.2038C9.08825 7.18771 6.14772 3.25473 3.70495 1.08362C1.96502 -0.462814 0 0.985664 0 3.3135V41.1328C0 43.342 1.79086 45.1328 4 45.1328H55.0608C57.2461 45.1328 59.0269 43.3791 59.0603 41.1941L59.4667 14.6743C59.4875 13.3185 58.8268 12.0169 57.6419 11.3575C47.723 5.83717 45.3982 14.3918 42.9561 17.2691C30.5351 29.4648 16.0439 25.3996 11.386 13.2038Z"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="30" y1="18.5" x2="30" y2="50"
                                                                gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3847DC" stop-opacity="0.3" />
                                                    <stop offset="1" stop-color="#3847DC" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>

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
                                        <svg class="orders" width="62" height="15" viewBox="0 0 62 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 12.8576C4.5 12.691 10.4 11.2576 14 6.85764C16.5 3.52431 25.1 -1.14236 39.5 6.85764C41.8333 8.52424 47.2 11.7574 50 11.3574C52.3333 11.5242 57.7 10.8578 60.5 6.85764" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                        </svg>

                                        <svg width="62" height="48" viewBox="0 0 62 48" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5003 2.44138C12.0689 6.88619 7.27322 9.34464 4.03097 10.5306C2.08576 11.2421 0.478561 13.0281 0.45022 15.0991L0.0554855 43.9453C0.0249653 46.1756 1.82457 48 4.05511 48H57.0482C59.2385 48 61.0215 46.2384 61.0479 44.0482L61.4951 6.92845C61.4984 6.65362 61.3948 6.38827 61.2062 6.18839C60.813 5.77174 60.1628 5.74488 59.7004 6.08311C54.9771 9.53798 45.2586 11.5167 42.3032 9.14017C42.0523 8.93839 41.8193 8.70512 41.5578 8.51729C28.8766 -0.589897 22.9436 -2.0132 17.5003 2.44138Z"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="29" y1="5.94043" x2="29"
                                                                y2="61.4405" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white" stop-opacity="0.3" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div class="col-md-5 offset-1">
                                        <span class="stat d-block">Orders</span>
                                        <span class="visit">2,100</span>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="row ">
                <div class="col-md-7 pl-5 ml-4 mt-5">
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
            <div class="row">
                <div class="col-md-8 pl-5 ml-4">
                    <table id="example" class="table table-striped dt-responsive nowrap" style="width:91%">
                        <thead>
                        <tr>
                            <th class="customer">Customer</th>
                            <th class="date">Date</th>
                            <th class="time">Time</th>
                            <th class="location">Location</th>
                            <th>Status</th>
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
                <div class="col-md-3">
                    <div class="card">
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
                        <img class="card-img-top mb-5" src="{{asset('/public/assets/admin/images/card.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-lg-between mb-4">
                                <h5 class="card-title">Transactions</h5>
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                <div class="d-flex align-items-center">
                                    <a href="#"><i class="fas fa-wallet"></i></a>
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
                                    <a href="#"><i class="fas fa-hand-holding-usd"></i></a>
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
                                    <a href="#"><i class="fas fa-wallet"></i></a>
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

                        </div>

                        <a class="view" href="#">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
