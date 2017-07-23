<?php include_once('header.php'); ?>

    <div class="row margin-header" ng-controller="reservation">

        <div class="row">
            <div style="background: url(images/bg_table.jpg) no-repeat center; background-size:100%; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;" id="home-heading" class="row">
                <div class="row">
                    <div id="home-sub-heading-title">
                        <a style="color:#FFF; font-size:32px;" class="df-link" href="#"><span style="font-size:28px;" class="df-headline">
                            Tamuk's First Online Table Reservation Service!</span>
                        </a>
                    </div>
                </div>

                <div style="padding-top:50px; padding-bottom:100px;" class="row">
                    <form name="resFrom">
                        <div class="row">
                            <div class="col-lg-4 col-md-1 col-sm-1"></div>
                            <div align="center" style="border-top:none;" class="col-lg-4 well unit-bg-home tab-content">

                                <div style="padding-top:15px;" class="form-table-reservation df-title-colorful">

                                    <div class="row">
                                        <div align="center" class="input-group">
                                            <span style="position: relative; display: inline-block;">
                                                <input type="text" name="table_reservation_name_home" ng-required="true" ng-model="input_restaurant" style="border-width: 3px medium 3px 3px; border-style: solid none solid solid; height: 50px ! important; margin: 0px; font-size: 17px; position: relative; vertical-align: top; background-color: transparent;" placeholder="Restaurant Name" class="form-control df-input filter_name_table" id="filter_name">
                                                <span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: &quot;Varela Round&quot;,sans-serif; font-size: 17px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></span>
                                                <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span>
                                            </span>

                                            <span class="input-group-btn">
                                                <button style="background-color: #c90117; height:50px; font-size:15px;" class="button-search-table-home btn btn-danger" ng-click="resFrom.$valid && saveReservation()"><i class="icon-search icon-white"></i> Create Your Reservation</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row margin-top">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <input type="text" ng-required="true" ng-model="input_date" id="table-reservation-date" value="" placeholder="Choose Date" name="table_reservation_date" data-format="MM-dd-yyyy" class="col-lg-12 add-on reservation-date picker__input" readonly=""><div class="picker"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div data-nav="-1" class="picker__nav--prev picker__nav--disabled"> </div><div data-nav="1" class="picker__nav--next"> </div><div class="picker__month">February</div><div class="picker__year">2016</div></div><table class="picker__table"><thead><tr><th class="picker__weekday">Sun</th><th class="picker__weekday">Mon</th><th class="picker__weekday">Tue</th><th class="picker__weekday">Wed</th><th class="picker__weekday">Thu</th><th class="picker__weekday">Fri</th><th class="picker__weekday">Sat</th></tr></thead><tbody><tr><td><div data-pick="1454220000000" class="picker__day picker__day--outfocus picker__day--disabled">31</div></td><td><div data-pick="1454306400000" class="picker__day picker__day--infocus picker__day--disabled">1</div></td><td><div data-pick="1454392800000" class="picker__day picker__day--infocus picker__day--disabled">2</div></td><td><div data-pick="1454479200000" class="picker__day picker__day--infocus picker__day--disabled">3</div></td><td><div data-pick="1454565600000" class="picker__day picker__day--infocus picker__day--disabled">4</div></td><td><div data-pick="1454652000000" class="picker__day picker__day--infocus picker__day--disabled">5</div></td><td><div data-pick="1454738400000" class="picker__day picker__day--infocus picker__day--disabled">6</div></td></tr><tr><td><div data-pick="1454824800000" class="picker__day picker__day--infocus picker__day--disabled">7</div></td><td><div data-pick="1454911200000" class="picker__day picker__day--infocus picker__day--disabled">8</div></td><td><div data-pick="1454997600000" class="picker__day picker__day--infocus picker__day--disabled">9</div></td><td><div data-pick="1455084000000" class="picker__day picker__day--infocus picker__day--disabled">10</div></td><td><div data-pick="1455170400000" class="picker__day picker__day--infocus picker__day--disabled">11</div></td><td><div data-pick="1455256800000" class="picker__day picker__day--infocus picker__day--disabled">12</div></td><td><div data-pick="1455343200000" class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted">13</div></td></tr><tr><td><div data-pick="1455429600000" class="picker__day picker__day--infocus">14</div></td><td><div data-pick="1455516000000" class="picker__day picker__day--infocus">15</div></td><td><div data-pick="1455602400000" class="picker__day picker__day--infocus">16</div></td><td><div data-pick="1455688800000" class="picker__day picker__day--infocus">17</div></td><td><div data-pick="1455775200000" class="picker__day picker__day--infocus">18</div></td><td><div data-pick="1455861600000" class="picker__day picker__day--infocus">19</div></td><td><div data-pick="1455948000000" class="picker__day picker__day--infocus">20</div></td></tr><tr><td><div data-pick="1456034400000" class="picker__day picker__day--infocus">21</div></td><td><div data-pick="1456120800000" class="picker__day picker__day--infocus">22</div></td><td><div data-pick="1456207200000" class="picker__day picker__day--infocus">23</div></td><td><div data-pick="1456293600000" class="picker__day picker__day--infocus">24</div></td><td><div data-pick="1456380000000" class="picker__day picker__day--infocus">25</div></td><td><div data-pick="1456466400000" class="picker__day picker__day--infocus">26</div></td><td><div data-pick="1456552800000" class="picker__day picker__day--infocus">27</div></td></tr><tr><td><div data-pick="1456639200000" class="picker__day picker__day--infocus">28</div></td><td><div data-pick="1456725600000" class="picker__day picker__day--infocus">29</div></td><td><div data-pick="1456812000000" class="picker__day picker__day--outfocus">1</div></td><td><div data-pick="1456898400000" class="picker__day picker__day--outfocus">2</div></td><td><div data-pick="1456984800000" class="picker__day picker__day--outfocus">3</div></td><td><div data-pick="1457071200000" class="picker__day picker__day--outfocus">4</div></td><td><div data-pick="1457157600000" class="picker__day picker__day--outfocus">5</div></td></tr><tr><td><div data-pick="1457244000000" class="picker__day picker__day--outfocus">6</div></td><td><div data-pick="1457330400000" class="picker__day picker__day--outfocus">7</div></td><td><div data-pick="1457416800000" class="picker__day picker__day--outfocus">8</div></td><td><div data-pick="1457503200000" class="picker__day picker__day--outfocus">9</div></td><td><div data-pick="1457589600000" class="picker__day picker__day--outfocus">10</div></td><td><div data-pick="1457676000000" class="picker__day picker__day--outfocus">11</div></td><td><div data-pick="1457762400000" class="picker__day picker__day--outfocus">12</div></td></tr></tbody></table><div class="picker__footer"><button disabled="" data-pick="1455343200000" class="picker__button--today">Today</button><button disabled="" data-clear="1" class="picker__button--clear">Clear</button></div></div></div></div></div></div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" value="" ng-required="true" ng-model="input_time" placeholder="Choose Time" name="table_reservation_time" data-format="hh:mm" class="col-lg-12 add-on reservation-time picker__input" readonly=""><div class="picker picker--time"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><ul class="picker__list"><li data-pick="690" class="picker__list-item picker__list-item--selected picker__list-item--highlighted picker__list-item--viewset">11:30 AM</li><li data-pick="720" class="picker__list-item">12:00 PM</li><li data-pick="750" class="picker__list-item">12:30 PM</li><li data-pick="780" class="picker__list-item">01:00 PM</li><li data-pick="810" class="picker__list-item">01:30 PM</li><li data-pick="840" class="picker__list-item">02:00 PM</li><li data-pick="870" class="picker__list-item">02:30 PM</li><li data-pick="900" class="picker__list-item">03:00 PM</li><li data-pick="930" class="picker__list-item">03:30 PM</li><li data-pick="960" class="picker__list-item">04:00 PM</li><li data-pick="990" class="picker__list-item">04:30 PM</li><li data-pick="1020" class="picker__list-item">05:00 PM</li><li data-pick="1050" class="picker__list-item">05:30 PM</li><li data-pick="1080" class="picker__list-item">06:00 PM</li><li data-pick="1110" class="picker__list-item">06:30 PM</li><li data-pick="1140" class="picker__list-item">07:00 PM</li><li data-pick="1170" class="picker__list-item">07:30 PM</li><li data-pick="1200" class="picker__list-item">08:00 PM</li><li data-pick="1230" class="picker__list-item">08:30 PM</li><li data-pick="1260" class="picker__list-item">09:00 PM</li><li data-pick="1290" class="picker__list-item">09:30 PM</li><li data-pick="1320" class="picker__list-item">10:00 PM</li><li data-pick="1350" class="picker__list-item">10:30 PM</li><li data-pick="1380" class="picker__list-item">11:00 PM</li><li><button disable="" data-clear="1" class="picker__button--clear">Clear</button></li></ul></div></div></div></div></div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-2 col-xs-2">
                                            <input type="text" data-original-title="Persons" ng-required="true" ng-model="input_person" data-placement="bottom" rel="tooltip" value="2" placeholder="Persons" name="table_reservation_people" class="col-lg-12 add-on">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <input type="text" value="" ng-required="true" ng-model="input_contact" placeholder="Contact" name="table_reservation_contact" class="col-lg-12 add-on" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var vendor_id;
        var person;
        person=2;
        $('.reservation-date').pickadate({
            format: 'mmmm dd, yyyy',
            min: true,
            max: false
        });

        $('.reservation-time').pickatime({
            format : 'hh:i A',
            interval: 30,
            min: true,
            min: [11,30],
            max: [23,00]
        });


        $(document).on('click','.close',function(){
            $(this).parent().remove();
        });


    </script>

    <script src="js/custom.js" type="text/javascript"></script>




<?php include_once('footer.php'); ?>