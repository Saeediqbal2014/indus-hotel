@extends('front_layout.app')
@section('title', 'Deluxe-rooms')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('front_assets/images/banner/room.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Deluxe Rooms</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-3.php">Home</a></li>
                    <li>Deluxe Rooms</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!-- rooms-section -->
    <section class="rooms-section pt_60 pb-100">
        <div class="auto-container">
            <div class="box_room">
                <div class="row">
                    <!-- room-block -->
                    <div class="room-block col-lg-4 col-md-4">
                        <div class="room_img_box">
                            <img src="{{ asset('front_assets/images/room/deluxe/deluxe1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="room-block room_detail_padding col-lg-8 col-md-8">
                        <div class="row">
                            <div class="room-block padding_left col-lg-8 col-md-8">
                                <!-- <div class="sec-title"> -->
                                <span class="room-sub-title">Deluxe King</span>
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
                            </div>

                            <div class="room-block col-lg-4 col-md-4">
                                <!-- <div class="price_box">
                                                                                                                                                                        <div class="rate_box">
                                                                                                                                                                   <h3><sup>PKR</sup>20,000
                                                                                                                                                                   <span class="tax_text">Plus Tax</span>
                                                                                                                                                                </h3>
                                                                                                                                                                    
                                                                                                                                                                </div>
                                                                                                                                                               </div> -->
                                <a href="room-deluxe-king.php" class="theme-btn btn-style-one read-more room_btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="room_detail">
                            <p>Check-in into Newly Renovated Deluxe Room, It offers the comfortable king size Single Bed.
                                With a working desk, safety deposit box and generously proportioned bathroom with luxurious
                                bath amenities, this room ensures a truly relaxing stay.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- room detail end  -->

        <!-- start detail end  -->

        <div class="auto-container">
            <div class="box_room">
                <div class="row">
                    <!-- room-block -->
                    <div class="room-block col-lg-4 col-md-4">
                        <div class="room_img_box">
                            <img src="{{ asset('front_assets/images/room/deluxe_twin_sharing/deluxe_twin4.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="room-block room_detail_padding col-lg-8 col-md-8">
                        <div class="row">
                            <div class="room-block padding_left col-lg-8 col-md-8">
                                <!-- <div class="sec-title"> -->
                                <span class="room-sub-title">Deluxe Twin Sharing</span>
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
                            </div>

                            <div class="room-block col-lg-4 col-md-4">
                                <!-- <div class="price_box">
                                                                                                                 <div class="rate_box">
                                                                                                             <h3><sup>PKR</sup>20,000
                                                                                                              <span class="tax_text">Plus Tax</span>
                                                                                                         </h3>
                                                                                                                                                                    
                                                                                                          </div>
                                                                                                         </div> -->
                                <a href="room-deluxe-twin-sharing.php"
                                    class="theme-btn btn-style-one read-more room_btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="room_detail">
                            <p>Check-in into Newly Renovated Deluxe Room, It offers the comfortable Twin Bed.
                                With a working desk, safety deposit box and generously proportioned bathroom with luxurious
                                bath amenities, this room ensures a truly relaxing stay.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- room detail end  -->


    </section>
    <!-- End rooms-section -->

@endsection
