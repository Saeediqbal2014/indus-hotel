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

            @foreach ($beauty as $key => $b)
                @if ($key % 2 == 0)
                    <div class="row feature-row g-0 wow slideInUp" data-wow-delay="100ms">
                        <div class="image-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image-box">

                                    <figure class="image overlay-anim">
                                        <img src="{{ asset('beauty_images') }}/{{ $b->image }}" alt="">
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
                                    </div>

                                    <div class="btn-box row">
                                        <div class="col-sm-5 d-flex justify-content-center">
                                            <a href="tel:+92 22 2782514-15" class="theme-btn btn-style-one read-more"><span
                                                    class="btn-title">Reserve Now</span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="contact-info d-inline-b">
                                                <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                                                <span>Booking Now</span>
                                                <h4 class="title">+92 22 2782514-15</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <figure class="image-2"><img src="images/resource/icon-2.png" alt=""></figure>
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
                                    <div class="btn-box row">
                                        <div class="col-sm-5 d-flex justify-content-center">
                                            <a href="tel:+92 22 2782514-15" class="theme-btn btn-style-one read-more"><span
                                                    class="btn-title">Reserve Now</span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="contact-info d-inline-b">
                                                <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                                                <span>Booking Now</span>
                                                <h4 class="title">+92 22 2782514-15</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <figure class="image-2"><img src="images/resource/icon-2.png" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="image-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image-box">

                                    <figure class="image overlay-anim">
                                        <img src="{{ asset('beauty_images') }}/{{ $b->image }}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>





    </section>
    <!-- End feature section -->





@endsection
