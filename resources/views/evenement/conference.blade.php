<!DOCTYPE HTML>
<html lang="fr">

<!-- Mirrored from themes.webmasterdriver.net/BeEvent/demo-1/with-paypal/index-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 09:31:12 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>{{$annual->titre}}</title>

    <!--Bootstrap -->
    <link rel="stylesheet" href="{{asset('conference/assets/css/bootstrap.min.css')}}" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="{{asset('conference/assets/css/style.css')}}" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="{{asset('conference/assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('conference/assets/css/owl.transitions.css')}}" type="text/css">
    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css"
          href="{{asset('conference/assets/switcher/css/switcher.css')}}" media="all" />
    <link rel="alternate stylesheet" type="text/css"
          href="{{asset('conference/assets/switcher/css/red.css')}}" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css"
          href="{{asset('conference/assets/switcher/css/orange.css')}}" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css"
          href="{{asset('conference/assets/switcher/css/blue.css')}}" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css"
          href="{{asset('conference/assets/switcher/css/pink.css')}}" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css"
          href="{{asset('conference/assets/switcher/css/green.css')}}" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css"
          href="{{asset('conference/assets/switcher/css/purple.css')}}" title="purple" media="all" />

    <!--FontAwesome Font Style -->
    <link href="{{asset('conference/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon"
          href="{{asset('assets/img/logos/icon.png')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
</head>
<body id="home">

<!-- Start Switcher -->
<div class="switcher-wrapper">
    <div class="demo_changer">
        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
        <div class="form_holder">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="predefined_styles">
                        <div class="skin-theme-switcher">
                            <h4>Color</h4>
                            <a href="#" data-switchcolor="red" class="styleswitch"
                               style="background-color:#de302f;"> </a>
                            <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>
                            <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#228dcb;"> </a>
                            <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>
                            <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>
                            <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->
<!-- Navigation -->
<nav id="navigation" class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-md-push-11 text-right">
                <div id="menu-toggle-close"> <i class="fa fa-times" aria-hidden="true"></i> </div>
            </div>
            <div class="col-md-11 col-md-pull-1">
                <ul class="nav navbar-nav">
                    <li><a href="#navigation" class="js-target-scroll">Home</a>
                    </li>
                    <li><a href="#about" class="js-target-scroll">About Us</a></li>
                    <li><a href="#speakers" class="js-target-scroll">Speakers</a></li>
                    <li><a href="#schedule" class="js-target-scroll">Schedule</a></li>
                    <li><a href="#pricing" class="js-target-scroll">Pricing</a></li>
                    <li><a href="#faq" class="js-target-scroll">FAQ</a></li>
                    <li class="dropdown">
                        <a href="#blog" class="js-target-scroll">Blog</a>
                        <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></span>
                        <ul class="dropdown-menu">
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-grid.html">Blog Grid Style</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#sponsors" class="js-target-scroll">Sponsors</a></li>
                    <li><a href="#venue" class="js-target-scroll">Venue</a></li>
                    <li class="dropdown">
                        <a href="#" class="js-target-scroll">Elements</a>
                        <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></span>
                        <ul class="dropdown-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="schedule.html">Schedule</a></li>
                            <li><a href="speakers.html">Speakers</a></li>
                            <li><a href="sponsors.html">Sponsors</a></li>
                            <li><a href="venue.html">Venue</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- /Navigation -->

<!--Header-->
<header id="header" class="transparent">
    <div class="container">
        <div class="row">

            <!-- contact number -->
            <div class="col-sm-6 col-lg-5 ">
                <div class="info-text "> <span>Call : 071 573 4653</span> </div>
            </div>
            <!-- /contact number -->

            <!-- logo -->
{{--            <div class="col-10 col-lg-2 ">--}}
{{--                <div class="logo"><h3><a href="#"><span>Be</span>Event</a></h3> </div>--}}
{{--            </div>--}}
            <!-- /logo -->

            <!-- Menu-toggle -->
            <div class="col-2 col-lg-5">
                <div  class="text-right">
                    <div id="menu-toggle-bar"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
                </div>
            </div>
            <!-- /Menu-toggle -->
        </div>
    </div>
</header>
<!-- /Header -->

<!-- Banners -->
<section id="banner" class="banner-section">
    <div  id="slideshow" class="slideshow">
        <div class="slides masked"
             tyle="background-image:url({{$annual->image}})">
            <div class="banner-fixed">
                <div class="container">
                    <div class="banner-content">
                        <div class="banner-tagline text-center">
                            <h1>{{$annual->titre}}</h1>
                            <p>
                                {{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }},
                                {{$annual->ville}}, {{$annual->lieu}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slides masked" style="background-image:url({{asset('conference/assets/images/banner_bg2.jpg')}})">
            <div class="banner-fixed">
                <div class="container">
                    <div class="banner-content">
                        <div class="banner-tagline text-center">
                            <h1>The Annual Conference</h1>
                            <p>{{$annual->duree}} Day(s) conference(s). - {{$annual->sousTitre}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <!-- Banners Timer -->--}}
{{--    <div class="container countdown-tab">--}}
{{--        <div class="countdown">--}}
{{--            <div class="counter-sec">--}}
{{--                <div class="countdown-counter half-width text-center">--}}
{{--                    <div class="timer">--}}
{{--                        <div class="countdown styled"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="countdown-btn half-width"> <a href="#" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#registration_form" >Booking Today</a> </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- /Banners Timer -->--}}

</section>
<!-- /Banners -->

<!-- About Conference-->
<section  id="about" class="about-section section-padding">
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-md-6 col-sm-6">
                <div class="about-sec">
                    <div class="about-content">
                        <h2>About Our Event</h2>
                        <p>
                            {{$annual->description}}
                        </p>
                    </div>
                </div>
            </div>
            <!-- /About Content -->

            <!-- Carousel Slider -->
            <div class="col-md-6 col-sm-6 ">
                <div class="about-carousel border-box">
                    <div class="carousel slide" id="aboutCarousel" data-ride="carousel">
                        <!-- Wrapper for slides -->
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item active"><img src="assets/images/about-carousel-1.jpg" alt="" class="center-block"></div>--}}
{{--                            <div class="carousel-item"><img src="assets/images/about-carousel-2.jpg" alt="" class="center-block"></div>--}}
{{--                            <div class="carousel-item"><img src="assets/images/about-carousel-3.jpg" alt="" class="center-block"></div>--}}
{{--                        </div>--}}

{{--                        <!-- Left and right controls -->--}}
{{--                        <a class="carousel-control-prev left" href="#aboutCarousel" role="button" data-slide="prev"> --}}
{{--                            <span class="fa fa-angle-left" aria-hidden="true"></span> --}}
{{--                            <span class="sr-only">Previous</span> </a>--}}
{{--                        <a class="right carousel-control-next" href="#aboutCarousel" role="button" data-slide="next">--}}
{{--                            <span class="fa fa-angle-right" aria-hidden="true"></span> --}}
{{--                            <span class="sr-only">Next</span> </a>--}}
                    </div>
                </div>
            </div>
            <!-- /Carousel Slider -->

        </div>
    </div>
</section>
<!-- /About Conference-->

<!-- Conference info -->
<section id="conference" class="conference secondary-bg vc_row">
    <div class=" col-md-6 vc_col section-padding">
        <div class="vc_column-inner">
            <div class="conference-start-box width50-right">
                <h2>Conference Start<br>
                    {{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }},</h2>
{{--                <div class="spekers-tickets-box">--}}
{{--                    <div class="spekers-tickets-info"> <i class="fa fa-microphone" aria-hidden="true"></i> <span class="summary">8 Speakers</span> </div>--}}
{{--                    <div class="spekers-tickets-info"> <i class="fa fa-ticket" aria-hidden="true"></i> <span class="summary">250 Tickets</span> </div>--}}
{{--                </div>--}}
                <p>{{$annual->apercu}}</p>
            </div>
        </div>
        <div class="section-conference-bg"></div>
        <div class="red-overlay"></div>
    </div>
    <div class="col-md-6 vc_col section-padding">
        <div class="vc_column-inner">
            <div class="conference-content-box width50-left">
                <p>{{$annual->participer}}</p>
                <div class="conference-price">
                    <p>Starting at :</p>
                    <span class="conference-amount">${{$annual->prix}}</span> </div>
                <a href="#" class="btn btn-lg-boder-w" data-toggle="modal" data-target="#registration_form" >Booking Today</a> </div>
        </div>
    </div>
</section>
<!-- /Conference info -->

<!-- Speakers -->
<section  id="speakers" class="spearker-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-sec">
                    <div class="section-header text-center">
                        <h2>Our Speaker</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Heading -->
            <div class="col-md-4">
                <div class="speaker-sec">
                    <div class="speaker-info-box text-center border-box">
                        <div class="spearker-img">
                            <img src="{{asset($anim->image)}}"
                                 alt="" class="img-fluid center-block">
                        </div>
                        <div class="speaker-hover">
                            <div class="social-icons text-center"> <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="section-header text-left">
                    <h4>{{$anim->prenom . ' ' . $anim->nom}}</h4>
                    <p>
                        {{$anim->organisation . ' - ' . $anim->position}}
                    </p>
                    <p>
                        {{\App\Models\Country::where('code', $anim->pays)->first()->name}}
                    </p>
                </div>
            </div>
            <!-- /Heading -->
        </div>
    </div>
</section>
<!-- /Speakers -->

<!-- Schedule -->
<section id="schedule" class="conference-schedule section-padding secondary-bg">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-md-12">
                <div class="heading-sec">
                    <div class="section-header text-center">
                        <h2>Conference Schedule</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </div>
            <!-- /Heading -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-8 schedule-data">
                <div class="day-time-m">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                        @if($programs != null)
                            @foreach ($programs->unique('date') as $program)
                                @if($loop->index == 0)
                                    <li><a class="active" href="#day1" data-toggle="tab">
                                            {{ Carbon\Carbon::parse($program->date)->format('F, d Y') }}</a>
                                    </li>
                                @else
                                    <li><a href="#day2" data-toggle="tab">{{ Carbon\Carbon::parse($program->date)->format('F, d Y') }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div id="my-tab-content" class="tab-content">
                    <!--Day 1 schedule-->
                    <div class="tab-pane active" id="day1">
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">08:00</span> <span class="time-schedule">am</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_1.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a  href="#collapse1" data-toggle="collapse" role="button" class="conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse1" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">10:00</span> <span class="time-schedule">am</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_2.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a  href="#collapse2" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse2" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">12:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_3.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Lunch</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a  href="#collapse3" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse3" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">02:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_4.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a  href="#collapse4" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse4" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">04:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_5.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a  href="#collapse5" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse5" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Day 1 schedule-->

                    <!--Day 2 schedule-->
                    <div class="tab-pane" id="day2">
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">08:00</span> <span class="time-schedule">am</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_6.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a  href="#collapse6" data-toggle="collapse" role="button" class="conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse6" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">10:00</span> <span class="time-schedule">am</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_7.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse7" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse7" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">12:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_8.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Lunch</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse8" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse8" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">02:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_1.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse9" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse9" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">04:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_2.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse10" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse10" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Day 2 schedule-->

                    <!--Day 3 schedule-->
                    <div class="tab-pane" id="day3">
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">08:00</span> <span class="time-schedule">am</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_4.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse11" data-toggle="collapse" role="button" class="conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse11" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">10:00</span> <span class="time-schedule">am</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_5.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse12" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse12" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">12:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_1.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Lunch</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse13" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse13" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">02:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_2.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse14" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse14" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conference-time-list">
                            <div class="conf-user-time"> <span class="time">04:00</span> <span class="time-schedule">pm</span> </div>
                            <div class="conf-user-img"> <img class="img-fluid center-block" src="assets/images/spearker_8.jpg" alt=""> </div>
                            <div class="conf-user-info">
                                <h5>Una Kravets</h5>
                                <h6>ui engineer at DigitalOcean</h6>
                                <a href="#collapse15" data-toggle="collapse" role="button" class="collapsed conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                <div role="tabpanel" class="collapse" id="collapse15" aria-expanded="false" style="height: 0px;">
                                    <div class="conf-user-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Day 3 schedule-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Schedule -->

<!-- Pricinig -->
<section id="pricing" class="registration-price section-padding">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-md-12">
                <div class="heading-sec">
                    <div class="section-header text-center">
                        <h2>Booking Price</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </div>
            <!-- /Heading -->
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12 pricing_wrap">
                <div class="regi-price-table border-box">
                    <div class="table-price-box secondary-bg">
                        <h5>Front Seat</h5>
                        <div class="regi-price-box">
                            <p>$99</p>
                        </div>
                    </div>
                    <div class="table-price-detail">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Seat</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>Coffee Break</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>Certificate</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 pricing_wrap">
                <div class="regi-price-table border-box">
                    <div class="table-price-box secondary-bg">
                        <h5>Middle Seat</h5>
                        <div class="regi-price-box">
                            <p>$199</p>
                        </div>
                    </div>
                    <div class="table-price-detail">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Seat</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>Coffee Break</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>Certificate</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 pricing_wrap">
                <div class="regi-price-table border-box">
                    <div class="table-price-box secondary-bg">
                        <h5>Back Seat</h5>
                        <div class="regi-price-box">
                            <p>$299</p>
                        </div>
                    </div>
                    <div class="table-price-detail">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Seat</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Coffee Break</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>Certificate</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 pricing_wrap">
                <div class="regi-price-table border-box">
                    <div class="table-price-box secondary-bg">
                        <h5>VIP</h5>
                        <div class="regi-price-box">
                            <p>$399</p>
                        </div>
                    </div>
                    <div class="table-price-detail">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Seat</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Coffee Break</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Certificate</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="regi-price-btn-box"> <a href="#" class="btn btn-lg-boder-r" data-toggle="modal" data-target="#registration_form" >Booking Today</a> </div>
        </div>
    </div>
</section>
<!-- /Pricinig -->

<!-- FAQ -->
<section id="faq" class="secondary-bg vc_row">
    <div class=" col-md-6 vc_col section-padding">
        <div class="vc_column-inner">
            <div class="faq-box-m width50-right">
                <h2>Some Questions ?</h2>
                <div role="tablist" id="accordion1" class="panel-group">
                    <!-- accordion 1 -->
                    <div class="panel panel-default">
                        <div role="tab" class="panel-heading">
                            <h4 class="panel-title"> <a href="#collapse03" data-parent="#accordion1" data-toggle="collapse" role="button" class="collapsed" aria-expanded="false"> Lorem Ipsum is simply dummy text ? </a> </h4>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse" id="collapse03" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    The point of using Lorem Ipsum is that it has a more-or-less normal .distribution of letters, as opposed. </p>
                            </div>
                        </div>
                    </div>

                    <!-- accordion 2 -->
                    <div class="panel panel-default">
                        <div role="tab" class="panel-heading">
                            <h4 class="panel-title"> <a href="#collapse02" data-parent="#accordion1" data-toggle="collapse" role="button" class="collapsed" aria-expanded="false"> There are many variations ? </a> </h4>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse" id="collapse02" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .distribution of letters, as opposed. </p>
                            </div>
                        </div>
                    </div>

                    <!-- accordion 3 -->
                    <div class="panel panel-default">
                        <div role="tab" class="panel-heading">
                            <h4 class="panel-title"> <a href="#collapse01" data-parent="#accordion1" data-toggle="collapse" role="button" aria-expanded="true" class=""> Lorem Ipsum is simply dummy text ? </a> </h4>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse in" id="collapse01" aria-expanded="true" style="">
                            <div class="panel-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .distribution of letters, as opposed. </p>
                            </div>
                        </div>
                    </div>

                    <!-- accordion 4 -->
                    <div class="panel panel-default">
                        <div role="tab" class="panel-heading">
                            <h4 class="panel-title"> <a href="#collapse04" data-parent="#accordion1" data-toggle="collapse" role="button" class="collapsed" aria-expanded="false"> There are many variations ? </a> </h4>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse" id="collapse04" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal. distribution of letters, as opposed. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 vc_col section-padding">
        <div class="vc_column-inner">
            <div class="sport-video-box width50-left">
                <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
                <div class="video-box">
                    <iframe class="mfp-iframe" src="https://www.youtube.com/embed/rqSoXtKMU3Q" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="section-conference-bg faq_bg"></div>
        <div class="red-overlay"></div>
    </div>
</section>
<!-- /FAQ -->

<!-- Blog -->
<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-md-12">
                <div class="heading-sec">
                    <div class="section-header text-center">
                        <h2>Latest News</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </div>
            <!-- /Heading -->

            <div class="col-md-4 col-sm-4">
                <div class="blog_wrap">
                    <div class="blog_img margin-btm-20">
                        <a href="#"><img src="assets/images/blog_800x510.jpg" alt="image"></a>
                    </div>
                    <div class="blog_meta">
                        <p>Posted on November 30, 2020</p>
                    </div>
                    <h5><a href="#">How To Build Your Event Brand</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="blog_wrap">
                    <div class="blog_img margin-btm-20">
                        <a href="#"><img src="assets/images/blog_800x510_2.jpg" alt="image"></a>
                    </div>
                    <div class="blog_meta">
                        <p>Posted on November 28, 2020</p>
                    </div>
                    <h5><a href="#">How To Get Started In Event Planning</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="blog_wrap">
                    <div class="blog_img margin-btm-20">
                        <a href="#"><img src="assets/images/blog_800x510_3.jpg" alt="image"></a>
                    </div>
                    <div class="blog_meta">
                        <p>Posted on October 30, 2020</p>
                    </div>
                    <h5><a href="#">The standard chunk of Lorem Ipsum used since</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Blog -->

<!-- Newsletter -->
<section class="section-padding newslette-padding secondary-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <iframe src="newsletter.html" class="newslette-iframe" style="background:#222;" scrolling="no"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- /Newsletter -->

<!-- Sponsors -->
<section id="sponsors" class="section-padding primary-bg">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-md-12">
                <div class="heading-sec">
                    <div class="section-header text-center">
                        <h2>Our Sponsors</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </div>
            <!-- /Heading -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="sponsors-list">
                    <ul>
                        <li> <a href="#"><img src="assets/images/sponsors-list-1.png" alt="sponsors"/></a></li>
                        <li> <a href="#"><img src="assets/images/sponsors-list-2.png" alt="sponsors"/></a></li>
                        <li> <a href="#"><img src="assets/images/sponsors-list-3.png" alt="sponsors"/></a></li>
                        <li> <a href="#"><img src="assets/images/sponsors-list-4.png" alt="sponsors"/></a></li>
                        <li> <a href="#"><img src="assets/images/sponsors-list-1.png" alt="sponsors"/></a></li>
                        <li> <a href="#"><img src="assets/images/sponsors-list-2.png" alt="sponsors"/></a></li>
                        <li> <a href="#"><img src="assets/images/sponsors-list-3.png" alt="sponsors"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Sponsors -->

<!-- Conference Venue -->
<section id="venue" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-md-12">
                <div class="heading-sec">
                    <div class="section-header text-center">
                        <h2>Conference Venue</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </div>
            <!-- /Heading -->
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-info-box border-box">
                    <div class="contact-info-details">
                        <div class="direction-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <h5>PO Box 1025MNO Collins Street West Victoria 8007 Australia</h5>
                    </div>
                    <div class="contact-info-details">
                        <div class="direction-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <h5><a href="tel:+61-123-456-7890">+61-123-456-789</a></h5>
                    </div>
                    <div class="contact-info-details">
                        <div class="direction-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <h5><a  href="mailto:contact@demoweburl.com">contact@exampleurl.com</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="g-map-m">
                    <div id="js-gmap" class="gmap js-gmap"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Conference Venue -->

<!--Footer-->
<footer class="secondary-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social-tab">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="footer-logo-text">
                    <p>BeEvent</p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright fourth-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2020 <a href="#">BeEvent</a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->

<!--Registration Form-->
<div id="registration_form" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content padding_4x4_40 text-center">
            <div class="modal-header">
                <h3>Reserve Your Seat</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form class="paypal-form" action="http://themes.webmasterdriver.net/BeEvent/demo-1/with-paypal/paypal/index.php" method="post">

                <div class="form-group">
                    <input class="form-control" name="payer_fname" type="text" placeholder="Full Name" required="">
                </div>

                <div class="form-group">
                    <input class="form-control" name="payer_email" type="email" placeholder="Email Address" required="">
                </div>

                <div class="form-group">
                    <input class="form-control" name="phone" type="text" placeholder="Phone Number" required="">
                </div>


                <div class="form-group">
                    <select class="form-control" name="product_quantity" required="">
                        <option value="">Number of Seats</option>
                        <option value="1">1 Seat</option>
                        <option value="2">2 Seats</option>
                        <option value="3">3 Seats</option>
                        <option value="4">4 Seats</option>
                        <option value="5">5 Seats</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" name="product_name" required="">
                        <option value="">Choose a Plan</option>
                        <option value="FrontSeat">Front Seat ($99/1 Seat)</option>
                        <option value="MiddleSeat">Middle Seat ($199/1 Seat)</option>
                        <option value="BackSeat">Back Seat ($299/1 Seat)</option>
                        <option value="VIP">VIP ($399/1 Seat)</option>
                    </select>
                </div>

                <div class="form-group">
                    <input class="btn" name="submit" type="submit" value="Buy Tickets!">
                </div>
            </form>
        </div>
    </div>
</div>
<!--/Registration Form-->

<!-- Scripts -->
<script src="{{asset('conference/assets/js/jquery.min.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('conference/assets/js/gmaps.min.js')}}"></script>
<script src="{{asset('conference/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('conference/assets/js/popper.min.js')}}"></script>
<script src="{{asset('conference/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('conference/assets/js/interface.js')}}"></script>
<script src="{{asset('conference/assets/js/owl.carousel.min.js')}}"></script>
<!--Switcher-->
<script src="{{asset('conference/assets/switcher/js/switcher.js')}}"></script>
<!-- Countdown-->
<script src="{{asset('conference/assets/js/jquery.countdown.min.js')}}"></script>

<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAQsTHPE1hhsGg77C0BG8p5uIAIuFraE0w&amp;libraries=places&amp;ver=5.3.2'></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/BeEvent/demo-1/with-paypal/index-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 09:33:19 GMT -->
</html>
