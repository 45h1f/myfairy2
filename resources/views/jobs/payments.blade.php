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

        .box-shadow {
            border: 1px solid #f2f0fd;
            box-shadow: 0px -16px 16px rgb(141 141 223 / 5%), 0px 8px 28px rgb(50 50 71 / 6%);
        }

        .br-1 {
            border-radius: 1rem;
        }

        .min-card-light {
            background: #FFFFFF;
box-shadow: 0px 15px 32px rgba(50, 50, 71, 0.08);
border-radius: 13px;
        }
        .min-card-light p {
            font-weight: 500;
            font-size: 14px;
            line-height: 150%;
            /* identical to box height, or 21px */
            color: #C0C3DC;
        }

        .min-card-light h4{
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 150%;
            color: #2B2B4C;
        }

        .min-card-green {
            background: #0FE07B;
box-shadow: 0px 15px 32px rgba(50, 50, 71, 0.08);
border-radius: 13px;
        }
        .min-card-green p {
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 150%;
            /* identical to box height, or 21px */
            color: #BFFFEC;
        }

        .min-card-green h4{
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 150%;
            /* identical to box height, or 45px */
            color: #FFFFFF;
        }

    </style>
    @endpush

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

            @include('admin.layouts.auth.topnav')
            <div id="myPayment" class="data payment m-0">
                <div class="d-flex align-items-center">
                    <h1>My Cards</h1>
                    <a href="{{route('payment.add')}}" class="btn d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i>New
                        Card</a>
                </div>
                <div class="row balance mt-4">

                    <!-- <div class="col-md-5 pl-0">
                        <div class="row">

                            <div class="col-md-6 pl-0 pt-1">
                                <div style="text-align: center !important;">
                                    <img src="{{asset('/public/assets/admin/images/image_processing.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-md-5 ml-1 pt-5">

                                <p class="customize">Balance</p>
                                <p class="price mt-4">$ 2,230</p>
                                <div class="d-flex d-flex align-items-center">
                                    <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw
                                        money</a>
                                    <a href="#" class="arrow d-flex align-items-center justify-content-center"><i
                                            class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="arrow d-flex align-items-center justify-content-center"><i
                                            class="far fa-arrow-alt-circle-down"></i></a>
                                </div>


                            </div>
                        </div>
                    </div> -->
                    <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
                                <div style="text-align: center !important;">
                                    <img class="w-100" src="{{asset('/public/assets/admin/images/image_processing.png')}}" alt="">
                                </div>
                            </div>

                    <div class="col-sm-12 col-md-6 col-lg-3 mt-2 my-auto">

                        <p class="customize">Balance</p>
                        <p class="price mt-4">$ 2,230</p>
                        <div class="d-flex d-flex align-items-center">
                            <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw
                                money</a>
                            <a href="#" class="arrow d-flex align-items-center justify-content-center"><i
                                    class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="arrow d-flex align-items-center justify-content-center"><i
                                    class="far fa-arrow-alt-circle-down"></i></a>
                        </div>


                    </div>
                    <!-- <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
                            <div style="text-align: left !important;">
                                <img src="{{asset('/public/assets/admin/images/income.png')}}" alt="">
                            </div>
                    </div> -->

                    <div class="col-sm-12 col-md-6 col-lg-3 mt-2 my-auto">
                        <div class="p-3 min-card-green">
                        <div class="row justifty-content-center align-items-center">
                            <div class="col-5">
                                <svg class="visitors" width="61" height="28" viewBox="0 0 61 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 25.7456C4.16667 25.5789 9.4 22.8456 13 13.2456C17.5 1.24555 31.5 -2.75445 43.5 9.24555C46 12.2455 52.6 17.2455 59 13.2456" stroke="#fff" stroke-width="3" stroke-linecap="round"/>
                                </svg>

                                <svg width="59" height="47" viewBox="0 0 59 47" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.386 11.429C8.99204 17.697 5.90035 21.0847 3.40082 22.7509C1.65989 23.9114 0 25.7499 0 27.8422V43C0 45.2091 1.79086 47 4 47H55C57.2091 47 59 45.2091 59 43V16.3352C59 13.0698 55.2991 11.2384 52.3187 12.5725C44.7648 15.954 45.0551 9.83686 42.9561 7.36375C30.5351 -4.83201 16.0439 -0.766754 11.386 11.429Z"
                                        fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="30" y1="4.5" x2="30" y2="60"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" stop-opacity="0.3" />
                                            <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="col-6">
                                <p class="stat d-block">Net Income</p>
                                <h4 class="visit">$2,300</h4>

                            </div>
                        </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-12 col-md-6 col-lg-3 mt-2 my-auto">
                        <div class="p-4 min-card-light">
                        <div class="row justifty-content-center align-items-center">
                            <div class="col-5">
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
                            <div class="col-5">
                                <p class="stat d-block">Withdrawn</p>
                                <h4 class="visit">$1,000</h4>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-5">
                    <div class="col-md-7 pl-0 ">
                        <div class="card">
                            <div class="d-flex title align-items-center justify-content-lg-between mb-3">
                                <div>
                                    <h2>Transactions</h2>
                                </div>
                                <div class="position-relative">
                                    <a onclick="showRecent()" class="btn d-flex align-items-center justify-content-center"><i
                                            class="fas fa-chevron-down"></i>Recent</a>
                                    <div class="collapse navbar-collapse position-absolute" id="recent-list">
                                        <ul class="nav navbar-nav ml-auto ">
                                            <li class="nav-item">
                                                <a class="nav-link text-center" href="#">Place holder   1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-center" href="#">Place holder  2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-center" href="#">Place holder  3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-center" href="#">Place holder  4</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-center" href="#">Place holder  5</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-center" href="#">Place holder  6</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="card-body">
                                <div id="tabs" class="tabe d-flex align-items-center mb-5 position-relative">
                                    <span class="tab activeTab">All</span>
                                    <span class="tab">Received</span>
                                    <span class="tab">Withdrawn</span>
                                </div>
                                <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#"><i class="fas fa-wallet"></i></a>
                                        <div>
                                            <p>Received</p>
                                            <span>12 May, 2020</span>
                                        </div>
                                    </div>
                                    <span class="ref">Ref ID 305661460</span>
                                    <div>
                                        <p class="money">+ $1,000</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#"><i class="fas fa-hand-holding-usd"></i></a>
                                        <div>
                                            <p>Withdrawn</p>
                                            <span>6 May, 2020</span>
                                        </div>
                                    </div>
                                    <span class="ref">Ref ID 305661460</span>
                                    <div>
                                        <p class="money withdrawn">- $5,200</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#"><i class="fas fa-wallet"></i></a>
                                        <div>
                                            <p>Received</p>
                                            <span>12 May, 2020</span>
                                        </div>
                                    </div>
                                    <span class="ref">Ref ID 305661460</span>
                                    <div>
                                        <p class="money">+ $600</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex walet align-items-center justify-content-lg-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#"><i class="fas fa-hand-holding-usd"></i></a>
                                        <div>
                                            <p>Withdrawn</p>
                                            <span>6 May, 2020</span>
                                        </div>
                                    </div>
                                    <span class="ref">Ref ID 305661460</span>
                                    <div>
                                        <p class="money withdrawn">- $5,200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5  pr-0">
                        <div class="pay d-flex align-items-center ">
                            <div class="d-flex align-items-center mr-4">
                                <svg class="apple" width="32" height="30" viewBox="0 0 32 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.575 4.43018C28.6785 2.052 26.0132 0.671875 23.4961 0.671875C20.1731 0.671875 18.7675 2.26273 16.4588 2.26273C14.0783 2.26273 12.2698 0.676507 9.39605 0.676507C6.57327 0.676507 3.56755 2.40167 1.66177 5.35181C-1.01744 9.50609 -0.558941 17.3168 3.78291 23.9697C5.33671 26.3501 7.41154 29.027 10.1255 29.0502C12.5407 29.0734 13.2215 27.501 16.4935 27.4848C19.7655 27.4663 20.3861 29.071 22.7967 29.0456C25.513 29.0247 27.7013 26.0584 29.2551 23.6779C30.3689 21.9712 30.7834 21.1121 31.6472 19.1855C25.3648 16.7934 24.3575 7.85966 30.575 4.43018Z"
                                        fill="black" />
                                </svg>
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.2114 0.5625H4.46021C4.06308 0.5625 3.66595 0.959627 3.46739 1.35675L0.6875 18.8304C0.6875 19.2275 0.886066 19.4261 1.28319 19.4261H4.46021C4.85734 19.4261 5.25446 19.0289 5.45303 18.6318L6.24728 13.8663C6.24728 13.4691 6.64441 13.072 7.2401 13.072H9.4243C13.9913 13.072 16.5726 10.8878 17.1683 6.51941C17.5654 4.73234 17.1683 3.14383 16.374 2.15101C15.1826 1.15819 13.5941 0.5625 11.2114 0.5625ZM12.0056 7.1151C11.6085 9.49787 9.82143 9.49787 8.03436 9.49787H7.04154L7.83579 4.9309C7.83579 4.73234 8.03435 4.53377 8.43148 4.53377H8.82861C10.02 4.53377 11.2114 4.53377 11.8071 5.32803C12.0056 5.52659 12.2042 6.12228 12.0056 7.1151Z"
                                        fill="black" />
                                </svg>
                                <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.6643 0.91666H12.4873C12.2887 0.91666 11.8916 1.11522 11.8916 1.31379L11.693 2.3066L11.4944 1.90948C10.7002 0.91666 9.31025 0.519531 7.72174 0.519531C4.14759 0.519531 0.970572 3.29942 0.374881 7.07213C-0.0222465 9.05777 0.573445 10.8448 1.56626 12.0362C2.55908 13.2276 3.94903 13.6247 5.7361 13.6247C8.71456 13.6247 10.3031 11.8377 10.3031 11.8377L10.1045 12.8305C10.1045 13.2276 10.3031 13.4262 10.7002 13.4262H13.6786C14.0758 13.4262 14.4729 13.029 14.6715 12.6319L16.4585 1.51235C16.26 1.31379 15.8628 0.91666 15.6643 0.91666ZM11.0973 7.27069C10.7002 9.05777 9.31024 10.4477 7.32461 10.4477C6.33179 10.4477 5.53754 10.0506 5.14041 9.65346C4.74328 9.05777 4.54472 8.26351 4.54472 7.27069C4.74328 5.48362 6.33179 4.09368 8.11887 4.09368C9.11168 4.09368 9.70737 4.4908 10.3031 4.88793C10.8988 5.48362 11.0973 6.47644 11.0973 7.27069Z"
                                        fill="black" />
                                </svg>
                                <svg width="17" height="19" viewBox="0 0 17 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.9374 0.916992H12.5618C12.1646 0.916992 11.9661 1.11555 11.7675 1.31412L7.39912 8.06528L5.41348 1.71125C5.21492 1.31412 5.01635 1.11556 4.42066 1.11556H1.24364C0.846511 1.11556 0.647949 1.51268 0.647949 1.90981L4.22209 12.4337L0.84651 17.1992C0.647946 17.5963 0.846511 18.192 1.24364 18.192H4.42066C4.81779 18.192 5.01635 17.9935 5.21491 17.7949L16.1359 2.10837C16.7316 1.51268 16.3345 0.916992 15.9374 0.916992Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <span class="d-flex align-items-center ">
                            <p>....</p>
                            <p>....</p>
                            <p>....</p><span class="cust">7521</span>
                        </span>
                            <div class="d-flex align-items-center ">
                                <a href="#" class="ask d-flex align-items-center justify-content-center"><i
                                        class="far fa-question-circle"></i></a>
                                <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw</a>
                            </div>

                        </div>
                        <div class="pay d-flex align-items-center ">
                            <div class="d-flex align-items-center mr-4">
                                <svg width="27" height="29" viewBox="0 0 27 29" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.3436 0.000976562L11.6565 19.9453C11.6565 19.9453 9.95795 11.5087 9.78988 10.4493C5.98284 1.76317 0.365235 2.247 0.365235 2.247L6.98617 28.0126V28.0075H15.0357L26.1665 0.000976562H18.3436Z"
                                        fill="#1565C0" />
                                </svg>
                                <svg width="13" height="29" viewBox="0 0 13 29" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.720213 28.0146H8.03125L12.452 0.00292969H5.04929L0.720213 28.0146Z"
                                          fill="#1565C0" />
                                </svg>
                                <svg width="22" height="29" viewBox="0 0 22 29" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8243 8.16667C10.8243 6.62348 12.0925 5.47501 15.7289 5.47501C18.092 5.47501 20.799 7.19136 20.799 7.19136L21.9857 1.31145C21.9857 1.31145 18.5275 1.39884e-06 15.133 1.39884e-06C7.44507 1.39884e-06 3.48015 3.67717 3.48015 8.33219C3.48015 16.751 13.6127 15.5974 13.6127 19.9214C13.6127 20.6624 13.0245 22.3762 8.80491 22.3762C4.57261 22.3762 1.77908 20.8254 1.77908 20.8254L0.518556 26.4685C0.518556 26.4685 3.2255 28.0117 8.45604 28.0117C13.6993 28.0117 20.9722 24.09 20.9722 18.4571C20.9722 11.6809 10.8243 11.1919 10.8243 8.16667Z"
                                        fill="#1565C0" />
                                </svg>
                                <svg width="27" height="29" viewBox="0 0 27 29" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.4615 0.00292969H12.7685L0.774415 28.0146H8.03708L9.53442 24.014H18.6917L19.4709 28.0146H26.125L20.4615 0.00292969ZM11.5614 18.6638L15.5416 8.07792L17.6247 18.6638H11.5614Z"
                                        fill="#1565C0" />
                                </svg>

                            </div>

                            <span class="d-flex align-items-center ">
                            <p>....</p>
                            <p>....</p>
                            <p>....</p><span class="cust">7521</span>
                        </span>
                            <div class="d-flex align-items-center ">
                                <a href="#" class="ask d-flex align-items-center justify-content-center"><i
                                        class="far fa-question-circle"></i></a>
                                <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw</a>
                            </div>

                        </div>
                        <div class="pay d-flex align-items-center ">
                            <div class="d-flex align-items-center mr-4">
                                <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.9763 1.77144C15.9429 0.590477 14.0239 0 11.3667 0H3.98573C3.54288 0 3.10002 0.442857 2.9524 0.885716L0 20.2239C0 20.6668 0.29524 20.962 0.590479 20.962H5.16669L6.34765 13.7286V14.0239C6.49527 13.581 6.93813 13.1382 7.38099 13.1382H9.59529C13.8763 13.1382 17.1239 11.3667 18.1572 6.49527C18.1572 6.34765 18.1572 6.20003 18.1572 6.05241C18.0096 6.05241 18.0096 6.05241 18.1572 6.05241C18.3049 4.13335 18.0096 2.95239 16.9763 1.77144Z"
                                        fill="#263B80" />
                                </svg>



                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.72375 0.200195H3.70468C3.40944 0.200195 3.1142 0.495434 2.96658 0.790674L0.899902 13.7812C0.899902 14.0765 1.04752 14.2241 1.34276 14.2241H3.70468C3.99992 14.2241 4.29516 13.9288 4.44278 13.6336L5.03326 10.0907C5.03326 9.79548 5.3285 9.50024 5.77136 9.50024H7.39517C10.7904 9.50024 12.7095 7.87642 13.1523 4.62879C13.4476 3.30021 13.1523 2.11925 12.5619 1.38116C11.6761 0.643056 10.4952 0.200195 8.72375 0.200195ZM9.31423 5.07165C9.01899 6.84309 7.69041 6.84309 6.36184 6.84309H5.62374L6.21422 3.44783C6.21422 3.30021 6.36183 3.15259 6.65707 3.15259H6.95231C7.83803 3.15259 8.72375 3.15259 9.16661 3.74307C9.31423 3.89069 9.46185 4.33355 9.31423 5.07165Z"
                                        fill="#263B80" />
                                </svg>
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9294 0.924147H9.5675C9.41988 0.924147 9.12464 1.07177 9.12464 1.21938L8.97702 1.95748L8.8294 1.66225C8.23893 0.924147 7.20558 0.628906 6.02463 0.628906C3.36747 0.628906 1.00555 2.69559 0.562693 5.50036C0.267453 6.97656 0.710313 8.30514 1.44841 9.19086C2.18651 10.0766 3.21985 10.3718 4.54843 10.3718C6.76272 10.3718 7.94368 9.04323 7.94368 9.04323L7.79606 9.78133C7.79606 10.0766 7.94368 10.2242 8.23892 10.2242H10.4532C10.7485 10.2242 11.0437 9.92895 11.1913 9.63371L12.5199 1.36701C12.3723 1.21939 12.077 0.924147 11.9294 0.924147ZM8.53416 5.64798C8.23892 6.97656 7.20558 8.0099 5.72939 8.0099C4.99129 8.0099 4.40081 7.71466 4.10557 7.41942C3.81033 6.97656 3.66271 6.38608 3.66271 5.64798C3.81033 4.3194 4.99129 3.28606 6.31987 3.28606C7.05797 3.28606 7.50082 3.5813 7.94368 3.87654C8.38654 4.3194 8.53416 5.0575 8.53416 5.64798Z"
                                        fill="#263B80" />
                                </svg>
                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.771 0.923828H9.26148C8.96624 0.923828 8.81862 1.07145 8.671 1.21907L5.42337 6.23814L3.94717 1.51431C3.79955 1.21907 3.65193 1.07145 3.20907 1.07145H0.847155C0.551916 1.07145 0.404297 1.36669 0.404297 1.66193L3.06145 9.48578L0.551914 13.0286C0.404295 13.3239 0.551916 13.7667 0.847155 13.7667H3.20907C3.50431 13.7667 3.65193 13.6191 3.79955 13.4715L11.9186 1.80955C12.3615 1.36669 12.0663 0.923828 11.771 0.923828Z"
                                        fill="#263B80" />
                                </svg>
                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.89074 0.200195H2.87167C2.57643 0.200195 2.28119 0.495434 2.13357 0.790674L0.0668945 13.7812C0.0668945 14.0765 0.214513 14.2241 0.509753 14.2241H3.16691C3.46215 14.2241 3.60977 14.0765 3.60977 13.7812L4.20025 10.0907C4.20025 9.79548 4.49549 9.50024 4.93835 9.50024H6.56216C9.95742 9.50024 11.8765 7.87642 12.3193 4.62879C12.6146 3.30021 12.3193 2.11925 11.7289 1.38116C10.8431 0.643056 9.51456 0.200195 7.89074 0.200195ZM8.48122 5.07165C8.18598 6.84309 6.8574 6.84309 5.52882 6.84309H4.64311L5.23359 3.44783C5.23359 3.30021 5.38121 3.15259 5.67644 3.15259H5.97169C6.8574 3.15259 7.74312 3.15259 8.18598 3.74307C8.48122 3.89069 8.48122 4.33355 8.48122 5.07165Z"
                                        fill="#139AD6" />
                                </svg>
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9485 0.924147H9.58654C9.43892 0.924147 9.14368 1.07177 9.14368 1.21938L8.99607 1.95748L8.84844 1.66225C8.25796 0.924147 7.22463 0.628906 6.04367 0.628906C3.38651 0.628906 1.0246 2.69559 0.581736 5.50036C0.286497 6.97656 0.729354 8.30514 1.46745 9.19086C2.20555 10.0766 3.23889 10.3718 4.56747 10.3718C6.78177 10.3718 7.96273 9.04323 7.96273 9.04323L7.8151 9.78133C7.8151 10.0766 7.96273 10.2242 8.25797 10.2242H10.4723C10.7675 10.2242 11.0627 9.92895 11.2104 9.63371L12.5389 1.36701C12.3913 1.21939 12.2437 0.924147 11.9485 0.924147ZM8.5532 5.64798C8.25796 6.97656 7.22463 8.0099 5.74843 8.0099C5.01033 8.0099 4.41985 7.71466 4.12461 7.41942C3.82937 6.97656 3.68175 6.38608 3.68175 5.64798C3.82937 4.3194 5.01033 3.28606 6.3389 3.28606C7.077 3.28606 7.51987 3.5813 7.96273 3.87654C8.5532 4.3194 8.70082 5.0575 8.5532 5.64798Z"
                                        fill="#139AD6" />
                                </svg>
                                <svg width="6" height="15" viewBox="0 0 6 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.75222 0.643192L0.685547 13.929C0.685547 14.2242 0.833166 14.3718 1.12841 14.3718H3.19508C3.49032 14.3718 3.78556 14.0766 3.93318 13.7813L5.99986 0.790809C5.99986 0.495569 5.85224 0.347951 5.557 0.347951H3.19508C3.04746 0.200331 2.89984 0.347952 2.75222 0.643192Z"
                                        fill="#139AD6" />
                                </svg>

                            </div>

                            <span class="d-flex align-items-center ">
                            <p>....</p>
                            <p>....</p>
                            <p>....</p><span class="cust">7521</span>
                        </span>
                            <div class="d-flex align-items-center ">
                                <a href="#" class="ask d-flex align-items-center justify-content-center"><i
                                        class="far fa-question-circle"></i></a>
                                <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw</a>
                            </div>
                        </div>
                        <div class="pay new">
                            <a href="{{route('payment.add')}}" class="add d-flex align-items-center justify-content-center"><i
                                    class="fas fa-plus"></i>Add
                                New</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
<script src="{{asset('/public/assets/admin/custom/js/payment.js')}}"></script>
@endpush
