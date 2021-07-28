@extends('layouts.landing-app')
<!--====== BANNER PART START ======-->
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
        .focusbtncustom{
            margin-top: 10px;
            background: white;
            color: black;
            font-weight: normal;
            box-shadow: none;
            outline: none;
            border: none;
        }
        .focusbtncustom:focus{
            outline: none!important;
            border: none!important;;
            box-shadow: none!important;;
        }
    </style>
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

        {{--        <div class="messagebox messagebox--orange messagebox--bar">--}}
        {{--            <a href="coronavirus.html" class="nowrap">--}}
        {{--                <i class="sbi sbi--info-blue"></i>--}}
        {{--                Coronavirus (COVID-19) Support--}}
        {{--            </a>--}}
        {{--        </div>--}}
        <div class="container container--main container--home container--tourpref   ">
            <div class="opener">
                <h1 class="serif">{{\App\HomePage::all()[0]['main_text']}}</h1>
                <h2 class="serif">Offered by <B>{{\App\User::all()->count()}}</B> Tour Operators</h2>
                <form id="mainsearchid" class="row tourpreferences  skip-first-count  " action="{{url('filter-tours')}}" method="post">
                   @csrf
                    <input name="tour_title" id="tour_title" type="hidden" value="">
                    <input name="min_price" id="min_price" type="hidden" value="0">
                    <input name="max_price" id="max_price" type="hidden" value="100000">
                    <input name="rating" id="rating" type="hidden" value="">
                    <div class="col col-t-3-5 tourpreferences__block tourpreferences__destination">
{{--                        <i class="sbi sbi--map-pin row-icon"></i>--}}
                        <select id="destination" type="text" value="" name="destination" style="color: black;border: none">
                            <option value="">Select Destination</option>
                            @foreach(\App\Countries::all() as $country)

                                <option value="{{$country->name}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col col-t-2-5 tourpreferences__block tourpreferences__date  " style="padding-left: 0px!important;padding: 2px!important;">
{{--                        <i class="sbi sbi--calendar row-icon"></i>--}}
{{--                        <span>Start Date</span>--}}
                        <input type="date" name="startDate" placeholder="Start Date" style="padding: 0px!important;border: none">
                    </div>
                    <div class="col col-t-3 tourpreferences__block tourpreferences__persons  filled  " style="padding-left: 0px!important;">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle focusbtncustom" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Select Travelers
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 15px">
                                <div class="dropdown-item" >
                                    <span style="font-weight: bold">Adults:</span>
                                    <input value="2" name="adults" placeholder="Adults" type="text">
                                </div>
                                <div class="dropdown-item" >
                                    <span style="font-weight: bold">Children:</span>
                                    <input value="0" name="children" placeholder="Children" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-t-3  ">
                        <a  onclick="document.getElementById('mainsearchid').submit()" class="btn btn--blue search btn--next" style="background: black;margin-top: 0px">Show Tours</a>
                    </div>
                </form>

            </div>
            <div class="img-holder">
            {{--                <picture>--}}
            <!--[if IE 9]>
{{--                    <video style="display: none;"><![endif]-->--}}
            {{--                    <source data-srcset="https://cloudfront.safaribookings.com/assets/home-3-1920x768.jpg"--}}
            {{--                            media="(min-width: 1441px)" class="lazyload">--}}
            {{--                    <source data-srcset="https://cloudfront.safaribookings.com/assets/home-3-1440x576.jpg"--}}
            {{--                            media="(min-width: 1281px)" class="lazyload">--}}
            {{--                    <source data-srcset="https://cloudfront.safaribookings.com/assets/home-3-1280x512.jpg"--}}
            {{--                            media="(min-width: 1025px)" class="lazyload">--}}
            {{--                    <source data-srcset="https://cloudfront.safaribookings.com/assets/home-3-1024x410.jpg"--}}
            {{--                            media="(min-width: 970px)" class="lazyload">--}}
            {{--                    <source data-srcset="https://cloudfront.safaribookings.com/assets/home-3-969x581.jpg"--}}
            {{--                            media="(min-width: 769px)" class="lazyload">--}}
            {{--                    <source--}}
            {{--                        data-srcset="https://cloudfront.safaribookings.com/assets/home-3-768x461-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/home-3-768x461.jpg 1x"--}}
            {{--                        media="(min-width: 744px)" class="lazyload">--}}
            {{--                    <source--}}
            {{--                        data-srcset="https://cloudfront.safaribookings.com/assets/home-mobile-3-743x1200-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/home-mobile-3-743x1200.jpg 1x"--}}
            {{--                        media="(min-width: 415px)" class="lazyload">--}}
            {{--                    <!--[if IE 9]></video><![endif]-->--}}
                <img data-src="https://cloudfront.safaribookings.com/assets/home-mobile-3-414x1200.jpg"
                     data-srcset="https://cloudfront.safaribookings.com/assets/home-mobile-3-414x1200-2x.jpg 2x"
                     class="lazyload img__3" alt=""/>
            </picture>-->

                <img src="{{env('ADMIN_URL')}}/view-main-file"
                     data-srcset="{{env('ADMIN_URL')}}/view-main-file"
                     class="lazyload img__3" alt=""/>
            </div>
        </div>


        <div class="container container--main container--home-toprated" style="margin-top: 70px">
            <div class="row">
                <div class="col col-12">
                    <h2 class="container--home__heading">Best Safari Countries</h2>
                </div>
            </div>

            <div class="row">
                <div class="shadowed-box shadowed-box--hover">
                    <div class="container--home-toprated__mobnav hide hide-t container--home-toprated__navigation">
                        <div class="container--home-toprated__mobnav__buttons">
                            <a href="javascript:void(0)"
                               class="btn btn--trans btn--next container--home-toprated__mobnext"
                               title="Next country"><span>Next</span><span> Country</span></a>
                            <a href="javascript:void(0)"
                               class="btn btn--trans btn--prev container--home-toprated__mobprev hide"
                               title="Previous country"></a>
                        </div>
                    </div>
                    <div class="col col-0 col-t-3-5 col-d-3 container--home-toprated__list" style="height: 400px">
                        <ul>
                            @foreach(\App\Countries::all() as $key => $country)
                            <li class="{{$key == 0 ? 'active' : ''}}" id="{{$country->name}}-link" onclick="topSafariCountries('{{$country->name}}', {{\App\Countries::all()}})">
                                <span class="txt--grey">#{{$key+1}}</span> <b>{{$country->name}}</b>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col col-12 col-t-8-5 col-d-9 container--home-toprated__content"
                         data-show=".container--home-toprated__navigation">
                        @foreach(\App\Countries::all() as $key => $country)
                            @if($key == 0)
                                <div id="{{$country->name}}-id" class="container--home-toprated__info" style="display: block;">
                            @else
                                        <div id="{{$country->name}}-id" class="container--home-toprated__info" style="display: none;">
                            @endif
                                <div class="container--home-toprated__info__bg">

                                </div>
                                <div class="container--home-toprated__info__content">

                                    <h3 class="serif"><a href="#"
                                                         title="About {{$country->name}}">{{$country->name}}</a></h3>
                                    <br>
                                    <br>
                                    <p class="container--home-toprated__info__content__extrapaddingtablet">{{$country->description}} </p>
                                    <br>

                                    <ul class="row">
                                        <li class="col col-12 col-t-4 no-gutter"><i
                                                class="sbi  sbi--dollar-small  show hide-t"></i><i
                                                class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                    class="txt--normal">(USD)</span> </b> {{$country->rates}}
                                        </li>
                                        <li class="col col-12 col-t-4 no-gutter"><i
                                                class="sbi sbi--best-time show hide-t"></i><i
                                                class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                    class="hide show-di">&nbsp;to Go</span></b> {{$country->best_time}}
                                        </li>
                                        <li class="col col-12 col-t-4 no-gutter"><i
                                                class="sbi sbi--high-season show hide-t"></i><i
                                                class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b>
                                            {{$country->high_seasons}}
                                        </li>
                                    </ul>

                                    <a onclick="searchToursFunc('{{$country->name}}')"
                                       class="btn btn--autowidth btn--transparent hide show-ti"
                                       title="3,152 Tanzania Safaris">{{$country->name}} Safaris</a>
                                    <a onclick="searchOperatorsFunc('{{$country->name}}')"
                                       class="btn btn--autowidth btn--transparent hide show-ti"
                                       title="Tanzania Operators"><b>{{$country->name}} </b> Operators</a>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>

            </div>

        </div>

        <div class="container container--main container--home-trendingtours">
            <div class="row">
                <div class="col col-12">
                    <h2 class="container--home-trendingtours__title container--home__heading">Popular Safari Tours</h2>
                </div>
            </div>

            <div class="list--tours row">
                <ul class="row">
                    @foreach($tours as $item)
                        <li class="col   col-12 col-t-6 col-d-4   ">
                            <a class="list__item    " href="{{url('tour')}}/{{$item->id}}/details" target="_blank" data-id="17948"
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
                    {{--                    <li class="col   col-12 col-t-6 col-d-4   ">--}}
                    {{--                        <a class="list__item    " href="tours/t12596.html" target="_blank" data-id="12596"--}}
                    {{--                           title="4-Day Pearl of Africa Trip Including Gorilla Trekking">--}}
                    {{--                            <div class="list__item--image__full">--}}

                    {{--                                <picture class="list__picture">--}}
                    {{--                                    <!--[if IE 9]>--}}
                    {{--                                    <video style="display: none;"><![endif]-->--}}
                    {{--                                    <source--}}
                    {{--                                        data-srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_007.jpg"--}}
                    {{--                                        media="(min-width: 501px) and (max-width: 743px)" class="lazyload">--}}
                    {{--                                    <!--[if IE 9]></video><![endif]-->--}}
                    {{--                                    <img--}}
                    {{--                                        data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
                    {{--                                        data-srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007.jpg 1x"--}}
                    {{--                                        class="lazyload" alt="4-Day Pearl of Africa Trip Including Gorilla Trekking"/>--}}
                    {{--                                    <noscript>--}}
                    {{--                                        <source--}}
                    {{--                                            srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_007.jpg"--}}
                    {{--                                            media="(min-width: 501px) and (max-width: 743px)">--}}
                    {{--                                        <img--}}
                    {{--                                            src="../cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007.jpg"--}}
                    {{--                                            srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007@2x.jpg 2x"/>--}}
                    {{--                                    </noscript>--}}
                    {{--                                </picture>--}}

                    {{--                                <div class="holder-tourtitle">--}}
                    {{--                                    <h2 class="serif tourtitle">4-Day Pearl of Africa Trip Including Gorilla--}}
                    {{--                                        Trekking</h2>--}}
                    {{--                                </div>--}}

                    {{--                            </div>--}}
                    {{--                            <div class="list__item--data  matchheight ">--}}

                    {{--                                <p class="price">--}}
                    {{--                                    <b>$1,487</b>--}}
                    {{--                                    pp (USD)--}}
                    {{--                                </p>--}}


                    {{--                                <p class="desc">--}}
                    {{--                                    <b>Uganda:</b>--}}
                    {{--                                    Private tour<span></span>Budget<span></span>Tented Camp & Resort--}}
                    {{--                                </p>--}}

                    {{--                                <p class="visit"><b>You Visit:</b> Entebbe <span>(Start)</span>, Lake Mburo NP, Bwindi--}}
                    {{--                                    NP <span class="grey">(Gorillas)</span>, Lake Bunyonyi, <span class="nowrap">Entebbe Airport <span>(End)</span></span>--}}
                    {{--                                </p>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="operator-snippet__data">--}}
                    {{--                                <div class="opdata__image">--}}
                    {{--                                    <img--}}
                    {{--                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
                    {{--                                        data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo1_1499683350.gif"--}}
                    {{--                                        class="lazyload" alt="Home To Africa Tours and Travel"--}}
                    {{--                                        title="Home To Africa Tours and Travel"/>--}}
                    {{--                                </div>--}}
                    {{--                                <p>--}}
                    {{--                                    <b>--}}
                    {{--                                        Home To Africa Tours and Travel--}}

                    {{--                                    </b>--}}
                    {{--                                </p>--}}
                    {{--                                <div class="stars      " title="5 / 5">--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                </div>--}}
                    {{--                                <p><span class="review-score"><em>5.0</em>/5</span>&nbsp;&ndash;&nbsp;<span--}}
                    {{--                                        class="nowrap">154 Reviews</span></p>--}}
                    {{--                            </div>--}}


                    {{--                            <span class="favorite-save  " data-id="12596" data-type="tour"--}}
                    {{--                                  title="Add to your favorites list">--}}
                    {{--                                        <img class="svg svg--shadowed"--}}
                    {{--                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"--}}
                    {{--                                             alt="Not in favorites"/>--}}
                    {{--                                    </span>--}}

                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="col   col-12 col-t-6 col-d-4   ">--}}
                    {{--                        <a class="list__item    " href="tours/t20511.html" target="_blank" data-id="20511"--}}
                    {{--                           title="8-Day Migration Serengeti (Jun to Jul) Mid -Range">--}}
                    {{--                            <div class="list__item--image__full">--}}

                    {{--                                <picture class="list__picture">--}}
                    {{--                                    <!--[if IE 9]>--}}
                    {{--                                    <video style="display: none;"><![endif]-->--}}
                    {{--                                    <source--}}
                    {{--                                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Serengeti_National_Park_034.jpg"--}}
                    {{--                                        media="(min-width: 501px) and (max-width: 743px)" class="lazyload">--}}
                    {{--                                    <!--[if IE 9]></video><![endif]-->--}}
                    {{--                                    <img--}}
                    {{--                                        data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
                    {{--                                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034.jpg 1x"--}}
                    {{--                                        class="lazyload" alt="8-Day Migration Serengeti (Jun to Jul) Mid -Range"/>--}}
                    {{--                                    <noscript>--}}
                    {{--                                        <source--}}
                    {{--                                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Serengeti_National_Park_034.jpg"--}}
                    {{--                                            media="(min-width: 501px) and (max-width: 743px)">--}}
                    {{--                                        <img--}}
                    {{--                                            src="../cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034.jpg"--}}
                    {{--                                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034@2x.jpg 2x"/>--}}
                    {{--                                    </noscript>--}}
                    {{--                                </picture>--}}

                    {{--                                <div class="holder-tourtitle">--}}
                    {{--                                    <h2 class="serif tourtitle">8-Day Migration Serengeti (Jun to Jul) Mid -Range</h2>--}}
                    {{--                                </div>--}}

                    {{--                            </div>--}}
                    {{--                            <div class="list__item--data  matchheight ">--}}

                    {{--                                <p class="price">--}}
                    {{--                                    <b>$2,920</b>--}}
                    {{--                                    pp (USD)--}}
                    {{--                                </p>--}}


                    {{--                                <p class="desc">--}}
                    {{--                                    <b>Tanzania:</b>--}}
                    {{--                                    Private tour<span></span>--}}
                    {{--                                    <nobr>Mid-range</nobr>--}}
                    {{--                                    <span></span>Lodge & Tented Camp--}}
                    {{--                                </p>--}}

                    {{--                                <p class="visit"><b>You Visit:</b> Arusha <span>(Start)</span>, Lake Manyara NP,--}}
                    {{--                                    Serengeti NP, Ngorongoro Highlands, Ngorongoro Crater, Tarangire NP, <span--}}
                    {{--                                        class="nowrap">Arusha <span>(End)</span></span></p>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="operator-snippet__data">--}}
                    {{--                                <div class="opdata__image">--}}
                    {{--                                    <img--}}
                    {{--                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
                    {{--                                        data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo-safari-boo_1472481300.gif"--}}
                    {{--                                        class="lazyload" alt="Lion King Adventures" title="Lion King Adventures"/>--}}
                    {{--                                </div>--}}
                    {{--                                <p>--}}
                    {{--                                    <b>--}}
                    {{--                                        Lion King Adventures--}}

                    {{--                                    </b>--}}
                    {{--                                </p>--}}
                    {{--                                <div class="stars      " title="5 / 5">--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                    <i class="sbi sbi--star"></i>--}}
                    {{--                                </div>--}}
                    {{--                                <p><span class="review-score"><em>5.0</em>/5</span>&nbsp;&ndash;&nbsp;<span--}}
                    {{--                                        class="nowrap">333 Reviews</span></p>--}}
                    {{--                            </div>--}}


                    {{--                            <span class="favorite-save  " data-id="20511" data-type="tour"--}}
                    {{--                                  title="Add to your favorites list">--}}
                    {{--                                        <img class="svg svg--shadowed"--}}
                    {{--                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"--}}
                    {{--                                             alt="Not in favorites"/>--}}
                    {{--                                    </span>--}}

                    {{--                        </a>--}}
                    {{--                    </li>--}}
                </ul>
            </div>
            <div class="row">
                <div class="col col-12">

                    <div class="button-holder">
                        <a class="btn btn--next btn--white btn--autowidth-t" href="{{url('all-safari-tours')}}"
                           title="All 7,986 Safari Tours">All {{\App\Tours::all()->count()}} Safari Tours</a>
                    </div>

                </div>
            </div>
        </div>


        <div class="container container--main container--home-topratedoperators topratedoperators" role="main">
            <div class="row">
                <div class="col col-12">
                    <h2 class="container--home-topratedoperators__title container--home__heading">Top Rated Tour
                        Operators</h2>
                </div>
            </div>

            <div class="row">
                @foreach($operators as $key => $operator)
                    <div class="col col-12 col-t-4 col-d-3">
                        <a href="{{url('operator-profile')}}/{{$operator->id}}" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "
                           data-id="4494" target="_blank">

                            <div class="topratedoperators__snippet__rank"><span>#{{$key+1}}</span></div>

                            <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">
                                <div class="operator_name">
                                    <h2>
                                        {{$operator->company_name}}
                                    </h2>

                                </div>
                            </div>

                            <div class="topratedoperators__snippet__head hide show-t col col-12">
                                <picture>
                                    <img
                                        src="{{env('OPERATOR_URL')}}/view-user-file/{{$operator->id}}"
                                        data-src="https://cloudfront.safaribookings.com/operators/photos/0a8a9799-编辑_副本_4494_5e4ecbaf30995.jpg"
                                        data-srcset="https://cloudfront.safaribookings.com/operators/photos/0a8a9799-编辑_副本_4494_5e4ecbaf30995.jpg"
                                        class="operator-photo lazyload" title="Sino Africa Safari"
                                        alt="Sino Africa Safari Photo"/>
                                    <noscript>
                                        <img
                                            src="../cloudfront.safaribookings.com/operators/photos/0a8a9799-%e7%bc%96%e8%be%91_%e5%89%af%e6%9c%ac_4494_5e4ecbaf30995.jpg"
                                            title="Sino Africa Safari" alt="Sino Africa Safari Photo">
                                    </noscript>
                                </picture>
                                <div class="operator_name">
                                    <h2>
                                        {{$operator->company_name}}
                                    </h2>
                                    <div class="rank show hide-t">
                                        <i class="sbi sbi--medal medal"></i>
                                        #1 of all tour operators
                                    </div>
                                </div>
                                <span class="favorite-save  " data-id="4494" data-type="operator"
                                      title="Add to your favorites list">
                                        <img class="svg svg--shadowed"
                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                             alt=""/>
                                    </span>
                            </div>

                            <div class="topratedoperators__snippet__body col col-12">
                                <div class="operator_logo">
                                    <img
                                        src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$operator->id}}"
                                        data-src="https://cloudfront.safaribookings.com/operators/logos/_20200221093832_4494_5e4f7b1f5c3a9.gif"
                                        data-srcset="https://cloudfront.safaribookings.com/operators/logos/_20200221093832_4494_5e4f7b1f5c3a9.gif"
                                        class="operator-logo lazyload" title="Sino Africa Safari"
                                        alt="Sino Africa Safari Logo"/>
                                </div>
                                <div class="reviews txt--small">
                                    <div class="stars      " title="4.9 / 5">
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                    </div>
                                    <br class="hide show-t"/>
                                    443 Reviews
                                    <div class="txt--xgrey show hide-t">
                                        <i class="sbi sbi--medal medal"></i>
                                        <b>#1</b> of all tour operators
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col col-12">
                    <div class="button-holder">
                        <a class="btn btn--next btn--white btn--autowidth-t" href="{{url('operators')}}" target="_blank"
                           title="All Top Rated Operators">All Top Rated Operators</a>
                    </div>

                </div>
            </div>

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
        function topSafariCountries(countryId, list) {
            console.log(list);
            for (let i=0;i<list.length;i++){
                document.getElementById(list[i].name + '-id').style.display = 'none';
                document.getElementById(list[i].name + '-link').classList.remove('active');
            }

            // document.getElementById('Kenya-id').style.display = 'none';
            // document.getElementById('Uganda-id').style.display = 'none';
            document.getElementById(countryId + '-id').style.display = 'block';
            // document.getElementById('Tanzania-link').classList.remove('active');
            // document.getElementById('Kenya-link').classList.remove('active');
            // document.getElementById('Uganda-link').classList.remove('active');
            document.getElementById(countryId + '-link').classList.add('active');
        }
    </script>
@endsection
