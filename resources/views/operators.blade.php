@extends('layouts.landing-app')
@section('content')
    <main class="main">

        <script>
            var filterbyhash = true;
            if (!window.location.hash || window.location.hash == '#filtersopen' || document.location.hash == '#searchopen') {
                filterbyhash = false;
            }
        </script>

        {{--        <div class="messagebox messagebox--orange messagebox--bar">--}}
        {{--            <a href="coronavirus.html" class="nowrap">--}}
        {{--                <i class="sbi sbi--info-blue"></i>--}}
        {{--                Coronavirus (COVID-19) Support--}}
        {{--            </a>--}}
        {{--        </div>--}}
        <div class="titlebar titlebar--operators">
            <div class="container" data-filterbtn-txt="Filters">
                <div class="row hide show-t">
                    <ol class="col col-0 col-t-12 breadcrumbs">
                        <li>
                            You are here:
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="{{url('')}}" title="SafariBookings.com">Home</a>
                        </li>
                        <li data-type='breadcrumb'>
                            <a href="{{url('operators')}}" title="Tour Operators" class="breadcrumbs__last"><span>Tour Operators</span></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container container--main container--operators-directory container--directory">
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

                        <div class="filters__block" data-var='score'>
                            <h3>Rating</h3>

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
</span><span class="filters__block__stars__amount" data-var="stars5"><span>(1,918)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb31" title="4 stars & up"><input
                                            type="radio" name="rating" id="cb31" data-var="4"/><span><div
                                                class="stars    large    " title="4 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars4">&amp; up <span>(2,019)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb32" title="3 stars & up"><input
                                            type="radio" name="rating" id="cb32" data-var="3"/><span><div
                                                class="stars    large    " title="3 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars3">&amp; up <span>(2,042)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb33" title="2 stars & up"><input
                                            type="radio" name="rating" id="cb33" data-var="2"/><span><div
                                                class="stars    large    " title="2 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars2">&amp; up <span>(2,049)</span></span></label></li>
                                <li class="filters__block__stars"><label for="cb34" title="1 star & up"><input
                                            type="radio" name="rating" id="cb34" data-var="1"/><span><div
                                                class="stars    large    " title="1 / 5">
            <i class="sbi sbi--star"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        <i class="sbi sbi--starempty"></i>
        </div>
</span><span class="filters__block__stars__amount" data-var="stars1">&amp; up <span>(2,076)</span></span></label></li>
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
                        <div class="filters__block" data-var="offices_in">
                            <h3>Office In</h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in0"><input
                                            type="checkbox" id="cboffices_in0" data-parent=""
                                            data-var="op_australia"/><span>Australia</span> <span
                                            class="filters__block__check__amount" data-amount="36"
                                            data-var="op_australia">(36)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in1"><input
                                            type="checkbox" id="cboffices_in1" data-parent=""
                                            data-var="op_belgium"/><span>Belgium</span> <span
                                            class="filters__block__check__amount" data-amount="3" data-var="op_belgium">(3)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in2"><input
                                            type="checkbox" id="cboffices_in2" data-parent=""
                                            data-var="op_botswana"/><span>Botswana</span> <span
                                            class="filters__block__check__amount" data-amount="132"
                                            data-var="op_botswana">(132)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label
                                        for="cboffices_in3"><input type="checkbox" id="cboffices_in3" data-parent=""
                                                                   data-var="op_brazil" disabled/><span>Brazil</span>
                                        <span class="filters__block__check__amount" data-amount="0"
                                              data-var="op_brazil">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in4"><input
                                            type="checkbox" id="cboffices_in4" data-parent=""
                                            data-var="op_canada"/><span>Canada</span> <span
                                            class="filters__block__check__amount" data-amount="19" data-var="op_canada">(19)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label
                                        for="cboffices_in5"><input type="checkbox" id="cboffices_in5" data-parent=""
                                                                   data-var="op_comoros" disabled/><span>Comoros</span>
                                        <span class="filters__block__check__amount" data-amount="0"
                                              data-var="op_comoros">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in6"><input
                                            type="checkbox" id="cboffices_in6" data-parent=""
                                            data-var="op_denmark"/><span>Denmark</span> <span
                                            class="filters__block__check__amount" data-amount="3" data-var="op_denmark">(3)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in7"><input
                                            type="checkbox" id="cboffices_in7" data-parent=""
                                            data-var="op_ethiopia"/><span>Ethiopia</span> <span
                                            class="filters__block__check__amount" data-amount="16"
                                            data-var="op_ethiopia">(16)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in8"><input
                                            type="checkbox" id="cboffices_in8" data-parent=""
                                            data-var="op_eswatini"/><span>Eswatini</span> <span
                                            class="filters__block__check__amount" data-amount="2"
                                            data-var="op_eswatini">(2)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in9"><input
                                            type="checkbox" id="cboffices_in9" data-parent=""
                                            data-var="op_france"/><span>France</span> <span
                                            class="filters__block__check__amount" data-amount="2" data-var="op_france">(2)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in10"><input
                                            type="checkbox" id="cboffices_in10" data-parent=""
                                            data-var="op_germany"/><span>Germany</span> <span
                                            class="filters__block__check__amount" data-amount="16"
                                            data-var="op_germany">(16)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in11"><input
                                            type="checkbox" id="cboffices_in11" data-parent="" data-var="op_greece"
                                            disabled/><span>Greece</span> <span class="filters__block__check__amount"
                                                                                data-amount="0"
                                                                                data-var="op_greece">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in12"><input
                                            type="checkbox" id="cboffices_in12" data-parent=""
                                            data-var="op_india"/><span>India</span> <span
                                            class="filters__block__check__amount" data-amount="7" data-var="op_india">(7)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in13"><input
                                            type="checkbox" id="cboffices_in13" data-parent="" data-var="op_ireland"
                                            disabled/><span>Ireland</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0" data-var="op_ireland">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in14"><input
                                            type="checkbox" id="cboffices_in14" data-parent=""
                                            data-var="op_italy"/><span>Italy</span> <span
                                            class="filters__block__check__amount" data-amount="3" data-var="op_italy">(3)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in15"><input
                                            type="checkbox" id="cboffices_in15" data-parent=""
                                            data-var="op_kenya"/><span>Kenya</span> <span
                                            class="filters__block__check__amount" data-amount="955" data-var="op_kenya">(955)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in16"><input
                                            type="checkbox" id="cboffices_in16" data-parent="" data-var="op_lesotho"
                                            disabled/><span>Lesotho</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0" data-var="op_lesotho">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in17"><input
                                            type="checkbox" id="cboffices_in17" data-parent=""
                                            data-var="op_madagascar"/><span>Madagascar</span> <span
                                            class="filters__block__check__amount" data-amount="7"
                                            data-var="op_madagascar">(7)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in18"><input
                                            type="checkbox" id="cboffices_in18" data-parent=""
                                            data-var="op_malawi"/><span>Malawi</span> <span
                                            class="filters__block__check__amount" data-amount="12" data-var="op_malawi">(12)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in19"><input
                                            type="checkbox" id="cboffices_in19" data-parent="" data-var="op_mayotte"
                                            disabled/><span>Mayotte</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0" data-var="op_mayotte">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in20"><input
                                            type="checkbox" id="cboffices_in20" data-parent=""
                                            data-var="op_mozambique"/><span>Mozambique</span> <span
                                            class="filters__block__check__amount" data-amount="7"
                                            data-var="op_mozambique">(7)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in21"><input
                                            type="checkbox" id="cboffices_in21" data-parent="" data-var="op_mauritius"/><span>Mauritius</span>
                                        <span class="filters__block__check__amount" data-amount="2"
                                              data-var="op_mauritius">(2)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in22"><input
                                            type="checkbox" id="cboffices_in22" data-parent=""
                                            data-var="op_namibia"/><span>Namibia</span> <span
                                            class="filters__block__check__amount" data-amount="96"
                                            data-var="op_namibia">(96)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in23"><input
                                            type="checkbox" id="cboffices_in23" data-parent=""
                                            data-var="op_netherlands"/><span>Netherlands</span> <span
                                            class="filters__block__check__amount" data-amount="21"
                                            data-var="op_netherlands">(21)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in24"><input
                                            type="checkbox" id="cboffices_in24" data-parent=""
                                            data-var="op_newzealand"/><span>New Zealand</span> <span
                                            class="filters__block__check__amount" data-amount="5"
                                            data-var="op_newzealand">(5)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in25"><input
                                            type="checkbox" id="cboffices_in25" data-parent="" data-var="op_nigeria"
                                            disabled/><span>Nigeria</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0" data-var="op_nigeria">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in26"><input
                                            type="checkbox" id="cboffices_in26" data-parent=""
                                            data-var="op_norway"/><span>Norway</span> <span
                                            class="filters__block__check__amount" data-amount="3" data-var="op_norway">(3)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in27"><input
                                            type="checkbox" id="cboffices_in27" data-parent=""
                                            data-var="op_portugal"/><span>Portugal</span> <span
                                            class="filters__block__check__amount" data-amount="2"
                                            data-var="op_portugal">(2)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in28"><input
                                            type="checkbox" id="cboffices_in28" data-parent="" data-var="op_reunion"
                                            disabled/><span>Reunion</span> <span class="filters__block__check__amount"
                                                                                 data-amount="0" data-var="op_reunion">(0)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in29"><input
                                            type="checkbox" id="cboffices_in29" data-parent="" data-var="op_russia"
                                            disabled/><span>Russia</span> <span class="filters__block__check__amount"
                                                                                data-amount="0"
                                                                                data-var="op_russia">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in30"><input
                                            type="checkbox" id="cboffices_in30" data-parent=""
                                            data-var="op_rwanda"/><span>Rwanda</span> <span
                                            class="filters__block__check__amount" data-amount="57" data-var="op_rwanda">(57)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in31"><input
                                            type="checkbox" id="cboffices_in31" data-parent="" data-var="op_seychelles"
                                            disabled/><span>Seychelles</span> <span
                                            class="filters__block__check__amount" data-amount="0"
                                            data-var="op_seychelles">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in32"><input
                                            type="checkbox" id="cboffices_in32" data-parent="" data-var="op_singapore"/><span>Singapore</span>
                                        <span class="filters__block__check__amount" data-amount="3"
                                              data-var="op_singapore">(3)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in33"><input
                                            type="checkbox" id="cboffices_in33" data-parent=""
                                            data-var="op_southafrica"/><span>South Africa</span> <span
                                            class="filters__block__check__amount" data-amount="286"
                                            data-var="op_southafrica">(286)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in34"><input
                                            type="checkbox" id="cboffices_in34" data-parent=""
                                            data-var="op_spain"/><span>Spain</span> <span
                                            class="filters__block__check__amount" data-amount="4" data-var="op_spain">(4)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in35"><input
                                            type="checkbox" id="cboffices_in35" data-parent=""
                                            data-var="op_sweden"/><span>Sweden</span> <span
                                            class="filters__block__check__amount" data-amount="5" data-var="op_sweden">(5)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in36"><input
                                            type="checkbox" id="cboffices_in36" data-parent=""
                                            data-var="op_switzerland"/><span>Switzerland</span> <span
                                            class="filters__block__check__amount" data-amount="2"
                                            data-var="op_switzerland">(2)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in37"><input
                                            type="checkbox" id="cboffices_in37" data-parent=""
                                            data-var="op_tanzania"/><span>Tanzania</span> <span
                                            class="filters__block__check__amount" data-amount="1106"
                                            data-var="op_tanzania">(1,106)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in38"><input
                                            type="checkbox" id="cboffices_in38" data-parent=""
                                            data-var="op_uganda"/><span>Uganda</span> <span
                                            class="filters__block__check__amount" data-amount="457"
                                            data-var="op_uganda">(457)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label for="cboffices_in39"><input
                                            type="checkbox" id="cboffices_in39" data-parent="" data-var="op_uae"
                                            disabled/><span>United Arab Emirates</span> <span
                                            class="filters__block__check__amount" data-amount="0"
                                            data-var="op_uae">(0)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in40"><input
                                            type="checkbox" id="cboffices_in40" data-parent=""
                                            data-var="op_unitedkingdom"/><span>United Kingdom</span> <span
                                            class="filters__block__check__amount" data-amount="106"
                                            data-var="op_unitedkingdom">(106)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in41"><input
                                            type="checkbox" id="cboffices_in41" data-parent="" data-var="op_usa"/><span>United States</span>
                                        <span class="filters__block__check__amount" data-amount="131" data-var="op_usa">(131)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in42"><input
                                            type="checkbox" id="cboffices_in42" data-parent=""
                                            data-var="op_zambia"/><span>Zambia</span> <span
                                            class="filters__block__check__amount" data-amount="61" data-var="op_zambia">(61)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cboffices_in43"><input
                                            type="checkbox" id="cboffices_in43" data-parent=""
                                            data-var="op_zimbabwe"/><span>Zimbabwe</span> <span
                                            class="filters__block__check__amount" data-amount="103"
                                            data-var="op_zimbabwe">(103)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var="pricerange">
                            <h3>Price Range (Per Day) <span>&ndash;</span> <a href="changecurrency.html"
                                                                              class="currency-selector"
                                                                              rel="overlay nofollow"
                                                                              data-overlay-hash="currency"
                                                                              title="Change Currency">Change
                                    Currency</a></h3>
                            <span>In <b>USD &#36;</b>  per person sharing rooms</span>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbpricerange0"><input
                                            type="checkbox" id="cbpricerange0" data-parent="" data-var="1"/><span>$1 to $150</span>
                                        <span class="filters__block__check__amount" data-amount="1323"
                                              data-var="pricerange1">(1,323)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbpricerange1"><input
                                            type="checkbox" id="cbpricerange1" data-parent="" data-var="2"/><span>$151 to $300</span>
                                        <span class="filters__block__check__amount" data-amount="2414"
                                              data-var="pricerange2">(2,414)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbpricerange2"><input
                                            type="checkbox" id="cbpricerange2" data-parent="" data-var="3"/><span>$301 to $500</span>
                                        <span class="filters__block__check__amount" data-amount="2434"
                                              data-var="pricerange3">(2,434)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbpricerange3"><input
                                            type="checkbox" id="cbpricerange3" data-parent="" data-var="4"/><span>$501 to $750</span>
                                        <span class="filters__block__check__amount" data-amount="1852"
                                              data-var="pricerange4">(1,852)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbpricerange4"><input
                                            type="checkbox" id="cbpricerange4" data-parent="" data-var="5"/><span>$751 and higher</span>
                                        <span class="filters__block__check__amount" data-amount="1321"
                                              data-var="pricerange5">(1,321)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var="comfort_level">
                            <h3>Comfort Level<a href="javascript:void(0);" class="help  wide  "
                                                title="&lt;b&gt;Luxury&lt;/b&gt;&lt;br /&gt;&lt;ul class=&#039;list list--icon list--icon-arrow&#039;&gt;&lt;li&gt;Safari using deluxe tented camps or lodges, usually located inside the park and comparable to a 3- to 4-star hotel.&lt;/li&gt;&lt;li&gt;Classic tented camps which are valued more for being in a prime wildlife-viewing area than for luxury, but they are always comfortable.&lt;/li&gt;&lt;/ul&gt;&lt;b&gt;Mid-range&lt;/b&gt;&lt;br /&gt;&lt;ul class=&#039;list list--icon list--icon-arrow&#039;&gt;&lt;li&gt;Safari using medium to large-scale accommodation, usually located inside or just outside the park, and comparable to a 2- to 3-star hotel.&lt;/li&gt;&lt;li&gt;Basic, but comfortable, camping safari with spacious tents, a normal bed, private bathroom and staff to take care of camp chores.&lt;/li&gt;&lt;/ul&gt;&lt;b&gt;Budget&lt;/b&gt;&lt;br /&gt;&lt;ul class=&#039;list list--icon list--icon-arrow&#039;&gt;&lt;li&gt;Safari using affordable accommodation, usually located outside the park and comparable to a 1- to 2-star hotel.&lt;/li&gt;&lt;li&gt;Budget camping safari using small tents. The shower and toilet are normally shared. Clients will usually have to assist with camp chores.&lt;/li&gt;&lt;/ul&gt;"></a>
                            </h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbcomfort_level0"><input
                                            type="checkbox" id="cbcomfort_level0" data-parent=""
                                            data-var="luxury"/><span>Luxury</span> <span
                                            class="filters__block__check__amount" data-amount="1358" data-var="luxury">(1,358)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbcomfort_level1"><input
                                            type="checkbox" id="cbcomfort_level1" data-parent=""
                                            data-var="midrange"/><span>Mid-range</span> <span
                                            class="filters__block__check__amount" data-amount="2682"
                                            data-var="midrange">(2,682)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbcomfort_level2"><input
                                            type="checkbox" id="cbcomfort_level2" data-parent=""
                                            data-var="budget"/><span>Budget</span> <span
                                            class="filters__block__check__amount" data-amount="1357" data-var="budget">(1,357)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var="specialized">
                            <h3>Specialized In</h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized0"><input
                                            type="checkbox" id="cbspecialized0" data-parent="" data-var="custom"/><span>Custom private tours</span>
                                        <span class="filters__block__check__amount" data-amount="2339"
                                              data-var="sp_custom">(2,339)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized1"><input
                                            type="checkbox" id="cbspecialized1" data-parent=""
                                            data-var="smallmedgroup"/><span>Shared group tours</span> <span
                                            class="filters__block__check__amount" data-amount="884"
                                            data-var="sp_smallmedgroup">(884)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized2"><input
                                            type="checkbox" id="cbspecialized2" data-parent=""
                                            data-var="daytours"/><span>Day tours</span> <span
                                            class="filters__block__check__amount" data-amount="28"
                                            data-var="sp_daytours">(28)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized3"><input
                                            type="checkbox" id="cbspecialized3" data-parent=""
                                            data-var="selfdrive"/><span>Self drive tours</span> <span
                                            class="filters__block__check__amount" data-amount="15"
                                            data-var="sp_selfdrive">(15)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized4"><input
                                            type="checkbox" id="cbspecialized4" data-parent=""
                                            data-var="guidedselfdrive"/><span>Guided self drive tours</span> <span
                                            class="filters__block__check__amount" data-amount="9"
                                            data-var="sp_guidedselfdrive">(9)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized5"><input
                                            type="checkbox" id="cbspecialized5" data-parent="" data-var="photographic"/><span>Photographic safaris</span>
                                        <span class="filters__block__check__amount" data-amount="22"
                                              data-var="sp_photographic">(22)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized6"><input
                                            type="checkbox" id="cbspecialized6" data-parent=""
                                            data-var="horseback"/><span>Horseback safaris</span> <span
                                            class="filters__block__check__amount" data-amount="6"
                                            data-var="sp_horseback">(6)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized7"><input
                                            type="checkbox" id="cbspecialized7" data-parent="" data-var="canoe"/><span>Canoe safaris</span>
                                        <span class="filters__block__check__amount" data-amount="1" data-var="sp_canoe">(1)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized8"><input
                                            type="checkbox" id="cbspecialized8" data-parent=""
                                            data-var="birding"/><span>Birding tours</span> <span
                                            class="filters__block__check__amount" data-amount="4" data-var="sp_birding">(4)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbspecialized9"><input
                                            type="checkbox" id="cbspecialized9" data-parent="" data-var="golfwildlife"/><span>Golf + wildlife combos</span>
                                        <span class="filters__block__check__amount" data-amount="10"
                                              data-var="sp_golfwildlife">(10)</span></label>
                                </li>
                                <li class="filters__block__check  inactive  " data-hide="1"><label
                                        for="cbspecialized10"><input type="checkbox" id="cbspecialized10" data-parent=""
                                                                     data-var="disabled" disabled/><span>Disabled travelers</span>
                                        <span class="filters__block__check__amount" data-amount="0"
                                              data-var="sp_disabled">(0)</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__block" data-var="arrange">
                            <h3>Can Arrange</h3>
                            <ul>
                                <li class="filters__block__check  " data-hide="0"><label for="cbarrange0"><input
                                            type="checkbox" id="cbarrange0" data-parent="" data-var="intflights"/><span>International flights</span>
                                        <span class="filters__block__check__amount" data-amount="632"
                                              data-var="arr_intflights">(632)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbarrange1"><input
                                            type="checkbox" id="cbarrange1" data-parent=""
                                            data-var="returnairport"/><span>Airport transfers</span> <span
                                            class="filters__block__check__amount" data-amount="2760"
                                            data-var="arr_returnairport">(2,760)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbarrange2"><input
                                            type="checkbox" id="cbarrange2" data-parent=""
                                            data-var="prepostaccomodation"/><span>Pre/post accommodation</span> <span
                                            class="filters__block__check__amount" data-amount="2682"
                                            data-var="arr_prepostaccomodation">(2,682)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbarrange3"><input
                                            type="checkbox" id="cbarrange3" data-parent=""
                                            data-var="preposttransfer"/><span>Pre/post road transfers</span> <span
                                            class="filters__block__check__amount" data-amount="2665"
                                            data-var="arr_preposttransfer">(2,665)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbarrange4"><input
                                            type="checkbox" id="cbarrange4" data-parent="" data-var="domestic"/><span>Pre/post domestic flights</span>
                                        <span class="filters__block__check__amount" data-amount="2397"
                                              data-var="arr_domestic">(2,397)</span></label>
                                </li>
                                <li class="filters__block__check  " data-hide="0"><label for="cbarrange5"><input
                                            type="checkbox" id="cbarrange5" data-parent="" data-var="customext"/><span>Custom tour extensions</span>
                                        <span class="filters__block__check__amount" data-amount="2698"
                                              data-var="arr_customext">(2,698)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filters__apply hide-d">
                        <a href="#" class="btn btn--orange btn--next" data-txt="Show X Operator">
                            Show Operators
                        </a>
                    </div>
                    <script type="text/javascript">
                        currency = "USD";
                        currency_ranges = ["$1 to $150", "$151 to $300", "$301 to $500", "$501 to $750", "$751 and higher"];    </script>
                </div>
                <div class="col col-12 col-d-9 list--operators">
                    <div class="row row-header">
                        <div class="col col-12">
                            <h1 class="serif list--title">Safari Tour Operators</h1>
                        </div>
                        <div class="row row-d-0">
                            <div class="col col-12">
                                <button class="btn btn--blue btn--filter"><i class="sbi sbi--filter"></i>Filters
                                </button>
                                <button class="btn btn--blue btn--filter btn--filter-whereto"><i
                                        class="sbi sbi--map-pin-blue sbi--xmedium"></i>Where To
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 reload selected-filters hide">
                            <span>Selected filters:</span>
                            <div class="selected-filters__item selected-filters__item--clear">Clear All Filters</div>
                        </div>
                    </div>
                    <div class="row list--numbers  reload  ">
                        <div class="col col-12 titlebar__sub">
                            Finding Tour Operators...
                        </div>
                        <div class="col col-12 titlebar__sub  hide  ">
                            <b>1-10</b> of <b class="itemcount" data-count="3514">3,514</b> Safari tour operators
                        </div>
                    </div>
                    <ul class="row list__snippets">
                        @foreach($users as $user)
                        <li class="col col-12 list__item" data-id="1322">
                            <script type="text/javascript">if (!filterbyhash) {
                                    document.querySelector('li[data-id="1322"]').classList.remove('reload');
                                } </script>
                            <a href="{{url('operator-profile')}}/{{$user->id}}" class="row " target="_blank" data-id="1322" data-pos="1"
                               title="{{$user->company_name}}">
                                <span class="favorite-save hide-t  " data-id="1322" data-type="operator"
                                                     title="Add to your favorites list">
                                <img class="svg svg--shadowed" src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg"
                                      alt=""/>
                                   </span>
                                <div class="hide-t list__item--image__full  ">
                                    <picture>
                                        <img
                                            src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                            srcset="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                            alt="{{$user->company_name}}"/>
                                        <noscript>
                                            <img
                                                src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                srcset="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                title="{{$user->company_name}}"
                                                alt="{{$user->company_name}}">
                                        </noscript>

                                    </picture>
                                    <h2 class="serif">
                                       {{$user->company_name}}
                                    </h2>
                                </div>
                                <div class="col col-0 col-t-2-5 col-d-2-5 col-w-3 picture-holder">
                                    <div class="picture-frame">
                                        <div>
                                            <img
                                                src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                srcset="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                title="{{$user->company_name}}"
                                                alt="{{$user->company_name}}"/>
                                            <noscript>
                                                <img
                                                    src="{{env('OPERATOR_URL')}}/view-user-file/{{$user->id}}"
                                                    title=" {{$user->company_name}}"
                                                    alt=" {{$user->company_name}}">
                                            </noscript>
                                        </div>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                                <div class="col col-12 col-t-7 col-d-6-5 col-w-6 data-holder">
                                    <h2 class="hide show-t with-save-btn">
                <span>

                         {{$user->company_name}}
                                    </span>
                                        <span class="favorite-save hide show-ti  " data-id="1322" data-type="operator"
                                              title="Add to your favorites fist">

                    <img class="svg svg--shadowed"
                         src="https://cfstatic.safaribookings.com/img/sbicons/heart-circled.svg" alt=""/>
                </span>
                                    </h2>
                                    <div class="review-summary--oneline hide show-t">
                                        <div class="stars      " title="5 / 5">
                                            @for($i=0;$i<$user->rating;$i++)
                                            <i class="sbi sbi--star"></i>
                                            @endfor
                                        </div>
                                        <span class="review-score"><em>{{$user->rating}}</em>/5</span> &nbsp;&ndash;&nbsp;{{$user->reviews}} Reviews
                                    </div>
                                    <dl>
                                        <dt>Office In:</dt>
                                        <dd class="officesin">
                                            <div class="country-with-flag  " title="Countries">
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
                                        <dt>Price Range:</dt>
                                        <dd><strong>{{$user->pricerange}}</strong> per person <strong>per
                                                day</strong> <span class="txt--xsmall txt--xgrey">(USD)</span></dd>
                                        <dt>Tour Types:</dt>
                                        <dd>{{$user->tourtype}}</dd>
                                        <dt>Destinations:</dt>
                                        <dd>
                                            <div class="country-with-flag small  " title="Kenya">
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
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col col-0 col-t-2-5 col-d-3 logo-holder">
                                    <img
                                        src="{{env('OPERATOR_URL')}}/view-user-company-file/{{$user->id}}"
                                        class="operator-logo" title="{{$user->company_name}}"
                                        alt="{{$user->company_name}}"/>
                                </div>
                            </a>
                            <div class="row">
                                <div class="col col-0 col-t-2-5 col-w-3">&nbsp;</div>
                                <div class="col col-12 col-t-9 col-w-9 ">
                                    <ul class="list list--icon list--icon-arrow list--icon-nopadding txt--small hide show-t">
                                        @if(count($user->tours) == 0)
                                            <li><a href="#"
                                                   title="Not found">No tour found!</a>
                                            </li>
                                        @endif
                                        @foreach($user->tours as $tour)
                                            <li><a href="#"
                                                   title="{{$tour->title}}">{{$tour->total_days}}-Day
                                                    {{$tour->title}}</a> <span
                                                    class="txt--grey">(from ${{$tour->price}} pp)</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{url('operator-tours')}}/{{$user->id}}"
                                       class="btn btn--orange btn--small btn--autowidth btn--next"
                                       title="All tours offered by Pearl Afric Tours &amp; Travel"> All {{count($user->tours)}}
                                        Tours </a><span
                                        class="behind-btn"> - Offered by {{$user->company_name}}</span>
{{--                                    <img--}}
{{--                                        src="../cloudfront.safaribookings.com/operators/logos/logo_1_1322_5ff9f8880e015.gif"--}}
{{--                                        class="operator-logo operator-logo-m show hide-t"/>--}}
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


    </main>
@endsection
