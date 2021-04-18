@extends('layouts.front')
@section('front_title')
    Product Details
@endsection
@section('front_css')
@endsection
@section('front_content')
<div class="main">

    <section class="main-pt profile-sec">
        <div class="container">
            <div class="profile-head">
                <div class="profile-video">
                    <img src="{{URL::to('storage/app/public/Frontassets/images/pro-banner.jpg')}}" alt="">
                    <div class="profile-menu">
                        <span></span>
                    </div>
                </div>
                <div class="profile-details">
                    <div class="profile-img"><img src="{{URL::to('storage/app/public/Frontassets/images/pro-img.png')}}" alt=""></div>
                    <div class="profile-name">
                        <h3>Dummy Name</h3>
                        <span>Available</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo elementum, ullamcorper</p>
                    <div class="profile-star">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/star-icon.svg')}}" alt="">
                        <p>4.5 <span>(12)</span></p>
                    </div>
                    <div class="profile-btn-wrap">
                        <a href="javascript:void(0)" class="btn border-btn"><svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19 9.50003C19.0034 10.8199 18.6951 12.1219 18.1 13.3C17.3944 14.7118 16.3098 15.8992 14.9674 16.7293C13.6251 17.5594 12.0782 17.9994 10.5 18C9.18013 18.0035 7.87812 17.6951 6.7 17.1L1 19L2.9 13.3C2.30493 12.1219 1.99656 10.8199 2 9.50003C2.00061 7.92179 2.44061 6.37488 3.27072 5.03258C4.10083 3.69028 5.28825 2.6056 6.7 1.90003C7.87812 1.30496 9.18013 0.996587 10.5 1.00003H11C13.0843 1.11502 15.053 1.99479 16.5291 3.47089C18.0052 4.94699 18.885 6.91568 19 9.00003V9.50003Z" stroke-linecap="round" stroke-linejoin="round"/></svg>Message</a>
                        <button type="button" data-toggle="modal" data-target="#booknow" class="btn"><svg viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke-linecap="round" stroke-linejoin="round"/></svg>Book Now!</button>
                    </div>
                </div>
            </div>
            <div class="profile-about">
                <div class="profile-about-wrap profile-bio-sec">
                    <h4>Biography</h4>
                    <div class="profile-about-box">
                        <div class="profile-bio-edu-name-wrap">
                            <div class="profile-bio-edu-logo"><img src="{{URL::to('storage/app/public/Frontassets/images/harvard-logo.png')}}" alt=""></div>
                            <div class="profile-bio-edu-name">
                                <h4>Harvard English Faculty</h4>
                                <p>Boston, Massachusetts, USA</p>
                            </div>
                        </div>
                        <h4>Education</h4>
                        <p>UCL, MIT, Standerd University</p>
                        <h4>Certifications</h4>
                        <p>TEFL Certification, MA Educator</p>
                    </div>
                </div>
                <div class="profile-about-wrap profile-about-sec">
                    <h4>About</h4>
                    <div class="profile-about-box">
                        <div class="profile-about-rate-wrap">
                            <div class="profile-about-rate-box">
                                <div class="profile-about-rate">
                                    <img src="{{URL::to('storage/app/public/Frontassets/images/doller-icon.svg')}}" alt="">
                                    <p>Hourly Rate</p>
                                </div>
                                <h5>53</h5>
                            </div>
                            <div class="profile-about-rate-box">
                                <div class="profile-about-rate">
                                    <img src="{{URL::to('storage/app/public/Frontassets/images/doller-icon.svg')}}" alt="">
                                    <p>Hourly Rate</p>
                                </div>
                                <h5>53</h5>
                            </div>
                        </div>
                        <div class="profile-about-review-wrap">
                            <div class="profile-about-review-box">
                                <h5>Ratings</h5>
                                <p>53</p>
                            </div>
                            <div class="profile-about-review-box">
                                <h5>Reviews</h5>
                                <p>53</p>
                            </div>
                            <div class="profile-about-review-box">
                                <h5>Age</h5>
                                <p>53</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-shedule-sec">
                <h4>Shedule</h4>
                <div class="profile-shedule-carousel owl-carousel owl-theme">
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time active">7:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">8:00 AM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time">11:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time active">12:00 AM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time">3:00 PM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">4:00 PM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time active">9:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">10:00 AM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time active">1:00 pM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">2:00 PM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time">6:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">5:00 AM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time active">7:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">8:00 AM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time">11:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time active">12:00 AM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time">3:00 PM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">4:00 PM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time active">9:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">10:00 AM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time active">1:00 pM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">2:00 PM</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="profile-shedule-time">6:00 AM</a>
                        <a href="javascript:void(0)" class="profile-shedule-time">5:00 AM</a>
                    </div>
                </div>
            </div>
            <div class="profile-location">
                <h4>Shedule</h4>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </p>
                <div class="profile-map">
                    <img src="{{URL::to('storage/app/public/Frontassets/images/map.jpg')}}" alt="">
                </div>
            </div>
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
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="booknow" tabindex="-1" aria-labelledby="booknowModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
                <div class="modal-body">
                    <div class="book-booking-wrap">
                        <div class="book-date-wrap">
                            <h4>Select Booking Date</h4>
                            <div class="book-date-box">
                                <input type="text" id="datepicker"/>
                            </div>
                        </div>
                        <div class="book-avilable-time-wrap">
                            <h4>Available Time</h4>
                            <div class="book-time-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">7:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">8:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">11:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">12:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time">3:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">4:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">9:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">10:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">1:00 pM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">2:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">6:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">5:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">7:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">8:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">11:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">12:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time">3:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">4:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time active">9:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">10:00 AM</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="profile-shedule-time active">1:00 pM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">2:00 PM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">6:00 AM</a>
                                    <a href="javascript:void(0)" class="profile-shedule-time">5:00 AM</a>
                                </div>
                            </div>
                        </div>
                        <div class="book-reminder">
                            <h4>Reminder</h4>
                            <p>Select alert <span>30 minutes before <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 15L8 8L1 1" stroke="#979797" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></p>
                            <a href="javascript:void(0)" class="btn justify-content-center w-100 book-next">Next</a>
                        </div>
                    </div>
                    <div class="book-review-wrap">
                        <div class="review-book-head">
                            <button class="book-back"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 13.5L0.999999 7.5L7 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <h3 class="book-review-label">Review booking</h3>
                        </div>
                        <div class="review-book-content">
                            <h4>Date & Time</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-date.svg')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>Monday,October 24</h5>
                                    <p>10:00 AM</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <h4>Fairy</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-img.png')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>Alice Daniela</h5>
                                    <p>English Language</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <h4>Address</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-map.png')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>San Francisco, California</h5>
                                    <p>0.31 i away</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <h4>Payment</h4>
                            <div class="review-link-box">
                                <div class="review-link-icon"><img src="{{URL::to('storage/app/public/Frontassets/images/review-paypal.png')}}" alt=""></div>
                                <div class="review-link-label">
                                    <h5>San Francisco, California</h5>
                                    <p>0.31 i away</p>
                                </div>
                                <a href="javascript:void(0)" class="review-link-btn"><svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13.5L7 7.5L1 1.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            </div>
                            <div class="price-box">
                                <p class="review-price">Price <span>$60</span></p>
                                <p class="review-hour-price">$60/ hour <span>$60</span></p>
                                <p class="review-total-price">Total <span>$60</span></p>
                                <a href="javascript:void(0)" class="btn justify-content-center w-100">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('front_js')
@endsection
