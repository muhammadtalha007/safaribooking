@extends('layouts.landing-app')
@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .rate {
            /*float: right;*/
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }

    </style>

    <main class="main">

        <div class="container container--main">
            <div class="row">
                <div class="col col-12">
                    <div class="row content">
                        <form action="{{url('post-review')}}" class="inputform reviewform extraform notranslate" method="POST" autocomplete="off" onsubmit="return validateForm()" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="form-status" value="init" />

                            <div class="detail__title__block row">
                                <div>
                                    <h2>Write a Review</h2>
                                </div>
                            </div>

                            <input type="hidden" name="operator_id" value="{{$user->id}}" />
                            <input type="hidden" name="time" value="-1" />
                            <input type="hidden" name="invite" value="" />
                            <input type="hidden" name="invite_type" value="reward" />
                            <input type="hidden" name="user_country" value="Pakistan" />
                            <input type="hidden" name="user_country_id" value="163" />
                            <input type="hidden" name="operator" value="3429" />
                            <input type="hidden" name="park_id" value="" />
                            <input type="hidden" name="park_name" value="" />
                            <input type="hidden" name="country_id" value="" />
                            <input type="hidden" name="riu" value="" />

                            <noscript class="messagebox messagebox--red">
                                You'll have to activate JavaScript in your browser to write a review on SafariBookings.com
                            </noscript>

                            <fieldset class="reviewform__header extraform__header">

                                <div class="messagebox messagebox--green review_errors">
                                    <div class="error-title"><b>Attention!</b></div>
                                    <ul class="list list--icon list--icon-arrow list--icon-nopadding">
                                        <li>All fields are required unless stated otherwise.</li>
                                        <li id="promote-note">It is not allowed to promote a business or its activities.</li>
                                        <li class="operator_warning">It is not allowed to submit reviews from a computer located in the office of a tour operator.</li>
                                        <li class="operator_warning">It is not allowed to submit reviews from a computer used by a tour operator.</li>
                                    </ul>
                                </div>

                            </fieldset>

                            <fieldset class="reviewform__subject fieldset">

                                <legend class="legend legend--line legend--heading">
                                    What Is Your Review About?
                                </legend>

                                <div class="subject-holder">
                                    <h1>{{$user->company_name}}</h1>
                                </div>

                            </fieldset>


                            <fieldset>

                                <legend class="legend legend--line legend--heading">
                                    When Did You Go?
                                </legend>

                                <div>
                                    <div id="date">
                                        <div class="select--holder">
                                            <select id="month" name="month" data-validate="" data-validate-group="date" data-validate-msg="Please select the month and year of your visit">
                                                <option value="">- Select month -</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>

                                        <div id="year-holder" class="select--holder">
                                            <select id="year" name="year" data-validate="" data-validate-group="date" data-validate-msg="Please select the month and year of your visit">
                                                <option value="">- Select year -</option>
                                                <option value="2021">2021</option>The current value is 2021
                                                <option value="2020">2020</option>The current value is 2020
                                                <option value="2019">2019</option>The current value is 2019
                                                <option value="2018">2018</option>The current value is 2018
                                                <option value="2017">2017</option>The current value is 2017
                                                <option value="2016">2016</option>The current value is 2016
                                                <option value="2015">2015</option>The current value is 2015
                                                <option value="2014">2014</option>The current value is 2014
                                                <option value="2013">2013</option>The current value is 2013
                                                <option value="2012">2012</option>The current value is 2012
                                                <option value="2011">2011</option>The current value is 2011
                                                <option value="2010">2010</option>The current value is 2010
                                                <option value="2009">2009</option>The current value is 2009
                                                <option value="2008">2008</option>The current value is 2008
                                                <option value="2007">2007</option>The current value is 2007
                                                <option value="2006">2006</option>The current value is 2006
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <div>

                                <legend class="legend legend--line legend--heading">
                                    How Would You Rate&nbsp; <span class="subject" data-original="it">it</span>?
                                </legend>


                                <div class="main-rating" style="max-width: 300px">
                                    <div class="rating-title" style="text-align: center">Overall Rating<span class="hide-t">:</span></div>
                                    <div class="rate" style="margin-top: 20px;margin-bottom: 20px">
                                        <input type="radio" id="star5" name="rate" title="Excellent" value="5" />
                                        <label for="star5" title="Excellent" >5 stars</label>
                                        <input type="radio" id="star4" name="rate" title="Good" value="4" />
                                        <label for="star4" title="Good">4 stars</label>
                                        <input type="radio" id="star3" title="Average" name="rate" value="3" />
                                        <label for="star3" title="Average">3 stars</label>
                                        <input type="radio" id="star2" title="Poor" name="rate" value="2" />
                                        <label for="star2" title="Poor">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" title="Terrible" />
                                        <label for="star1" title="Terrible">1 star</label>
                                    </div>
                                    <div class="rating-label" style="text-align: center"><div class="inner txt--small" style="margin-top: 15px;text-align: center">Click <span class="hide show-di">a star&nbsp;</span>to select your rating</div></div>
                                    <!-- Overall rating -->
                                </div>

{{--                                <div id="sub-rating" class="sub-rating">--}}
{{--                                    <ul class="list list--icon list--icon-arrow list--icon-nopadding">--}}
{{--                                        <li>--}}
{{--                                            <!-- Wildlife/Location rating -->--}}
{{--                                            <div class="rating-selector">--}}
{{--                                                <div class="rating-title rating-title-a">Wildlife<span class="hide-t">:</span></div>--}}
{{--                                                <div class="stars-and-notsure">--}}
{{--                                                    <div id="main-rating-a-selector" class="stars select small">--}}
{{--                                                        <i class="sbi sbi--starempty" data-val="1" title="Terrible"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="2" title="Poor"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="3" title="Average"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="4" title="Good"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="5" title="Excellent"></i>                        </div>--}}
{{--                                                    <input id="main-rating-a" type="hidden" name="main-rating-a" value="" class="star-value">--}}
{{--                                                    <input type="checkbox" id="main-rating-a-check" name="cb1" class="notsure" /> <label for="main-rating-a-check">Not sure</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <!-- Scenic beauty/Service rating -->--}}
{{--                                            <div class="rating-selector">--}}
{{--                                                <div class="rating-title rating-title-b">Scenic Beauty<span class="hide-t">:</span></div>--}}
{{--                                                <div class="stars-and-notsure">--}}
{{--                                                    <div id="main-rating-b-selector" class="stars select small">--}}
{{--                                                        <i class="sbi sbi--starempty" data-val="1" title="Terrible"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="2" title="Poor"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="3" title="Average"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="4" title="Good"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="5" title="Excellent"></i>                        </div>--}}
{{--                                                    <input id="main-rating-b" type="hidden" name="main-rating-b" value="" class="star-value">--}}
{{--                                                    <input type="checkbox" id="main-rating-b-check" name="cb2" class="notsure" /> <label for="main-rating-b-check">Not sure</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <!-- Bush vibe/Room & bed rating -->--}}
{{--                                            <div class="rating-selector">--}}
{{--                                                <div class="rating-title rating-title-c"><a href="#" class="a--dotted help textual" data-balloon-width="280" data-help="Things that contribute to the bush vibe are:<ul class='list list--icon list--icon-arrow list--icon-nopadding'><li>Dirt roads (instead of tarred roads)</li><li>Few tourists</li><li>Parks being the size of a small country</li><li>Unfenced parks</li><li>No self-drive tourists using normal cars</li><li>No mass tourism accommodations</li></ul>">Bush Vibe</a><span class="hide-t">:</span></div>--}}
{{--                                                <div class="stars-and-notsure">--}}
{{--                                                    <div id="main-rating-c-selector" class="stars select small">--}}
{{--                                                        <i class="sbi sbi--starempty" data-val="1" title="Terrible"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="2" title="Poor"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="3" title="Average"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="4" title="Good"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="5" title="Excellent"></i>                        </div>--}}
{{--                                                    <input id="main-rating-c" type="hidden" name="main-rating-c" value="" class="star-value">--}}
{{--                                                    <input type="checkbox" id="main-rating-c-check" name="cb3" class="notsure" /> <label for="main-rating-c-check">Not sure</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <!-- Birding/Food rating -->--}}
{{--                                            <div class="rating-selector">--}}
{{--                                                <div class="rating-title rating-title-d">Birding<span class="hide-t">:</span></div>--}}
{{--                                                <div class="stars-and-notsure">--}}
{{--                                                    <div id="main-rating-d-selector" class="stars select small">--}}
{{--                                                        <i class="sbi sbi--starempty" data-val="1" title="Terrible"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="2" title="Poor"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="3" title="Average"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="4" title="Good"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="5" title="Excellent"></i>                        </div>--}}
{{--                                                    <input id="main-rating-d" type="hidden" name="main-rating-d" value="" class="star-value">--}}
{{--                                                    <input type="checkbox" id="main-rating-d-check" name="cb4" class="notsure" /> <label for="main-rating-d-check">Not sure</label><span class="hide show-ti txt--small txt--xgrey rating-title-d-sub">&nbsp;(Select <span class="hide show-di">'Not sure'&nbsp;</span>if you're not a birder)</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li id="sub-rating-e">--}}
{{--                                            <!-- Wildlife viewing activities rating -->--}}
{{--                                            <div class="rating-selector">--}}
{{--                                                <div class="rating-title rating-title-e">Wildlife Activities<span class="hide-t">:</span></div>--}}
{{--                                                <div class="stars-and-notsure">--}}
{{--                                                    <div id="main-rating-e-selector" class="stars select small">--}}
{{--                                                        <i class="sbi sbi--starempty" data-val="1" title="Terrible"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="2" title="Poor"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="3" title="Average"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="4" title="Good"></i><i--}}
{{--                                                            class="sbi sbi--starempty" data-val="5" title="Excellent"></i>                        </div>--}}
{{--                                                    <input id="main-rating-e" type="hidden" name="main-rating-e" value="" class="star-value">--}}
{{--                                                    <input type="checkbox" id="main-rating-e-check" name="cb5" class="notsure" /> <label for="main-rating-e-check">Not sure</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

                            </div>

                            <fieldset>

                                <legend class="legend legend--line legend--heading">
                                    Provide a Title for Your Review&nbsp;<span class="subject about"></span>&nbsp;(in English)
                                </legend>

                                <div>
                                    <p class="note" id="title-desc">Try to describe your experiences with this tour operator in one sentence.</p>
                                </div>

                                <div>
                                    <input type="text" name="review_title" id="review_title" maxlength="100" data-max-chars="100" data-validate="empty" data-validate-msg="Please enter a title for your review" />
                                </div>

                                <div class="field-counter txt--xsmall">
                                    Max 100 characters (<span id="review_title_char_counter_left">100</span> characters left)
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend class="legend legend--line legend--heading">
                                    Please Write Your Review&nbsp;<span class="subject about"></span>&nbsp;(in English)
                                </legend>

                                <div>
                                    <p class="note" id="review-desc">What did you think about the wildlife, scenery, weather, accommodations, food, transportation, your guide, other highlights and so on?</p>
                                </div>

                                <div>
                                    <textarea name="review" id="review" data-min-chars="50" data-validate="empty" data-validate-msg="Please write a review with a minimum of 50 characters"></textarea>
                                    <div class="field-counter txt--xsmall">
                                        Min 50 characters (<span class="error-color"><span id="review_char_counter_entered">0</span> characters entered</span>)
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <label>Upload multiple images (optional)</label>
                                    <input type="file" name="reviewFiles[]" multiple>
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend class="legend legend--line legend--heading">
                                    Your Name
                                </legend>

                                <div>
                                    <p class="note">This name will be publicly visible. Feel free to enter only your first name.</p>
                                </div>

                                <div>
                                    <input type="text" name="reviewer_name" id="reviewer_name" value="" data-validate="empty" data-min-chars="2" data-validate-msg="Please enter your name" />
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend class="legend legend--line legend--heading">
                                    Your Country of Residence
                                </legend>

                                <div>
                                    <select id="country-selector" name="country"
                                            style="color: black!important;">
                                        <option value="">Choose Country</option>
                                    </select>
                                    <div class="reviewer_country_autocomplete"></div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend class="legend legend--line legend--heading">
                                    Your Email Address
                                </legend>

                                <div>
                                    <p class="note">We DO NOT spam and your email address WILL NOT be visible on website. We need an email address to contact you if there is a problem with your review.</p>
                                </div>

                                <div>
                                    <input type="text" name="reviewer_email" id="reviewer_email" value="" data-validate="email" data-validate-msg="Please provide your email address" />
                                </div>

                            </fieldset>

                            <fieldset class="submit">
                                <div style="margin-bottom: 20px;padding: 20px;background-color: maroon;color: white;font-size: 16px;display: none" id="errordiv">

                                </div>

                                <div>
{{--                                    <div class="txt--xsmall txt--xgrey">By clicking the submit button you agree to our <a href="/terms-of-use" target="_blank">Terms of Use</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a> and give us permission to use your review on our website.</div>--}}
                                    <button type="submit" name="reviewsubmit" id="reviewsubmit" class="btn btn--orange btn--autowidth btn--next extraform_submit">Submit Review</button>
                                </div>

                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        function validateForm() {

            let month = document.getElementById('month').value;
            let year = document.getElementById('year').value;
            let reviewtitle = document.getElementById('review_title').value;
            let review = document.getElementById('review').value;
            let reviewer_name = document.getElementById('reviewer_name').value;
            let country = document.getElementById('country-selector').value;
            let reviewer_email = document.getElementById('reviewer_email').value;

            document.getElementById('errordiv').style.display = 'none';
            if(month === '' || month === undefined){
                document.getElementById('errordiv').innerHTML = 'Month is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(year === '' || year === undefined){
                document.getElementById('errordiv').innerHTML = 'Year is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(reviewtitle === '' || reviewtitle === undefined){
                document.getElementById('errordiv').innerHTML = 'Review Title is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(review === '' || review.length < 50){
                document.getElementById('errordiv').innerHTML = 'Review description is required and must be atleast 50 characters long';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(reviewer_name === '' || reviewer_name === undefined){
                document.getElementById('errordiv').innerHTML = 'Review name is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(country === '' || country === undefined){
                document.getElementById('errordiv').innerHTML = 'Review country is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            if(reviewer_email === '' || reviewer_email === undefined){
                document.getElementById('errordiv').innerHTML = 'Review email is required';
                document.getElementById('errordiv').style.display = 'block';
                return false;
            }
            return true;
        }
    </script>
    <script>
        var select = document.getElementById("country-selector");

        var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");

        //console.log(countries);
        //console.log(select);

        for (var i = 0; i < countries.length; i++) {

            var option = document.createElement("option");
            //for every turn of the loop create an option tag
            //console.log(option);
            var txt = document.createTextNode(countries[i]);
            //for every turn of the loop create the inner text
            //console.log(txt);
            option.appendChild(txt);
            //for every turn of the loop put the words from txt inside the <option> tags
            //console.log(option);
            option.setAttribute("value", countries[i]); //for every turn of the loop set the value attribute to corresponding country name
            //console.log(option);
            select.insertBefore(option, select.lastChild);
            //console.log(select);

        }

    </script>
@endsection
