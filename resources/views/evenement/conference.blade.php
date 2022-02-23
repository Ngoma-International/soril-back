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
                    <li><a href="#sponsors" class="js-target-scroll">Sponsors</a></li>
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
                                    <li><a class="active" href="#day{{$loop->index}}" data-toggle="tab">
                                            {{ Carbon\Carbon::parse($program->date)->format('F, d Y') }}</a>
                                    </li>
                                @else
                                    <li><a href="#day{{$loop->index}}"
                                           data-toggle="tab">{{ Carbon\Carbon::parse($program->date)->format('F, d Y') }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div id="my-tab-content" class="tab-content">
                    <!--Day 1 schedule-->
                    @if($programs != null)
                        @foreach ($programs->unique('date') as $program)
                            @if($loop->index == 0)
                                <div class="tab-pane active" id="day{{$loop->index}}">
                                    @forelse ($programs as $item)
                                        @forelse ($anims as $anim)
                                            @if ($program->facilitator == $anim->id)
                                                @if ($item->date == $program->date)
                                                    <div class="conference-time-list">
                                                        <div class="conf-user-time">
                                                            <span class="time">{{ Carbon\Carbon::parse($item->time)->format('h:i') }}</span>
                                                            <span class="time-schedule">{{ Carbon\Carbon::parse($item->time)->format('A') }}</span>
                                                        </div>
                                                        <div class="conf-user-img">
                                                            <img class="img-fluid center-block" src="{{asset($anim->image)}}" alt=""> </div>
                                                        <div class="conf-user-info">
                                                            <h5>{{$item->title}}</h5>
                                                            <h6>By {{$anim->prenom . ' ' . $anim->nom}}</h6>
                                                            <a  href="#collapse1" data-toggle="collapse" role="button" class="conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                                            <div role="tabpanel" class="collapse" id="collapse1" aria-expanded="false" style="height: 0px;">
                                                                <div class="conf-user-content">
                                                                    <p>{{$item->header}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @empty
                                        @endforelse
                                    @empty
                                    @endforelse
                                </div>
                            @else
                                <div class="tab-pane" id="day{{$loop->index}}">
                                    @forelse ($programs as $item)
                                        @forelse ($anims as $anim)
                                            @if ($program->facilitator == $anim->id)
                                                @if ($item->date == $program->date)
                                                    <div class="conference-time-list">
                                                        <div class="conf-user-time">
                                                            <span class="time">{{ Carbon\Carbon::parse($item->time)->format('h:i') }}</span>
                                                            <span class="time-schedule">{{ Carbon\Carbon::parse($item->time)->format('A') }}</span>
                                                        </div>
                                                        <div class="conf-user-img">
                                                            <img class="img-fluid center-block" src="{{asset($anim->image)}}" alt=""> </div>
                                                        <div class="conf-user-info">
                                                            <h5>{{$item->title}}</h5>
                                                            <h6>By {{$anim->prenom . ' ' . $anim->nom}}</h6>
                                                            <a  href="#collapse1" data-toggle="collapse" role="button" class="conf-close" aria-expanded="false"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                                            <div role="tabpanel" class="collapse" id="collapse1" aria-expanded="false" style="height: 0px;">
                                                                <div class="conf-user-content">
                                                                    <p>{{$item->header}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @empty
                                        @endforelse
                                    @empty
                                    @endforelse
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Schedule -->

<!-- Sponsors -->
<section id="sponsors" class="section-padding primary-bg">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-md-12">
                <div class="heading-sec">
                    <div class="section-header text-center">
                        <h2>Our Sponsors</h2>
                    </div>
                </div>
            </div>
            <!-- /Heading -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="sponsors-list">
                    <ul>
                        @forelse(\App\Models\SponsorEvent::all() as $spon)
                            @forelse(\App\Models\Sponsor::all() as $spons)
                                @if($spon->sponsor_id == $spons->id)
                                    @if($spon->evenement_id == $annual->id)
                                        <li> <a href="#">
                                                <img src="{{asset($spons->image)}}"
                                                     style="width: 20%"
                                                     alt="{{$spons->organisation}}"/></a>
                                            <p>{{$spons->organisation}}</p>
                                        </li>
                                    @endif
                                @endif
                            @empty
                            @endforelse
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Sponsors -->

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
            <form class="paypal-form"
                  action="{{url('register_evenement_post')}}" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="hidden" name="id" value="{{$annual->id}}">
                </div>

                <div class="form-group">
                    <label class="control-label" style="">Title *</label>
                    <select name="title" id="title" class="form-control" style="" required="">
                        <option value="mr">Monsieur</option>
                        <option value="mrs">Madame</option>
                        <option value="ms">Mademoiselle</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Prénom
                        <span class="red">*</span></label>
                    <input type="text" class="form-control shape" required="" name="firstName" id="firstName">
                </div>
                <div class="form-group">
                    <label>
                        Nom de Famille <span class="red">*</span></label>
                    <input type="text" class="form-control shape" required="" name="lastName" id="lastName">
                </div>
                <div class="form-group">
                    <label>
                        deuxième nom<span class="red">*</span></label>
                    <input type="text" class="form-control shape" name="middleName" id="middleName">
                </div>
                <div class="form-group">
                    <label>
                        Email <span class="red">*</span></label>
                    <input type="email" class="form-control shape" required="" name="email" id="email">
                </div>
                <div class="form-group">
                    <label>
                        Pays<span class="red">*</span></label>
                    <select id="pays" name="pays" class="form-control">
                        @forelse (\App\Models\Country::all() as $item)
                            <option value="{{$item->code}}">{{$item->name}} </option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label>
                        Ville <span class="red">*</span></label>
                    <input type="text" class="form-control shape" required="" name="ville" id="ville">
                </div>

                <div class="form-group">
                    <label>
                        Province | Etat *<span class="red">*</span></label>
                    <input type="text" class="form-control shape" required="" name="province" id="province">
                </div>
                <div class="form-group">
                    <label>
                        Nom de la Société <span class="red">*</span></label>
                    <input type="text" class="form-control shape" required="" name="company" id="company">
                </div>
                <div class="form-group">
                    <label>
                        Fonction/Titre <span class="red">*</span></label>
                    <input type="text" class="form-control shape" required="" name="position" id="position">
                </div>
                <div class="form-group">
                    <label>
                        Département <span class="red">*</span></label>
                    <input type="text" class="form-control shape" required="" name="departement" id="departement">
                </div>
                <div class="form-group">
                    <label>
                        Secteur<span class="red">*</span></label>

                    <select class="form-control" style="color: #fff; background-color:#54585c;" id="industrie" name="industrie">
                        <option>Accounting</option>
                        <option>Airlines/Aviation</option>
                        <option>Alternative Dispute Resolution</option>
                        <option>Alternative Medicine</option>
                        <option>Animation</option>
                        <option>Apparel/Fashion</option>
                        <option>Architecture/Planning</option>
                        <option>Arts/Crafts</option>
                        <option>Automotive</option>
                        <option>Aviation/Aerospace</option>
                        <option>Banking/Mortgage</option>
                        <option>Biotechnology/Greentech</option>
                        <option>Broadcast Media</option>
                        <option>Building Materials</option>
                        <option>Business Supplies/Equipment</option>
                        <option>Capital Markets/Hedge Fund/Private Equity</option>
                        <option>Chemicals</option>
                        <option>Civic/Social Organization</option>
                        <option>Civil Engineering</option>
                        <option>Commercial Real Estate</option>
                        <option>Computer Games</option>
                        <option>Computer Hardware</option>
                        <option>Computer Networking</option>
                        <option>Computer Software/Engineering</option>
                        <option>Computer/Network Security</option>
                        <option>Construction</option>
                        <option>Consumer Electronics</option>
                        <option>Consumer Goods</option>
                        <option>Consumer Services</option>
                        <option>Cosmetics</option>
                        <option>Dairy</option>
                        <option>Defense/Space</option>
                        <option>Design</option>
                        <option>E-Learning</option>
                        <option>Education Management</option>
                        <option>Electrical/Electronic Manufacturing</option>
                        <option>Entertainment/Movie Production</option>
                        <option>Environmental Services</option>
                        <option>Events Services</option>
                        <option>Executive Office</option>
                        <option>Facilities Services</option>
                        <option>Farming</option>
                        <option>Financial Services</option>
                        <option>Fine Art</option>
                        <option>Fishery</option>
                        <option>Food Production</option>
                        <option>Food/Beverages</option>
                        <option>Fundraising</option>
                        <option>Furniture</option>
                        <option>Gambling/Casinos</option>
                        <option>Glass/Ceramics/Concrete</option>
                        <option>Government Administration</option>
                        <option>Government Relations</option>
                        <option>Graphic Design/Web Design</option>
                        <option>Health/Fitness</option>
                        <option>Higher Education/Acadamia</option>
                        <option>Hospital/Health Care</option>
                        <option>Hospitality</option>
                        <option>Human Resources/HR</option>
                        <option>Import/Export</option>
                        <option>Individual/Family Services</option>
                        <option>Industrial Automation</option>
                        <option>Information Services</option>
                        <option>Information Technology/IT</option>
                        <option>Insurance</option>
                        <option>International Affairs</option>
                        <option>International Trade/Development</option>
                        <option>Internet</option>
                        <option>Investment Banking/Venture</option>
                        <option>Investment Management/Hedge Fund/Private Equity</option>
                        <option>Judiciary</option>
                        <option>Law Enforcement</option>
                        <option>Law Practice/Law Firms</option>
                        <option>Legal Services</option>
                        <option>Legislative Office</option>
                        <option>Leisure/Travel</option>
                        <option>Library</option>
                        <option>Logistics/Procurement</option>
                        <option>Luxury Goods/Jewelry</option>
                        <option>Machinery</option>
                        <option>Management Consulting</option>
                        <option>Maritime</option>
                        <option>Market Research</option>
                        <option>Marketing/Advertising/Sales</option>
                        <option>Mechanical or Industrial Engineering</option>
                        <option>Media Production</option>
                        <option>Medical Equipment</option>
                        <option>Medical Practice</option>
                        <option>Mental Health Care</option>
                        <option>Military Industry</option>
                        <option>Mining/Metals</option>
                        <option>Motion Pictures/Film</option>
                        <option>Museums/Institutions</option>
                        <option>Music</option>
                        <option>Nanotechnology</option>
                        <option>Newspapers/Journalism</option>
                        <option>Non-Profit/Volunteering</option>
                        <option>Oil/Energy/Solar/Greentech</option>
                        <option>Online Publishing</option>
                        <option>Other Industry</option>
                        <option>Outsourcing/Offshoring</option>
                        <option>Package/Freight Delivery</option>
                        <option>Packaging/Containers</option>
                        <option>Paper/Forest Products</option>
                        <option>Performing Arts</option>
                        <option>Pharmaceuticals</option>
                        <option>Philanthropy</option>
                        <option>Photography</option>
                        <option>Plastics</option>
                        <option>Political Organization</option>
                        <option>Primary/Secondary Education</option>
                        <option>Printing</option>
                        <option>Professional Training</option>
                        <option>Program Development</option>
                        <option>Public Relations/PR</option>
                        <option>Public Safety</option>
                        <option>Publishing Industry</option>
                        <option>Railroad Manufacture</option>
                        <option>Ranching</option>
                        <option>Real Estate/Mortgage</option>
                        <option>Recreational Facilities/Services</option>
                        <option>Religious Institutions</option>
                        <option>Renewables/Environment</option>
                        <option>Research Industry</option>
                        <option>Restaurants</option>
                        <option>Retail Industry</option>
                        <option>Security/Investigations</option>
                        <option>Semiconductors</option>
                        <option>Shipbuilding</option>
                        <option>Sporting Goods</option>
                        <option>Sports</option>
                        <option>Staffing/Recruiting</option>
                        <option>Supermarkets</option>
                        <option>Telecommunications</option>
                        <option>Textiles</option>
                        <option>Think Tanks</option>
                        <option>Tobacco</option>
                        <option>Translation/Localization</option>
                        <option>Transportation</option>
                        <option>Utilities</option>
                        <option>Venture Capital/VC</option>
                        <option>Veterinary</option>
                        <option>Warehousing</option>
                        <option>Wholesale</option>
                        <option>Wine/Spirits</option>
                        <option>Wireless</option>
                        <option>Writing/Editing</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>
                        Numéro de Contact <span class="red">*</span></label>
                    <input type="tel" class="form-control shape" required="" name="phone" id="phone">
                </div>
                <div class="form-group">
                    <label>

                        bureau tel <span class="red">*</span></label>
                    <input type="tel" class="form-control shape" required="" name="phoneBureau" id="phoneBureau">
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
