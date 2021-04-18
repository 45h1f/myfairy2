@extends('layouts.front')
@section('front_title')
    Home
@endsection
@section('front_css')
@endsection
@section('front_content')
<!-- Banner Sec -->
<section class="main-pt banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h1><span>You</span> make a <span>wish.</span> <br/>We get the <span>Fairy!</span></h1>
                <p>Search the service you are looking for and the faries will make the job done!</p>
                <form class="search-inp" action="{{URL::to('product')}}">
                    <input type="search" placeholder="Search">
                    <button><img src="{{URL::to('storage/app/public/Frontassets/images/search-icon.svg')}}" alt=""></button>
                </form>
                <div class="popular-tag-wrap">
                    <p>Popular :</p>
                    <p class="popular-tag">Sober Ride</p>
                    <p class="popular-tag">Phone Repair</p>
                    <p class="popular-tag">Dance</p>
                    <p class="popular-tag">Tour & Travels</p>
                </div>
            </div>
        </div>
    </div>
    <span class="banner-img"><img src="{{URL::to('storage/app/public/Frontassets/images/banner-img.svg')}}" alt=""></span>
</section>
<!-- Banner Sec -->

<!-- Categories Sec -->
<section class="categories-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="categories-details">
                    <h2 class="sec-head">Top Categories</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed.</p>
                    <a href="javascript:void(0)" class="btn">Browse all Categories</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel owl-theme" id="categories-carousel">
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/sober-ride.svg')}}" alt="">
                            </div>
                            <h3>Sober Ride</h3>
                            <p>1303 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/phone-repair.svg')}}" alt="">
                            </div>
                            <h3>Phone Repair</h3>
                            <p>2123 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/makeup.svg')}}" alt="">
                            </div>
                            <h3>Makeup</h3>
                            <p>2503 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/dance.svg')}}" alt="">
                            </div>
                            <h3>Dance</h3>
                            <p>531 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/tour-travels.svg')}}" alt="">
                            </div>
                            <h3>Tour & Travels</h3>
                            <p>1303 Sales today</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/sober-ride.svg')}}" alt="">
                            </div>
                            <h3>Sober Ride</h3>
                            <p>1303 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/phone-repair.svg')}}" alt="">
                            </div>
                            <h3>Phone Repair</h3>
                            <p>2123 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/makeup.svg')}}" alt="">
                            </div>
                            <h3>Makeup</h3>
                            <p>2503 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/dance.svg')}}" alt="">
                            </div>
                            <h3>Dance</h3>
                            <p>531 faires</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories-box">
                            <div class="categories-img">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/tour-travels.svg')}}" alt="">
                            </div>
                            <h3>Tour & Travels</h3>
                            <p>1303 Sales today</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Sec -->
<!-- Fairies Location Sec -->
<section class="fairies-location-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="fairies-img">
                    <img src="{{URL::to('storage/app/public/Frontassets/images/fairies-location-img.svg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="sec-head"><span>Fairies</span> at Your <span>Location!</span></h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed.</p>
                <a href="javascript:void(0)" class="btn border-btn">Find Fairies Near me </a>
            </div>
        </div>
    </div>
</section>
<!-- Fairies Location Sec -->

<!-- Top rated Fairies Sec -->
<section class="top-rated-fairies-sec">
    <div class="container">
        <h2 class="sec-head text-center">Top rated Fairies</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed.</p>
        <div class="owl-carousel owl-theme" id="top-rated-fairies-carousel">
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-1.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$45</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-2.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$60</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-3.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$35</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-4.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$100</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-1.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$45</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-2.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$60</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-3.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$35</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="top-rated-fairies-box">
                    <div class="top-rated-fairies-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/rated-fairies-img-4.png')}}" alt="">
                    </div>
                    <div class="top-rated-fairies-details">
                        <div class="top-rated-fairies-wishlist">
                            <div class="top-rated-fairies-star">
                                <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                                <p><span>4.5</span> (12)</p>
                            </div>
                            <a href="javascript:void(0)">Add to wishlist</a>
                        </div>
                        <div class="top-rated-fairies-disc">
                            <div class="top-rated-fairies-name">
                                <p>Lorem ipsum</p>
                                <small>Category</small>
                            </div>
                            <a href="javascript:void(0)" class="btn">$100</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="top-rated-fairies-span"></span>
</section>
<!-- Top rated Fairies Sec -->

<!-- Work faster Sec -->
<section class="work-faster-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="sec-head">Get <span>work done faster,</span> <br/>with <span>confidence</span></h2>
                <ul class="list-unstyled work-faster-list">
                    <li>
                        <h4>Payment protection, guaranteed</h4>
                        <p>Payment is released to the fairies once you’re pleased and approve the work you get.</p>
                    </li>
                    <li>
                        <h4>Know the price up front</h4>
                        <p>Payment is released to the fairies once you’re pleased and approve the work you get.</p>
                    </li>
                    <li>
                        <h4>We’re here for you 24/7</h4>
                        <p>Payment is released to the fairies once you’re pleased and approve the work you get.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <span class="work-faster-img">
        <img src="{{URL::to('storage/app/public/Frontassets/images/work-faster-img.svg')}}" alt="">
    </span>
</section>
<!-- Work faster Sec -->

<!-- How works Sec -->
<section class="how-work-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="how-work-sec-img">
                    <img src="{{URL::to('storage/app/public/Frontassets/images/how-it-work-img.svg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="sec-head">How It works?</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed.</p>
                <a href="javascript:void(0)" class="btn">
                    <svg viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2H8C9.06087 2 10.0783 2.42143 10.8284 3.17157C11.5786 3.92172 12 4.93913 12 6V20C12 19.2044 11.6839 18.4413 11.1213 17.8787C10.5587 17.3161 9.79565 17 9 17H2V2Z" stroke="white" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 2H16C14.9391 2 13.9217 2.42143 13.1716 3.17157C12.4214 3.92172 12 4.93913 12 6V20C12 19.2044 12.3161 18.4413 12.8787 17.8787C13.4413 17.3161 14.2044 17 15 17H22V2Z" stroke="white" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
<!-- How works Sec -->

@endsection
@section('front_js')
@endsection

