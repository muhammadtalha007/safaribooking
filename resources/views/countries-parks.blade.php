@extends('layouts.landing-app')
@section('content')
    <form id="toursearchform2" action="{{url('filter-tours')}}" method="post" style="display: none">
        @csrf
        <input name="destination" id="destinationplus">
        <input name="tour_title" id="tour_titleplus">
        <input name="min_price" id="min_priceplus">
        <input name="max_price" id="max_priceplus">
        <input name="rating" id="ratingplus">
    </form>
    <form id="operatorsearchform2" action="{{url('filter-operator')}}" method="post" style="display: none">
        @csrf
        <input name="destination" id="destinationplus2">
        <input name="tour_title" id="operator_company_nameplus">
        {{--        <input name="officeIn[]" id="officeInplus">--}}
        <input name="rating" id="ratingplus2">
    </form>
    <main class="main">
        <div class="titlebar no-white">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-t-0">
                        <h1 class="serif">Countries &amp; Parks</h1>
                    </div>
                    <ol class="col col-0 col-t-12 hide show-t breadcrumbs">
                        <li>
                            You are here:
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="{{url('/')}}" title="SafariBookings.com">Home</a>
                        </li>
                        <li>
                            <span class="breadcrumbs__last" title="Countries">Countries</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="imgpagehead imgpagehead--margin-bottom hide show-t">
            <picture>
                <!--[if IE 9]>
                <video style="display: none;"><![endif]-->
                <source data-srcset="https://cloudfront.safaribookings.com/lib/namibia/tour/1184x259/Damaraland_030.jpg"
                        media="(min-width: 970px)" class="lazyload">
                <!--[if IE 9]></video><![endif]-->
                <img src="{{url('Damaraland_030.jpg')}}"
                     class="lazyload" alt=""/>
                <noscript>
                    <source srcset="https://cloudfront.safaribookings.com/lib/namibia/tour/1184x259/Damaraland_030.jpg"
                            media="(min-width: 970px)">
                    <img src="../cloudfront.safaribookings.com/lib/namibia/tour/976x305/Damaraland_030.jpg" alt=""/>
                </noscript>
            </picture>
            <div class="imgpagehead__extragrad hide show-d" style="left: 13.2%"></div>
            <div class="imgpagehead__extragrad hide show-t hide-d" style="left: 16.4%"></div>
            <div class="imgpagehead__overlay imgpagehead__overlay--countrydir">
                <h1 class="serif">Countries</h1>
                <p>
                    Learn more about the major safari countries, including their highlights, wildlife, best time to
                    visit and more.
                </p>
{{--                <div class="imgpagehead__overlay__video">--}}
{{--                    <div class="row" data-video="UEwuRUsb-iIGzhAK6">--}}
{{--                        <a href="#" data-start-video="1" data-video-overlay="Video: The 8 Major Safari Countries"--}}
{{--                           data-overlay-hash="video"--}}
{{--                           data-file="https://content.jwplatform.com/videos/UEwuRUsb-iIGzhAK6.mp4"--}}
{{--                           data-img="{{url('All-countries-704x396.jpg')}}"--}}
{{--                           data-img-small="https://cloudfront.safaribookings.com/assets/video/All-countries-464x261.jpg"--}}
{{--                           title="Learn more about the eight major safari countries in our video">--}}
{{--                            <img src="{{url('All-countries-704x396.jpg')}}"--}}
{{--                                 srcset="https://cloudfront.safaribookings.com/assets/video/All-countries-128x80-2x.jpg 2x"--}}
{{--                                 class="video-img" alt="Learn more about the eight major safari countries in our video"--}}
{{--                                 title="Learn more about the eight major safari countries in our video"/>--}}
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <div class="video-overlay">--}}
{{--                                <div>--}}
{{--                                    <p>Video</p>--}}
{{--                                    <b>The Major Safari Countries</b>--}}
{{--                                </div>--}}
{{--                                <div class="video-time">06:36</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

        <div class="container container--main container--countriesparks show hide-t">
            <div class="row">
                <div class="col col-12">
                    <div class="row content content--tabbed">
                        <div class="tabs onlymob">
                            <div class="tabs--countriesparks">
                                <a href="#" role="tab" data-tab-ref="countries" class="active" title="Countries">Countries</a>
                                <a href="#" role="tab" data-tab-ref="parks" title="Parks &amp; Reserves">Parks &amp;
                                    Reserves</a>
                            </div>
                        </div>
                        <div class="col col-12 col-t-6 show-t no-gutter" data-tab="countries">
                            <div class="row onlymob country-video">
                                <div id="jwplayer-countrydir" class="jwvideo lazyload"
                                     data-file="https://content.jwplatform.com/videos/UEwuRUsb-iIGzhAK6.mp4"
                                     data-img="https://cloudfront.safaribookings.com/assets/video/All-countries-704x396.jpg"
                                     data-img-small="../cloudfront.safaribookings.com/assets/video/All-countries-464x261.jpg"></div>
                                <div class="video-overlay" id="jwplayer-overlay">
                                    <div>
                                        <b>Video</b>
                                        <i class="sbi sbi--play-button-large"></i>
                                        <p>The 8 Major Safari Countries</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12 countriesparks-intro">
                                    <h2>Top Rated Safari Countries</h2>
                                    <p>Learn about the country's highlights, wildlife, best time to visit and more.</p>
                                </div>
                            </div>
                            <ul class="navigation-list">
                                <li><a href="botswanad4b4.html?_menu" title="Botswana">Botswana</a></li>
                                <li><a href="ethiopiad4b4.html?_menu" title="Ethiopia">Ethiopia</a></li>
                                <li><a href="kenyad4b4.html?_menu" title="Kenya">Kenya</a></li>
                                <li><a href="madagascard4b4.html?_menu" title="Madagascar">Madagascar</a></li>
                                <li><a href="malawid4b4.html?_menu" title="Malawi">Malawi</a></li>
                                <li><a href="mozambiqued4b4.html?_menu" title="Mozambique">Mozambique</a></li>
                                <li><a href="namibiad4b4.html?_menu" title="Namibia">Namibia</a></li>
                                <li><a href="rwandad4b4.html?_menu" title="Rwanda">Rwanda</a></li>
                                <li><a href="south-africad4b4.html?_menu" title="South Africa">South Africa</a></li>
                                <li><a href="swazilandd4b4.html?_menu" title="Swaziland">Swaziland</a></li>
                                <li><a href="tanzaniad4b4.html?_menu" title="Tanzania">Tanzania</a></li>
                                <li><a href="ugandad4b4.html?_menu" title="Uganda">Uganda</a></li>
                                <li><a href="zambiad4b4.html?_menu" title="Zambia">Zambia</a></li>
                                <li><a href="zimbabwed4b4.html?_menu" title="Zimbabwe">Zimbabwe</a></li>
                            </ul>
                        </div>
                        <div class="col col-12 col-t-6 hide show-t no-gutter" data-tab="parks">
                            <div class="row">
                                <div class="col col-12 countriesparks-intro">
                                    <h2>Parks &amp; Reserves</h2>
                                    <p>Discover all major national parks & game reserves per country.</p>
                                </div>
                            </div>
                            <ul class="navigation-list">
                                <li><a href="botswana/parks584e.html?_dir" title="14 Botswana Parks">Botswana Parks</a>
                                    <span>14 parks</span></li>
                                <li><a href="ethiopia/parks584e.html?_dir" title="9 Ethiopia Parks">Ethiopia Parks</a>
                                    <span>9 parks</span></li>
                                <li><a href="kenya/parks584e.html?_dir" title="26 Kenya Parks">Kenya Parks</a> <span>26 parks</span>
                                </li>
                                <li><a href="madagascar/parks584e.html?_dir" title="21 Madagascar Parks">Madagascar
                                        Parks</a> <span>21 parks</span></li>
                                <li><a href="malawi/parks584e.html?_dir" title="9 Malawi Parks">Malawi Parks</a> <span>9 parks</span>
                                </li>
                                <li><a href="mozambique/parks584e.html?_dir" title="8 Mozambique Parks">Mozambique
                                        Parks</a> <span>8 parks</span></li>
                                <li><a href="namibia/parks584e.html?_dir" title="13 Namibia Parks">Namibia Parks</a>
                                    <span>13 parks</span></li>
                                <li><a href="rwanda/parks584e.html?_dir" title="4 Rwanda Parks">Rwanda Parks</a> <span>4 parks</span>
                                </li>
                                <li><a href="south-africa/parks584e.html?_dir" title="43 South Africa Parks">South
                                        Africa Parks</a> <span>43 parks</span></li>
                                <li><a href="swaziland/parks584e.html?_dir" title="6 Swaziland Parks">Swaziland
                                        Parks</a> <span>6 parks</span></li>
                                <li><a href="tanzania/parks584e.html?_dir" title="13 Tanzania Parks">Tanzania Parks</a>
                                    <span>13 parks</span></li>
                                <li><a href="uganda/parks584e.html?_dir" title="10 Uganda Parks">Uganda Parks</a> <span>10 parks</span>
                                </li>
                                <li><a href="zambia/parks584e.html?_dir" title="14 Zambia Parks">Zambia Parks</a> <span>14 parks</span>
                                </li>
                                <li><a href="zimbabwe/parks584e.html?_dir" title="8 Zimbabwe Parks">Zimbabwe Parks</a>
                                    <span>8 parks</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container--main countriesparks-title hide show-t">
            <div class="row">
                <div class="col col-12">
                    <h2>Safari Countries</h2>
                </div>
            </div>
        </div>

        <div class="countriesparks-list hide show-t">


        @foreach(\App\Countries::all() as $country)
            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="kgVWYbpY-iIGzhAK6">
                            <img src="{{env('ADMIN_URL')}}/view-country-image/{{$country->id}}" title="{{$country->name}}"
                                 alt="{{$country->name}}"/>
                    </div>

                    <div class="col col-t-9">
                        <h2>{{$country->name}}</h2>

                        <p>{{$country->description}}</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                {{$country->rates}}
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                {{$country->best_time}}
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> {{$country->high_seasons}}
                            </li>
                        </ul>
                        <a onclick="searchToursFunc('{{$country->name}}')" class="btn btn--next btn--roundwhite btn--autowidth"
                           > {{$country->name}} Tours</a>
                    </div>


                </div>

            </div>
                @endforeach
        </div>


    </main>
    <script>
        function searchToursFunc(country) {
            document.getElementById('destinationplus').value = country;
            document.getElementById('tour_titleplus').value = '';
            document.getElementById('min_priceplus').value = 0;
            document.getElementById('max_priceplus').value = 100000;
            document.getElementById('ratingplus').value = '';
            document.getElementById('toursearchform2').submit();
        }
        function searchOperatorsFunc(country) {
            document.getElementById('destinationplus2').value = country;
            document.getElementById('operator_company_nameplus').value = '';
            // document.getElementById('officeInplus').value = '';
            document.getElementById('rating').value = '';
            document.getElementById('operatorsearchform2').submit();
        }
        function openTab(name) {
            document.getElementById('overview-tab').style.display = 'none';
            document.getElementById('tours-tab').style.display = 'none';
            document.getElementById('reviews-tab').style.display = 'none';
            document.getElementById('company-profile-tab').style.display = 'none';
            document.getElementById('destinations-tab').style.display = 'none';
            document.getElementById('contact-tab').style.display = 'none';
            document.getElementById(name + '-tab').style.display = 'block';
            document.getElementById('overview-link').classList.remove('active');
            document.getElementById('tours-link').classList.remove('active');
            document.getElementById('reviews-link').classList.remove('active');
            document.getElementById('company-profile-link').classList.remove('active');
            document.getElementById('destinations-link').classList.remove('active');
            document.getElementById('contact-link').classList.remove('active');
            document.getElementById(name + '-link').classList.add('active');
        }
    </script>
@endsection
