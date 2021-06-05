@extends('layouts.landing-app')
@section('content')
    <?php
    $countriesList = ["Botswana", "Congo (DRC)", "Ethiopia", "Kenya", "Madagascar", "Malawi", "Mozambique", "Namibia", "Rwanda", "South Africa", "Swaziland", "Tanzania", "Uganda", "Zambia", "Zimbabwe"];

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
        <div class="titlebar titlebar--tour hide show-t">
            <div class="container" data-filterbtn-txt="Filters">
                <div class="row hide show-t">
                    <ol class="col col-0 col-t-12 breadcrumbs">
                        <li>
                            You are here:
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="{{url('/')}}" title="SafariBookings.com">Home</a>
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="{{url('all-safari-tours')}}" title="All Tours"><span>All Tours</span></a>
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="#" title="African Safari Tours &amp; Holidays"
                               class="breadcrumbs__last"><span>African Safari Tours &amp; Holidays</span></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>


        <div class="container container--main container--tours-directory container--directory" itemscope
             itemtype="http://schema.org/Product">
            <div class="row">
                <div class="col col-0 col-d-3 filters ">
                    <form action="{{url('filter-tours')}}" method="post" id="searchingform">
                        @csrf
                        <div class="filters__close">Filter Options<a href="#"><i class="sbi sbi--cross"></i></a></div>
                        <div class="filters__all" data-role="filters-scroll">
                            <div
                                class="filters__block filters__block--tourpreferences messagebox  messagebox--yellow  ">
                                <h3 class="serif">Your Safari</h3>
                                <label for="destination">Destination</label>
                                <select id="destination" type="text" value="" name="destination" style="color: black">
                                    <option value="">Not selected</option>
                                    @foreach($countriesList as $country)
                                        @if(!empty($destination))
                                            <option
                                                value="{{$country}}" {{$destination == $country ? 'selected' : ''}}>{{$country}}</option>
                                        @else
                                            <option value="{{$country}}">{{$country}}</option>
                                        @endif
                                    @endforeach
                                </select>

                            </div>
                            <div class="filters__block filters__block--operator" data-var="operator">
                                <h3>Filter by Tour Title</h3>

                                <div class="col col-12 no-gutter"><input value="{{$tourTitle ?? ''}}" type="text"
                                                                         data-types="operators"
                                                                         data-labels="true" data-shadow="true"
                                                                         data-title="Select operator below"
                                                                         autocomplete="off" data-limit="6"
                                                                         name="tour_title"
                                                                         placeholder="type tour title"/>
                                </div>
                                <div class="autocomplete-holder"></div>
                            </div>
                            <div class="filters__block filters__block--operator" data-var="operator">
                                <h3>Min Price (USD)</h3>

                                <div class="col col-12 no-gutter"><input value="{{$minPrice ?? 0}}" type="text"
                                                                         data-types="operators"
                                                                         data-labels="true" data-shadow="true"
                                                                         data-title="Select operator below"
                                                                         autocomplete="off" data-limit="6"
                                                                         name="min_price"
                                                                         placeholder="min price"/>
                                </div>
                                <div class="autocomplete-holder"></div>
                            </div>
                            <div class="filters__block filters__block--operator" data-var="operator">
                                <h3>Max Price (USD)</h3>

                                <div class="col col-12 no-gutter"><input value="{{$maxPrice ?? 100000}}" type="text"
                                                                         data-types="operators"
                                                                         data-labels="true" data-shadow="true"
                                                                         data-title="Select operator below"
                                                                         autocomplete="off" data-limit="6"
                                                                         name="max_price"
                                                                         placeholder="max price"/>
                                </div>
                                <div class="autocomplete-holder"></div>
                            </div>
{{--                            <div class="filters__block" data-var="offices_in">--}}
{{--                                <h3>Office In</h3>--}}
{{--                                <ul>--}}
{{--                                    @foreach($offices as $key=>$office)--}}
{{--                                        <li class="filters__block__check  " data-hide="{{$key}}">--}}

{{--                                            @if(!empty($officesIn))--}}
{{--                                                <label for="cboffices_in{{$key}}">--}}
{{--                                                    <input--}}
{{--                                                        type="checkbox" id="cboffices_in{{$key}}" data-parent=""--}}
{{--                                                        data-var="op_australia" name="officeIn[]"--}}
{{--                                                        {{in_array($office->country, $officesIn) ? 'checked' : ''}} value="{{$office->country}}"/>{{$office->country}}--}}
{{--                                                </label>--}}
{{--                                            @else--}}
{{--                                                <label for="cboffices_in{{$key}}">--}}
{{--                                                    <input--}}
{{--                                                        type="checkbox" id="cboffices_in{{$key}}" data-parent=""--}}
{{--                                                        data-var="op_australia" name="officeIn[]"--}}
{{--                                                        value="{{$office->country}}"/>{{$office->country}}</label>--}}
{{--                                            @endif--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}

{{--                                </ul>--}}
{{--                            </div>--}}
                            <div class="filters__block" data-var='score'>
                                <h3>Operator Rating</h3>

                                <ul class="uncheckable-radio">
                                    <li class="filters__block__stars"><label for="cb30" title="5 stars & up">
                                            @if(!empty($rating))
                                                <input type="radio" name="rating" id="cb30" data-var="5"
                                                       value="5" {{$rating == 5 ? 'checked' : ''}}/>
                                            @else
                                                <input type="radio" name="rating" id="cb30" data-var="5" value="5"/>
                                            @endif

                                            <span>
                                            <div class="stars large" title="5 / 5">
                                                <i class="sbi sbi--star"></i>
                                                <i class="sbi sbi--star"></i>
                                                <i class="sbi sbi--star"></i>
                                                <i class="sbi sbi--star"></i>
                                                <i class="sbi sbi--star"></i>
                                            </div>
                                        </span>
                                            <span class="filters__block__stars__amount"
                                                  data-var="stars5"><span></span></span></label></li>
                                    <li class="filters__block__stars"><label for="cb31" title="4 stars & up">
                                            @if(!empty($rating))
                                                <input type="radio" name="rating" id="cb31" data-var="4"
                                                       value="4" {{$rating == 4 ? 'checked' : ''}}>

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
                                                <input type="radio" name="rating" id="cb32" data-var="3"
                                                       value="3" {{$rating == 3 ? 'checked' : ''}} />

                                            @else
                                                <input type="radio" name="rating" id="cb32" data-var="3" value="3"/>

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
                                                    type="radio" name="rating" id="cb33" data-var="2"
                                                    value="2" {{$rating == 2 ? 'checked' : ''}}/>
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
                                                    type="radio" name="rating" id="cb34" data-var="1"
                                                    value="1" {{$rating == 1 ? 'checked' : ''}}/>
                                            @else
                                                <input
                                                    type="radio" name="rating" id="cb34" data-var="1" value="1"/>
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
                <div class="col col-12 col-d-9 list--tours">
                    <div class="row row-header  row-header--withintro  ">

                        <div class="col col-12">
                            <h1 class="serif list--title  " data-ops="1,036" itemprop="name">African Safari Tours &amp;
                                Holidays</h1>
                            <div class="review-summary--oneline">
                                <div class="stars      " title="{{$ratingall}}/ 5" itemprop="aggregateRating" itemscope
                                     itemtype="http://schema.org/AggregateRating">
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <meta itemprop="ratingValue" content="4.8"/>
                                    <meta itemprop="worstRating" content="1"/>
                                    <meta itemprop="bestRating" content="5"/>
                                    <meta itemprop="reviewCount" content="59601"/>
                                </div>
                                <span class="review-score">
                                    <em>{{$ratingall}}</em>/5
                                </span>
                                &nbsp;&ndash;&nbsp;
                                <a href="#" class="jumpto">
                                   {{$reviewsall}}
                                    Safari
                                    Reviews
                                </a>
                            </div>
                        </div>

                        <div class="col col-12 intro">
                            <br>
                            @if(!empty($destination))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Destination: {{$destination ?? ''}}</span>
                            @endif
                            @if(!empty($tourTitle))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Tour Title: {{$tourTitle ?? ''}}</span>
                            @endif
                            @if(!empty($minPrice))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Min Price : {{$minPrice ?? ''}}</span>
                            @endif
                            @if(!empty($maxPrice))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Max Price : {{$maxPrice ?? ''}}</span>
                            @endif
                            @if(!empty($rating))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Rating: {{$rating ?? ''}}</span>
                            @endif
                            @if(!empty($officesIn))
                                <span style="padding: 8px;border-radius: 5px;background: lightgrey">Offices In : @foreach($officesIn as $officeq) {{$officeq ?? ''}} |  @endforeach</span>
                            @endif
                            <br>
                            <br>
                            <a id="fixedbutton" href="#" onclick="document.getElementById('searchingform').submit()" class="btn btn--orange search btn--next" style="background: black;border: black">Apply Filters
                            </a>
                            @if($filtered == true)
                                <a id="fixedbutton" style="background: maroon" href="{{url('all-safari-tours')}}" class="btn btn-secondary search">Remove Filters
                                </a>
                            @endif
{{--                            <p class="shorten-m-t" data-shorten-m="90" data-shorten-t="400"--}}
{{--                               data-shorten-label="Read more">--}}
{{--                                Does an African safari feature on your bucket list? It should! Africa has so much to--}}
{{--                                offer, from spectacular scenery, friendly people and cultural treasures to blissful--}}
{{--                                beaches. But above all else, it is the wildlife and safari lifestyle that will draw you--}}
{{--                                back, again and again. This well-known quote by Richard Mullin is so very true: ‘The--}}
{{--                                only man I envy, is the man who has not yet been to Africa – for he has so much to look--}}
{{--                                forward to’. Once you go on your first safari, Africa gets into your blood. You develop--}}
{{--                                a deep longing to return to this magical continent, and to start planning your next--}}
{{--                                African safari holiday. Be warned, Africa is very addictive!--}}
{{--                            </p>--}}
                        </div>

                        <div class="col col-12">
                            <div class="row row-d-0 filters-toggle" data-role="filters-toggle">
                                <div class="col col-12 filters-toggle__inner">
                                    <button class="btn btn--blue btn--filter">
                                        <i class="sbi sbi--filter"></i>
                                        Filters
                                    </button>
                                    <button class="btn btn--blue btn--filter btn--filter-whereto">
                                        <i class="sbi sbi--map-pin-blue sbi--xmedium"></i>
                                        Where To
                                    </button>
                                    <button class="btn btn--blue btn--filter btn--filter-tourlength">
                                        <i class="sbi sbi--calendar-blue sbi--xmedium"></i>
                                        Tour Length
                                    </button>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="row">
                        <div class="col col-12 selected-filters  reload hide ">
                            <span>Selected filters:</span>
                            <div class="selected-filters__item selected-filters__item--clear">Clear All Filters</div>
                        </div>
                    </div>

                    <div class="row list--numbers ">
                        <div class="col col-12 titlebar__sub">
                            <b class="itemcount" data-count="7886">
                                {{count($tours)}}
                            </b>
                            African safari trips, packages, holidays and vacations
                        </div>
                    </div>

                    <ul class="row list__snippets" itemprop="offers" itemscope
                        itemtype="http://schema.org/AggregateOffer">
                        @foreach($tours as $item)
                            <li class="col col-12 col-t-6">
                                <a class="list__item    " href="{{url('tour')}}/{{$item->id}}/details" target="_blank"
                                   data-id="17948"
                                   title="5-Day Living Among Lions - Mid-Range">
                                    <div class="list__item--image__full">

                                        <picture class="list__picture">
                                            <img
                                                src="{{env('OPERATOR_URL')}}/view-tour-icon/{{$item->id}}"
                                                data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021.jpg 1x"
                                                class="lazyload" alt="5-Day Living Among Lions - Mid-Range"/>
                                        </picture>

                                        <div class="holder-tourtitle">
                                            <h2 class="serif tourtitle">{{$item->total_days}}-Day {{$item->title}} -
                                                Mid-Range</h2>
                                        </div>

                                    </div>
                                    <div class="list__item--data  matchheight ">

                                        <p class="price">
                                            <b>${{$item->price}}</b> pp (USD)
                                        </p>


                                        <p class="desc">
                                            <b>{{$item->country_name}}:</b>
                                            Private tour
                                            @foreach($item->features as $feature)
                                                <span></span>
                                                <nobr>{{\App\Features::where('id', $feature->feature_id)->first()['name']}}</nobr>

                                            @endforeach
                                        </p>

                                        <p class="visit"><b>You Visit:</b> @foreach($item->routes as $route)
                                                <span style="color: #999">(start)</span> {{$route->route_name}}
                                            @endforeach,</p>
                                    </div>

                                    <div class="operator-snippet__data">
                                        <div class="opdata__image">
                                            <img
                                                src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$item->user->id}}"
                                                data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo_1478192437.gif"
                                                class="lazyload" alt="Unlimited Expeditions - The Soul of Tanzania"
                                                title="Unlimited Expeditions - The Soul of Tanzania"/>
                                        </div>
                                        <p>
                                            <b>
                                                {{$item->user->company_name}}

                                            </b>
                                        </p>
                                        <div class="stars      " title="5 / 5">
                                            <i class="sbi sbi--star"></i>
                                            <i class="sbi sbi--star"></i>
                                            <i class="sbi sbi--star"></i>
                                            <i class="sbi sbi--star"></i>
                                            <i class="sbi sbi--star"></i>
                                        </div>
                                        <p><span class="review-score"><em>5.0</em>/5</span>&nbsp;&ndash;&nbsp;<span
                                                class="nowrap">229 Reviews</span></p>
                                    </div>


                                    <span class="favorite-save  " data-id="17948" data-type="tour"
                                          title="Add to your favorites list">
                                        <img class="svg svg--shadowed"
                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                             alt="Not in favorites"/>
                                    </span>

                                </a>
                            </li>
                        @endforeach
                        <meta itemprop="lowPrice" content="450"/>
                        <meta itemprop="highPrice" content="4900"/>
                        <meta itemprop="priceCurrency" content="USD"/>
                        <meta itemprop="offerCount" content="7886"/>
                    </ul>


                    <div class="list__paginator  hide  ">
                        <div class="row pagination clearfix" data-itemcount="7886" data-perpage="20" data-curpage="1">
                            <div class="col col-2 col-t-2">
                                <div>
                                    <span class="btn btn--white btn--prev inactive"><span>Prev</span></span>
                                </div>
                            </div>


                            <div class="col col-0 col-t-7 col-d-8 col-w-7 ">
                                <span class="btn btn--white pagination__nmbr active">1</span>
                                <a class="btn btn--white pagination__nmbr " href="tours/page/2.html">2</a>
                                <a class="btn btn--white pagination__nmbr " href="tours/page/3.html">3</a>
                                <a class="btn btn--white pagination__nmbr " href="tours/page/4.html">4</a>
                                <a class="btn btn--white pagination__nmbr " href="tours/page/5.html">5</a>
                                <span class="pagination__dots">...</span>


                                <a class="btn btn--white pagination__nmbr " href="tours/page/395.html">395</a>
                            </div>
                            <div class="col col-5 col-t-0">
                                <span class="pagination__summary">Page <strong>1</strong> of <strong>395</strong></span>
                            </div>

                            <div class="col col-5 col-t-3 col-d-2 col-w-3">
                                <div>
                                    <a href="tours/page/2.html" class="btn btn--white btn--next">
                                        <span class="hide-t">Page 2</span>
                                        <span class="hide show-ti">Next</span>
                                    </a>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>
            </div>
        </div>

        <div class="directory-extra">
            {{--            <section class="relatedlinks">--}}
            {{--                <div class="container">--}}
            {{--                <span class="relatedlinks__mark">--}}
            {{--                                            <picture>--}}
            {{--                            <img src="../cfstatic.safaribookings.com/img/logos/mark-56x48.gif"--}}
            {{--                                 class="mark relatedlinks__mark-img"--}}
            {{--                                 srcset="https://cfstatic.safaribookings.com/img/logos/mark-56x48@2x.gif 2x"--}}
            {{--                                 alt="SafariBookings" title="SafariBookings">--}}
            {{--                        </picture>--}}
            {{--                                    </span>--}}
            {{--                    <h3 class="relatedlinks__top">Related Searches</h3>--}}
            {{--                    <ul class="relatedlinks__list flex flex--gutter flex--multiline">--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="operators.html">Safari Tour Operators</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="top-rated-operators.html">Top 10 Safari Operators</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/budget.html">African Budget Safaris</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/gorilla-trekking.html">Gorilla Trekking Tours</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/chimp-trekking.html">Chimp Trekking Tours</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/overland.html">African Overland Tours</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/camping.html">Camping Safaris</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/luxury-luxuryplus.html">African Luxury Safaris</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/honeymoon.html">Honeymoon Safaris</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/photographic.html">African Photographic Safaris</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/private.html">Private Safaris</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="relatedlinks__list-item">--}}
            {{--                            <a href="tours/family.html">Family Safaris</a>--}}
            {{--                        </li>--}}
            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            </section>--}}

            {{--            <div class="directory-content">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col col-12 col-d-4-5">--}}
            {{--                            <h1 class="serif hide-d">7 Questions About African Safari Tours</h1>--}}

            {{--                            <div class="box">--}}
            {{--                                <div class="expert" itemprop="author" itemscope itemtype="http://schema.org/Person">--}}
            {{--                                    <div>--}}
            {{--                                        <div class="expert__photo expert__photo--medium">--}}
            {{--                                            <div>--}}
            {{--                                                <img--}}
            {{--                                                    src="../cloudfront.safaribookings.com/assets/experts/84x84/Harriet_Nimmo.jpg"--}}
            {{--                                                    data-srcset="https://cloudfront.safaribookings.com/assets/experts/140x140/Harriet_Nimmo.jpg 2x"--}}
            {{--                                                    class="expert-photo placeholder lazyload" alt="Harriet Nimmo">--}}
            {{--                                            </div>--}}
            {{--                                            <span></span>--}}
            {{--                                            <i>Expert</i>--}}
            {{--                                        </div>--}}
            {{--                                        <h5 class="hide-d">Answered by</h5>--}}
            {{--                                        <h3 itemprop="name">Harriet Nimmo</h3>--}}
            {{--                                        <meta itemprop="image"--}}
            {{--                                              content="https://cloudfront.safaribookings.com/assets/experts/280x280/Harriet_Nimmo.jpg"/>--}}
            {{--                                        <meta itemprop="sameAs"--}}
            {{--                                              content="https://www.goodreads.com/author/show/3112656.Harriet_Nimmo"/>--}}
            {{--                                        <br/>--}}
            {{--                                        Harriet is a zoologist with more than 20 years’ experience working in--}}
            {{--                                        conservation communications. She has traveled extensively throughout central,--}}
            {{--                                        eastern and southern Africa, and has visited most of Africa’s national parks at--}}
            {{--                                        least twice.--}}
            {{--                                    </div>--}}
            {{--                                    &rsaquo; <a href="experts/harriet-nimmo.html" target="_blank">More about Harriet</a>--}}
            {{--                                </div>--}}

            {{--                                <div class="questions-links hide show-t">--}}
            {{--                                    <div class="question">--}}
            {{--                                        <a href="#q1" class="jumpto">--}}
            {{--                                            <span>1.</span>--}}
            {{--                                            Why should I choose an African safari?--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="question">--}}
            {{--                                        <a href="#q2" class="jumpto">--}}
            {{--                                            <span>2.</span>--}}
            {{--                                            Which are the best African countries for going on safari?--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="question">--}}
            {{--                                        <a href="#q3" class="jumpto">--}}
            {{--                                            <span>3.</span>--}}
            {{--                                            What time of year is best for going on an African safari?--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="question">--}}
            {{--                                        <a href="#q4" class="jumpto">--}}
            {{--                                            <span>4.</span>--}}
            {{--                                            What wildlife can I expect to see on an African safari?--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="question">--}}
            {{--                                        <a href="#q5" class="jumpto">--}}
            {{--                                            <span>5.</span>--}}
            {{--                                            What does a typical day look like on an African safari?--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="question">--}}
            {{--                                        <a href="#q6" class="jumpto">--}}
            {{--                                            <span>6.</span>--}}
            {{--                                            What are the typical costs of an African safari?--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="question">--}}
            {{--                                        <a href="#q7" class="jumpto">--}}
            {{--                                            <span>7.</span>--}}
            {{--                                            What should I consider when choosing an African safari?--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            &nbsp;--}}
            {{--                        </div>--}}
            {{--                        <div class="col col-0 col-d-0-5 hide show-d">&nbsp;</div>--}}

            {{--                        <div class="col col-12 col-d-7">--}}
            {{--                            <h1 class="serif hide show-d">7 Questions About African Safari Tours</h1>--}}
            {{--                            <div class="hide show-d answered-by">--}}
            {{--                                Answered by <img--}}
            {{--                                    src="../cloudfront.safaribookings.com/assets/experts/42x42/Harriet_Nimmo.jpg"--}}
            {{--                                    srcset="https://cloudfront.safaribookings.com/assets/experts/84x84/Harriet_Nimmo.jpg 2x"--}}
            {{--                                    class="avatar"/> <b>Harriet Nimmo</b>--}}
            {{--                            </div>--}}
            {{--                            <div class="questions">--}}
            {{--                                <div class="line"></div>--}}
            {{--                                <div class="question" id="q1">--}}
            {{--                                    <h2>Why should I choose an African safari?</h2>--}}
            {{--                                    <p>&#8220;There are so many reasons to choose an African safari. Going on safari is--}}
            {{--                                        an unforgettable experience, offering a heady mix of adventure, thrilling--}}
            {{--                                        wildlife sightings, cultural encounters and spectacular scenery.--}}

            {{--                                        It is a chance to escape the fast pace of the modern world. You’ll retreat to a--}}
            {{--                                        simpler, more peaceful way of life, reconnecting with the daily rhythms of--}}
            {{--                                        nature. For me, the wildlife sightings provide the adrenaline that keeps me--}}
            {{--                                        coming back, time and time again. Who can ever forget their first sighting of an--}}
            {{--                                        elephant in the wild or realizing just how tall a giraffe really is? And there--}}
            {{--                                        is something so primeval when hearing the roar of a lion under a glittering--}}
            {{--                                        night sky.--}}

            {{--                                        Finally, going on safari can help protect Africa’s wild animals and wild places.--}}
            {{--                                        The more paying visitors, the more local people are employed and the more--}}
            {{--                                        incentive there is to protect Africa’s natural wonders.&#8221;</p>--}}
            {{--                                    <span>1</span>--}}
            {{--                                </div>--}}
            {{--                                <div class="question" id="q2">--}}
            {{--                                    <h2>Which are the best African countries for going on safari?</h2>--}}
            {{--                                    <p>&#8220;All the classic safari countries make wonderful destinations for African--}}
            {{--                                        safari tours. These countries are Kenya, Tanzania, Zimbabwe, Botswana, Zambia--}}
            {{--                                        and South Africa.--}}
            {{--                                        Which country you choose may depend on whether you’d like to combine your safari--}}
            {{--                                        with another activity. For example you may like to add some beaches and/or--}}
            {{--                                        Zanzibar in East Africa. Or perhaps Victoria Falls between Zambia and Zimbabwe,--}}
            {{--                                        or fine dining around Cape Town and the winelands of South Africa.--}}

            {{--                                        If this is your first safari, South Africa makes a good option. The private--}}
            {{--                                        reserves bordering Kruger National Park can almost guarantee sightings of the--}}
            {{--                                        Big Five. South Africa also has good infrastructure and excellent levels of--}}
            {{--                                        service. However, you will not get the sweeping savannahs and ‘Out of Africa’--}}
            {{--                                        scenes here. For these you need to travel to Kenya or Tanzania. Of course, these--}}
            {{--                                        two countries also offer the incredible wildebeest migration. Note though, you--}}
            {{--                                        need to travel here at the right time of year to see this.--}}

            {{--                                        Zambia and Zimbabwe should also be considered. They have stunning national--}}
            {{--                                        parks, including South Luangwa and Hwange respectively. Both countries are--}}
            {{--                                        slightly more off the beaten track with less mass tourism.--}}

            {{--                                        Botswana perhaps feels the wildest of the safari countries, although this comes--}}
            {{--                                        with a price.&#8221;</p>--}}
            {{--                                    <span>2</span>--}}
            {{--                                </div>--}}
            {{--                                <div class="question" id="q3">--}}
            {{--                                    <h2>What time of year is best for going on an African safari?</h2>--}}
            {{--                                    <p>&#8220;The best time of year, and the peak season, for most safaris is the Dry--}}
            {{--                                        season. This is when the bush is less dense, and the wildlife is drawn to--}}
            {{--                                        waterholes. Generally the wildlife is easier to find and see at this time. The--}}
            {{--                                        Dry season means bright sunny days, and cooler nights. Of course, as the Dry--}}
            {{--                                        season is peak safari season, there are more travelers and prices are higher.--}}
            {{--                                        Dry season generally falls from May/June to September/October.--}}

            {{--                                        You may also wish to consider going during the ‘Green season’ (also known as the--}}
            {{--                                        Wet season or Emerald season). Although it may rain, often the showers are short--}}
            {{--                                        downpours and then the sun comes back out again. It can be much cheaper to--}}
            {{--                                        travel then, the bush is lush and green, and this is the breeding season for--}}
            {{--                                        many of the animals. In East Africa, there are two Green seasons – the long--}}
            {{--                                        rains between March and May, and the short rains from approximately October to--}}
            {{--                                        December. In southern Africa the Green season is approximately from November to--}}
            {{--                                        March. Temperatures can get very hot. Note that when it is wet there are more--}}
            {{--                                        bugs and a greater risk of malaria.&#8221;</p>--}}
            {{--                                    <span>3</span>--}}
            {{--                                </div>--}}
            {{--                                <div class="question" id="q4">--}}
            {{--                                    <h2>What wildlife can I expect to see on an African safari?</h2>--}}
            {{--                                    <p>&#8220;When it comes to seeing wildlife while on safari, this is wild nature and--}}
            {{--                                        nothing can be guaranteed. You may see plenty of animals, including the Big Five--}}
            {{--                                        (lion, leopard, rhino, buffalo and elephant). But there will be game drives when--}}
            {{--                                        you don’t see very much at all. That will make the sightings you do see all the--}}
            {{--                                        more special. The joy of safaris, and what makes them so addictive, is that you--}}
            {{--                                        just never know what you might see around the next corner. If you listen closely--}}
            {{--                                        to, and learn from your guide, you’ll be able to enjoy all aspects of Africa’s--}}
            {{--                                        wildlife. Everything from baobab trees to dung beetle, to chameleon and cheeky--}}
            {{--                                        mongoose. Don’t forget to also focus on the birds, as even a very quiet game--}}
            {{--                                        drive usually delivers some great bird sightings.&#8221;</p>--}}
            {{--                                    <span>4</span>--}}
            {{--                                </div>--}}
            {{--                                <div class="question" id="q5">--}}
            {{--                                    <h2>What does a typical day look like on an African safari?</h2>--}}
            {{--                                    <p>&#8220;All African safari holidays run to the same typical timetable. The best--}}
            {{--                                        times to see wildlife, particularly predators being active, is at the beginning--}}
            {{--                                        and end of the day. These golden hours at dawn and dusk are also the best times--}}
            {{--                                        for photography. So be prepared for very early starts!--}}

            {{--                                        You will usually be woken at dawn, and given tea, coffee, rusks or cereal. The--}}
            {{--                                        aim is to get going on your game drive as early as possible at first light. The--}}
            {{--                                        morning game drive usually lasts three to four hours, including a coffee and--}}
            {{--                                        comfort break. You return to your camp or lodge for brunch. Then you are free to--}}
            {{--                                        relax and take a siesta, or perhaps lie by the pool, during the middle of the--}}
            {{--                                        day. It’s a good idea to bring something to read for this down time.--}}

            {{--                                        Later in the afternoon you will meet again for tea and snacks, before setting--}}
            {{--                                        out on your second game drive of the day. This will usually include a stop for--}}
            {{--                                        sundowner drinks, to watch the setting sun. The game drive then returns to your--}}
            {{--                                        accommodation in the dark, using a spotlight to look for nocturnal animals.--}}
            {{--                                        Evening meals are usually served just after returning to camp. In some countries--}}
            {{--                                        night drives are offered after dinner at around 8pm. Such drives can be a unique--}}
            {{--                                        opportunity to spot nocturnal (only active at night) wildlife such as genets.--}}

            {{--                                        Unless you have paid for exclusive use, be prepared for sharing your game-drive--}}
            {{--                                        vehicle with other guests. This can be huge fun (although sometimes you need to--}}
            {{--                                        be quite tolerant). It is always a good idea to offer to swap around your--}}
            {{--                                        seating positions during your safari. &#8221;</p>--}}
            {{--                                    <span>5</span>--}}
            {{--                                </div>--}}
            {{--                                <div class="question" id="q6">--}}
            {{--                                    <h2>What are the typical costs of an African safari?</h2>--}}
            {{--                                    <p>&#8220;The costs of an African safari can vary enormously. You could pay anything--}}
            {{--                                        from US$125 to US$1000 per person, per night. Sometimes considerably more.--}}
            {{--                                        Safaris can be an expensive holiday, and you generally get what you pay for.--}}
            {{--                                        At the budget end of the spectrum are African safari packages where you join--}}
            {{--                                        organized tours, departing on set dates, with other groups of people. South--}}
            {{--                                        Africa and Kenya offer some of the best value-for-money safaris.--}}

            {{--                                        Your choice of accommodation will affect the cost of your safari. Mobile--}}
            {{--                                        safaris, where you sleep in tents, are great for groups of friends or families--}}
            {{--                                        traveling together. Some safari lodges have taken luxury to the extreme, with--}}
            {{--                                        private plunge pools etc. That said, you will probably have the same--}}
            {{--                                        wildlife-viewing experience as staying in a more rustic lodge. It’s a matter of--}}
            {{--                                        deciding what features are most important to you.--}}

            {{--                                        If your reserve or lodge is remote, getting there will also impact the price. To--}}
            {{--                                        visit the Okavango Delta, in Botswana, you can only fly into the Delta. There--}}
            {{--                                        are no road transfers, so this adds to the price of your trip. The Serengeti is--}}
            {{--                                        accessible by road, but this is a long, bone-rattling journey. It’s much easier--}}
            {{--                                        and more comfortable to take a quick trip in a small plane.--}}

            {{--                                        Whatever the costs of your safari, if you’ve experienced good service, do tip--}}
            {{--                                        generously. A few extra dollars or Euros will make a huge difference to your--}}
            {{--                                        guide or lodge staff.&#8221;</p>--}}
            {{--                                    <span>6</span>--}}
            {{--                                </div>--}}
            {{--                                <div class="question" id="q7">--}}
            {{--                                    <h2>What should I consider when choosing an African safari?</h2>--}}
            {{--                                    <p>&#8220;There is a lot of considerations to be taken into account when choosing an--}}
            {{--                                        African safari tour operator. These include:--}}

            {{--                                        If you are traveling with children, choose a family-friendly tour or lodge. In--}}
            {{--                                        addition, you may prefer to choose a safari in a malaria-free area, for example--}}
            {{--                                        in parts of South Africa.--}}

            {{--                                        What type of safari do you want to go on? There are organized tours, departing--}}
            {{--                                        on set dates, joining other groups of people. Or do you want an exclusive,--}}
            {{--                                        tailor-made safari just for you? Are you happy to camp or do you want to stay in--}}
            {{--                                        a luxury lodge? Your budget will probably determine your choices.--}}

            {{--                                        Do you want to combine your safari with beaches, South Africa’s winelands, or a--}}
            {{--                                        trip to Victoria Falls? This will help determine which country to--}}
            {{--                                        choose.&#8221;</p>--}}
            {{--                                    <span>7</span>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="directory-reviews" id="pagereviews">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col col-12">--}}
            {{--                            <h2 class="serif">--}}
            {{--                                Safari Reviews--}}
            {{--                            </h2>--}}
            {{--                            <div class="reviews">--}}
            {{--                                <div class="stars    large    " title="4.8 / 5">--}}
            {{--                                    <i class="sbi sbi--star"></i>--}}
            {{--                                    <i class="sbi sbi--star"></i>--}}
            {{--                                    <i class="sbi sbi--star"></i>--}}
            {{--                                    <i class="sbi sbi--star"></i>--}}
            {{--                                    <i class="sbi sbi--star"></i>--}}
            {{--                                </div>--}}

            {{--                                <span class="review-score"><em>4.8</em>/5</span>--}}
            {{--                                <strong>59601 Reviews</strong>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col col-12 col-t-6">--}}
            {{--                            <div class="review review--snippet">--}}
            {{--                                <div class="review__person matchheight">--}}
            {{--                                    <i class="sbi sbi--avatar-male"></i>--}}
            {{--                                    <div class="review__person__info">--}}
            {{--                                        <strong class="review__person__name">Yunga Lee</strong>--}}
            {{--                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div--}}
            {{--                                                class="country-with-flag  " title="Indonesia">--}}
            {{--                                    <img src="../cfstatic.safaribookings.com/images/flags/id.png"--}}
            {{--                                         class="country-with-flag__flag" alt="Indonesia" title="Indonesia"/>--}}
            {{--                            <span class="txt--grey">--}}
            {{--                            ID--}}
            {{--                    </span>--}}
            {{--    </div>--}}
            {{--</span>--}}
            {{--                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 20, 2021</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="review__body">--}}
            {{--                                    <h5>Amazing, Amazing, AMAZING!</h5>--}}
            {{--                                    <div class="stars      " title="5 / 5">--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                    </div>--}}
            {{--                                    <span class="review-score"><em>5</em>/5</span>--}}
            {{--                                    <p>We initially booked our 5 day safari back in May and decided to go despite--}}
            {{--                                        COVID-19 outbreak and flight cancellations. We are grateful to Africa Polecat--}}
            {{--                                        safaris for making this trip happen and highly recommend them to everyone.--}}
            {{--                                        Our...</p>--}}
            {{--                                    <p><a href="reviews.html#58950">Full Review</a></p>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="col col-12 col-t-6">--}}
            {{--                            <div class="review review--snippet">--}}
            {{--                                <div class="review__person matchheight">--}}
            {{--                                    <i class="sbi sbi--avatar-male"></i>--}}
            {{--                                    <div class="review__person__info">--}}
            {{--                                        <strong class="review__person__name">Hou</strong>--}}
            {{--                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div--}}
            {{--                                                class="country-with-flag  " title="China">--}}
            {{--                                    <img src="../cfstatic.safaribookings.com/images/flags/cn.png"--}}
            {{--                                         class="country-with-flag__flag" alt="China" title="China"/>--}}
            {{--                            <span class="txt--grey">--}}
            {{--                            CN--}}
            {{--                    </span>--}}
            {{--    </div>--}}
            {{--</span>--}}
            {{--                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 20, 2021</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="review__body">--}}
            {{--                                    <h5>Perfect from start to the end</h5>--}}
            {{--                                    <div class="stars      " title="5 / 5">--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                    </div>--}}
            {{--                                    <span class="review-score"><em>5</em>/5</span>--}}
            {{--                                    <p>Jong was amazing from the start to the end of our safari. He was helpful and--}}
            {{--                                        responsive when having the process of planning. The whole safari went smoothly--}}
            {{--                                        and without any problem. The hotels, tour guides were all fantastic. I--}}
            {{--                                        recommend...</p>--}}
            {{--                                    <p><a href="reviews.html#58949">Full Review</a></p>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col col-12 col-t-6">--}}
            {{--                            <div class="review review--snippet">--}}
            {{--                                <div class="review__person matchheight">--}}
            {{--                                    <i class="sbi sbi--avatar-female"></i>--}}
            {{--                                    <div class="review__person__info">--}}
            {{--                                        <strong class="review__person__name">Kelsey</strong>--}}
            {{--                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div--}}
            {{--                                                class="country-with-flag  " title="Rwanda">--}}
            {{--                    <svg class="country-with-flag__flag" data-role="svg-sprite">--}}
            {{--                <title>Rwanda</title>--}}
            {{--                                    <use xlink:href="img/flags/flags-countries-reviewers.svg#rw"></use>--}}
            {{--                            </svg>--}}
            {{--                <span class="txt--grey">--}}
            {{--                            RW--}}
            {{--                    </span>--}}
            {{--    </div>--}}
            {{--</span>--}}
            {{--                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 20, 2021</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="review__body">--}}
            {{--                                    <h5>Professional, knowledgeable and flexible</h5>--}}
            {{--                                    <div class="stars      " title="5 / 5">--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                    </div>--}}
            {{--                                    <span class="review-score"><em>5</em>/5</span>--}}
            {{--                                    <p>Communication - great via email beforehand. Communication during trip also--}}
            {{--                                        good.<br/>--}}
            {{--                                        Service - guide was knowledgeable and chef was fantastic <br/>--}}
            {{--                                        Value for money - fair <br/>--}}
            {{--                                        Reliability - great! <br/>--}}
            {{--                                        Tour - highly recommend </p>--}}
            {{--                                    <p><a href="reviews.html#58947">Full Review</a></p>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="col col-12 col-t-6">--}}
            {{--                            <div class="review review--snippet">--}}
            {{--                                <div class="review__person matchheight">--}}
            {{--                                    <i class="sbi sbi--avatar-male"></i>--}}
            {{--                                    <div class="review__person__info">--}}
            {{--                                        <strong class="review__person__name">Mrinmoy Das</strong>--}}
            {{--                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div--}}
            {{--                                                class="country-with-flag  " title="India">--}}
            {{--                                    <img src="../cfstatic.safaribookings.com/images/flags/in.png"--}}
            {{--                                         class="country-with-flag__flag" alt="India" title="India"/>--}}
            {{--                            <span class="txt--grey">--}}
            {{--                            IN--}}
            {{--                    </span>--}}
            {{--    </div>--}}
            {{--</span>--}}
            {{--                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 19, 2021</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="review__body">--}}
            {{--                                    <h5>A professional operator who understands the subject throughly .</h5>--}}
            {{--                                    <div class="stars      " title="5 / 5">--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                    </div>--}}
            {{--                                    <span class="review-score"><em>5</em>/5</span>--}}
            {{--                                    <p>Every team members in their Nairobi office and the Masai mara camp is well--}}
            {{--                                        trained. We always felt at home .Each rides are planned on time .The Drivers are--}}
            {{--                                        very polite and answers every quiry enroute to Masai mara as well as in game--}}
            {{--                                        rides....</p>--}}
            {{--                                    <p><a href="reviews.html#58943">Full Review</a></p>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col col-12 col-t-6">--}}
            {{--                            <div class="review review--snippet">--}}
            {{--                                <div class="review__person matchheight">--}}
            {{--                                    <i class="sbi sbi--avatar-male"></i>--}}
            {{--                                    <div class="review__person__info">--}}
            {{--                                        <strong class="review__person__name">Artem K.</strong>--}}
            {{--                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div--}}
            {{--                                                class="country-with-flag  " title="Ukraine">--}}
            {{--                                    <img src="../cfstatic.safaribookings.com/images/flags/ua.png"--}}
            {{--                                         class="country-with-flag__flag" alt="Ukraine" title="Ukraine"/>--}}
            {{--                            <span class="txt--grey">--}}
            {{--                            UA--}}
            {{--                    </span>--}}
            {{--    </div>--}}
            {{--</span>--}}
            {{--                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 19, 2021</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="review__body">--}}
            {{--                                    <h5>Highly recommended</h5>--}}
            {{--                                    <div class="stars      " title="5 / 5">--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                    </div>--}}
            {{--                                    <span class="review-score"><em>5</em>/5</span>--}}
            {{--                                    <p>So where do I begin... It was always one of dreams of mine to travel to Africa--}}
            {{--                                        and oh boy it didn&#039;t disappoint. I can&#039;t begin to describe the beauty--}}
            {{--                                        and grandeur unfolding right in front of our own eyes as we travelled from one--}}
            {{--                                        natural...</p>--}}
            {{--                                    <p><a href="reviews.html#58942">Full Review</a></p>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="col col-12 col-t-6">--}}
            {{--                            <div class="review review--snippet">--}}
            {{--                                <div class="review__person matchheight">--}}
            {{--                                    <i class="sbi sbi--avatar-male"></i>--}}
            {{--                                    <div class="review__person__info">--}}
            {{--                                        <strong class="review__person__name">Robert McDonald</strong>--}}
            {{--                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div--}}
            {{--                                                class="country-with-flag  " title="United States">--}}
            {{--                                    <img src="../cfstatic.safaribookings.com/images/flags/us.png"--}}
            {{--                                         class="country-with-flag__flag" alt="United States" title="United States"/>--}}
            {{--                            <span class="txt--grey">--}}
            {{--                            US--}}
            {{--                    </span>--}}
            {{--    </div>--}}
            {{--</span>--}}
            {{--                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 19, 2021</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="review__body">--}}
            {{--                                    <h5>Climbing mountains and Safari</h5>--}}
            {{--                                    <div class="stars      " title="5 / 5">--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                        <i class="sbi sbi--star"></i>--}}
            {{--                                    </div>--}}
            {{--                                    <span class="review-score"><em>5</em>/5</span>--}}
            {{--                                    <p>We had an excellent 3-week trip to Tanzania with Altezza. The guide Albert was--}}
            {{--                                        excellent at helping and supervising everyone on the climbs (Mt. Meru &amp; Mt--}}
            {{--                                        Kilimanjaro) and the pace he set was ideal for everyone to make it to the--}}
            {{--                                        top...</p>--}}
            {{--                                    <p><a href="reviews.html#58941">Full Review</a></p>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col col-12 all-btn">--}}
            {{--                            <a href="reviews.html" class="btn btn--white btn--autowidth-t btn--next">--}}
            {{--                                All 59601 Safari Reviews--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
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
