@extends('layouts.market')
@section('front_title')
    Product Details
@endsection
@section('front_css')
@endsection
@section('front_content')
<div class="main">

    <section class="market-pt product-details-sec">
        <div class="container">
            <div class="product-details-main">
                <div class="product-details-imgs">
                    <div class="ubislider-image-container" data-ubislider="#slider" id="imageSlider"></div>
                    <div class="ubislider" id="slider">
                        <a class="arrow prev"></a>
                        <a class="arrow next"></a>
                        <ul class="ubislider-inner">
                            <li>
                                <img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-1.png')}}">
                            </li>
                            <li>
                                <img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-2.png')}}">
                            </li>
                            <li>
                                <img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-3.png')}}">
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0)">Compare with similar items</a>
                </div>
                <div class="product-details-content">
                    <p class="product-on-sale">UPTO 70% OFF</p>
                    <h6 class="product-price">$ 100</h6>
                    <p class="product-details">Carrefour Eid-ul-Azha Promotions, Discounts & Price list (Valid till 7th August 2019)</p>
                    <p class="product-company">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9484 9.65002L10.4484 2.15002C10.1484 1.85002 9.73177 1.66669 9.27344 1.66669H3.4401C2.52344 1.66669 1.77344 2.41669 1.77344 3.33335V9.16669C1.77344 9.62502 1.95677 10.0417 2.2651 10.35L9.7651 17.85C10.0651 18.15 10.4818 18.3334 10.9401 18.3334C11.3984 18.3334 11.8151 18.15 12.1151 17.8417L17.9484 12.0084C18.2568 11.7084 18.4401 11.2917 18.4401 10.8334C18.4401 10.375 18.2484 9.95002 17.9484 9.65002ZM10.9401 16.675L3.4401 9.16669V3.33335H9.27344V3.32502L16.7734 10.825L10.9401 16.675Z" fill="#372E7F"/>
                            <path d="M5.52344 6.66669C6.21379 6.66669 6.77344 6.10704 6.77344 5.41669C6.77344 4.72633 6.21379 4.16669 5.52344 4.16669C4.83308 4.16669 4.27344 4.72633 4.27344 5.41669C4.27344 6.10704 4.83308 6.66669 5.52344 6.66669Z" fill="#372E7F"/>
                            <path d="M7.52344 10.4583C7.52344 10.9333 7.7151 11.35 8.02344 11.6667L10.9401 14.5833L13.8568 11.6667C14.1651 11.3583 14.3568 10.925 14.3568 10.4583C14.3568 9.51667 13.5901 8.75 12.6484 8.75C12.1734 8.75 11.7484 8.94167 11.4401 9.25L10.9401 9.75L10.4401 9.25833C10.1318 8.94167 9.69844 8.75 9.23177 8.75C8.2901 8.75 7.52344 9.51667 7.52344 10.4583Z" fill="#372E7F"/>
                        </svg>
                        By fairy
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.4061 0.829054C9.80212 0.835267 9.18266 0.953204 8.57661 1.19512L8.5491 1.20679L8.52158 1.22097C8.13739 1.41662 7.78723 1.66137 7.47595 1.95142C5.80066 0.502454 3.13352 0.397292 1.30882 2.0423L1.29047 2.05898L1.2738 2.07649C-0.326905 3.74844 -0.289417 6.32333 0.670083 8.35785L0.67842 8.3737L0.686758 8.39038C1.81681 10.483 3.92696 12.261 5.84993 13.7228L5.85493 13.727L5.8591 13.7303C5.98281 13.821 6.19553 14.0086 6.44112 14.1931C6.6867 14.3777 6.96411 14.58 7.37002 14.6576L7.46091 14.6751L7.55263 14.6676C7.97866 14.6308 8.14578 14.4735 8.42567 14.2973C8.70556 14.1212 9.01538 13.8975 9.33373 13.6528C9.96126 13.1703 10.6106 12.6143 11.0381 12.2177C11.0436 12.2126 11.0527 12.2053 11.0581 12.2002L11.0606 12.1977C11.9613 11.4292 12.8534 10.5432 13.6097 9.50107L13.6105 9.50024C13.6119 9.49833 13.6133 9.49633 13.6147 9.4944C14.8141 7.87949 15.396 5.70322 14.702 3.55909L14.6895 3.52073L14.6728 3.48487C13.8937 1.80044 12.2179 0.810442 10.4061 0.829054ZM10.4278 2.1482C11.7332 2.11818 12.8774 2.81718 13.4454 4.01268C13.9703 5.68639 13.5166 7.39168 12.539 8.70473L12.5365 8.70807L12.5341 8.71142C11.8531 9.65117 11.0283 10.4738 10.1734 11.2013L10.1626 11.2113L10.1518 11.2213C9.7668 11.5796 9.1152 12.1378 8.51992 12.5955C8.22227 12.8243 7.93692 13.0288 7.71526 13.1683C7.63191 13.2208 7.55266 13.2566 7.48761 13.2842C7.41924 13.2469 7.33248 13.1943 7.24247 13.1266C7.06122 12.9904 6.86822 12.8165 6.65793 12.6613C6.65466 12.6589 6.65121 12.6563 6.64793 12.6538C4.78176 11.2344 2.81606 9.51089 1.87082 7.77333C1.10343 6.13392 1.13692 4.17168 2.22103 3.01873C3.69511 1.70808 5.88507 1.99302 6.97728 3.33809L7.50928 3.99267L8.02377 3.32475C8.3198 2.94072 8.67306 2.64713 9.10193 2.4242C9.55147 2.24859 9.99811 2.15808 10.4278 2.1482Z" fill="#D70F64"/></svg>
                    </p>
                    <div class="product-star-wrap">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <p>Rating</p>
                    </div>
                    <div class="product-quantity">
                        <p>Quantity</p>
                        <div class="product-qut-wrap">
                            <button>+</button>
                            <span>1</span>
                            <button>-</button>
                        </div>
                    </div>
                    <div class="product-btn-wrap">
                        <a href="javascript:void(0)" class="btn">Buy Now</a>
                        <a href="javascript:void(0)" class="btn border-btn">Add to Cart</a>
                    </div>
                    <div class="product-star-wrap">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <a href="javascript:void(0)">10 customer reviews</a>
                    </div>
                    <p class="product-description">This is a short description. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
            </div>
            <div class="product-descrition-wrap">
                <div class="product-descrition-review">
                    <div class="profile-customer-review-head">
                        <h3>About Product</h3>
                    </div>
                    <p class="product-descrition-review-p">Are you hungry? Did you have a long and stressful day? Interested in getting a cheesy pizza delivered to your home or office? Then foodpanda Bangladesh is the right destination for you! foodpanda offers you a long and detailed list of the best restaurants and local favourites near you to help satisfy your hunger through our online food delivery service. Cuisines are diverse: whether you fancy a juicy burger from Takeout, fresh sushi from Samdado or peri peri chicken from Nando's, foodpanda Bangladesh has a wide range of 2000+ restaurants available from Dhaka, to Chittagong through to Sylhet. From a healthy lunch to evening snacks to a hearty dinner, foodpanda provides you with the means to satisfy your cravings throughout the day. Sit back and relax - let foodpanda Bangladesh take the pressure off your shoulders.</p>
                    <div class="profile-customer-review">
                        <div class="profile-customer-review-head">
                            <h3>Customer Reviews</h3>
                        </div>
                        <p>3 Customer reviews <span>(4.5/5)</span></p>
                        <div class="customer-review-box">
                            <div class="customer-review-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-1.png')}}" alt=""></div>
                            <div class="customer-review-content">
                                <div class="customer-review-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4>Shah Zaib <span>1 days ago</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo elementum, ullamcorper risus, pretium in ultricies ut venenatis. Vulputate diam ac tellus, nullam diam mauris ante leo, ut. Scelerisque ac sit in urna vestibulum, venenatis, nibh. Integer urna, pretium nisi quam orci pulvinar scelerisque enim viverra. Turpis sed ut sit vulputate et auctor nulla. Sem mollis imperdiet egestas viverra nulla. Ipsum habitasse senectus dignissim a in. Ut nisl justo, sit eros aliquet enim. Faucibus malesuada in sagittis in suspendisse pharetra semper amet duis. Felis ultrices est tellus suspendisse vitae elementum.</p>
                            </div>
                        </div>
                        <div class="customer-review-box">
                            <div class="customer-review-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-1.png')}}" alt=""></div>
                            <div class="customer-review-content">
                                <div class="customer-review-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4>Shah Zaib <span>1 days ago</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo elementum, ullamcorper risus, pretium in ultricies ut venenatis. Vulputate diam ac tellus, nullam diam mauris ante leo, ut. Scelerisque ac sit in urna vestibulum, venenatis, nibh. Integer urna, pretium nisi quam orci pulvinar scelerisque enim viverra. Turpis sed ut sit vulputate et auctor nulla. Sem mollis imperdiet egestas viverra nulla. Ipsum habitasse senectus dignissim a in. Ut nisl justo, sit eros aliquet enim. Faucibus malesuada in sagittis in suspendisse pharetra semper amet duis. Felis ultrices est tellus suspendisse vitae elementum.</p>
                            </div>
                        </div>
                        <div class="customer-review-box">
                            <div class="customer-review-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img-1.png')}}" alt=""></div>
                            <div class="customer-review-content">
                                <div class="customer-review-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4>Shah Zaib <span>1 days ago</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo elementum, ullamcorper risus, pretium in ultricies ut venenatis. Vulputate diam ac tellus, nullam diam mauris ante leo, ut. Scelerisque ac sit in urna vestibulum, venenatis, nibh. Integer urna, pretium nisi quam orci pulvinar scelerisque enim viverra. Turpis sed ut sit vulputate et auctor nulla. Sem mollis imperdiet egestas viverra nulla. Ipsum habitasse senectus dignissim a in. Ut nisl justo, sit eros aliquet enim. Faucibus malesuada in sagittis in suspendisse pharetra semper amet duis. Felis ultrices est tellus suspendisse vitae elementum.</p>
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
                        <div class="product-submit-review">
                            <h4>Submit your review</h4>
                            <div class="product-review-star-wrap">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <textarea class="write-review" placeholder="write your review"></textarea>
                        <a href="javascrip:void(0)" class="btn">Submit</a>
                    </div>
                </div>
                <div class="product-similar-wrap">
                    <h5>Similar other Sales</h5>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="product-similar-box">
                        <h6>10% OFF</h6>
                        <p>Anzay Jewellery</p>
                        <small>Jewellery</small>
                        <div class="product-similar-star-wrap">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
@endsection
@section('front_js')
@endsection
