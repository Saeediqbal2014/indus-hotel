@extends('front_layout.app')
@section('title', 'rooms')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('front_assets/images/banner/room.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title"> {{ $rooms->name }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>{{ $rooms->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 product-details rd-page">
                    <div class="">
                        <div class="room_detail_slider">
                            @php
                                $images = json_decode($rooms->images);
                            @endphp
                            @foreach (json_decode($rooms->images) as $imageName)
                                <div><img src="{{ asset('rooms_images/' . $imageName) }}" alt="image">
                                </div>
                            @endforeach

                        </div>

                        <div class="slider-nav">
                            @foreach (json_decode($rooms->images) as $imageName)
                                <div><img src="{{ asset('rooms_images/' . $imageName) }}" alt="image">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="room-details__left mt-4">
                        <div class="wrapper">
                            <h3>Description of Room</h3>
                            <p class="text">
                                {{ $rooms->description }}
                            </p>
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="room-details__content-right mb-40 mt-20">
                                        <div class="room-details__details-box">
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <p class="text mb-0">Rooms Bed</p>
                                                    <h6> {{ $rooms->bed }} </h6>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <p class="text mb-0">Occupancy</p>
                                                    <h6>{{ $rooms->occupancy }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-40">
                            <h4>Room Package Include</h4>
                            <div class="row room-facility-list mb-40">

                                @php
                                    $images = json_decode($rooms->image);
                                @endphp
                                @foreach (json_decode($rooms->packages) as $packag_id)
                                    @php
                                        $packages = App\Models\AccommodationPackage::where('id', $packag_id)->first();
                                    @endphp
                                    <div class="col-sm-6 col-xl-6 mb-10">
                                        <div class="list-one d-flex align-items-center me-sm-4">
                                            <div class="icon text-theme-color1 mr-10 flex-shrink-0"><i
                                                    class="{{ $packages->icon }}"></i></div>
                                            <h6 class="title m-0">{{ $packages->name }}</h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar side_bar_position">
                        <div class="sidebar__post sticky">
                            <form class="" action="send_inquary.php" method="post"
                                onSubmit="return formValidation();" name="sidebar_form" id="sidebar_form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="checkout-field">
                                                <label class="form-label">Full Name</label>
                                                <div class="chk-field">
                                                    <input class="inp_style" required type="text" name="f_name"
                                                        id="f_name" placeholder="Your Full Name" />
                                                    <!-- <i class="fa fa-calendar"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="room" value="" name="room" />
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="checkout-field">
                                                <label class="form-label">Number</label>
                                                <div class="chk-field">
                                                    <input class="inp_style" required name="m_num" id="m_num"
                                                        type="Number" placeholder="Your Number" />
                                                    <!-- <i class="fa fa-calendar"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="checkout-field">
                                                <label class="form-label">Email</label>
                                                <div class="chk-field">
                                                    <input class="inp_style" required name="e_id" id="e_id"
                                                        type="email" placeholder="Your Email" />
                                                    <!-- <i class="fa fa-calendar"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="checkout-field">
                                                <label class="form-label"> Nationality</label>
                                                <div class="chk-field">
                                                    <div class="d_flex">
                                                        <select id="country"
                                                            class="form-control order_input sidebar_country" required
                                                            aria-required="true" aria-invalid="false" name="country">
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
                                                                Democratic Republic of the</option>
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
                                                                Timor-Leste)</option>
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
                                                                and the Grenadines</option>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="checkout-field">
                                                <label class="form-label">Check In</label>
                                                <div class="chk-field">
                                                    <input class= "date-pick t-check-in date_picker" required
                                                        name="startdate" id="startdate date" data-provide="date_picker"
                                                        type="text" placeholder="Arrive Date" />
                                                    <!-- <i class="fa fa-calendar"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <div class="checkout-field">
                                                <label class="form-label">Check Out</label>
                                                <div class="chk-field">
                                                    <input class= "date-pick t-check-out date_picker" required
                                                        name="enddate" id="enddate date" data-provide="date_picker"
                                                        type="text" placeholder="Departure Date" />
                                                    <!-- <i class="fa fa-calendar"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label">Adults</label>
                                            <select class= "form-select form-control bg-white" required name="adult_num"
                                                id="adult_num">
                                                <option selected disabled value="">Select</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label">Children</label>
                                            <select class= "form-select form-control bg-white" required name="child_num"
                                                id="child_num">
                                                <option selected disabled value="">Select</option>
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <div class="checkout-field">
                                            <label class="form-label">Any Special Arrangments</label>
                                            <div class="chk-field">
                                                <textarea name="msg_box" id="msg_box" class="form-control spcl-arrag" id="" cols="10"
                                                    rows="4" placeholder="Any Query or Any Special Arrangment"></textarea>
                                                <!-- <i class="fa fa-calendar"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                                    <div class="g-recaptcha" data-sitekey="6Ld9MyUpAAAAAEQ4im_xUthSS8YWrpxmyPkKS0XG"
                                        style="background-size: 100%; background-repeat: no-repeat;"></div>
                                    <div id="submit" class="mt20"
                                        style="background-size: 100%; background-repeat: no-repeat;">
                                        <input type='submit' id='submit_form'
                                            value='Check Availability'class="theme-btn btn-style-one w-100 mt-3 btn-main"
                                            data-loading-text="Please wait..." onclick="msgSubmit()">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->
@endsection
