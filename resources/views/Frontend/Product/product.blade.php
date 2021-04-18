@extends('layouts.front')
@section('front_title')
    Product
@endsection
@section('front_css')
@endsection
@section('front_content')

<div class="main">

    <section class="main-pt product-sec">
        <div class="container">
            <h4 class="search-result">Results for "<b>Dummy Text</b>"</h4>
            <div class="product-filter-option">
                <select>
                    <option>Category</option>
                    <option>Category</option>
                    <option>Category</option>
                    <option>Category</option>
                </select>
                <select>
                    <option>Fairy Details</option>
                    <option>Fairy Details</option>
                    <option>Fairy Details</option>
                    <option>Fairy Details</option>
                </select>
                <select>
                    <option>Budget</option>
                    <option>Budget</option>
                    <option>Budget</option>
                    <option>Budget</option>
                </select>
                <select>
                    <option>Location</option>
                    <option>Location</option>
                    <option>Location</option>
                    <option>Location</option>
                </select>
                <label for="pro-fairy" class="ml-auto">
                    <input type="checkbox" id="pro-fairy" checked>
                    <span></span>
                    <p>Pro Faries</p>
                </label>
                <label for="near-me">
                    <input type="checkbox" id="near-me">
                    <span></span>
                    <p>Near Me</p>
                </label>
            </div>
            <small class="product-available-total">5,910 Faries available</small>
            <div class="pro-row">
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-1.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-2.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-3.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-4.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-5.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-6.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-7.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-8.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-9.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-10.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-11.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-12.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-13.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-14.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-15.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-col-wrap">
                    <div class="pro-box">
                        <a href="{{URL::to('product-details')}}" class="pro-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-16.png')}}" alt=""></a>
                        <div class="pro-content">
                            <div class="pro-star"><img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="" class="pro-star-icon">4.5 <span>(12)</span><a href="{{URL::to('product-cart')}}">Add to wishlist</a></div>
                            <div class="pro-info">
                                <div class="pro-name">
                                    <a  href="{{URL::to('product-details')}}"><h4>Lorem ipsum</h4></a>
                                    <p>Category</p>
                                </div>
                                <a href="{{URL::to('product-details')}}" class="btn">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation" class="pro-page">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)"><svg viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 10L0 5L5 0V10Z" /></svg></a></li>
                    <li class="page-item"><a class="page-link active" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)"><svg viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10L5 5L0 0V10Z" /></svg></a></li>
                </ul>
            </nav>
        </div>
    </section>

</div>
@endsection
@section('front_js')
@endsection
