@extends('layouts.landing-app')
@section('content')
    <?php
    $countriesList = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"];

    ?>
    <main class="main">

        <div class="container container--main container--enquiryform container--enquiryform--new">
            <div class="row">
                <div class="col col-12">
                    <div class="row">

                        <noscript class="messagebox messagebox--red">
                            You'll have to activate JavaScript in your browser to Request a Quote on SafariBookings.com
                        </noscript>

                        <form action="{{url('post-bid-on-tour')}}" method="POST" onsubmit="return validateForm()">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger" style="margin-top: 20px;margin-bottom: 20px">
                                    <h4 style="color: red">{{$errors->first()}}</h4>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col col-7 col-w-8 col--no-gutter-left">
                                    <ul class="enquiryform__progress">
                                        <li class="done">
                                            <a href="{{url('operators')}}" target="_blank">
                            <span>
                                <svg width="14" height="12" viewBox="0 0 14 12" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 1.5s-4.645 4.56-7 9C3.72 8.513 1.5 7 1.5 7" stroke="#fff" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                                                Select Your Tour Operator
                                            </a>
                                        </li>
                                        <li  class="active"  >
                                            <div>
                                                <span>2</span>
                                                Enter Your Details
                                            </div>
                                        </li>
                                        <li  >
                                            <div>
                                                <span>3</span>
                                                Operator Will accept or reject your bid
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shadowed-box enquiryform__head">

                                        <div class="row">
                                            <div class="col col-6 col--no-gutter">
                                                <div class="list__item--image__full operator">
                                                    <div>
                                                        <img src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}" title="{{$user->company_name}}" alt="{{$user->company_name}}" />
                                                    </div>

                                                    <div class="holder-tourtitle">
                                                        <h2 class="serif tourtitle">{{$user->company_name}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-6 col--no-gutter">
                                                <div class="features features-op">
                                                    <ul class="list list--icon list--icon-arrow list--icon-nopadding">
                                                        <li><b>Interested in a specific tour</b> of {{$user->company_name}}? Please select the specific tour from the list given below.</li>
                                                        <li>This operator offers <b>custom budget</b> and <b>mid-range tours that can start every day</b>.</li>
                                                    </ul>
                                                </div>

                                                <div class="operator-snippet__data">
                                                    <div class="opdata__image"><img src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$user->id}}" alt="" /></div>
                                                    <p>
                                                        <b>
                                                            {{$user->company_name}}
                                                        </b>
                                                    </p>
                                                    <div class="stars      " title="5 / 5"    >
                                                        @for($i=0;$i<$user->rating;$i++)
                                                            <i class="sbi sbi--star"></i>
                                                        @endfor
                                                    </div>
                                                    <p><span class="review-score"><em>{{$user->rating}}</em>/5</span>&nbsp;&ndash;&nbsp;<span class="nowrap">{{$user->reviews}} Reviews</span></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="messagebox messagebox--green messagebox--pointer messagebox--green--pointer txt--green operator"><i class="sbi sbi--checkmark-green-thin"></i><strong>Excellent choice</strong>, this is one of the <strong>best tour operators</strong></div>

                                    </div>
                                    <div class="enquiryform__form shadowed-box  enquiryform__form--operator  ">

                                        <h1 class="serif">Bid on this free</h1>
                                        <h4><svg width="21" height="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle stroke="#B87D30" stroke-width="2" cx="10.5" cy="10.5" r="9.5"/><ellipse fill="#B87D30" cx="7.5" cy="8.5" rx="1" ry="2"/><ellipse fill="#B87D30" cx="13.5" cy="8.5" rx="1" ry="2"/><path d="M10.433 15.636c1.859 0 3.733-.607 4.461-2.85.5-1.534-.733 1.602-4.46 1.602-3.343 0-4.848-2.879-4.336-1.602.897 2.242 2.477 2.85 4.335 2.85z" fill="#B87D30"/></g></svg> Bidding is <strong>free</strong> and there is <strong>no obligation to book</strong></h4>

                                        <fieldset>

                                            <legend style="margin-bottom:20px;"><span>Your Details</span></legend>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12 col-w-3-5">
                                                    <h5>Full Name:</h5>
                                                </div>
                                                <div class="col col--no-gutter col-12 col-w-8-5">
                                                    <input id="name" name="name" type="text" data-validate="" data-validate-msg="Please enter your name" value="" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12 col-w-3-5">
                                                    <h5>Email Address:</h5>
                                                </div>
                                                <div class="col col--no-gutter col-12 col-w-8-5">
                                                    <input id="email" name="email" type="email" data-validate="email" data-validate-msg="Please enter a valid email address" value="" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12 col-w-3-5">
                                                    <h5>Country of Residence:</h5>
                                                </div>
                                                <div class="col col--no-gutter col-12 col-w-8-5">
                                                    <select name="country" id="country" style="color: black;width: 455px">
                                                        <option value="">Select Country</option>
                                                        @foreach($countriesList as $country)
                                                                <option value="{{$country}}">{{$country}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="country_autocomplete country_autocomplete_holder"></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12 col-w-3-5">
                                                    <h5>Mobile Phone Number:</h5>
                                                </div>
                                                <div class="col col--no-gutter col-12 col-w-8-5">
                                                    <input id="tel" name="tel" type="tel" value="" /><span class="txt--xsmall txt--grey">We need a phone number in case the operator cannot reach you by email.</span>
                                                </div>
                                            </div>

                                        </fieldset>

                                        <fieldset>

                                            <legend><span>Select Tour in which you are interested <span style="font-size: 12px">(please select custom tour option if you interested in custom tour)</span></span></legend>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12">

                                                    <div id="interest_countries">
                                                        <p>This tour operator offers these tours:</p>
                                                        <div>
                                                            <select name="selectedTour" id="selectedTour" class="form-control" style="color:black;">
                                                                <option value="">Select</option>
                                                                @foreach($user->tours as $tour)
                                                                    <option {{ $tour->id == $tourId ? 'selected' : '' }} value="{{$tour->id}}">{{$tour->title}}</option>
                                                                @endforeach
                                                                <option value="-1">Custom Tour</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>


                                        <fieldset>
                                            <legend><span>Tour Duration in Days &nbsp;<i class="txt--small txt--xgrey txt--normal">&ndash; Excluding travel time to/from Africa</i></span></legend>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12">
                                                    <div id="days" class="duration">
                                                        <select name="selectedDays" id="selectedDays" class="form-control" style="color:black;">
                                                            <option value="">Select</option>
                                                            @for($i=0;$i<15;$i++)
                                                                <option value="{{$i + 1}}">{{$i + 1}}</option>
                                                            @endfor
                                                            <option value="15+">15+</option>
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>

                                        </fieldset>

                                        <fieldset>
                                            <legend><span>Tour Dates and People&nbsp;</span></legend>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12">
                                                    <div id="days" class="duration">
                                                        <label>Start Date</label>
                                                       <input type="date" name="startDate" id="startDate" class="form-control">

                                                    </div>
                                                    <div id="days" class="duration">
                                                        <label>End Date</label>
                                                       <input type="date" name="endDate" id="endDate" class="form-control">

                                                    </div>
                                                    <div id="days" class="duration">
                                                        <label>Adults</label>
                                                        <select name="adults" id="adultCount" class="form-control" style="color:black;">
                                                            <option value="">Select</option>
                                                            @for($i=0;$i<15;$i++)
                                                                <option value="{{$i + 1}}">{{$i + 1}}</option>
                                                            @endfor
                                                        </select>

                                                    </div>
                                                    <div id="days" class="duration">
                                                        <label>Children</label>
                                                        <select name="children" id="childrenCount" class="form-control" style="color:black;">
                                                            <option value="">Select</option>
                                                            @for($i=0;$i<15;$i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>

                                        </fieldset>

                                        <fieldset>

                                            <legend><span>Your Message</span></legend>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12">
                                                    <span class="txt--xsmall txt--grey">You will receive the best response from the tour operator if you introduce yourself and share the reasons for your interest in this tour.</span><br />
                                                    <textarea id="message" name="message" data-validate="empty" data-accepts-agents="1" data-validate-msg="Please describe your request and travel plans"></textarea>

{{--                                                    <label class="with-checkbox"><input type="checkbox" name="remember_request" value="1" class="checkbox--green"  checked > Remember my message for future quote requests</label>--}}
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col--no-gutter col-12">
                                                    <div style="display: none;padding: 10px;background: maroon;color: white" id="errordiv">

                                                    </div>
                                                    <div id="enquirysubmit-container" style="margin-top: 10px">
                                                        <button type="submit" class="btn btn--orange btn--autowidth-t btn--autowidth-t--wide btn--next" data-validate-msg="<b>We're sorry, but an error occurred.</b><br />A message has been sent to our tech team. Please try again later." style="background: black;border-color: black">Send Request</button>
{{--                                                        <div class="txt--grey txt--small">By clicking the 'Send' button you agree to our <a href="https://www.safaribookings.com/terms-of-use" target="_blank">Terms of Use</a> and <a href="https://www.safaribookings.com/privacy-policy" target="_blank">Privacy Policy</a></div>--}}
                                                    </div>
                                                </div>
                                            </div>


                                        </fieldset>


                                    </div>
                                </div>
                                <div class="col col-5 col-w-4 col--no-gutter-right">

                                    <div class="enquiryform__tripdetails shadowed-box">
                                        <h3>Bidding</h3>

                                        <fieldset>
{{--                                            <h3>Maximum bid so far of this operator is 500 USD</h3>--}}
{{--                                            <br>--}}
                                            <label>Your bidding amount in USD:</label><br>
                                            <input type="text" name="biddingAmount" id="biddingAmount" value="0">
                                        </fieldset>



                                    </div>

                                </div>
                            </div>
                            <input type="hidden" name="operator_id" value="{{$user->id}}">

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <script>
        function validateForm() {

            let amount = document.getElementById('biddingAmount').value;
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let country = document.getElementById('country').value;
            let telephone = document.getElementById('tel').value;
            let selectedTour = document.getElementById('selectedTour').value;
            let selectedDays = document.getElementById('selectedDays').value;
            let startDate = document.getElementById('startDate').value;
            let endDate = document.getElementById('endDate').value;
            let adults = document.getElementById('adultCount').value;
            let children = document.getElementById('childrenCount').value;
            let message = document.getElementById('message').value;

            document.getElementById('errordiv').style.display = 'none';
            if(amount === '' || amount === undefined || amount <= 0){
                document.getElementById('errordiv').innerHTML = 'Invalid bidding amount';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(name === '' || name === undefined){
                document.getElementById('errordiv').innerHTML = 'Name is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(email === '' || email === undefined){
                document.getElementById('errordiv').innerHTML = 'Email is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(country === '' || country === undefined){
                document.getElementById('errordiv').innerHTML = 'Country is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(telephone === '' || telephone === undefined){
                document.getElementById('errordiv').innerHTML = 'Telephone is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(selectedTour === '' || selectedTour === undefined){
                document.getElementById('errordiv').innerHTML = 'Tour Selection is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(selectedDays === '' || selectedDays === undefined){
                document.getElementById('errordiv').innerHTML = 'Days Selection is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(startDate === '' || startDate === undefined){
                document.getElementById('errordiv').innerHTML = 'Start Date is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(endDate === '' || endDate === undefined){
                document.getElementById('errordiv').innerHTML = 'End Date is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(adults === '' || adults === undefined){
                document.getElementById('errordiv').innerHTML = 'Adults Count is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(children === '' || children === undefined){
                document.getElementById('errordiv').innerHTML = 'Children Count is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(message === '' || message === undefined){
                document.getElementById('errordiv').innerHTML = 'Message is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }

            return true;
        }
    </script>
@endsection
