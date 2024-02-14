<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="an international financial services company that provides lending facilities, deposit programs for interaction with innovative payment instruments " />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- SITE TITLE -->
    <title> Crypto trading portal </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/index/logos/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/index/logos/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/index/logos/apple-touch-icon-72x72.png') }}">
    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <!-- switcher css -->
    <link href="{{ asset('css/switcher.css') }}" rel="stylesheet">
    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}" />
    <!-- custom css -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" id="colors">
    <style type="text/css">
        #apDiv30 {
            position:fixed;
            right:0px;
            top:567px;
            width:177px;
            height:36px;
            z-index:8790082;
            background-color:#fff;
        }
        .spinner {
            border-radius: 100%;
            -webkit-animation: sk-scaleout 2.0s infinite ease-in-out;
            animation: sk-scaleout 2.0s infinite ease-in-out;
        }
        @-webkit-keyframes sk-scaleout {
            0% { -webkit-transform: scale(0) }
            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }
        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            } 100% {
                  -webkit-transform: scale(1.0);
                  transform: scale(1.0);
                  opacity: 0;
              }
        }
        .spinner {
            position: relative;
            margin-bottom:10px;
        }
        .double-bounce1, .double-bounce2 {
            border-radius: 50%;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
            animation: sk-bounce 2.0s infinite ease-in-out;
        }
        .double-bounce2 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }
        @-webkit-keyframes sk-bounce {
            0%, 100% { -webkit-transform: scale(0.0) }
            50% { -webkit-transform: scale(1.0) }
        }
        @keyframes sk-bounce {
            0%, 100% {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            } 50% {
                  transform: scale(1.0);
                  -webkit-transform: scale(1.0);
              }
        }
    </style>
     <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 10px; /* Add space around cell content */
        }
        .card-bg {
            background-image: url({{ asset('images/bg-gold.jpg')}});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <script>
        // Predefined lists of names
        var firstNames = ["Benjamin", "Charlotte", "Samuel", "Lily", "Alexander", "Grace", "Noah", "Mia", "Ethan", "Amelia", "Caleb", "Harper", "Owen", "Emily", "Matthew", "Abigail", "Liam", "Chloe", "Joseph", "Scarlett","John", "Emma", "Michael", "Sophia", "William", "Olivia", "James", "Ava", "Daniel", "Isabella"];
        var lastNames = ["Jacob", "Ava", "Ethan", "Olivia", "Mason", "Isabella", "William", "Sophia", "Aiden", "Mia", "Logan", "Harper", "Noah", "Emma", "Jackson", "Charlotte", "Caleb", "Amelia", "Elijah", "Abigail","Smith", "Johnson", "Brown", "Williams", "Jones", "Davis", "Miller", "Wilson", "Moore", "Taylor"];

        // Function to add a new row with a random username and number above existing rows
        function addNewUser(tableId) {
            var table = document.getElementById(tableId);
            var rowCount = table.rows.length;

            if (rowCount >= 11) {
                // Remove the last row if the limit is reached
                table.deleteRow(rowCount - 1);
            }

            var newRow = table.insertRow(1); // Insert above the 1st row (header row)

            var usernameCell = newRow.insertCell(0);
            var numberCell = newRow.insertCell(1);

            // Generate random username and number using predefined names
            var randomFirstName = firstNames[Math.floor(Math.random() * firstNames.length)];
            var randomLastName = lastNames[Math.floor(Math.random() * lastNames.length)];
            var randomUsername = randomFirstName + randomLastName; // Add a space between first and last name
            var randomNumber = "€" + " " + Math.floor(Math.random() * 30000);


            // Set the text color to white for the newly created cells
            usernameCell.innerHTML = randomUsername;
            usernameCell.style.color = "white";

            numberCell.innerHTML = randomNumber;
            numberCell.style.color = "white";

            // usernameCell.innerHTML = randomUsername;
            // numberCell.innerHTML = randomNumber;
        }



        // Add a new row to each table every 2 seconds
        setInterval(function () {
            addNewUser("userTable1");
            addNewUser("userTable2");
        }, 2000);
    </script>
</head>
<body>
<!--<div class="pull-right" id="google_translate_element"></div>-->
<div class="main-wrapper">
    <header class="header-style1">
        <div class="navbar-default" style="">
            <!-- Start Top Search -->
            <nav class="nav-mobile bg-light">
                <div class="">
                    <div class="row m-0 align-items-center" >
                        <div class="col-6 col-md-6 p-3 text-center btn-wrapper border-right">
                            <a href="{{ route('login') }}" type="button" class="btn btn-block px-0"> LOGIN</a>
                        </div>
                        <div class="col-6 col-md-6 p-3 text-center btn-wrapper">
                            <a href="{{ route('register') }}" type="button" class="btn btn-block px-0"> REGISTER</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Top Search -->
            <div class="px-3">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12">

                        <div class="menu_area alt-font">
                            <nav class="navbar navbar-expand-lg navbar-light no-padding">
                                <div class="navbar-header navbar-header-custom">
                                    <!-- Start Logo -->
                                    <a href="{{ route('/') }}" class="navbar-brand logo5"><img src="{{ asset('images/index/logo.png') }}" alt="logo" id="logo"></a>
                                    <!-- End Logo -->
                                </div>
                                <div class="navbar-toggler" style="background-color:#999999; color:#FFFFFF">
                                    <center><small style="font-size:0.4em"></small></center>
                                </div>
                                <!-- Menu Area -->
                                <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                    <li><a href=""> HEIM</a>
                                    </li>
                                    <li> <a  href="{{ route('login') }}">NEUE INVESTITION</a>
                                    </li>
                                    <li><a  href="{{ route('login') }}">ANMELDUNG</a></li>
                                    <li><a  href="{{ route('register') }}">BENUTZERKONTO ERSTELLEN</a></li>
                                    <li><a href="{{ route('about') }}">ÜBER UNS</a>

                                    </li>
                                    <li><a href="{{ route('dashboard') }}">PLATTFORMEN</a>
                                    </li>
                                    <li><a href="https://paxful.com/buy-bitcoin" style="color:#FFF; background-color:#09C">BITCOIN KAUFEN</a>
                                    </li>
                                </ul>
                                <!-- End Menu Area -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header section -->
    <div class="mt-5 pt-5 px-3" style="width:100%; background-color:#000">
        <div class="container mt-5">
            <div class="index_wrapper fullscreen custom-controls custom-paragraph">
                <div id="index_2" class="index fullscreenbanner" style="display: none;" data-version="5.4.5">
                    <ul>
                        <li data-transition="parallaxtoright">
                            <!-- Overlay -->
                            <div class="opacity-extra-medium bg-black z-index-1"></div>
                            <img src="{{ asset('images/index/medical/slider/slide19.jpg') }}" alt="slide1" class="rev-slidebg">
                            <!-- START LAYER 1 -->
                            <center>
                                <div class="tp-caption tp-resizeme max-style alt-font" id="slide-1-layer-1" data-x="['left','left','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['40','40','0','0']" data-voffset="['-100','-100','-100','-120']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap; color: #fff; font-weight: 700; text-transform: uppercase; padding-top:150px">V9AI<span></span>
                                </div>
                            </center>
                            <!-- END LAYER 1 -->
                            <!-- LAYER NR. 2 -->
                            <center>
                                <div class="tp-caption tp-resizeme slider-text" id="slide-1-layer-2" data-x="['left','left','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['45','45','10','10']" data-voffset="['-20','-20','-20','-40']" data-fontsize="['18','20','20','20']" data-lineheight="['30','30','28','28']" data-width="none" data-height="none" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; color: #fff; line-height: 22px;">
                                    <p style="display:none" class="white-space xs-padding-15px-lr">
                                        V9AI Ranks up with Over 250 perpetual and quarterly Bitcoin markets index as the best bitcoin investment service.
                                    </p>
                                </div>
                            </center>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-3" data-x="['left','left','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['40','40','0','0']" data-voffset="['65','65','65','65']" data-fontsize="['14','14','14','14']" data-lineheight="['24','24','24','24']" data-width="none" data-height="none" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; line-height: 22px;">
                            </div>
                        </li>
                        <li data-transition="parallaxtoright">
                            <!-- Overlay -->
                            <div class="opacity-extra-medium bg-black z-index-1"></div>
                            <img src="{{ asset('images/index/medical/slider/slide20.jpg') }}" alt="slide2" class="rev-slidebg">
                            <!-- START LAYER 1 -->
                            <div class="tp-caption tp-resizeme max-style alt-font" id="slide-2-layer-1" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','0','0','0']" data-voffset="['-100','-100','-100','-120']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap; color: #fff; font-weight: 600; text-transform: uppercase; padding-top:150px">TRADE<span> ANYWHERE & </span>ANYTIME
                            </div>
                            <!-- END LAYER 1 -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme slider-text" id="slide-2-layer-2" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','0','0','0']" data-voffset="['-20','-20','-20','-40']" data-fontsize="['18','20','20','20']" data-lineheight="['30','30','28','28']" data-width="none" data-height="none" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; color: #fff; text-align: center;">
                                <p class="white-space text-center xs-padding-15px-lr" style="display:none"> Advanced client portal to monitor your trading in real-time, Superior Virtual Private Servers (VPS) solutions for Expert Advisors (EAs) , scalping and auto-trading</p>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme" id="slide-2-layer-3" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','0','0','0']" data-voffset="['65','65','65','65']" data-fontsize="['18','18','14','14']" data-lineheight="['26','26','22','22']" data-width="none" data-height="none" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; line-height: 22px;">
                            </div>
                        </li>
                        <li data-transition="parallaxtoright">
                            <!-- Overlay -->
                            <div class="opacity-extra-medium bg-black z-index-1"></div>
                            <img src="{{ asset('images/index/medical/slider/slide18.jpg') }}" alt="slide3" class="rev-slidebg">
                            <!-- START LAYER 1 -->
                            <div class="tp-caption tp-resizeme max-style alt-font" id="slide-3-layer-1" data-x="['right','right','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['40','40','0','0']" data-voffset="['-100','-100','-100','-120']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap; color: #fff; font-weight: 700; text-transform: uppercase; padding-top:150px">ADVANCED<span>TRADING </span> SYSTEM
                            </div>
                            <!-- END LAYER 1 -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme slider-text" id="slide-3-layer-2" data-x="['right','right','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['40','40','10','10']" data-voffset="['-20','-20','-20','-40']" data-fontsize="['18','20','20','20']" data-lineheight="['30','30','28','28']" data-width="none" data-height="none" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; color: #fff; line-height: 22px; text-align: right;">
                                <p class="white-space text-right xs-padding-15px-lr" style="display:none"> Globally Regulated Segregated Client Funds with many Years of Trading Experience </p>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme" id="slide-3-layer-3" data-x="['right','right','center','center']" data-y="['middle','middle','middle','middle']" data-hoffset="['40','40','0','0']" data-voffset="['65','65','65','65']" data-fontsize="['18','18','14','14']" data-lineheight="['26','26','22','22']" data-width="none" data-height="none" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; line-height: 22px;"><a href="/?a=signup" class="butn theme"><span>OPEN ACCOUNT</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mx-4">
                <!--<div style="width:100%; background-position:center; background-repeat:no-repeat; background-image:url(files/overlay.png); background-position:center; background-color:#000">-->
                <!--    <video style="width:100%;  height:350px" autoplay loop muted playsinline poster="files/video.png">-->
                <!--        <source  style="width:100%" src="videoplay.m4v" type="video/mp4">-->
                <!--    </video>-->
                <!--</div>-->
                <div class="container px-4">
                    <div  style="background-color:#006699;">
                        <div style="width:100%; padding:20px; background-color:#000000">
                            <div style="height:120px; overflow:hidden; width:100%">
                                <div data-background-color="#000000" data-currency="gbp" data-coin-id="bitcoin" data-locale="en" data-height="200" data-width="" class="coingecko-coin-price-chart-widget"></div>
                                <script src="https://widgets.coingecko.com/div/coingecko-coin-price-chart-widget-div.js"></script>
                            </div>
                            <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
                            <div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,3408,2010" currency="USD" theme="dark" transparent="true" show-symbol-logo="true" style="margin-left:-180px"></div>
                        </div>
                        <!--<video autoplay loop muted playsinline poster="files/video.png" width="100%">-->
                        <!--    <source  src="video.m4v" type="video/mp4">-->
                        <!--</video>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div  style="background-color:#0C3; width:50%; float:left; color:#FFFFFF; padding:20px; text-align:center">-->
    <!--            <a href="{{ route('dashboard') }}" style="width:100%; color:#FFFFFF; text-decoration:none">   OPEN ACCOUNT</a>-->
    <!--        </div>-->
    <!--        <div style="background-color:#F30; width:50%; float:left; color:#FFFFFF; padding:20px; text-align:center">-->
    <!--            <a href="{{ route('dashboard') }}" style="width:100%; color:#FFFFFF; text-decoration:none">  LOGIN ACCOUNT</a>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- start home slider -->
    <!-- end home slider -->
    <div data-jarallax='{"speed": 0.6}' data-jarallax-video="https://www.youtube.com/watch?v=waTMQYI9BuU" style=" background-color:#1D2331">
        <!--<div class="row" style=" overflow:hidden; background-color:#1D2331; padding-bottom:0px; padding-top:0px"   data-overlay-dark="3">-->
        <!--    <div class="container">-->
        <!--        <div style="height:500px; overflow:hidden; border:none; background-color:#1D2331">-->
        <!--            <div style="height:669px; background-color:#000; overflow:hidden; box-sizing: border-box;  text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #000; padding: 0px; margin: 0px; width: 100%;">-->
                        <!--<div style="height:649px; padding:0px; margin:0px; width: 100%; background-color:#000;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0; background-color: #000;"></iframe></div>-->
                        <!--<div style="color: #626B7F;background-color:#000; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;background-color:#000;"></div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
<!-- Start Info Section -->
<section>
    <div class="container">
        <div class="row margin-10px-bottom sm-margin-30px-bottom">
            <!--<div class="col-lg-6 col-md-12">-->
            <!--    <img src="{{ asset('images/index/mt4-trading.jpg') }}" alt="" class="border-radius-5 box-shadow-primary" style="box-shadow:none">-->
            <!--</div>-->
            <div class="col-lg-6 col-md-12" style="background-image:url(images/index/medical/holder.png);  background-position:bottom; margin-top:-40px;">
                <div class="section-heading half left">
                    <br /><br /><br />
                    <h4 style="color:#FFF">CFD-Handelsplattformen <span style="color:#FFFFFF"></span></h4>
                </div>
                <div style="color:#FFFFFF">  Our <strong style="color:#FFF; background:#00CC33">&nbsp;Buy&nbsp;</strong> / <strong style="color:#FFF; background:#F63">&nbsp; Sell&nbsp;</strong>&nbsp;
                    Der Version9autotraderobot hat sich als das effektivste und sicherste Handelssystem erwiesen, dessen Gewinne garantiert sind. Das System, das nur für hochrangige Krypto Händler ist, ist seit Jahren zuverlässig und sehr sicher. Das System ist nur für hochrangige Krypto Händler.
                </div>
                <ul class="list-style-5 margin-20px-bottom" style="color:#FFFFFF">
                    <center>
                        <h3 style="color:#FFFFFF">&nbsp;</h3>
                        <h3 style="color:#FFFFFF">WAS WIR ANBIETEN</h3>
                    </center>
                    <li>Bitcoin-Investition</li>
                    <li>Forex- und CDF-Handel</li>
                    <li>Transparent und neutral</li>
                    <li>Aktienmarketing und Investitionen</li>
                </ul>
                <a style="width:270px" class="butn medium theme" href="/?a=login"><span>OFFENER ACCOUNT </span></a>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</section>
<!-- End Info Section -->
<section style="background-color:#FFFFFF">
    <div class="container">
        <div class="row">
            <div class="col-12" style="line-height:15px; font-size:15px; padding-left:20px; text-align:left;color:#333333">
                <center>
                    <h2 style="color:#333333">
                        <div class="text-white font-size18 xs-font-size16 font-weight-500" style="color:#333333; text-transform:capitalize"><font color="#666666">Tools Zur Plattformanalyse </font></div>
                    </h2>
                </center>
                <p><small style="text-align:left">Verbringen Sie weniger Zeit mit der Analyse und mehr Zeit mit dem automatischen Blockchain Handelstool V9AI. Sparen Sie Zeit mit umsetzbaren Handelsmöglichkeiten, identifizierten Mustern, eingehender Volatilitätsanalyse und technischer Intraday-Analyse, die alle auf V9AI enthalten sind. Leistungsstarke Handelsplattformen wurden entwickelt, um die anspruchsvollen Anforderungen von Devisenhändlern zu erfüllen, die nach maximaler Leistung, Flexibilität und Geschwindigkeit suchen.</small>
                </p>
            </div>
            <div class="col-12" style="line-height:15px; padding-left:20px; text-align:left">
                <p><small style="text-align:left; color:#996; text-transform:uppercase">ERHALTEN SIE EINEN TIEFEREN EINBLICK IN IHR HANDELSVERHALTEN UND IHRE VERGANGENE LEISTUNG MIT UNSERER EXKLUSIVEN TECHNOLOGIE, REGISTRIEREN SIE SICH, MELDEN SIE SICH BEI IHREM PRIVATEN KONTO AN, STARTEN SIE EINEN HANDELSPLAN.</small></p>
                <center>
                    <!--<p><img src="images/index/emblem.png" width="540" height="130" alt="logo" /></p>-->
                </center>
            </div>
            <div class="col-12" style="line-height:15px; font-size:15px; padding-left:20px; text-align:left">
                <p><small style="text-align:left">Als Handelspartner von LONDON STOCK basiert unser Erfolg auf einer Reihe von Grundwerten. Dazu gehören die Bereitstellung wettbewerbsfähiger Maklergebühren durch enge Spreads, die Gewährleistung einer blitzschnellen Ausführung, der Zugang zu fortschrittlichen Handelsplattformen mit einer breiten Produktpalette und ein außergewöhnlicher Kundenservice. Die intelligente Benutzeroberfläche verbessert das gesamte Handelserlebnis und bietet eine Reihe beeindruckender Zusatzfunktionen.</small>
                </p>
            </div>
        </div>
    </div>
</section>
<section style="padding:0px; margin:0px;">
    <div class="container">
        <!-- Start Product Section -->
        <div class="row margin-90px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
            <div class="col-lg-5 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
                <!--<img src="images/index/laptop.png" width="900" height="450" alt="bitcoin" />-->
                <hr />
                <p>&nbsp;</p>
                <p>
                <center>
                     <div style="width:100%; background-position:center; background-repeat:no-repeat; background-image:url(files/overlay.png); background-position:center; background-color:#000">
                    <!--<video style="width:100%;  height:350px" autoplay loop muted playsinline poster="files/video.png">-->
                        <source  style="width:100%" src="videoplay.m4v" type="video/mp4">
                    </video>
                </div>
                    <!--<img src="images/index/business5.png" width="700" height="400" alt="bitcoin" />-->
                </center>
                </p>
                <p>&nbsp;</p>
                <p>
                <center>
                    <!--<img src="images/index/miningfarm.png" width="700" height="525" alt="bitcoin" />-->
                </center>
                </p>
            </div>
            <div class="col-lg-7 padding-40px-left sm-padding-15px-lr">
                <div>
                    <h3 > Das komplette Krypto-, FX- und CFD-Handelserlebnis </h3>
                    <div style=" color:#FFF; border-bottom:dotted 1px #FFFFFF; font-weight:bolder; font-size:14px;">
                        <strong style="color:#666">Preisgekrönte Plattformen, enge Spreads, niedrige Provisionen und engagierter Support. Erfahren Sie, warum wir für 500.000 Händler auf der ganzen Welt der Handelspartner der Wahl sind. Wir leben und atmen die Märkte. Seit vielen Jahren helfen wir Händlern, ihre Ambitionen zu verwirklichen und weiterhin Maßstäbe in der Branche zu setzen.</strong>
                        <p>&nbsp;</p>
                        <ul class="list-style-5 shop-category no-margin" style="box-shadow:none; border:none">
                            <div style="width:100%; height:200px; background-color:#FFFFFF; overflow:hidden">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_ee2cd"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.widget(
                                            {
                                                "width": 500,
                                                "height": 300,
                                                "symbol": "NASDAQ:AAPL",
                                                "interval": "D",
                                                "timezone": "Etc/UTC",
                                                "theme": "light",
                                                "style": "1",
                                                "locale": "en",
                                                "toolbar_bg": "#f1f3f6",
                                                "enable_publishing": false,
                                                "allow_symbol_change": true,
                                                "container_id": "tradingview_ee2cd"
                                            }
                                        );
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                            <center><small style="color:#996">Konzipiert für sofortige Kontrolle, egal wo Sie sind, genießen Sie One-Tap-Trading, intelligente Kauf-/Verkaufssignale und ein anpassbares Layout, das zu Ihrem Handelsstil passt. Profitieren Sie von verbesserter Liquidität mit variablen Spreads und Margen ab nur 10 %.</small></center>
                            <hr />
                            <center>
                                <h2 style="color:#333333">
                                    <div class="text-white font-size18 xs-font-size16 font-weight-500" style="color:#333333"><font color="#666666">UNSERE FINANZDIENSTLEISTUNGEN</font></div>
                                </h2>
                            </center>
                            <hr />
                            <li><a href="javascript:void(0)">BITCOIN-INVESTITION</a></li>
                            <li><a href="javascript:void(0)">FOREX- UND CDF-HANDEL</a></li>
                            <li><a href="javascript:void(0)">LIVE-STUNDENHANDEL</a></li>
                            <li><a href="javascript:void(0)">AKTIENMARKTPROGNOSE</a></li>
                            <li><a href="javascript:void(0)">AUSBILDUNG UND KURSE</a></li>
                        </ul>
                    </div>
                    <div></div>
                    <p>
                        <small>
                            Unser Erfolg basiert auf verschiedenen Grundwerten. Zu den Werten gehören die Bereitstellung wettbewerbsfähiger Maklergebühren durch enge Spreads, die Gewährleistung einer blitzschnellen Ausführung, der Zugang zu fortschrittlichen Handelsplattformen mit einem umfangreichen Portfolio an Finanzprodukten und ein außergewöhnlicher Kundenservice.</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                <div class="project-grid-style2">
                    <div class="project-details">
                        <!--<img src="images/index/business2.png" alt="">-->
                        <div class="portfolio-icon">
                        </div>
                        <div class="portfolio-post-border"></div>
                    </div>
                    <div class="portfolio-title">
                        <h4 style="text-align:left; color:#09F">
                            Unser Marktstratege

                        </h4>
                        <p style="text-align:left; color:#000">
                            DIE MARKTSTRATEGEN VON V9AI KÖNNEN MIT IHNEN AN DER ENTWICKLUNG EINES HANDELSPLANS ARBEITEN.
                        </p>
                        <p style="text-align:left">&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                <div class="project-grid-style2">
                    <div class="project-details">
                        <!--<img src="images/index/business3.png" alt="">-->
                        <div class="portfolio-icon">
                        </div>
                        <div class="portfolio-post-border"></div>
                    </div>
                    <div class="portfolio-title">
                        <p style="text-align:left; color:#000">BLEIBEN SIE MIT ECHTZEIT-MARKTEINBLICKEN UND UMSETZBAREN HANDELSIDEEN VON UNSEREM FORSCHUNGSTEAM AUF DEM LAUFENDEN. </p>
                        <p style="text-align:left">&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom"></div>
        </div>
    </div>
</section>
<section class="pb-5" style="color:#000; background-color:#000; padding: 0px;">
    <div class="container">
        <div class="row">
            <div style="width:100%">
                <div>
                    <center><p>&nbsp;</p>
                        <h3><strong style="font-weight:bolder; color:#FFFFFF;">Handelspläne</strong></h3>
                        <!--<p>&nbsp;</p>-->
                        <!--<p>&nbsp;</p>-->
                    </center>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 sm-margin-0px-bottom xs-margin-0px-bottom"></div>
            @foreach ($plans as $plan)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card text-center card-bg bg-transparent border-primary shadow-lg shadow-primary">
                        <div class="card-body">
                            <h4 class="card-title text-primary">{{ $plan->name }}</h4>
                            <ul class="list-group mx-3 text-white">
                                <li class="list-group-item bg-transparent border-dark border-top-0 border-left-0 border-right-0">Return {{ $plan->roi }}%</li>
                                <li class="list-group-item bg-transparent border-dark border-top-0 border-left-0 border-right-0">{{ $plan->frequency }}</li>
                                <li class="list-group-item bg-transparent border-dark border-top-0 border-left-0 border-right-0">For {{ $plan->duration }} days</li>
                                <li class="list-group-item bg-transparent border-dark border-top-0 border-left-0 border-right-0">Total {{ $plan->roi * $plan->duration }}% + <span class="badge bg-success font-size13 p-1">Capital</span></li>
                            </ul>
                            <h6 class="card-text text-primary mt-4">€{{ $plan->min }}- €{{ $plan->max }}</h6>

                            <a href="{{ route('deposit') }}" class="btn btn-primary">INVESTIEREN NOW</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--<section style="color: #000; background-color: #000; margin-bottom: 0;">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-2 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom"></div>-->

<!--            <div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">-->
<!--                <div style="background-color: #FFF; width: 100%;">-->
<!--                    <h3 class="bg-theme text-white no-margin font-size18" style="text-align: center; padding: 10px;">Neueste Einzahlungen</h3>-->
<!--                    <table id="userTable1" style="width: 100%;">-->
<!--                        <tr>-->
<!--                            <th>Nutzername</th>-->
<!--                            <th>Menge</th>-->
<!--                        </tr>-->
                        <!-- Add your table rows here -->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">-->
<!--                <div style="background-color: #FFF; width: 100%;">-->
<!--                    <h3 class="bg-theme text-white no-margin font-size18" style="text-align: center; padding: 10px;">Neueste Auszahlungen</h3>-->
<!--                    <table id="userTable2" style="width: 100%;">-->
<!--                        <tr>-->
<!--                            <th>Nutzername</th>-->
<!--                            <th>Menge</th>-->
<!--                        </tr>-->
                        <!-- Add your table rows here -->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section style="color: #000; background-color: #000; margin-top: 1000;">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-2 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom"></div>-->

<!--            <div class="col-lg-10 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">-->
<!--                <div style="height: 649px; padding: 0; margin: 0; width: 100%; background-color: #000;">-->
<!--                    <iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border: 0; margin: 0; padding: 0; background-color: #000;"></iframe>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section style="color: #000; background-color: #000; padding: 0; ">
    <div class="container">
        <div class="row">

            <div class="col-lg-2 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom"></div>

            <div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
                <div style="background-color: #000; width: 100%;">
                    <h3 class="bg-theme text-white no-margin font-size18" style="text-align: center; padding: 10px;">Neueste Einzahlungen</h3>
                    <table id="userTable1" style="width: 100%;">
                        <tr>
                            <th style="color: white;">Nutzername</th>
                            <th style="color: white;">Menge</th>
                        </tr>
                        <!-- Add your table rows here -->
                    </table>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
                <div style="background-color: #000; width: 100%;">
                    <h3 class="bg-theme text-white no-margin font-size18" style="text-align: center; padding: 10px;">Neueste Auszahlungen</h3>
                    <table id="userTable2" style="width: 100%;">
                        <tr>
                            <th style="color: white;">Nutzername</th>
                            <th style="color: white;">Menge</th>
                        </tr>
                        <!-- Add your table rows here -->
                    </table>
                </div>
            </div>

           <div class="col-lg-2 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom"></div>

            <div class="col-lg-10 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
                <div style="height: 649px; padding: 0; margin: 0; width: 100%; background-color: #000;">
                    <iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border: 0; margin: 0; padding: 0; background-color: #000;"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<section style=" padding-bottom:50px; page:50px; margin:0px; background-color:#036; background-size:contain; background-repeat:no-repeat;">
    <div class="container">
        <!-- Start Product Section -->
        <div class="row margin-90px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
            <div class="col-lg-7 padding-40px-left sm-padding-15px-lr">
                <div>
                    <h1 style="color:#FFFFFF">Standard-Investmenthandelskonto</h1>
                    <div style=" color:#FFF; border-bottom:dotted 1px #FFFFFF; font-weight:bolder; font-size:14px;">
                        <strong style="color:#FFFFFF">
                           Das Standardkonto ist ideal für erfahrene Trader und bietet äußerst wettbewerbsfähige Spreads ohne Provisionen. Ihre Kosten sind der Spread. Fühlen Sie sich frei, in äußerst wettbewerbsfähige, transparente und zuverlässige Spreads zu investieren
                        </strong>
                        <p>&nbsp;</p>
                    </div>
                    <div></div>
                    <p>
                        <small style="color:#FFFFFF">
                            Greifen Sie auf institutionelle Liquidität zu, ohne Preismanipulation, ohne Handelsschalter und ohne Requotes. Eine preisgekrönte Handelsausführung mit geringer Latenz unter 38* Millisekunden. Wird von unserem Equinix NY4-Anlagenservercluster bereitgestellt.</small>
                    </p>
                </div>
            </div>
            <div class="col-lg-5 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
                <!--<img src="images/index/screen_trade.png" width="440" height="360" alt="bitcoin" />-->
                <br />
                <a class="butn theme margin-20px-top medium" href="/?a=login" style="width:100%; color:#FFFFFF; border:none; padding:20px; background-color:#39F"><span>Mehr lesen</span></a><br />
            </div>
        </div>
    </div>
</section>

<section style="background-color:#FFFFFF">
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-7 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">-->
                <!--<img src="images/index/sub.jpg" alt="" />-->
            <!--</div>-->
            <div class="col-md-12">
                    <div class="padding-30px-left sm-no-padding">
                    <h4 class="sm-margin-lr-auto xs-width-100">Entdecken Sie die Vorteile des Handels auf MT4 mit Coinex Digital</h4>
                    <p>Wenn Sie mit dem High-Tech-Blockchain-Tool V9AI handeln, profitieren Sie von der Zuverlässigkeit eines vertrauenswürdigen Systems, extrem engen Spreads, außergewöhnlichen Ausführungen, maßgeschneiderten Trader-Tools und mehr. Außerdem optimieren wir Ihre Strategie mit einer Suite von über 20 Fachberatern und benutzerdefinierten Indikatoren, um Ihnen professionelle Kontrolle und Flexibilität über Ihre Handelsstrategie zu geben.</p>
                    <ul class="list-style-5">
                        <li>V9AI WebTrader entspricht den Ausführungsfähigkeiten der Blockchain-Desktopanwendung</li>
                        <li>Es bietet den Komfort einer voll funktionsfähigen Anwendung, die ideal ist, wenn Sie schnell auf die Finanzmärkte zugreifen möchten</li>
                        <li>Einfacher Handel (kein Download erforderlich und Start in Sekunden). Komplette Suite von Handelstools und -vorgängen
                        </li>
                        <li>Mehrere Auftragstypen und Ausführungsmodi. Preisangebote in Echtzeit. Datensynchronisierung auf allen Plattformen
                        </li>
                        <li>Online-Support rund um die Uhr und persönlicher Account Manager. Mehrsprachiger Support
                        </li>
                    </ul>
                    <a class="butn theme margin-20px-top medium" href="javascript:void(0)"><span>Mehr lesen</span></a>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
</section>
<section class="parallax" style="background-color:#000">
    <div class="container">
        <div class="row" style="padding:20px;">
            <center>
                <h3><strong style="font-weight:bolder; color:#FFFFFF; text-transform:uppercase">VERPASSEN SIE KEINE GEWINNE.
                    </strong>
                </h3>
                <p style="color:#FFFFFF">
                    Wenn Sie Ihren Trade eröffnen, platzieren wir einen Trailing Stop, der sich mit Ihrem Gewinn bewegt.
                </p>
                <p>&nbsp;</p>
            </center>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                <div class="project-grid-style2">
                    <div class="project-details">
                        <!--<img src="images/index/business4.png" alt="">-->
                        <div class="portfolio-icon">
                        </div>
                        <div class="portfolio-post-border"></div>
                    </div>
                    <div class="portfolio-title">
                        <h4 style="text-align:left; color:#09F">
                            Nutzen Sie die Tools optimal, um erfolgreich zu sein
                        </h4>
                        <p style="text-align:left; color:#FFFFFF">
                           PERSONALISIERTE DEMONSTRATIONEN UNSERER FORTSCHRITTLICHEN CHARTING- UND HANDELSTOOLS
                        </p>
                        <p style="text-align:left">&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                <div class="project-grid-style2">
                    <div class="project-details">
                        <!--<img src="images/index/business5.png" alt="">-->
                        <div class="portfolio-icon">
                        </div>
                        <div class="portfolio-post-border"></div>
                    </div>
                    <div class="portfolio-title">
                        <h4 style="text-align:left; color:#09F">
                           Planen Sie Ihren Handel und handeln Sie dann Ihren Plan
                        </h4>
                        <p style="text-align:left; color:#FFFFFF">ERFAHREN SIE, WIE SIE TECHNISCHE UND FUNDAMENTALE ANALYSEN NUTZEN, UM FUNDIERTE ENTSCHEIDUNGEN ZU TREFFEN </p>
                        <p style="text-align:left">&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                <div class="project-grid-style2">
                    <div class="project-details">
                        <!--<img src="images/index/business6.png" alt="">-->
                        <div class="portfolio-icon">
                        </div>
                        <div class="portfolio-post-border"></div>
                    </div>
                    <div class="portfolio-title">
                        <h4 style="text-align:left; color:#09F">Verbessern Sie Ihre Handelsleistung</h4>
                        <p style="text-align:left; color:#FFF">
                            KONTINUIERLICHE UNTERSTÜTZUNG, UM SICHERZUSTELLEN, DASS IHRE HANDELSSTRATEGIE IHREN HANDELSZIELEN ENTSPRICHT
                        </p>
                        <p style="text-align:left">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12" style="line-height:15px; font-size:15px; padding-left:20px; text-align:left;color:#333333">
                <center>
                    <h2 style="color:#333333">
                        <div class="text-white font-size18 xs-font-size16 font-weight-500" style="color:#333333"><font color="#666666">Handeln Sie mit einem Broker, der sich Ihrem Erfolg verschrieben hat. Einzigartige Ressourcen, die Ihnen helfen sollen, das Beste aus jedem Handel herauszuholen</font></div>
                    </h2>
                </center>
            </div>
            <div class="col-lg-3 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
                <p class="text-light-gray">
                <center>
                    <img src="images/index/coin1.svg" alt="coin" />
                    <br />
                    <strong style="color:#000">
                        Globale Märkte
                    </strong>
                </center>
                <div>
                   Greifen Sie auf über 80 Währungspaare sowie Gold und Silber mit außergewöhnlicher Ausführung zu
                </div>
                </p>
            </div>
            <div class="col-lg-1 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
            </div>
            <div class="col-lg-3 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
                <p class="text-light-gray">
                <center>
                    <img src="images/index/coin2.svg" alt="coin" />
                    <br />
                    <strong style="color:#000">
                        Integrierte Handelsideen
                    </strong>
                </center>
                <div>
                    Premium-Händlerressourcen von Drittanbietern, bereitgestellt von Trading Central
                </div>
                </p>
            </div>
            <div class="col-lg-1 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
            </div>
            <div class="col-lg-3 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
                <p class="text-light-gray">
                <center>
                    <img src="images/index/coin3.svg" alt="coin" />
                    <br />
                    <strong style="color:#000">
                        Leistungsstarke Plattformen
                    </strong>
                </center>
                <div>
                    Führen Sie auf unseren innovativen und funktionsreichen Plattformen ganz einfach Trades durch und verwalten Sie diese
                </div>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- start about section -->
<!-- end about section -->
<section style="background-color:#E4E4E4" >
    <div class="container">
        <div class="row">
            <div class="col-12" style="line-height:15px; font-size:15px; padding-left:20px; text-align:left;color:#333333">
                <center>
                    <h1 style="color:#333333">
                        <div class="text-white font-size18 xs-font-size22 font-weight-500" style="color:#000">
                            <p><font color="#000">Wir sind bestrebt, die beste auf dem Markt verfügbare Ausführung mit der höchsten Ausführungsgeschwindigkeit und -qualität zu liefern, sodass Sie sich auf eine stets schnelle und genaue Preisgestaltung verlassen können. </font></p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </h1>
                </center>
            </div>
            <div class="col-lg-5 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
                <p class="text-light-gray">
                <center>
                    <br />
                    <strong style="color:#000">
                        Schnelle Trades, konsistente Ausführung
                    </strong>
                </center>
                <div>
                    Wir haben jeden Aspekt des Handelsprozesses automatisiert, mit dem Ziel sicherzustellen, dass Ihre Geschäfte so schnell wie möglich zu dem von Ihnen erwarteten Preis – oder einem besseren – ausgeführt werden.
                </div>
                </p>
            </div>
            <div class="col-lg-1 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
            </div>
            <div class="col-lg-5 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
                <p class="text-light-gray">
                <center>
                    <br />
                    <strong style="color:#000">
                        Möglichkeit zur Preisverbesserung bei Limit-Orders
                    </strong>
                </center>
                <div>
                    Wenn sich der Markt zu Ihren Gunsten entwickelt, gibt unsere Handelstechnologie die Einsparungen automatisch weiter, indem Ihr Handel zu einem besseren Preis ausgeführt wird.
                </div>
                </p>
            </div>
            <div class="col-lg-1 sm-text-center sm-margin-30px-bottom" style="box-shadow:none">
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="margin-top:40px;">
                <center>  <a href="/?a=login">       <button style="background-color:#090; color:#FFFFFF; font-weight:bolder" href="javascript:void(0)" class="butn text-uppercase"><span> INVESTITIONEN MACHEN</span></button></a></center>
            </div>
        </div>
    </div>
</section>
<section style="background-color:#FFFFFF">
    <div class="container">
        <div class="row">
            <div class="col-12" style="line-height:15px; font-size:15px; padding-left:20px; text-align:left;color:#333333">
                <center>
                    <h2 style="color:#333333">
                        <div class="text-white font-size18 xs-font-size16 font-weight-500" style="color:#333333"><font color="#666666">Umfangreicher Support</font></div>
                    </h2>
                </center>
                <p><small style="text-align:left">Die V9AI-Börse ist in 38 Sprachen verfügbar und wird von mehr als 750 Brokern angeboten. Zu den unterstützten Instrumenten gehören CFDs, Futures und Forex. Händler und Investoren aus der ganzen Welt können die hochentwickelte Funktionalität über eine webbasierte Anwendung nutzen.</small></p>
            </div>
            <div class="col-12" style="line-height:15px; padding-left:20px; text-align:left">
                <p><small style="text-align:left; color:#996; text-transform:uppercase">ES STEHEN INTERAKTIVE DIAGRAMME UND EINE VIELZAHL VON INDIKATOREN ZUR VERFÜGUNG. V9AI ENTHÄLT EIN TECHNISCHES ANALYSEPAKET, DAS AUS 30 INTEGRIERTEN INDIKATOREN UND MEHR ALS 2.000 KOSTENLOSEN BENUTZERDEFINIERTEN INDIKATOREN SOWIE 700 KÄUFLICHEN INDIKATOREN BESTEHT.</small></p>
                <a class="butn theme margin-20px-top medium" href="/about"><span>Mehr lesen</span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="line-height:15px; padding-left:20px; text-align:left">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><small style="text-align:left; color:#666666; text-transform:uppercase">WIR STELLEN UNSEREN ANLEGERN MODERNSTE TECHNOLOGIE UND VIELSEITIGE SOFTWARE ZUR VERFÜGUNG. NACH DEM GROSSEN ERFOLG VON V9AI HAT METAQUOTES SEINEN ULTIMATIVEN NACHFOLGER ENTWICKELT, METATRADER5. WIR DEFINIEREN NEU, WAS ES BEDEUTET, ETWAS ÜBER FINANZEN ZU LERNEN – UND DAS BEDEUTET BILDUNGSRESSOURCEN, DIE FÜR DIE HEUTIGE ZEIT ENTWICKELT WURDEN.</small></p>
            </div>
            <div class="col-lg-1 col-md-6 offset-lg-1">
            </div>
            <div class="col-lg-10 col-md-6 offset-lg-1">
                <!--<img class="xzoom5 margin-30px-bottom" id="xzoom-magnific" src="images/index/building.png" xoriginal="images/index/shop/original/01_product.jpg" />-->
            </div>
            <div class="col-lg-3 col-md-6 offset-lg-1">
                <h3 class="footer-title-style6">In Kontakt kommen</h3>
                <ul class="footer-list-style3">
                    <li>
                        <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt"></i></span>
                        <span class="d-inline-block width-85 vertical-align-top padding-10px-left">
                        <strong>Eingetragene Geschäftsadresse:</strong>
                        <br />
                        65 Shearsmith Tower Cable Street London E1.
  </span>
                        <small>Standort auf der Google-Karte</small>
                        <br />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.7250552087094!2d-3.1907035843698366!3d51.499912779633966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e1c9bfa599a21%3A0x6fb9bdf12c51408e!2sCompanies%20House!5e0!3m2!1sen!2sng!4v1648044396234!5m2!1sen!2sng" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </li>
                    <li>
                        <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-mobile-alt"></i></span>
                    </li>
                    <li>
                        <span class="d-inline-block vertical-align-top font-size18"><i class="far fa-envelope"></i></span>
                        <span class="d-inline-block width-85 vertical-align-top padding-10px-left"><strong>E-Mail-Adresse</strong>
                        <br />
                        support@v9ai.de</span>
                    </li>
                    <li>
                        <span class="d-inline-block vertical-align-top font-size18"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- start footer section -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'af,am,ar,be,bg,bn,da,de,el,en,es,et,fa,fr,fy,ga,gd,hu,hy,id,is,it,iw,ja,ka,la,ml,ms,nl,pt,ro,ru,sk,sl,so,sq,sv,th,tr,uk,zh-CN,zh-TW,zu', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<footer style="padding-bottom:60px; background-image:url(images/index/features-section-bg.jpg); background-color:#003366">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom">
                <div class="padding-30px-right border-right xs-border-bottom xs-no-border-right  border-color-light-white xs-padding-30px-bottom xs-no-padding-right height-100">
                    <h3 class="footer-title-style7 text-white">v9ai.de</h3>
                    <p><img src="images/index/logo.png" width="1300" height="200" alt="logo" /></p>
                    <p><small style="color:#6CF; font-size:20px;">Von Anfang an hat v9ai.de erfolgreich expandiert, um Privatkunden und institutionelle Kunden in vielen Ländern zu bedienen, und wir wachsen weiter</small></p>
                    <p style=" padding-bottom:30px; border-bottom:dotted 1px #999933; color:#FFFFFF; margin-top:40px"  class="margin-20px-bottom">Handeln Sie ohne Kompromisse. Greifen Sie auf TradingView-Charts mit über 80 Indikatoren, Reuters-Newsfeeds, verhaltenswissenschaftliche Technologien und vieles mehr zu.</p>
                    <p style=" padding-bottom:30px; border-bottom:dotted 1px #999933; color:#CCC; font-size:14px;"  class="margin-20px-bottom">v9ai.de bietet keinen Service für Einwohner bestimmter Gerichtsbarkeiten an, die die dortigen Regeln und Verhaltensweisen nicht akzeptieren. Als Unternehmen halten wir uns an die Gesetze Ihrer Stadt und erwarten dies auch von unseren Kunden (Ihnen). Im Rahmen der FSCA-Zulassung erbringt v9ai.de Ausführungsdienstleistungen und schließt mit seinen Kunden Principal-to-Principal-Transaktionen zu den Preisen von v9ai.de ab. Diese Transaktionen werden nicht an einem gehandelt.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom">
                <h4 style="color:#FFFFFF; border:none; font-size:1.3em; text-decoration:none" >Site-Navigationen</h4>
                <p style="color:#FFFFFF; border:none; font-size:1em; text-decoration:none" >&nbsp;</p>
                <div class="padding-30px-right sm-no-padding-right border-right xs-border-bottom sm-no-border-right border-color-light-white xs-padding-30px-bottom height-100">
                    <p>
                    <ul class="footer-list" style="width:100%; padding-left:10px;">
                        <li>
                            <a href="/?a=home"> <span class="d-inline-block vertical-align-top font-size18"></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Investition
  &nbsp;</span></a>
                        </li>
                        <li>
                            <a href="/about"> <span class="d-inline-block vertical-align-top font-size18"></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Über die Website  &nbsp;&nbsp;</span></a>
                        </li>
                        <li>
                            <a href="/?a=support"> <span class="d-inline-block vertical-align-top font-size18"></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Kontaktiere uns</span></a>
                        </li>
                        <li>
                            <a href="/?a=rules"> <span class="d-inline-block vertical-align-top font-size18"></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Regeln &nbsp;&nbsp;</span></a>
                        </li>
                        <li>
                        <li>
                            <a href="/?a=login"> <span class="d-inline-block vertical-align-top font-size18"></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Armaturenbrett&nbsp;&nbsp;</span></a>
                        </li>
                        <li>
                            <a href="/?a=signup">   <span class="d-inline-block vertical-align-top font-size18"></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Registrieren&nbsp;&nbsp;</span></a>
                        </li>
                        <!--<li>-->
                        <!--    <a href="/?a=signup"> <span class="d-inline-block vertical-align-top font-size18"></span>-->
                        <!--        <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Make  Investment &nbsp;&nbsp;</span></a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <a href="/?a=forgot_password">  <span class="d-inline-block vertical-align-top font-size18"></span>-->
                        <!--        <span class="d-inline-block width-85 vertical-align-top padding-10px-left">login Account reset &nbsp;&nbsp;</span></a>-->
                        <!--</li>-->
                    </ul>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom">
                <div class="padding-30px-right border-right xs-border-bottom xs-no-border-right  border-color-light-white xs-padding-30px-bottom xs-no-padding-right height-100">
                    <h3 class="footer-title-style7 text-white">Kontaktdetails</h3>
                    <p>&nbsp;</p>
                    <ul class="footer-list">
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt text-theme-color"></i></span>
                            <span class="d-inline-block width-85 vertical-align-top padding-10px-left">65 Shearsmith Tower Cable Street London E1.
</span>
                        </li>
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="far fa-envelope text-theme-color"></i></span>
                            <span class="d-inline-block width-85 vertical-align-top padding-10px-left">support@v9ai.de</span>
                        </li>
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-globe text-theme-color"></i></span>
                            <span class="d-inline-block width-85 vertical-align-top padding-10px-left">www.v9ai.de</span>
                        </li>
                    </ul>
                    <div class="footer-social-icons small margin-15px-top"> </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main-wrapper section -->
<!-- Java script -->
<script src="{{ asset('js/index/core.min.js') }}"></script>
<!-- serch -->
<script src="{{ asset('js/index/search.js') }}"></script>
<!-- revolution slider js files start -->
<script src="{{ asset('js/index/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/index/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/index/revolution.extension.video.min.js') }}"></script>
<!-- revolution slider js files end -->
<!-- custom scripts -->
<script src="{{ asset('js/index/main.js') }}"></script>
<!-- contact form scripts -->
<script src="{{ asset('js/index/jquery.form.min.js') }}"></script>
<script src="{{ asset('js/index/jquery.rd-mailform.min.c.js') }}"></script>
<script src="{{ asset('js/index/jquery.appear.js') }}"></script>
<script src="{{ asset('js/index/swiper.min.js') }}"></script>
<script src="{{ asset('js/index/SwiperAnimation.min.js') }}"></script>
<script src="{{ asset('js/index/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/index/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/index/jarallax.min.js') }}"></script>
<script src="{{ asset('js/index/jarallax-video.min.js') }}"></script>
<script src="{{ asset('js/index/jquery.magnific-popup.min.js') }}</script>
         <!-- start footer section -->
         <script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'af,am,ar,be,bg,bn,da,de,el,en,es,et,fa,fr,fy,ga,gd,hu,hy,id,is,it,iw,ja,ka,la,ml,ms,nl,pt,ro,ru,sk,sl,so,sq,sv,th,tr,uk,zh-CN,zh-TW,zu', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- all js include end -->
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/653675e1f2439e1631e78192/1hdebousl';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--<script async src="https://telegram.org/js/telegram-widget.js?5"-->
<!--            data-telegram-share-url="https://your-website.com"-->
<!--            data-telegram-cta="Start chatting"-->
<!--            data-telegram-radius="10"-->
<!--            data-telegram-size="large"-->
<!--            data-telegram-to="your_telegram_username">-->
<!--    </script>-->
<!--<script type="text/javascript">-->
<!--    (function () {-->
<!--        var options = {-->
<!--            whatsapp: "+14124997570", // WhatsApp number-->
<!--            call_to_action: "Message us", // Call to action-->
<!--            position: "left", // Position may be 'right' or 'left'-->
<!--        };-->
<!--        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;-->
<!--        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';-->
<!--        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };-->
<!--        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);-->
<!--    })();-->
<!--</script>-->
</html>
