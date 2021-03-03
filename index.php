<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gridly Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicons/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link href="/assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet"  href="/assets/vendor/jquery.bxslider/jquery.bxslider.css">
        <link rel="stylesheet" href="/assets/css/override.css">
        <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
    .jumpnav{
        background: #000000;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        z-index: 999;
    }
    .jumpnav ul{
        margin: 0;
    }
    .jumpnav li{
        color: #FFFFFF;
        display: inline;
        margin: 0;
        padding: 0;
    }
    .jumpnav li a{
        color: #FFFFFF;
        padding-right: 10px;
    }
    .content .col .box{

            border: 1px solid red;
    }
</style>
    </head>
    <body id="grid<?php echo($_GET['grid']); ?>"  class="menu-closed">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="row jumpnav">
            <div class="container">
                <ul>
                    <li><a href="?grid=12">Grid 12</a></li>
                    <li><a href="?grid=16">Grid 16</a></li>
                    <li><a href="?grid=24">Grid 24</a></li>
                </ul>
            </div>
        </div>
        <button class="menu-btn hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
        </button>
        <div class="row">

            <div class="header">
                <section id="header" class="row">
                    <div class="col s12">
                        <a class="logo" href="/"><img src="/assets/favicons/mstile-150x150.png" alt="Gridly"></a>
                    </div>
                </section>
            </div>
            <div class="menu-container animate-all-slow">
                <nav id="nav" class="menu-nav">
                    <ul>
                        <li><a href="#"><span>Home</span></a></li>
                        <li><a href="#"><span>Link Two</span></a></li>
                        <li><a href="#"><span>Link Three</span></a></li>
                        <li><a href="#"><span>Link Four</span></a></li>
                        <li><a href="#"><span>Link Five</span></a></li>
                        <li><a href="#"><span>Link Six</span></a></li>
                        <li><a href="#"><span>Hidden Link</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <?php
            include("files/files.php");
        ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCLQJeveOKXbiepOT61dtZhTKym7tsWOPY"></script>
        <script src="/assets/vendor/fitie/fitie.js"></script>
        <script src="/assets/vendor/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script src="/assets/js/functions.js"></script>
        <script>
            function jump(obj){
                if(obj.selectedIndex != 0){
                    window.location=obj.options[obj.selectedIndex].value;
                }else{
                    alert('Please Select!!!');
                }
            }
        </script>
    </body>
</html>
