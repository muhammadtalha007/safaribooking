@extends('layouts.landing-app')
@section('content')
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
                            <a href="index.html" title="SafariBookings.com">Home</a>
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
                    <h2>Top Rated Safari Countries</h2>
                </div>
            </div>
        </div>

        <div class="countriesparks-list hide show-t">

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5">
{{--                        <a href="javascript:void(0)" >--}}
                            <img src="{{url('African-elephants-Botswana.png')}}"
                                 title="Botswana" alt="Botswana"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>Botswana Video</span>--}}
{{--                            <div class="video-time">03:17</div>--}}
{{--                        </a>--}}
                    </div>

                    <div class="col col-t-9">
                        <h2>Botswana</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.8 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                            </div>
                            <span class="review-score"><em>4.8</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="botswana/reviews.html" title="301 Reviews about Botswana">301 Reviews</a>
                        </div>
                        <p>Botswana is the leader in low-impact, upmarket tourism. This eco-friendly approach promotes a
                            true wilderness experience in this unspoiled country. The beauty of the Okavango Delta is
                            best discovered by mokoro canoe, while abundant wildlife can be encountered in Chobe and
                            Moremi parks.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $184 to $1,002 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                Mar-May (dry parks), Jun-Sep (Okavango, Chobe)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> July to October (Only Chobe gets crowded)
                            </li>
                        </ul>

{{--                        <a href="botswana.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Botswana">More About Botswana</a>--}}
                        <a href="tours/botswana.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="459 Botswana Tours"><b>459</b> Botswana Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Botswana Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="chobe.html" title="Chobe National Park">Chobe National Park</a></li>--}}
{{--                            <li><a href="moremi.html" title="Moremi Game Reserve">Moremi Game Reserve</a></li>--}}
{{--                            <li><a href="okavango.html" title="Okavango Delta">Okavango Delta</a></li>--}}
{{--                            <li><a href="kalahari.html" title="Central Kalahari Game Reserve">Central Kalahari Game--}}
{{--                                    Reserve</a></li>--}}
{{--                            <li><a href="kgalagadi.html" title="Kgalagadi Transfrontier Park">Kgalagadi Transfrontier--}}
{{--                                    Park</a></li>--}}
{{--                            <li><a href="makgadikgadi.html" title="Makgadikgadi Pans National Park">Makgadikgadi Pans--}}
{{--                                    National Park</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="botswana/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 14 Parks &amp; Reserves">All <b>14</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="">
                        <img
                            src="{{url('Simien_Mountains_National_Park_002.jpg')}}"
                            data-srcset="https://cloudfront.safaribookings.com/lib/ethiopia/208x130/Simien_Mountains_National_Park_002@2x.jpg 2x"
                            class="lazyload video-thumb"/>
                        &nbsp;
                    </div>

                    <div class="col col-t-9">
                        <h2>Ethiopia</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.3 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.3</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="ethiopia/reviews.html" title="24 Reviews about Ethiopia">24 Reviews</a>
                        </div>
                        <p>Awash in cultural attractions and dramatic scenery, Ethiopia is far from ordinary. The
                            wildlife here does not appear anywhere else on earth. Memories of being surrounded by
                            hundreds of gelada monkeys with their swirling golden manes and bold red chests will last a
                            lifetime. As will driving the continent’s highest road to see an Ethiopian wolf – Africa’s
                            most endangered carnivore.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $250 to $600 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                Oct to Dec (Beautiful scenery, little rain)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> Oct to Jan (Some parks get busy)
                            </li>
                        </ul>

{{--                        <a href="ethiopia.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Ethiopia">More About Ethiopia</a>--}}
                        <a href="tours/ethiopia.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="34 Ethiopia Tours"><b>34</b> Ethiopia Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Ethiopia Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="bale-mountains.html" title="Bale Mountains National Park">Bale Mountains--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="simien-mountains.html" title="Simien Mountains National Park">Simien Mountains--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="awash.html" title="Awash National Park">Awash National Park</a></li>--}}
{{--                            <li><a href="abijatta-shalla.html" title="Abijatta-Shalla National Park">Abijatta-Shalla--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="chebera-churchura.html" title="Chebera-Churchura National Park">Chebera-Churchura--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="lake-ziway.html" title="Lake Ziway">Lake Ziway</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="ethiopia/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 9 Parks &amp; Reserves">All <b>9</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="kgVWYbpY-iIGzhAK6">
{{--                        <a href="javascript:void(0)" data-start-video="1" data-video-overlay="Kenya Video"--}}
{{--                           data-overlay-hash="vkenya" class="video-thumb" title="Watch Our Kenya Video">--}}
                            <img src="{{url('kenya.jpg')}}" title="Kenya"
                                 alt="Kenya"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>Kenya Video</span>--}}
{{--                            <div class="video-time">02:59</div>--}}
{{--                        </a>--}}
                    </div>

                    <div class="col col-t-9">
                        <h2>Kenya</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.6 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.6</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="kenya/reviews.html" title="890 Reviews about Kenya">890 Reviews</a>
                        </div>
                        <p>Kenya is a top wildlife destination, recommended especially for those booking a first-time
                            safari. The Masai Mara offers excellent <a href='#' class='wildlife'
                                                                       data-val='Big_cats.html'>big cat</a> encounters
                            and is the setting for the yearly wildebeest migration. Palm-lined beaches offer a perfect
                            place to relax after an action packed safari.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $113 to $528 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                June to October, January to February
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> July to November, January and February
                            </li>
                        </ul>

{{--                        <a href="kenya.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Kenya">More About Kenya</a>--}}
                        <a href="tours/kenya.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="2,227 Kenya Tours"><b>2,227</b> Kenya Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Kenya Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="amboseli.html" title="Amboseli National Park">Amboseli National Park</a></li>--}}
{{--                            <li><a href="nakuru.html" title="Lake Nakuru National Park">Lake Nakuru National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="masai-mara.html" title="Masai Mara National Reserve">Masai Mara National--}}
{{--                                    Reserve</a></li>--}}
{{--                            <li><a href="samburu.html" title="Samburu National Reserve">Samburu National Reserve</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="buffalo-springs.html" title="Buffalo Springs National Reserve">Buffalo Springs--}}
{{--                                    National Reserve</a></li>--}}
{{--                            <li><a href="tsavo-east.html" title="Tsavo East National Park">Tsavo East National Park</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <a href="kenya/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 26 Parks &amp; Reserves">All <b>26</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="">
                        <img
                            src="{{url('Andasibe-Mantadibe_National_Park_018.jpg')}}"
                            data-srcset="https://cloudfront.safaribookings.com/lib/madagascar/208x130/Andasibe-Mantadibe_National_Park_018@2x.jpg 2x"
                            class="lazyload video-thumb"/>
                        &nbsp;
                    </div>

                    <div class="col col-t-9">
                        <h2>Madagascar</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.4 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.4</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="madagascar/reviews.html" title="21 Reviews about Madagascar">21 Reviews</a>
                        </div>
                        <p>While many visitors to Madagascar come for the beautiful beaches, the island with its 50
                            national parks and reserves is nothing short of a top ecotourism destination. If you like an
                            active holiday, Madagascar won’t disappoint as all wildlife viewing is done on foot. For a
                            true adventure, you can even go out at night, looking for animals by flashlight.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $162 to $1,261 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                August to November (Less rainfall)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> July, August and December (Many parks get busy)
                            </li>
                        </ul>

{{--                        <a href="madagascar.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Madagascar">More About Madagascar</a>--}}
                        <a href="tours/madagascar.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="21 Madagascar Tours"><b>21</b> Madagascar Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Madagascar Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="andasibe-mantadia.html" title="Andasibe-Mantadia National Park">Andasibe-Mantadia--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="bemaraha.html" title="Bemaraha National Park">Bemaraha National Park</a></li>--}}
{{--                            <li><a href="isalo.html" title="Isalo National Park">Isalo National Park</a></li>--}}
{{--                            <li><a href="ranomafana.html" title="Ranomafana National Park">Ranomafana National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="amber-mountain.html" title="Amber Mountain National Park">Amber Mountain--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="ankarana.html" title="Ankarana Special Reserve">Ankarana Special Reserve</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <a href="madagascar/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 21 Parks &amp; Reserves">All <b>21</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="">
                        <img
                            src="{{url('Liwonde_National_Park_015.jpg')}}"
                            data-srcset="https://cloudfront.safaribookings.com/lib/malawi/208x130/Liwonde_National_Park_015@2x.jpg 2x"
                            class="lazyload video-thumb"/>
                        &nbsp;
                    </div>

                    <div class="col col-t-9">
                        <h2>Malawi</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starempty"></i>
                            </div>
                            <span class="review-score"><em>4.0</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="malawi/reviews.html" title="11 Reviews about Malawi">11 Reviews</a>
                        </div>
                        <p>Malawi’s main tourist attraction is enormous Lake Malawi, with its beaches and water-based
                            activities. The country also offers a range of safari options. Lovely Liwonde National Park
                            has a winding river ideal for boat trips and seeing lots of elephants. Majete Wildlife
                            Reserve is Malawi’s top <a href='#' class='wildlife' data-val='Big_5.html'>Big Five</a>
                            destination. The rolling green hills of Nyika National Park are ideal for walking.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $235 to $845 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                July to October (Dry bush and animals easier to find)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> Jul to Oct (Some parks are busy, high-season rates)
                            </li>
                        </ul>

{{--                        <a href="malawi.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Malawi">More About Malawi</a>--}}
                        <a href="tours/malawi.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="34 Malawi Tours"><b>34</b> Malawi Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Malawi Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="liwonde.html" title="Liwonde National Park">Liwonde National Park</a></li>--}}
{{--                            <li><a href="majete.html" title="Majete Wildlife Reserve">Majete Wildlife Reserve</a></li>--}}
{{--                            <li><a href="nyika.html" title="Nyika National Park">Nyika National Park</a></li>--}}
{{--                            <li><a href="kasungu.html" title="Kasungu National Park">Kasungu National Park</a></li>--}}
{{--                            <li><a href="kuti.html" title="Kuti Wildlife Reserve">Kuti Wildlife Reserve</a></li>--}}
{{--                            <li><a href="lengwe.html" title="Lengwe National Park">Lengwe National Park</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="malawi/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 9 Parks &amp; Reserves">All <b>9</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="">
                        <img
                            src="{{url('Ponta_do_Ouro_008.jpg')}}"
                            data-srcset="https://cloudfront.safaribookings.com/lib/mozambique/208x130/Ponta_do_Ouro_008@2x.jpg 2x"
                            class="lazyload video-thumb"/>
                        &nbsp;
                    </div>

                    <div class="col col-t-9">
                        <h2>Mozambique</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="3.7 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                                <i class="sbi sbi--starempty"></i>
                            </div>
                            <span class="review-score"><em>3.7</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="mozambique/reviews.html" title="7 Reviews about Mozambique">7 Reviews</a>
                        </div>
                        <p>Mozambique’s main attractions are its islands and its endless, largely undeveloped coastline.
                            The Quirimbas and Bazaruto archipelagos are great to relax on the beach, and to see some
                            amazing marine life. Maputo Special Reserve is an excellent spot for ocean safaris, as well
                            as for seeing elephants and other terrestrial wildlife in a coastal setting. Niassa and
                            Gorongosa both have enormous potential to become top wildlife destinations with four of the
                            <a href='#' class='wildlife' data-val='Big_5.html'>Big Five</a> present, though tourist
                            facilities are limited at present. </p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $155 to $729 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                July to October (It&#039;s dry and animals are easy to find)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> Never (Most parks never get busy)
                            </li>
                        </ul>

{{--                        <a href="mozambique.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Mozambique">More About Mozambique</a>--}}
                        <a href="tours/mozambique.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="36 Mozambique Tours"><b>36</b> Mozambique Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Mozambique Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="gorongosa.html" title="Gorongosa National Park">Gorongosa National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="banhine.html" title="Banhine National Park">Banhine National Park</a></li>--}}
{{--                            <li><a href="gile.html" title="Gilé National Reserve">Gilé National Reserve</a></li>--}}
{{--                            <li><a href="limpopo.html" title="Limpopo National Park">Limpopo National Park</a></li>--}}
{{--                            <li><a href="maputo-sr.html" title="Maputo Special Reserve">Maputo Special Reserve</a></li>--}}
{{--                            <li><a href="marromeu.html" title="Marromeu National Reserve">Marromeu National Reserve</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <a href="mozambique/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 8 Parks &amp; Reserves">All <b>8</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="Nynb81cp-iIGzhAK6">
{{--                        <a href="javascript:void(0)" data-start-video="1" data-video-overlay="Namibia Video"--}}
{{--                           data-overlay-hash="vnamibia" class="video-thumb" title="Watch Our Namibia Video">--}}
                            <img src="{{url('Desert-elephants-Namibia.png')}}" title="Namibia"
                                 alt="Namibia"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>Namibia Video</span>--}}
{{--                            <div class="video-time">03:13</div>--}}
{{--                        </a>--}}
                    </div>

                    <div class="col col-t-9">
                        <h2>Namibia</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.5 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.5</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="namibia/reviews.html" title="183 Reviews about Namibia">183 Reviews</a>
                        </div>
                        <p>Namibia is characterized by its desert habitat. The harsh environment forms a magnificent
                            backdrop for a different kind of safari. Animal populations are smaller, but sightings in
                            this sparse setting tend to be rewarding. Not to be missed is Etosha Pan, the largest salt
                            pan in Africa and a seasonal wildlife magnet.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $175 to $859 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                June to October (All parks)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> July to October (Etosha gets crowded)
                            </li>
                        </ul>

{{--                        <a href="namibia.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Namibia">More About Namibia</a>--}}
                        <a href="tours/namibia.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="224 Namibia Tours"><b>224</b> Namibia Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Namibia Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="etosha.html" title="Etosha National Park">Etosha National Park</a></li>--}}
{{--                            <li><a href="namib-naukluft.html" title="Namib-Naukluft National Park">Namib-Naukluft--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="skeleton-coast.html" title="Skeleton Coast National Park">Skeleton Coast--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="ai-ais.html" title="|Ai-|Ais Richtersveld Transfrontier Park">|Ai-|Ais--}}
{{--                                    Richtersveld Transfrontier Park</a></li>--}}
{{--                            <li><a href="bwabwata.html" title="Bwabwata National Park">Bwabwata National Park</a></li>--}}
{{--                            <li><a href="damaraland.html" title="Damaraland">Damaraland</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="namibia/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 13 Parks &amp; Reserves">All <b>13</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="">
                        <img
                            src="{{url('Volcanoes_National_Park_019.jpg')}}"
                            data-srcset="https://cloudfront.safaribookings.com/lib/rwanda/208x130/Volcanoes_National_Park_019@2x.jpg 2x"
                            class="lazyload video-thumb"/>
                        &nbsp;
                    </div>

                    <div class="col col-t-9">
                        <h2>Rwanda</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.4 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.4</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="rwanda/reviews.html" title="11 Reviews about Rwanda">11 Reviews</a>
                        </div>
                        <p>Rwanda’s gorilla trekking is a once-in-a lifetime experience (easily added on to any African
                            safari). But there is plenty more on offer. Volcanoes National Park is the place to be for
                            gorilla trekking, and volcano hikes. Chimps and many other primates can be found in Nyungwe
                            Forest, while savannah safaris are offered in off-the-beaten-track Akagera National
                            Park.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $315 to $1,192 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                Jun to Sep (Except for chimp trekking in Nyungwe)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> June to September (Gorilla permits are scarce)
                            </li>
                        </ul>

{{--                        <a href="rwanda.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Rwanda">More About Rwanda</a>--}}
                        <a href="tours/rwanda.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="197 Rwanda Tours"><b>197</b> Rwanda Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Rwanda Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="volcanoes.html" title="Volcanoes National Park">Volcanoes National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="akagera.html" title="Akagera National Park">Akagera National Park</a></li>--}}
{{--                            <li><a href="gishwati-mukura.html" title="Gishwati-Mukura National Park">Gishwati-Mukura--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="nyungwe.html" title="Nyungwe Forest National Park">Nyungwe Forest National--}}
{{--                                    Park</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="rwanda/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 4 Parks &amp; Reserves">All <b>4</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="ES3BWRhL-iIGzhAK6">
{{--                        <a href="javascript:void(0)" data-start-video="1" data-video-overlay="South Africa Video"--}}
{{--                           data-overlay-hash="vsouth-africa" class="video-thumb" title="Watch Our South Africa Video">--}}
                            <img src="{{url('south-africa.png')}}"
                                 title="South Africa" alt="South Africa"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>South Africa Video</span>--}}
{{--                            <div class="video-time">03:14</div>--}}
{{--                        </a>--}}
                    </div>

                    <div class="col col-t-9">
                        <h2>South Africa</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.6 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.6</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="south-africa/reviews.html" title="714 Reviews about South Africa">714 Reviews</a>
                        </div>
                        <p>South Africa is one of Africa’s great wildlife destinations. Vast Kruger National Park has an
                            abundance of animals and is one of the continent's iconic attractions. For outdoor
                            adventure, the Blyde River Canyon is the third largest on the planet, and jagged peaks of
                            the Drakensberg mountains punch into the sky. Cape Town hums with an urban beat, and is
                            fringed by white-sandy beaches.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $170 to $730 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                May to September (All parks)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> Oct to Mar (Usually not very crowded)
                            </li>
                        </ul>

{{--                        <a href="south-africa.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About South Africa">More About South Africa</a>--}}
                        <a href="tours/south-africa.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="678 South Africa Tours"><b>678</b> South Africa Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>South Africa Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="kruger.html" title="Kruger National Park">Kruger National Park</a></li>--}}
{{--                            <li><a href="malamala.html" title="MalaMala Game Reserve">MalaMala Game Reserve</a></li>--}}
{{--                            <li><a href="phinda.html" title="Phinda Game Reserve">Phinda Game Reserve</a></li>--}}
{{--                            <li><a href="sabi-sands.html" title="Sabi Sand Game Reserve">Sabi Sand Game Reserve</a></li>--}}
{{--                            <li><a href="hluhluwe.html" title="Hluhluwe-iMfolozi Game Reserve">Hluhluwe-iMfolozi Game--}}
{{--                                    Reserve</a></li>--}}
{{--                            <li><a href="kgalagadi.html" title="Kgalagadi Transfrontier Park">Kgalagadi Transfrontier--}}
{{--                                    Park</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="south-africa/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 43 Parks &amp; Reserves">All <b>43</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="">
                        <img
                            src="{{url('Mkhaya_Game_Reserve_033.jpg')}}"
                            data-srcset="https://cloudfront.safaribookings.com/lib/swaziland/208x130/Mkhaya_Game_Reserve_033@2x.jpg 2x"
                            class="lazyload video-thumb"/>
                        &nbsp;
                    </div>

                    <div class="col col-t-9">
                        <h2>Swaziland</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.1 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starempty"></i>
                            </div>
                            <span class="review-score"><em>4.1</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="swaziland/reviews.html" title="10 Reviews about Swaziland">10 Reviews</a>
                        </div>
                        <p>Swaziland (recently renamed Eswatini) is easily incorporated in a South African holiday. It
                            offers some outstanding wildlife viewing in low-key parks, stunning scenery and traditional
                            cultures. Mkhaya Game Reserve and Hlane Royal National Park are excellent places to see many
                            flagship animals.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $154 to $326 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                May to September (Dry season)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> December to January and July to August (It never gets very busy)
                            </li>
                        </ul>

{{--                        <a href="swaziland.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Swaziland">More About Swaziland</a>--}}
                        <a href="tours/swaziland.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="12 Swaziland Tours"><b>12</b> Swaziland Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Swaziland Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="hlane.html" title="Hlane Royal National Park">Hlane Royal National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="mkhaya.html" title="Mkhaya Game Reserve">Mkhaya Game Reserve</a></li>--}}
{{--                            <li><a href="malolotja.html" title="Malolotja Nature Reserve">Malolotja Nature Reserve</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="mbuluzi.html" title="Mbuluzi Game Reserve">Mbuluzi Game Reserve</a></li>--}}
{{--                            <li><a href="mlawula.html" title="Mlawula Nature Reserve">Mlawula Nature Reserve</a></li>--}}
{{--                            <li><a href="mlilwane.html" title="Mlilwane Wildlife Sanctuary">Mlilwane Wildlife--}}
{{--                                    Sanctuary</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="swaziland/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 6 Parks &amp; Reserves">All <b>6</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="jnzFXzLN-iIGzhAK6">
{{--                        <a href="javascript:void(0)" data-start-video="1" data-video-overlay="Tanzania Video"--}}
{{--                           data-overlay-hash="vtanzania" class="video-thumb" title="Watch Our Tanzania Video">--}}
                            <img src="{{url('tanzania.png')}}"
                                 title="Tanzania" alt="Tanzania"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>Tanzania Video</span>--}}
{{--                            <div class="video-time">03:18</div>--}}
                        </a>
                    </div>

                    <div class="col col-t-9">
                        <h2>Tanzania</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.8 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                            </div>
                            <span class="review-score"><em>4.8</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="tanzania/reviews.html" title="1,040 Reviews about Tanzania">1,040 Reviews</a>
                        </div>
                        <p>Tanzania has three safari circuits and each one of them would make Tanzania a top wildlife
                            destination. The popular Northern circuit with the Serengeti and Ngorongoro crater offers
                            one of the best classical safaris in Africa, especially if timed with the annual wildebeest
                            migration.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $183 to $542 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                Jun to Oct (Migration from Jun-Jul &amp; Jan-Feb)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> July to March (Northern circuit parks get crowded)
                            </li>
                        </ul>

{{--                        <a href="tanzania.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Tanzania">More About Tanzania</a>--}}
                        <a href="tours/tanzania.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="3,140 Tanzania Tours"><b>3,140</b> Tanzania Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Tanzania Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="ngorongoro.html" title="Ngorongoro Crater">Ngorongoro Crater</a></li>--}}
{{--                            <li><a href="nyerere.html" title="Nyerere National Park">Nyerere National Park</a></li>--}}
{{--                            <li><a href="ruaha.html" title="Ruaha National Park">Ruaha National Park</a></li>--}}
{{--                            <li><a href="serengeti.html" title="Serengeti National Park">Serengeti National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="gombe.html" title="Gombe National Park">Gombe National Park</a></li>--}}
{{--                            <li><a href="katavi.html" title="Katavi National Park">Katavi National Park</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="tanzania/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 13 Parks &amp; Reserves">All <b>13</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="80557cF5-iIGzhAK6">
{{--                        <a href="javascript:void(0)" data-start-video="1" data-video-overlay="Uganda Video"--}}
{{--                           data-overlay-hash="vuganda" class="video-thumb" title="Watch Our Uganda Video">--}}
                            <img src="{{url('uganda.png')}}" title="Uganda"
                                 alt="Uganda"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>Uganda Video</span>--}}
{{--                            <div class="video-time">02:58</div>--}}
{{--                        </a>--}}
                    </div>

                    <div class="col col-t-9">
                        <h2>Uganda</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.3 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.3</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="uganda/reviews.html" title="259 Reviews about Uganda">259 Reviews</a>
                        </div>
                        <p>Uganda is a great destination to view wildlife in both forest and savannah. Not to be missed
                            is gorilla trekking in Bwindi or Mgahinga, while chimps can easily be spotted in Kibale and
                            several other locations. Queen Elizabeth and Murchison Falls national parks offer wonderful
                            savannah safaris with good wildlife viewing, as does the more remote Kidepo National
                            Park.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $210 to $610 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                June to August and December to February
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> June to September (It&#039;s rarely crowded)
                            </li>
                        </ul>

{{--                        <a href="uganda.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Uganda">More About Uganda</a>--}}
                        <a href="tours/uganda.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="1,113 Uganda Tours"><b>1,113</b> Uganda Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Uganda Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="bwindi.html" title="Bwindi Impenetrable National Park">Bwindi Impenetrable--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="kibale.html" title="Kibale National Park">Kibale National Park</a></li>--}}
{{--                            <li><a href="murchison.html" title="Murchison Falls National Park">Murchison Falls National--}}
{{--                                    Park</a></li>--}}
{{--                            <li><a href="queen-elizabeth-np.html" title="Queen Elizabeth National Park">Queen Elizabeth--}}
{{--                                    National Park</a></li>--}}
{{--                            <li><a href="budongo.html" title="Budongo Forest">Budongo Forest</a></li>--}}
{{--                            <li><a href="katonga.html" title="Katonga Wildlife Reserve">Katonga Wildlife Reserve</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <a href="uganda/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 10 Parks &amp; Reserves">All <b>10</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="OXkFJ8Xy-iIGzhAK6">
{{--                        <a href="javascript:void(0)" data-start-video="1" data-video-overlay="Zambia Video"--}}
{{--                           data-overlay-hash="vzambia" class="video-thumb" title="Watch Our Zambia Video">--}}
                            <img src="{{url('Zambia.png')}}" title="Zambia"
                                 alt="Zambia"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>Zambia Video</span>--}}
{{--                            <div class="video-time">02:42</div>--}}
                        </a>
                    </div>

                    <div class="col col-t-9">
                        <h2>Zambia</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.7 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.7</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="zambia/reviews.html" title="95 Reviews about Zambia">95 Reviews</a>
                        </div>
                        <p>In Zambia, you’ll be looked after on safari by some of the best guides in Africa. They’ll
                            happily share everything they know about the local wildlife and landscape, while safely
                            leading you on game drives, walking safaris, even canoeing safaris along the Zambezi
                            River.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $185 to $1,176 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                May to September (all parks)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> July to October (not crowded, except Victoria Falls)
                            </li>
                        </ul>

{{--                        <a href="zambia.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Zambia">More About Zambia</a>--}}
                        <a href="tours/zambia.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="132 Zambia Tours"><b>132</b> Zambia Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Zambia Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="south-luangwa.html" title="South Luangwa National Park">South Luangwa National--}}
{{--                                    Park</a></li>--}}
{{--                            <li><a href="kafue.html" title="Kafue National Park">Kafue National Park</a></li>--}}
{{--                            <li><a href="lower-zambezi.html" title="Lower Zambezi National Park">Lower Zambezi National--}}
{{--                                    Park</a></li>--}}
{{--                            <li><a href="bangweulu.html" title="Bangweulu Wetlands">Bangweulu Wetlands</a></li>--}}
{{--                            <li><a href="blue-lagoon.html" title="Blue Lagoon National Park">Blue Lagoon National--}}
{{--                                    Park</a></li>--}}
{{--                            <li><a href="kasanka.html" title="Kasanka National Park">Kasanka National Park</a></li>--}}
{{--                        </ul>--}}

{{--                        <a href="zambia/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 14 Parks &amp; Reserves">All <b>14</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>

            <div class="container container--main container--main--white shadowed-box hide show-t">

                <div class="row">

                    <div class="col col-t-3 col-d-2-5" data-video="Jc05Ox8z-iIGzhAK6">
{{--                        <a href="javascript:void(0)" data-start-video="1" data-video-overlay="Zimbabwe Video"--}}
{{--                           data-overlay-hash="vzimbabwe" class="video-thumb" title="Watch Our Zimbabwe Video">--}}
                            <img src="{{url('zimbabwe.png')}}"
                                 title="Zimbabwe" alt="Zimbabwe"/>
{{--                            <i class="sbi sbi--play-button-large"></i>--}}
{{--                            <span>Zimbabwe Video</span>--}}
{{--                            <div class="video-time">03:11</div>--}}
{{--                        </a>--}}
                    </div>

                    <div class="col col-t-9">
                        <h2>Zimbabwe</h2>
                        <div class="review-summary--oneline">
                            <div class="stars      " title="4.3 / 5">
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--star"></i>
                                <i class="sbi sbi--starhalf"></i>
                            </div>
                            <span class="review-score"><em>4.3</em>/5</span> &nbsp;&ndash;&nbsp;
                            <a href="zimbabwe/reviews.html" title="106 Reviews about Zimbabwe">106 Reviews</a>
                        </div>
                        <p>Due to the political situation in Zimbabwe, tourists are few and prices are competitive, but
                            the main parks are still cared for and well worth visiting. Hwange is not to be missed and
                            Mana Pools offers great canoeing safaris on the Zambezi River. Victoria Falls, Africa’s
                            largest waterfall, is a must-go-to destination; standing in the spray of this powerful
                            curtain of flowing water is both moving and overwhelming.</p>

                        <ul class="row info">
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi  sbi--dollar-big "></i><b>Rates</b>
                                $197 to $855 pp/day
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--best-time"></i><b>Best time</b>
                                May to September (All parks)
                            </li>
                            <li class="col col-12 col-t-4 no-gutter"><i class="sbi sbi--high-season"></i><b>High
                                    season</b> July to October (Only Victoria Falls gets busy)
                            </li>
                        </ul>

{{--                        <a href="zimbabwe.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="More About Zimbabwe">More About Zimbabwe</a>--}}
                        <a href="tours/zimbabwe.html" class="btn btn--next btn--roundwhite btn--autowidth"
                           title="181 Zimbabwe Tours"><b>181</b> Zimbabwe Tours</a>
                    </div>

{{--                    <div class="col col-t-12 col-d-3-5 countriesparks-list--parks">--}}
{{--                        <h4>Zimbabwe Parks &amp; Reserves</h4>--}}

{{--                        <ul class="list list--icon list--icon-arrow">--}}
{{--                            <li><a href="hwange.html" title="Hwange National Park">Hwange National Park</a></li>--}}
{{--                            <li><a href="mana-pools.html" title="Mana Pools National Park">Mana Pools National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="chizarira.html" title="Chizarira National Park">Chizarira National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="gonarezhou.html" title="Gonarezhou National Park">Gonarezhou National Park</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="matobo.html" title="Matobo National Park">Matobo National Park</a></li>--}}
{{--                            <li><a href="matusadona.html" title="Matusadona National Park">Matusadona National Park</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <a href="zimbabwe/parks.html" class="btn btn--next btn--roundwhite btn--autowidth"--}}
{{--                           title="All 8 Parks &amp; Reserves">All <b>8</b> Parks &amp; Reserves &nbsp; </a>--}}
{{--                    </div>--}}

                </div>

            </div>
        </div>


    </main>
    <script>
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
