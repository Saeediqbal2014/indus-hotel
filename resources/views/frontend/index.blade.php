@extends('front_layout.app')
@section('title', 'home')
@section('content')
    <!-- banner section -->
    <section class="banner-section">
        <div class="banner-slider">
            @foreach ($images as $image)
                <div class="banner-slide">
                    <figure class="image bg_clr"><img src="{{ asset('slider_images') }}/{{ $image->image }}" alt="">
                    </figure>

                    <div class="content-box overlay">
                        {{-- <span class="sub-title" data-animation-in="fadeInUp" data-delay-in="0.1">Where Tradition Meets
                            Luxury</span> --}}

                        <h1 data-animation-in="fadeInUp" data-delay-in="0.3"> {{ $image->text }}
                        </h1>
                        <a href="{{ route('accommodation') }}" class="btn" data-animation-in="fadeInUp"
                            data-delay-in="0.5">rooms &
                            suites</a>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- <div class="checkout-form-section wow slideInUp">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div> -->
    </section>
    <!-- End banner section -->
    <section>
        {!! $welcome->section !!}


    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                {!! $about->text !!}

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
        </div>
    </section>
    <!--Emd About Section -->

    <!-- rooms-section -->
    <section class="rooms-section">
        <div class="auto-container">
            <div class="sec-title text-center wow fadeInUp">
                <span class="sub-title">Indus Luxury Rooms</span>
                <h2>Luxury Rooms & Suites</h2>
            </div>
            <div class="row">
                <!-- room-block -->
                <div class="rooms_slider">
                    <div class="room_slide">

                        <div class="room-block">
                            <div class="inner-box wow fadeIn">
                                <div class="image-box">
                                    <figure class="image-2 overlay-anim"><img
                                            src="{{ asset('front_assets//images/room/deluxe/deluxe1.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="room-deluxe-king.php">Deluxe King</a></h6>
                                    <!--<span class="price">20,000 / + Tax</span>-->
                                </div>
                                <div class="box-caption">
                                    <a href="room-deluxe-king.php" title="" class="book-btn">Book now</a>
                                    <ul class="bx-links">
                                        <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                        <li><a href="#" title=""><i
                                                    class="fa-solid fa-martini-glass-citrus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa-solid fa-utensils"></i></a>
                                        </li>
                                        <li><a href="#" title=""><i class="fa fa-bed"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- room-block -->
                    </div>

                    <div class="room_slide">

                        <div class="room-block ">
                            <div class="inner-box wow fadeIn">
                                <div class="image-box">
                                    <figure class="image-2 overlay-anim"><img
                                            src="{{ asset('front_assets/images/room/deluxe_twin_sharing/deluxe_twin4.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="room-deluxe-twin-sharing.php">Deluxe Twin Sharing</a></h6>
                                    <!--<span class="price">22,000 / + Tax</span>-->
                                </div>
                                <div class="box-caption">
                                    <a href="room-deluxe-twin-sharing.php" title="" class="book-btn">Book now</a>
                                    <ul class="bx-links">
                                        <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                        <li><a href="#" title=""><i
                                                    class="fa-solid fa-martini-glass-citrus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa-solid fa-utensils"></i></a>
                                        </li>
                                        <li><a href="#" title=""><i class="fa fa-bed"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- room-block -->
                    </div>
                    <div class="room_slide">

                        <div class="room-block ">
                            <div class="inner-box wow fadeIn">
                                <div class="image-box">
                                    <figure class="image-2 overlay-anim"><img
                                            src="{{ asset('front_assets/images/room/deluxe_triple_sharing/deluxe_triple2.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="room-executive-triple-sharing.php">Executive Triple
                                            Sharing</a></h6>
                                    <!--<span class="price">25,000 / + Tax</span>-->
                                </div>
                                <div class="box-caption">
                                    <a href="room-executive-triple-sharing.php" title="" class="book-btn">Book
                                        now</a>
                                    <ul class="bx-links">
                                        <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                        <li><a href="#" title=""><i
                                                    class="fa-solid fa-martini-glass-citrus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa-solid fa-utensils"></i></a>
                                        </li>
                                        <li><a href="#" title=""><i class="fa fa-bed"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- room-block -->
                    </div>
                    <div class="room_slide">

                        <div class="room-block ">
                            <div class="inner-box wow fadeIn">
                                <div class="image-box">
                                    <figure class="image-2 overlay-anim"><img
                                            src="{{ asset('images/room/vip_suite/vip1.jpg') }}" alt=""></figure>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="room-vip-suite.php">VIP Suite</a></h6>
                                    <!--<span class="price">35,000 / + Tax</span>-->
                                </div>
                                <div class="box-caption">
                                    <a href="room-vip-suite.php" title="" class="book-btn">Book now</a>
                                    <ul class="bx-links">
                                        <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                        <li><a href="#" title=""><i
                                                    class="fa-solid fa-martini-glass-citrus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa-solid fa-utensils"></i></a>
                                        </li>
                                        <li><a href="#" title=""><i class="fa fa-bed"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- room-block -->
                    </div>
                    <div class="room_slide">

                        <div class="room-block ">
                            <div class="inner-box wow fadeIn">
                                <div class="image-box">
                                    <figure class="image-2 overlay-anim"><img
                                            src="{{ asset('front_assets/images/room/executive/executive2.jpg') }}"
                                            alt=""></figure>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="room-executive-king.php">Executive Gold King</a></h6>
                                    <!--<span class="price">25,000 / + Tax</span>-->
                                </div>
                                <div class="box-caption">
                                    <a href="room-executive-king.php" title="" class="book-btn">Book now</a>
                                    <ul class="bx-links">
                                        <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                        <li><a href="#" title=""><i
                                                    class="fa-solid fa-martini-glass-citrus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa-solid fa-utensils"></i></a>
                                        </li>
                                        <li><a href="#" title=""><i class="fa fa-bed"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- room-block -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End rooms-section -->

    <!-- service-section -->
    <section class="service-section">
        {!! $facility->section !!}

    </section>
    <!-- End service-section -->


    <section class="inform-section">
        <div class="auto-container">
            <div class="sec-title wow slideInUp">
                <!-- <span class="sub-title">Indus Service</span> -->
                <h4 class="mb_40 mt_40 hotel_info">Hotel Information</h4>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h6>Timing</h6>
                    <p class="m-0">Check-in <span class="time-in-out">02:00 pm</span></p>
                    <p class="m-0">Check-out <span class="time-in-out">12:00 pm</span></p>
                </div>
                <div class="col-md-4">
                    <h6>Pet Policy</h6>
                    <p class="m-0">Pets Not Allowed</p>
                </div>
                <div class="col-md-4">
                    <h6>Parking</h6>
                    <p class="m-0">On-Site Parking</p>
                    <p class="m-0">Hourly: Free</p>
                    <p class="m-0">Daily: Free</p>
                    <p><b>Long Term Parking</b></p>
                </div>
            </div>
        </div>
    </section>

    <section class="offer-sec">
        <div class="container">
            <div class="sec-title text-center wow slideInUp">
                <span class="sub-title">Indus Offers</span>
                <h2>Don't Miss Our Valueable Offers</h2>
            </div>
            <div class="offer-slider">
                @foreach ($discounts as $image)
                    <div class="offer-slide">
                        <img src="{{ asset('discount_images') }}/{{ $image->image }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- video-section -->
    <section class="video-section">
        <div class="bg bg-image bg_clr" style="background-image: url(images/background/video_bg.jpg);"></div>
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                </div>
                <div class="btn-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column video_pos">
                        <a href="video/indus.mp4" class="play-now-two" data-fancybox="gallery" data-caption="">
                            <img src="{{ asset('front_assets/images/icons/play.png') }}" alt="" />
                            <span class="ripple"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End video section -->

    {{-- <include 'client-reviews.php';> --}}

    <section class="client-section pb-90">
        <div class="bg bg-image" style="background-image: url({{ 'front_assets/images/background/3.jpg' }});"></div>
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

    {{-- ----------------------- --}}
    <!-- End testimonial section -->

    <section class="indus_map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.733278331962!2d68.33508677452663!3d25.380254124263416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c708319dbefa1%3A0x30445fb3985c9871!2sIndus%20Hotel!5e0!3m2!1sen!2s!4v1695184771311!5m2!1sen!2s"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
