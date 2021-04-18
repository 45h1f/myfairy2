@extends('layouts.market')
@section('front_title')
   Marketplace
@endsection
@section('front_css')
@endsection
@section('front_content')

<section class="market-pt market-product-sec">
    <div class="container">
        <div class="market-type-pro-wrap">
            <ul class="list-unstyled market-type-pro">
                <li><a href="javascript:void(0)" class="active">New</a></li>
                <li><a href="javascript:void(0)">Used</a></li>
                <li><a href="javascript:void(0)">Handmade</a></li>
                <li><a href="javascript:void(0)">Used</a></li>
                <li><a href="javascript:void(0)">New without tag</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="market-search">
                <input type="search" placeholder="Search">
                <button class="market-search-btn">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.9935 19.9297C14.9594 19.9297 18.9851 15.904 18.9851 10.9381C18.9851 5.97225 14.9594 1.94659 9.9935 1.94659C5.02761 1.94659 1.00195 5.97225 1.00195 10.9381C1.00195 15.904 5.02761 19.9297 9.9935 19.9297Z" stroke="#372E7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.2329 22.1777L16.3438 17.2885" stroke="#372E7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
        </div>
        <div class="market-product-wrap">
            <ul class="list-unstyled market-product-list">
                <li class="market-list-head">Products</li>
                <li><a href="javascript:void(0)" class="active">All</a></li>
                <li><a href="javascript:void(0)">Textbooks</a></li>
                <li><a href="javascript:void(0)">Furniture</a></li>
                <li><a href="javascript:void(0)">Technology</a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
                <li><a href="javascript:void(0)">Clothing</a></li>
                <li><a href="javascript:void(0)">Electronics</a></li>
                <li><a href="javascript:void(0)">Tickets</a></li>
                <li><a href="javascript:void(0)">Accessories</a></li>
                <li><a href="javascript:void(0)">More</a></li>
            </ul>
            <div class="market-product-here">
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="far fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-1.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="far fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-2.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="fas fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-3.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="far fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-4.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="fas fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-5.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="fas fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-6.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="far fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-7.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>
                <div class="market-product-box">
                    <div class="market-product-img">
                        <i class="far fa-star"></i>
                        <img src="{{URL::to('storage/app/public/Frontassets/images/product-img-8.png')}}" alt="">
                    </div>
                    <div class="market-product-content">
                        <div class="market-product-name">
                            <a href="{{URL::to('/marketplace/product')}}">Nike s450</a>
                            <small>Category</small>
                        </div>
                        <a href="{{URL::to('/marketplace/product')}}" class="btn">$100</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
@section('front_js')
@endsection
