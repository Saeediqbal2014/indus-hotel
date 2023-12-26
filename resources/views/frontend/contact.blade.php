@extends('front_layout.app')
@section('title', 'Contact')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('front_assets/images/background/contact.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Contact Details Start-->
    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title before-none">Send us email</span>
                        <h2>Feel free to write</h2>
                    </div>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="contact_inquary.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_name" id="form_name" class="form-control" type="text"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_email" id="form_email" class="form-control required email"
                                        type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_subject" id="form_subject" class="form-control required"
                                        type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_phone" id="form_phone" class="form-control" type="text"
                                        placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="form_message" id="form_message" class="form-control required" rows="10"
                                placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-5  dis_flx">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <div class="g-recaptcha" data-sitekey="6Ld9MyUpAAAAAEQ4im_xUthSS8YWrpxmyPkKS0XG"
                                style="background-size: 100%; background-repeat: no-repeat;">
                            </div>
                            <div id="submit" class="mt20"
                                style="background-size: 100%; background-repeat:
                       no-repeat;">
                                <input type='submit' id='submit_form'
                                    value='Send Message'class="theme-btn
                                                                                                        btn-style-one btn-main "
                                    data-loading-text="Please wait..." onclick="msgSubmit()">
                            </div>
                        </div>
                    </form>
                    <!-- Contact Form Validation-->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title before-none">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">
                                Thank you for choosing us as your destination for memorable Events. We are dedicated to
                                providing you with an exceptional experience.</div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon bg-theme-color2">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:+92 313 5443304" class="dis_block"> +92 313 5443304</a>
                                    <a href="tel:+92 22 2781903-4" class="dis_block"> +92 22 2781903-4</a>
                                    <a href="tel:+92 22 2782514-5" class="dis_block"> +92 22 2782514-5</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:">reservation@indushotel.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span>Thandi Sarak, Hyderabad, Pakistan, 71000</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <!-- Map Section-->
    <section class="indus_map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.733278331962!2d68.33508677452663!3d25.380254124263416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c708319dbefa1%3A0x30445fb3985c9871!2sIndus%20Hotel!5e0!3m2!1sen!2s!4v1695184771311!5m2!1sen!2s"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--End Map Section-->

@endsection
