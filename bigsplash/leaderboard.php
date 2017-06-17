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

        nav {
            background-color: #6c939e !important;
        }

        .page-footer {
            background-color: #6c939e !important;
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
                            <li><a href="sass.html">Home</a></li>
                            <li><a href="badges.html">Programs</a></li>
                            <li class="active"><a href="collapsible.html">LeaderBoard</a></li>
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
 * Time: 10:28 AM
 */
?>

