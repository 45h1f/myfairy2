@extends('admin.layouts.auth.master')

@push('styles')
    <style>
        .content-container{
            min-height: 100vh;
        }
    </style>
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
        <div class="content-container" >
            @include('admin.layouts.auth.topnav')

            <div class="container">
                <div class="payment-method m-auto">
                    <div class="add d-flex justify-content-center align-items-center">
                        <a href="{{route('payments')}}">
                            <div class="d-flex justify-content-center align-items-center">
                                <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1.5L0.999999 7.5L7 13.5" stroke="#593E98" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </a>
                        <h2 class="mb-0 ml-4">Add Payment method</h2>
                    </div>
                    <form>
                        <div class="terms d-flex justify-content-between">
                            <div>
                                <h3>Enter your payment details</h3>
                                <p class="agree">By continuing you agree to our <span>Terms</span></p>
                                <div class="methods d-flex align-items-center mt-5">

                                    <div class="d-flex justify-content-center align-items-center position-relative">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <img src="{{asset('/public/assets/admin/images/icons8-checkmark-16.png')}}" alt="">
                                    </span>
                                        <svg width="15" height="17" viewBox="0 0 16 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.191 0.217773L7.20445 12.1076C7.20445 12.1076 6.19187 7.07812 6.09167 6.44658C3.8221 1.26831 0.473145 1.55675 0.473145 1.55675L4.42023 16.917V16.914H9.21898L15.8546 0.217773H11.191Z"
                                                fill="#1565C0" />
                                        </svg>
                                        <!--
                                        --><svg width="7" height="17" viewBox="0 0 8 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.99121 16.917H5.34971L7.98515 0.217773H3.572L0.99121 16.917Z"
                                                  fill="#1565C0" />
                                        </svg>
                                         <svg width="11" height="17" viewBox="0 0 13 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.1687 5.08538C6.1687 4.1654 6.92472 3.48074 9.09258 3.48074C10.5014 3.48074 12.1151 4.50394 12.1151 4.50394L12.8226 0.998624C12.8226 0.998624 10.761 0.216798 8.73734 0.216798C4.15417 0.216798 1.79047 2.40895 1.79047 5.18406C1.79047 10.2029 7.83103 9.51523 7.83103 12.093C7.83103 12.5348 7.48035 13.5564 4.96484 13.5564C2.44174 13.5564 0.776366 12.6319 0.776366 12.6319L0.0249031 15.996C0.0249031 15.996 1.63865 16.916 4.75685 16.916C7.88264 16.916 12.2184 14.5781 12.2184 11.2201C12.2184 7.18037 6.1687 6.8889 6.1687 5.08538Z"
                                                fill="#1565C0" />
                                        </svg>
                                         <svg width="15" height="17" viewBox="0 0 16 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8381 0.217773H7.25186L0.101563 16.917H4.43122L5.32386 14.532H10.783L11.2475 16.917H15.2144L11.8381 0.217773ZM6.53228 11.3425L8.90509 5.0317L10.1469 11.3425H6.53228Z"
                                                fill="#1565C0" />
                                        </svg>

                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img src="https://img.icons8.com/fluent/48/000000/paypal.png" />
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img src="https://img.icons8.com/ios-glyphs/40/000000/mac-os.png" />
                                    </div>


                                </div>
                            </div>
                            <div>
                                <img src="{{asset('/public/assets/admin/images/visa.png')}}" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="name">Cardholder Name</label>
                                <input type="text" class="form-control w-100" id="name">
                            </div>
                            <div class="form-group">
                                <label for="card-number">Card Number</label>
                                <input type="number" class="form-control w-100" id="card-number">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="box d-flex justify-content-between">
                                <div>
                                    <label>Exp Month</label>
                                    <select>
                                        <option style="display:none;">Month</option>
                                        <option name="January" value="1">1</option>
                                        <option name="February" value="2">2</option>
                                        <option name="March" value="3">3</option>
                                        <option name="April" value="4">4</option>
                                        <option name="May" value="5">5</option>
                                        <option name="June" value="6">6</option>
                                        <option name="July" value="7">7</option>
                                        <option name="August" value="8">8</option>
                                        <option name="September" value="9">9</option>
                                        <option name="October" value="10">10</option>
                                        <option name="November" value="11">11</option>
                                        <option name="December" value="12">12</option>

                                    </select>
                                </div>

                                <div>
                                    <label>Exp Month</label>
                                    <select>
                                        <option style="display:none;">Year</option>
                                        <option name="January" value="1">2020</option>
                                        <option name="February" value="2">2021</option>
                                        <option name="March" value="3">2023</option>
                                        <option name="April" value="4">2024</option>
                                        <option name="May" value="5">2025</option>
                                        <option name="June" value="6">2026</option>
                                        <option name="July" value="7">2027</option>
                                        <option name="August" value="8">2028</option>
                                        <option name="September" value="9">2029</option>
                                        <option name="October" value="10">2030</option>
                                        <option name="November" value="11">2031</option>
                                        <option name="December" value="12">2032</option>
                                    </select>
                                </div>



                            </div>
                            <div class="box d-flex justify-content-between align-items-center">
                                <div>
                                    <label>CVC</label>
                                    <select>
                                        <option style="display:none;">1234</option>
                                        <option name="" value="1111">1111</option>
                                        <option name="" value="2222">2222</option>
                                        <option name="" value="3333">3333</option>
                                        <option name="" value="4444">4444</option>

                                    </select>
                                </div>

                                <div>
                                    <p class="cvc">3 or 4 digits usually found on the signature strip</p>
                                </div>



                            </div>
                        </div>
                        <div class="mt-5">
                            <input type="checkbox" id="switch" class="checkbox" />
                            <label for="switch" class="toggle">
                            </label>
                        </div>
                        <button class="mt-3">Add Now</button>
                    </form>
                </div>
            </div>
        </div>
     </div>
@endsection
