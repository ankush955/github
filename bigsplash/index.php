<!DOCTYPE html>
<head>
    <title>Bigsplash Swimming</title>
    <meta charset="UTF-8">
    <meta name="description" content="Bigsplash Fitness Club">
    <meta name="keywords" content="bigsplash, swimming, gym, fitness, club">
    <meta name="author" content="bigsplash">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap 3 -->
    <link rel="stylesheet" href="bootstrap-3/css/bootstrap.min.css">
    <!--materialize css -->
    <link rel="stylesheet" href="materialize-css/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="MaterialDesign-styles/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
    <style>
        body {
            background-color: whitesmoke;
            font-family: Roboto-Medium;
        }

        .block-bg {
            /*background-color: rgba(123, 170, 216, 0.79);*/
            background: url("img/bg.jpg") 40% 0 no-repeat;
        }

        .block2-bg {
            background-color: lightgray;
        }

        nav {
            background-color: #6c939e !important;
        }

        .page-footer {
            background-color: #6c939e !important;
        }

        .card {
            border: 2px solid black !important;
        }

        .card .card-image img {
            border-bottom: 2px solid grey !important;
        }

        .carousel .carousel-item > img {
            width: 500px !important;
        }
    </style>

    <style>
        @font-face {
            font-family: Roboto-Bold;
            src: url('materialize-css/materialize/fonts/roboto/Roboto-Bold.woff');
        }

        @font-face {
            font-family: Roboto-Light;
            src: url('materialize-css/materialize/fonts/roboto/Roboto-Light.woff');
        }

        @font-face {
            font-family: Roboto-Medium;
            src: url('materialize-css/materialize/fonts/roboto/Roboto-Medium.woff');
        }

        @font-face {
            font-family: Roboto-Regular;
            src: url('materialize-css/materialize/fonts/roboto/Roboto-Regular.woff');
        }

        @font-face {
            font-family: Roboto-Thin;
            src: url('materialize-css/materialize/fonts/roboto/Roboto-Thin.woff');
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav-wrapper">
                        <span href="#" class="brand-logo">Big Splash </span>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi mdi-select"></i></a>
                        <ul class="right hide-on-med-and-down">
                            <li class="active"><a href="sass.html">Home</a></li>
                            <li><a href="badges.html">Programs</a></li>
                            <li><a href="collapsible.html">LeaderBoard</a></li>
                            <li><a href="mobile.html">Registration</a></li>
                            <li><a href="mobile.html">Contact</a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="sass.html">Home</a></li>
                            <li><a href="badges.html">Programs</a></li>
                            <li><a href="collapsible.html">LeaderBoard</a></li>
                            <li><a href="mobile.html">Registration</a></li>
                            <li><a href="mobile.html">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="parallax-container">
                    <div class="parallax"><img src="img/one.jpg"></div>
                </div>
                <div class="section white">
                    <div class="row container">
                        <h2 class="header">Parallax</h2>
                        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content
                            or image in this case, is moved at a different speed than the foreground content while
                            scrolling.</p>
                    </div>
                </div>
                <div class="parallax-container">
                    <div class="parallax"><img src="img/two.jpg"></div>
                </div>
                <div class="section white">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/new.jpg">
                                </div>
                                <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Whats New ?  <i
                                        class="mdi mdi-bookmark-plus pull-right"></i></span>
                                </div>
                                <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Whats New ?<i
                                        class="material-icons right"> X </i></span>
                                    <p>Here is some more information about this product that is only revealed once
                                        clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/leaderboard.png">
                                </div>
                                <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">LeaderBoard  <i
                                        class="mdi mdi-bookmark-plus pull-right"></i></span>
                                </div>
                                <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">LeaderBoard<i
                                        class="material-icons right"> X </i></span>
                                    <p>Here goes some of the scores</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/fitness.jpg">
                                </div>
                                <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Coming Up  <i
                                        class="mdi mdi-bookmark-plus pull-right"></i></span>
                                </div>
                                <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Coming Up<i
                                        class="material-icons right"> X </i></span>
                                    <p>Here are coming up news and info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer class="page-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col l6 s12">
                                <h5 class="white-text">BigSplash Fitness Club</h5>
                                <p class="grey-text text-lighten-4">Registered under the ....</p>
                            </div>
                            <div class="col l4 offset-l2 s12">
                                <h5 class="white-text">Go to</h5>
                                <ul>
                                    <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Programs</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">LeaderBoard</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Registration</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container center-align">
                            © 2017 Ankush Pertaub
                        </div>
                    </div>
                </footer>

            </div>
        </div>

    </div>

    <!--    <div class="block-bg">

        <div class="container">
            <div class="block2-bg">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/card.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Whats New ?  <i
                                        class="mdi mdi-bookmark-plus pull-right"></i></span>
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Whats New ?<i
                                        class="material-icons right"> X </i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/card.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">LeaderBoard  <i
                                        class="mdi mdi-bookmark-plus pull-right"></i></span>
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Whats New ?<i
                                        class="material-icons right"> X </i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/card.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Coming Up  <i
                                        class="mdi mdi-bookmark-plus pull-right"></i></span>
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Whats New ?<i
                                        class="material-icons right"> X </i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: grey">
            <div class="container">
                <footer class="page-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col l6 s12">
                                <h5 class="white-text">Footer Content</h5>
                                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                                    content.</p>
                            </div>
                            <div class="col l4 offset-l2 s12">
                                <h5 class="white-text">Links</h5>
                                <ul>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            © 2014 Copyright Text
                            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>-->


</div>
<script type="text/javascript" src="bootstrap-3/jquery-3.1.1.js"></script>
<script type="text/javascript" src="bootstrap-3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="materialize-css/materialize/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel({indicators: true});
        //$('.carousel.carousel-slider').carousel({fullWidth: true});

        $(".button-collapse").sideNav();
        $('.parallax').parallax();


    });
</script>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 6/17/2017
 * Time: 9:06 AM
 */
?>