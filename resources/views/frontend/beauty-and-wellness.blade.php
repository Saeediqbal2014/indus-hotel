@extends('front_layout.app')
@section('title', 'Beauty and wellness')
@section('content')

    <!-- Start main-content -->
    <section class="page-title"
        style="background-image: url({{ asset('front_assets/images/banner/beauty-wellness.jpg') }}); background-attachment: fixed;">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Beauty & Wellness</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Beauty & Wellness</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!-- feature-section -->
    <section class="feature-section">
        <div class="auto-container">
            <div class="row feature-row g-0 wow slideInUp" data-wow-delay="100ms">
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim">
                                <img src="{{ asset('front_assets/images/resource/feature-1.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">MODERN</span>
                                <h2>Fitness Center</h2>
                                <div class="text">Unleash your vitality at the Indus Hotel's state-of-the-art Fitness
                                    Center.
                                    Energize your stay with modern equipment, personalized training options,
                                    and a dynamic space designed to inspire your wellness journey. Whether you're aiming for
                                    a rigorous
                                    workout or a relaxing stretch, our facility caters to all fitness levels,
                                    ensuring a rejuvenating experience for our guests.</div>
                            </div>
                            <figure class="image-2"><img src="{{ asset('front_assets/images/resource/icon.png') }}"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row feature-row g-0 wow slideInUp" data-wow-delay="200ms">
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">DISCOVER</span>
                                <h2 class="mb-3">Aesthetic Center</h2>
                                <div class="text">Rediscover your natural beauty at our Aesthetic Centre. Our skilled
                                    experts combine artistry with cutting-edge techniques to enhance your unique features.
                                    From rejuvenating skincare to non-invasive treatments, we're dedicated to helping you
                                    look and feel your best.</div>
                                <p>At Indus Beauty Parlour all of our Aesthetic treatment are under the supervision of UK
                                    qualified & trained Dermatologist & Aesthetic Practitioner, We offer's wide range of
                                    Aesthetic treatments.</p>

                            </div>

                            <div class="btn-box row">
                                <div class="col-sm-5 d-flex justify-content-center">
                                    <a href="tel:+92-22-2782514-15" class="theme-btn btn-style-one read-more"><span
                                            class="btn-title">Reserve Now</span></a>
                                </div>
                                <div class="col-sm-7">
                                    <div class="contact-info d-inline-b">
                                        <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                                        <span>Booking Now</span>
                                        <h4 class="title">+92-22-2782514-15</h4>
                                    </div>
                                </div>
                            </div>
                            <figure class="image-2"><img src="{{ asset('front_assets/images/resource/icon-3.png') }}"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('front_assets/images/resource/aesthetic.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row feature-row g-0 wow slideInUp" data-wow-delay="300ms">
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('front_assets/images/resource/indus-saloon.jpeg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">EXPERIENCES</span>
                                <h2><a href="https://www.instagram.com/indusbeautyparlour/">Indus Beauty Parlour</a></h2>
                                <div class="text">Indulge in a world of beauty and self-care at Indus Beauty Parlour. Our
                                    highly expert & talented team of stylists and beauty experts are dedicated to enhancing
                                    your natural radiance. From hair styling to skincare and Bridal makeup, we offer full
                                    range of services to leave you feeling pampered and confident.</div>
                            </div>
                            <div class="btn-box row">
                                <div class="col-sm-5 d-flex justify-content-center">
                                    <a href="tel:+92-22-2782514-15" class="theme-btn btn-style-one read-more"><span
                                            class="btn-title">Reserve Now</span></a>
                                </div>
                                <div class="col-sm-7">
                                    <div class="contact-info d-inline-b">
                                        <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                                        <span>Booking Now</span>
                                        <h4 class="title">+92-22-2782514</h4>
                                    </div>
                                </div>
                            </div>
                            <figure class="image-2">
                                <img src="{{ asset('front_assets/images/indus_porlour.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End feature section -->





@endsection
