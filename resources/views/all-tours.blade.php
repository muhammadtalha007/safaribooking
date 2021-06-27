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
                                        <p><span class="review-score"><em>{{$item->rating}}</em>/5</span>&nbsp;&ndash;&nbsp;<span
                                                class="nowrap">{{$item->reviews}} Reviews</span></p>
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
