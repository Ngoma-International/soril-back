<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/eventcon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 08:39:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Irma Conférence Anuelle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('favicon.png')}}">


    <link rel="stylesheet"
          href="{{asset('conference/css/A.bootstrap.min.css%2bowl.carousel.min.css%2bmagnific-popup.css%2bfont-awesome.min.css%2bthemify-icons.css%2bgijgo.css%2bnice-select.css%2banimate.css%2bflaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('conference/css/A.style.css.pagespeed.cf.a5Og8aBLl6.css')}}">

    <script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
            e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="../../cdn-cgi/zaraz/sd41d.js?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);</script></head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#about">Information</a>
                                        </li>
                                        <li><a href="#programme">Programme</a>
                                        </li>
                                        <li><a href="#sponsors">Sponsors</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="buy_tkt">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="{{route('evenementss')}}">Retour à Irma</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="slider_area" id="animateur">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="slider_text text-center">
                        <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="img/shape/shape_1.svg" alt="">
                        </div>
                        <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="img/shape/shape_2.svg" alt="">
                        </div>
                        <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                            {{Carbon\Carbon::parse($annual->date)->format('F, d, Y') }}
                        </span>
                        <h3 class="fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">{{$annual->titre}}</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">{{$annual->ville}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="performar_area black_bg" id="animateur">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-80">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Animateur</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div data-tilt class="thumb">
                                <img src="{{asset($anim->image)}}" alt="">
                            </div>
                            <div class="performer_heading">
                                <h4>{{$anim->prenom . ' ' . $anim->nom}}</h4>
                                <span>{{$anim->organisation . ' / ' . $anim->position}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about_area black_bg" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center mb-80">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Informations</h3>
                    <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                        Aperçu de l'evenement : {{$annual->apercu}}
                        <br>
                        Prérequis : {{$annual->prerequis}}
                        <br>
                        Prix : {{$annual->prix}} $
                        <br>
                        Description : {{$annual->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="program_details_area detials_bg_1 overlay2" id="programme">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <h3>Programmes</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="program_detail_wrap">
                    @forelse($programs as $program)
                        @if($loop->index % 2 == 0)
                            <div class="single_propram">
                                <div class="inner_wrap">
                                    <div class="circle_img"></div>
                                    <div class="porgram_top">
                                        <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                                            {{ Carbon\Carbon::parse($program->date)->format('F, d, Y') }}
                                        </span>
                                        <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                                            {{ Carbon\Carbon::parse($program->time)->format('g:i A') }}
                                        </h4>
                                        <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">{{$program->header}}</h4>
                                        <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">Titre : {{$program->title}}</h4>
                                        @forelse($anims as $anim)
                                            @if($program->facilitator == $anim->id)
                                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">Animateur : {{$anim->prenom . ' ' . $anim->nom}}</h4>
                                            @endif
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="single_propram">
                                <div class="inner_wrap">
                                    <div class="circle_img"></div>
                                    <div class="porgram_top">
                                        <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                                            {{ Carbon\Carbon::parse($program->date)->format('F, d, Y') }}
                                        </span>
                                        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                            {{ Carbon\Carbon::parse($program->time)->format('g:i A') }}
                                        </h4>
                                        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">{{$program->header}}</h4>
                                        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Titre : {{$program->title}}</h4>
                                        @forelse($anims as $anim)
                                            @if($program->facilitator == $anim->id)
                                                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Animateur : {{$anim->prenom . ' ' . $anim->nom}}</h4>
                                            @endif
                                        @empty
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand_area black_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80">
                    <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">SPONSORS</h4>
                    <br>
                    <a href="#" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Devenir Sponsors</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brand_wrap">
                    <div class="brand_active owl-carousel">
                        <div class="single_brand text-center">
                            <img src="img/brand/1.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/2.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/x3.png.pagespeed.ic.NCRAQHR1lN.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/4.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/5.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/1.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.VqPKjPX3rN.js"></script><script>eval(mod_pagespeed_L0mWNSTykm);</script>
<script>eval(mod_pagespeed_TZ9Ugx6twQ);</script>
<script src="js/owl.carousel.min.js%2bisotope.pkgd.min.js%2bajax-form.js%2bwaypoints.min.js%2bjquery.counterup.min.js.pagespeed.jc.S2NU-biZkA.js"></script><script>eval(mod_pagespeed_3Q_5M6wpDX);</script>
<script>eval(mod_pagespeed_se9qbc2170);</script>
<script>eval(mod_pagespeed_DEhImhP1J$);</script>
<script>eval(mod_pagespeed_IOc_vI2Ude);</script>
<script>eval(mod_pagespeed_ERX39iaHGq);</script>
<script src="js/imagesloaded.pkgd.min.js%2bscrollIt.js%2bjquery.scrollUp.min.js%2bwow.min.js.pagespeed.jc.WYvJ7upwau.js"></script><script>eval(mod_pagespeed_xI9_Hl9q1h);</script>
<script>eval(mod_pagespeed_d$kXQMCT68);</script>
<script>eval(mod_pagespeed_nbUml4ZXFI);</script>
<script>eval(mod_pagespeed_OF07M_wx94);</script>
<script src="js/gijgo.min.js"></script>
<script src="js/nice-select.min.js%2bjquery.slicknav.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.HgUy_anYPa.js"></script><script>eval(mod_pagespeed_RLa7eW4tX7);</script>
<script>eval(mod_pagespeed_dvzZbrdATg);</script>
<script>eval(mod_pagespeed_aaJNsdI0pj);</script>
<script src="js/tilt.jquery.js"></script>
<script src="js/plugins.js%2bcontact.js%2bjquery.ajaxchimp.min.js%2bjquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bmain.js.pagespeed.jc.ZGnNW0me2-.js"></script><script>eval(mod_pagespeed_iR2a3$4XrZ);</script>

<script>eval(mod_pagespeed_d4EgQBKlko);</script>
<script>eval(mod_pagespeed__N6bOTPbAt);</script>
<script>eval(mod_pagespeed_XrDNQYt$_p);</script>
<script>eval(mod_pagespeed_UUz59EKlwG);</script>
<script>eval(mod_pagespeed_ppxZmKYMsg);</script>
<script>eval(mod_pagespeed_Zvp6Q66M7T);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6cb496b5fd204f6f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/eventcon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 08:39:22 GMT -->
</html>
