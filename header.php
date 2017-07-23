<html ng-app="reservation">

<head>
    <meta charset="utf-8">
    <title> Tamuk - Table Reservation </title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="icon" href="http://image.delfoo.com/data/logo/favicon/delfoo-favicon-table.png">


    <meta content="Get Your Favourite Table Now" property="og:site_name">
    <meta content="website" property="og:type">

    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap_custom.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/my_custom.css">
    <link rel="stylesheet" href="plugin/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/table.css">


    <!-- Pick a Date & Time Plugin -->
    <link href="plugin/pickadate/classic.css" rel="stylesheet">
    <link href="plugin/pickadate/classic.date.css" rel="stylesheet">
    <link href="plugin/pickadate/classic.time.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">


    <!-- JS FILES -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="plugin/noty/js/noty/packaged/jquery.noty.packaged.min.js" type="text/javascript"></script>
    <script src="js/list.js" type="text/javascript"></script>
    <script src="plugin/pickadate/picker.js"></script>
    <script src="plugin/pickadate/picker.date.js"></script>
    <script src="plugin/pickadate/picker.time.js"></script>
    <script src="plugin/pickadate/legacy.js"></script>
    <script src="js/bootstrap.js"></script>

    <!--Angular JS-->
    <script src="js/angular.min.js" type="text/javascript"></script>
    <script src="js/angular-cookies.js"></script>
</head>

<body ng-controller="loginController">
    <style>
        body {
            font-size: 13px;
        }

        nav {
            font-size: 14px;
        }

        /* Custom Css */
        .df-menu-heading {
            font-size: 16px;
        }

        .df-submenu-heading {
            font-size: 15px;
        }

        .df-menu-product {
            font-size: 14px;
        }

        #search-bar {
            background-color:#fff;
            height:80px;
            position:fixed;
            left:0;
            right:0;
            z-index:1000;
        }

        .df-heading {
            line-height: 48px;
        }

        .df-heading h3{
            margin-top:12px;
            margin-bottom:12px;
            padding-left:10px;
            font-size:22px;
        }

        .df-heading .sub-title {
            font-size: 16px;
        }

        .df-title {
            line-height: 28px;
            font-size: 18px;
        }


        .navbar .nav {
            float: left;
            margin: 0;
        }

        /*.navbar .nav &gt; li &gt; a {*/
                                      /*padding-top: 25px;*/
                                      /*padding-bottom: 25px;*/
                                  /*}*/

        .deal-title {
            font-size: 14px;
        }

        .achievement-heading {
            font-size: 20px;
        }

        ul.menu2 {
            font-size: 15px;
        }

        .deal-special {
            font-size: 18px;
        }

        .deal-price {
            font-size: 18px;
        }

        .deal-view {
            font-size: 18px;
        }

        #search-bar .btn {
            line-height: 1.868571;
        }

        .vendor-nav a {
            font-size: 15px;
        }

        .df-form-btn {
            font-size: 18px;
        }

        @media (min-width: 1200px) {
            #featured .col-lg-3:nth-child(4n+5) {
                clear:both;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            #featured .col-md-4:nth-child(3n+4) {
                clear:both;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #featured .col-sm-4:nth-child(3n+4) {
                clear:both;
            }
        }

        @media (max-width: 768px) {
            #featured .col-xs-6:nth-child(2n+3) {
                clear:both;
            }
        }

        /* bootstrap_custom.css */

        .panel-delfoo .panel-heading .panel-title {
            font-size: 16px;
        }

        .panel-delfoo .list-group-item {
            font-size: 14px;
        }

        @media (min-width: 768px) {
            .navbar {
                border-radius: 0;
                border-top:none;
                border-left:none;
                border-right:none;
            }
        }
        .navbar {
            margin-bottom:0;
        }

        .btn-xs {
            padding: 2px 8px;
            font-size:13px;
        }

        #search-list .btn-sm {
            padding: 5px 7px;
            line-height: 1.428571;
            font-size: 12px;
        }

        body.modal-open, .modal-open .navbar-fixed-top, .modal-open .navbar-fixed-bottom {
            margin-right: 0;
        }

        /* classic.css */

        .picker__holder {
            min-width:250px;
        }

        .my-navbar-top #logo {
            padding: 6px 5px;
            background-color:#003366;
            margin-left: 20px;
            margin-right:10px;
            border-radius: 0 0 5px 5px;
        }

        .my-navbar-top {
            background-color: transparent;
            box-shadow: none;
            background-image: none;
            border-top: 7px solid #003366;
            border-bottom:none;
        }

        .my-navbar-top .navbar-nav &gt; li &gt; a:hover, .my-navbar-top .navbar-nav &gt; li &gt; a:focus {
            color: #fff;
            background-color: transparent;
            text-shadow: 0 0 10px rgba(255,255,255,.55);
        }

        .my-navbar-top .navbar-nav &gt; .active &gt; a, .my-navbar-top .navbar-nav &gt; .active &gt; a:hover {
              color: #fff;
              background-color: transparent;
              text-shadow: 0 0 10px rgba(255,255,255,.55);
        }

        .my-navbar-top .nav .open &gt; a, .nav .open &gt; a:hover, .my-navbar-top .nav .open &gt; a:focus {
              color: #fff;
              background-color: transparent;
              text-shadow: 0 0 10px rgba(255,255,255,.55);
        }

        .my-navbar-top .navbar-nav .dropdown-menu:before {
            z-index: 1003;
            bottom: -7px;
            margin-left: -8px;
            border-width: 0 8px 8px 8px;
            border-color: transparent transparent #ffffff transparent;
            display: block;
            position: absolute;
            content: "";
            left: 50%;
            width: 0px;
            height: 0px;
            border-style: solid;
            top: -8px;
        }

        #top-service-dropdown .dropdown-menu{
            left: -76px;
        }

        .navbar-nav &gt; li &gt; .dropdown-menu {
             margin-top: 0;
             border-top-right-radius: 4px;
             border-top-left-radius: 4px;
        }

        #search-bar {
            background-color: rgba(0,0,0,.5);
        }

        #search-bar .close {
            opacity:0.8;
            color:#fff;
        }

        #home-heading {
            padding-top:73px;
            box-shadow: 0px 0px 250px rgba(0,0,0,0.7) inset;
            margin-top:-73px;
        }

        #home-sub-heading-title {
            background-color: transparent;
            padding: 50px 15px 10px;
            text-align: center;
            font-size: 32px;
        }

        .required {
            color: red;
        }

    </style>

    <nav role="navigation" id="header-navigation" class="navbar my-navbar-top">

        <div id="notification-bar">

        </div>

        <div class="navbar-header">
            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div id="logo" class="navbar-brand logo">

                <a href="index.php">
                    <img height="60" class="img-rounded" alt="Tamuk - Table Reservation" title="Tamuk - Table Reservation" src="images/logo.png">
                </a>

            </div> <!-- end of navbar-brand logo class -->
        </div> <!-- navbar-header class -->

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse navbar-ex1-collapse" style="overflow: hidden;margin-top: 7px;">

            <ul class="nav navbar-nav navbar-right" ng-init="isLoggedIn()">

                <li><a data-original-title="Need Help/Support?" data-placement="bottom" rel="tooltip" href="#"><i class="fa fa-life-ring fa-lg"></i></a></li>

                <li  ng-if="display_name" class="{{display_name ? 'dropdwon' : ''}}">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	             		<span class="visible-xs"><i class="fa fa-user"></i></span>
	             		<span class="hidden-xs"><i class="fa fa-user fa-lg"></i> {{ display_name }} <i class="fa fa-caret-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="view.php"><i class="fa fa-eye"></i> View Reservation</a></li>
                        <li><a href="javascript:void(0);" ng-click="logOut()" class="top"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li ng-if="!display_name">
                    <a href="#" id="login-btn" ng-click="openLoginModal()"><i class="fa fa-user fa-lg fa-white"></i> <span class="hidden-phone">Log In</span></a>
                </li>
                <!--<li><a href="http://table.delfoo.com/register" class="hidden-phone">Sign Up</a></li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>


    <!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <form name="login_form" novalidate>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock"></i> Login</h4>
                    </div>
                    <div class="modal-body" id="login-popup-form" style="margin:0;">
                        <div class="row" ng-if="invalidLogin">
                            <div class="alert alert-danger" role="alert">{{ login_warning }} </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 hidden-xs">
                                <img src="images/lock.png" alt="Login">
                            </div>

                            <div class="col-lg-9 col-md-9">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12">

                                        <input type="email" ng-model="user.email" name="emailId" placeholder="* E-mail" required="" class="form-control" style="height:45px " />
                                        <div ng-show="login_form.$submitted || login_form.emailId.$touched">
                                            <div ng-show="login_form.emailId.$error.required" class="required">Please enter your email id</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <input type="password" ng-model="user.password" name="password"  required="" placeholder="* Password" class="form-control" style="height: 45px!important;">
                                        <div ng-show="login_form.$submitted || login_form.password.$touched">
                                            <div ng-show="login_form.password.$error.required" class="required">Please enter your password</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <label class="pull-left"><a href="javascript:void(0);" ng-click="openRegistration()">New to TAMUK?? - Register Now </a></label>

                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <button type="submit" ng-click="checkUser()" class="btn btn-primary pull-right">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--Registration Modal-->
    <div class="modal fade" id="registerModal" ng-controller="registerController"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">

            <form name="form" novalidate>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Registration</h4>
                    </div>
                    <div class="modal-body" id="register-popup-form" style="margin:0;">
                        <div class="row">
                            <div class="col-lg-12 col-md-9">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="first_name" value="" ng-model="user.first_name" required="" placeholder="* First Name" class="form-control" style="height: 45px!important;">
                                        <div ng-show="form.$submitted || form.first_name.$touched">
                                            <div ng-show="form.first_name.$error.required" class="required">Please enter your first name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="last_name" value="" placeholder="* Last Name" required="" ng-model="user.last_name" class="form-control" style="height: 45px!important;">
                                        <div ng-show="form.$submitted || form.last_name.$touched">
                                            <div ng-show="form.last_name.$error.required" class="required">Please enter your last name</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="email" name="email" value="" placeholder="* Email" required="" ng-model="user.email" class="form-control" style="height: 45px!important;">
                                        <div ng-show="form.$submitted || form.email.$touched">
                                            <div ng-show="form.email.$error.required" class="required">Please enter email</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="password" name="password" value="" placeholder="* Password" required="" ng-model="user.password" class="form-control" style="height: 45px!important;">
                                        <div ng-show="form.$submitted || form.password.$touched">
                                            <div ng-show="form.password.$error.required" class="required">Please enter password</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <button type="submit" ng-click="registerUser()" class="btn btn-success pull-right">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
