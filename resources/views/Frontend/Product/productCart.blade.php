@extends('layouts.front')
@section('front_title')
    Product Cart
@endsection
@section('front_css')
@endsection
@section('front_content')
<section class="market-pt product-cart-sec">
    <div class="container">
        <div class="product-cart-wrap">
            <div class="product-cart-details">
                <div class="product-cart-card-wrap">
                    <div class="product-cart-pay-type">
                        <h4>Enter your payment details</h4>
                        <p>By continuing you agree to our <a href="javascript:void(0)">Terms</a></p>
                        <div class="donate-payment-type-wrap">
                            <label for="visa-payment">
                                <input type="radio" name="donate-payment" id="visa-payment" checked>
                                <div class="donate-pay-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/visa-icon.svg')}}" alt=""></div>
                            </label>
                            <label for="paypal-payment">
                                <input type="radio" name="donate-payment" id="paypal-payment">
                                <div class="donate-pay-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/paypal-icon.svg')}}" alt=""></div>
                            </label>
                            <label for="apple-payment">
                                <input type="radio" name="donate-payment" id="apple-payment">
                                <div class="donate-pay-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/apple-icon.svg')}}" alt=""></div>
                            </label>
                        </div>
                    </div>
                    <div class="product-cart-card-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/card-img.png')}}" alt="">
                    </div>
                </div>
                <form class="payment-form">
                    <label for="cardholder" class="w-50">
                        <p>Cardholder name</p>
                        <input type="text" id="cardholder">
                    </label>
                    <label for="cardNumber" class="w-50">
                        <p>Card Number</p>
                        <input type="number" id="cardNumber">
                    </label>
                    <label for="expMonth" class="w-25">
                        <p>Exp Month</p>
                        <select id="expMonth">
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
                    </label>
                    <label for="expYear" class="w-25">
                        <p>Exp Year</p>
                        <select id="expYear">
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                            <option>2030</option>
                        </select>
                    </label>
                    <label for="cvc" class="w-25">
                        <p>CVC</p>
                        <input type="number" id="cvc">
                    </label>
                    <p class="w-25">3 or 4 digits usually found on the signature strip</p>
                    <label for="default" class="w-100 default">
                        <input type="checkbox" id="default">
                        <p>SET AS DEFAULT</p>
                    </label>
                    <button class="btn w-100 justify-content-center">Pay Now</button>
                </form>
            </div>
            <div class="product-cart-pricing">
                <div class="product-cart-img"><img src="{{URL::to('storage/app/public/Frontassets/images/product-img-1')}}.png" alt=""></div>
                <p>Nike s450 <span>$100</span></p>
                <p>shipping fee = <span>$15</span></p>
                <p class="product-cart-total">Total <span>$115</span></p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('front_js')
@endsection
