@extends('layouts.landing-app')
@section('content')
    <main class="main">
        <div class="titlebar titlebar--tour hide show-t">
            <div class="container" data-filterbtn-txt="Filters">
                <div class="row hide show-t">
                    <ol class="col col-0 col-t-12 breadcrumbs">
                        <li>
                            You are here:
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="index.html" title="SafariBookings.com">Home</a>
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="tours.html" title="All Tours"><span>All Tours</span></a>
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="tours.html" title="African Safari Tours &amp; Holidays"
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
                    <div class="filters__close">Filter Options<a href="#"><i class="sbi sbi--cross"></i></a></div>
                    <div class="filters__all" data-role="filters-scroll">
                        <div class="filters__block filters__block--tourpreferences messagebox  messagebox--yellow  ">
                            <h3 class="serif">Your Safari</h3>
                            <form class="row tourpreferences  " autocomplete="off" method="GET"
                                  action="https://www.safaribookings.com/tours">
                                <div class="col col-t-3-5 tourpreferences__block tourpreferences__destination">
                                    <i class="sbi sbi--map-pin row-icon"></i>
                                    <div class="tourpreferences__destination__row">
                                        <div class="tourpreferences__destination__row__inner">
                                            <label for="destination">Destination</label>
                                            <input id="destination" type="text" value="" name="destination"
                                                   data-types="destinations" data-shadow="false" spellcheck="false"
                                                   value="" data-title="Start typing or select below" autocomplete="off"
                                                   data-limit="8">
                                            <div class="placeholder">Where To</div>
                                        </div>
                                        <div class="detail detail__destination"></div>
                                        <span class="clear-btn"></span>
                                        <span class="open-sign open-sign--search"><i
                                                class="sbi sbi--search-grey mirrored"></i></span>
                                    </div>
                                    <div class="tourpreferences__destination__add  "><a href="#"><span
                                                class="txt2"><i>+</i> Add country, park or highlight</span></a></div>
                                </div>
                                <div class="col col-t-2-5 tourpreferences__block tourpreferences__date  ">
                                    <span class="clear-btn clear-btn--date" style="display:none"></span>
                                    <span class="open-sign open-sign--arrow">&rsaquo;</span>
                                    <i class="sbi sbi--calendar row-icon"></i>
                                    <span class="lbl lbl-startdate">Start Date</span>
                                    <div class="inputholder"></div>
                                    <div class="detail detail__date">
                                        <div class="inner calendar" data-lbl="lbl-startdate"
                                             data-clear="clear-btn--date" data-hiddenname="date">
                                            <label>Start Date :</label><input name="date" type="date" min="2021-05-20"
                                                                              max="2024-12-31" value=""/>
                                            <label for="flexdate" class="checkbox-lbl"><input type="checkbox"
                                                                                              id="flexdate" name="flex"
                                                                                              value="1" checked> My
                                                dates are somewhat flexible</label>
                                        </div>
                                        <div class="detail__title">
                                            Start Date
                                            <button type="button" class="detail__close"
                                                    aria-label="close 'Start Date' panel"><i class="sbi sbi--cross"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tourpreferences__date__extraflex">
                                        <label for="flexdateextra" class="checkbox-lbl"><input type="checkbox"
                                                                                               class="checkbox--blue"
                                                                                               id="flexdateextra"
                                                                                               checked> <span
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
                                    <div class="inputholder"></div>
                                    <div class="detail detail__persons">
                                        <div class="inner" data-clear="clear-btn--persons">
                                            <div class="row">
                                                <div class="no-gutter">
                                                    <label for="adults">Adults <span class="hide show-ti txt--small">(18+ years)</span><span
                                                            class="hide-t txt--small">(18+)</span>:</label><input
                                                        name="adults" id="adults" type="number" min="1" max="99"
                                                        value="2"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="no-gutter">
                                                    <label for="children">Children <span
                                                            class="hide show-ti txt--small">(0-17 years)</span><span
                                                            class="hide-t txt--small">(0-17)</span>:</label><input
                                                        name="children" id="children" type="number" min="0" max="10"
                                                        value="0"/>
                                                </div>
                                            </div>

                                            <div class="children-ages" data-state="invisible">
                                                <div class="row">
                                                    <div class="no-gutter">
                                                        <strong class="txt--grey txt--small">Age at the end of the
                                                            tour</strong>
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
                                            <input type="submit"
                                                   class="show btn btn--white btn--autowidth homepersons-ok"
                                                   value="Done"/>
                                        </div>
                                        <div class="detail__title">
                                            Travelers
                                            <button type="button" class="detail__close"
                                                    aria-label="Close 'Travelers' panel"><i class="sbi sbi--cross"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-t-3  hide  ">
                                    <a href="javascript:void(0);" class="btn btn--orange search btn--next">Search</a>
                                </div>
                            </form>

                        </div>

                        <div class="filters__block" data-var="no_of_days">
                            <h3>Tour Length</h3>

                            <div class="no_of_days slider" id="no_of_days-slider" data-min="0" data-max="21"
                                 data-steps="1" data-format="%s day(s)"
                                 data-breakdown="31,383,464,1376,1106,1040,788,803,503,293,363,219,195,111,113,88,34,16,15,9,11,25"
                                 data-max-breakdown="1376">

                            </div>
                            <div class="slider-val1" id="no_of_days-val1"></div>
                            <div class="slider-val2" id="no_of_days-val2"></div>
                        </div>
                        <div class="filters__block" data-var="price">
                            <h3>Rates in USD &#36; <span>&ndash;</span> <a href="changecurrency.html"
                                                                           class="currency-selector"
                                                                           rel="overlay nofollow"
                                                                           data-overlay-hash="currency"
                                                                           title="Change Currency">Change Currency</a>
                            </h3>
                            <span>Per person, excl. international flights</span>

                            <div class="price slider" id="price-slider" data-min="100" data-max="10000" data-steps="100"
                                 data-format="$987,654,321"
                                 data-breakdown="404,855,1041,847,742,704,516,419,383,322,252,206,192,127,116,115,99,85,52,60,45,37,40,31,27,17,29,27,20,13,18,8,7,130"
                                 data-max-breakdown="1041">

                            </div>
                            <div class="slider-val1" id="price-val1"></div>
                            <div class="slider-val2" id="price-val2"></div>
                        </div>
                        <div class="filters__block" data-var="comfort">
                            <h3>Comfort Level<a href="javascript:void(0);" class="help  wide  "
                                                title="&lt;b&gt;Luxury+&lt;/b&gt;&lt;br /&gt;&lt;ul class=&#039;list list--icon list--icon-arrow&#039;&gt;&lt;li&gt;Safari using extremely luxurious tented camps or lodges, usually located in a prime wildlife-viewing area and comparable to a 5-star hotel.&lt;/li&gt;&lt;/ul&gt;&lt;b&gt;Luxury&lt;/b&gt;&lt;br /&gt;&lt;ul class=&#039;list list--icon list--icon-arrow&#039;&gt;&lt;li&gt;Safari using deluxe tented camps or lodges, usually located inside the park and comparable to a 3- to 4-star hotel.&lt;/li&gt;&lt;li&gt;Classic tented camps which are valued more for being in a prime wildlife-viewing area than for luxury, but they are always comfortable.&lt;/li&gt;&lt;/ul&gt;&lt;b&gt;Mid-range&lt;/b&gt;&lt;br /&gt;&lt;ul class=&#039;list list--icon list--icon-arrow&#039;&gt;&lt;li&gt;Safari using medium to large-scale accommodation, usually located inside or just outside the park, and comparable to a 2- to 3-star hotel.&lt;/li&gt;&lt;li&gt;Basic, but comfortable, camping safari with spacious tents, a normal bed, private bathroom and staff to take care of camp chores.&lt;/li&gt;&lt;/ul&gt;&lt;b&gt;Budget&lt;/b&gt;&lt;br /&gt;&lt;ul class=&#039;list list--icon list--icon-arrow&#039;&gt;&lt;li&gt;Safari using affordable accommodation, usually located outside the park and comparable to a 1- to 2-star hotel.&lt;/li&gt;&lt;li&gt;Budget camping safari using small tents. The shower and toilet are normally shared. Clients will usually have to assist with camp chores.&lt;/li&gt;&lt;/ul&gt;"></a>
                            </h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbcomfort0"><input
                                            type="checkbox" id="cbcomfort0" data-parent="" data-var="luxuryplus"/><span>Luxury+</span>
                                        <span class="filters__block__check__amount" data-amount="119"
                                              data-var="luxuryplus">(119)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbcomfort1"><input
                                            type="checkbox" id="cbcomfort1" data-parent=""
                                            data-var="luxury"/><span>Luxury</span> <span
                                            class="filters__block__check__amount" data-amount="1316" data-var="luxury">(1,316)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbcomfort2"><input
                                            type="checkbox" id="cbcomfort2" data-parent="" data-var="midrange"/><span>Mid-range</span>
                                        <span class="filters__block__check__amount" data-amount="3641"
                                              data-var="midrange">(3,641)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbcomfort3"><input
                                            type="checkbox" id="cbcomfort3" data-parent="" data-var="budget"/><span><a
                                                class="dp" href="tours/budget.html"
                                                data-cid="cbcomfort3">Budget</a></span>
                                        <span class="filters__block__check__amount" data-amount="2396"
                                              data-var="budget">(2,396)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var="type">
                            <h3>Private or Shared Tour<a href="javascript:void(0);" class="help  "
                                                         title="&lt;b&gt;Private tour&lt;/b&gt;&lt;br /&gt;A private tour is organized exclusively for you. However, on some private tours the wildlife viewing activities are run by the lodges/camps and will be shared with others.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Shared tour&lt;/b&gt;&lt;br /&gt;On a shared tour, you will join a group of other travelers. You will get a private room or tent but the vehicle and activities will be shared with others."></a>
                            </h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbtype0"><input
                                            type="checkbox" id="cbtype0" data-parent="" data-var="private"/><span><a
                                                class="dp" href="tours/private.html" data-cid="cbtype0">Private tour</a></span>
                                        <span class="filters__block__check__amount" data-amount="5620"
                                              data-var="private">(5,620)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbtype1"><input
                                            type="checkbox" id="cbtype1" data-parent="" data-var="group"/><span><a
                                                class="dp" href="tours/group.html"
                                                data-cid="cbtype1">Shared tour</a></span>
                                        <span class="filters__block__check__amount" data-amount="2266" data-var="group">(2,266)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var="accommodation">
                            <h3>Safari Type<a href="javascript:void(0);" class="help  "
                                              title="&lt;b&gt;Lodge, tented camp or hotel&lt;/b&gt;&lt;br /&gt;Lodges and tented camps are comparable to hotels. The safari tents in a tented camp are similar to hotel rooms, but the walls are made of canvas. Tented camps stay on the same location for months or longer.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Camping&lt;/b&gt;&lt;br /&gt;Camping usually uses smaller tents that are set up and taken down at each destination and then move with clients during their trip."></a>
                            </h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbaccommodation0"><input
                                            type="checkbox" id="cbaccommodation0" data-parent=""
                                            data-var="noncamping"/><span>Lodge, tented camp or hotel</span> <span
                                            class="filters__block__check__amount" data-amount="6516"
                                            data-var="noncamping">(6,516)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbaccommodation1"><input
                                            type="checkbox" id="cbaccommodation1" data-parent=""
                                            data-var="camping"/><span><a class="dp" href="tours/camping.html"
                                                                         data-cid="cbaccommodation1">Camping</a></span>
                                        <span class="filters__block__check__amount" data-amount="1370"
                                              data-var="camping">(1,370)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var='operator_score'>
                            <h3>Operator Rating</h3>

                            <ul class="uncheckable-radio">
                                <li class="filters__block__stars"><label for="cb30" title="5 stars & up"><input
                                            type="radio" name="rating" id="cb30" data-var="5"/><span><div
                                                class="stars    large    " title="5 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars5"><span>(7,353)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb31" title="4 stars & up"><input
                                            type="radio" name="rating" id="cb31" data-var="4"/><span><div
                                                class="stars    large    " title="4 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars4">&amp; up <span>(7,493)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb32" title="3 stars & up"><input
                                            type="radio" name="rating" id="cb32" data-var="3"/><span><div
                                                class="stars    large    " title="3 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars3">&amp; up <span>(7,493)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb33" title="2 stars & up"><input
                                            type="radio" name="rating" id="cb33" data-var="2"/><span><div
                                                class="stars    large    " title="2 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars2">&amp; up <span>(7,493)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb34" title="1 star & up"><input
                                            type="radio" name="rating" id="cb34" data-var="1"/><span><div
                                                class="stars    large    " title="1 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars1">&amp; up <span>(7,493)</span></span></label></li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var="other">
                            <h3>Specialized Tours</h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother0"><input
                                            type="checkbox" id="cbother0" data-parent="" data-var="fly_in"/><span><a
                                                class="dp" href="tours/fly-in.html"
                                                data-cid="cbother0">Fly-in safaris</a></span> <span
                                            class="filters__block__check__amount" data-amount="349"
                                            data-var="fly_in">(349)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother1"><input
                                            type="checkbox" id="cbother1" data-parent="" data-var="family"/><span><a
                                                class="dp" href="tours/family.html"
                                                data-cid="cbother1">Family</a></span> <span
                                            class="filters__block__check__amount" data-amount="3553" data-var="family">(3,553)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother2"><input
                                            type="checkbox" id="cbother2" data-parent=""
                                            data-var="beach"/><span>Beach time</span> <span
                                            class="filters__block__check__amount" data-amount="458"
                                            data-var="beach">(458)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother3"><input
                                            type="checkbox" id="cbother3" data-parent="" data-var="honeymoon"/><span><a
                                                class="dp" href="tours/honeymoon.html" data-cid="cbother3">Honeymoon</a></span>
                                        <span class="filters__block__check__amount" data-amount="1435"
                                              data-var="honeymoon">(1,435)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother4"><input
                                            type="checkbox" id="cbother4" data-parent=""
                                            data-var="gorilla_tracking"/><span><a
                                                class="dp" href="tours/gorilla-trekking.html" data-cid="cbother4">Gorilla trekking</a></span>
                                        <span class="filters__block__check__amount" data-amount="816"
                                              data-var="gorilla_tracking">(816)</span></label>
                                </li>
                            </ul>
                            <ul class="more" style="display:none">
                                <li class="filters__block__check  " data-hide="0"><label for="cbother5"><input
                                            type="checkbox" id="cbother5" data-parent="" data-var="photographic"/><span><a
                                                class="dp" href="tours/photographic.html" data-cid="cbother5">Photographic safaris</a></span>
                                        <span class="filters__block__check__amount" data-amount="45"
                                              data-var="photographic">(45)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother6"><input
                                            type="checkbox" id="cbother6" data-parent="" data-var="climbing"/><span><a
                                                class="dp" href="tours/mountain-climbing.html" data-cid="cbother6">Mountain climbing</a></span>
                                        <span class="filters__block__check__amount" data-amount="400"
                                              data-var="climbing">(400)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother7"><input
                                            type="checkbox" id="cbother7" data-parent="" data-var="walking"/><span><a
                                                class="dp" href="tours/walking.html"
                                                data-cid="cbother7">Walking safaris</a></span> <span
                                            class="filters__block__check__amount" data-amount="56"
                                            data-var="walking">(56)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother8"><input
                                            type="checkbox" id="cbother8" data-parent="" data-var="selfdrive"/><span><a
                                                class="dp" href="tours/self-drive.html"
                                                data-cid="cbother8">Self-drive</a></span> <span
                                            class="filters__block__check__amount" data-amount="78"
                                            data-var="selfdrive">(78)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother9"><input
                                            type="checkbox" id="cbother9" data-parent=""
                                            data-var="guided_selfdrive"/><span>Guided self-drive</span>
                                        <span class="filters__block__check__amount" data-amount="5"
                                              data-var="guided_selfdrive">(5)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother10"><input
                                            type="checkbox" id="cbother10" data-parent=""
                                            data-var="chimp_tracking"/><span><a class="dp"
                                                                                href="tours/chimp-trekking.html"
                                                                                data-cid="cbother10">Chimp trekking</a></span>
                                        <span class="filters__block__check__amount" data-amount="588"
                                              data-var="chimp_tracking">(588)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother11"><input
                                            type="checkbox" id="cbother11" data-parent="" data-var="overland"/><span><a
                                                class="dp" href="tours/overland.html"
                                                data-cid="cbother11">Overland tours</a></span> <span
                                            class="filters__block__check__amount" data-amount="40"
                                            data-var="overland">(40)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother12"><input
                                            type="checkbox" id="cbother12" data-parent=""
                                            data-var="mountain_bike"/><span>Cycling safaris</span>
                                        <span class="filters__block__check__amount" data-amount="7"
                                              data-var="mountain_bike">(7)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother13"><input
                                            type="checkbox" id="cbother13" data-parent="" data-var="canoe"/><span><a
                                                class="dp" href="tours/canoe.html"
                                                data-cid="cbother13">Canoe safaris</a></span>
                                        <span class="filters__block__check__amount" data-amount="28"
                                              data-var="canoe">(28)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother14"><input
                                            type="checkbox" id="cbother14" data-parent="" data-var="horseback"/><span>Horseback safaris</span>
                                        <span class="filters__block__check__amount" data-amount="11"
                                              data-var="horseback">(11)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother15"><input
                                            type="checkbox" id="cbother15" data-parent="" data-var="birding"/><span><a
                                                class="dp" href="tours/birding.html"
                                                data-cid="cbother15">Birding tours</a></span> <span
                                            class="filters__block__check__amount" data-amount="30"
                                            data-var="birding">(30)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother16"><input
                                            type="checkbox" id="cbother16" data-parent="" data-var="disabled"/><span>Accessible safaris</span>
                                        <span class="filters__block__check__amount" data-amount="4"
                                              data-var="disabled">(4)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother17"><input
                                            type="checkbox" id="cbother17" data-parent=""
                                            data-var="golf_wildlife"/><span>Golf &amp; Wildlife</span>
                                        <span class="filters__block__check__amount" data-amount="9"
                                              data-var="golf_wildlife">(9)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbother18"><input
                                            type="checkbox" id="cbother18" data-parent=""
                                            data-var="yoga"/><span>Yoga</span>
                                        <span class="filters__block__check__amount" data-amount="1"
                                              data-var="yoga">(1)</span></label>
                                </li>
                            </ul>
                            <a id="more_link_other" class="more" href="javascript:;"><span>+</span> Show more</a><br/>
                            <br/>
                        </div>
                        <div class="filters__block" data-var="features">
                            <h3>Other Tour Features</h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbfeatures0"><input
                                            type="checkbox" id="cbfeatures0" data-parent=""
                                            data-var="airport_transfer"/><span>Airport transfer is included</span> <span
                                            class="filters__block__check__amount" data-amount="7796"
                                            data-var="airport_transfer">(7,796)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbfeatures1"><input
                                            type="checkbox" id="cbfeatures1" data-parent=""
                                            data-var="custom_itinerary"/><span>Itinerary can be customized</span> <span
                                            class="filters__block__check__amount" data-amount="6432"
                                            data-var="custom_itinerary">(6,432)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbfeatures2"><input
                                            type="checkbox" id="cbfeatures2" data-parent=""
                                            data-var="custom_depart_anyday"/><span>Tour can start on any day</span>
                                        <span
                                            class="filters__block__check__amount" data-amount="7667"
                                            data-var="custom_depart_anyday">(7,667)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block filters__block--operator" data-var="operator">
                            <h3>Filter by Operator</h3>

                            <form method="POST" action="#" class="row">
                                <div class="col col-9 no-gutter"><input type="text" value="" data-types="operators"
                                                                        data-labels="true" data-shadow="true"
                                                                        data-title="Select operator below"
                                                                        autocomplete="off" data-limit="6"/><span
                                        class="clear-btn clear-btn--operator hide"></span></div>
                                <div class="col col-3 no-gutter"><input type="submit" value="Apply"/></div>
                            </form>

                            <div class="autocomplete-holder"></div>

                        </div>
                        <div class="filters__block filters__block--accommodation" data-var="acc">
                            <h3>Filter by Accommodation</h3>

                            <form method="POST" action="#" class="row">
                                <div class="col col-9 no-gutter"><input type="text" value=""
                                                                        data-types="accommodations,accommodation_chains"
                                                                        data-labels="true" data-shadow="true"
                                                                        data-title="Select accommodation below"
                                                                        autocomplete="off" data-limit="6"/><span
                                        class="clear-btn clear-btn--accommodation hide"></span></div>
                                <div class="col col-3 no-gutter"><input type="submit" value="Apply"/></div>
                            </form>

                            <div class="autocomplete-holder"></div>

                        </div>
                        <div class="filters__block" data-var="offices_in">
                            <h3>Operators From</h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in0"><input
                                            type="checkbox" id="cboffices_in0" data-parent=""
                                            data-var="op_kenya"/><span>Kenya</span>
                                        <span class="filters__block__check__amount" data-amount="2468"
                                              data-var="op_kenya">(2,468)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in1"><input
                                            type="checkbox" id="cboffices_in1" data-parent=""
                                            data-var="op_southafrica"/><span>South Africa</span> <span
                                            class="filters__block__check__amount" data-amount="1024"
                                            data-var="op_southafrica">(1,024)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in2"><input
                                            type="checkbox" id="cboffices_in2" data-parent=""
                                            data-var="op_tanzania"/><span>Tanzania</span>
                                        <span class="filters__block__check__amount" data-amount="2993"
                                              data-var="op_tanzania">(2,993)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in3"><input
                                            type="checkbox" id="cboffices_in3" data-parent=""
                                            data-var="op_unitedkingdom"/><span>United Kingdom</span> <span
                                            class="filters__block__check__amount" data-amount="505"
                                            data-var="op_unitedkingdom">(505)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in4"><input
                                            type="checkbox" id="cboffices_in4" data-parent="" data-var="op_usa"/><span>United States</span>
                                        <span class="filters__block__check__amount" data-amount="479" data-var="op_usa">(479)</span></label>
                                </li>
                            </ul>
                            <div class="more" style="display:none">&nbsp;</div>
                            <ul class="more" style="display:none">
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in5"><input
                                            type="checkbox" id="cboffices_in5" data-parent=""
                                            data-var="op_australia"/><span>Australia</span> <span
                                            class="filters__block__check__amount" data-amount="62"
                                            data-var="op_australia">(62)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label
                                        for="cboffices_in6"><input type="checkbox" id="cboffices_in6" data-parent=""
                                                                   data-var="op_belgium" disabled/><span>Belgium</span>
                                        <span class="filters__block__check__amount" data-amount="0"
                                              data-var="op_belgium">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in7"><input
                                            type="checkbox" id="cboffices_in7" data-parent=""
                                            data-var="op_botswana"/><span>Botswana</span>
                                        <span class="filters__block__check__amount" data-amount="131"
                                              data-var="op_botswana">(131)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label
                                        for="cboffices_in8"><input type="checkbox" id="cboffices_in8" data-parent=""
                                                                   data-var="op_brazil" disabled/><span>Brazil</span>
                                        <span class="filters__block__check__amount" data-amount="0"
                                              data-var="op_brazil">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in9"><input
                                            type="checkbox" id="cboffices_in9" data-parent=""
                                            data-var="op_canada"/><span>Canada</span>
                                        <span class="filters__block__check__amount" data-amount="28"
                                              data-var="op_canada">(28)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in10"><input
                                            type="checkbox" id="cboffices_in10" data-parent="" data-var="op_comoros"
                                            disabled/><span>Comoros</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0"
                                                                                 data-var="op_comoros">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in11"><input
                                            type="checkbox" id="cboffices_in11" data-parent=""
                                            data-var="op_denmark"/><span>Denmark</span>
                                        <span class="filters__block__check__amount" data-amount="26"
                                              data-var="op_denmark">(26)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in12"><input
                                            type="checkbox" id="cboffices_in12" data-parent=""
                                            data-var="op_ethiopia"/><span>Ethiopia</span> <span
                                            class="filters__block__check__amount" data-amount="4"
                                            data-var="op_ethiopia">(4)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in13"><input
                                            type="checkbox" id="cboffices_in13" data-parent=""
                                            data-var="op_eswatini"/><span>Eswatini</span> <span
                                            class="filters__block__check__amount" data-amount="6"
                                            data-var="op_eswatini">(6)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in14"><input
                                            type="checkbox" id="cboffices_in14" data-parent=""
                                            data-var="op_france"/><span>France</span>
                                        <span class="filters__block__check__amount" data-amount="2"
                                              data-var="op_france">(2)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in15"><input
                                            type="checkbox" id="cboffices_in15" data-parent=""
                                            data-var="op_germany"/><span>Germany</span>
                                        <span class="filters__block__check__amount" data-amount="154"
                                              data-var="op_germany">(154)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in16"><input
                                            type="checkbox" id="cboffices_in16" data-parent="" data-var="op_greece"
                                            disabled/><span>Greece</span> <span class="filters__block__check__amount"
                                                                                data-amount="0"
                                                                                data-var="op_greece">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in17"><input
                                            type="checkbox" id="cboffices_in17" data-parent=""
                                            data-var="op_india"/><span>India</span>
                                        <span class="filters__block__check__amount" data-amount="14"
                                              data-var="op_india">(14)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in18"><input
                                            type="checkbox" id="cboffices_in18" data-parent="" data-var="op_ireland"
                                            disabled/><span>Ireland</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0"
                                                                                 data-var="op_ireland">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in19"><input
                                            type="checkbox" id="cboffices_in19" data-parent=""
                                            data-var="op_italy"/><span>Italy</span>
                                        <span class="filters__block__check__amount" data-amount="12"
                                              data-var="op_italy">(12)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in20"><input
                                            type="checkbox" id="cboffices_in20" data-parent="" data-var="op_lesotho"
                                            disabled/><span>Lesotho</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0"
                                                                                 data-var="op_lesotho">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in21"><input
                                            type="checkbox" id="cboffices_in21" data-parent=""
                                            data-var="op_madagascar"/><span>Madagascar</span> <span
                                            class="filters__block__check__amount" data-amount="2"
                                            data-var="op_madagascar">(2)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in22"><input
                                            type="checkbox" id="cboffices_in22" data-parent=""
                                            data-var="op_malawi"/><span>Malawi</span>
                                        <span class="filters__block__check__amount" data-amount="25"
                                              data-var="op_malawi">(25)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in23"><input
                                            type="checkbox" id="cboffices_in23" data-parent="" data-var="op_mauritius"
                                            disabled/><span>Mauritius</span> <span class="filters__block__check__amount"
                                                                                   data-amount="0"
                                                                                   data-var="op_mauritius">(0)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in24"><input
                                            type="checkbox" id="cboffices_in24" data-parent="" data-var="op_mayotte"
                                            disabled/><span>Mayotte</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0"
                                                                                 data-var="op_mayotte">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in25"><input
                                            type="checkbox" id="cboffices_in25" data-parent=""
                                            data-var="op_mozambique"/><span>Mozambique</span> <span
                                            class="filters__block__check__amount" data-amount="13"
                                            data-var="op_mozambique">(13)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in26"><input
                                            type="checkbox" id="cboffices_in26" data-parent=""
                                            data-var="op_namibia"/><span>Namibia</span>
                                        <span class="filters__block__check__amount" data-amount="123"
                                              data-var="op_namibia">(123)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in27"><input
                                            type="checkbox" id="cboffices_in27" data-parent=""
                                            data-var="op_netherlands"/><span>Netherlands</span> <span
                                            class="filters__block__check__amount" data-amount="49"
                                            data-var="op_netherlands">(49)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in28"><input
                                            type="checkbox" id="cboffices_in28" data-parent="" data-var="op_newzealand"
                                            disabled/><span>New Zealand</span> <span
                                            class="filters__block__check__amount"
                                            data-amount="0"
                                            data-var="op_newzealand">(0)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in29"><input
                                            type="checkbox" id="cboffices_in29" data-parent="" data-var="op_nigeria"
                                            disabled/><span>Nigeria</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0"
                                                                                 data-var="op_nigeria">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in30"><input
                                            type="checkbox" id="cboffices_in30" data-parent=""
                                            data-var="op_portugal"/><span>Portugal</span> <span
                                            class="filters__block__check__amount" data-amount="34"
                                            data-var="op_portugal">(34)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in31"><input
                                            type="checkbox" id="cboffices_in31" data-parent="" data-var="op_reunion"
                                            disabled/><span>Reunion</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0"
                                                                                 data-var="op_reunion">(0)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in32"><input
                                            type="checkbox" id="cboffices_in32" data-parent="" data-var="op_russia"
                                            disabled/><span>Russia</span> <span class="filters__block__check__amount"
                                                                                data-amount="0"
                                                                                data-var="op_russia">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in33"><input
                                            type="checkbox" id="cboffices_in33" data-parent=""
                                            data-var="op_rwanda"/><span>Rwanda</span>
                                        <span class="filters__block__check__amount" data-amount="126"
                                              data-var="op_rwanda">(126)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in34"><input
                                            type="checkbox" id="cboffices_in34" data-parent="" data-var="op_seychelles"
                                            disabled/><span>Seychelles</span> <span
                                            class="filters__block__check__amount"
                                            data-amount="0"
                                            data-var="op_seychelles">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in35"><input
                                            type="checkbox" id="cboffices_in35" data-parent=""
                                            data-var="op_singapore"/><span>Singapore</span> <span
                                            class="filters__block__check__amount" data-amount="112"
                                            data-var="op_singapore">(112)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in36"><input
                                            type="checkbox" id="cboffices_in36" data-parent=""
                                            data-var="op_spain"/><span>Spain</span>
                                        <span class="filters__block__check__amount" data-amount="13"
                                              data-var="op_spain">(13)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in37"><input
                                            type="checkbox" id="cboffices_in37" data-parent=""
                                            data-var="op_sweden"/><span>Sweden</span>
                                        <span class="filters__block__check__amount" data-amount="16"
                                              data-var="op_sweden">(16)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in38"><input
                                            type="checkbox" id="cboffices_in38" data-parent=""
                                            data-var="op_switzerland"/><span>Switzerland</span> <span
                                            class="filters__block__check__amount" data-amount="21"
                                            data-var="op_switzerland">(21)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in39"><input
                                            type="checkbox" id="cboffices_in39" data-parent=""
                                            data-var="op_uganda"/><span>Uganda</span>
                                        <span class="filters__block__check__amount" data-amount="1271"
                                              data-var="op_uganda">(1,271)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in40"><input
                                            type="checkbox" id="cboffices_in40" data-parent="" data-var="op_uae"
                                            disabled/><span>United Arab Emirates</span> <span
                                            class="filters__block__check__amount" data-amount="0"
                                            data-var="op_uae">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in41"><input
                                            type="checkbox" id="cboffices_in41" data-parent=""
                                            data-var="op_zambia"/><span>Zambia</span>
                                        <span class="filters__block__check__amount" data-amount="83"
                                              data-var="op_zambia">(83)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in42"><input
                                            type="checkbox" id="cboffices_in42" data-parent=""
                                            data-var="op_zimbabwe"/><span>Zimbabwe</span> <span
                                            class="filters__block__check__amount" data-amount="205"
                                            data-var="op_zimbabwe">(205)</span></label>
                                </li>
                            </ul>
                            <a id="more_link_offices_in" class="more" href="javascript:;"><span>+</span> Show
                                more</a><br/>
                            <br/>
                        </div>
                    </div>
                    <div class="filters__apply hide-d">
                        <a href="#" class="btn btn--orange btn--next" data-txt="Show X Safari Tour">
                            Show Safari Tours
                        </a>
                    </div>
                    <script type="text/javascript">
                        currency = "USD";
                    </script>
                </div>
                <div class="col col-12 col-d-9 list--tours">
                    <div class="row row-header  row-header--withintro  ">

                        <div class="col col-12">
                            <h1 class="serif list--title  " data-ops="1,036" itemprop="name">African Safari Tours &amp;
                                Holidays</h1>
                            <div class="review-summary--oneline">
                                <div class="stars      " title="4.8 / 5" itemprop="aggregateRating" itemscope
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
                                    <em>4.8</em>/5
                                </span>
                                &nbsp;&ndash;&nbsp;
                                <a href="tours.html#pagereviews" class="jumpto">
                                    59,601
                                    Safari
                                    Reviews
                                </a>
                            </div>
                        </div>

                        <div class="col col-12 intro">
                            <p class="shorten-m-t" data-shorten-m="90" data-shorten-t="400"
                               data-shorten-label="Read more">
                                Does an African safari feature on your bucket list? It should! Africa has so much to
                                offer, from spectacular scenery, friendly people and cultural treasures to blissful
                                beaches. But above all else, it is the wildlife and safari lifestyle that will draw you
                                back, again and again. This well-known quote by Richard Mullin is so very true: ‘The
                                only man I envy, is the man who has not yet been to Africa – for he has so much to look
                                forward to’. Once you go on your first safari, Africa gets into your blood. You develop
                                a deep longing to return to this magical continent, and to start planning your next
                                African safari holiday. Be warned, Africa is very addictive!
                            </p>
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
            <section class="relatedlinks">
                <div class="container">
                <span class="relatedlinks__mark">
                                            <picture>
                            <img src="../cfstatic.safaribookings.com/img/logos/mark-56x48.gif"
                                 class="mark relatedlinks__mark-img"
                                 srcset="https://cfstatic.safaribookings.com/img/logos/mark-56x48@2x.gif 2x"
                                 alt="SafariBookings" title="SafariBookings">
                        </picture>
                                    </span>
                    <h3 class="relatedlinks__top">Related Searches</h3>
                    <ul class="relatedlinks__list flex flex--gutter flex--multiline">
                        <li class="relatedlinks__list-item">
                            <a href="operators.html">Safari Tour Operators</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="top-rated-operators.html">Top 10 Safari Operators</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/budget.html">African Budget Safaris</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/gorilla-trekking.html">Gorilla Trekking Tours</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/chimp-trekking.html">Chimp Trekking Tours</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/overland.html">African Overland Tours</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/camping.html">Camping Safaris</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/luxury-luxuryplus.html">African Luxury Safaris</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/honeymoon.html">Honeymoon Safaris</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/photographic.html">African Photographic Safaris</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/private.html">Private Safaris</a>
                        </li>
                        <li class="relatedlinks__list-item">
                            <a href="tours/family.html">Family Safaris</a>
                        </li>
                    </ul>
                </div>
            </section>

            <div class="directory-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-d-4-5">
                            <h1 class="serif hide-d">7 Questions About African Safari Tours</h1>

                            <div class="box">
                                <div class="expert" itemprop="author" itemscope itemtype="http://schema.org/Person">
                                    <div>
                                        <div class="expert__photo expert__photo--medium">
                                            <div>
                                                <img
                                                    src="../cloudfront.safaribookings.com/assets/experts/84x84/Harriet_Nimmo.jpg"
                                                    data-srcset="https://cloudfront.safaribookings.com/assets/experts/140x140/Harriet_Nimmo.jpg 2x"
                                                    class="expert-photo placeholder lazyload" alt="Harriet Nimmo">
                                            </div>
                                            <span></span>
                                            <i>Expert</i>
                                        </div>
                                        <h5 class="hide-d">Answered by</h5>
                                        <h3 itemprop="name">Harriet Nimmo</h3>
                                        <meta itemprop="image"
                                              content="https://cloudfront.safaribookings.com/assets/experts/280x280/Harriet_Nimmo.jpg"/>
                                        <meta itemprop="sameAs"
                                              content="https://www.goodreads.com/author/show/3112656.Harriet_Nimmo"/>
                                        <br/>
                                        Harriet is a zoologist with more than 20 years’ experience working in
                                        conservation communications. She has traveled extensively throughout central,
                                        eastern and southern Africa, and has visited most of Africa’s national parks at
                                        least twice.
                                    </div>
                                    &rsaquo; <a href="experts/harriet-nimmo.html" target="_blank">More about Harriet</a>
                                </div>

                                <div class="questions-links hide show-t">
                                    <div class="question">
                                        <a href="#q1" class="jumpto">
                                            <span>1.</span>
                                            Why should I choose an African safari?
                                        </a>
                                    </div>
                                    <div class="question">
                                        <a href="#q2" class="jumpto">
                                            <span>2.</span>
                                            Which are the best African countries for going on safari?
                                        </a>
                                    </div>
                                    <div class="question">
                                        <a href="#q3" class="jumpto">
                                            <span>3.</span>
                                            What time of year is best for going on an African safari?
                                        </a>
                                    </div>
                                    <div class="question">
                                        <a href="#q4" class="jumpto">
                                            <span>4.</span>
                                            What wildlife can I expect to see on an African safari?
                                        </a>
                                    </div>
                                    <div class="question">
                                        <a href="#q5" class="jumpto">
                                            <span>5.</span>
                                            What does a typical day look like on an African safari?
                                        </a>
                                    </div>
                                    <div class="question">
                                        <a href="#q6" class="jumpto">
                                            <span>6.</span>
                                            What are the typical costs of an African safari?
                                        </a>
                                    </div>
                                    <div class="question">
                                        <a href="#q7" class="jumpto">
                                            <span>7.</span>
                                            What should I consider when choosing an African safari?
                                        </a>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                        </div>
                        <div class="col col-0 col-d-0-5 hide show-d">&nbsp;</div>

                        <div class="col col-12 col-d-7">
                            <h1 class="serif hide show-d">7 Questions About African Safari Tours</h1>
                            <div class="hide show-d answered-by">
                                Answered by <img
                                    src="../cloudfront.safaribookings.com/assets/experts/42x42/Harriet_Nimmo.jpg"
                                    srcset="https://cloudfront.safaribookings.com/assets/experts/84x84/Harriet_Nimmo.jpg 2x"
                                    class="avatar"/> <b>Harriet Nimmo</b>
                            </div>
                            <div class="questions">
                                <div class="line"></div>
                                <div class="question" id="q1">
                                    <h2>Why should I choose an African safari?</h2>
                                    <p>&#8220;There are so many reasons to choose an African safari. Going on safari is
                                        an unforgettable experience, offering a heady mix of adventure, thrilling
                                        wildlife sightings, cultural encounters and spectacular scenery.

                                        It is a chance to escape the fast pace of the modern world. You’ll retreat to a
                                        simpler, more peaceful way of life, reconnecting with the daily rhythms of
                                        nature. For me, the wildlife sightings provide the adrenaline that keeps me
                                        coming back, time and time again. Who can ever forget their first sighting of an
                                        elephant in the wild or realizing just how tall a giraffe really is? And there
                                        is something so primeval when hearing the roar of a lion under a glittering
                                        night sky.

                                        Finally, going on safari can help protect Africa’s wild animals and wild places.
                                        The more paying visitors, the more local people are employed and the more
                                        incentive there is to protect Africa’s natural wonders.&#8221;</p>
                                    <span>1</span>
                                </div>
                                <div class="question" id="q2">
                                    <h2>Which are the best African countries for going on safari?</h2>
                                    <p>&#8220;All the classic safari countries make wonderful destinations for African
                                        safari tours. These countries are Kenya, Tanzania, Zimbabwe, Botswana, Zambia
                                        and South Africa.
                                        Which country you choose may depend on whether you’d like to combine your safari
                                        with another activity. For example you may like to add some beaches and/or
                                        Zanzibar in East Africa. Or perhaps Victoria Falls between Zambia and Zimbabwe,
                                        or fine dining around Cape Town and the winelands of South Africa.

                                        If this is your first safari, South Africa makes a good option. The private
                                        reserves bordering Kruger National Park can almost guarantee sightings of the
                                        Big Five. South Africa also has good infrastructure and excellent levels of
                                        service. However, you will not get the sweeping savannahs and ‘Out of Africa’
                                        scenes here. For these you need to travel to Kenya or Tanzania. Of course, these
                                        two countries also offer the incredible wildebeest migration. Note though, you
                                        need to travel here at the right time of year to see this.

                                        Zambia and Zimbabwe should also be considered. They have stunning national
                                        parks, including South Luangwa and Hwange respectively. Both countries are
                                        slightly more off the beaten track with less mass tourism.

                                        Botswana perhaps feels the wildest of the safari countries, although this comes
                                        with a price.&#8221;</p>
                                    <span>2</span>
                                </div>
                                <div class="question" id="q3">
                                    <h2>What time of year is best for going on an African safari?</h2>
                                    <p>&#8220;The best time of year, and the peak season, for most safaris is the Dry
                                        season. This is when the bush is less dense, and the wildlife is drawn to
                                        waterholes. Generally the wildlife is easier to find and see at this time. The
                                        Dry season means bright sunny days, and cooler nights. Of course, as the Dry
                                        season is peak safari season, there are more travelers and prices are higher.
                                        Dry season generally falls from May/June to September/October.

                                        You may also wish to consider going during the ‘Green season’ (also known as the
                                        Wet season or Emerald season). Although it may rain, often the showers are short
                                        downpours and then the sun comes back out again. It can be much cheaper to
                                        travel then, the bush is lush and green, and this is the breeding season for
                                        many of the animals. In East Africa, there are two Green seasons – the long
                                        rains between March and May, and the short rains from approximately October to
                                        December. In southern Africa the Green season is approximately from November to
                                        March. Temperatures can get very hot. Note that when it is wet there are more
                                        bugs and a greater risk of malaria.&#8221;</p>
                                    <span>3</span>
                                </div>
                                <div class="question" id="q4">
                                    <h2>What wildlife can I expect to see on an African safari?</h2>
                                    <p>&#8220;When it comes to seeing wildlife while on safari, this is wild nature and
                                        nothing can be guaranteed. You may see plenty of animals, including the Big Five
                                        (lion, leopard, rhino, buffalo and elephant). But there will be game drives when
                                        you don’t see very much at all. That will make the sightings you do see all the
                                        more special. The joy of safaris, and what makes them so addictive, is that you
                                        just never know what you might see around the next corner. If you listen closely
                                        to, and learn from your guide, you’ll be able to enjoy all aspects of Africa’s
                                        wildlife. Everything from baobab trees to dung beetle, to chameleon and cheeky
                                        mongoose. Don’t forget to also focus on the birds, as even a very quiet game
                                        drive usually delivers some great bird sightings.&#8221;</p>
                                    <span>4</span>
                                </div>
                                <div class="question" id="q5">
                                    <h2>What does a typical day look like on an African safari?</h2>
                                    <p>&#8220;All African safari holidays run to the same typical timetable. The best
                                        times to see wildlife, particularly predators being active, is at the beginning
                                        and end of the day. These golden hours at dawn and dusk are also the best times
                                        for photography. So be prepared for very early starts!

                                        You will usually be woken at dawn, and given tea, coffee, rusks or cereal. The
                                        aim is to get going on your game drive as early as possible at first light. The
                                        morning game drive usually lasts three to four hours, including a coffee and
                                        comfort break. You return to your camp or lodge for brunch. Then you are free to
                                        relax and take a siesta, or perhaps lie by the pool, during the middle of the
                                        day. It’s a good idea to bring something to read for this down time.

                                        Later in the afternoon you will meet again for tea and snacks, before setting
                                        out on your second game drive of the day. This will usually include a stop for
                                        sundowner drinks, to watch the setting sun. The game drive then returns to your
                                        accommodation in the dark, using a spotlight to look for nocturnal animals.
                                        Evening meals are usually served just after returning to camp. In some countries
                                        night drives are offered after dinner at around 8pm. Such drives can be a unique
                                        opportunity to spot nocturnal (only active at night) wildlife such as genets.

                                        Unless you have paid for exclusive use, be prepared for sharing your game-drive
                                        vehicle with other guests. This can be huge fun (although sometimes you need to
                                        be quite tolerant). It is always a good idea to offer to swap around your
                                        seating positions during your safari. &#8221;</p>
                                    <span>5</span>
                                </div>
                                <div class="question" id="q6">
                                    <h2>What are the typical costs of an African safari?</h2>
                                    <p>&#8220;The costs of an African safari can vary enormously. You could pay anything
                                        from US$125 to US$1000 per person, per night. Sometimes considerably more.
                                        Safaris can be an expensive holiday, and you generally get what you pay for.
                                        At the budget end of the spectrum are African safari packages where you join
                                        organized tours, departing on set dates, with other groups of people. South
                                        Africa and Kenya offer some of the best value-for-money safaris.

                                        Your choice of accommodation will affect the cost of your safari. Mobile
                                        safaris, where you sleep in tents, are great for groups of friends or families
                                        traveling together. Some safari lodges have taken luxury to the extreme, with
                                        private plunge pools etc. That said, you will probably have the same
                                        wildlife-viewing experience as staying in a more rustic lodge. It’s a matter of
                                        deciding what features are most important to you.

                                        If your reserve or lodge is remote, getting there will also impact the price. To
                                        visit the Okavango Delta, in Botswana, you can only fly into the Delta. There
                                        are no road transfers, so this adds to the price of your trip. The Serengeti is
                                        accessible by road, but this is a long, bone-rattling journey. It’s much easier
                                        and more comfortable to take a quick trip in a small plane.

                                        Whatever the costs of your safari, if you’ve experienced good service, do tip
                                        generously. A few extra dollars or Euros will make a huge difference to your
                                        guide or lodge staff.&#8221;</p>
                                    <span>6</span>
                                </div>
                                <div class="question" id="q7">
                                    <h2>What should I consider when choosing an African safari?</h2>
                                    <p>&#8220;There is a lot of considerations to be taken into account when choosing an
                                        African safari tour operator. These include:

                                        If you are traveling with children, choose a family-friendly tour or lodge. In
                                        addition, you may prefer to choose a safari in a malaria-free area, for example
                                        in parts of South Africa.

                                        What type of safari do you want to go on? There are organized tours, departing
                                        on set dates, joining other groups of people. Or do you want an exclusive,
                                        tailor-made safari just for you? Are you happy to camp or do you want to stay in
                                        a luxury lodge? Your budget will probably determine your choices.

                                        Do you want to combine your safari with beaches, South Africa’s winelands, or a
                                        trip to Victoria Falls? This will help determine which country to
                                        choose.&#8221;</p>
                                    <span>7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="directory-reviews" id="pagereviews">
                <div class="container">
                    <div class="row">
                        <div class="col col-12">
                            <h2 class="serif">
                                Safari Reviews
                            </h2>
                            <div class="reviews">
                                <div class="stars    large    " title="4.8 / 5">
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                    <i class="sbi sbi--star"></i>
                                </div>

                                <span class="review-score"><em>4.8</em>/5</span>
                                <strong>59601 Reviews</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-t-6">
                            <div class="review review--snippet">
                                <div class="review__person matchheight">
                                    <i class="sbi sbi--avatar-male"></i>
                                    <div class="review__person__info">
                                        <strong class="review__person__name">Yunga Lee</strong>
                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                class="country-with-flag  " title="Indonesia">
                                    <img src="../cfstatic.safaribookings.com/images/flags/id.png"
                                         class="country-with-flag__flag" alt="Indonesia" title="Indonesia"/>
                            <span class="txt--grey">
                            ID
                    </span>
    </div>
</span>
                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 20, 2021</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    <h5>Amazing, Amazing, AMAZING!</h5>
                                    <div class="stars      " title="5 / 5">
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                    </div>
                                    <span class="review-score"><em>5</em>/5</span>
                                    <p>We initially booked our 5 day safari back in May and decided to go despite
                                        COVID-19 outbreak and flight cancellations. We are grateful to Africa Polecat
                                        safaris for making this trip happen and highly recommend them to everyone.
                                        Our...</p>
                                    <p><a href="reviews.html#58950">Full Review</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-t-6">
                            <div class="review review--snippet">
                                <div class="review__person matchheight">
                                    <i class="sbi sbi--avatar-male"></i>
                                    <div class="review__person__info">
                                        <strong class="review__person__name">Hou</strong>
                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                class="country-with-flag  " title="China">
                                    <img src="../cfstatic.safaribookings.com/images/flags/cn.png"
                                         class="country-with-flag__flag" alt="China" title="China"/>
                            <span class="txt--grey">
                            CN
                    </span>
    </div>
</span>
                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 20, 2021</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    <h5>Perfect from start to the end</h5>
                                    <div class="stars      " title="5 / 5">
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                    </div>
                                    <span class="review-score"><em>5</em>/5</span>
                                    <p>Jong was amazing from the start to the end of our safari. He was helpful and
                                        responsive when having the process of planning. The whole safari went smoothly
                                        and without any problem. The hotels, tour guides were all fantastic. I
                                        recommend...</p>
                                    <p><a href="reviews.html#58949">Full Review</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-t-6">
                            <div class="review review--snippet">
                                <div class="review__person matchheight">
                                    <i class="sbi sbi--avatar-female"></i>
                                    <div class="review__person__info">
                                        <strong class="review__person__name">Kelsey</strong>
                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                class="country-with-flag  " title="Rwanda">
                    <svg class="country-with-flag__flag" data-role="svg-sprite">
                <title>Rwanda</title>
                                    <use xlink:href="img/flags/flags-countries-reviewers.svg#rw"></use>
                            </svg>
                <span class="txt--grey">
                            RW
                    </span>
    </div>
</span>
                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 20, 2021</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    <h5>Professional, knowledgeable and flexible</h5>
                                    <div class="stars      " title="5 / 5">
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                    </div>
                                    <span class="review-score"><em>5</em>/5</span>
                                    <p>Communication - great via email beforehand. Communication during trip also
                                        good.<br/>
                                        Service - guide was knowledgeable and chef was fantastic <br/>
                                        Value for money - fair <br/>
                                        Reliability - great! <br/>
                                        Tour - highly recommend </p>
                                    <p><a href="reviews.html#58947">Full Review</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-t-6">
                            <div class="review review--snippet">
                                <div class="review__person matchheight">
                                    <i class="sbi sbi--avatar-male"></i>
                                    <div class="review__person__info">
                                        <strong class="review__person__name">Mrinmoy Das</strong>
                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                class="country-with-flag  " title="India">
                                    <img src="../cfstatic.safaribookings.com/images/flags/in.png"
                                         class="country-with-flag__flag" alt="India" title="India"/>
                            <span class="txt--grey">
                            IN
                    </span>
    </div>
</span>
                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 19, 2021</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    <h5>A professional operator who understands the subject throughly .</h5>
                                    <div class="stars      " title="5 / 5">
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                    </div>
                                    <span class="review-score"><em>5</em>/5</span>
                                    <p>Every team members in their Nairobi office and the Masai mara camp is well
                                        trained. We always felt at home .Each rides are planned on time .The Drivers are
                                        very polite and answers every quiry enroute to Masai mara as well as in game
                                        rides....</p>
                                    <p><a href="reviews.html#58943">Full Review</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-t-6">
                            <div class="review review--snippet">
                                <div class="review__person matchheight">
                                    <i class="sbi sbi--avatar-male"></i>
                                    <div class="review__person__info">
                                        <strong class="review__person__name">Artem K.</strong>
                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                class="country-with-flag  " title="Ukraine">
                                    <img src="../cfstatic.safaribookings.com/images/flags/ua.png"
                                         class="country-with-flag__flag" alt="Ukraine" title="Ukraine"/>
                            <span class="txt--grey">
                            UA
                    </span>
    </div>
</span>
                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 19, 2021</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    <h5>Highly recommended</h5>
                                    <div class="stars      " title="5 / 5">
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                    </div>
                                    <span class="review-score"><em>5</em>/5</span>
                                    <p>So where do I begin... It was always one of dreams of mine to travel to Africa
                                        and oh boy it didn&#039;t disappoint. I can&#039;t begin to describe the beauty
                                        and grandeur unfolding right in front of our own eyes as we travelled from one
                                        natural...</p>
                                    <p><a href="reviews.html#58942">Full Review</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-t-6">
                            <div class="review review--snippet">
                                <div class="review__person matchheight">
                                    <i class="sbi sbi--avatar-male"></i>
                                    <div class="review__person__info">
                                        <strong class="review__person__name">Robert McDonald</strong>
                                        <span class="review__person__country">&nbsp;&ndash; &nbsp; <div
                                                class="country-with-flag  " title="United States">
                                    <img src="../cfstatic.safaribookings.com/images/flags/us.png"
                                         class="country-with-flag__flag" alt="United States" title="United States"/>
                            <span class="txt--grey">
                            US
                    </span>
    </div>
</span>
                                        <span class="review__person__reviewed"><b>Reviewed:</b> May 19, 2021</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    <h5>Climbing mountains and Safari</h5>
                                    <div class="stars      " title="5 / 5">
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                        <i class="sbi sbi--star"></i>
                                    </div>
                                    <span class="review-score"><em>5</em>/5</span>
                                    <p>We had an excellent 3-week trip to Tanzania with Altezza. The guide Albert was
                                        excellent at helping and supervising everyone on the climbs (Mt. Meru &amp; Mt
                                        Kilimanjaro) and the pace he set was ideal for everyone to make it to the
                                        top...</p>
                                    <p><a href="reviews.html#58941">Full Review</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 all-btn">
                            <a href="reviews.html" class="btn btn--white btn--autowidth-t btn--next">
                                All 59601 Safari Reviews
                            </a>
                        </div>
                    </div>
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
