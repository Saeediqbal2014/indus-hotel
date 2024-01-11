@extends('front_layout.app')
@section('title', 'Accommodation')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('front_assets/images/banner/room.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Accommodation</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="#">Pages</a></li> -->
                    <li>Accommodation</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!-- pricing-section-two -->
    <section class="pricing-section-two accoommodation-section">
        <div class="auto-container col=md-12">
            <div class="row mt_40 mb_40">
                @foreach ($accommodations as $accommodation)
                    <!-- pricing-block-two -->
                    <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="row">
                                <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-column wow fadeInLeft">
                                        <span class="aroom-sub-title">{{ $accommodation->name }}</span>
                                        <!-- <sup>PKR</sup>
                                                                                                                                                                                                                                                                                                                                      <h6 class="title">16,000<span> / Night</span></h6>
                                                                                                                                                                                                                                                                                                                                      <span class="room_title_span">Single Room</span> -->

                                        <div class="room_detail_box">
                                            <div class="person_capicity">
                                                <i class="fa-regular fa-user-group"></i>
                                                <p class="txt_bold">{{ $accommodation->occupancy }}</p>
                                            </div>
                                            <div class="total_area">
                                                <i class="fa-regular fa-ruler-combined"></i>
                                                <p class="txt_bold">Spacious Room</p>
                                            </div>
                                        </div>
                                        <ul class="list-style-two">
                                            <li><i class="icon fa fa-circle-check"></i>Welcome Drink Upon Arrival</li>
                                            <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in
                                                Lazzat
                                                restaurant <span class="red_clr">(Ground Floor)</span></li>
                                            <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                            <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                        </ul>
                                        <a href="{{ route('single_room', $accommodation->id) }}" class="book-now">Discover
                                            More</a>
                                    </div>
                                </div>
                                <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                    <div class="image-box">
                                        <figure class="image wow fadeInUp">
                                            @php
                                                $images = json_decode($accommodation->images);
                                            @endphp

                                            <img src="{{ asset('rooms_images/' . $images[0]) }}" alt="">

                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pricing-block-two -->
                    {{-- <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="row">
                                <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-column wow fadeInLeft">
                                        <span class="aroom-sub-title">Deluxe Twin Sharing</span>
                                        <!-- <sup>PKR</sup>
                                                                                                                                                                                                                                                                      <h6 class="title">18,000<span> / Night</span></h6>
                                                                                                                                                                                                                                                                      <span class="room_title_span">Twin Sharing</span> -->

                                        <div class="room_detail_box">
                                            <div class="person_capicity">
                                                <i class="fa-regular fa-user-group"></i>
                                                <p class="txt_bold">2 Persons</p>
                                            </div>
                                            <div class="total_area">
                                                <i class="fa-regular fa-ruler-combined"></i>
                                                <p class="txt_bold">Spacious Room</p>
                                            </div>
                                        </div>
                                        <ul class="list-style-two">
                                            <li><i class="icon fa fa-circle-check"></i>welcome drink upon arrival</li>
                                            <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in
                                                Lazzat
                                                restaurant <span class="red_clr">(Ground Floor)</span></li>
                                            <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                            <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                        </ul>
                                        <a href="room-deluxe-twin-sharing.php" class="book-now">Discover More</a>
                                    </div>
                                </div>
                                <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                    <div class="image-box">
                                        <figure class="image wow fadeInUp">
                                            <img src="{{ asset('front_assets/images/room/deluxe_twin_sharing/deluxe_twin4.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            </div>

            {{-- <div class="row mt_40 mb_40">
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Executive King</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">22,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Suite Deluxe</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>welcome drink upon arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-executive-king.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/executive/executive2.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Executive Twin Sharing</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">22,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Executive</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>Welcome Drink Upon Arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-executive-twin-sharing.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/executive_twin/exe_twin7.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row mt_40 mb_40">

                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Executive Triple Sharing</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">20,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Triple Sharing</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>Welcome Drink Upon Arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-executive-triple-sharing.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/deluxe_triple_sharing/deluxe_triple1.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Executive Gold King</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">24,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Executive Twin</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>welcome drink upon arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-executive-gold-king.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/executive_gold/exe_gold3.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row mt_40 mb_40">
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Executive Gold Twin Sharing</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">30,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Executive Suite</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>Welcome Drink Upon Arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-executive-gold-twin-sharing.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/executive_gold_twin/exe_gold_twin1.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">VIP Suite</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">28,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Executive Gold</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>welcome drink upon arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-vip-suite.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/vip_suite/vip1.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row mt_40 mb_40">
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Diplomatic Suite</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">30,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Executive Gold Twin</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>Welcome Drink Upon Arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-diplomatic-suite.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/diplomatic_suite/diplomatic2.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Khaleej Suite</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">45,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Presidential Suite</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>welcome drink upon arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-khaleej-suite.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/khaleej/khaleej2.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row mt_40 mb_40">
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Noori Suite</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">30,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Executive Gold Twin</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>Welcome Drink Upon Arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-noori-suite.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/noori_suite/noori1.jpeg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pricing-block-two -->
                <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="row">
                            <div class="content-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <span class="aroom-sub-title">Presidential Suite</span>
                                    <!-- <sup>PKR</sup>
                                                                                                                                                                              <h6 class="title">45,000<span> / Night</span></h6>
                                                                                                                                                                              <span class="room_title_span">Presidential Suite</span> -->

                                    <div class="room_detail_box">
                                        <div class="person_capicity">
                                            <i class="fa-regular fa-user-group"></i>
                                            <p class="txt_bold">2 Persons</p>
                                        </div>
                                        <div class="total_area">
                                            <i class="fa-regular fa-ruler-combined"></i>
                                            <p class="txt_bold">Spacious Room</p>
                                        </div>
                                    </div>
                                    <ul class="list-style-two">
                                        <li><i class="icon fa fa-circle-check"></i>welcome drink upon arrival</li>
                                        <li><i class="icon fa fa-circle-check"></i>complimentary Buffet Breakfast in Lazzat
                                            restaurant <span class="red_clr">(Ground Floor)</span></li>
                                        <li><i class="icon fa fa-circle-check"></i>Air Conditioner</li>
                                        <li><i class="icon fa fa-circle-check"></i>WiFi Connectivity</li>
                                    </ul>
                                    <a href="room-presidential-suite.php" class="book-now">Discover More</a>
                                </div>
                            </div>
                            <div class="image-column col-lg-8 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image wow fadeInUp">
                                        <img src="{{ asset('front_assets/images/room/presidential/presidential1.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- End pricing-section -->
@endsection
