@extends('front_layout.app')
@section('title', 'hyderabad-attractions')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('front_assets/images/banner/experiance.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Hyderabad Attractions</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-3.php">Home</a></li>
                    <li>Hyderabad Attractions</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!-- city-section -->

    <section>
        <div class="welcome_div">
            <div class="welcome_div_sub">
                <div class="center_align">
                    <span class="section_top_heading">Hyderabad</span>
                    <h3 class="">
                        Hyderabad A City on the Rise</h3>
                    <p>Hyderabad, the 5th largest and fastest-growing city in Pakistan, is a vibrant metropolis with a
                        population of over 1.5 million. Surrounded by densely populated districts within the Hyderabad
                        Division, the city is a hub of activity, culture, and history.</p>

                    <!-- <a href="#" class="sohohotel-button1 theme-btn btn-style-one" >Learn More</a> -->
                    <div class="sohohotel-clearboth"></div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- nearby places  -->

    <section class="feature-section">
        <div class="auto-container">
            <div class="sec-title text-center wow slideInUp">
                <span class="sub-title">Places To visit</span>
                <h2>Explore the City</h2>
            </div>
        </div>
        </div>

        <section class="tourist-section">
            <div class="auto-container">
                @foreach ($places as $key => $b)
                    @if ($key % 2 == 0)
                        <div class="row feature-row g-0 wow slideInUp" data-wow-delay="100ms">
                            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-box">
                                        <figure class="image overlay-anim">
                                            <img src="{{ asset('place_images') }}/{{ $b->image }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="content-box">
                                        <div class="sec-title">
                                            <span class="sub-title">{{ $b->subtitle }}</span>
                                            <h2>{{ $b->title }}</h2>
                                            <div class="text">{{ $b->para }}</div>
                                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From
                                                Indus to {{ $b->title }} <span class="bolder">{{ $b->km }}
                                                    KM</span>
                                            </p>
                                        </div>
                                        <figure class="image-2"><img src="images/resource/icon-2.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row feature-row g-0 wow slideInUp" data-wow-delay="200ms">
                            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="content-box">
                                        <div class="sec-title">
                                            <span class="sub-title">{{ $b->subtitle }}</span>
                                            <h2>{{ $b->title }}</h2>
                                            <div class="text">{{ $b->para }}</div>
                                        </div>
                                        <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From
                                            Indus to {{ $b->title }} <span class="bolder">{{ $b->km }}
                                                KM</span>
                                        </p>

                                        <figure class="image-2"><img src="images/resource/icon-2.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-box">

                                        <figure class="image overlay-anim">
                                            <img src="{{ asset('place_images') }}/{{ $b->image }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>





        </section>
        <!-- end nearby places  -->


        <section class="">
            <div class="auto-container">
                <div class="sec-title text-center wow slideInUp">
                    <span class="sub-title">Nearby Places</span>
                    <h2>Explore the Neighborhood</h2>
                </div>
                <div class="row">
                    <h4 class="mb_40 mt_40 nearest_places">The Nearest Markets</h4>
                    <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                        <div class="near_place_inner_box">
                            <h6 class="bolder">Grocery Mart</h6>
                            <p>For you grocery and daily use thing with affordable price at doorstep</p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From Indus to Max
                                Buchet <span class="bolder">0.8 KM</span></p>
                        </div>
                    </div>

                    <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                        <div class="near_place_inner_box">
                            <h6 class="bolder">shopping Mart</h6>
                            <p>With the availability for all Kind of grocery cosmetics medical and gifts item</p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From Indus to Dawood
                                Mart <span class="bolder">1.5 KM</span></p>
                        </div>
                    </div>

                    <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                        <div class="near_place_inner_box">
                            <h6 class="bolder">Shoping Mall</h6>
                            <p>For you and your family entertainment and shopping with mostly kinds of purchase</p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From Indus to
                                Boulevard Mall <span class="bolder">6.1 KM</span></p>
                        </div>
                    </div>
                </div>

                <!--
                                                                                    <div class="row">
                                                                                            <h4 class="mb_40 mt_40 nearest_places">Nearest Restaurant & Cafe</h4>
                                                                                            <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                                                                                              <div class="near_place_inner_box">
                                                                                              <h6 class="bolder">KFC</h6>
                                                                                              <p>An ineternational fried chicken food chain that satisfy your fast food craving walking distance</p>
                                                                                              <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From Indus to KFC <span class="bolder">120 M</span></p>
                                                                                            </div>
                                                                                          </div>
                                                                                            
                                                                                            <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                                                                                              <div class="near_place_inner_box">
                                                                                              <h6 class="bolder">McDonald's</h6>
                                                                                              <p>A other world know international Food chain to and many peoples favorite</p>
                                                                                              <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From Indus to McDonald's <span class="bolder">800 M</span></p>
                                                                                            </div>
                                                                                          </div>
                                                                                            
                                                                                            <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                                                                                              <div class="near_place_inner_box">
                                                                                              <h6 class="bolder">Lamoosh Cafe & Restaurant</h6>
                                                                                              <p>Mostly famous for Continental cuisine but also have some good desi cuisine</p>
                                                                                              <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> From Indus to Boulevard Mall <span class="bolder">6.1 KM</span></p>
                                                                                            </div>
                                                                                          </div>
                                                                                    </div> -->
                <div class="row mb_40">
                    <h4 class="mb_40 mt_40 nearest_places">Nearest Other Facilities</h4>
                    <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                        <div class="other_near_place_inner_box">
                            <h6 class="bolder">Bank & ATM</h6>
                            <p>Some of The nearest Bank ATM Services are</p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> Ubl Bank <span
                                    class="bolder">31 M</span></p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> Al Habib Bank
                                <span class="bolder">140 M</span>
                            </p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> MCB Bank <span
                                    class="bolder">Within the Hotel</span></p>
                        </div>
                    </div>

                    <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                        <div class="other_near_place_inner_box">
                            <h6 class="bolder">Pharmacies & Hospital</h6>
                            <p>some nearby Pharmacies and Hospital</p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> Medical store
                                <span class="bolder">500 M</span>
                            </p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> Medical Store
                                <span class="bolder">1.5 KM</span>
                            </p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> Genral Hospital
                                <span class="bolder">3.5 KM</span>
                            </p>
                        </div>
                    </div>

                    <div class="near_place_box col-lg-4 col-md-12 col-sm-12">
                        <div class="other_near_place_inner_box">
                            <h6 class="bolder">Gas Stations</h6>
                            <p>some nearby Gas and Car Service Stations</p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> Shell Petrol
                                Station<span class="bolder">700 M</span></p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> PSO Petrol Station
                                <span class="bolder">2.7 KM</span>
                            </p>
                            <p class="text"><i class="fa-regular fa-location-dot location_icon "></i> Total Petrol
                                Station <span class="bolder">2.6 KM</span></p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <section class="indus_map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.733278331962!2d68.33508677452663!3d25.380254124263416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c708319dbefa1%3A0x30445fb3985c9871!2sIndus%20Hotel!5e0!3m2!1sen!2s!4v1695184771311!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <!-- End city-section -->
    @endsection
