@extends('layouts.landing-app')
@section('content')
    <main class="main">

        <div itemscope itemtype="http://schema.org/Product">

            <div class="titlebar titlebar--grey titlebar--tour hide show-t">
                <div class="container">
                    <div class="row">
                        <ol class="col col-0 col-t-12  breadcrumbs">
                            <li>
                                You are here:
                            </li>
                            <li data-type='breadcrumb'>
                                <a href="../index.html" title="SafariBookings.com">Home</a>
                            </li>
                            <li data-type='breadcrumb'>
                                <a href="{{url('all-safari-tours')}}" title="All Tours"><span>All Tours</span></a>
                            </li>
                            <li data-type='breadcrumb'>
                                <a href="tanzania.html"
                                   title="{{$tour->country_name}}"><span>{{$tour->country_name}}</span></a>
                            </li>
                            <li data-type='breadcrumb'>
                                <a href="../operator-tours/p2750.html"
                                   title="{{$companyName}}"><span>{{$companyName}}</span></a>
                            </li>
                            <li>
                                <span class="breadcrumbs__last" title="{{$tour->total_days}}-Day {{$tour->title}}">{{$tour->total_days}}-Day {{$tour->title}}</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="titlebar no-white hide-t hide-p hide back-bar">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-t-0">
                            <a href="javascript:history.back();" class="btn btn--white btn--prev btn--back">Back to
                                List</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imgpagehead imgpagehead--tour">
                <picture>
                    <!--[if IE 9]>
                    <video style="display: none;"><![endif]-->
                    <source
                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/1184x259/Katavi_National_Park_021.jpg"
                        media="(min-width: 970px)" class="lazyload">
                    <source
                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/976x305/Katavi_National_Park_021.jpg"
                        media="(min-width: 744px)" class="lazyload">
                    <source
                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Katavi_National_Park_021.jpg"
                        media="(min-width: 481px)" class="lazyload">
                    <!--[if IE 9]></video><![endif]-->
                    <img
                        src="{{env('OPERATOR_URL')}}/view-tour-icon/{{$tour->id}}"
                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021@2x.jpg 2x"
                        class="lazyload" alt=""/>
                    <noscript>
                        <source
                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/1184x259/Katavi_National_Park_021.jpg"
                            media="(min-width: 970px)">
                        <source
                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/976x305/Katavi_National_Park_021.jpg"
                            media="(min-width: 744px)">
                        <source
                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Katavi_National_Park_021.jpg"
                            media="(min-width: 481px)">
                        <img
                            src="{{env('OPERATOR_URL')}}/view-tour-icon/{{$tour->id}}"
                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021@2x.jpg 2x"
                            alt="" itemprop="image"/>
                    </noscript>
                </picture>
                <div class="imgpagehead__extragrad hide show-d" style="left: 20.0%"></div>
                <div class="imgpagehead__extragrad hide show-t hide-d" style="left: 20.0%"></div>
                <div class="imgpagehead__overlay">
                    <h1 class="serif" itemprop="name">{{$tour->total_days}}-Day {{$tour->title}}</h1>
                    <div class="imgpagehead__overlay__sub serif hide show-t show-p">
                        <span>Offered By:</span> <strong><a href="../operator/t17948.html"
                                                            class="tablink scrolltop">{{$companyName}}</a></strong>
                        <div class="stars      " title="5 / 5">
                            @for($i=0;$i<$rating;$i++)
                                <i class="sbi sbi--star"></i>
                            @endfor
                        </div>
                        <span class="review-score review-score--white"><em>{{$rating}}</em>/5 &nbsp; ({{$reviews}} Reviews)</span>
                    </div>
                </div>
                <span class="favorite-save  " data-id="17948" data-type="tour" title="Add to your favorites list">
            <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                 alt=""/>
        </span>
            </div>

            <div class="container container--main container--main--tour" data-id="17948" role="main">
                <div class="row">
                    <div class="col col-12 col-d-0">
                        <div class="tour__head__container">
                            <div class="tour__head--data">
                                <a href="../request-quote/t17948.html" rel="nofollow"
                                   class="btn btn--reqquote btn--autowidth btn--right hide show-ti hide-d btn--next btn--orange">Get
                                    a Free Quote</a>
                                <div class="pricediv">
                                    <p class="price-holder">
                                        <span class="price"
                                              data-toggle1="&lt;b class=&quot;conversionblock__priceamount&quot;&gt;$1,970&lt;/b&gt; to &lt;b&gt;$2,170&lt;/b&gt; pp (USD)"
                                              data-toggle2="&lt;b class=&quot;conversionblock__priceamount&quot;&gt;$1,970&lt;/b&gt; to &lt;b&gt;$2,170&lt;/b&gt; pp (USD)"
                                              data-toggled-item="tourheader"><b class="conversionblock__priceamount">$1,970</b> to <b>$2,170</b> pp (USD)</span>
                                    </p>
                                    <span class="preferences" data-role="prefs">
                                    <a href="#" data-open="travelers">
                                        <i class="sbi sbi--travelers row-icon"></i>
                                                                                    <span
                                                                                        data-travelers="2">2 travelers</span>
                                                                            </a> &nbsp;
                                    <span>on</span> &nbsp;
                                    <a href="#" data-open="date">
                                        <i class="sbi sbi--calendar row-icon"></i>
                                        <span>Start date</span>
                                    </a>
                                </span>
                                </div>
                            </div>
                            <a href="../operator/t17948.html" class="tablink scrolltop operator-snippet__data hide-t">
                                <div class="opdata__image"><img
                                        src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$userId}}"/>
                                </div>
                                <p><b>{{$companyName}}</b></p>
                                <p>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <em><span class="rating">5.0</span>/5 &ndash;</em>
                                    229 Reviews
                                </p>
                            </a>
                        </div>
                        <div class="conversionblock__costbreakdown conversionblock__costbreakdown--header hide">
                            <div class="conversionblock__costbreakdown-arrow"></div>
                            <div class="conversionblock__costbreakdown-title">Breakdown of Costs <a
                                    href="javascript:void(0);"><i class="sbi sbi--cross"></i></a></div>
                        </div>

                    </div>

                    <div class="tourpreferences skip-first-check" data-solo-warn="0" data-children-warn="0"
                         data-children-minage="0" data-rate-url="https://www.safaribookings.com/rate/t17948"
                         data-availability-warn="0" data-soloname="solo" data-iscamping="0">
                        <div class="col col-t-2-5 tourpreferences__block tourpreferences__date  ">
                            <div class="detail detail__date hide">
                                <div class="inner calendar" data-lbl="lbl-startdate" data-clear="clear-btn--date"
                                     data-hiddenname="date" data-ranges="enquiryform_date_ranges">
                                    <label>Start Date :</label><input name="date" type="date" min="2021-05-20"
                                                                      max="2024-12-31" value=""/>
                                    <label for="flexdateextra" class="checkbox-lbl"><input type="checkbox"
                                                                                           id="flexdateextra"
                                                                                           name="flex" value="1"
                                                                                           checked> My dates are
                                        somewhat flexible</label>
                                </div>
                                <div class="calendar__legend">
                                    <div><span>1</span> Available</div>
                                    <div><span class="unavailable">1</span> Unavailable</div>
                                </div>
                                <div class="detail__title">Start Date
                                    <button type="button" class="detail__close"><i class="sbi sbi--cross"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col col-t-3 tourpreferences__block tourpreferences__persons">
                            <div class="detail detail__persons hide travelers-inputholder">
                                <div class="inner  " data-clear="clear-btn--persons">
                                    <div class="row">
                                        <div class="no-gutter">
                                            <label>Adults <span class="hide show-ti txt--small">(18+ years)</span><span
                                                    class="hide-t txt--small">(18+)</span>:</label><input name="adults"
                                                                                                          type="number"
                                                                                                          min="1"
                                                                                                          max="99"
                                                                                                          value="2"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="no-gutter">
                                            <label>Children <span
                                                    class="hide show-ti txt--small">(0-17 years)</span><span
                                                    class="hide-t">(0-17)</span>:</label><input name="children"
                                                                                                type="number" min="0"
                                                                                                max="10" value="0"/>
                                        </div>
                                    </div>
                                    <div class="children-ages" data-state="invisible">
                                        <div class="row">
                                            <div class="no-gutter">
                                                <strong class="txt--grey txt--small">Age at the end of the tour</strong>
                                            </div>
                                        </div>
                                        <div class="row datarow">
                                            <div class="no-gutter">
                                                <label class="right-aligned">Child 1:</label>
                                                <div class="select--holder">
                                                    <select>
                                                        <option value="">- Age -</option>
                                                        <option value="17">17 years</option>
                                                        <option value="16">16 years</option>
                                                        <option value="15">15 years</option>
                                                        <option value="14">14 years</option>
                                                        <option value="13">13 years</option>
                                                        <option value="12">12 years</option>
                                                        <option value="11">11 years</option>
                                                        <option value="10">10 years</option>
                                                        <option value="9">9 years</option>
                                                        <option value="8">8 years</option>
                                                        <option value="7">7 years</option>
                                                        <option value="6">6 years</option>
                                                        <option value="5">5 years</option>
                                                        <option value="4">4 years</option>
                                                        <option value="3">3 years</option>
                                                        <option value="2">2 years</option>
                                                        <option value="1">1 year</option>
                                                        <option value="0">0 years</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="show btn btn--white btn--autowidth homepersons-ok"
                                           value="Done"/>

                                </div>
                                <div class="detail__title">Travelers
                                    <button type="button" class="detail__close"><i class="sbi sbi--cross"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col col-12 col-d-8">
                        <div class="tour__content content content--tabbed tour__overview">
                            <div class="tour__content__tabs tabs" role="tablist"
                                 data-allinone="../tourtabs/t179484dba.html?exclude=overview">
                                <div>
                                    <div class="tourtabs">
                                        <a id="overview-link" class="active" role="tab"
                                           title="Overview" onclick="tabsChange('overview')">Overview</a>
                                        <a id="rates-link" role="tab" rel="nofollow"
                                           title="Rates" onclick="tabsChange('rates')">Rates</a>
                                        <a id="inclusions-link" role="tab"
                                           rel="nofollow" title="Inclusions" onclick="tabsChange('inclusions')">Inclusions</a>
                                        <a id="operator-link" class="" role="tab"
                                           rel="nofollow" title="Offered By" onclick="tabsChange('operator')">Offered
                                            By</a>
                                    </div>
                                    <a rel="nofollow"
                                       class="btn btn--reqquote btn--autowidth btn--right hide btn--next btn--orange">Get
                                        a Free Quote</a>
                                </div>
                            </div>

                            <div class="ajax-holder">

                                <div id="overview-tab" role="tabpanel" style="display: block"
                                     data-title="Tanzania Safari: 5-Day Living Among Lions - Mid-Range">

                                    <div class="tour__content__block tour__content__block--notitle">
                                        <p itemprop="description">{{$tour->description}}</p>

                                        {{--                                        <div class="gallery__preview--mobile hide-t">--}}
                                        {{--                                            <a href="t17948.html#photo1" class=""--}}
                                        {{--                                               data-gallery="https://www.safaribookings.com/tours/t17948/photos"--}}
                                        {{--                                               rel="overlay">--}}
                                        {{--                                                <div>--}}
                                        {{--                                                    <img--}}
                                        {{--                                                        src="../../cloudfront.safaribookings.com/lib/tanzania/292x146/Serengeti_National_Park_048.jpg"--}}
                                        {{--                                                        alt="Open Photos"/>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <a href="t17948.html#photo2" class=""--}}
                                        {{--                                               data-gallery="https://www.safaribookings.com/tours/t17948/photos"--}}
                                        {{--                                               rel="overlay">--}}
                                        {{--                                                <div>--}}
                                        {{--                                                    <img--}}
                                        {{--                                                        src="../../cloudfront.safaribookings.com/lib/tanzania/292x146/Serengeti_National_Park_025.jpg"--}}
                                        {{--                                                        alt="Open Photos"/>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <a href="t17948.html#photo3" class="more-photos"--}}
                                        {{--                                               data-gallery="https://www.safaribookings.com/tours/t17948/photos"--}}
                                        {{--                                               rel="overlay">--}}
                                        {{--                                                <div>--}}
                                        {{--                                        <span>--}}
                                        {{--                                            <b>+24</b>--}}
                                        {{--                                            Photos--}}
                                        {{--                                        </span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </div>--}}

                                    </div>


                                    <div class="tour__content__block tour__content__block--routemap tour__route">
                                        <h2>Route</h2>
                                        <div class="tour__route-map-list">
                                            <div class="tour__flow__container tour__route-list"
                                                 data-role="tour-route-list">
                                                <div class="tour__route-list-inner">
                                                    <table class="route__flow avoid-break-p">
                                                        <tr class="country">
                                                            <td colspan="2"><a href='../tanzania.html'
                                                                               target="_blank"><strong>{{$tour->country_name}}</strong></a>
                                                                <img
                                                                    src='../../cfstatic.safaribookings.com/images/flags/tz.png'
                                                                    alt='' class='flag'/></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Start</td>
                                                        </tr>
                                                        @foreach($routes as $item)
                                                            <tr>
                                                                <td>{{$item->route_day}}</td>
                                                                <td>{{$item->route_name}}</td>
                                                            </tr>
                                                        @endforeach
                                                        <tr class="last">
                                                            <td>End</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <button class="tour__route-list-toggle"
                                                        data-role="tour-route-list-expand">
                                                    Show More Days
                                                    <span class="tour__route-list-toggle-arrow">&gt;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tour__content__block tour__content__block--consider avoid-break-p">
                                        <h2>Tour Features</h2>

                                        <div class="row">
                                            @foreach($tourFeatures as $key => $item)
                                                <div class="col col-12 col-t-6 item  ">
                                                    <div class="svg-box">
                                                        <h1 style="color: #a91615">{{$key+1}}</h1>
                                                    </div>

                                                    <h4>{{$item->featureDetails->name}}</h4>
                                                    <p>{{$item->featureDetails->description}}</p>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>


                                    <div class="tour__content__block tour__content__block--activities avoid-break-p">
                                        <h2>Activities &amp; Transportation</h2>

                                        <ul>
                                            <li>
                                                <div>
                                                    <picture>
                                                        <img
                                                            src="https://cfstatic.safaribookings.com/img/svg/icons-red/icon-activities.svg"
                                                            alt=""/>
                                                    </picture>
                                                </div>
                                                <span>
                                                    Activities: <b> @foreach($tourActivities as $item){{$item->activity}}
                                                        <span style="font-weight: normal">&</span> @endforeach</b>
                                    </span>
                                            </li>
                                            <li>
                                                <div>
                                                    <picture>
                                                        <img
                                                            src="https://cfstatic.safaribookings.com/img/svg/icons-red/icon-tour-selfdriving.svg"
                                                            alt=""/>
                                                    </picture>
                                                </div>
                                                <span>
                                    Game drives: <a href="#" class="help image textual"
                                                    data-val="https://cfstatic.safaribookings.com/images/vehicles/open-sided-4x4-vehicle.jpg"
                                                    title="">open-sided 4x4 vehicle</a> & <a href="#"
                                                                                             class="help image textual"
                                                                                             data-val="https://cfstatic.safaribookings.com/images/vehicles/pop-up-roof-4x4-vehicle.jpg"
                                                                                             title="">pop-up roof 4x4 vehicle</a>
                                    </span>
                                            </li>
                                            <li>
                                                <div>
                                                    <picture>
                                                        <img
                                                            src="https://cfstatic.safaribookings.com/img/svg/icons-red/icon-road.svg"
                                                            alt=""/>
                                                    </picture>
                                                </div>
                                                <span>
                                    Getting around: pop-up roof 4x4 vehicle
                                    </span>
                                            </li>
                                            <li class="hide-544">
                                                <div>
                                                    <picture>
                                                        <img
                                                            src="https://cfstatic.safaribookings.com/img/svg/icons-red/icon-internationaal-flight.svg"
                                                            alt=""/>
                                                    </picture>
                                                </div>
                                                <span>
                                        This operator can help select your international flights, but you'll have to book them yourself <a
                                                        href="#"
                                                        title="All you'll have to do is book the flight yourself using a website such as Skyscanner.com. Please be sure to contact the operator upfront to confirm availability, dates and pick-up service."
                                                        class="help">help</a>
                                    </span>
                                            </li>
                                            <li>
                                                <div>
                                                    <picture>
                                                        <img
                                                            src="https://cfstatic.safaribookings.com/img/svg/icons-red/icon-airport-transfer.svg"
                                                            alt=""/>
                                                    </picture>
                                                </div>
                                                <span>
                                    A <b>transfer</b> from and back to the airport is included
                                    </span>
                                            </li>

                                        </ul>

                                    </div>

                                    <div
                                        class="tour__content__block tour__content__block--accommodations avoid-break-p">
                                        <h2>Accommodation &amp; Meals</h2>

                                        <ul>
                                            <li class="footnote">
                                                <div class="txt--small txt--normal"><i class="sbi sbi--info-red"></i>Additional
                                                    accommodation before and at the end of the tour can be arranged for
                                                    an extra cost
                                                </div>
                                            </li>
                                            <li class="heading">
                                                <div>Day</div>
                                                <div>Accommodation</div>
                                                <div class="hide show-ti">Meals</div>
                                            </li>
                                            @foreach($accommodationAndMeal as $key =>  $item)
                                                <li>
                                                    <div>{{$key+1}}</div>
                                                    <div>
                                                        <a href="https://wildlifecamp.co.tz/" target="_blank"
                                                           rel="noopener nofollow">
                                                            Manyara Wildlife Safari Camp
                                                        </a>
                                                        <span class="txt--small">{{$item->accommodation}}</span>
                                                    </div>
                                                    <div class="txt--small">
                                                        {{$item->meal}}
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                    <div class="tour__content__block tour__content__block--quotereq hide show-t">
                                        <h2>Interested in This Tour?</h2>

                                        <p>
                                            <a href="../request-quote/t17948.html" rel="nofollow"
                                               class="btn btn--autowidth btn--autowidth--wide btn--reqquote btn--next btn--orange">Get
                                                a Free Quote</a>
                                        </p>

                                        <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small txt--grey">
                                            <li>Requests are sent directly to the tour operator</li>
                                            <li>We advise <b>requesting quotes</b> from <b>3 operators</b> (<a href="#"
                                                                                                               class="a--dotted help textual"
                                                                                                               data-help="People who request quotes from three tour operators have proven to be the most successful in finding the deal they’re looking for. This is especially the case when compared to people who contact only one or two operators.">Learn
                                                    why</a>)
                                            </li>
                                        </ul>
                                    </div>


                                </div>

                                <div id="inclusions-tab" role="tabpanel"
                                     data-title="Uganda Safari: 4-Day Pearl of Africa Trip Including Gorilla Trekking – Inclusions"
                                     data-canonical="https://www.safaribookings.com/inclusions/t12596"
                                     style="opacity: 1;display: none" class="">

                                    <div class="tour__content__block tour__content__block--inclusions">
                                        <h2 class="with-icon"><span><i class="sbi sbi--plus"></i> Included</span></h2>

                                        <ul class="list list--icon">
                                            <li>@foreach(\App\Inclusions::where('tour_id', $tour->id)->get() as $item)
                                                    {{$item->included_name}}
                                                @endforeach</li>
                                        </ul>
                                    </div>

                                    <div class="tour__content__block tour__content__block--inclusions">
                                        <h2 class="with-icon"><span><i class="sbi sbi--minus"></i> Excluded</span></h2>

                                        <ul class="list list--icon">
                                            <li>@foreach(\App\Exclusions::where('tour_id', $tour->id)->get() as $item)
                                                    {{$item->excluded_name}}
                                                @endforeach</li>
                                        </ul>
                                    </div>

                                    <div class="tour__content__block tour__content__block--quotereq hide show-t">
                                        <h2>Interested in This Tour?</h2>

                                        <p>
                                            <a href="https://www.safaribookings.com/request-quote/t12596" rel="nofollow"
                                               class="btn btn--autowidth btn--autowidth--wide btn--reqquote btn--next btn--orange">Get
                                                a Free Quote</a>
                                        </p>

                                        <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small txt--grey">
                                            <li>Requests are sent directly to the tour operator</li>
                                            <li>We advise <b>requesting quotes</b> from <b>3 operators</b> (<a href="#"
                                                                                                               class="a--dotted help textual"
                                                                                                               data-help="People who request quotes from three tour operators have proven to be the most successful in finding the deal they’re looking for. This is especially the case when compared to people who contact only one or two operators.">Learn
                                                    why</a>)
                                            </li>
                                        </ul>
                                    </div>


                                </div>

                                <div id="rates-tab" role="tabpanel"
                                     data-title="Uganda Safari: 4-Day Pearl of Africa Trip Including Gorilla Trekking – Rates"
                                     data-canonical="https://www.safaribookings.com/rates/t12596"
                                     style="opacity: 1;display: none"
                                     class="">


                                    <div class="tour__content__block tour__content__block--rates">
                                        <h2>Important to Know</h2>

                                        <ul class="list list--icon list--icon-arrow">
                                            <li>
                                                Rates are <b>per person</b> and <b>exclude the international flight</b>
                                                from/to your home country.
                                            </li>
                                            <li>
                                                This tour accepts children who are <b>15 years and older</b>.
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="tour__content__block tour__content__block--rates">

                                        <div class="tabs tabs--countriesparks not-sticky rates-mob-tab hide-430">
                                            <a href="" role="tab" class="active">Rates Per Person</a>
                                            <a href="" role="tab">Inclusions</a>
                                        </div>

                                        <div class="tab1"><h2 class="show-430">Rates Per Person</h2>

                                            {{--                                            <div--}}
                                            {{--                                                class="accordion  container__unpad   show hide-t hide-p  rates-table-block-m "--}}
                                            {{--                                                data-accordion="rates">--}}

                                            {{--                                                <div class="accordion__item rates-table-block__day  ">--}}
                                            {{--                                                    <b class="accordion__key">Jan 1, 2021 - Dec 31, 2021</b>--}}
                                            {{--                                                    <div class="accordion__value">--}}
                                            {{--                                                        <em class="accordion__col-head">Per person</em>--}}

                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                Solo traveler--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (1 room)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,894--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                2 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (1 room)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,487--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                3 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (2 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,395--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                4 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (2 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,316--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                5 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (3 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,285--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                6 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (3 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,237--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                7+ people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"></span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate open-form ">--}}
                                            {{--                                                                <a href="https://www.safaribookings.com/request-quote/t12596"--}}
                                            {{--                                                                   class="txt--grey txt--underline">Get Quote</a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="accordion__item rates-table-block__day  ">--}}
                                            {{--                                                    <b class="accordion__key">Jan 1, 2022 - Dec 31, 2022</b>--}}
                                            {{--                                                    <div class="accordion__value">--}}
                                            {{--                                                        <em class="accordion__col-head">Per person</em>--}}

                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                Solo traveler--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (1 room)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,894--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                2 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (1 room)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,487--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                3 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (2 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,395--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                4 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (2 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,316--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                5 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (3 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,285--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                6 people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"> (3 rooms)</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate">$1,237--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="accordion__subrow">--}}
                                            {{--                                                            <div class="accordion__col">--}}
                                            {{--                                                                7+ people--}}
                                            {{--                                                                <span class="txt--xgrey txt--small"></span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="accordion__col accordion__col--rate open-form ">--}}
                                            {{--                                                                <a href="https://www.safaribookings.com/request-quote/t12596"--}}
                                            {{--                                                                   class="txt--grey txt--underline">Get Quote</a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}

                                            <div class="rates-table-block rates-table-block-t   hide show-t show-p  ">

                                                <table class="rates-table ">

                                                    <thead>

                                                    <tr class="cells-8  txt--small  ">

                                                        <th>
                                                            <div class="left">Start dates</div>
                                                        </th>


                                                        <th>
                                                            Solo <span>1 room</span>
                                                        </th>


                                                        <th>
                                                            2 people <span>1 room</span>
                                                        </th>


                                                        <th>
                                                            3 people <span>2 rooms</span>
                                                        </th>


                                                        <th>
                                                            4 people <span>2 rooms</span>
                                                        </th>


                                                        <th>
                                                            5 people <span>3 rooms</span>
                                                        </th>


                                                        <th>
                                                            6 people <span>3 rooms</span>
                                                        </th>


                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach(\App\Rates::where('tour_id', $tour->id)->get() as $item)
                                                        <tr class="cells-8  ">

                                                            <th>
                                                                {{$item->start_date}} - {{$item->end_date}}
                                                            </th>


                                                            <td data-persons="1">
                                                                ${{$item->solo_room}}
                                                            </td>


                                                            <td data-persons="2">
                                                                ${{$item->two_people}}
                                                            </td>


                                                            <td data-persons="3">
                                                                ${{$item->three_people}}
                                                            </td>


                                                            <td data-persons="4">
                                                                ${{$item->four_people}}
                                                            </td>


                                                            <td data-persons="5">
                                                                ${{$item->five_people}}
                                                            </td>


                                                            <td data-persons="6">
                                                                ${{$item->six_people}}
                                                            </td>


                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="tab2 hide-430 hide">
                                            <div class="tour__content__block tour__content__block--inclusions">
                                                <h2 class="with-icon"><span><i
                                                            class="sbi sbi--plus"></i> Included</span></h2>

                                                <ul class="list list--icon">
                                                    <li>Park fees <span class="txt--xsmall txt--xgrey">(For non-residents)</span>
                                                    </li>
                                                    <li>Gorilla permits <span class="txt--xsmall txt--xgrey">(One per person, non-resident)</span>
                                                    </li>
                                                    <li>All activities <span class="txt--xsmall txt--xgrey">(Unless labeled as optional)</span>
                                                    </li>
                                                    <li>All accommodation <span class="txt--xsmall txt--xgrey">(Unless listed as upgrade)</span>
                                                    </li>
                                                    <li>A professional driver/guide</li>
                                                    <li>All transportation <span class="txt--xsmall txt--xgrey">(Unless labeled as optional)</span>
                                                    </li>
                                                    <li>All Taxes/VAT</li>
                                                    <li>Roundtrip airport transfer</li>
                                                    <li>Meals <span class="txt--xsmall txt--xgrey">(As specified in the day-by-day section)</span>
                                                    </li>
                                                    <li>Drinking water <span class="txt--xsmall txt--xgrey">(On all days)</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="tour__content__block tour__content__block--inclusions">
                                                <h2 class="with-icon"><span><i
                                                            class="sbi sbi--minus"></i> Excluded</span></h2>

                                                <ul class="list list--icon">
                                                    <li>International flights <span class="txt--xsmall txt--xgrey">(From/to home)</span>
                                                    </li>
                                                    <li>Additional accommodation before and at the end of the tour</li>
                                                    <li>Tips <span class="txt--xsmall txt--xgrey">(Tipping guideline US$10.00 pp per day)</span>
                                                    </li>
                                                    <li>Personal items <span class="txt--xsmall txt--xgrey">(Souvenirs, travel insurance, visa fees, etc.)</span>
                                                    </li>
                                                    <li>Government imposed increase of taxes and/or park fees</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="operator-tab" role="tabpanel"
                                     data-title="Uganda Safari: 4-Day Pearl of Africa Trip Including Gorilla Trekking – Offered By"
                                     data-canonical="https://www.safaribookings.com/operator/t12596"
                                     style="opacity: 1;display: none">

                                    <div class="tour__content__block tour__content__block--operator">

                                        <h2>This Tour Is Offered by {{$companyName}}</h2>


                                        <div class="row">
                                            <div class="col col-0 col-t-0 show-d col-d-4 operator-photo no-gutter-left">
                                                <div class="picture-frame">
                                                    <a class="enlarge"
                                                       href="https://cloudfront.safaribookings.com/operators/photos/large/51397580_2166075943436108_6055952583699202048_o_2583_60a61d905bd34.jpg"
                                                       rel="overlay" title="Home To Africa Tours and Travel"
                                                       data-overlay-hash="large">
                                                        <img
                                                            src="{{env('OPERATOR_URL')}}/view-user-file/{{$userId}}"
                                                            itemprop="image" title="{{$companyName}}"
                                                            alt="{{$companyName}}">
                                                    </a>
                                                    <p>{{$companyName}}</p></div>
                                            </div>

                                            <div class="col col-12  col-d-8   operator-data no-gutter-left">
{{--                                                <div class="col col-12 col-t-8-5 col-d-6 operator-data">--}}
                                                    <h1 itemprop="name" class="serif with-save-btn">
                                                        <span>{{$companyName}}</span>
                                                        <span class="favorite-save hide show-ti  " data-id="3424" data-type="operator"
                                                              title="Add to your favorites list">
                    <img class="svg svg--shadowed"
                         src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt=""/>
                </span>
                                                    </h1>

                                                    <span class="op-reviews">
                    <div class="stars      " title="5 / 5">
                             @for($i=0;$i<$rating;$i++)
                            <i class="sbi sbi--star"></i>
                        @endfor
        </div>
                    <span class="review-score review-score--white"><em>{{$rating}}</em>/5</span> &nbsp;&ndash;&nbsp;
                    <a href="#" onclick="openTab('reviews')" class="reviews-link"
                       rel="nofollow">{{$reviews}} Reviews</a>
                </span>

                                                    <dl>
                                                        <dt>
                                                            Offices In:
                                                        </dt>
                                                        <dd>
                                                            <div class="country-with-flag  " title="Uganda">
                                                                @foreach(\App\CompanyOffice::where('user_id', $userId)->get() as $key=> $office)
                                                                    @if(count(\App\CompanyOffice::where('user_id', $userId)->get())-1 == $key)
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
                                                        <dd class="hide show-t">{{$companySize}} (Founded in <span
                                                                itemprop="foundingDate">{{$foundedIn}}</span>)
                                                        </dd>

                                                        {{--                            <dt class="hide show-t">Member Of:</dt>--}}
                                                        {{--                            <dd class="hide show-t"><span class='help' title="Association of Uganda Tour Operators">AUTO</span>, <span class='help' title="The Uganda Association of Travel Agents">TUGATA</span>, UTA, <span class='help' title="Uganda Safari Guides Association">USAGA</span>, UCOTA & UHOA</dd>--}}

                                                        <dt>Tour Types:</dt>
                                                        <dd>{{\App\User::where('id', $userId)->first()['tourtype']}}</dd>
                                                        <dt class="hide show-t">Destinations:</dt>
                                                        <dd class="destinations hide show-t">
                                                            <div class="country-with-flag small  " title="Congo (DRC)">
                                                                @foreach(\App\CompanyDestinations::where('user_id', $userId)->get() as $key=> $dest)
                                                                    @if(count(\App\CompanyDestinations::where('user_id', $userId)->get())-1 == $key)
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


{{--                                                        <dt>Price Range:</dt>--}}
{{--                                                        <dd>{{$user->pricerange}} <span class="hide-t">pp</span><span class="hide show-ti">per person</span>--}}
{{--                                                            <b>per day</b> <span class="hide show-ti">(USD, excl. int'l flights)</span></dd>--}}
{{--                                                        <meta itemprop="priceRange" content="$60 to $500 per person per day (USD)"/>--}}

{{--                                                        <meta itemprop="sameAs" content="http://www.gorillatrekk.com"/>--}}
                                                    </dl>

                                                </div>
{{--                                                <img--}}
{{--                                                    src="https://cloudfront.safaribookings.com/operators/logos/logo1_1499683350.gif"--}}
{{--                                                    title="Home To Africa Tours and Travel"--}}
{{--                                                    alt="Home To Africa Tours and Travel" class="hide-d logo">--}}

{{--                                                <h3>Home To Africa Tours and Travel</h3>--}}

{{--                                                <div class="op-reviews">--}}
{{--                                                    <div class="stars      " title="5 / 5">--}}
{{--                                                        <i class="sbi sbi--star"></i>--}}
{{--                                                        <i class="sbi sbi--star"></i>--}}
{{--                                                        <i class="sbi sbi--star"></i>--}}
{{--                                                        <i class="sbi sbi--star"></i>--}}
{{--                                                        <i class="sbi sbi--star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <span class="review-score"><em>5.0</em>/5</span> &nbsp;--}}
{{--                                                    <br class="hide-t">--}}
{{--                                                    (154 Reviews)--}}
{{--                                                </div>--}}

{{--                                                <dl>--}}
{{--                                                    <dt>Office In:</dt>--}}
{{--                                                    <dd>--}}
{{--                                                        <div class="country-with-flag  " title="Uganda">--}}
{{--                                                            <svg class="country-with-flag__flag" data-role="svg-sprite">--}}
{{--                                                                <title>Uganda</title>--}}
{{--                                                                <use--}}
{{--                                                                    xlink:href="https://www.safaribookings.com/img/flags/flags-countries-reviewers.svg#ug"></use>--}}
{{--                                                            </svg>--}}
{{--                                                            <span>--}}
{{--                            <a href="https://www.safaribookings.com/uganda">Uganda</a>--}}
{{--                    </span>--}}
{{--                                                        </div>--}}
{{--                                                    </dd>--}}

{{--                                                    <dt>Size:</dt>--}}
{{--                                                    <dd>10-20 employees (Founded in <span--}}
{{--                                                            itemprop="foundingDate">2012</span>)--}}
{{--                                                    </dd>--}}

{{--                                                    <dt>Member Of:</dt>--}}
{{--                                                    <dd><span class="help" title=""--}}
{{--                                                              data-help="American Society of Travel Agents">ASTA</span>,--}}
{{--                                                        <span class="help" title=""--}}
{{--                                                              data-help="Association for Promotion of Tourism to Africa">APTA</span>--}}
{{--                                                        &amp; <span class="help" title=""--}}
{{--                                                                    data-help="Association of Uganda Tour Operators">AUTO</span>--}}
{{--                                                    </dd>--}}

{{--                                                    <dt>Tour Types:</dt>--}}
{{--                                                    <dd>Custom budget &amp; mid-range tours that can start every day--}}
{{--                                                    </dd>--}}

{{--                                                    <dt>Destinations:</dt>--}}
{{--                                                    <dd class="destinations">--}}
{{--                                                        <div class="country-with-flag small  " title="Rwanda">--}}
{{--                                                            <svg class="country-with-flag__flag" data-role="svg-sprite">--}}
{{--                                                                <title>Rwanda</title>--}}
{{--                                                                <use--}}
{{--                                                                    xlink:href="https://www.safaribookings.com/img/flags/flags-countries-reviewers.svg#rw"></use>--}}
{{--                                                            </svg>--}}
{{--                                                            <span class="txt--grey">--}}
{{--                            RW--}}
{{--                    </span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="country-with-flag small  " title="Uganda">--}}
{{--                                                            <svg class="country-with-flag__flag" data-role="svg-sprite">--}}
{{--                                                                <title>Uganda</title>--}}
{{--                                                                <use--}}
{{--                                                                    xlink:href="https://www.safaribookings.com/img/flags/flags-countries-reviewers.svg#ug"></use>--}}
{{--                                                            </svg>--}}
{{--                                                            <span class="txt--grey">--}}
{{--                            UG--}}
{{--                    </span>--}}
{{--                                                        </div>--}}
{{--                                                    </dd>--}}
{{--                                                </dl>--}}

{{--                                            </div>--}}

                                        </div>

                                        <div class="row">

                                            <div
                                                class="col col-0 col-t-3-5 show-t hide-d operator-photo no-gutter-left">
                                                <div class="picture-frame">
                                                    <a class="enlarge"
                                                       href="https://cloudfront.safaribookings.com/operators/photos/large/51397580_2166075943436108_6055952583699202048_o_2583_60a61d905bd34.jpg"
                                                       rel="overlay" title="Home To Africa Tours and Travel"
                                                       data-overlay-hash="large">
                                                        <img
                                                            src="https://cloudfront.safaribookings.com/operators/photos/51397580_2166075943436108_6055952583699202048_o_2583_60a61d905bd34.jpg"
                                                            itemprop="image" title="Home To Africa's Happy Tourists"
                                                            alt="Home To Africa's Happy Tourists">
                                                    </a>
                                                    <p>Home To Africa's Happy Tourists</p></div>
                                            </div>

                                            <div class="col col-12  col-t-8-5  col-d-12 no-gutter">

                                                <p class="short-companyprofile">
                                                    <span itemprop="description">{{$tour->description}}</span>
                                                </p>

                                            </div>

                                        </div>

                                        <div class="row opreviews_div">
                                            <div class="col col-12 no-gutter">
                                                <h4><span>Reviews</span><span class="number">{{$reviews}}</span></h4>
                                            </div>

                                            <div class="col col-12 col-d-9 reviewlist__list">
                                                @foreach($reviewsDeceding as $review)
                                                    <div class="review initialized" id="58806" itemprop="reviews" itemscope="" itemtype="http://schema.org/Review">
                                                        <div class="review__person" itemtype="http://schema.org/Person" itemscope="" itemprop="author">
                                                            <i class="sbi sbi--avatar-female"></i>
                                                            <strong class="review__person__name" itemprop="name">{{$review->name}}</strong>
                                                            <span class="review__person__country">&nbsp; –
                                                        <div class="country-with-flag  " title="Spain">
                            <span class="txt--grey">
                            {{$review->country}}
                    </span>
    </div>
</span>
                                                            <span class="review__person__when"><b>Visited:</b> {{$review->month}}, {{$review->year}}</span>
                                                            <span class="review__person__reviewed"><b>Reviewed:</b> {{$review->created_at}}</span>
                                                            <p>
                                                                {{--                                                        <span><a href="https://www.safaribookings.com/or58806/contact" title="Contact Natalia" rel="overlay" data-overlay-hash="contact">Email Natalia</a></span>--}}
                                                                {{--                                                        &nbsp;|&nbsp;                         <span>50-65 years of age</span>--}}
                                                                {{--                                                        &nbsp;|&nbsp;                         <span>Experience level: first safari</span>--}}
                                                            </p>
                                                            <span itemprop="gender" itemscope="" itemtype="http://schema.org/GenderType">
                <span itemprop="name" content="Female"></span>
            </span>
                                                        </div>
                                                        <div class="review__body">
                                                            <h5 itemprop="name">{{$review->title}}</h5>

                                                            <div class="overallrating">
                                                                <div class="stars    large    " itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                                                    @for($i=0;$i<$review->rating;$i++)
                                                                        <i class="sbi sbi--star"></i>
                                                                    @endfor
                                                                    <meta itemprop="ratingValue" content="5">
                                                                    <meta itemprop="worstRating" content="1">
                                                                    <meta itemprop="bestRating" content="5">
                                                                </div>
                                                                <span class="review-score"><em>{{$review->rating}}</em>/5</span>
                                                            </div>


                                                            <p itemprop="reviewBody">
                                                                {{$review->review}}
                                                            </p>



                                                            <div class="review__body__photos galleryitems" data-overlay-hash="p58806">
                                                                @foreach($review->images as $image)
                                                                    <a itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/MediaObject" target="_blank" href="{{url('view-review-image')}}/{{$image->id}}" title="" rel="overlay" class="galleryitem">
                                                                        <img src="{{url('view-review-image')}}/{{$image->id}}" >
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach



                                            </div>

                                        </div>

                                    </div>

                                    <div class="tour__content__block tour__content__block--quotereq hide show-t">
                                        <h2>Interested in This Tour?</h2>

                                        <p>
                                            <a href="https://www.safaribookings.com/request-quote/t12596" rel="nofollow"
                                               class="btn btn--autowidth btn--autowidth--wide btn--reqquote btn--next btn--orange">Get
                                                a Free Quote</a>
                                        </p>

                                        <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small txt--grey">
                                            <li>Requests are sent directly to the tour operator</li>
                                            <li>We advise <b>requesting quotes</b> from <b>3 operators</b> (<a href="#"
                                                                                                               class="a--dotted help textual"
                                                                                                               data-help="People who request quotes from three tour operators have proven to be the most successful in finding the deal they’re looking for. This is especially the case when compared to people who contact only one or two operators.">Learn
                                                    why</a>)
                                            </li>
                                        </ul>
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="tour-next hide-t hide-p">
                            <a href="t17948.html" class="btn btn--next btn--next-right btn--blue active "
                               data-ajax="overview-tab" role="tab" rel="nofollow" title="Overview">Next: Overview</a>
                            <a href="../day/t17948.html" class="btn btn--next btn--next-right btn--blue  "
                               data-ajax="daybyday-tab" role="tab" rel="nofollow" title="Day by Day">Next: Day by
                                Day</a>
                            <a href="../rates/t17948.html" class="btn btn--next btn--next-right btn--blue  "
                               data-ajax="rates-tab" role="tab" rel="nofollow" title="Rates">Next: Rates</a>
                            <a href="../inclusions/t17948.html"
                               class="btn btn--next btn--next-right btn--blue hide show-430  "
                               data-ajax="inclusions-tab" role="tab" rel="nofollow" title="Inclusions">Next:
                                Inclusions</a>
                            <a href="../gettingthere/t17948.html"
                               class="btn btn--next btn--next-right btn--blue hide show-544  "
                               data-ajax="gettingthere-tab" role="tab" rel="nofollow" title="Getting There">Next:
                                Getting There</a>
                            <a href="../operator/t17948.html" class="btn btn--next btn--next-right btn--blue  "
                               data-ajax="operator-tab" role="tab" rel="nofollow" title="Offered By">Next: Offered
                                By</a>
                            <a href="../enquiry/form/t17948.html" target="_blank" rel="overlay nofollow"
                               data-overlay-hash="request"
                               class="btn btn--next btn--next-right btn--blue btn--reqquote">Next: Get a Free Quote</a>
                        </div>

                        <div class="show hide-t hide-p floating-request-btn " data-role="request-cta-mobile">
                            <a href="../enquiry/form/t17948.html" target="_blank" rel="overlay nofollow"
                               data-overlay-hash="request" class="btn btn--reqquote btn--orange">Get a Free Quote</a>
                        </div>

                        {{--                        <div class="col col-12 tour__disclaimer avoid-break-p">--}}
                        {{--                            <h3>Disclaimer</h3>--}}
                        {{--                            <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small txt--grey">--}}
                        {{--                                <li>This tour is offered by <a href='../operator/t17948.html' class='tablink scrolltop'>{{$companyName}}, not SafariBookings.--}}
                        {{--                                </li>--}}
                        {{--                                <li>This operator reserves the right to change rates advertised on SafariBookings.</li>--}}
                        {{--                                <li>If you request changes to this tour, the advertised rates will likely change.</li>--}}
                        {{--                            </ul>--}}
                        {{--                            <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small txt--grey">--}}
                        {{--                                <li>If an accommodation is fully booked, the operator will suggest a comparable--}}
                        {{--                                    alternative.--}}
                        {{--                                </li>--}}
                        {{--                                <li>The exact order, contents and rates of this tour is subject to availability.</li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                    </div>


                    <div class="col hide show-d col-d-4 tour__sidebar" role="complementary" itemprop="offers" itemscope
                         itemtype="http://schema.org/Offer">

                        <div class="sidebar__block conversionblock hide show-d" itemprop="priceSpecification" itemscope
                             itemtype="http://schema.org/UnitPriceSpecification">

                            <div class="conversionblock__intro">
                                <div class="conversionblock__intro__header">
                                    <p class="conversionblock__price price"
                                       data-toggle1="&lt;b class=&quot;conversionblock__priceamount&quot;&gt;$1,970&lt;/b&gt; to &lt;b&gt;$2,170&lt;/b&gt; pp (USD)"
                                       data-toggle2="&lt;b class=&quot;conversionblock__priceamount&quot;&gt;$1,970&lt;/b&gt; to &lt;b&gt;$2,170&lt;/b&gt; pp (USD)"
                                       data-toggled-item="conversion"><b
                                            class="conversionblock__priceamount">${{$tour->price}}</b> (USD)</p>
                                    <a href="../inclusions/t17948.html" rel="nofollow">What is included in this tour</a>
                                </div>
                                <h3>Request a Quote</h3>
                                <span class="conversionblock__prefs conversionblock__prefs--form" data-role="prefs">
            <a href="#" data-role="tour-edit-prefs" data-open="date">
                <i class="sbi sbi--calendar row-icon"></i>
                <span>Select start date</span>
            </a>

            <a href="#" data-role="tour-edit-prefs" data-open="travelers">
                <i class="sbi sbi--travelers row-icon"></i>
                                    <span data-travelers="2">2 travelers</span>
                            </a>
        </span>

                            </div>

                            <div class="conversionblock__cta">
                                <a href="../request-quote/t17948.html" rel="nofollow"
                                   class="btn btn--reqquote btn--next btn--orange">Get a Free Quote</a>
                            </div>

                            <p class="conversionblock__usp" style="margin-top:25px">
                                <i class="sbi sbi--usp-green-thin conversionblock__usp-icon"></i>
                                <a href="../best-price-guarantee.html" target="_blank" class="conversionblock__usp-link"
                                   rel="overlay" data-overlay-hash="best-price-guarantee">Best price guarantee</a>
                            </p>
                            <p class="conversionblock__usp">
                                <i class="sbi sbi--usp-green-thin conversionblock__usp-icon"></i>
                                <span class="conversionblock__usp-text">Without any obligation to book</span>
                            </p>
                            <p class="conversionblock__usp">
                                <i class="sbi sbi--usp-green-thin conversionblock__usp-icon"></i>
                                <span class="conversionblock__usp-text">Your request will be sent directly to the operator</span>
                            </p>

                            <meta itemprop="priceCurrency" content="USD"/>
                            <meta itemprop="price minPrice" content="1970"/>
                            <meta itemprop="maxPrice" content="2170"/>

                        </div>


                        <div class="sidebar__block operator-block  hide show-d" itemscope
                             itemtype="http://schema.org/TravelAgency" itemprop="offeredBy">
                            <div class="operator__logo">
                                <a href="../operator/t17948.html" class="tablink scrolltop"
                                   title="Unlimited Expeditions - The Soul of Tanzania"><img
                                        src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$userId}}"
                                        itemprop="image" title="Unlimited Expeditions - The Soul of Tanzania"
                                        alt="Unlimited Expeditions - The Soul of Tanzania logo"/></a>
                                <strong>{{$companyName}}</strong>
                            </div>

                            <div class="operator__info">
                                <dl>
                                    <dt>Offered By:</dt>
                                    <dd>
                                        <strong itemprop="name">
                                            {{$companyName}}

                                        </strong>
                                    </dd>

                                    <dt>&nbsp;</dt>
                                    <dd>
                                        <div class="stars      " title="5 / 5">
                                            @for($i=0;$i<$rating;$i++)
                                                <i class="sbi sbi--star"></i>
                                            @endfor
                                        </div>
                                        <span class="review-score"><em>5.0</em>/5</span>
                                        <br/>
                                        229 Reviews
                                    </dd>

                                    <dt>Offices:</dt>
                                    <dd>
                                        <div class="country-with-flag  " title="Tanzania">
                                            {{--                                            <svg class="country-with-flag__flag" data-role="svg-sprite">--}}
                                            <title>{{$tour->country_name}}</title>
                                            {{--                                                <use xlink:href="../img/flags/flags-countries-reviewers.svg#tz"></use>--}}
                                            {{--                                            </svg>--}}
                                            <span>
                            {{$tour->country_name}}
                    </span>
                                        </div>
                                    </dd>

                                    <dt>Founded In:</dt>
                                    <dd>{{$foundedIn}}</dd>

                                    <dt>Employees:</dt>
                                    <dd>{{explode(' ', $companySize)[0]}}</dd>
                                </dl>

                                <ul class="bulletlist">
                                    <li><a href="{{url('operator-profile')}}/{{$userId}}" class="tablink scrolltop"
                                           itemprop="url">More
                                            About This Operator</a></li>
                                </ul>
                            </div>

                            <div class="operator__reviews tour__content__block">
                                <h2>Customer Review</h2>

                                <div class="review review--snippet">
                                    <div class="review__person matchheight">
                                        <i class="sbi sbi--avatar-male"></i>
                                        <div class="review__person__info">
                                            <strong class="review__person__name">{{$review->name}} </strong>
                                            <span class="review__person__country">&nbsp;&ndash; &nbsp;
                                                <div
                                                    class="country-with-flag  " title="Portugal">
{{--                                    <img src="../../cfstatic.safaribookings.com/images/flags/pt.png"--}}
                                                    {{--                                         class="country-with-flag__flag" alt="Portugal" title="Portugal"/>--}}
                            <span class="txt--grey">
                            {{$review->country}}
                    </span>
    </div>
</span>
                                            <span class="review__person__reviewed"><b>Reviewed:</b> {{explode(' ', $review->created_at)[0]}}</span>
                                        </div>
                                    </div>
                                    <div class="review__body">
                                        <h5>{{$review->title}}</h5>
                                        <div class="stars      " title="5 / 5">
                                            @for($i=0;$i<$review->rating;$i++)
                                                <i class="sbi sbi--star"></i>
                                            @endfor
                                        </div>
                                        <span class="review-score"><em>{{$review->rating}}</em>/5</span>
                                        <p>{{$review->review}}</p>
                                        {{--                                        <p><a href="../reviews/p2750/page/5%2349076.html">Full Review</a></p>--}}
                                    </div>
                                </div>

                                <div class="hide-onload" data-ajaxfill="../reviews/t17948-2750.html"></div>

                                {{--                                <div class="row pagination operator__reviews__pagination" data-current="1"--}}
                                {{--                                     data-total="229">--}}
                                {{--                                    <div class="col col-4"><a href="#"--}}
                                {{--                                                              class="btn btn--white btn--prev btn--onlyarrow"></a></div>--}}
                                {{--                                    <div class="col col-4 col-sum">1 of 229</div>--}}
                                {{--                                    <div class="col col-4"><a href="#"--}}
                                {{--                                                              class="btn btn--white btn--next btn--onlyarrow"></a></div>--}}
                                {{--                                </div>--}}

                            </div>

                        </div>

                        <a data-toggle="modal" data-target="#myModal" class="sidebar__block photo-block galleryitems"
                           rel="overlay">
                            <div>
                                <img
                                    src="{{env('OPERATOR_URL')}}/view-tour-cover-photo/{{$tour->id}}"
                                    alt="Open Photos"/>
                            </div>
                            <span><i class="sbi sbi--photos"></i>Open Photos <i>({{\App\TourPhotos::where('tour_id', $tour->id)->count()}})</i></span>
                        </a>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">All Photos</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            @foreach(\App\TourPhotos::where('tour_id', $tour->id)->get() as $item)
                                                <div class="col-md-4">
                                                    <a target="_blank"
                                                       href="{{env('OPERATOR_URL')}}/show-tour-photos/{{$item->id}}">
                                                        <img
                                                            style="width: 200px;height: 200px;object-fit: contain;margin: 10px"
                                                            src="{{env('OPERATOR_URL')}}/show-tour-photos/{{$item->id}}">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        <a class="sidebar__block map-block"--}}
                        {{--                           href="../../cloudfront.safaribookings.com/maps/map-of-tanzania.jpg" rel="overlay"--}}
                        {{--                           data-overlay-hash="map" title="Map of Tanzania">--}}
                        {{--                            <div>--}}
                        {{--                                <img src="../../cloudfront.safaribookings.com/maps/704x352/map-of-tanzania.jpg"--}}
                        {{--                                     alt="Map of Tanzania"/>--}}
                        {{--                            </div>--}}
                        {{--                            <span><i class="sbi sbi--full-screen"></i>Tanzania Map</span>--}}
                        {{--                        </a>--}}


                    </div>


                </div>
            </div>


        </div>

    </main>

    <script>
        function tabsChange(tabName) {
            document.getElementById('overview-tab').style.display = 'none';
            document.getElementById('inclusions-tab').style.display = 'none';
            document.getElementById('rates-tab').style.display = 'none';
            document.getElementById('operator-tab').style.display = 'none';
            document.getElementById(tabName + '-tab').style.display = 'block';
            document.getElementById('overview-link').classList.remove('active');
            document.getElementById('inclusions-link').classList.remove('active');
            document.getElementById('rates-link').classList.remove('active');
            document.getElementById('operator-link').classList.remove('active');
            document.getElementById(tabName + '-link').classList.add('active');
        }
    </script>
@endsection
