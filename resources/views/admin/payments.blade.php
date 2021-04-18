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

        .paycard-name {
            position: absolute!important;
            bottom: -15px;
            font-style: normal!important;
            font-style: normal!important;
            font-weight: 300!important;
            font-size: 13px!important;
            line-height: 18px!important;
            /* identical to box height, or 138% */

            display: flex!important;
            align-items: center!important;

            color: #151522!important;
        }

    </style>
    @endpush

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

            @include('admin.layouts.auth.topnav')
            <div id="myPayment" class="data payment m-0" style="margin-top: 140px!important;">
                <div class="d-flex align-items-center">
                    <h1>My Cards</h1>
                    <a href="{{route('admin.payment.add')}}" class="btn d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i>New
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

                    <div class="col-sm-12 col-md-6 col-lg-3 mt-2 my-auto" style="padding-right: 0;">
                        <div class="p-3 min-card-green">
                        <div class="row justifty-content-center align-items-center">
                            <div class="col-5">
                                <img src="{{asset('public/assets/icons/netincomegraph.svg')}}" alt="">
                            </div>
                            <div class="col-6">
                                <p class="stat d-block">Net Income</p>
                                <h4 class="visit">$2,300</h4>

                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-6 col-lg-3 mt-2 my-auto" style="padding-right: 0;">
                        <div class="p-3 min-card-light">
                        <div class="row justifty-content-center align-items-center">
                            <div class="col-5">
                                <img src="{{asset('public/assets/icons/withgraph.svg')}}" alt="">
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
                    <div class="col-md-6 pl-0 ">
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
                                        <a href="#"><img src="{{asset('public/assets/icons/received.svg')}}" alt=""></a>
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
                                        <a href="#"><img src="{{asset('public/assets/icons/withdraw.svg')}}" alt=""></a>
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
                                        <a href="#"><img src="{{asset('public/assets/icons/received.svg')}}" alt=""></a>
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
                                        <a href="#"><img src="{{asset('public/assets/icons/withdraw.svg')}}" alt=""></a>
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
                    <div class="col-md-6  pr-0">
                        <div class="pay d-flex align-items-center " style="margin-left: 0;width: 100%;">
                            <div class="d-flex align-items-center mr-4">
                                <svg width="90" height="38" viewBox="0 0 90 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.769 0C20.7937 0.136624 18.485 1.40097 17.1396 3.0474C15.9124 4.54099 14.9027 6.75939 15.2964 8.91526C17.4546 8.98242 19.6846 7.68797 20.9767 6.01375C22.1855 4.45532 23.1001 2.25081 22.769 0Z" fill="black"/>
                                    <path d="M30.575 12.4302C28.6785 10.052 26.0132 8.67188 23.4961 8.67188C20.1731 8.67188 18.7675 10.2627 16.4588 10.2627C14.0783 10.2627 12.2698 8.67651 9.39605 8.67651C6.57327 8.67651 3.56755 10.4017 1.66177 13.3518C-1.01744 17.5061 -0.558941 25.3168 3.78291 31.9697C5.33671 34.3501 7.41154 37.027 10.1255 37.0502C12.5407 37.0734 13.2215 35.501 16.4935 35.4848C19.7655 35.4663 20.3861 37.071 22.7967 37.0456C25.513 37.0247 27.7013 34.0584 29.2551 31.6779C30.3689 29.9712 30.7834 29.1121 31.6472 27.1855C25.3648 24.7934 24.3575 15.8597 30.575 12.4302Z" fill="black"/>
                                    <path d="M51.2114 13.5625H44.4602C44.0631 13.5625 43.666 13.9596 43.4674 14.3568L40.6875 31.8304C40.6875 32.2275 40.8861 32.4261 41.2832 32.4261H44.4602C44.8573 32.4261 45.2545 32.0289 45.453 31.6318L46.2473 26.8663C46.2473 26.4691 46.6444 26.072 47.2401 26.072H49.4243C53.9913 26.072 56.5726 23.8878 57.1683 19.5194C57.5654 17.7323 57.1683 16.1438 56.374 15.151C55.1826 14.1582 53.5941 13.5625 51.2114 13.5625ZM52.0056 20.1151C51.6085 22.4979 49.8214 22.4979 48.0344 22.4979H47.0415L47.8358 17.9309C47.8358 17.7323 48.0344 17.5338 48.4315 17.5338H48.8286C50.02 17.5338 51.2114 17.5338 51.8071 18.328C52.0056 18.5266 52.2042 19.1223 52.0056 20.1151Z" fill="black"/>
                                    <path d="M71.6643 19.9167H68.4873C68.2887 19.9167 67.8916 20.1152 67.8916 20.3138L67.693 21.3066L67.4944 20.9095C66.7002 19.9167 65.3102 19.5195 63.7217 19.5195C60.1476 19.5195 56.9706 22.2994 56.3749 26.0721C55.9778 28.0578 56.5734 29.8448 57.5663 31.0362C58.5591 32.2276 59.949 32.6247 61.7361 32.6247C64.7146 32.6247 66.3031 30.8377 66.3031 30.8377L66.1045 31.8305C66.1045 32.2276 66.3031 32.4262 66.7002 32.4262H69.6786C70.0758 32.4262 70.4729 32.029 70.6715 31.6319L72.4585 20.5123C72.26 20.3138 71.8628 19.9167 71.6643 19.9167ZM67.0973 26.2707C66.7002 28.0578 65.3102 29.4477 63.3246 29.4477C62.3318 29.4477 61.5375 29.0506 61.1404 28.6535C60.7433 28.0578 60.5447 27.2635 60.5447 26.2707C60.7433 24.4836 62.3318 23.0937 64.1189 23.0937C65.1117 23.0937 65.7074 23.4908 66.3031 23.8879C66.8988 24.4836 67.0973 25.4764 67.0973 26.2707Z" fill="black"/>
                                    <path d="M88.9374 19.917H85.5618C85.1646 19.917 84.9661 20.1156 84.7675 20.3141L80.3991 27.0653L78.4135 20.7112C78.2149 20.3141 78.0164 20.1156 77.4207 20.1156H74.2436C73.8465 20.1156 73.6479 20.5127 73.6479 20.9098L77.2221 31.4337L73.8465 36.1992C73.6479 36.5963 73.8465 37.192 74.2436 37.192H77.4207C77.8178 37.192 78.0163 36.9935 78.2149 36.7949L89.1359 21.1084C89.7316 20.5127 89.3345 19.917 88.9374 19.917Z" fill="black"/>
                                    </svg>

                            </div>

                            <span class="d-flex align-items-center " style="position: relative!important;">
                            <p>....</p>
                            <p>....</p>
                            <p>....</p><span class="cust">7521</span>
                            <p class="paycard-name">Apple Pay</p>
                        </span>
                        <br>

                            <div class="d-flex align-items-center ">
                                <a href="#" class="ask d-flex align-items-center justify-content-center"><i
                                        class="far fa-question-circle"></i></a>
                                <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw</a>
                            </div>

                        </div>
                        <div class="pay d-flex align-items-center " style="margin-left: 0;width: 100%;">
                            <div class="d-flex align-items-center mr-4">
                                <svg width="90" height="29" viewBox="0 0 90 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.3436 0.000976562L18.6565 19.9453C18.6565 19.9453 16.958 11.5087 16.7899 10.4493C12.9828 1.76317 7.36524 2.247 7.36524 2.247L13.9862 28.0126V28.0075H22.0357L33.1665 0.000976562H25.3436Z" fill="#1565C0"/>
                                    <path d="M31.7202 28.0146H39.0313L43.452 0.00292969H36.0493L31.7202 28.0146Z" fill="#1565C0"/>
                                    <path d="M83.4615 0.00292969H75.7685L63.7744 28.0146H71.0371L72.5344 24.014H81.6917L82.4709 28.0146H89.125L83.4615 0.00292969ZM74.5614 18.6638L78.5416 8.07792L80.6247 18.6638H74.5614Z" fill="#1565C0"/>
                                    <path d="M53.8243 8.16667C53.8243 6.62348 55.0925 5.47501 58.7289 5.47501C61.092 5.47501 63.799 7.19136 63.799 7.19136L64.9857 1.31145C64.9857 1.31145 61.5275 1.39884e-06 58.133 1.39884e-06C50.4451 1.39884e-06 46.4802 3.67717 46.4802 8.33219C46.4802 16.751 56.6127 15.5974 56.6127 19.9214C56.6127 20.6624 56.0245 22.3762 51.8049 22.3762C47.5726 22.3762 44.7791 20.8254 44.7791 20.8254L43.5186 26.4685C43.5186 26.4685 46.2255 28.0117 51.456 28.0117C56.6993 28.0117 63.9722 24.09 63.9722 18.4571C63.9722 11.6809 53.8243 11.1919 53.8243 8.16667Z" fill="#1565C0"/>
                                    <path d="M17.7721 15.1419L15.3122 3.05103C15.3122 3.05103 14.1994 0.430662 11.3065 0.430662C8.41368 0.430662 -5.05137e-07 0.430662 -5.05137e-07 0.430662C-5.05137e-07 0.430662 14.4158 4.68843 17.7721 15.1419Z" fill="#FFC107"/>
                                    </svg>


                            </div>

                            <span class="d-flex align-items-center " style="position: relative!important;">
                            <p>....</p>
                            <p>....</p>
                            <p>....</p><span class="cust">7521</span>
                            <p class="paycard-name">Visa</p>
                        </span>
                            <div class="d-flex align-items-center ">
                                <a href="#" class="ask d-flex align-items-center justify-content-center"><i
                                        class="far fa-question-circle"></i></a>
                                <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw</a>
                            </div>

                        </div>
                        <div class="pay d-flex align-items-center " style="margin-left: 0;width: 100%;">
                            <div class="d-flex align-items-center mr-4">
                                <svg width="93" height="24" viewBox="0 0 93 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M71.8907 6.2002H66.8717C66.5764 6.2002 66.2812 6.49543 66.1336 6.79067L64.0669 19.7812C64.0669 20.0765 64.2145 20.2241 64.5098 20.2241H67.1669C67.4621 20.2241 67.6098 20.0765 67.6098 19.7812L68.2002 16.0907C68.2002 15.7955 68.4955 15.5002 68.9383 15.5002H70.5622C73.9574 15.5002 75.8765 13.8764 76.3193 10.6288C76.6146 9.30021 76.3193 8.11925 75.7289 7.38116C74.8431 6.64306 73.5146 6.2002 71.8907 6.2002ZM72.4812 11.0717C72.186 12.8431 70.8574 12.8431 69.5288 12.8431H68.6431L69.2336 9.44783C69.2336 9.30021 69.3812 9.15259 69.6764 9.15259H69.9717C70.8574 9.15259 71.7431 9.15259 72.186 9.74307C72.4812 9.89069 72.4812 10.3336 72.4812 11.0717Z" fill="#139AD6"/>
                                    <path d="M35.7238 6.2002H30.7047C30.4094 6.2002 30.1142 6.49543 29.9666 6.79067L27.8999 19.7812C27.8999 20.0765 28.0475 20.2241 28.3428 20.2241H30.7047C30.9999 20.2241 31.2952 19.9288 31.4428 19.6336L32.0333 16.0907C32.0333 15.7955 32.3285 15.5002 32.7714 15.5002H34.3952C37.7904 15.5002 39.7095 13.8764 40.1523 10.6288C40.4476 9.30021 40.1523 8.11925 39.5619 7.38116C38.6761 6.64306 37.4952 6.2002 35.7238 6.2002ZM36.3142 11.0717C36.019 12.8431 34.6904 12.8431 33.3618 12.8431H32.6237L33.2142 9.44783C33.2142 9.30021 33.3618 9.15259 33.6571 9.15259H33.9523C34.838 9.15259 35.7238 9.15259 36.1666 9.74307C36.3142 9.89069 36.4619 10.3336 36.3142 11.0717Z" fill="#263B80"/>
                                    <path d="M50.9294 10.9241H48.5675C48.4199 10.9241 48.1246 11.0718 48.1246 11.2194L47.977 11.9575L47.8294 11.6622C47.2389 10.9241 46.2056 10.6289 45.0246 10.6289C42.3675 10.6289 40.0056 12.6956 39.5627 15.5004C39.2675 16.9766 39.7103 18.3051 40.4484 19.1909C41.1865 20.0766 42.2199 20.3718 43.5484 20.3718C45.7627 20.3718 46.9437 19.0432 46.9437 19.0432L46.7961 19.7813C46.7961 20.0766 46.9437 20.2242 47.2389 20.2242H49.4532C49.7485 20.2242 50.0437 19.929 50.1913 19.6337L51.5199 11.367C51.3723 11.2194 51.077 10.9241 50.9294 10.9241ZM47.5342 15.648C47.2389 16.9766 46.2056 18.0099 44.7294 18.0099C43.9913 18.0099 43.4008 17.7147 43.1056 17.4194C42.8103 16.9766 42.6627 16.3861 42.6627 15.648C42.8103 14.3194 43.9913 13.2861 45.3199 13.2861C46.058 13.2861 46.5008 13.5813 46.9437 13.8765C47.3865 14.3194 47.5342 15.0575 47.5342 15.648Z" fill="#263B80"/>
                                    <path d="M86.9485 10.9241H84.5865C84.4389 10.9241 84.1437 11.0718 84.1437 11.2194L83.9961 11.9575L83.8484 11.6622C83.258 10.9241 82.2246 10.6289 81.0437 10.6289C78.3865 10.6289 76.0246 12.6956 75.5817 15.5004C75.2865 16.9766 75.7294 18.3051 76.4675 19.1909C77.2056 20.0766 78.2389 20.3718 79.5675 20.3718C81.7818 20.3718 82.9627 19.0432 82.9627 19.0432L82.8151 19.7813C82.8151 20.0766 82.9627 20.2242 83.258 20.2242H85.4723C85.7675 20.2242 86.0627 19.929 86.2104 19.6337L87.5389 11.367C87.3913 11.2194 87.2437 10.9241 86.9485 10.9241ZM83.5532 15.648C83.258 16.9766 82.2246 18.0099 80.7484 18.0099C80.0103 18.0099 79.4198 17.7147 79.1246 17.4194C78.8294 16.9766 78.6817 16.3861 78.6817 15.648C78.8294 14.3194 80.0103 13.2861 81.3389 13.2861C82.077 13.2861 82.5199 13.5813 82.9627 13.8765C83.5532 14.3194 83.7008 15.0575 83.5532 15.648Z" fill="#139AD6"/>
                                    <path d="M63.771 10.9238H61.2615C60.9662 10.9238 60.8186 11.0714 60.671 11.2191L57.4234 16.2381L55.9472 11.5143C55.7996 11.2191 55.6519 11.0714 55.2091 11.0714H52.8472C52.5519 11.0714 52.4043 11.3667 52.4043 11.6619L55.0615 19.4858L52.5519 23.0286C52.4043 23.3239 52.5519 23.7667 52.8472 23.7667H55.2091C55.5043 23.7667 55.6519 23.6191 55.7996 23.4715L63.9186 11.8095C64.3615 11.3667 64.0663 10.9238 63.771 10.9238Z" fill="#263B80"/>
                                    <path d="M89.7522 6.64319L87.6855 19.929C87.6855 20.2242 87.8332 20.3718 88.1284 20.3718H90.1951C90.4903 20.3718 90.7856 20.0766 90.9332 19.7813L92.9999 6.79081C92.9999 6.49557 92.8522 6.34795 92.557 6.34795H90.1951C90.0475 6.20033 89.8998 6.34795 89.7522 6.64319Z" fill="#139AD6"/>
                                    <path d="M16.9763 1.77144C15.9429 0.590477 14.0239 0 11.3667 0H3.98573C3.54288 0 3.10002 0.442857 2.9524 0.885716L0 20.2239C0 20.6668 0.29524 20.962 0.590479 20.962H5.16669L6.34765 13.7286V14.0239C6.49527 13.581 6.93813 13.1382 7.38099 13.1382H9.59529C13.8763 13.1382 17.1239 11.3667 18.1572 6.49527C18.1572 6.34765 18.1572 6.20003 18.1572 6.05241C18.0096 6.05241 18.0096 6.05241 18.1572 6.05241C18.3049 4.13335 18.0096 2.95239 16.9763 1.77144Z" fill="#263B80"/>
                                    <path d="M18.0089 6.05273C18.0089 6.20035 18.0089 6.34798 18.0089 6.4956C16.9756 11.5147 13.728 13.1385 9.44698 13.1385H7.23268C6.78982 13.1385 6.34696 13.5813 6.19934 14.0242L4.72314 23.029C4.72314 23.3242 4.87076 23.6195 5.31362 23.6195H9.15174C9.5946 23.6195 10.0375 23.3242 10.0375 22.8814V22.7338L10.7756 18.1576V17.8623C10.7756 17.4195 11.2184 17.1242 11.6613 17.1242H12.2518C15.9422 17.1242 18.8946 15.648 19.6327 11.2194C19.928 9.44799 19.7804 7.82417 18.8946 6.79083C18.747 6.49559 18.4518 6.20035 18.0089 6.05273Z" fill="#139AD6"/>
                                    <path d="M16.9768 5.60985C16.8291 5.60985 16.6815 5.46223 16.5339 5.46223C16.3863 5.46223 16.2387 5.46223 16.091 5.31461C15.5006 5.16699 14.9101 5.16699 14.172 5.16699H8.41482C8.2672 5.16699 8.11958 5.16699 7.97196 5.31461C7.67672 5.46223 7.5291 5.75747 7.5291 6.05271L6.34814 13.7289V14.0242C6.49576 13.5813 6.93862 13.1385 7.38148 13.1385H9.59578C13.8768 13.1385 17.1244 11.367 18.1577 6.49557C18.1577 6.34795 18.1577 6.20033 18.3053 6.05271C18.0101 5.90509 17.8625 5.75747 17.5672 5.75747C17.1244 5.60985 17.1244 5.60985 16.9768 5.60985Z" fill="#232C65"/>
                                    </svg>


                            </div>

                            <span class="d-flex align-items-center " style="position: relative!important;">
                            <p>....</p>
                            <p>....</p>
                            <p>....</p><span class="cust">7521</span>
                            <p class="paycard-name">Paypal</p>
                        </span>
                            <div class="d-flex align-items-center ">
                                <a href="#" class="ask d-flex align-items-center justify-content-center"><i
                                        class="far fa-question-circle"></i></a>
                                <a href="#" class="btn d-flex align-items-center justify-content-center">Withdraw</a>
                            </div>
                        </div>
                        <div class="pay new" style="margin-left: 0;width: 100%;">
                            <a href="{{route('admin.payment.add')}}" class="add d-flex align-items-center justify-content-center"><i
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
