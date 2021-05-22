@extends('layouts.landing-app')
<!--====== BANNER PART START ======-->
@section('content')
    <main class="main">

{{--        <div class="messagebox messagebox--orange messagebox--bar">--}}
{{--            <a href="coronavirus.html" class="nowrap">--}}
{{--                <i class="sbi sbi--info-blue"></i>--}}
{{--                Coronavirus (COVID-19) Support--}}
{{--            </a>--}}
{{--        </div>--}}
        <div class="container container--main container--home container--tourpref   ">
            <div class="opener">
                <h1 class="serif">Search African Safaris</h1>
                <h2 class="serif">Offered by <B>{{\App\User::all()->count()}}</B> Tour Operators</h2>
                <form class="row tourpreferences  skip-first-count  " autocomplete="off" method="GET"
                      action="https://www.safaribookings.com/tours">
                    <div class="col col-t-3-5 tourpreferences__block tourpreferences__destination">
                        <i class="sbi sbi--map-pin row-icon"></i>
                        <div class="tourpreferences__destination__row">
                            <div class="tourpreferences__destination__row__inner">
                                <label for="destination">Destination</label>
                                <input id="destination" type="text" value="" name="destination"
                                       data-types="destinations" data-shadow="false" spellcheck="false" value=""
                                       data-title="Start typing or select below" autocomplete="off" data-limit="8">
                                <div class="placeholder">Where To</div>
                            </div>
                            <div class="detail detail__destination"></div>
                            <span class="clear-btn"></span>
                            <span class="open-sign open-sign--search"><i
                                    class="sbi sbi--search-grey mirrored"></i></span>
                        </div>
                        <div class="tourpreferences__destination__add  hide hide-t  "><a href="#"><span class="txt2"><i>+</i> Add country, park or highlight</span></a>
                        </div>
                    </div>
                    <div class="col col-t-2-5 tourpreferences__block tourpreferences__date  ">
                        <span class="clear-btn clear-btn--date" style="display:none"></span>
                        <span class="open-sign open-sign--arrow">&rsaquo;</span>
                        <i class="sbi sbi--calendar row-icon"></i>
                        <span class="lbl lbl-startdate">Start Date</span>
                        <div class="detail detail__date">
                            <div class="inner calendar" data-lbl="lbl-startdate" data-clear="clear-btn--date"
                                 data-hiddenname="date">
                                <label>Start Date :</label><input name="date" type="date" min="2021-05-20"
                                                                  max="2024-12-31" value=""/>
                                <label for="flexdate" class="checkbox-lbl"><input type="checkbox" id="flexdate"
                                                                                  name="flex" value="1" checked> My
                                    dates are somewhat flexible</label>
                            </div>
                            <div class="detail__title">
                                Start Date
                                <button type="button" class="detail__close" aria-label="close 'Start Date' panel"><i
                                        class="sbi sbi--cross"></i></button>
                            </div>
                        </div>
                        <div class="tourpreferences__date__extraflex">
                            <label for="flexdateextra" class="checkbox-lbl"><input type="checkbox"
                                                                                   class="checkbox--blue"
                                                                                   id="flexdateextra" checked> <span
                                    class="txt2">My dates are somewhat flexible</span></label>
                        </div>
                    </div>
                    <div class="col col-t-3 tourpreferences__block tourpreferences__persons  filled  ">
                        <span class="clear-btn clear-btn--persons" style="display:block"></span>
                        <span class="open-sign open-sign--arrow">&rsaquo;</span>
                        <i class="sbi sbi--travelers row-icon"></i>
                        <span class="lbl lbl-persons filled">
                        <span>2 Adults</span>
                    </span>
                        <div class="detail detail__persons">
                            <div class="inner" data-clear="clear-btn--persons">
                                <div class="row">
                                    <div class="no-gutter">
                                        <label for="adults">Adults <span
                                                class="hide show-ti txt--small">(18+ years)</span><span
                                                class="hide-t txt--small">(18+)</span>:</label><input name="adults"
                                                                                                      id="adults"
                                                                                                      type="number"
                                                                                                      min="1" max="99"
                                                                                                      value="2"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="no-gutter">
                                        <label for="children">Children <span class="hide show-ti txt--small">(0-17 years)</span><span
                                                class="hide-t txt--small">(0-17)</span>:</label><input name="children"
                                                                                                       id="children"
                                                                                                       type="number"
                                                                                                       min="0" max="10"
                                                                                                       value="0"/>
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
                                            <label class="right-aligned" for="age-child-1">Child 1:</label>
                                            <div class="select--holder">
                                                <select name="age-child-1" id="age-child-1">
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
                            <div class="detail__title">
                                Travelers
                                <button type="button" class="detail__close" aria-label="Close 'Travelers' panel"><i
                                        class="sbi sbi--cross"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col col-t-3  ">
                        <a href="javascript:void(0);" class="btn btn--blue search btn--next">Show Tours</a>
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

    <img src="https://cloudfront.safaribookings.com/assets/home-3-1920x768.jpg"
         data-srcset="https://cloudfront.safaribookings.com/assets/home-mobile-3-414x1200-2x.jpg 2x"
         class="lazyload img__3" alt=""/>
{{--                <noscript>--}}
{{--                    <picture>--}}
{{--                        <!--[if IE 9]>--}}
{{--                        <video style="display: none;"><![endif]-->--}}
{{--                        <source srcset="https://cloudfront.safaribookings.com/assets/home-3-1920x768.jpg"--}}
{{--                                media="(min-width: 1441px)">--}}
{{--                        <source srcset="https://cloudfront.safaribookings.com/assets/home-3-1440x576.jpg"--}}
{{--                                media="(min-width: 1281px)">--}}
{{--                        <source srcset="https://cloudfront.safaribookings.com/assets/home-3-1280x512.jpg"--}}
{{--                                media="(min-width: 1025px)">--}}
{{--                        <source srcset="https://cloudfront.safaribookings.com/assets/home-3-1024x410.jpg"--}}
{{--                                media="(min-width: 970px)">--}}
{{--                        <source srcset="https://cloudfront.safaribookings.com/assets/home-3-969x581.jpg"--}}
{{--                                media="(min-width: 769px)">--}}
{{--                        <source--}}
{{--                            srcset="https://cloudfront.safaribookings.com/assets/home-3-768x461-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/home-3-768x461.jpg 1x"--}}
{{--                            media="(min-width: 744px)">--}}
{{--                        <source--}}
{{--                            srcset="https://cloudfront.safaribookings.com/assets/home-mobile-3-743x1200-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/home-mobile-3-743x1200.jpg 1x"--}}
{{--                            media="(min-width: 415px)">--}}
{{--                        <!--[if IE 9]></video><![endif]-->--}}
{{--                        <img src="../cloudfront.safaribookings.com/assets/home-mobile-3-414x1200.jpg"--}}
{{--                             srcset="https://cloudfront.safaribookings.com/assets/home-mobile-3-414x1200-2x.jpg 2x"--}}
{{--                             class="img__3" alt=""/>--}}
{{--                    </picture>--}}
{{--                </noscript>--}}
            </div>
        </div>


{{--        <div class="container container--main container--home-numbers">--}}
{{--            <div class="inner">--}}
{{--                <div>--}}
{{--                    <i class="sbi sbi--usp-red"></i>--}}
{{--                    <a href="tours.html" title="The Largest Marketplace for African Safaris"><strong>The--}}
{{--                            Largest</strong> Marketplace for <span class="hide show-wi">African&nbsp;</span>Safaris</a>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <i class="sbi sbi--usp-red"></i>--}}
{{--                    <a href="best-price-guarantee.html" title="Best Price Guarantee"><strong>Best Price</strong>--}}
{{--                        Guarantee</a>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <i class="sbi sbi--usp-red"></i>--}}
{{--                    <a href="reviews.html" title="59,601 Reviews"><strong>59,601</strong> Reviews</a>--}}
{{--                </div>--}}
{{--                <div class="hide show-di">--}}
{{--                    <i class="sbi sbi--usp-red"></i>--}}
{{--                    <a href="countries-parks.html" title="196 Parks &amp; Reserves"><strong>196</strong> Parks &amp;--}}
{{--                        Reserves</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container container--main container--home-featured featuredbar hide show-t">--}}
{{--            <div class="inner">--}}
{{--                <b>As Featured In</b>--}}
{{--                <div class="logos">--}}
{{--                    <img--}}
{{--                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                        data-src="https://cfstatic.safaribookings.com/img/featured/featured-times.png" class="lazyload"--}}
{{--                        alt="SafariBookings featured in The Times London"--}}
{{--                        title="SafariBookings featured in The Times London" width="80" height="50"/>--}}
{{--                    <img--}}
{{--                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                        data-src="https://cfstatic.safaribookings.com/img/featured/featured-lat.png" class="lazyload"--}}
{{--                        alt="SafariBookings featured in Los Angeles Times"--}}
{{--                        title="SafariBookings featured in Los Angeles Times" width="63" height="50"/>--}}
{{--                    <img--}}
{{--                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                        data-src="https://cfstatic.safaribookings.com/img/featured/featured-tam.png" class="lazyload"--}}
{{--                        alt="SafariBookings featured in Travel Africa Magazine"--}}
{{--                        title="SafariBookings featured in Travel Africa Magazine" width="121" height="50"/>--}}
{{--                    <img--}}
{{--                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                        data-src="https://cfstatic.safaribookings.com/img/featured/featured-times-sa.png"--}}
{{--                        class="lazyload" alt="SafariBookings featured in The Times Johannesburg"--}}
{{--                        title="SafariBookings featured in The Times Johannesburg" width="108" height="50"/>--}}
{{--                    <img--}}
{{--                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                        data-src="https://cfstatic.safaribookings.com/img/featured/featured-cnn.png" class="lazyload"--}}
{{--                        alt="SafariBookings featured in CNN Travel" title="SafariBookings featured in CNN Travel"--}}
{{--                        width="56" height="50"/>--}}
{{--                    <img--}}
{{--                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                        data-src="https://cfstatic.safaribookings.com/img/featured/featured-australian.png"--}}
{{--                        class="lazyload" alt="SafariBookings featured in The Australian"--}}
{{--                        title="SafariBookings featured in The Australian" width="112" height="50"/>--}}
{{--                    <img--}}
{{--                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                        data-src="https://cfstatic.safaribookings.com/img/featured/featured-chicago.png"--}}
{{--                        class="lazyload" alt="SafariBookings featured in Chicago Tribune"--}}
{{--                        title="SafariBookings featured in Chicago Tribune" width="78" height="50"/>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="container container--main container--home-toprated" style="margin-top: 70px">
            <div class="row">
                <div class="col col-12">
                    <h2 class="container--home__heading">Top Rated Safari Countries</h2>
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
                    <div class="col col-0 col-t-3-5 col-d-3 container--home-toprated__list">
                        <ul>
                            <li class="active">
                                <span class="txt--grey">#1</span> <b>Tanzania</b>
                            </li>
                            <li>
                                <span class="txt--grey">#2</span> <b>Botswana</b>
                            </li>
                            <li>
                                <span class="txt--grey">#3</span> <b>Zambia</b>
                            </li>
                            <li>
                                <span class="txt--grey">#4</span> <b>Kenya</b>
                            </li>
                            <li>
                                <span class="txt--grey">#5</span> <b>South Africa</b>
                            </li>
                            <li>
                                <span class="txt--grey">#6</span> <b>Namibia</b>
                            </li>
                            <li>
                                <span class="txt--grey">#7</span> <b>Uganda</b>
                            </li>
                            <li>
                                <span class="txt--grey">#8</span> <b>Zimbabwe</b>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-12 col-t-8-5 col-d-9 container--home-toprated__content" data-ajaxfill="/"
                         data-show=".container--home-toprated__navigation">
                        <div class="loading hide-t"></div>
                        <div class="loading loading--white hide show-ti"></div>
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
                    <li class="col   col-12 col-t-6 col-d-4   ">
                        <a class="list__item    " href="tours/t17948.html" target="_blank" data-id="17948"
                           title="5-Day Living Among Lions - Mid-Range">
                            <div class="list__item--image__full">

                                <picture class="list__picture">
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source
                                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Katavi_National_Park_021.jpg"
                                        media="(min-width: 501px) and (max-width: 743px)" class="lazyload">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021.jpg 1x"
                                        class="lazyload" alt="5-Day Living Among Lions - Mid-Range"/>
                                    <noscript>
                                        <source
                                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Katavi_National_Park_021.jpg"
                                            media="(min-width: 501px) and (max-width: 743px)">
                                        <img
                                            src="../cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021.jpg"
                                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021@2x.jpg 2x"/>
                                    </noscript>
                                </picture>

                                <div class="holder-tourtitle">
                                    <h2 class="serif tourtitle">5-Day Living Among Lions - Mid-Range</h2>
                                </div>

                            </div>
                            <div class="list__item--data  matchheight ">

                                <p class="price">
                                    <b>$1,970</b>
                                    to <b>$2,170</b> pp (USD)
                                </p>


                                <p class="desc">
                                    <b>Tanzania:</b>
                                    Private tour<span></span>
                                    <nobr>Mid-range</nobr>
                                    <span></span>Lodge & Tented Camp
                                </p>

                                <p class="visit"><b>You Visit:</b> Arusha <span>(Start)</span>, Lake Manyara NP,
                                    Serengeti NP, Ngorongoro Crater, <span
                                        class="nowrap">Arusha <span>(End)</span></span></p>
                            </div>

                            <div class="operator-snippet__data">
                                <div class="opdata__image">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                        data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo_1478192437.gif"
                                        class="lazyload" alt="Unlimited Expeditions - The Soul of Tanzania"
                                        title="Unlimited Expeditions - The Soul of Tanzania"/>
                                </div>
                                <p>
                                    <b>
                                        Unlimited Expeditions - The Soul of Tanzania

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
                    <li class="col   col-12 col-t-6 col-d-4   ">
                        <a class="list__item    " href="tours/t12596.html" target="_blank" data-id="12596"
                           title="4-Day Pearl of Africa Trip Including Gorilla Trekking">
                            <div class="list__item--image__full">

                                <picture class="list__picture">
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source
                                        data-srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_007.jpg"
                                        media="(min-width: 501px) and (max-width: 743px)" class="lazyload">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                        data-srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007.jpg 1x"
                                        class="lazyload" alt="4-Day Pearl of Africa Trip Including Gorilla Trekking"/>
                                    <noscript>
                                        <source
                                            srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/744x372/Bwindi_Impenetrable_National_Park_007.jpg"
                                            media="(min-width: 501px) and (max-width: 743px)">
                                        <img
                                            src="../cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007.jpg"
                                            srcset="https://cloudfront.safaribookings.com/lib/uganda/tour/480x240/Bwindi_Impenetrable_National_Park_007@2x.jpg 2x"/>
                                    </noscript>
                                </picture>

                                <div class="holder-tourtitle">
                                    <h2 class="serif tourtitle">4-Day Pearl of Africa Trip Including Gorilla
                                        Trekking</h2>
                                </div>

                            </div>
                            <div class="list__item--data  matchheight ">

                                <p class="price">
                                    <b>$1,487</b>
                                    pp (USD)
                                </p>


                                <p class="desc">
                                    <b>Uganda:</b>
                                    Private tour<span></span>Budget<span></span>Tented Camp & Resort
                                </p>

                                <p class="visit"><b>You Visit:</b> Entebbe <span>(Start)</span>, Lake Mburo NP, Bwindi
                                    NP <span class="grey">(Gorillas)</span>, Lake Bunyonyi, <span class="nowrap">Entebbe Airport <span>(End)</span></span>
                                </p>
                            </div>

                            <div class="operator-snippet__data">
                                <div class="opdata__image">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                        data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo1_1499683350.gif"
                                        class="lazyload" alt="Home To Africa Tours and Travel"
                                        title="Home To Africa Tours and Travel"/>
                                </div>
                                <p>
                                    <b>
                                        Home To Africa Tours and Travel

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
                                        class="nowrap">154 Reviews</span></p>
                            </div>


                            <span class="favorite-save  " data-id="12596" data-type="tour"
                                  title="Add to your favorites list">
                                        <img class="svg svg--shadowed"
                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                             alt="Not in favorites"/>
                                    </span>

                        </a>
                    </li>
                    <li class="col   col-12 col-t-6 col-d-4   ">
                        <a class="list__item    " href="tours/t20511.html" target="_blank" data-id="20511"
                           title="8-Day Migration Serengeti (Jun to Jul) Mid -Range">
                            <div class="list__item--image__full">

                                <picture class="list__picture">
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source
                                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Serengeti_National_Park_034.jpg"
                                        media="(min-width: 501px) and (max-width: 743px)" class="lazyload">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034.jpg 1x"
                                        class="lazyload" alt="8-Day Migration Serengeti (Jun to Jul) Mid -Range"/>
                                    <noscript>
                                        <source
                                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/744x372/Serengeti_National_Park_034.jpg"
                                            media="(min-width: 501px) and (max-width: 743px)">
                                        <img
                                            src="../cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034.jpg"
                                            srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Serengeti_National_Park_034@2x.jpg 2x"/>
                                    </noscript>
                                </picture>

                                <div class="holder-tourtitle">
                                    <h2 class="serif tourtitle">8-Day Migration Serengeti (Jun to Jul) Mid -Range</h2>
                                </div>

                            </div>
                            <div class="list__item--data  matchheight ">

                                <p class="price">
                                    <b>$2,920</b>
                                    pp (USD)
                                </p>


                                <p class="desc">
                                    <b>Tanzania:</b>
                                    Private tour<span></span>
                                    <nobr>Mid-range</nobr>
                                    <span></span>Lodge & Tented Camp
                                </p>

                                <p class="visit"><b>You Visit:</b> Arusha <span>(Start)</span>, Lake Manyara NP,
                                    Serengeti NP, Ngorongoro Highlands, Ngorongoro Crater, Tarangire NP, <span
                                        class="nowrap">Arusha <span>(End)</span></span></p>
                            </div>

                            <div class="operator-snippet__data">
                                <div class="opdata__image">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                        data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo-safari-boo_1472481300.gif"
                                        class="lazyload" alt="Lion King Adventures" title="Lion King Adventures"/>
                                </div>
                                <p>
                                    <b>
                                        Lion King Adventures

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
                                        class="nowrap">333 Reviews</span></p>
                            </div>


                            <span class="favorite-save  " data-id="20511" data-type="tour"
                                  title="Add to your favorites list">
                                        <img class="svg svg--shadowed"
                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                             alt="Not in favorites"/>
                                    </span>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col col-12">

                    <div class="button-holder">
                        <a class="btn btn--next btn--white btn--autowidth-t" href="tours.html"
                           title="All 7,986 Safari Tours">All 7,986 Safari Tours</a>
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
                <div class="col col-12 col-t-4 col-d-3  ">
                    <a href="p4494.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "
                       data-id="4494">

                        <div class="topratedoperators__snippet__rank"><span>#1</span></div>

                        <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">
                            <div class="operator_name">
                                <h2>
                                    Sino Africa Safari
                                </h2>

                            </div>
                        </div>

                        <div class="topratedoperators__snippet__head hide show-t col col-12">
                            <picture>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
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
                                    Sino Africa Safari
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
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
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
                <div class="col col-12 col-t-4 col-d-3  ">
                    <a href="p209.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "
                       data-id="209">

                        <div class="topratedoperators__snippet__rank"><span>#2</span></div>

                        <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">
                            <div class="operator_name">
                                <h2>
                                    Pembury Tours
                                </h2>

                            </div>
                        </div>

                        <div class="topratedoperators__snippet__head hide show-t col col-12">
                            <picture>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    data-src="https://cloudfront.safaribookings.com/operators/photos/pembury-tours-p_1360846320.jpg"
                                    data-srcset="https://cloudfront.safaribookings.com/operators/photos/pembury-tours-p_1360846320.jpg"
                                    class="operator-photo lazyload" title="Pembury Tours" alt="Pembury Tours Photo"/>
                                <noscript>
                                    <img
                                        src="../cloudfront.safaribookings.com/operators/photos/pembury-tours-p_1360846320.jpg"
                                        title="Pembury Tours" alt="Pembury Tours Photo">
                                </noscript>
                            </picture>
                            <div class="operator_name">
                                <h2>
                                    Pembury Tours
                                </h2>
                                <div class="rank show hide-t">
                                    <i class="sbi sbi--medal-silver medal"></i>
                                    #2 of all tour operators
                                </div>
                            </div>
                            <span class="favorite-save  " data-id="209" data-type="operator"
                                  title="Add to your favorites list">
                                        <img class="svg svg--shadowed"
                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                             alt=""/>
                                    </span>
                        </div>

                        <div class="topratedoperators__snippet__body col col-12">
                            <div class="operator_logo">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    data-src="https://cloudfront.safaribookings.com/operators/logos/pembury-tours-l_1360846325.gif"
                                    data-srcset="https://cloudfront.safaribookings.com/operators/logos/pembury-tours-l_1360846325.gif"
                                    class="operator-logo lazyload" title="Pembury Tours" alt="Pembury Tours Logo"/>
                            </div>
                            <div class="reviews txt--small">
                                <div class="stars      " title="5 / 5">
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                </div>
                                <br class="hide show-t"/>
                                347 Reviews
                                <div class="txt--xgrey show hide-t">
                                    <i class="sbi sbi--medal-silver medal"></i>
                                    <b>#2</b> of all tour operators
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col col-12 col-t-4 col-d-3  ">
                    <a href="p2673.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "
                       data-id="2673">

                        <div class="topratedoperators__snippet__rank"><span>#3</span></div>

                        <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">
                            <div class="operator_name">
                                <h2>
                                    Lion King Adventures
                                </h2>

                            </div>
                        </div>

                        <div class="topratedoperators__snippet__head hide show-t col col-12">
                            <picture>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    data-src="https://cloudfront.safaribookings.com/operators/photos/lion_king_staff_2673_5bfd5cfdcf23c.jpg"
                                    data-srcset="https://cloudfront.safaribookings.com/operators/photos/lion_king_staff_2673_5bfd5cfdcf23c.jpg"
                                    class="operator-photo lazyload" title="Lion King Adventures"
                                    alt="Lion King Adventures Photo"/>
                                <noscript>
                                    <img
                                        src="../cloudfront.safaribookings.com/operators/photos/lion_king_staff_2673_5bfd5cfdcf23c.jpg"
                                        title="Lion King Adventures" alt="Lion King Adventures Photo">
                                </noscript>
                            </picture>
                            <div class="operator_name">
                                <h2>
                                    Lion King Adventures
                                </h2>
                                <div class="rank show hide-t">
                                    <i class="sbi sbi--medal-bronze medal"></i>
                                    #3 of all tour operators
                                </div>
                            </div>
                            <span class="favorite-save  " data-id="2673" data-type="operator"
                                  title="Add to your favorites list">
                                        <img class="svg svg--shadowed"
                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                             alt=""/>
                                    </span>
                        </div>

                        <div class="topratedoperators__snippet__body col col-12">
                            <div class="operator_logo">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    data-src="https://cloudfront.safaribookings.com/operators/logos/logo-safari-boo_1472481300.gif"
                                    data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo-safari-boo_1472481300.gif"
                                    class="operator-logo lazyload" title="Lion King Adventures"
                                    alt="Lion King Adventures Logo"/>
                            </div>
                            <div class="reviews txt--small">
                                <div class="stars      " title="5 / 5">
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                </div>
                                <br class="hide show-t"/>
                                333 Reviews
                                <div class="txt--xgrey show hide-t">
                                    <i class="sbi sbi--medal-bronze medal"></i>
                                    <b>#3</b> of all tour operators
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col col-12 col-t-4 col-d-3  hide show-d  ">
                    <a href="p58.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "
                       data-id="58">

                        <div class="topratedoperators__snippet__rank"><span>#4</span></div>

                        <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">
                            <div class="operator_name">
                                <h2>
                                    Matoke Tours
                                </h2>

                            </div>
                        </div>

                        <div class="topratedoperators__snippet__head hide show-t col col-12">
                            <picture>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    data-src="https://cloudfront.safaribookings.com/operators/photos/1_58_5df36d479384b.jpg"
                                    data-srcset="https://cloudfront.safaribookings.com/operators/photos/1_58_5df36d479384b.jpg"
                                    class="operator-photo lazyload" title="Matoke Tours" alt="Matoke Tours Photo"/>
                                <noscript>
                                    <img src="../cloudfront.safaribookings.com/operators/photos/1_58_5df36d479384b.jpg"
                                         title="Matoke Tours" alt="Matoke Tours Photo">
                                </noscript>
                            </picture>
                            <div class="operator_name">
                                <h2>
                                    Matoke Tours
                                </h2>
                                <div class="rank show hide-t">
                                    #4 of all tour operators
                                </div>
                            </div>
                            <span class="favorite-save  " data-id="58" data-type="operator"
                                  title="Add to your favorites list">
                                        <img class="svg svg--shadowed"
                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                             alt=""/>
                                    </span>
                        </div>

                        <div class="topratedoperators__snippet__body col col-12">
                            <div class="operator_logo">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    data-src="https://cloudfront.safaribookings.com/operators/logos/logo_58_5df375be84bd1.gif"
                                    data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo_58_5df375be84bd1.gif"
                                    class="operator-logo lazyload" title="Matoke Tours" alt="Matoke Tours Logo"/>
                            </div>
                            <div class="reviews txt--small">
                                <div class="stars      " title="5 / 5">
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                </div>
                                <br class="hide show-t"/>
                                316 Reviews
                                <div class="txt--xgrey show hide-t">
                                    <b>#4</b> of all tour operators
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col col-12">
                    <div class="button-holder">
                        <a class="btn btn--next btn--white btn--autowidth-t" href="top-rated-operators.html"
                           title="All Top Rated Operators">All Top Rated Operators</a>
                    </div>

                </div>
            </div>

        </div>

        <div class="container container--main container--home-blog">
            <div class="row">
                <div class="col col-12 blockheader">
                    <h2 class="container--home__heading">Latest Blog Posts</h2>
                </div>
            </div>

            <div class="row list--posts">
                <div class="col col-12 col-t-6 col-d-4  ">
                    <a href="blog/coronavirus-outbreak.html" class="shadowed-box shadowed-box--hover post"
                       title="The Impact of the Coronavirus Pandemic on the Safari Industry (May Update)">
                        <picture>
                            <!--[if IE 9]>
                            <video style="display: none;"><![endif]-->
                            <source
                                data-srcset="https://www.safaribookings.com/blog/wp-content/uploads/2020/04/00-impact-coronavirus-pandemic-on-the-safari-industry-BW-600px-2-723x362.jpg"
                                media="(min-width: 476px) and (max-width: 743px)" class="lazyload">
                            <!--[if IE 9]></video><![endif]-->
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                data-src="https://www.safaribookings.com/blog/wp-content/uploads/2020/04/00-impact-coronavirus-pandemic-on-the-safari-industry-BW-600px-2-455x228.jpg"
                                alt="The Impact of the Coronavirus Pandemic on the Safari Industry (May Update)"
                                class="lazyload"/>
                            <noscript>
                                <source
                                    srcset="https://www.safaribookings.com/blog/wp-content/uploads/2020/04/00-impact-coronavirus-pandemic-on-the-safari-industry-BW-600px-2-723x362.jpg"
                                    media="(min-width: 476px) and (max-width: 743px)">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    src="blog/wp-content/uploads/2020/04/00-impact-coronavirus-pandemic-on-the-safari-industry-BW-600px-2-455x228.jpg"
                                    alt="The Impact of the Coronavirus Pandemic on the Safari Industry (May Update)"/>
                            </noscript>
                        </picture>
                        <h4 class="serif">The Impact of the Coronavirus Pandemic on the Safari Industry (May
                            Update)</h4>
                    </a>
                </div>
                <div class="col col-12 col-t-6 col-d-4  ">
                    <a href="blog/top-10-best-kruger-park-safari-lodges-camps.html"
                       class="shadowed-box shadowed-box--hover post"
                       title="Top 10 Best Kruger Park Safari Lodges &amp; Camps">
                        <picture>
                            <!--[if IE 9]>
                            <video style="display: none;"><![endif]-->
                            <source
                                data-srcset="https://www.safaribookings.com/blog/wp-content/uploads/2021/05/00-top-10-best-kruger-park-safari-lodges-and-camps-BW-header1200px-723x362.jpg"
                                media="(min-width: 476px) and (max-width: 743px)" class="lazyload">
                            <!--[if IE 9]></video><![endif]-->
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                data-src="https://www.safaribookings.com/blog/wp-content/uploads/2021/05/00-top-10-best-kruger-park-safari-lodges-and-camps-BW-header1200px-455x228.jpg"
                                alt="Top 10 Best Kruger Park Safari Lodges &amp; Camps" class="lazyload"/>
                            <noscript>
                                <source
                                    srcset="https://www.safaribookings.com/blog/wp-content/uploads/2021/05/00-top-10-best-kruger-park-safari-lodges-and-camps-BW-header1200px-723x362.jpg"
                                    media="(min-width: 476px) and (max-width: 743px)">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    src="blog/wp-content/uploads/2021/05/00-top-10-best-kruger-park-safari-lodges-and-camps-BW-header1200px-455x228.jpg"
                                    alt="Top 10 Best Kruger Park Safari Lodges &amp; Camps"/>
                            </noscript>
                        </picture>
                        <h4 class="serif">Top 10 Best Kruger Park Safari Lodges &amp; Camps</h4>
                    </a>
                </div>
                <div class="col col-12 col-t-6 col-d-4  hide show-d  ">
                    <a href="blog/where-to-see-giraffes-in-africa-10-best-places-to-go.html"
                       class="shadowed-box shadowed-box--hover post"
                       title="Where to See Giraffes in Africa – 10 Best Places to Go">
                        <picture>
                            <!--[if IE 9]>
                            <video style="display: none;"><![endif]-->
                            <source
                                data-srcset="https://www.safaribookings.com/blog/wp-content/uploads/2021/04/00-where-to-see-giraffes-in-africa-BW-header1200px-723x362.jpg"
                                media="(min-width: 476px) and (max-width: 743px)" class="lazyload">
                            <!--[if IE 9]></video><![endif]-->
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                data-src="https://www.safaribookings.com/blog/wp-content/uploads/2021/04/00-where-to-see-giraffes-in-africa-BW-header1200px-455x228.jpg"
                                alt="Where to See Giraffes in Africa – 10 Best Places to Go" class="lazyload"/>
                            <noscript>
                                <source
                                    srcset="https://www.safaribookings.com/blog/wp-content/uploads/2021/04/00-where-to-see-giraffes-in-africa-BW-header1200px-723x362.jpg"
                                    media="(min-width: 476px) and (max-width: 743px)">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="
                                    src="blog/wp-content/uploads/2021/04/00-where-to-see-giraffes-in-africa-BW-header1200px-455x228.jpg"
                                    alt="Where to See Giraffes in Africa – 10 Best Places to Go"/>
                            </noscript>
                        </picture>
                        <h4 class="serif">Where to See Giraffes in Africa – 10 Best Places to Go</h4>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col col-12">
                    <div class="button-holder">
                        <a class="btn btn--next btn--white btn--autowidth-t" href="blog.html" title="All Blog Posts">All
                            Blog Posts</a>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
