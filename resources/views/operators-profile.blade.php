@extends('layouts.landing-app')
@section('content')
    <main class="main">

        <div itemscope itemtype="http://schema.org/TravelAgency" itemprop="mainEntity">
            <div class="titlebar titlebar--grey titlebar--operator hide show-t">
                <div class="container">
                    <div class="row">
                        <ol class="col col-0 col-t-12 breadcrumbs">
                            <li>
                                You are here:
                            </li>
                            <li data-type='breadcrumb'>
                                <a href="{{url('')}}" title="SafariBookings.com">Home</a>
                            </li>
                            <li data-type='breadcrumb' >
                                <a href="{{url('operators')}}" title="Tour Operators"  ><span>Tour Operators</span></a>
                            </li>
                            <li >
                                <span class="breadcrumbs__last" title="{{$user->company_name}}">{{$user->company_name}}</span>
                            </li>
                        </ol>        </div>
                </div>
            </div>
            <div class="titlebar no-white hide-t hide back-bar">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-t-0">
                            <a href="javascript:history.back();" class="btn btn--white btn--prev btn--back">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="operator operator__header ">
    <span class="favorite-save hide-t  " data-id="3424" data-type="operator"  title="Add to your favorites list"  >
        <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt="" />
    </span>
                <picture>
                    <img src="{{url('view-user-file')}}/{{$user->id}}" srcset="{{url('view-user-file')}}/{{$user->id}}" class="bg-img" />
                </picture>

                <div class="row">
                    <div class="col col-0 col-t-0 show-d col-d-3 operator-photo">
                        <div class="picture-frame">
                            <a class="enlarge" href="{{url('view-user-file')}}/{{$user->id}}" rel="overlay" title="{{$user->company_name}}" data-overlay-hash="large" >
                                <img src="{{url('view-user-file')}}/{{$user->id}}" itemprop="image" title="{{$user->company_name}}" alt="{{$user->company_name}}" />
                            </a>
                            <p>{{$user->company_name}} </p>            </div>
                    </div>
                    <div class="col col-12 col-t-8-5 col-d-6 operator-data">
                        <h1 itemprop="name" class="serif with-save-btn">
                            <span>{{$user->company_name}}</span>
                            <span class="favorite-save hide show-ti  " data-id="3424" data-type="operator"  title="Add to your favorites list"  >
                    <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt="" />
                </span>
                        </h1>

                        <span class="op-reviews">
                    <div class="stars      " title="5 / 5"    >
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        </div>
                    <span class="review-score review-score--white"><em>5.0</em>/5</span> &nbsp;&ndash;&nbsp;
                    <a href="https://www.safaribookings.com/reviews/p3424" class="reviews-link" rel="nofollow">0 Reviews</a>
                </span>

                        <dl>
                            <dt>
                                Offices In:
                            </dt>
                            <dd>
                                <div class="country-with-flag  " title="Uganda">
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

                            <dt class="hide show-t">Size:</dt>
                            <dd class="hide show-t">{{$user->company_size}}  (Founded in <span itemprop="foundingDate">{{$user->foundedin}}</span>)  </dd>

{{--                            <dt class="hide show-t">Member Of:</dt>--}}
{{--                            <dd class="hide show-t"><span class='help' title="Association of Uganda Tour Operators">AUTO</span>, <span class='help' title="The Uganda Association of Travel Agents">TUGATA</span>, UTA, <span class='help' title="Uganda Safari Guides Association">USAGA</span>, UCOTA & UHOA</dd>--}}

                            <dt>Tour Types:</dt>
                            <dd>{{$user->tourtype}}</dd>
                            <dt class="hide show-t">Destinations:</dt>
                            <dd class="destinations hide show-t">
                                <div class="country-with-flag small  " title="Congo (DRC)">
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
                                </div>
                            </dd>


                            <dt>Price Range:</dt>
                            <dd>{{$user->pricerange}} <span class="hide-t">pp</span><span class="hide show-ti">per person</span> <b>per day</b> <span class="hide show-ti">(USD, excl. int'l flights)</span></dd>
                            <meta itemprop="priceRange" content="$60 to $500 per person per day (USD)" />

                            <meta itemprop="sameAs" content="http://www.gorillatrekk.com" />
                        </dl>

                    </div>
                    <div class="col col-12 col-t-3-5 col-d-3 logo-block  ">
                        <div>
                            <img src="https://cloudfront.safaribookings.com/operators/logos/logo_1523130914.gif" title="Africa Adventure Vacations" alt="Africa Adventure Vacations" itemprop="logo" />
                        </div>

                        <a href="https://www.safaribookings.com/request-quote/p3424" rel="nofollow" class="btn btn--orange btn--reqquote btn--withsubtext">Get a Free Quote<br /><span>for a custom tour</span></a>
                        <a href="https://www.safaribookings.com/request-quote/p3424" rel="nofollow" class="btn btn--orange btn--reqquote btn--withsubtext" style="margin-top: 5px">Bid on this tour<br /><span>for a custom tour</span></a>
                        <p class="txt--small">Your request or bid will be sent directly to the operator</p>

                    </div>
                </div>
            </div>

            <div class="container container--main container--main--white container--withsidebar container--main--operator"  data-id="3424"  role="main">

                <div class="row content content--tabbed content-d-noshadow">

                    <div class="col col-12 col-d-2-5 navigation__sidebar navigation__sidebar--operator sticky-side-nav sticky-side-nav-d" role="complementary" >

                        <div>
                            <b>Africa Adventure Vacations</b>
                            <ul class="filters__countries  tours-reviews  " data-operator="3424" >
                                <li><a href="https://www.safaribookings.com/p3424"  class="active" itemprop="url"  data-ajax="overview-tab" role="tab" title="Overview">Overview</a></li>
                                <li>
                                    <a href="https://www.safaribookings.com/operator-tours/p3424"  data-ajax="tours-tab" role="tab" title="Safaris & Tours" rel="nofollow"><em>Safaris &amp; </em>Tours<span class="hide show-ti">11</span></a>
                                </li>
                                <li class=""><a href="https://www.safaribookings.com/reviews/p3424"  data-ajax="reviews-tab" role="tab" title="Reviews" rel="nofollow">Reviews<span>56</span></a></li>
                                <li class="last-m"><a href="https://www.safaribookings.com/profile/p3424"  data-ajax="profile-tab" role="tab" title="Company Profile" rel="nofollow"><em>Company&nbsp;</em>Profile</a></li>
                                <li class="hide show-t"><a href="https://www.safaribookings.com/destinations/p3424"  data-ajax="destinations-tab" role="tab" title="Destinations" rel="nofollow">Destinations</a></li>
                                <li class="hide show-t last-t"><a href="https://www.safaribookings.com/operator-contact/p3424"  data-ajax="contact-tab" role="tab" title="Contact" rel="nofollow">Contact</a></li>
                            </ul>

                            <a href="https://www.safaribookings.com/request-quote/p3424" rel="nofollow" class="hide show-di btn btn--orange btn--reqquote btn--withsubtext">Get a Free Quote<span>for a custom tour</span></a>
                        </div>

                    </div>

                    <div class="col col-12 col-d-9-5">
                        <div class="operator__content">

                            <div class="ajax-holder">

                                <div id="overview-tab" class="overview-tab" role="tabpanel"  data-title="Reviews of Africa Adventure Vacations (Uganda)"  >


                                    <div class="detail__title__block row hide show-t">
                                        <div class="col col-12">
                                            <h2>Overview</h2>
                                        </div>
                                    </div>


                                    <div class="detail__content__block row">

                                        <div class="col col-0 col-t-3 col-d-0">

                                            <div class="picture-frame">
                                                <a class="enlarge" href="https://cloudfront.safaribookings.com/operators/photos/large/3-ready-to-go-back-to-enteb_med_hr_3424_5d891b867909b.jpeg" rel="overlay" title="Africa Adventure Vacations" data-overlay-hash="large" >

                                                    <img src="https://cloudfront.safaribookings.com/operators/photos/3-ready-to-go-back-to-enteb_med_hr_3424_5d891b867909b.jpeg" />

                                                </a>
                                                <p>Fly in Safaris with Africa Adventure Vacations </p>

                                            </div>

                                        </div>
                                        <div class="col col-12 col-t-9 col-d-12">

                                            <p class="short-companyprofile">
                                                <span itemprop="description">Africa Adventure Vacations is a fully registered Tours and Travel company based in Uganda, fully licensed to conduct safaris within Uganda, DR Congo and Rwanda. We offer several tours and safaris in Uganda including Gorilla Tours, wildlife adventures, mountaineering trips, cultural safaris, birding, chimpanzee trekking, nature walks, and honey moon holidays among others. Our Tour packages range from all inclusive group trips for families or students, corporate retreats, and specialized or custom</span>
                                            </p>
                                            <div>
                                                <a href="https://www.safaribookings.com/profile/p3424" rel="nofollow">Full company profile</a>
                                            </div>

                                        </div>

                                        <div class="swap-mobile swap-tablet">

                                            <div class="col col-12 col-d-7">

                                                <h3 class="detail__heading">
                                                    <span class="detail__heading-main">Safaris &amp; Tours</span>
                                                    <span class="detail__heading-number number">11</span>
                                                    <span class="detail__heading-separator grey hide show-di">&ndash;</span>
                                                    <span class="detail__heading-extra grey nobr">Offered by Africa Adventure Vacations</span>
                                                </h3>

                                                <div class="list--tours list--tours--small first-elem">
                                                    <ul class="row">
                                                        <li class="col   col-12 col-t-6   ">
                                                            <a class="list__item    " href="https://www.safaribookings.com/tours/t32667"  target="_blank"   data-id="32667"  title="5-Day Uganda Gorilla and Wildlife Safari" >
                                                                <div class="list__item--image__full">

                                                                    <picture class="list__picture">
                                                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                                        <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_046.jpg" media="(min-width: 501px) and (max-width: 743px)" >
                                                                        <!--[if IE 9]></video><![endif]-->
                                                                        <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046.jpg 1x"  alt="5-Day Uganda Gorilla and Wildlife Safari" />
                                                                        <noscript>
                                                                            <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_046.jpg" media="(min-width: 501px) and (max-width: 743px)">
                                                                            <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046@2x.jpg 2x" />
                                                                        </noscript>
                                                                    </picture>

                                                                    <div class="holder-tourtitle">
                                                                        <h2 class="serif tourtitle">5-Day Uganda Gorilla and Wildlife Safari</h2>
                                                                    </div>

                                                                </div>
                                                                <div class="list__item--data  matchheight ">

                                                                    <p class="price">
                                                                        <b>$1,665</b>
                                                                        pp (USD)
                                                                    </p>



                                                                    <p class="desc">
                                                                        <b>Uganda:</b>
                                                                        Private tour<span></span>Budget<span></span>Lodge & Resort
                                                                    </p>

                                                                    <p class="visit"><b>You Visit:</b> Entebbe <span>(Start)</span>, Queen Elizabeth NP, Bwindi NP <span class="grey">(Gorillas)</span>, Lake Bunyonyi, <span class="nowrap">Entebbe Airport <span>(End)</span></span></p>
                                                                </div>



                                                                <span class="favorite-save  " data-id="32667" data-type="tour"  title="Add to your favorites list"  >
                                        <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt="Not in favorites" />
                                    </span>

                                                            </a>
                                                        </li>                                                                                                            <li class="col   col-12 col-t-6   ">
                                                            <a class="list__item    " href="https://www.safaribookings.com/tours/t32664"  target="_blank"   data-id="32664"  title="12-Day Best Adventure Tour Uganda" >
                                                                <div class="list__item--image__full">

                                                                    <picture class="list__picture">
                                                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                                        <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Mweya_Peninsula_008.jpg" media="(min-width: 501px) and (max-width: 743px)" >
                                                                        <!--[if IE 9]></video><![endif]-->
                                                                        <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Mweya_Peninsula_008.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Mweya_Peninsula_008@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Mweya_Peninsula_008.jpg 1x"  alt="12-Day Best Adventure Tour Uganda" />
                                                                        <noscript>
                                                                            <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Mweya_Peninsula_008.jpg" media="(min-width: 501px) and (max-width: 743px)">
                                                                            <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Mweya_Peninsula_008.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Mweya_Peninsula_008@2x.jpg 2x" />
                                                                        </noscript>
                                                                    </picture>

                                                                    <div class="holder-tourtitle">
                                                                        <h2 class="serif tourtitle">12-Day Best Adventure Tour Uganda</h2>
                                                                    </div>

                                                                </div>
                                                                <div class="list__item--data  matchheight ">

                                                                    <p class="price">
                                                                        <b>$3,219</b>
                                                                        pp (USD)
                                                                    </p>



                                                                    <p class="desc">
                                                                        <b>Uganda:</b>
                                                                        Private tour<span></span>Budget<span></span>Lodge & Resort
                                                                    </p>

                                                                    <p class="visit"><b>You Visit:</b> Entebbe <span>(Start)</span>, Murchison Falls NP, Kibale NP <span class="grey">(Chimps)</span>, Queen Elizabeth NP, Ishasha <span class="grey">(Queen Elizabeth NP)</span>, Bwindi NP <span class="grey">(Gorillas)</span>, Lake Bunyonyi, Lake Mburo NP, <span class="nowrap">Entebbe Airport <span>(End)</span></span></p>
                                                                </div>



                                                                <span class="favorite-save  " data-id="32664" data-type="tour"  title="Add to your favorites list"  >
                                        <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt="Not in favorites" />
                                    </span>

                                                            </a>
                                                        </li>                                                                                                            <li class="col   col-12 col-t-6   ">
                                                            <a class="list__item    " href="https://www.safaribookings.com/tours/t19812"  target="_blank"   data-id="19812"  title="3-Day Epic Gorilla Encounter in the Wild" >
                                                                <div class="list__item--image__full">

                                                                    <picture class="list__picture">
                                                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                                        <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_020.jpg" media="(min-width: 501px) and (max-width: 743px)" >
                                                                        <!--[if IE 9]></video><![endif]-->
                                                                        <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_020.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_020@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_020.jpg 1x"  alt="3-Day Epic Gorilla Encounter in the Wild" />
                                                                        <noscript>
                                                                            <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_020.jpg" media="(min-width: 501px) and (max-width: 743px)">
                                                                            <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_020.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_020@2x.jpg 2x" />
                                                                        </noscript>
                                                                    </picture>

                                                                    <div class="holder-tourtitle">
                                                                        <h2 class="serif tourtitle">3-Day Epic Gorilla Encounter in the Wild</h2>
                                                                    </div>

                                                                </div>
                                                                <div class="list__item--data  matchheight ">

                                                                    <p class="price">
                                                                        <b>$1,155</b>
                                                                        pp (USD)
                                                                    </p>



                                                                    <p class="desc">
                                                                        <b>Uganda:</b>
                                                                        Private tour<span></span>Budget<span></span>Lodge & Resort
                                                                    </p>

                                                                    <p class="visit"><b>You Visit:</b> Kampala <span>(Start)</span>, Bwindi NP <span class="grey">(Gorillas)</span>, Lake Bunyonyi, <span class="nowrap">Entebbe <span>(End)</span></span></p>
                                                                </div>



                                                                <span class="favorite-save  " data-id="19812" data-type="tour"  title="Add to your favorites list"  >
                                        <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt="Not in favorites" />
                                    </span>

                                                            </a>
                                                        </li>                                                                                                            <li class="col   col-12 col-t-6   ">
                                                            <a class="list__item    " href="https://www.safaribookings.com/tours/t29899"  target="_blank"   data-id="29899"  title="7-Day Big Seven Classic Safari" >
                                                                <div class="list__item--image__full">

                                                                    <picture class="list__picture">
                                                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                                        <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_006.jpg" media="(min-width: 501px) and (max-width: 743px)" >
                                                                        <!--[if IE 9]></video><![endif]-->
                                                                        <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_006.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_006@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_006.jpg 1x"  alt="7-Day Big Seven Classic Safari" />
                                                                        <noscript>
                                                                            <source srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_006.jpg" media="(min-width: 501px) and (max-width: 743px)">
                                                                            <img src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_006.jpg" srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_006@2x.jpg 2x" />
                                                                        </noscript>
                                                                    </picture>

                                                                    <div class="holder-tourtitle">
                                                                        <h2 class="serif tourtitle">7-Day Big Seven Classic Safari</h2>
                                                                    </div>

                                                                </div>
                                                                <div class="list__item--data  matchheight ">

                                                                    <p class="price">
                                                                        <b>$2,420</b>
                                                                        pp (USD)
                                                                    </p>



                                                                    <p class="desc">
                                                                        <b>Uganda:</b>
                                                                        Private tour<span></span>Budget<span></span>Lodge & Tented Camp
                                                                    </p>

                                                                    <p class="visit"><b>You Visit:</b> Entebbe <span>(Start)</span>, Ziwa Rhino Sanctuary, Murchison Falls NP, Kibale NP <span class="grey">(Chimps)</span>, Queen Elizabeth NP, Bwindi NP <span class="grey">(Gorillas)</span>, Lake Bunyonyi, <span class="nowrap">Entebbe <span>(End)</span></span></p>
                                                                </div>



                                                                <span class="favorite-save  " data-id="29899" data-type="tour"  title="Add to your favorites list"  >
                                        <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt="Not in favorites" />
                                    </span>

                                                            </a>
                                                        </li>                                                                                                    </ul>
                                                </div>

                                                <div class="hide show-ti">
                                                    <a href="https://www.safaribookings.com/operator-tours/p3424" class="btn btn--orange btn--autowidth btn--next" rel="nofollow">All 11 Safari Tours</a><span class="txt--xgrey txt--xsmall btn--addtext"> &nbsp; - Offered by Africa Adventure Vacations</span>
                                                </div>
                                                <div class="hide-t">
                                                    <a href="https://www.safaribookings.com/operator-tours/p3424" class="btn btn--white btn--next" rel="nofollow">All 11 Safari Tours</a>
                                                </div>

                                            </div>

                                            <div class="col col-12 col-d-5">

                                                <div class="col col-12 col-t-5 col-d-12">
                                                    <h3 class="detail__heading">
                                                        <span class="detail__heading-main">Reviews</span>
                                                        <span class="detail__heading-number number">56</span>
                                                        <span class="detail__heading-separator grey hide show-di">&ndash;</span>
                                                        <span class="detail__heading-extra grey hide show-ti">About Africa Adventure Vacations</span>
                                                    </h3>
                                                    <b class="hide show-t first-elem">Average Customer Rating</b>

                                                    <div class="review-summary--oneline">
                                                        <div class="stars    large    " title="5 / 5"  itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"    >
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <meta itemprop="ratingValue" content="5.0" />
                                                            <meta itemprop="worstRating" content="1" />
                                                            <meta itemprop="bestRating" content="5" />
                                                            <meta itemprop="reviewCount" content="56" />
                                                        </div>
                                                        <span class="review-score"><em>5.0</em>/5 &nbsp;&ndash;&nbsp; <a href="https://www.safaribookings.com/reviews/p3424" rel="nofollow">56 Reviews</a></span>
                                                    </div>

                                                    <div class="hide show-t">
                                                        <b><span class="hide show-ti">Rating&nbsp;</span>Breakdown</b>
                                                        <div class="review-breakdown  ">
                                                            <ul>
                                                                <li>
                                                                    5 star
                                                                    <span><em style="width: 98.2%"></em></span>
                                                                    <a href="https://www.safaribookings.com/reviews/p3424?stars=5" data-ajax="reviews-tab">55</a>
                                                                </li>
                                                                <li>
                                                                    4 star
                                                                    <span><em style="width: 1.8%"></em></span>
                                                                    <a href="https://www.safaribookings.com/reviews/p3424?stars=4" data-ajax="reviews-tab">1</a>
                                                                </li>
                                                                <li>
                                                                    3 star
                                                                    <span><em style="width: 0.0%"></em></span>
                                                                    <i>0</i>
                                                                </li>
                                                                <li>
                                                                    2 star
                                                                    <span><em style="width: 0.0%"></em></span>
                                                                    <i>0</i>
                                                                </li>
                                                                <li>
                                                                    1 star
                                                                    <span><em style="width: 0.0%"></em></span>
                                                                    <i>0</i>
                                                                </li>
                                                            </ul>
                                                        </div>                                                    </div>
                                                    <div class="hide-t">
                                                        <a href="https://www.safaribookings.com/review/p3424" class="btn btn--white btn--autowidth btn--next" rel="nofollow">Write a Review</a>
                                                        <br /><br />
                                                    </div>
                                                </div>

                                                <div class="col col-0 hide show-t hide-d col-t-7 no-gutter-right">
                                                    <h3><span>Latest User Review</span></h3>

                                                    <div class="review review--snippet"  >
                                                        <div class="review__person matchheight"  >
                                                            <i class="sbi sbi--avatar-male"></i>
                                                            <div  class="review__person__info"  >
                                                                <strong class="review__person__name"  >Pavol</strong>
                                                                <span class="review__person__country">&nbsp;&ndash; &nbsp; <div class="country-with-flag  " title="Slovakia">
                                    <img src="https://cfstatic.safaribookings.com/images/flags/sk.png" class="country-with-flag__flag" alt="Slovakia" title="Slovakia" />
                            <span  class="txt--grey"  >
                            SK
                    </span>
    </div>
</span>
                                                                <span class="review__person__reviewed"><b>Reviewed:</b> Jan 24, 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="review__body">
                                                            <h5  >3 days safari to Murchison falls</h5>
                                                            <div class="stars      " title="5 / 5"    >
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                            </div>
                                                            <span class="review-score"><em>5</em>/5</span>
                                                            <p  >I was very happy with Najib service. Night safari game drive with ranger in MF is highly recomended, was best experience in my 3 weeks safari in eastern Africa.</p>
                                                            <p><a href="https://www.safaribookings.com/reviews/p3424#57178"  >Full Review</a></p>
                                                        </div>
                                                    </div>



                                                    <div class="review-more review-more--write">
                                                        <a href="https://www.safaribookings.com/reviews/p3424" class="reviews-all-link" rel="nofollow">All 56 Reviews</a>
                                                        <a href="https://www.safaribookings.com/review/p3424" class="btn btn--orange btn--small btn--autowidth btn--right btn--next" rel="nofollow">Write a Review</a>
                                                    </div>
                                                </div>

                                                <div class="col col-0 hide show-d col-d-12 no-gutter-right extra-top-margin">
                                                    <h5 class="subtitle  ">Latest User Review</h5>

                                                    <div class="review review--snippet"  >
                                                        <div class="review__person matchheight"  >
                                                            <i class="sbi sbi--avatar-male"></i>
                                                            <div  class="review__person__info"  >
                                                                <strong class="review__person__name"  >Pavol</strong>
                                                                <span class="review__person__country">&nbsp;&ndash; &nbsp; <div class="country-with-flag  " title="Slovakia">
                                    <img src="https://cfstatic.safaribookings.com/images/flags/sk.png" class="country-with-flag__flag" alt="Slovakia" title="Slovakia" />
                            <span  class="txt--grey"  >
                            SK
                    </span>
    </div>
</span>
                                                                <span class="review__person__reviewed"><b>Reviewed:</b> Jan 24, 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="review__body">
                                                            <h5  >3 days safari to Murchison falls</h5>
                                                            <div class="stars      " title="5 / 5"    >
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                            </div>
                                                            <span class="review-score"><em>5</em>/5</span>
                                                            <p  >I was very happy with Najib service. Night safari game drive with ranger in MF is highly recomended, was best experience in my 3 weeks safari in eastern Africa.</p>
                                                            <p><a href="https://www.safaribookings.com/reviews/p3424#57178"  >Full Review</a></p>
                                                        </div>
                                                    </div>



                                                    <div class="review-more review-more--write">
                                                        <a href="https://www.safaribookings.com/reviews/p3424" class="reviews-all-link" rel="nofollow">All 56 Reviews</a>
                                                        <a href="https://www.safaribookings.com/review/p3424" class="btn btn--orange btn--small btn--autowidth btn--right btn--next" rel="nofollow">Write a Review</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>


                            <div class="col col-12 operator_disclaimer">
                                <h3>Disclaimer</h3>
                                <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small txt--grey">
                                    <li>All corporate and/or tour info is provided by Africa Adventure Vacations, not SafariBookings</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="hide-t floating-request-btn " data-role="request-cta-mobile">
                <a href="https://www.safaribookings.com/enquiry/form/p3424" target="blank" rel="overlay nofollow" data-overlay-hash="request" class="btn btn--orange btn--reqquote">Get a Free Quote for a Custom Tour</a>
            </div>





        </div>

    </main>
@endsection
