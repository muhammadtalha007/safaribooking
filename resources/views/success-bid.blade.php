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
                                        <li  class="done"  >
                                            <a href="{{url('bid-on-tour')}}/{{$user->id}}" target="_blank">
                            <span>
                                <svg width="14" height="12" viewBox="0 0 14 12" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 1.5s-4.645 4.56-7 9C3.72 8.513 1.5 7 1.5 7" stroke="#fff" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                                                Enter Your Details
                                            </a>
                                        </li>
                                        <li class="active"  >
                                            <div>
                                                <span>3</span>
                                                Operator Will accept or reject your bid
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shadowed-box enquiryform__head">

                                        <div class="row" style="margin-top: 50px;padding: 25px">
                                            <div class="col-md-12">
                                                <h1>Congratulations! Your bid added successfully</h1>
                                                <br>
                                                <p>The Operator {{$user->company_name}} will let you know about the decision of your bid on your email. Keep checking your email inbox, junk or spam folder.</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
        </div>

    </main>
@endsection
