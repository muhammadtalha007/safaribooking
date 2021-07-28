@extends('layouts.landing-app')
@section('content')
    <?php
    $countriesList = [
//        "Botswana",
//        "Congo (DRC)",
//        "Ethiopia",
        "Kenya",
//        "Madagascar",
//        "Malawi",
//        "Mozambique",
//        "Namibia",
//        "Rwanda",
//        "South Africa",
//        "Swaziland",
        "Tanzania",
        "Uganda",
//        "Zambia",
//        "Zimbabwe"
    ];

    ?>
    <style>
        #fixedbutton {
            /*position: fixed;*/
            /*bottom: 0px;*/
            /*left: 50%;*/
            z-index: 999999999999999;
            width: 250px;
            /*position: fixed;*/
        }
    </style>
    <script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('jquery/3.5.1/jquery.min.js')}}"></script>

    <main class="main">

        <script>
            var filterbyhash = true;
            if (!window.location.hash || window.location.hash == '#filtersopen' || document.location.hash == '#searchopen') {
                filterbyhash = false;
            }
        </script>

        {{--        <div class="messagebox messagebox--orange messagebox--bar">--}}
        {{--            <a href="coronavirus.html" class="nowrap">--}}
        {{--                <i class="sbi sbi--info-blue"></i>--}}
        {{--                Coronavirus (COVID-19) Support--}}
        {{--            </a>--}}
        {{--        </div>--}}
        <div class="titlebar titlebar--operators">
            <div class="container" data-filterbtn-txt="Filters">
                <div class="row hide show-t">
                    <ol class="col col-0 col-t-12 breadcrumbs">
                        <li>
                            You are here:
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="{{url('')}}" title="SafariBookings.com">Home</a>
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="{{url('operators')}}" title="Tour Operators" class="breadcrumbs__last"><span>Tour Operators</span></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container container--main container--operators-directory container--directory">
            <div class="row">

                <div class="col col-0 col-d-3 filters ">
                    <form action="{{url('filter-operator')}}" method="post" id="searchingform">
                        @csrf
                    <div class="filters__close">Filter Options<a href="#"><i class="sbi sbi--cross"></i></a></div>
                    <div class="filters__all" data-role="filters-scroll">
                        <div class="filters__block filters__block--tourpreferences messagebox  messagebox--yellow  ">
                            <h3 class="serif">Your Safari</h3>
                            <label for="destination">Destination</label>
                            <select id="destination" type="text" value="" name="destination" style="color: black">
                                <option value="">Not selected</option>
                                @foreach(\App\Countries::all() as $country)
                                    @if(!empty($destination))
                                    <option value="{{$country->name}}" {{$destination == $country->name ? 'selected' : ''}}>{{$country->name}}</option>
                                    @else
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endif
                                @endforeach
                            </select>

                        </div>

                        <div class="filters__block" data-var='score'>
                            <h3>Rating</h3>

                            <ul class="uncheckable-radio">
                                <li class="filters__block__stars"><label for="cb30" title="5 stars & up">
                                        @if(!empty($rating))
                                        <input type="radio" name="rating" id="cb30" data-var="5" value="5" {{$rating == 5 ? 'checked' : ''}}/>
                                        @else
                                            <input type="radio" name="rating" id="cb30" data-var="5" value="5" />
                                        @endif

                                        <span><div
                                                class="stars    large    " title="5 / 5" >
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars5"><span></span></span></label></li>
                                <li class="filters__block__stars"><label for="cb31" title="4 stars & up">
                                        @if(!empty($rating))
                                            <input type="radio" name="rating" id="cb31" data-var="4" value="4" {{$rating == 4 ? 'checked' : ''}}>

                                        @else
                                            <input type="radio" name="rating" id="cb31" data-var="4" value="4">

                                        @endif
                                        <span><div
                                                class="stars    large    " title="4 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars4"> <span></span></span></label></li>
                                <li class="filters__block__stars"><label for="cb32" title="3 stars & up">
                                        @if(!empty($rating))
                                            <input type="radio" name="rating" id="cb32" data-var="3" value="3" {{$rating == 3 ? 'checked' : ''}} />

                                        @else
                                            <input type="radio" name="rating" id="cb32" data-var="3" value="3" />

                                        @endif

                                        <span><div
                                                class="stars    large    " title="3 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars3"> <span></span></span></label></li>
                                <li class="filters__block__stars"><label for="cb33" title="2 stars & up">
                                        @if(!empty($rating))
                                            <input
                                                type="radio" name="rating" id="cb33" data-var="2" value="2" {{$rating == 2 ? 'checked' : ''}}/>
                                        @else
                                            <input
                                                type="radio" name="rating" id="cb33" data-var="2" value="2"/>
                                        @endif
                                       <span><div
                                                class="stars    large    " title="2 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars2"> <span></span></span></label></li>
                                <li class="filters__block__stars"><label for="cb34" title="1 star & up">
                                        @if(!empty($rating))
                                            <input
                                                type="radio" name="rating" id="cb34" data-var="1"  value="1" {{$rating == 1 ? 'checked' : ''}}/>
                                        @else
                                            <input
                                                type="radio" name="rating" id="cb34" data-var="1"  value="1"/>
                                        @endif
                                        <span><div
                                                class="stars    large    " title="1 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars1"><span></span></span></label></li>
                            </ul>
                        </div>


                        <div class="filters__block filters__block--operator" data-var="operator">
                            <h3>Filter by Operator</h3>

{{--                            <form method="POST" action="#" class="row">--}}
                                <div class="col col-12 no-gutter"><input value="{{$operator ?? ''}}" type="text" data-types="operators"
                                                                        data-labels="true" data-shadow="true"
                                                                        data-title="Select operator below"
                                                                        autocomplete="off" data-limit="6" name="operator_company_name" placeholder="type operator name and press apply filters"/></div>

{{--                            </form>--}}

                            <div class="autocomplete-holder"></div>

                        </div>
                        <div class="filters__block" data-var="offices_in">
                            <h3>Office In</h3>
                            <ul>
                                @foreach($offices as $key=>$office)
                                <li class="filters__block__check  " data-hide="{{$key}}">

                                        @if(!empty($officesIn))
                                        <label for="cboffices_in{{$key}}">
                                        <input
                                            type="checkbox" id="cboffices_in{{$key}}" data-parent=""
                                            data-var="op_australia" name="officeIn[]" {{in_array($office->country, $officesIn) ? 'checked' : ''}} value="{{$office->country}}"/>{{$office->country}}</label>
                                    @else
                                        <label for="cboffices_in{{$key}}">
                                            <input
                                                type="checkbox" id="cboffices_in{{$key}}" data-parent=""
                                                data-var="op_australia" name="officeIn[]" value="{{$office->country}}"/>{{$office->country}}</label>
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                    </form>
                    <div class="filters__apply hide-d">
                        <a href="#" class="btn btn--orange btn--next" data-txt="Show X Operator">
                            Show Operators
                        </a>
                    </div>
                    <script type="text/javascript">
                        currency = "USD";
                        currency_ranges = ["$1 to $150", "$151 to $300", "$301 to $500", "$501 to $750", "$751 and higher"];    </script>
                </div>
                <div class="col col-12 col-d-9 list--operators">
                    <div class="row row-header">
                        <div class="col col-12">
                            <h1 class="serif list--title">Safari Tour Operators</h1>
                            <br>
                            @if(!empty($destination))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Destination: {{$destination ?? ''}}</span>
                            @endif
                            @if(!empty($rating))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Rating: {{$rating ?? ''}}</span>
                            @endif
                            @if(!empty($operator))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Operator: {{$operator ?? ''}}</span>
                            @endif
                            @if(!empty($officesIn))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Offices In : @foreach($officesIn as $officeq) {{$officeq ?? ''}} |  @endforeach</span>
                            @endif
                            <br>
                            <br>
                            <a id="fixedbutton" href="#" onclick="document.getElementById('searchingform').submit()" class="btn btn--orange search btn--next" style="background: black;border: black">Apply Filters
                            </a>
                            @if($filtered == true)
                                <a id="fixedbutton" style="background: maroon" href="{{url('operators')}}" class="btn btn-secondary search">Remove Filters
                                </a>
                            @endif
                        </div>
                        <div class="row row-d-0">
                            <div class="col col-12">
                                <button class="btn btn--blue btn--filter"><i class="sbi sbi--filter"></i>Filters
                                </button>
                                <button class="btn btn--blue btn--filter btn--filter-whereto"><i
                                        class="sbi sbi--map-pin-blue sbi--xmedium"></i>Where To
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 reload selected-filters hide">
                            <span>Selected filters:</span>
                            <div class="selected-filters__item selected-filters__item--clear">Clear All Filters</div>
                        </div>
                    </div>
                    <div class="row list--numbers  reload  ">
                        <div class="col col-12 titlebar__sub">
                            Finding Tour Operators...
                        </div>
                        <div class="col col-12 titlebar__sub  hide  ">
                            <b>1-10</b> of <b class="itemcount" data-count="3514">3,514</b> Safari tour operators
                        </div>
                    </div>
                    <ul class="row list__snippets" id="filteredresults">
                        @foreach($users as $user)
                        <li class="col col-12 list__item" data-id="1322">
                            <script type="text/javascript">if (!filterbyhash) {
                                    document.querySelector('li[data-id="1322"]').classList.remove('reload');
                                } </script>
                            <a href="{{url('operator-profile')}}/{{$user->id}}" class="row " target="_blank" data-id="1322" data-pos="1"
                               title="{{$user->company_name}}">
                                <span class="favorite-save hide-t  " data-id="1322" data-type="operator"
                                                     title="Add to your favorites list">
                                <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                      alt=""/>
                                   </span>
                                <div class="hide-t list__item--image__full  ">
                                    <picture>
                                        <img
                                            src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                            srcset="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                            alt="{{$user->company_name}}"/>
                                        <noscript>
                                            <img
                                                src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                srcset="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                title="{{$user->company_name}}"
                                                alt="{{$user->company_name}}">
                                        </noscript>

                                    </picture>
                                    <h2 class="serif">
                                       {{$user->company_name}}
                                    </h2>
                                </div>
                                <div class="col col-0 col-t-2-5 col-d-2-5 col-w-3 picture-holder">
                                    <div class="picture-frame">
                                        <div>
                                            <img
                                                src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                srcset="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                title="{{$user->company_name}}"
                                                alt="{{$user->company_name}}"/>
                                            <noscript>
                                                <img
                                                    src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                    title=" {{$user->company_name}}"
                                                    alt=" {{$user->company_name}}">
                                            </noscript>
                                        </div>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                                <div class="col col-12 col-t-7 col-d-6-5 col-w-6 data-holder">
                                    <h2 class="hide show-t with-save-btn">
                <span>

                         {{$user->company_name}}
                                    </span>
                                        <span class="favorite-save hide show-ti  " data-id="1322" data-type="operator"
                                              title="Add to your favorites fist">

                    <img class="svg svg--shadowed"
                         src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt=""/>
                </span>
                                    </h2>
                                    <div class="review-summary--oneline hide show-t">
                                        <div class="stars      " title="5 / 5">
                                            @for($i=0;$i<$user->rating;$i++)
                                            <i class="sbi sbi--star"></i>
                                            @endfor
                                        </div>
                                        <span class="review-score"><em>{{$user->rating}}</em>/5</span> &nbsp;&ndash;&nbsp;{{$user->reviews}} Reviews
                                    </div>
                                    <dl>
                                        <dt>Office In:</dt>
                                        <dd class="officesin">
                                            <div class="country-with-flag  " title="Countries">
                                                @foreach($user->offices as $key=> $office)
                                                    @if(count($user->offices)-1 == $key)
                                                        <span>
                                                        {{$office->country}}
                                                 </span>
                                                    @else
                                                        <span>
                                                        {{$office->country}} |
                                                 </span>
                                                    @endif

                                                @endforeach
                                            </div>
                                        </dd>
                                        <dt>Price Range:</dt>
                                        <dd><strong>{{$user->pricerange}}</strong> per person <strong>per
                                                day</strong> <span class="txt--xsmall txt--xgrey">(USD)</span></dd>
                                        <dt>Tour Types:</dt>
                                        <dd>{{$user->tourtype}}</dd>
                                        <dt>Destinations:</dt>
                                        <dd>
                                            <div class="country-with-flag small  " title="Kenya">
                                                @foreach($user->destinations as $key=> $dest)
                                                    @if(count($user->destinations)-1 == $key)
                                                        <span>
                                                        {{$dest->country}}
                                                 </span>
                                                    @else
                                                        <span>
                                                        {{$dest->country}} |
                                                 </span>
                                            @endif

                                            @endforeach
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col col-0 col-t-2-5 col-d-3 logo-holder">
                                    <img src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$user->id}}" class="operator-logo" title="{{$user->company_name}}" alt="{{$user->company_name}}"/>
                                </div>
                            </a>
                            <div class="row">
                                <div class="col col-0 col-t-2-5 col-w-3">&nbsp;</div>
                                <div class="col col-12 col-t-9 col-w-9 ">
                                    <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small hide show-t">
                                        @if(count($user->tours) == 0)
                                            <li><a href="#"
                                                   title="Not found">No tour found!</a>
                                            </li>
                                        @endif
                                        @foreach($user->tours as $tour)
                                            <li><a href="{{url('tour')}}/{{$tour->id}}/details"
                                                   title="{{$tour->title}}">{{$tour->total_days}}-Day
                                                    {{$tour->title}}</a> <span
                                                    class="txt--grey">(from ${{$tour->price}} pp)</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{url('operator-tours')}}/{{$user->id}}"
                                       class="btn btn--orange btn--small btn--autowidth btn--next"
                                       title="All tours offered by Pearl Afric Tours &amp; Travel" style="background: black;border: black;padding-top: 3px"> All {{count($user->tours)}}
                                        Tours </a><span
                                        class="behind-btn"> - Offered by {{$user->company_name}}</span>
{{--                                    <img--}}
{{--                                        src="../cloudfront.safaribookings.com/operators/logos/logo_1_1322_5ff9f8880e015.gif"--}}
{{--                                        class="operator-logo operator-logo-m show hide-t"/>--}}
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


    </main>
    <script>

        function getfilteredResults() {
            let filteredresults = document.getElementById('filteredresults').innerHTML = '';
            let destination = document.getElementById('destination').value;
            $.ajax({
                type: "POST",
                url: `{{url('filter-operator')}}`,
                data: { _token: "{{csrf_token()}}",destination: destination},
                success: function (response) {
                    console.log(response)
                }
            });
        }
    </script>
{{--    <script>--}}
{{--        var select = document.getElementById("destination");--}}
{{--        var select2 = document.getElementById("leaderMultiSelctdropdown");--}}

{{--        var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");--}}

{{--        //console.log(countries);--}}
{{--        //console.log(select);--}}

{{--        for (var i = 0; i < countries.length; i++) {--}}

{{--            var option = document.createElement("option");--}}
{{--            //for every turn of the loop create an option tag--}}
{{--            //console.log(option);--}}
{{--            var txt = document.createTextNode(countries[i]);--}}
{{--            //for every turn of the loop create the inner text--}}
{{--            //console.log(txt);--}}
{{--            option.appendChild(txt);--}}
{{--            //for every turn of the loop put the words from txt inside the <option> tags--}}
{{--            //console.log(option);--}}
{{--            option.setAttribute("value", countries[i]); //for every turn of the loop set the value attribute to corresponding country name--}}
{{--            //console.log(option);--}}
{{--            select.insertBefore(option, select.lastChild);--}}
{{--            //console.log(select);--}}

{{--        }--}}
{{--    </script>--}}
@endsection
