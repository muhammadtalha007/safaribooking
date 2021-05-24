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
                            <li data-type='breadcrumb'>
                                <a href="{{url('operators')}}" title="Tour Operators"><span>Tour Operators</span></a>
                            </li>
                            <li>
                                <span class="breadcrumbs__last"
                                      title="{{$user->company_name}}">{{$user->company_name}}</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="titlebar no-white hide-t hide back-bar">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-t-0">
                            <a href="javascript:history.back();" class="btn btn--white btn--prev btn--back">Back to
                                List</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="operator operator__header ">
    <span class="favorite-save hide-t  " data-id="3424" data-type="operator" title="Add to your favorites list">
        <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt=""/>
    </span>
                <picture>
                    <img src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                         srcset="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                         class="bg-img"/>
                </picture>

                <div class="row">
                    <div class="col col-0 col-t-0 show-d col-d-3 operator-photo">
                        <div class="picture-frame">
                            <a class="enlarge" href="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}" rel="overlay"
                               title="{{$user->company_name}}" data-overlay-hash="large">
                                <img src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}" itemprop="image"
                                     title="{{$user->company_name}}" alt="{{$user->company_name}}"/>
                            </a>
                            <p>{{$user->company_name}} </p></div>
                    </div>
                    <div class="col col-12 col-t-8-5 col-d-6 operator-data">
                        <h1 itemprop="name" class="serif with-save-btn">
                            <span>{{$user->company_name}}</span>
                            <span class="favorite-save hide show-ti  " data-id="3424" data-type="operator"
                                  title="Add to your favorites list">
                    <img class="svg svg--shadowed"
                         src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt=""/>
                </span>
                        </h1>

                        <span class="op-reviews">
                    <div class="stars      " title="5 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        </div>
                    <span class="review-score review-score--white"><em>5.0</em>/5</span> &nbsp;&ndash;&nbsp;
                    <a href="https://www.safaribookings.com/reviews/p3424" class="reviews-link"
                       rel="nofollow">0 Reviews</a>
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
                            <dd class="hide show-t">{{$user->company_size}} (Founded in <span
                                    itemprop="foundingDate">{{$user->foundedin}}</span>)
                            </dd>

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
                            <dd>{{$user->pricerange}} <span class="hide-t">pp</span><span class="hide show-ti">per person</span>
                                <b>per day</b> <span class="hide show-ti">(USD, excl. int'l flights)</span></dd>
                            <meta itemprop="priceRange" content="$60 to $500 per person per day (USD)"/>

                            <meta itemprop="sameAs" content="http://www.gorillatrekk.com"/>
                        </dl>

                    </div>
                    <div class="col col-12 col-t-3-5 col-d-3 logo-block  ">
                        <div>
                            <img src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$user->id}}"
                                 title="{{$user->company_name}}"
                                 alt="{{$user->company_name}}" itemprop="logo"/>
                        </div>

                        <a href="https://www.safaribookings.com/request-quote/p3424" rel="nofollow"
                           class="btn btn--orange btn--reqquote btn--withsubtext">Get a Free Quote<br/><span>for a custom tour</span></a>
                        <a href="https://www.safaribookings.com/request-quote/p3424" rel="nofollow"
                           class="btn btn--orange btn--reqquote btn--withsubtext" style="margin-top: 5px">Bid on this
                            tour<br/><span>for a custom tour</span></a>
                        <p class="txt--small">Your request or bid will be sent directly to the operator</p>

                    </div>
                </div>
            </div>

            <div
                class="container container--main container--main--white container--withsidebar container--main--operator"
                data-id="3424" role="main">

                <div class="row content content--tabbed content-d-noshadow">

                    <div
                        class="col col-12 col-d-2-5 navigation__sidebar navigation__sidebar--operator sticky-side-nav sticky-side-nav-d"
                        role="complementary">

                        <div>
                            <b>{{$user->company_name}}</b>
                            <ul class="filters__countries  tours-reviews  " data-operator="3424">
                                <li><a onclick="openTab('overview')" id="overview-link" class="active" itemprop="url"
                                       data-ajax="overview-tab" role="tab" title="Overview">Overview</a></li>
                                <li>
                                    <a onclick="openTab('tours')" id="tours-link" data-ajax="tours-tab" role="tab"
                                       title="Safaris & Tours" rel="nofollow"><em>Safaris &amp; </em>Tours<span
                                            class="hide show-ti">0</span></a>
                                </li>
                                <li class=""><a onclick="openTab('reviews')" id="reviews-link" data-ajax="reviews-tab"
                                                role="tab" title="Reviews" rel="nofollow">Reviews<span>0</span></a></li>
                                <li class="last-m"><a onclick="openTab('company-profile')" id="company-profile-link"
                                                      data-ajax="profile-tab" role="tab" title="Company Profile"
                                                      rel="nofollow"><em>Company&nbsp;</em>Profile</a></li>
                                <li class="hide show-t"><a onclick="openTab('destinations')" id="destinations-link"
                                                           data-ajax="destinations-tab" role="tab" title="Destinations"
                                                           rel="nofollow">Destinations</a></li>
                                <li class="hide show-t last-t"><a onclick="openTab('contact')" id="contact-link"
                                                                  data-ajax="contact-tab" role="tab" title="Contact"
                                                                  rel="nofollow">Contact</a></li>
                            </ul>

                            <a href="#" rel="nofollow"
                               class="hide show-di btn btn--orange btn--reqquote btn--withsubtext">BID on tour<span>for a custom tour</span></a>
                            <a href="#" rel="nofollow"
                               class="hide show-di btn btn--orange btn--reqquote btn--withsubtext" style="margin-top: -20px">Get a Free
                                Quote<span>for a custom tour</span></a>
                        </div>

                    </div>

                    <div class="col col-12 col-d-9-5">
                        <div class="operator__content">

                            <div class="ajax-holder">

                                <div id="overview-tab" class="overview-tab" role="tabpanel"
                                     data-title="Reviews of Africa Adventure Vacations (Uganda)">


                                    <div class="detail__title__block row hide show-t">
                                        <div class="col col-12">
                                            <h2>Overview</h2>
                                        </div>
                                    </div>


                                    <div class="detail__content__block row">

                                        <div class="col col-0 col-t-3 col-d-0">

                                            <div class="picture-frame">
                                                {{--                                                <a class="enlarge" href="https://cloudfront.safaribookings.com/operators/photos/large/3-ready-to-go-back-to-enteb_med_hr_3424_5d891b867909b.jpeg" rel="overlay" title="Africa Adventure Vacations" data-overlay-hash="large" >--}}

                                                {{--                                                    <img src="https://cloudfront.safaribookings.com/operators/photos/3-ready-to-go-back-to-enteb_med_hr_3424_5d891b867909b.jpeg" />--}}

                                                {{--                                                </a>--}}
                                                <p>{{$user->copmpany_name}}</p>

                                            </div>

                                        </div>
                                        <div class="col col-12 col-t-9 col-d-12">

                                            <p class="short-companyprofile">
                                                <span itemprop="description">{{$user->overview}}</span>
                                            </p>
                                            <div>
                                                <a onclick="openTab('company-profile')" rel="nofollow">Full company
                                                    profile</a>
                                            </div>

                                        </div>

                                        <div class="swap-mobile swap-tablet">

                                            <div class="col col-12 col-d-7">

                                                <h3 class="detail__heading">
                                                    <span class="detail__heading-main">Safaris &amp; Tours</span>
                                                    <span class="detail__heading-number number">0</span>
                                                    <span
                                                        class="detail__heading-separator grey hide show-di">&ndash;</span>
                                                    <span
                                                        class="detail__heading-extra grey nobr">Offered by {{$user->company_name}}</span>
                                                </h3>

                                                <div class="list--tours list--tours--small first-elem">
                                                    <ul class="row">
                                                        <li class="col   col-12 col-t-6   ">
                                                            <a class="list__item    "
                                                               href="https://www.safaribookings.com/tours/t32667"
                                                               target="_blank" data-id="32667"
                                                               title="5-Day Uganda Gorilla and Wildlife Safari">
                                                                <div class="list__item--image__full">

                                                                    <picture class="list__picture">
                                                                        <!--[if IE 9]>
                                                                        <video style="display: none;"><![endif]-->
                                                                        <source
                                                                            srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_046.jpg"
                                                                            media="(min-width: 501px) and (max-width: 743px)">
                                                                        <!--[if IE 9]></video><![endif]-->
                                                                        <img
                                                                            src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046.jpg"
                                                                            srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046.jpg 1x"
                                                                            alt="5-Day Uganda Gorilla and Wildlife Safari"/>
                                                                        <noscript>
                                                                            <source
                                                                                srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_046.jpg"
                                                                                media="(min-width: 501px) and (max-width: 743px)">
                                                                            <img
                                                                                src="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046.jpg"
                                                                                srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_046@2x.jpg 2x"/>
                                                                        </noscript>
                                                                    </picture>

                                                                    <div class="holder-tourtitle">
                                                                        <h2 class="serif tourtitle">5-Day Uganda Gorilla
                                                                            and Wildlife Safari</h2>
                                                                    </div>

                                                                </div>
                                                                <div class="list__item--data  matchheight ">

                                                                    <p class="price">
                                                                        <b>$1,665</b>
                                                                        pp (USD)
                                                                    </p>


                                                                    <p class="desc">
                                                                        <b>Uganda:</b>
                                                                        Private tour<span></span>Budget<span></span>Lodge
                                                                        & Resort
                                                                    </p>

                                                                    <p class="visit"><b>You Visit:</b> Entebbe <span>(Start)</span>,
                                                                        Queen Elizabeth NP, Bwindi NP <span
                                                                            class="grey">(Gorillas)</span>, Lake
                                                                        Bunyonyi, <span
                                                                            class="nowrap">Entebbe Airport <span>(End)</span></span>
                                                                    </p>
                                                                </div>


                                                                <span class="favorite-save  " data-id="32667"
                                                                      data-type="tour"
                                                                      title="Add to your favorites list">
                                                                                                <img
                                                                                                    class="svg svg--shadowed"
                                                                                                    src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                                                                                    alt="Not in favorites"/>
                                                                                            </span>

                                                            </a>
                                                        </li>

                                                        <li class="col   col-12 col-t-6   ">
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn--white btn--next" rel="nofollow">All 0
                                                        Safari Tours</a>
                                                </div>

                                            </div>

                                            <div class="col col-12 col-d-5">

                                                <div class="col col-12 col-t-5 col-d-12">
                                                    <h3 class="detail__heading">
                                                        <span class="detail__heading-main">Reviews</span>
                                                        <span class="detail__heading-number number">0</span>
                                                        <span class="detail__heading-separator grey hide show-di">&ndash;</span>
                                                        <span
                                                            class="detail__heading-extra grey hide show-ti">About {{$user->company_name}}</span>
                                                    </h3>
                                                    <b class="hide show-t first-elem">Average Customer Rating</b>

                                                    <div class="review-summary--oneline">
                                                        <div class="stars    large    " title="5 / 5"
                                                             itemprop="aggregateRating" itemscope
                                                             itemtype="http://schema.org/AggregateRating">
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <meta itemprop="ratingValue" content="5.0"/>
                                                            <meta itemprop="worstRating" content="1"/>
                                                            <meta itemprop="bestRating" content="5"/>
                                                            <meta itemprop="reviewCount" content="56"/>
                                                        </div>
                                                        <span class="review-score"><em>5.0</em>/5 &nbsp;&ndash;&nbsp; <a
                                                                href="https://www.safaribookings.com/reviews/p3424"
                                                                rel="nofollow">0 Reviews</a></span>
                                                    </div>

                                                    <div class="hide show-t">
                                                        <b><span class="hide show-ti">Rating&nbsp;</span>Breakdown</b>
                                                        <div class="review-breakdown  ">
                                                            <ul>
                                                                <li>
                                                                    5 star
                                                                    <span><em style="width: 98.2%"></em></span>
                                                                    <a href="https://www.safaribookings.com/reviews/p3424?stars=5"
                                                                       data-ajax="reviews-tab">0</a>
                                                                </li>
                                                                <li>
                                                                    4 star
                                                                    <span><em style="width: 1.8%"></em></span>
                                                                    <a href="https://www.safaribookings.com/reviews/p3424?stars=4"
                                                                       data-ajax="reviews-tab">0</a>
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
                                                        </div>
                                                    </div>
                                                    <div class="hide-t">
                                                        <a href="https://www.safaribookings.com/review/p3424"
                                                           class="btn btn--white btn--autowidth btn--next"
                                                           rel="nofollow">Write a Review</a>
                                                        <br/><br/>
                                                    </div>
                                                </div>

                                                <div class="col col-0 hide show-t hide-d col-t-7 no-gutter-right">
                                                    <h3><span>Latest User Review</span></h3>

                                                    <div class="review review--snippet">
                                                        <div class="review__person matchheight">
                                                            <i class="sbi sbi--avatar-male"></i>
                                                            <div class="review__person__info">
                                                                <strong class="review__person__name">Pavol</strong>
                                                                <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                                        class="country-with-flag  " title="Slovakia">
                                    <img src="https://cfstatic.safaribookings.com/images/flags/sk.png"
                                         class="country-with-flag__flag" alt="Slovakia" title="Slovakia"/>
                            <span class="txt--grey">
                            SK
                    </span>
    </div>
</span>
                                                                <span class="review__person__reviewed"><b>Reviewed:</b> Jan 24, 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="review__body">
                                                            <h5>3 days safari to Murchison falls</h5>
                                                            <div class="stars      " title="5 / 5">
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                            </div>
                                                            <span class="review-score"><em>5</em>/5</span>
                                                            <p>I was very happy with Najib service. Night safari game
                                                                drive with ranger in MF is highly recomended, was best
                                                                experience in my 3 weeks safari in eastern Africa.</p>
                                                            <p>
                                                                <a href="https://www.safaribookings.com/reviews/p3424#57178">Full
                                                                    Review</a></p>
                                                        </div>
                                                    </div>


                                                    <div class="review-more review-more--write">
                                                        <a href="https://www.safaribookings.com/reviews/p3424"
                                                           class="reviews-all-link" rel="nofollow">All 56 Reviews</a>
                                                        <a href="https://www.safaribookings.com/review/p3424"
                                                           class="btn btn--orange btn--small btn--autowidth btn--right btn--next"
                                                           rel="nofollow">Write a Review</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="col col-0 hide show-d col-d-12 no-gutter-right extra-top-margin">
                                                    <h5 class="subtitle  ">Latest User Review</h5>

                                                    <div class="review review--snippet">
                                                        <div class="review__person matchheight">
                                                            <i class="sbi sbi--avatar-male"></i>
                                                            <div class="review__person__info">
                                                                <strong class="review__person__name">Pavol</strong>
                                                                <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                                        class="country-with-flag  " title="Slovakia">
                                    <img src="https://cfstatic.safaribookings.com/images/flags/sk.png"
                                         class="country-with-flag__flag" alt="Slovakia" title="Slovakia"/>
                            <span class="txt--grey">
                            SK
                    </span>
    </div>
</span>
                                                                <span class="review__person__reviewed"><b>Reviewed:</b> Jan 24, 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="review__body">
                                                            <h5>3 days safari to Murchison falls</h5>
                                                            <div class="stars      " title="5 / 5">
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                                <i class="sbi sbi--star"></i>
                                                            </div>
                                                            <span class="review-score"><em>5</em>/5</span>
                                                            <p>I was very happy with Najib service. Night safari game
                                                                drive with ranger in MF is highly recomended, was best
                                                                experience in my 3 weeks safari in eastern Africa.</p>
                                                            <p>
                                                                <a href="https://www.safaribookings.com/reviews/p3424#57178">Full
                                                                    Review</a></p>
                                                        </div>
                                                    </div>


                                                    <div class="review-more review-more--write">
                                                        <a href="https://www.safaribookings.com/reviews/p3424"
                                                           class="reviews-all-link" rel="nofollow">All 0 Reviews</a>
                                                        <a href="https://www.safaribookings.com/review/p3424"
                                                           class="btn btn--orange btn--small btn--autowidth btn--right btn--next"
                                                           rel="nofollow">Write a Review</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div id="tours-tab" class="tours-tab" role="tabpanel"
                                     data-title="All 30 Safaris &amp; Tours of African Big Cats Safaris"
                                     style="opacity: 1;display: none">

                                    <div class="detail__title__block row">
                                        <div class="col col-12">
                                            <h2>Safaris &amp; Tours</h2>
                                        </div>
                                    </div>

                                    <div class="list--tours row">

                                        <ul class="row">
                                            <li class="col   col-12 col-t-6   ">
                                                <a class="list__item    "
                                                   href="https://www.safaribookings.com/tours/t24399" target="_blank"
                                                   data-id="24399" title="6-Day Camping Safari Northern Circuit">
                                                    <div class="list__item--image__full">

                                                        <picture class="list__picture">
                                                            <!--[if IE 9]>
                                                            <video style="display: none;"><![endif]-->
                                                            <source
                                                                srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Tarangire_National_Park_003.jpg"
                                                                media="(min-width: 501px) and (max-width: 743px)">
                                                            <!--[if IE 9]></video><![endif]-->
                                                            <img
                                                                src="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Tarangire_National_Park_003.jpg"
                                                                srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Tarangire_National_Park_003@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Tarangire_National_Park_003.jpg 1x"
                                                                alt="6-Day Camping Safari Northern Circuit">
                                                            <noscript>
                                                                <source
                                                                    srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Tarangire_National_Park_003.jpg"
                                                                    media="(min-width: 501px) and (max-width: 743px)">
                                                                <img
                                                                    src="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Tarangire_National_Park_003.jpg"
                                                                    srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Tarangire_National_Park_003@2x.jpg 2x"/>
                                                            </noscript>
                                                        </picture>

                                                        <div class="holder-tourtitle">
                                                            <h2 class="serif tourtitle">6-Day Camping Safari Northern
                                                                Circuit</h2>
                                                        </div>

                                                    </div>
                                                    <div class="list__item--data  matchheight " style="height: 126px;"
                                                         data-mh="1">

                                                        <p class="price">
                                                            <b>$1,670</b>
                                                            pp (USD)
                                                        </p>


                                                        <p class="desc">
                                                            <b>Tanzania:</b>
                                                            Private tour<span></span>Budget<span></span>Camping &amp;
                                                            Lodge
                                                        </p>

                                                        <p class="visit dsh"><b>You Visit:</b> Arusha
                                                            <span>(Start)</span>, Lake Manyara NP, Serengeti NP,
                                                            Ngorongoro Crater, <span
                                                                class="nowrap">Arusha <span>(End)</span></span></p>
                                                    </div>


                                                    <span class="favorite-save  " data-id="24399" data-type="tour"
                                                          title="Add to your favorites list">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                             viewBox="0 0 36 36" class="svg svg--shadowed replaced-svg">
    <path class="circle" filter="url(#dropshadow-heavy)" fill="#FFF"
          d="M8,15.5 C8,12.5 10.5,10 13.5,10 C15.5,10 17,11 18,12.5 C19,11 20.5,10 22.5,10 C25.5,10 28,12.5 28,15.5 C28,19 25,24 18,29 C11,24 8,19 8,15.5 Z M0,18 C0,28 8,36 18,36 C28,36 36,28 36,18 C36,8 28,0 18,0 C8,0 0,8 0,18 Z"></path>
    <path class="heart"
          d="M8,15.5 C8,12.5 10.5,10 13.5,10 C15.5,10 17,11 18,12.5 C19,11 20.5,10 22.5,10 C25.5,10 28,12.5 28,15.5 C28,19 25,24 18,29 C11,24 8,19 8,15.5 Z"></path>
</svg>
                                    </span>

                                                </a>
                                            </li>
                                            <li class="col   col-12 col-t-6   ">


                                            <li class="col   col-12 col-t-6   ">
                                            <li class="col   col-12 col-t-6   ">
                                            <li class="col   col-12 col-t-6   ">
                                            <li class="col   col-12 col-t-6   ">
                                        </ul>

                                        <div class="paginator-container" data-hashtoquery="1">
                                            <div class="row pagination clearfix" data-itemcount="30" data-perpage="10"
                                                 data-curpage="1">


                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <div id="reviews-tab" class="reviews-tab" role="tabpanel" data-title="43 Reviews about African Big Cats Safaris (Tanzania)" style="opacity: 1;display: none">

                                    <div class="detail__title__block row">
                                        <div class="col col-12">
                                            <h2>Reviews</h2>
                                        </div>
                                    </div>

                                    <div class="detail__content__block row">

                                        <div class="col col-12 col-t-6 hide-d">

                                            <h5 class="subtitle">Average User Rating</h5>
                                            <div class="review-summary--oneline">
                                                <div class="stars    large    " title="5 / 5" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <meta itemprop="ratingValue" content="5.0">
                                                    <meta itemprop="worstRating" content="1">
                                                    <meta itemprop="bestRating" content="5">
                                                    <meta itemprop="reviewCount" content="43">
                                                </div>
                                                <span class="review-score"><em>5.0</em>/5</span>
                                            </div>

                                            <div class="hide show-t">
                                                <br>
                                                <a href="https://www.safaribookings.com/review/p3429" class="btn btn--white btn--autowidth btn--next" target="_blank" rel="nofollow">Write a Review</a>
                                            </div>
                                            <div class="hide-t">
                                                <br>
                                            </div>

                                        </div>
                                        <div class="col col-12 col-t-6 hide-d">

                                            <h5 class="subtitle">Rating Breakdown</h5>
                                            <div class="review-breakdown  ">
                                                <ul>
                                                    <li>
                                                        5 star
                                                        <span><em style="width: 100.0%"></em></span>
                                                        <a href="https://www.safaribookings.com/reviews/p3429?stars=5" data-ajax="reviews-tab">43</a>
                                                    </li>
                                                    <li>
                                                        4 star
                                                        <span><em style="width: 0.0%"></em></span>
                                                        <i>0</i>
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
                                            </div>
                                            <div class="hide-t">
                                                <br>
                                                <a href="https://www.safaribookings.com/review/p3429" class="btn btn--white btn--autowidth btn--next" target="_blank" rel="nofollow">Write a Review</a>
                                                <br>
                                                <br>
                                            </div>
                                            <br>

                                        </div>

                                        <div class="col col-12 reviewlist__sorting">
                                            <div>
                                                Sort By: <a href="https://www.safaribookings.com/reviews/p3429?s=date&amp;sd=asc" class="active-desc sb-red" data-ajax="reviews-tab" title="Sort by Date">Date</a> <a href="https://www.safaribookings.com/reviews/p3429?s=helpful&amp;sd=desc" data-ajax="reviews-tab" title="Sort by Most Helpful">Most Helpful</a> <a href="https://www.safaribookings.com/reviews/p3429?s=rating&amp;sd=desc" data-ajax="reviews-tab" title="Sort by Rating">Rating</a>            <span>
                <strong>1</strong>-<strong>10</strong> of 43 Reviews
            </span>
                                            </div>
                                        </div>

                                        <div class="col col-12 col-d-9 reviewlist__list">

                                            <div class="review initialized" id="58806" itemprop="reviews" itemscope="" itemtype="http://schema.org/Review">
                                                <div class="review__person" itemtype="http://schema.org/Person" itemscope="" itemprop="author">
                                                    <i class="sbi sbi--avatar-female"></i>
                                                    <strong class="review__person__name" itemprop="name">Natalia</strong>
                                                    <span class="review__person__country">&nbsp; – &nbsp; <div class="country-with-flag  " title="Spain">
                                    <img src="https://cfstatic.safaribookings.com/images/flags/es.png" class="country-with-flag__flag" alt="Spain" title="Spain">
                            <span class="txt--grey">
                            ES
                    </span>
    </div>
</span>
                                                    <meta itemprop="nationality" content="Spain">
                                                    <span class="review__person__when"><b>Visited:</b> April 2021</span>
                                                    <span class="review__person__reviewed"><b>Reviewed:</b> May 10, 2021</span>
                                                    <p>
                                                        <span><a href="https://www.safaribookings.com/or58806/contact" title="Contact Natalia" rel="overlay" data-overlay-hash="contact">Email Natalia</a></span>
                                                        &nbsp;|&nbsp;                         <span>50-65 years of age</span>
                                                        &nbsp;|&nbsp;                         <span>Experience level: first safari</span>
                                                    </p>
                                                    <span itemprop="gender" itemscope="" itemtype="http://schema.org/GenderType">
                <span itemprop="name" content="Female"></span>
            </span>
                                                </div>
                                                <div class="review__body">
                                                    <h5 itemprop="name">Amazing safari, great guide and very well organized</h5>

                                                    <div class="overallrating">
                                                        <div class="stars    large    " title="5 / 5" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <i class="sbi sbi--star"></i>
                                                            <meta itemprop="ratingValue" content="5">
                                                            <meta itemprop="worstRating" content="1">
                                                            <meta itemprop="bestRating" content="5">
                                                        </div>
                                                        <span class="review-score"><em>5</em>/5</span>
                                                    </div>


                                                    <p itemprop="reviewBody">I based the selection of the tour on the previous reviews and was not mistaken. From the very beginning the communication was very fluid, they answered all questions promtly and made suggestions on accomadation which resulted great.<br>
                                                        <br>
                                                        As I could see from other quotations safari was reasonably priced. As suggested, we finally decided to stay at Lake Manyara Kilimamoja lodge and it's definitely worth paying a little bit more. <br>
                                                        <br>
                                                        We took a private safari and I must give a special mention to our guide, Lordard. Very attentive and professional and made us feel easy and comfortable. Apart from this, he speaks good Spanish. The safari itself is a great experience, it's difficult to explain how impressive it was.<br>
                                                        <br>
                                                        Thanks a lot for this wordenful experience!<br>
                                                        <br>
                                                    </p>

                                                    <meta itemprop="url" content="https://www.safaribookings.com/reviews/p3429#58806">

                                                    <meta itemprop="dateCreated" content="2021-05-10" datetime="2021-05-10">

                                                    <div class="review__body__photos galleryitems" data-overlay-hash="p58806">
                                                        <a itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/MediaObject" href="https://cloudfront.safaribookings.com/reviews/operator/l/African_Big_Cats_Safaris-106506.jpg" title="" rel="overlay" class="galleryitem">
                                                            <img src="https://cloudfront.safaribookings.com/reviews/operator/s/African_Big_Cats_Safaris-106506.jpg" data-location="Photo by Natalia" data-country="included in the review of African Big Cats Safaris">
                                                            <meta itemprop="contentUrl" content="https://cloudfront.safaribookings.com/reviews/operator/l/African_Big_Cats_Safaris-106506.jpg">
                                                        </a>
                                                        <a itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/MediaObject" href="https://cloudfront.safaribookings.com/reviews/operator/l/African_Big_Cats_Safaris-106507.jpg" title="" rel="overlay" class="galleryitem">
                                                            <img src="https://cloudfront.safaribookings.com/reviews/operator/s/African_Big_Cats_Safaris-106507.jpg" data-location="Photo by Natalia" data-country="included in the review of African Big Cats Safaris">
                                                            <meta itemprop="contentUrl" content="https://cloudfront.safaribookings.com/reviews/operator/l/African_Big_Cats_Safaris-106507.jpg">
                                                        </a>
                                                        <a itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/MediaObject" href="https://cloudfront.safaribookings.com/reviews/operator/l/African_Big_Cats_Safaris-106508.jpg" title="" rel="overlay" class="galleryitem">
                                                            <img src="https://cloudfront.safaribookings.com/reviews/operator/s/African_Big_Cats_Safaris-106508.jpg" data-location="Photo by Natalia" data-country="included in the review of African Big Cats Safaris">
                                                            <meta itemprop="contentUrl" content="https://cloudfront.safaribookings.com/reviews/operator/l/African_Big_Cats_Safaris-106508.jpg">
                                                        </a>
                                                    </div>

                                                    <div class="review__body__footer">
                                                        <div>
                                        <span>
                                                                        Was this review helpful?
                                                                </span>

                                                            <span class="nowrap">
                                                <a href="javascript:void(0);" data-url="https://www.safaribookings.com/or58806" class="review_helpful_link review_helpful_yes"><i class="sbi sbi--like"></i><span>Yes</span></a>
                        <a href="javascript:void(0);" data-url="https://www.safaribookings.com/or58806" class="review_helpful_link review_helpful_no"><i class="sbi sbi--dislike"></i><span>No</span></a>
                    </span>
                                                        </div>
                                                        <a href="javascript:void(0)" class="hide show-ti link-to textual help" data-help="https://www.safaribookings.com/or58806" title="Copy the link to this review">Link to This Review</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="col col-0 col-d-3 hide show-d">

                                            <h5 class="subtitle">Average User Rating</h5>
                                            <div class="review-summary--oneline">
                                                <div class="stars    large    " title="5 / 5" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <i class="sbi sbi--star"></i>
                                                    <meta itemprop="ratingValue" content="5.0">
                                                    <meta itemprop="worstRating" content="1">
                                                    <meta itemprop="bestRating" content="5">
                                                    <meta itemprop="reviewCount" content="43">
                                                </div>
                                                <span class="review-score"><em>5.0</em>/5</span>
                                            </div>

                                            <h5 class="subtitle extramargin">Rating Breakdown</h5>
                                            <div class="review-breakdown  ">
                                                <ul>
                                                    <li>
                                                        5 star
                                                        <span><em style="width: 100.0%"></em></span>
                                                        <a href="https://www.safaribookings.com/reviews/p3429?stars=5" data-ajax="reviews-tab">43</a>
                                                    </li>
                                                    <li>
                                                        4 star
                                                        <span><em style="width: 0.0%"></em></span>
                                                        <i>0</i>
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
                                            </div>
                                            <a href="https://www.safaribookings.com/review/p3429" class="btn btn--orange btn--small btn--autowidth btn--next" target="_blank" rel="nofollow">Write a Review</a>

                                        </div>

                                    </div>

                                </div>
                                <div id="company-profile-tab" class="profile-tab" role="tabpanel" data-title="Company Profile of Spirit of Kenya" style="opacity: 1;display: none">

                                    <div class="detail__title__block row">
                                        <div class="col col-12">
                                            <h2>Company Profile</h2>
                                        </div>
                                    </div>

                                    <div class="detail__content__block row">

                                        <div class="col col-12 profile-desc">

                                            {{$user->description}}
                                        </div>

                                    </div>

                                    <div class="lazyload lazyload-mobile" data-load="https://www.safaribookings.com/destinations/p3099"></div>
                                    <div class="lazyload lazyload-mobile" data-load="https://www.safaribookings.com/operator-contact/p3099"></div>

                                </div>
                                <div id="destinations-tab" class="destinations-tab" role="tabpanel" data-title="List of countries Spirit of Kenya offers tours to" style="opacity: 1;display: none">

                                    <div class="detail__title__block row">
                                        <div class="col col-12">
                                            <h2>Destinations</h2>
                                        </div>
                                    </div>

                                    <div class="detail__content__block row">

                                        <div class="col col-12">

                                            {{$user->company_name}} offers tours to the following countries:

                                            <ul class="list list--icon list--icon-arrow list--icon-nopadding">

                                                @foreach($user->destinations as $destination)
                                                <li>
                                                    <div class="country-with-flag  " title="{{$destination->country}}">
{{--                                                        <svg class="country-with-flag__flag" data-role="svg-sprite">--}}
{{--                                                            <title>Kenya</title>--}}
{{--                                                            <use xlink:href="https://www.safaribookings.com/img/flags/flags-countries-reviewers.svg#ke"></use>--}}
{{--                                                        </svg>--}}

                                                            <span>

                                                                <a>{{$destination->country}}</a>
                                                               </span>
                                                            <span class="txt--xgrey">
                                                                  (Including custom tours to all parks &amp; accommodations)
                                                                </span>


                                                    </div>


                                                </li>
                                                @endforeach


                                            </ul>

                                        </div>

                                    </div>

                                </div>
                                <div id="contact-tab" class="contact-tab" role="tabpanel" data-title="Contact Spirit of Kenya" style="opacity: 1;display: none">

                                    <div class="detail__title__block row">
                                        <div class="col col-12">
                                            <h2>Contact</h2>
                                        </div>
                                    </div>

                                    <div class="detail__content__block row">

                                    @foreach($user->offices as $office)
                                        <div class="col col-12 col-t-6 detail__content__block--addressblock">
                                            <h5>{{$office->country}} Office </h5>
                                            {{$office->address}}, {{$office->city ?? ''}}, {{$office->state  ?? ''}}, {{$office->postal_code ?? ''}}<br><br>                                                                                                            <br>
                                        </div>
                                        @endforeach



                                    </div>


                                </div>
                            </div>


                            <div class="col col-12 operator_disclaimer">
                                <h3>Disclaimer</h3>
                                <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small txt--grey">
                                    <li>All corporate and/or tour info is provided by {{$user->company_name}}, not
                                        SafariBookings
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="hide-t floating-request-btn " data-role="request-cta-mobile">
                <a href="https://www.safaribookings.com/enquiry/form/p3424" target="blank" rel="overlay nofollow"
                   data-overlay-hash="request" class="btn btn--orange btn--reqquote">Get a Free Quote for a Custom
                    Tour</a>
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
