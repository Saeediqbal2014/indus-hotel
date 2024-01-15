@extends('front_layout.app')
@section('title', 'Meeting and event')
@section('content')
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="index.php" title=""><img src="{{ asset('front_asset/images/logo-v5-black.png') }}"
                            alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
    </div>
    </header>
    <!--End Main Header -->

    <!-- Start main-content -->

    <section class="page-title" style="background-image: url({{ asset('front_assets/images/background/hall_bg.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h3 class="meeting-title"> Start Planning Your Meetings or Events Here

                    <span class="heading_short">Tell us about your event, then we'll contact you and plan it togather</span>
                </h3>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Meeting & Events</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <section>
        <div class="welcome_div">
            <div class="welcome_div_sub">
                <div class="center_align">
                    <span class="section_top_heading">Meeting & Event</span>
                    <h3 class="">Where Moments Become Memories</h3>
                    <p>Comprehensive meeting facilities complemented by expert catering and video conf. resources & Spacious
                        Pillarlesshigh ceiling halls for big group meetings</p>
                    <div class="sohohotel-clearboth"></div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- news-section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="row">
                <!-- News Block -->


                @foreach ($events as $event)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box wow fadeInLeft">
                            <div class="image-box">
                                <figure class="image overlay-anim">
                                    @if (count($event->image) > 0)
                                        <a href="{{ asset('event_images/' . $event->image[0]) }}"
                                            data-lightbox="continental">
                                            <img src="{{ asset('event_images/' . $event->image[0]) }}" alt="">
                                        </a>
                                    @endif

                                    @if (count($event->image) > 1)
                                        @foreach ($event->image as $index => $imageName)
                                            @if ($index > 0)
                                                <a href="{{ asset('event_images/' . $imageName) }}" class="dis_no"
                                                    data-lightbox="continental">
                                                    <img src="{{ asset('event_images/' . $imageName) }}" alt="">
                                                </a>
                                            @endif
                                        @endforeach
                                    @endif
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title"><a href="#">{{ $event->title }}</a></h4>
                                <div class="hall_facilities">
                                    <ul class="post-info">
                                        <li><img src="{{ asset('front_assets/images/hall/icon/banquet.png') }}"
                                                class="img_icon"><span class="area-size-span">BANQUET</span></li>
                                        <li><i class="fa-solid fa-bell-concierge"></i><span
                                                class="area-size-span">RECEPTION</span></li>
                                        <!-- <li><i class="fa-solid fa-ruler-triangle"></i><span class="area-size-span">THEATRE</span></li> -->
                                        <li><i class="fa-regular fa-tablet-rugged"></i><span
                                                class="area-size-span">THEATRE</span></li>
                                    </ul>
                                </div>
                                <div class="hall_facilities">
                                    <ul class="post-info">
                                        <li><img src="{{ asset('front_assets/images/hall/icon/conferance.png') }}"
                                                class="img_icon"><span class="area-size-span">CONFERANCE</span></li>
                                        <li><i class="fa-regular fa-screen-users"></i><span
                                                class="area-size-span">CLASSROOM</span></li>
                                        <!-- <li><i class="fa-solid fa-ruler-triangle"></i><span class="area-size-span">THEATRE</span></li> -->
                                        <li><img src="{{ asset('front_assets/images/hall/icon/boardroom.png') }}"
                                                class="img_icon"><span class="area-size-span">BOARDROOM</span></li>
                                    </ul>
                                </div>
                                <a href="contact.php" class="read-more" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $event->id }}">
                                    Reserve Now<i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>



                    <!--model temp start -->

                    <div class="modal fade" id="exampleModal{{ $event->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content mdl_bg">
                                <div class="modal-header sec-title mb-0">
                                    <h2 class="modal-title sub-title" id="exampleModalLabel">Query About Event</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form class="ajaxForm" action="{{ route('query.store') }}" method="post"
                                            id="hall_inquiry_form">
                                            @csrf

                                            <div class="row mb-2">

                                                <div class="col-md-4">
                                                    <label for="Title" class="col-form-label">Title</label>
                                                    <select name="title" class="form-control mdl_them" id="name_title">
                                                        <option value="select" disabled selected>Select</option>
                                                        <option value="Dr">Dr</option>
                                                        <option value="Mr">Mr</option>
                                                        <option value="Miss">Miss</option>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Ms">Ms</option>
                                                    </select>
                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="First Name" class="col-form-label">First Name</label>
                                                    <input type="text" name="first_name" id="fname"
                                                        class="form-control mdl_them" required placeholder="First Name">
                                                    @error('first_name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="Last Name" class="col-form-label">Last Name</label>
                                                    <input type="text" name="last_name" id="lname"
                                                        class="form-control mdl_them" required id=""
                                                        placeholder="Last Name">
                                                    @error('last_name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <label for="Email" class="col-form-label">Email</label>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control mdl_them" required placeholder="Email">
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="Phone Number" class="col-form-label">Phone Number</label>
                                                    <input type="number" name="phone" id="p_num"
                                                        class="form-control mdl_them" required placeholder="Phone Number">
                                                    @error('phone')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="Country" class="col-form-label">Nationality</label>
                                                    <div class="d_flex">
                                                        <select id="country" class="form-control mdl_them order_input"
                                                            required aria-required="true" aria-invalid="false"
                                                            name="country">
                                                            <option value="" selected disabled>Select Country
                                                            </option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas, The">Bahamas, The</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="Brunei">Brunei</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burma">Burma</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo, Democratic Republic of the">Congo,
                                                                Democratic Republic of
                                                                the</option>
                                                            <option value="Congo, Republic of the">Congo, Republic of the
                                                            </option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curacao">Curacao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czechia">Czechia</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor (see Timor-Leste)">East Timor (see
                                                                Timor-Leste)
                                                            </option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Eswatini">Eswatini</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia, The">Gambia, The</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Holy See">Holy See</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, North">Korea, North</option>
                                                            <option value="Korea, South">Korea, South</option>
                                                            <option value="Kosovo">Kosovo</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia">Micronesia</option>
                                                            <option value="Moldova">Moldova</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="North Korea">North Korea</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territories">Palestinian Territories
                                                            </option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                                and the
                                                                Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Sint Maarten">Sint Maarten</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Korea">South Korea</option>
                                                            <option value="South Sudan">South Sudan</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Swaziland (See Eswatini)">Swaziland (See
                                                                Eswatini)</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-Leste">Timor-Leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                        @error('country')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <label for="Type of Event" class="col-form-label">Hall Name</label>
                                                    <input type="text" name="hall" id="p_num"
                                                        class="form-control mdl_them" value="{{ $event->title }} "
                                                        readonly>

                                                    {{-- <select name="hall" id="hall" class="form-control mdl_them"
                                                        required id="">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="CONTINENTAL HALL">CONTINENTAL HALL</option>
                                                        <option value="CRYSTAL HALL">CRYSTAL HALL</option>
                                                        <option value="DIAMOND HALL">DIAMOND HALL</option>
                                                        <option value="PEARL HALL">PEARL HALL</option>
                                                        <option value="MARVI HALL">MARVI HALL</option>
                                                        <option value="CRYSTAL HALL">CRYSTAL HALL</option>
                                                        <option value="CONFERENCE ROOM">CONFERENCE ROOM</option>
                                                        <option value="COMMITTEE ROOM">COMMITTEE ROOM</option>
                                                        <option value="SENATE ROOM">SENATE ROOM</option>
                                                    </select> --}}
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="Type of Event" class="col-form-label">Type of
                                                        Event</label>
                                                    <select name="event" id="event_t" class="form-control mdl_them"
                                                        required id="">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="Business Meeting">Business Meeting</option>
                                                        <option value="Conferance">Conferance</option>
                                                        <option value="Wedding">Wedding</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    @error('event')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="Date" class="col-form-label">Date</label>
                                                    <input type="text" name="date" id="event_date"
                                                        class="date-pick t-check-in form-control mdl_them" required>
                                                    @error('date')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="Comment" class="col-form-label">Comment</label>
                                                    <textarea name="comment" id="msg_box" class="form-control mdl_them" id="" cols="10" rows="8"
                                                        required> </textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input name="form_botcheck" class="form-control" type="hidden"
                                                    value="">
                                                {{-- <div class="g-recaptcha"
                                                    data-sitekey="6Ld9MyUpAAAAAEQ4im_xUthSS8YWrpxmyPkKS0XG"
                                                    style="background-size: 100%; background-repeat: no-repeat;">
                                                </div> --}}
                                                <div id="submit" class="mt20"
                                                    style="background-size: 100%; background-repeat: no-repeat;">
                                                    <input type='submit' value='Check Availability'
                                                        class="theme-btn btn-style-one w-100 p-50_20 btn-main ">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--model temp end -->
                @endforeach


            </div>
        </div>
    </section>


    <!-- End news section -->
    <!--model temp start -->

    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content mdl_bg">
                <div class="modal-header sec-title mb-0">
                    <h2 class="modal-title sub-title" id="exampleModalLabel">Query About Event</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form class="" action="hall_inquiry.php" method="post" onSubmit="return formValidation();"
                            name="hall_inquiry_form" id="hall_inquiry_form">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="Title" class="col-form-label">Title</label>
                                    <select name="name_title" class="form-control mdl_them" id="name_title">
                                        <option value="select" disabled selected>Select</option>
                                        <option value="Mr">Dr</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mr">Miss</option>
                                        <option value="Mr">Mrs</option>
                                        <option value="Mr">Ms</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="First Name" class="col-form-label">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control mdl_them"
                                        required placeholder="First Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="Last Name" class="col-form-label">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control mdl_them"
                                        required name="" id="" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="Email" class="col-form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control mdl_them"
                                        required placeholder="Email">
                                </div>
                                <div class="col-md-4">
                                    <label for="Phone Number" class="col-form-label">Phone Number</label>
                                    <input type="number" name="p_num" id="p_num" class="form-control mdl_them"
                                        required placeholder="Phone Number">
                                </div>
                                <div class="col-md-4">
                                    <label for="Country" class="col-form-label">Nationality</label>
                                    <div class="d_flex">
                                        <select id="country" class="form-control mdl_them order_input" required
                                            aria-required="true" aria-invalid="false" name="country">
                                            <option value="" selected disabled>Select Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas, The">Bahamas, The</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burma">Burma</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cabo Verde">Cabo Verde</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of
                                                the</option>
                                            <option value="Congo, Republic of the">Congo, Republic of the</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czechia">Czechia</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor (see Timor-Leste)">East Timor (see Timor-Leste)
                                            </option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Eswatini">Eswatini</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia, The">Gambia, The</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Holy See">Holy See</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, North">Korea, North</option>
                                            <option value="Korea, South">Korea, South</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territories">Palestinian Territories</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland (See Eswatini)">Swaziland (See Eswatini)</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="Type of Event" class="col-form-label">Select Hall</label>
                                    <select name="hall" id="hall" class="form-control mdl_them" required
                                        id="">
                                        <option value="" disabled selected>Select</option>
                                        <option value="CONTINENTAL HALL">CONTINENTAL HALL</option>
                                        <option value="CRYSTAL HALL">CRYSTAL HALL</option>
                                        <option value="DIAMOND HALL">DIAMOND HALL</option>
                                        <option value="PEARL HALL">PEARL HALL</option>
                                        <option value="MARVI HALL">MARVI HALL</option>
                                        <option value="CRYSTAL HALL">CRYSTAL HALL</option>
                                        <option value="CONFERENCE ROOM">CONFERENCE ROOM</option>
                                        <option value="COMMITTEE ROOM">COMMITTEE ROOM</option>
                                        <option value="SENATE ROOM">SENATE ROOM</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="Type of Event" class="col-form-label">Type of Event</label>
                                    <select name="event_t" id="event_t" class="form-control mdl_them" required
                                        id="">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Business Meeting">Business Meeting</option>
                                        <option value="Conferance">Conferance</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="Date" class="col-form-label">Date</label>
                                    <input type="text" name="event_date" id="event_date"
                                        class="date-pick t-check-in flatpickr-input active form-control mdl_them" required
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="Comment" class="col-form-label">Comment</label>
                                    <textarea name="msg_box" id="msg_box" class="form-control mdl_them" id="" cols="10"
                                        rows="8"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input name="form_botcheck" class="form-control" type="hidden" value="">
                                <div class="g-recaptcha" data-sitekey="6Ld9MyUpAAAAAEQ4im_xUthSS8YWrpxmyPkKS0XG"
                                    style="background-size: 100%; background-repeat: no-repeat;">
                                </div>
                                <div id="submit" class="mt20"
                                    style="background-size: 100%; background-repeat: no-repeat;">
                                    <input type='submit' id='submit_form' value='Check Availability'
                                        class="theme-btn btn-style-one w-100 p-50_20 btn-main "
                                        data-loading-text="Please wait..." onclick="msgSubmit()">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--model temp end -->
@endsection
