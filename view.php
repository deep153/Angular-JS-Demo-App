<?php include_once('header2.php'); ?>

    <div class="row margin-header" >
        <div class="df-heading">
            <div class="row">
                <div class="col-lg-2 visible-lg text-center">
                    <!--<h2><a onclick="history.go(-1);" href=""><i class="icon-circle-arrow-left"></i> Go Back</a></h2>-->
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="pull-left"><i class="fa fa-angle-double-down"></i> Your Reserved Tables</h3>
                </div>

            </div>
        </div>
    </div>

    <div class="row" ng-controller="viewReservation" ng-init="getReservation()">
        <div class="col-lg-2 col-sm-2"></div>
        <div class="col-lg-10 col-sm-10">

            <div ng-repeat="table in total_tables"  style="padding-left:5px; padding-right:5px;" class="col-sm-6 col-md-4 col-lg-4">

                <div style="padding:0px; text-align:center;" class="thumbnail df-darken-card df-list-row" >


                    <a style="border-left:none;min-height:100px; border-right:none;font-size: 32px; border-top:none; padding:7px;" class="thumbnail" href="#"><i class="fa fa-map-marker"></i> {{table.reservation_hotel}}</a>

                    <div class="caption">
                        <div class="row">

                            <div style="padding:0;" class="col-sm-6">
                                <h5 style="margin-top:0px; margin-bottom:5px;" class="df-link name"><i class="fa fa-calendar"></i> {{table.reservation_date}}</h5>
                                <!--<p style="text-align:right;"><i class="fa fa-clock-o fa-lg" rel="tooltip" data-placement="top" data-original-title="Average Cooking Time"></i> 20 Minutes</p>-->
                            </div>
                            <div style="padding:0;" class="col-sm-6">
                                <h5 style="margin-top:0px; margin-bottom:5px;" class="df-link name"><i class="fa fa-clock-o"></i> {{table.reservation_time}}</h5>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div style="padding:0;" class="col-sm-6">
                                <h5 style="margin-top:0px; margin-bottom:5px;" class="df-link name"><i class="fa fa-users"></i> {{table.reservation_person}}</h5>
                            </div>
                            <div style="padding:0;" class="col-sm-6">
                                <h5 style="margin-top:0px; margin-bottom:5px;" class="df-link name"><i class="fa fa-phone"></i> {{table.reservation_contact}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/custom.js" type="text/javascript"></script>

<?php include_once('footer.php'); ?>