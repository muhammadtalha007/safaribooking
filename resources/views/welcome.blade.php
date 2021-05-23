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
                            <li class="active" id="tanzania-link" onclick="topSafariCountries('tanzania')">
                                <span class="txt--grey">#1</span> <b>Tanzania</b>
                            </li>
                            <li id="botswana-link" onclick="topSafariCountries('botswana')">
                                <span class="txt--grey">#2</span> <b>Botswana</b>
                            </li>
                            <li id="zambia-link" onclick="topSafariCountries('zambia')">
                                <span class="txt--grey">#3</span> <b>Zambia</b>
                            </li>
                            <li id="kenya-link" onclick="topSafariCountries('kenya')">
                                <span class="txt--grey">#4</span> <b>Kenya</b>
                            </li>
                            <li id="south-africa-link" onclick="topSafariCountries('south-africa')">
                                <span class="txt--grey">#5</span> <b>South Africa</b>
                            </li>
                            <li id="namibia-link" onclick="topSafariCountries('namibia')">
                                <span class="txt--grey">#6</span> <b>Namibia</b>
                            </li>
                            <li id="uganda-link" onclick="topSafariCountries('uganda')">
                                <span class="txt--grey">#7</span> <b>Uganda</b>
                            </li>
                            <li id="zimbabwe-link" onclick="topSafariCountries('zimbabwe')">
                                <span class="txt--grey">#8</span> <b>Zimbabwe</b>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-12 col-t-8-5 col-d-9 container--home-toprated__content"
                         data-show=".container--home-toprated__navigation">
                        <div id="tanzania-id" class="container--home-toprated__info active" style="display: block;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Tanzania-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Tanzania-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Tanzania-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/Tanzania-480x240-2x.jpg"
                                        class="loaded" alt="Tanzania"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/Tanzania-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/Tanzania-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <img src="https://cfstatic.safaribookings.com/img/svg/top-rated.svg"
                                     class="toprated-sign loaded" alt="Tanzania - #1 of 8 Major Safari Countries"
                                     title="Tanzania - #1 of 8 Major Safari Countries"
                                     srcset="https://cfstatic.safaribookings.com/img/svg/top-rated.svg">
                                <h3 class="serif"><a href="https://www.safaribookings.com/tanzania"
                                                     title="About Tanzania">Tanzania</a></h3>
                                <div class="txt--grey hide-t"><b>#1</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.8 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.8 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.8</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/tanzania/reviews"
                                       title="1,040 reviews about Tanzania">1,040 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#1</b> of 8 Major Safari Countries</div>
                                <p class="container--home-toprated__info__content__extrapaddingtablet">Tanzania has
                                    three safari circuits and each one of them would make Tanzania a top wildlife
                                    destination. The popular Northern circuit with the Serengeti and Ngorongoro crater
                                    offers one of the best classical safaris in Africa, especially if timed with the
                                    annual wildebeest migration. <a href="https://www.safaribookings.com/tanzania"
                                                                    title="About Tanzania">About Tanzania</a></p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $183 to $543 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> Jun to Oct (Migration from
                                        Jun-Jul &amp; Jan-Feb)
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> July
                                        to March (Northern circuit parks get crowded)
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/tanzania"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="3,152 Tanzania Safaris"><b>3,152</b> Tanzania Safaris</a>
                                <a href="https://www.safaribookings.com/operators/tanzania"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="Tanzania Operators"><b>Tanzania </b> Operators</a>

                                <a href="https://www.safaribookings.com/tours/tanzania"
                                   class="btn btn--next btn--white hide-t" title="3,152 Tanzania Safaris"><b>3,152</b>
                                    Tanzania Safaris</a>
                                <a href="https://www.safaribookings.com/operators/tanzania"
                                   class="btn btn--next btn--white hide-t" title="Tanzania Operators"><b>Tanzania </b>
                                    Operators</a>
                            </div>
                        </div>
                        <div id="botswana-id" class="container--home-toprated__info" style="display: none;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Botswana-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Botswana-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Botswana-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/Botswana-480x240-2x.jpg"
                                        class="loaded" alt="Botswana"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/Botswana-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/Botswana-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <h3 class="serif"><a href="https://www.safaribookings.com/botswana"
                                                     title="About Botswana">Botswana</a></h3>
                                <div class="txt--grey hide-t"><b>#2</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.8 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.8 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.8</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/botswana/reviews"
                                       title="301 reviews about Botswana">301 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#2</b> of 8 Major Safari Countries</div>
                                <p>Botswana is the leader in low-impact, upmarket tourism. This eco-friendly approach
                                    promotes a true wilderness experience in this unspoiled country. The beauty of the
                                    Okavango Delta is best discovered by mokoro canoe, while abundant wildlife can be
                                    encountered in Chobe and Moremi parks. <a
                                        href="https://www.safaribookings.com/botswana" title="About Botswana">About
                                        Botswana</a></p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $185 to $993 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> Mar-May (dry parks), Jun-Sep
                                        (Okavango, Chobe)
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> July
                                        to October (Only Chobe gets crowded)
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/botswana"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="468 Botswana Safaris"><b>468</b> Botswana Safaris</a>
                                <a href="https://www.safaribookings.com/operators/botswana"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="Botswana Operators"><b>Botswana </b> Operators</a>

                                <a href="https://www.safaribookings.com/tours/botswana"
                                   class="btn btn--next btn--white hide-t" title="468 Botswana Safaris"><b>468</b>
                                    Botswana Safaris</a>
                                <a href="https://www.safaribookings.com/operators/botswana"
                                   class="btn btn--next btn--white hide-t" title="Botswana Operators"><b>Botswana </b>
                                    Operators</a>
                            </div>
                        </div>
                        <div id="zambia-id" class="container--home-toprated__info" style="display: none; opacity: 1;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Zambia-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Zambia-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Zambia-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/Zambia-480x240-2x.jpg"
                                        class="loaded" alt="Zambia"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/Zambia-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/Zambia-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <h3 class="serif"><a href="https://www.safaribookings.com/zambia" title="About Zambia">Zambia</a>
                                </h3>
                                <div class="txt--grey hide-t"><b>#3</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.7 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starhalf"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.7 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrasthalf"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.7</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/zambia/reviews"
                                       title="95 reviews about Zambia">95 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#3</b> of 8 Major Safari Countries</div>
                                <p>In Zambia, you’ll be looked after on safari by some of the best guides in Africa.
                                    They’ll happily share everything they know about the local wildlife and landscape,
                                    while safely leading you on game drives, walking safaris, even canoeing safaris
                                    along the Zambezi River. <a href="https://www.safaribookings.com/zambia"
                                                                title="About Zambia">About Zambia</a></p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $185 to $1,176 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> May to September (all parks)
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> July
                                        to October (not crowded, except Victoria Falls)
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/zambia"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="134 Zambia Safaris"><b>134</b> Zambia Safaris</a>
                                <a href="https://www.safaribookings.com/operators/zambia"
                                   class="btn btn--autowidth btn--transparent hide show-ti" title="Zambia Operators"><b>Zambia </b>
                                    Operators</a>

                                <a href="https://www.safaribookings.com/tours/zambia"
                                   class="btn btn--next btn--white hide-t" title="134 Zambia Safaris"><b>134</b> Zambia
                                    Safaris</a>
                                <a href="https://www.safaribookings.com/operators/zambia"
                                   class="btn btn--next btn--white hide-t" title="Zambia Operators"><b>Zambia </b>
                                    Operators</a>
                            </div>
                        </div>
                        <div id="kenya-id" class="container--home-toprated__info" style="display: none; opacity: 1;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Kenya-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Kenya-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Kenya-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/Kenya-480x240-2x.jpg"
                                        class="loaded" alt="Kenya"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/Kenya-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/Kenya-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <h3 class="serif"><a href="https://www.safaribookings.com/kenya" title="About Kenya">Kenya</a>
                                </h3>
                                <div class="txt--grey hide-t"><b>#4</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.6 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starhalf"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.6 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrasthalf"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.6</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/kenya/reviews"
                                       title="890 reviews about Kenya">890 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#4</b> of 8 Major Safari Countries</div>
                                <p>Kenya is a top wildlife destination, recommended especially for those booking a
                                    first-time safari. The Masai Mara offers excellent <a href="#" class="wildlife"
                                                                                          data-val="Big_cats.jpg">big
                                        cat</a> encounters and is the setting for the yearly wildebeest migration.
                                    Palm-lined beaches offer a perfect place to relax after an action packed safari. <a
                                        href="https://www.safaribookings.com/kenya" title="About Kenya">About Kenya</a>
                                </p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $113 to $528 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> June to October, January to
                                        February
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> July
                                        to November, January and February
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/kenya"
                                   class="btn btn--autowidth btn--transparent hide show-ti" title="2,207 Kenya Safaris"><b>2,207</b>
                                    Kenya Safaris</a>
                                <a href="https://www.safaribookings.com/operators/kenya"
                                   class="btn btn--autowidth btn--transparent hide show-ti" title="Kenya Operators"><b>Kenya </b>
                                    Operators</a>

                                <a href="https://www.safaribookings.com/tours/kenya"
                                   class="btn btn--next btn--white hide-t" title="2,207 Kenya Safaris"><b>2,207</b>
                                    Kenya Safaris</a>
                                <a href="https://www.safaribookings.com/operators/kenya"
                                   class="btn btn--next btn--white hide-t" title="Kenya Operators"><b>Kenya </b>
                                    Operators</a>
                            </div>
                        </div>
                        <div id="south-africa-id" class="container--home-toprated__info"
                             style="display: none; opacity: 1;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/South-Africa-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/South-Africa-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/South-Africa-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/South-Africa-480x240-2x.jpg"
                                        class="loaded" alt="South Africa"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/South-Africa-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/South-Africa-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <h3 class="serif"><a href="https://www.safaribookings.com/south-africa"
                                                     title="About South Africa">South Africa</a></h3>
                                <div class="txt--grey hide-t"><b>#5</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.6 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starhalf"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.6 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrasthalf"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.6</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/south-africa/reviews"
                                       title="714 reviews about South Africa">714 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#5</b> of 8 Major Safari Countries</div>
                                <p>South Africa is one of Africa’s great wildlife destinations. Vast Kruger National
                                    Park has an abundance of animals and is one of the continent's iconic attractions.
                                    For outdoor adventure, the Blyde River Canyon is the third largest on the planet,
                                    and jagged peaks of the Drakensberg mountains punch into the sky. Cape Town hums
                                    with an urban beat, and is fringed by white-sandy beaches. <a
                                        href="https://www.safaribookings.com/south-africa" title="About South Africa">About
                                        South Africa</a></p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $171 to $747 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> May to September (All parks)
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> Oct to
                                        Mar (Usually not very crowded)
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/south-africa"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="674 South Africa Safaris"><b>674</b> South Africa Safaris</a>
                                <a href="https://www.safaribookings.com/operators/south-africa"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="South Africa Operators"><b>South Africa </b> Operators</a>

                                <a href="https://www.safaribookings.com/tours/south-africa"
                                   class="btn btn--next btn--white hide-t" title="674 South Africa Safaris"><b>674</b>
                                    South Africa Safaris</a>
                                <a href="https://www.safaribookings.com/operators/south-africa"
                                   class="btn btn--next btn--white hide-t" title="South Africa Operators"><b>South
                                        Africa </b> Operators</a>
                            </div>
                        </div>
                        <div id="namibia-id" class="container--home-toprated__info" style="display: none; opacity: 1;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Namibia-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Namibia-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Namibia-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/Namibia-480x240-2x.jpg"
                                        class="loaded" alt="Namibia"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/Namibia-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/Namibia-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <h3 class="serif"><a href="https://www.safaribookings.com/namibia"
                                                     title="About Namibia">Namibia</a></h3>
                                <div class="txt--grey hide-t"><b>#6</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.5 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starhalf"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.5 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrasthalf"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.5</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/namibia/reviews"
                                       title="183 reviews about Namibia">183 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#6</b> of 8 Major Safari Countries</div>
                                <p>Namibia is characterized by its desert habitat. The harsh environment forms a
                                    magnificent backdrop for a different kind of safari. Animal populations are smaller,
                                    but sightings in this sparse setting tend to be rewarding. Not to be missed is
                                    Etosha Pan, the largest salt pan in Africa and a seasonal wildlife magnet. <a
                                        href="https://www.safaribookings.com/namibia" title="About Namibia">About
                                        Namibia</a></p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $176 to $859 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> June to October (All parks)
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> July
                                        to October (Etosha gets crowded)
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/namibia"
                                   class="btn btn--autowidth btn--transparent hide show-ti" title="222 Namibia Safaris"><b>222</b>
                                    Namibia Safaris</a>
                                <a href="https://www.safaribookings.com/operators/namibia"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="Namibia Operators"><b>Namibia </b> Operators</a>

                                <a href="https://www.safaribookings.com/tours/namibia"
                                   class="btn btn--next btn--white hide-t" title="222 Namibia Safaris"><b>222</b>
                                    Namibia Safaris</a>
                                <a href="https://www.safaribookings.com/operators/namibia"
                                   class="btn btn--next btn--white hide-t" title="Namibia Operators"><b>Namibia </b>
                                    Operators</a>
                            </div>
                        </div>
                        <div id="uganda-id" class="container--home-toprated__info" style="display: none; opacity: 1;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Uganda-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Uganda-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Uganda-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/Uganda-480x240-2x.jpg"
                                        class="loaded" alt="Uganda"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/Uganda-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/Uganda-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <h3 class="serif"><a href="https://www.safaribookings.com/uganda" title="About Uganda">Uganda</a>
                                </h3>
                                <div class="txt--grey hide-t"><b>#7</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.3 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starhalf"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.3 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrasthalf"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.3</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/uganda/reviews"
                                       title="259 reviews about Uganda">259 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#7</b> of 8 Major Safari Countries</div>
                                <p>Uganda is a great destination to view wildlife in both forest and savannah. Not to be
                                    missed is gorilla trekking in Bwindi or Mgahinga, while chimps can easily be spotted
                                    in Kibale and several other locations. Queen Elizabeth and Murchison Falls national
                                    parks offer wonderful savannah safaris with good wildlife viewing, as does the more
                                    remote Kidepo National Park. <a href="https://www.safaribookings.com/uganda"
                                                                    title="About Uganda">About Uganda</a></p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $210 to $610 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> June to August and December
                                        to February
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> June
                                        to September (It's rarely crowded)
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/uganda"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="1,116 Uganda Safaris"><b>1,116</b> Uganda Safaris</a>
                                <a href="https://www.safaribookings.com/operators/uganda"
                                   class="btn btn--autowidth btn--transparent hide show-ti" title="Uganda Operators"><b>Uganda </b>
                                    Operators</a>

                                <a href="https://www.safaribookings.com/tours/uganda"
                                   class="btn btn--next btn--white hide-t" title="1,116 Uganda Safaris"><b>1,116</b>
                                    Uganda Safaris</a>
                                <a href="https://www.safaribookings.com/operators/uganda"
                                   class="btn btn--next btn--white hide-t" title="Uganda Operators"><b>Uganda </b>
                                    Operators</a>
                            </div>
                        </div>
                        <div id="zimbabwe-id" class="container--home-toprated__info" style="display: none;">
                            <div class="container--home-toprated__info__bg">
                                <picture>
                                    <!--[if IE 9]>
                                    <video style="display: none;"><![endif]-->
                                    <source media="(min-width: 970px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Zimbabwe-900x424.jpg">
                                    <source media="(min-width: 744px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Zimbabwe-687x392.jpg">
                                    <source media="(min-width: 501px)" class=""
                                            srcset="https://cloudfront.safaribookings.com/assets/toprated/Zimbabwe-724x362.jpg">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img
                                        src="https://cloudfront.safaribookings.com/assets/toprated/Zimbabwe-480x240-2x.jpg"
                                        class="loaded" alt="Zimbabwe"
                                        srcset="https://cloudfront.safaribookings.com/assets/toprated/Zimbabwe-480x240-2x.jpg 2x, https://cloudfront.safaribookings.com/assets/toprated/Zimbabwe-480x240.jpg 1x">
                                </picture>
                            </div>
                            <div class="container--home-toprated__info__content">
                                <h3 class="serif"><a href="https://www.safaribookings.com/zimbabwe"
                                                     title="About Zimbabwe">Zimbabwe</a></h3>
                                <div class="txt--grey hide-t"><b>#8</b> of 8 Major Safari Countries</div>
                                <div class="review-summary--oneline">
                <span class="hide-t"><div class="stars    large    " title="4.3 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starhalf"></i>
        </div>
</span><span class="hide show-ti"><div class="stars    large    " title="4.3 / 5">
            <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrast"></i>
        <i class="sbi sbi--starcontrasthalf"></i>
        </div>
</span> <span class="review-score review-score--tabletwhite"><em>4.3</em>/5</span> &nbsp;–&nbsp;
                                    <a href="https://www.safaribookings.com/zimbabwe/reviews"
                                       title="106 reviews about Zimbabwe">106 Reviews</a>
                                </div>
                                <div class="hide show-t nr-of"><b>#8</b> of 8 Major Safari Countries</div>
                                <p>Due to the political situation in Zimbabwe, tourists are few and prices are
                                    competitive, but the main parks are still cared for and well worth visiting. Hwange
                                    is not to be missed and Mana Pools offers great canoeing safaris on the Zambezi
                                    River. Victoria Falls, Africa’s largest waterfall, is a must-go-to destination;
                                    standing in the spray of this powerful curtain of flowing water is both moving and
                                    overwhelming. <a href="https://www.safaribookings.com/zimbabwe"
                                                     title="About Zimbabwe">About Zimbabwe</a></p>

                                <ul class="row">
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi  sbi--dollar-small  show hide-t"></i><i
                                            class="sbi  sbi--dollar-big-white  hide show-t"></i><b>Rates <span
                                                class="txt--normal">(USD)</span> </b> $200 to $855 pp/day
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--best-time show hide-t"></i><i
                                            class="sbi sbi--best-time-white hide show-t"></i><b>Best Time<span
                                                class="hide show-di">&nbsp;to Go</span></b> May to September (All parks)
                                    </li>
                                    <li class="col col-12 col-t-4 no-gutter"><i
                                            class="sbi sbi--high-season show hide-t"></i><i
                                            class="sbi sbi--high-season-white hide show-t"></i><b>High Season</b> July
                                        to October (Only Victoria Falls gets busy)
                                    </li>
                                </ul>

                                <a href="https://www.safaribookings.com/tours/zimbabwe"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="180 Zimbabwe Safaris"><b>180</b> Zimbabwe Safaris</a>
                                <a href="https://www.safaribookings.com/operators/zimbabwe"
                                   class="btn btn--autowidth btn--transparent hide show-ti"
                                   title="Zimbabwe Operators"><b>Zimbabwe </b> Operators</a>

                                <a href="https://www.safaribookings.com/tours/zimbabwe"
                                   class="btn btn--next btn--white hide-t" title="180 Zimbabwe Safaris"><b>180</b>
                                    Zimbabwe Safaris</a>
                                <a href="https://www.safaribookings.com/operators/zimbabwe"
                                   class="btn btn--next btn--white hide-t" title="Zimbabwe Operators"><b>Zimbabwe </b>
                                    Operators</a>
                            </div>
                        </div>
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
                        <a class="list__item    " href="tours/t17948.html" target="_blank" data-id="17948"
                           title="5-Day Living Among Lions - Mid-Range">
                            <div class="list__item--image__full">

                                <picture class="list__picture">
                                    <img
                                        src="{{env('OPERATOR_URL')}}/view-tour-icon/{{$item->id}}"
                                        data-srcset="https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021@2x.jpg 2x, https://cloudfront.safaribookings.com/lib/tanzania/tour/480x240/Katavi_National_Park_021.jpg 1x"
                                        class="lazyload" alt="5-Day Living Among Lions - Mid-Range"/>
                                </picture>

                                <div class="holder-tourtitle">
                                    <h2 class="serif tourtitle">{{$item->total_days}}-Day {{$item->title}} - Mid-Range</h2>
                                </div>

                            </div>
                            <div class="list__item--data  matchheight ">

                                <p class="price">
                                    <b>${{$item->price}}</b> pp (USD)
                                </p>


                                <p class="desc">
                                    <b>Tanzania:</b>
                                    Private tour
                                    @foreach($item->features as $feature)
                                        <span></span><nobr>{{\App\Features::where('id', $feature->feature_id)->first()['name']}}</nobr>

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
                        <a class="btn btn--next btn--white btn--autowidth-t" href="tours.html"
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
                @foreach($operators as $operator)
                <div class="col col-12 col-t-4 col-d-3">
                    <a href="p4494.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "
                       data-id="4494">

                        <div class="topratedoperators__snippet__rank"><span>#1</span></div>

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
{{--                <div class="col col-12 col-t-4 col-d-3  ">--}}
{{--                    <a href="p209.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "--}}
{{--                       data-id="209">--}}

{{--                        <div class="topratedoperators__snippet__rank"><span>#2</span></div>--}}

{{--                        <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">--}}
{{--                            <div class="operator_name">--}}
{{--                                <h2>--}}
{{--                                    Pembury Tours--}}
{{--                                </h2>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="topratedoperators__snippet__head hide show-t col col-12">--}}
{{--                            <picture>--}}
{{--                                <img--}}
{{--                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                                    data-src="https://cloudfront.safaribookings.com/operators/photos/pembury-tours-p_1360846320.jpg"--}}
{{--                                    data-srcset="https://cloudfront.safaribookings.com/operators/photos/pembury-tours-p_1360846320.jpg"--}}
{{--                                    class="operator-photo lazyload" title="Pembury Tours" alt="Pembury Tours Photo"/>--}}
{{--                                <noscript>--}}
{{--                                    <img--}}
{{--                                        src="../cloudfront.safaribookings.com/operators/photos/pembury-tours-p_1360846320.jpg"--}}
{{--                                        title="Pembury Tours" alt="Pembury Tours Photo">--}}
{{--                                </noscript>--}}
{{--                            </picture>--}}
{{--                            <div class="operator_name">--}}
{{--                                <h2>--}}
{{--                                    Pembury Tours--}}
{{--                                </h2>--}}
{{--                                <div class="rank show hide-t">--}}
{{--                                    <i class="sbi sbi--medal-silver medal"></i>--}}
{{--                                    #2 of all tour operators--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="favorite-save  " data-id="209" data-type="operator"--}}
{{--                                  title="Add to your favorites list">--}}
{{--                                        <img class="svg svg--shadowed"--}}
{{--                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"--}}
{{--                                             alt=""/>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                        <div class="topratedoperators__snippet__body col col-12">--}}
{{--                            <div class="operator_logo">--}}
{{--                                <img--}}
{{--                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                                    data-src="https://cloudfront.safaribookings.com/operators/logos/pembury-tours-l_1360846325.gif"--}}
{{--                                    data-srcset="https://cloudfront.safaribookings.com/operators/logos/pembury-tours-l_1360846325.gif"--}}
{{--                                    class="operator-logo lazyload" title="Pembury Tours" alt="Pembury Tours Logo"/>--}}
{{--                            </div>--}}
{{--                            <div class="reviews txt--small">--}}
{{--                                <div class="stars      " title="5 / 5">--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                </div>--}}
{{--                                <br class="hide show-t"/>--}}
{{--                                347 Reviews--}}
{{--                                <div class="txt--xgrey show hide-t">--}}
{{--                                    <i class="sbi sbi--medal-silver medal"></i>--}}
{{--                                    <b>#2</b> of all tour operators--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col col-12 col-t-4 col-d-3  ">--}}
{{--                    <a href="p2673.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "--}}
{{--                       data-id="2673">--}}

{{--                        <div class="topratedoperators__snippet__rank"><span>#3</span></div>--}}

{{--                        <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">--}}
{{--                            <div class="operator_name">--}}
{{--                                <h2>--}}
{{--                                    Lion King Adventures--}}
{{--                                </h2>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="topratedoperators__snippet__head hide show-t col col-12">--}}
{{--                            <picture>--}}
{{--                                <img--}}
{{--                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                                    data-src="https://cloudfront.safaribookings.com/operators/photos/lion_king_staff_2673_5bfd5cfdcf23c.jpg"--}}
{{--                                    data-srcset="https://cloudfront.safaribookings.com/operators/photos/lion_king_staff_2673_5bfd5cfdcf23c.jpg"--}}
{{--                                    class="operator-photo lazyload" title="Lion King Adventures"--}}
{{--                                    alt="Lion King Adventures Photo"/>--}}
{{--                                <noscript>--}}
{{--                                    <img--}}
{{--                                        src="../cloudfront.safaribookings.com/operators/photos/lion_king_staff_2673_5bfd5cfdcf23c.jpg"--}}
{{--                                        title="Lion King Adventures" alt="Lion King Adventures Photo">--}}
{{--                                </noscript>--}}
{{--                            </picture>--}}
{{--                            <div class="operator_name">--}}
{{--                                <h2>--}}
{{--                                    Lion King Adventures--}}
{{--                                </h2>--}}
{{--                                <div class="rank show hide-t">--}}
{{--                                    <i class="sbi sbi--medal-bronze medal"></i>--}}
{{--                                    #3 of all tour operators--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="favorite-save  " data-id="2673" data-type="operator"--}}
{{--                                  title="Add to your favorites list">--}}
{{--                                        <img class="svg svg--shadowed"--}}
{{--                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"--}}
{{--                                             alt=""/>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                        <div class="topratedoperators__snippet__body col col-12">--}}
{{--                            <div class="operator_logo">--}}
{{--                                <img--}}
{{--                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                                    data-src="https://cloudfront.safaribookings.com/operators/logos/logo-safari-boo_1472481300.gif"--}}
{{--                                    data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo-safari-boo_1472481300.gif"--}}
{{--                                    class="operator-logo lazyload" title="Lion King Adventures"--}}
{{--                                    alt="Lion King Adventures Logo"/>--}}
{{--                            </div>--}}
{{--                            <div class="reviews txt--small">--}}
{{--                                <div class="stars      " title="5 / 5">--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                </div>--}}
{{--                                <br class="hide show-t"/>--}}
{{--                                333 Reviews--}}
{{--                                <div class="txt--xgrey show hide-t">--}}
{{--                                    <i class="sbi sbi--medal-bronze medal"></i>--}}
{{--                                    <b>#3</b> of all tour operators--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col col-12 col-t-4 col-d-3  hide show-d  ">--}}
{{--                    <a href="p58.html" class="topratedoperators__snippet shadowed-box   shadowed-box--hover  "--}}
{{--                       data-id="58">--}}

{{--                        <div class="topratedoperators__snippet__rank"><span>#4</span></div>--}}

{{--                        <div class="topratedoperators__snippet__mobilehead show hide-t col col-12">--}}
{{--                            <div class="operator_name">--}}
{{--                                <h2>--}}
{{--                                    Matoke Tours--}}
{{--                                </h2>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="topratedoperators__snippet__head hide show-t col col-12">--}}
{{--                            <picture>--}}
{{--                                <img--}}
{{--                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                                    data-src="https://cloudfront.safaribookings.com/operators/photos/1_58_5df36d479384b.jpg"--}}
{{--                                    data-srcset="https://cloudfront.safaribookings.com/operators/photos/1_58_5df36d479384b.jpg"--}}
{{--                                    class="operator-photo lazyload" title="Matoke Tours" alt="Matoke Tours Photo"/>--}}
{{--                                <noscript>--}}
{{--                                    <img src="../cloudfront.safaribookings.com/operators/photos/1_58_5df36d479384b.jpg"--}}
{{--                                         title="Matoke Tours" alt="Matoke Tours Photo">--}}
{{--                                </noscript>--}}
{{--                            </picture>--}}
{{--                            <div class="operator_name">--}}
{{--                                <h2>--}}
{{--                                    Matoke Tours--}}
{{--                                </h2>--}}
{{--                                <div class="rank show hide-t">--}}
{{--                                    #4 of all tour operators--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="favorite-save  " data-id="58" data-type="operator"--}}
{{--                                  title="Add to your favorites list">--}}
{{--                                        <img class="svg svg--shadowed"--}}
{{--                                             src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"--}}
{{--                                             alt=""/>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                        <div class="topratedoperators__snippet__body col col-12">--}}
{{--                            <div class="operator_logo">--}}
{{--                                <img--}}
{{--                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAQAAABeK7cBAAAAC0lEQVR42mNkAAIAAAoAAv/lxKUAAAAASUVORK5CYII="--}}
{{--                                    data-src="https://cloudfront.safaribookings.com/operators/logos/logo_58_5df375be84bd1.gif"--}}
{{--                                    data-srcset="https://cloudfront.safaribookings.com/operators/logos/logo_58_5df375be84bd1.gif"--}}
{{--                                    class="operator-logo lazyload" title="Matoke Tours" alt="Matoke Tours Logo"/>--}}
{{--                            </div>--}}
{{--                            <div class="reviews txt--small">--}}
{{--                                <div class="stars      " title="5 / 5">--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                    <i class="sbi sbi--star"></i>--}}
{{--                                </div>--}}
{{--                                <br class="hide show-t"/>--}}
{{--                                316 Reviews--}}
{{--                                <div class="txt--xgrey show hide-t">--}}
{{--                                    <b>#4</b> of all tour operators--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </a>--}}
{{--                </div>--}}
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

    </main>
    <script>
        function topSafariCountries(countryId) {
            document.getElementById('tanzania-id').style.display = 'none';
            document.getElementById('botswana-id').style.display = 'none';
            document.getElementById('zambia-id').style.display = 'none';
            document.getElementById('kenya-id').style.display = 'none';
            document.getElementById('south-africa-id').style.display = 'none';
            document.getElementById('namibia-id').style.display = 'none';
            document.getElementById('uganda-id').style.display = 'none';
            document.getElementById('zimbabwe-id').style.display = 'none';
            document.getElementById(countryId + '-id').style.display = 'block';
            document.getElementById('tanzania-link').classList.remove('active');
            document.getElementById('botswana-link').classList.remove('active');
            document.getElementById('zambia-link').classList.remove('active');
            document.getElementById('kenya-link').classList.remove('active');
            document.getElementById('south-africa-link').classList.remove('active');
            document.getElementById('namibia-link').classList.remove('active');
            document.getElementById('uganda-link').classList.remove('active');
            document.getElementById('zimbabwe-link').classList.remove('active');
            document.getElementById(countryId + '-link').classList.add('active');
        }
    </script>
@endsection
