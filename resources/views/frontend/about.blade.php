@extends('front_layout.app')
@section('title', 'About-Us')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('front_assets/images/banner/about.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!-- Owner section start  -->

    <section>
        <div class="welcome_div">
            <div class="welcome_div_sub">
                <div class="center_align">
                    <span class="section_top_heading">Welcome to the Indus Hotel</span>
                    <h3 class="">
                        Most Beautiful, Safe & The Best Hotel in Hyderabad</h3>
                    <p>Embrace heritage luxury at The Indus Hotel. Discover elegance, comfort, and exceptional service in
                        Hyderabad. Your unforgettable stay begins here...</p>

                    <a href="about.php" class="sohohotel-button1 theme-btn btn-style-one">Learn More</a>
                    <div class="sohohotel-clearboth"></div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="row">
                    <!-- Content Column -->
                    {{-- {!! $about->text !!} --}}

                    <div class="content-column col-xl-6 col-lg-6 order-lg-2 wow fadeInRight" data-wow-delay="600ms">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">Indus Hotel</span>
                                <h2>{{ $about->heading }}</h2>
                                <div class="text">{{ $about->para }}</div>
                            </div>
                            <div class="btn-box">
                                <a href="about.php" class="theme-btn btn-style-one"><span class="btn-title">Discover
                                        More</span></a>
                                <div class="contact-info">
                                    <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                                    <span>Booking Now</span>
                                    <h4 class="title">+92 22 2782514-15</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Image Column -->
                    <div class="image-column col-xl-6 col-lg-6">
                        <div class="inner-column wow fadeInLeft">
                            <figure class="image-1 overlay-anim wow fadeInUp">
                                <img src="{{ asset('about_images') }}/{{ $about->image }}" alt=""
                                    style="max-width:470px;">
                            </figure>

                            <figure class="image-2 overlay-anim wow fadeInLeft">
                                <img src="{{ asset('about_images') }}/{{ $about->image }}" width="291"
                                    style="height:210px !important;" alt="">
                            </figure>

                            <div class="btn-box">
                                <a href="video/indus_vid2.mp4" class="play-now-two" data-fancybox="gallery" data-caption="">
                                    <i class="icon fa fa-play" aria-hidden="true"></i>
                                    <span class="ripple"></span>
                                </a>
                            </div>

                            <div class="exp-box bounce-y">
                                <figure class=" overlay-anim wow fadeInLeft"><img
                                        src="{{ asset('front_assets/images/logo.png') }}" style="max-width:200px;"
                                        alt=""></figure>
                                <!--<h4 class="title">Luxury Rooms</h4>-->
                                <div class="text">Rooms with all the best facilities and premium services
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                {{-- <div class="image-column col-xl-6 col-lg-6">
                    <div class="inner-column wow fadeInLeft">

                        <figure class="image-1 overlay-anim wow fadeInUp">
                            <img src="{{ asset('about_images') }}/{{ $about->image }}" alt=""
                                style="max-width:470px;">
                        </figure>

                        <figure class="image-2 overlay-anim wow fadeInLeft">
                            <img src="{{ asset('about_images') }}/{{ $about->image }}" width="291"
                                style="height:210px !important;" alt="">
                        </figure>

                        <div class="btn-box">
                            <a href="video/indus_vid2.mp4" class="play-now-two" data-fancybox="gallery" data-caption="">
                                <i class="icon fa fa-play" aria-hidden="true"></i>
                                <span class="ripple"></span>
                            </a>
                        </div>

                        <div class="exp-box bounce-y">
                            <figure class=" overlay-anim wow fadeInLeft"><img
                                    src="{{ asset('front_assets/images/logo.png') }}" style="max-width:200px;"
                                    alt=""></figure>
                            <!--<h4 class="title">Luxury Rooms</h4>-->
                            <div class="text">Rooms with all the best facilities and premium services
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--Emd About Section -->

    <!-- food-section -->
    <section class="food-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="image-column col-xl-4 col-lg-4">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow fadeInUp"><img
                                    src="{{ asset('front_assets/images/resource/about2.jpg') }}" alt="">
                            </figure>
                        </div>
                        <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now-two" data-fancybox="gallery"
                            data-caption=""> <i class="icon fa fa-play" aria-hidden="true"></i> <span class="ripple"></span>
                        </a>
                    </div>
                </div>
                <div class="content-column col-xl-8">
                    <div class="inner-column">
                        <div class="sec-title"> <span class="sub-title">EAT FROM THE LAND</span>
                            <h2>Enjoy Food and Even<br>
                                Better Hospitality</h2>
                            <div class="text"> We pride our service quality, presentation and carefully designed menus.
                                Our elegant restaurants offer a choice of delicious Pakistani Continental & Bar. B.Q
                                cuisines served with great fineness and courtesy. <br>
                                No wonder our food is known to be the best in town</div>
                            <div class="healthy-food">
                                <div class="food-list">
                                    <h4 class="title">Restaurant</h4>
                                    <ul>
                                        <li><i class="fa-regular fa-square-check"></i>Healthy Food</li>
                                        <li><i class="fa-regular fa-square-check"></i>Award-winning Restaurant</li>
                                        <li><i class="fa-regular fa-square-check"></i>Individually Styled Bedrooms</li>
                                    </ul>
                                </div>
                                <div class="food-list two">
                                    <h4 class="title">Beauty & Wellness</h4>
                                    <ul>
                                        <li><i class="fa-regular fa-square-check"></i>Fitness Center</li>
                                        <li><i class="fa-regular fa-square-check"></i>Best Spa in city</li>
                                        <li><i class="fa-regular fa-square-check"></i>Aesthetic Center</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image-box">
                                <figure class="image overlay-anim"><img
                                        src="{{ asset('front_assets/images/resource/food.jpg') }}" width="300"
                                        alt=""></figure>
                                <figure class="image overlay-anim"><img
                                        src="{{ asset('front_assets/images/resource/food-list-2.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End food section -->
    <section class="client-section pb-90">
        <div class="bg bg-image" style="background-image: url(images/background/3.jpg);"></div>
        <div class="auto-container">
            <div class="sec-title light text-center"> <span class="sub-title">What says for customer</span>
                <h2>What Client's Say?</h2>
            </div>
            <div class="row">
                <!-- client-block -->
                <div class="client-reviews">

                    <div class="client-block col-lg-4 col-sm-6">
                        <div class="inner-box wow fadeInLeft">
                            <h4 class="title">Naseer Palh</h4>
                            <span>From Karachi, Pakistan</span>
                            <div class="image-box">
                                <!-- <figure class="image wow fadeInUp"><img src="images/resource/client.jpg" alt=""></figure> -->
                                <ul class="rating-list fadeInUp animated rating_star" data-animation-in="fadeInUp"
                                    data-delay-in="0.2" style="opacity: 1; animation-delay: 0.2s;">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="text">Indus Hotel is a good value for the price. It is a clean, comfortable hotel
                                with modern amenities and a convenient location. The staff is friendly and helpful, and the
                                food is delicious. I would recommend this hotel to anyone looking for a comfortable and
                                affordable place to stay in Hyderabad.</div>
                        </div>
                    </div>
                    <!-- client-block -->
                    <div class="client-block col-lg-4 col-sm-6">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="200ms">
                            <h4 class="title">Zubair Mughis</h4>
                            <span>From Sukkur, Pakistan</span>
                            <div class="image-box">
                                <!-- <figure class="image wow fadeInUp"><img src="images/resource/client-2.jpg" alt=""></figure> -->
                                <ul class="rating-list fadeInUp animated rating_star" data-animation-in="fadeInUp"
                                    data-delay-in="0.2" style="opacity: 1; animation-delay: 0.2s;">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="text">Have visited this hotel many times as many seminars, conferences and
                                wedding functions used to be arranged here time to time
                                Food and services are excellent and so is the security and is the only hotel in Hyderabad
                                where foreigners can stay
                                Overall highly recommended</div>
                        </div>
                    </div>
                    <!-- client-block -->
                    <div class="client-block col-lg-4 col-sm-6">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms">
                            <h4 class="title">Vinay Dahiya</h4>
                            <span>From New Delhi, India</span>
                            <div class="image-box">
                                <!-- <figure class="image wow fadeInUp"><img src="images/resource/client-3.jpg" alt=""></figure> -->
                                <ul class="rating-list fadeInUp animated rating_star" data-animation-in="fadeInUp"
                                    data-delay-in="0.2" style="opacity: 1; animation-delay: 0.2s;">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                </ul>
                            </div>
                            <div class="text">Indus hotel is situated in Pakistan. The beautiful things about this hotel
                                is its name is related to Indus river. Room was very specious & comfortable. The staff are
                                very cooperative and very well-trained in hotel industry. Hotel Indus is famous for
                                accommodation & food as well.
                                Thanks for good food and spacious room.</div>
                        </div>
                    </div>
                    <!-- client-block -->
                    <div class="client-block col-lg-4 col-sm-6">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms">
                            <h4 class="title">Alvaro de la Cruz Jimenez</h4>
                            <span>From Madrid, Spain</span>
                            <div class="image-box">
                                <!-- <figure class="image wow fadeInUp"><img src="images/resource/client-3.jpg" alt=""></figure> -->
                                <ul class="rating-list fadeInUp animated rating_star" data-animation-in="fadeInUp"
                                    data-delay-in="0.2" style="opacity: 1; animation-delay: 0.2s;">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                </ul>
                            </div>
                            <div class="text">Magnificent luxury hotel where you can spend a good night. The service at
                                this hotel is magnificent and the facilities are beautiful. The room I stayed in had very
                                cool gold decor. On the other hand, the restaurant's food was also exquisite. A hotel that I
                                recommend.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-to-action -->
    <!-- <section class="call-to-action pt-0">
                                                                                                                                                                                                                    <div class="auto-container">
                                                                                                                                                                                                                      <div class="row">
                                                                                                                                                                                                                        <div class="content-colum col-lg-6 col-md-12 col-sm-12">
                                                                                                                                                                                                                          <div class="inner-column wow fadeInLeft">
                                                                                                                                                                                                                            <div class="sec-title"> <span class="sub-title">Call to action</span>
                                                                                                                                                                                                                              <h2>The Thin Escape.</h2>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="call-block">
                                                                                                                                                                                                                              <div class="inner-box">
                                                                                                                                                                                                                                <div class="icon-box"> <i class="flaticon-airplane"></i> </div>
                                                                                                                                                                                                                                <h4 class="title">Easy Transport & Near By Market</h4>
                                                                                                                                                                                                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                                                                                                                                                                                                                                  eiusmod tempor incididunt dolore magna aliqua.</div>
                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="call-block">
                                                                                                                                                                                                                              <div class="inner-box">
                                                                                                                                                                                                                                <div class="icon-box"> <i class="flaticon-fast-food"></i> </div>
                                                                                                                                                                                                                                <h4 class="title">Clean & Fresh Food</h4>
                                                                                                                                                                                                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                                                                                                                                                                                                                                  eiusmod tempor incididunt dolore magna aliqua.</div>
                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="call-block">
                                                                                                                                                                                                                              <div class="inner-box">
                                                                                                                                                                                                                                <div class="icon-box"><i class="fa-light fa-books"></i> </div>
                                                                                                                                                                                                                                <h4 class="title">Libarary & Gym</h4>
                                                                                                                                                                                                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                                                                                                                                                                                                                                  eiusmod tempor incididunt dolore magna aliqua.</div>
                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="btn-box"> <a href="#" class="read-more">Book A Hotel</a> </div>
                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="col-lg-6 booking-form-column">
                                                                                                                                                                                                                          <div class="inner-column wow fadeInRight" data-wow-delay="200ms">
                                                                                                                                                                                                                            <div class="sec-title"> <span class="sub-title">ROOMS & SUITES</span>
                                                                                                                                                                                                                              <h2>Hotel Booking </h2>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <form class="bk-form">
                                                                                                                                                                                                                              <div class="frm-field">
                                                                                                                                                                                                                                <input type="text" name="check-in" class="date-pick" placeholder="Check in" />
                                                                                                                                                                                                                                <img src="images/icons/mail.png" alt="" /> </div>
                                                                                                                                                                                                                              <div class="frm-field">
                                                                                                                                                                                                                                <input type="text" name="check-in" class="date-pick" placeholder="Check out" />
                                                                                                                                                                                                                                <img src="images/icons/mail.png" alt="" /> </div>
                                                                                                                                                                                                                              <div class="frm-field">
                                                                                                                                                                                                                                <select>
                                                                                                                                                                                                                                  <option>Adult</option>
                                                                                                                                                                                                                                  <option>Adult</option>
                                                                                                                                                                                                                                  <option>Adult</option>
                                                                                                                                                                                                                                  <option>Adult</option>
                                                                                                                                                                                                                                </select>
                                                                                                                                                                                                                                <i class="fa fa-angle-down"></i> </div>
                                                                                                                                                                                                                              <div class="frm-field">
                                                                                                                                                                                                                                <select>
                                                                                                                                                                                                                                  <option>Children</option>
                                                                                                                                                                                                                                  <option>Children</option>
                                                                                                                                                                                                                                  <option>Children</option>
                                                                                                                                                                                                                                  <option>Children</option>
                                                                                                                                                                                                                                </select>
                                                                                                                                                                                                                                <i class="fa fa-angle-down"></i> </div>
                                                                                                                                                                                                                              <div class="form-submit">
                                                                                                                                                                                                                                <button type="submit">Check Availability</button>
                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                            </form>
                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    </section> -->

    <!-- client-section -->
@endsection
