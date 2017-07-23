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

        .df-heading h3{
            margin-top:12px;
            margin-bottom:12px;
            padding-left:10px;
            font-size:22px;
        }

        .df-heading .sub-title {
            font-size: 16px;
        }

        .navbar .nav {
            float: left;
            margin: 0;
        }

        ul.menu2 {
            font-size: 15px;
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


        .my-navbar-top #logo {
            padding: 6px 5px;
            background-color:#003366;
            margin-left: 20px;
            margin-right:10px;
            border-radius: 0 0 5px 5px;
        }

        .my-navbar-top {
            background-color: #003366;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);

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

        .btn-xs {
            padding: 2px 8px;
            font-size:13px;
        }


        .required {
            color: red;
        }

    </style>


    <nav role="navigation" id="header-navigation" class="navbar my-navbar-top">

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

        <div class="collapse navbar-collapse navbar-ex1-collapse" style="overflow: hidden;">

            <ul class="nav navbar-nav navbar-right" style="padding: 15px;" ng-init="isLoggedIn()">

                <li><a data-original-title="Search" data-placement="bottom" rel="tooltip" data-target="#search-bar" data-toggle="collapse"><i class="fa fa-search fa-lg fa-white"></i></a></li>
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

<!--    <nav role="navigation" id="header-navigation" class="navbar my-navbar-top">-->
<!---->
<!---->
<!--        <div class="navbar-header">-->
<!--            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!---->
<!--            <div id="logo" class="navbar-brand logo">-->
<!---->
<!--                <a href="index.php">-->
<!--                    <img height="60" class="img-rounded" alt="Tamuk - Table Reservation" title="Tamuk - Table Reservation" src="images/logo.png">-->
<!--                </a>-->
<!---->
<!--            </div> <!-- end of navbar-brand logo class -->
<!--        </div> <!-- navbar-header class -->
<!---->
<!--        <!-- Collect the nav links, forms, and other content for toggling -->
<!---->
<!--        <div class="collapse navbar-collapse navbar-ex1-collapse" style="overflow: hidden;margin-top: 7px;">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="#">Restaurants</a></li>-->
<!--                <li><a href="#">Collections</a></li>-->
<!--            </ul>-->
<!---->
<!--            <ul class="nav navbar-nav navbar-right" ng-init="isLoggedIn()">-->
<!---->
<!--                <li><a data-original-title="Search" data-placement="bottom" rel="tooltip" data-target="#search-bar" data-toggle="collapse"><i class="fa fa-search fa-lg fa-white"></i></a></li>-->
<!--                <li><a data-original-title="Need Help/Support?" data-placement="bottom" rel="tooltip" href="#"><i class="fa fa-life-ring fa-lg"></i></a></li>-->
<!---->
<!--                <li  ng-if="display_name" class="{{display_name ? 'dropdwon' : ''}}">-->
<!--                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
<!--	             		<span class="visible-xs"><i class="fa fa-user"></i></span>-->
<!--	             		<span class="hidden-xs"><i class="fa fa-user fa-lg"></i> {{ display_name }} <i class="fa fa-caret-down"></i></span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="view.php"><i class="fa fa-eye"></i> View Reservation</a></li>-->
<!--                        <li><a href="javascript:void(0);" ng-click="logOut()" class="top"><i class="fa fa-power-off"></i> Logout</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li ng-if="!display_name">-->
<!--                    <a href="#" id="login-btn" ng-click="openLoginModal()"><i class="fa fa-user fa-lg fa-white"></i> <span class="hidden-phone">Log In</span></a>-->
<!--                </li>-->
<!--                <!--<li><a href="http://table.delfoo.com/register" class="hidden-phone">Sign Up</a></li>-->
<!--            </ul>-->
<!--        </div><!-- /.navbar-collapse -->
<!--    </nav>-->

