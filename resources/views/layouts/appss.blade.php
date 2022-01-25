<!DOCTYPE html>
<html>

<!-- Mirrored from html.it-rays.net/superfine/index-portfolio-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 10:46:49 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="description" content="Irma Congo">
    <meta name="author" content="IT-RAYS">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">

    <!-- CSS StyleSheets -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/assets.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link id="theme_css" rel="stylesheet" href="assets/css/light.css">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/assets.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link id="theme_css" rel="stylesheet" href="assets/css/light.css">

    <!-- REVOLUTION SLIDER STYLES -->
    <link rel="stylesheet" href="assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/navigation.css" type="text/css">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/js/html5.js"></script>
    <![endif]-->

    <!-- Skin CSS file -->
    <link id="skin_css" rel="stylesheet" href="assets/css/skins/default.css">


</head>
<body>
<div class="pageWrapper animsition">
    <header class="top-head black-bg header-left"
            style="background-image:url('assets/images/bgs/bg-01.jpg');background-size:cover">

        <div class="video-overlay"></div>

        <div class="relative zindx-9">
            <!-- Logo start -->
            <div class="text-center" style="display: block!important;">
                <a href="{{url('/')}}">
                    <img alt="" src="assets/images/logo.svg"
                         style="height: 30rem; margin-top: -15rem; margin-bottom: -10rem; ">
                </a>
            </div>
            <!-- Logo end -->

            <div class="responsive-nav" style="margin-top: -3rem">
                <!-- top navigation menu start -->
                <nav class="side-nav nav-animate to-bottom">
                    <ul>
                        <li class="mega-menu">
                            <a href="{{route('home')}}" style="font-weight: normal!important;">Accueil</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}" style="font-weight: normal!important;">A Propos</a>
                        </li>
                        <li>
                            <a href="{{route('membre')}}" style="font-weight: normal!important;">Adhésions</a>
                        </li>
                        <li>
                            <a href="education" style="font-weight: normal!important;">Education</a>
                        </li>
                        <li>
                            <a href="{{route('evenementss')}}" style="font-weight: normal!important;">Evénements</a>
                        </li>
                        <li>
                            <a href="{{route('publications')}}" style="font-weight: normal!important;">Publications</a>
                        </li>
                        <li>
                            <a href="{{route('techniques')}}" style="font-weight: normal!important;">Commissions Techniques</a>
                        </li>
                        <li>
                            <a href="{{route('qualifications')}}" style="font-weight: normal!important;">Conseil des Qualifications</a>
                        </li>
                    </ul>
                </nav>
                <!-- top navigation menu end -->

                <!-- top search start -->
                <div style="margin-top: -15px" class="row justify-content-center text-center">

                    <a class="btn btn-xl main-bg shape new-angle"
                       href="{{route('login')}}">
                        Vous Connecter
                    </a>
                </div>
                <!-- top search end -->
            </div>
        </div>

    </header>

    @yield('content')

    <!-- Footer start -->
    <footer id="footWrapper">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <!-- Our Friends footer cell start -->
                    <div class="col-md-4">
                        <h3>QUI SOMMES-NOUS?</h3>
                        <p>
                            l'IRMA est une organisation de développement professionel des personnes œuvrant dans les métiers du risque liés aux assurances et au risk management en République Démocratique du Congo. Créé en 2018 en tant qu'Association Sans but Lucratif, Son dessein est d' aider ces personnes à atteindre et à maintenir un haut niveau d’excellence.
                        </p>
                    </div>
                    <!-- Our Friends footer cell start -->

                    <!-- Tags Cloud footer cell start -->
                    <div class="col-md-3 last contact-widget">
                        <h3>CONTACTEZ-NOUS</h3>
                        <ul class="details">
                            <li>
                                <i class="fa fa-envelope shape"></i>
                                <span><span class="heavy-font">Email: </span>infos@irmacongo.org</span></li>
                            <li>
                                <i class="fa fa-phone shape"></i>
                                <span><span class="heavy-font">Tel: </span>+243(81)2970 747</span></li>
                        </ul>
                    </div>
                    <!-- Tags Cloud footer cell start -->

                    <!-- Tags Cloud footer cell start -->
                    <div class="col-md-3 last contact-widget">
                        <h3>Contact Us</h3>
                        <ul class="details">
                            <li>
                                <i class="fa fa-facebook shape"></i>
                                <span>
                                    <span class="heavy-font">FaceBook: </span>
                                    our_facebook_account
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-twitter shape"></i>
                                <span>
                                    <span class="heavy-font">Twitter: </span>
                                    our_twitter_account
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-linkedin shape"></i>
                                <span>
                                    <span class="heavy-font">Linkedin: </span>
                                    our_linkedin_account
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- Tags Cloud footer cell start -->
                </div>
            </div>
        </div>

        <!-- footer bottom bar start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <!-- footer copyrights left cell -->
                    <div class="copyrights col-md-5 first">© Copyrights <b class="main-color">NGOMA DigiTech</b> 2021. All rights reserved.</div>

                </div>
            </div>
        </div>
        <!-- footer bottom bar end -->
    </footer>
    <!-- Footer end -->

</div>

<!-- Load JS plugins file -->
<script type="text/javascript" src="assets/js/assets.min.js"></script>

<!-- SLIDER REVOLUTION  -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
    (Load Extensions only on Local File Systems !  +
    The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->

<script type="text/javascript">
    var tpj=jQuery;
    var revapi4;
    tpj(window).load(function() {
        if(tpj("#slider").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_4_1");
        }else{
            revapi4 = tpj("#slider").show().revolution({
                sliderType:"standard",
                jsFileLocation:"assets/revolution/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }
                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,600,500,400],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });

            revapi4.bind("revolution.slide.onchange",function (e,data) {
                if($('.top-head').hasClass('transparent') || $('.top-head').hasClass('boxed-transparent')){
                    if($('#slider ul > li').eq(data.slideIndex-1).hasClass('dark') ){
                        $('.top-head').removeClass('not-dark');
                        $('.top-head').addClass('dark');
                        var logo = $('.logo').find('img').attr('src').replace("logo.html", "logo-light.html");
                        $('.logo').find('img').attr('src',logo);
                    } else {
                        $('.top-head').removeClass('dark');
                        $('.top-head').addClass('not-dark');
                        var logo = $('.logo').find('img').attr('src').replace("logo-light.html", "logo.html");
                        $('.logo').find('img').attr('src',logo);
                    }
                    if($('.top-head').hasClass('sticky-nav')){
                        var logo = $('.logo').find('img').attr('src').replace("logo-light.html", "logo.html");
                        $('.logo').find('img').attr('src',logo);
                    }
                }
            });
        }
    });	/*ready*/
</script>

<!-- general script file -->
<script type="text/javascript" src="assets/js/script.js"></script>

</body>

<!-- Mirrored from html.it-rays.net/superfine/index-fullscreen-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 10:46:49 GMT -->
</html>
