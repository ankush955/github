<?php
include "header.php";
?>

<div class="block-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2 class="pull-left blue-text"><span class="deep-purple-text">Big</span>Splash Fitness Club </h2>
                <img src="img/logo.jpg" alt="logo" width="100px" height="100px"></div>
            <div class="col-md-4">
                <h4 class="pull-right">
                    <a href="#" class="mdi mdi-phone-classic"> (+230) 5964 6979</a>
                    <span class="small white-text"> L'Esperance Trebuchet</span></h4></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel ">
                    <a class="carousel-item" href="#"><img src="img/one.jpg"></a>
                    <a class="carousel-item" href="#"><img src="img/two.jpg"></a>
                    <a class="carousel-item" href="#"><img src="img/two.jpg"></a>
                    <a class="carousel-item" href="#"><img src="img/two.jpg"></a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#" class="white-text">Programs</a></li>
                                <li><a href="#" class="white-text">Schedule</a></li>
                                <li><a href="#" class="white-text">Registration</a></li>
                                <li><a href="#" class="white-text">Contact</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="white-text"><span class="glyphicon glyphicon-user"></span> Sign
                                        Up</a></li>
                                <li><a href="#" class="white-text"><span class="glyphicon glyphicon-log-in"></span>
                                        Login</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>

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
</div>


<?php
include "footer.php";
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel({indicators: true});
        //$('.carousel.carousel-slider').carousel({fullWidth: true});


    });
</script>


</body>