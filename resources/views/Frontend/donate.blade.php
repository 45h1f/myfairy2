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

                    <form action="{{route('donateSubmit')}}"  method="post" id="payment-form">
                        @csrf
                        <div class="form-group">
                            <div class="card-header">
                                <label for="card-element">
                                    Enter your credit card information
                                </label>
                            </div>
                            <div class="card-body">
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                                <input type="hidden" name="plan" value="" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button
                                id="card-button"
                                class="btn btn-dark"
                                type="submit"
                                {{--                                data-secret="{{ $intent }}"--}}
                            > Pay </button>
                        </div>
                    </form>

                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                          id="payment-form">
                        @csrf
                        <div class="modal-body">
                            <div class="donate-head">
                                <h2>Donate to Fairy</h2>
                            </div>
                            <div class="donate-content pb-0" id="optionSelect">
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
                                        <input type="radio" name="payment" id="visa-payment" value="Visa">
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
                            <div class="donate-content pt-0" style="display: none" id="cardDetails">
                                <div class="donate-card-img">
                                    <img src="{{URL::to('storage/app/public/Frontassets/images/card-img.png')}}" alt="">
                                </div>
                                <p>Cardholder name</p>
                                <input type="text" size='4' placeholder="Name" name="name" id="cardName">
                                <p>Card Number</p>
                                <input type="text"  size='20' placeholder="**** **** **** 3947" name="card_number" id="cardNumber">
                                <div class="donate-inp-wrap">
                                    <div class="donate-inp-box">
                                        <p>Exp Month</p>
                                        <select name="month">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
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
                                        <input type="number" size='4' placeholder="CVC" name="cvc" id="cvc">
                                    </div>
                                    <div class="donate-inp-box">
                                        <small>3 or 4 digits usually found on the signature strip</small>
                                    </div>

                                </div>
                            </div>

                            <div class="donate-content pt-0">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                                <a  href="javascript:void(0)" class="btn w-100 justify-content-center" id="submitBtn">Pay
                                    Now!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('front_js')
    @php
        $stripe_key = env('STRIPE_KEY');
    @endphp
    <script src="//js.stripe.com/v3/"></script>

    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)

        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
                .then(function(result) {
                    console.log(result);
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        console.log(result);
                        form.submit();
                    }
                });
        });
    </script>





<!--    <script>
        $(document).ready(function () {
            let optionSelect = $('#optionSelect');
            let cardDetails = $('#cardDetails');
            let amount = $('#amount');
            let cardName = $('#cardName');
            let cardNumber = $('#cardNumber');
            let cvc = $('#cvc');

            $('#paypal-payment').click(function () {
                if ($('#paypal-payment').is(':checked')) {
                    cardDetails.hide();
                }
            });
            $('#visa-payment').click(function () {
                if ($('#visa-payment').is(':checked')) {
                    cardDetails.show();
                }
            });

            $("#submitBtn").click(function () {

                /*   if (amount.val() == "") {
                       alert('Amount is required')
                       return false;
                   }
                   if ($('#visa-payment').is(':checked')) {


                       if (cardName.val() == "") {
                           alert('Account Holder name is required is required')
                           return false;
                       }

                       if (cardNumber.val() == "") {
                           alert('Card Number is required')
                           return false;
                       }

                       if (cvc.val() == "") {
                           alert('CVC is required')
                           return false;
                       }
                   }*/
                $("#donateForm").submit();


            });
        });



    </script>-->
@endsection
