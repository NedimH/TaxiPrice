<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tingea d.o.o.">
    <title>TAXI-PRICE</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/taxiprice.css') }}">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ URL::asset('//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon1.png')}}"/>
</head>

<body>
<!-- Navigation -->
<a id="menu-toggle" class="btn btn-dark btn-lg toggle" type="button"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" class="btn btn-light btn-lg pull-right toggle" type="button"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="#top" onclick = $('#menu-close').click(); >TAXI-PRICE</a></li>
        <li><a href="#top" onclick = $('#menu-close').click(); >Home</a></li>
        <li><a href="#about" onclick = $('#menu-close').click(); >About</a></li>
        <li><a href="#services" onclick = $('#menu-close').click(); >Services</a></li>
        <li><a href="#kontakt" onclick = $('#menu-close').click(); >Contact</a></li>
    </ul>
</nav>
</div>

<!-- Language select -->
<a id="menu-toggle1" class="btn btn-dark btn-lg toggle1" type="button"><span><i class="fa fa-globe"></i></span></a>
<nav id="sidebar-wrapper1">
    <ul class="sidebar-nav1">
        <a id="menu-close1" class="btn btn-light btn-lg pull-right toggle1" type="button"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand1"><a href="#top" onclick = $('#menu-close1').click(); >SELECT LANGUAGE</a></li>
        <li><a href="#" onclick = $('#menu-close1').click(); ><img src={{asset('img/lang/en.png')}} alt=""/>&nbsp; English</a></li>
        <li><a href="#" onclick = $('#menu-close1').click(); ><img src={{asset('img/lang/ba.png')}} alt=""/>&nbsp; Bosanski</a></li>
        <li><a href="#" onclick = $('#menu-close1').click(); ><img src={{asset('img/lang/de.png')}} alt=""/>&nbsp; German</a></li>
        <li><a href="#" onclick = $('#menu-close1').click(); ><img src={{asset('img/lang/es.png')}} alt=""/>&nbsp; Spanish</a></li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <img class="imglogo" src={{asset('img/1.png')}} alt="Logo">
        <br>
        <div class="container-fluid">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Your guide trough cities</h2>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <form id="searchform" role="input" method="POST" action="{{ url('task') }}">
                                            <div class="form-group" id="custom-search-input">
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control input-lg" id="drzava" name="drzava" placeholder="Insert prefix of your country etc BA" value="">
                                                </div>
                                            </div>
                                            <div class="form-group" id="custom-search-input">
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control input-lg" id="grad" name="grad" placeholder="Insert city name " value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <input id="submit" name="submit" type="submit" value="Search" class="btn btn-default btn-lg">
                                                </div>
                                                <br>
                                                <br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <!--
                        <div id="custom-search-input">
                            <form action="{{ url('task') }}" method="POST" id="searchform" role="input">
                                <div class="input-group col-md-12">
                                    <input type="text" name="city" class="form-control input-lg" placeholder="Enter city name..." />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit" name="submit" value="Search"><i class="fa fa-search"></i> &nbsp; Search</button>
                                        </span>
                                </div>
                            </form>
                        </div>
                        -->
                    </div>
                </div> <!-- /search  -->
            </div><!--/center veliki-->
        </div><!--/container-fluid-->
    </div><!--/text-vertical-center-->
    <div id="autic" class="autic">
        <img class="imgautic" src={{asset('img/taxi_cab_clip_art.png')}} alt="">
    </div><!--/autic-->
</header>

<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About Taxi-Price!</h2>
                <p class="lead">Some text <a target="_blank" href="#top">Click me</a>.</p>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Services -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Our Services</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                </div><!-- /.row (nested) -->
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Call to Action -->
<aside class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>The buttons below are impossible to resist.</h3>
                <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
            </div>
        </div>
    </div>
</aside>

<!-- Map -->
<section id="kontakt" class="kontakt">
    <div class="map">
        <iframe frameborder="no" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2876.8353833569!2d18.419694915758875!3d43.85924054710028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c8cfecc15cf7%3A0xf2e28e7c29ab216!2sTingea!5e0!3m2!1sen!2sba!4v1445552334986"></iframe>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Taxi-Price</strong>
                </h4>
                <p>Kaptol 5<br>Sarajevo 71000</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> (387) 456-789</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:info@taxi-price.com">info@taxi-price.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; Taxi-Price.com 2015</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery v1.11.1 -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

<!-- Bootstrap v3.3.4 Core JavaScript -->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<!-- Custom JavaScript -->
<script>
    // Closes the sidebar menu left
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu left
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Closes the sidebar menu right
    $("#menu-close1").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper1").toggleClass("active");
    });
    // Opens the sidebar menu right
    $("#menu-toggle1").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper1").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 600);
                    return false;
                }
            }
        });
    });
    // Scrolls map - Click the map to enable scroll. When mouse leaves the map disable scroll.
    $(document).ready(function() {
        $('.map').click(function () {
            $('.map iframe').css("pointer-events", "auto");
        });

        $( ".map" ).mouseleave(function() {
            $('.map iframe').css("pointer-events", "none");
        });
    });
</script>
</body>
</html>