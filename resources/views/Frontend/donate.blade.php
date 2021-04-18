@extends('layouts.front')
@section('front_title')
    Donate
@endsection
@section('front_css')
@endsection
@section('front_content')
    <div class="main">

        <section class="main-pt donate-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h1><span>Donate</span> to <span>Fairy a</span>nd help us <span>Grow!</span></h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed.</p>
                        <button type="button" data-toggle="modal" data-target="#donate" class="btn">Donate Now!</button>
                    </div>
                </div>
                <span class="donate-img"><img src="{{URL::to('storage/app/public/Frontassets/images/donate-img.png')}}"
                                              alt=""><svg width="254" height="297" viewBox="0 0 254 297" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><path
                            d="M0.999998 296C98.1954 45.1593 210.165 -4.84096 254 1.51404L254 296L0.999998 296Z"
                            fill="#F2F4FF" stroke="#F2F4FF"/></svg></span>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="donate" tabindex="-1" aria-labelledby="DonateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                    <form action="{{route('donateSubmit')}}" method="post" id="donateForm">
                        @csrf
                    <div class="modal-body">
                        <div class="donate-head">
                            <h2>Donate to Fairy</h2>
                        </div>
                        <div class="donate-content" id="optionSelect">
                            <p>Amount to Donate</p>
                            <input type="number" id="amount" name="amount">
                            <p>Choose your Payment method</p>
                            <div class="donate-payment-type-wrap">
                                <label for="paypal-payment">
                                    <input type="radio" name="payment" id="paypal-payment" value="PayPal" checked>
                                    <div class="donate-pay-icon"><img
                                            src="{{URL::to('storage/app/public/Frontassets/images/paypal-icon.svg')}}"
                                            alt=""></div>
                                </label>
                                <label for="visa-payment">
                                    <input type="radio" name="payment" id="visa-payment" value="Visa" >
                                    <div class="donate-pay-icon"><img
                                            src="{{URL::to('storage/app/public/Frontassets/images/visa-icon.svg')}}"
                                            alt=""></div>
                                </label>

                            <!--                                <label for="apple-payment">
                                    <input type="radio" name="donate-payment" id="apple-payment">
                                    <div class="donate-pay-icon"><img
                                            src="{{URL::to('storage/app/public/Frontassets/images/apple-icon.svg')}}"
                                            alt=""></div>
                                </label>-->
                            </div>
{{--                            <a href="javascript:void(0)" class="btn w-100 justify-content-center">Pay Now!</a>--}}
                        </div>
                        <div class="donate-content pt-0" style="display: none" id="cardDetails" >
                            <div class="donate-card-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/card-img.png')}}" alt="">
                            </div>
                            <p>Cardholder name</p>
                            <input type="text" placeholder="Name" name="name">
                            <p>Card Number</p>
                            <input type="text" placeholder="**** **** **** 3947" name="card_number">
                            <div class="donate-inp-wrap">
                                <div class="donate-inp-box">
                                    <p>Exp Month</p>
                                    <select name="month">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="donate-inp-box">
                                    <p>Exp Year</p>
                                    <select name="year">
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                    </select>
                                </div>
                                <div class="donate-inp-box">
                                    <p>CVC</p>
                                    <input type="number" placeholder="CVC" name="cvc">
                                </div>
                                <div class="donate-inp-box">
                                    <small>3 or 4 digits usually found on the signature strip</small>
                                </div>

                            </div>
                        </div>

                        <div class="donate-content pt-0">
                        <a href="javascript:void(0)" class="btn w-100 justify-content-center" id="submitBtn">Pay Now!</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('front_js')
    <script>
        $(document).ready(function () {
            let optionSelect = $('#optionSelect');
            let cardDetails = $('#cardDetails');
            let amount = $('#amount');

            $('#paypal-payment').click(function() {
                if($('#paypal-payment').is(':checked')) {
                    cardDetails.hide();
                }
            });
            $('#visa-payment').click(function() {
                if($('#visa-payment').is(':checked')) {
                    cardDetails.show();
                }else{

                }
            });

            $("#submitBtn").click(function(){
                $("#donateForm").submit(); // Submit the form
            });
        });
    </script>
@endsection
