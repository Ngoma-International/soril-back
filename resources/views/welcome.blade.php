@extends('layouts.appss')

@section('title')
    Irma - Accueil
@endsection

@section('content')
    <div class="">
        <div id="slider_wrapper"
             class="rev_slider_wrapper fullscreen-container"
             data-alias="photography1" style="background-color:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
            <div id="slider" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>	<!-- SLIDE  -->
                    <li data-index="rs-214" class="dark" data-transition="fade"
                        data-slotamount="7"  data-easein="default"
                        data-easeout="default" data-masterspeed="300"
                        data-rotate="0"  data-saveperformance="off"  data-title="Slide"
                        data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/sliders/rev/bg-03.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <div class="tp-caption Sports-Display uppercase tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-1"
                             data-x="['left','left','left','left']"
                             data-hoffset="['30','30','30','30']"
                             data-y="['top','top','top','top']"
                             data-voffset="['40','40','40','20']"
                             data-fontsize="['30','30','30','20']"
                             data-lineheight="['30','30','30','20']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;color:#fff;letter-spacing:3px">ELEVEZ
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Sports-Display uppercase tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-1"
                             data-x="10"
                             data-hoffset="['30','30','30','30']"
                             data-y="0"
                             data-voffset="['40','40','40','20']"
                             data-fontsize="['30','30','30','20']"
                             data-lineheight="['30','30','30','20']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;color:#fff;letter-spacing:3px">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption main-color uppercase heavy-font tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-2"
                             data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                             data-y="['top','top','top','top']" data-voffset="['70','70','70','40']"
                             data-fontsize="['80','80','80','60']"
                             data-lineheight="['80','80','80','60']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="x:[-105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="750"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.05"
                             data-responsive_offset="on"
                             style="z-index: 6;
                             font-family: Arial;white-space: nowrap; font-weight: normal!important;">
                            Votre Carrière
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption sfb tp-resizeme gry-sep" data-x="20" data-y="160" data-start="1500"
                             data-speed="600"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                        </div>

                        <div class="tp-caption customin ltl lg-list-item tp-resizeme white"
                             data-x="70" data-y="230" data-start="2400"
                             data-transform_idle="o:1;"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                            <a style="color: inherit" href="{{ route('dev-continu') }}">
                                <i class="fa fa-leaf main-color"></i>
                                Développement Professionel Continu
                            </a>
                        </div>

                        <div class="tp-caption ltl tp-resizeme gry-sep"
                             data-x="70" data-y="280" data-start="2400"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                        </div>

                        <div class="tp-caption customin ltl lg-list-item tp-resizeme white"
                             data-x="120" data-y="300" data-start="2700"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-easing="Back.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                            <a style="color: inherit" href="{{ route('professional') }}">
                                <i class="fa fa-recycle main-color"></i>Normes Professionnelles
                            </a>
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme gry-sep"
                             data-x="120" data-y="370" data-start="2700"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-speed="600"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                        </div>

                        <div class="tp-caption customin ltl lg-list-item tp-resizeme white"
                             data-x="170" data-y="400" data-start="3000"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-speed="600"
                             data-easing="Back.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                            <a style="color: inherit" href="{{ route('ethique') }}">
                                <i class="fa fa-puzzle-piece main-color"></i>
                                Code d'Ethique
                            </a>
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme gry-sep"
                             data-x="170" data-y="460" data-start="3000"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-speed="600"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                        </div>

                        <div class="tp-caption customin ltl lg-list-item tp-resizeme white"
                             data-x="220" data-y="490" data-start="3300"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-speed="600"
                             data-easing="Back.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                            <a style="color: inherit" href="{{ route('emplois') }}">
                                <i class="fa fa-search main-color"></i>
                                Offres D'Emploi
                            </a>
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme gry-sep"
                             data-x="220" data-y="540" data-start="3300"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-speed="600"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn">
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme uppercase"
                             data-x="340" data-y="580" data-start="3600"
                             data-transform_in="x:-50px;skX:100px;opacity:0;s:1000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-speed="600"
                             data-easing="Back.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"><a class="btn btn-xl main-bg round" style="white-space:nowrap" href="{{route('membre')}}">Adhérez Aujourd'hui</a>
                        </div>


                    </li>
                    <li data-index="rs-163" data-transition="slideoververtical" data-slotamount="7" class="dark"  data-easein="default" data-easeout="default" data-masterspeed="1500" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/sliders/rev/bg-04.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption main-color uppercase tp-resizeme text-center"
                             id="slide-163-layer-3"
                             data-x="['middle','middle','middle','middle']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['-10','-10','-10','-10']"
                             data-fontsize="['30','30','30','20']"
                             data-lineheight="['45','45','45','45']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="10"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap">
                            l'IRMA est une organisation <br> de développement professionel <br>des
                            personnes œuvrant dans les métiers <br>du risque liés aux assurances et
                            <br>au risk management en <br>République Démocratique du Congo.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-btn rev-maxround rev-bordered  "
                             id="slide-163-layer-6"
                             data-x="['middle','middle','middle','middle']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['180','180','180','180']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                             data-responsive_offset="on"
                             data-responsive="off"
                             style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 600; color: darkolivegreen;font-family:Raleway;background-color:rgba(0, 0, 0, 0);padding:13px 35px 13px 35px;border-color:rgba(255, 255, 255, 0.25);border-style:solid;border-width:1px;border-radius:30px 30px 30px 30px;letter-spacing:1px;">
                            <a href="{{route('about')}}">LIRE PLUS</a>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
        <div>
            <div class="heading full-heading alter-gry" style="background-image:url('assets/images/patterns/bg2.jpg')">
                <h4 class="inner-head" style="font-weight: 200;">
                    A la Poursuite <span class="main-color light-font">de l'Excellence</span>
                </h4>
                <h4 class="small-heading"><span class="main-color">
                            dans les Assurances et le Risk Management</span>  en R.D.Congo
                </h4>
            </div>

            <div style="margin: 50px">
                <p class="heading-desc centered">
                    L’IRMA crée un cheminement de carrière pour les
                    professionnels des assurances et du risk management
                    en leur offrant des cadres de connaissances,
                    des compétences et des comportements dont ils
                    ont besoin d'aujourd'hui pour répondre aux exigences
                    d'un environnement global du risque de plus en plus complexe et interconnecté.
                </p>
                <div class="row">
                    <div class="col-md-3 zindx-1">
                        <div class="fx" data-animate="fadeInLeft" data-animation-delay="200">
                            <div class="icons-style-2 t-right">
                                <i class="icons icons-basic-alarm"></i>
                                <span class="tri-line"></span>
                                <h4 class="bold uppercase heading">Conférence Annuelle</h4>
                                <p>
                                    Un véritable terreau de réflexion, d’échanges et de diffusion des bonnes pratiques pour les professionels des assurances et du Risk Management
                                </p>
                            </div>
                        </div>
                        <div class="fx" data-animate="fadeInLeft" data-animation-delay="400">
                            <div class="icons-style-2 t-right">
                                <i class="icons icons-basic-lock"></i>
                                <span class="tri-line bottom-tri"></span>
                                <h4 class="bold uppercase heading">
                                    <a href="events.php">
                                        Séminaires
                                    </a>
                                </h4>
                                <p>
                                    Intercatifs et animés par des experts de renom sur des thèmes d’actualité répondant aux besoins de connaissances practiques des particiapnts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 t-center zindx-0">
                        <img class="fx" data-animate="fadeInUp" alt="" src="assets/images/desktop.png" />
                    </div>
                    <div class="col-md-3 zindx-1">
                        <div class="fx" data-animate="fadeInRight" data-animation-delay="800">
                            <div class="icons-style-2">
                                <i class="icons icons-basic-pencil-ruler"></i>
                                <span class="tri-line left"></span>
                                <h4 class="bold uppercase heading">Formations Certifiantes</h4>
                                <p>
                                    Des cours qui menent à l’obtention des titres professionnels vous permettant d’augmenter votre employabilité et votre autorité professionelle.
                                </p>
                            </div>
                        </div>
                        <div class="fx" data-animate="fadeInRight" data-animation-delay="1000">
                            <div class="icons-style-2">
                                <i class="icons icons-basic-home"></i>
                                <span class="tri-line left bottom-tri" style=""></span>
                                <h4 class="bold uppercase heading">Formations Qualifiantes</h4>
                                <p>
                                    Des cours qui vous permettent de vous initier, vous perfectionner ou vous spécialiser rapidement dans une expertise particulière.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid" style="background-image:url('assets/images/people.jpg'); padding: 20px!important"
         data-stellar-background-ratio="0.4">
        <div class="heading full-heading main-bg">
            <h3 style="font-weight: normal!important;" class="inner-head white">Message du président</h3>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <br>
                    <article class="fx feature-img" data-animate="fadeInUp" data-animation-delay="">
                        <figure class="shape">
                            <img alt="" src="assets/images/mimile.png" />
                        </figure>
                        <div class="feature-details-hidden">
                            <h5 class="bold feature-head main-color">Mimile MAISHA MUKUNA</h5>
                            <p>
                                Président
                            </p>
                            <button type="button"
                                    class="btn main-bg btn-lg shape"
                                    data-toggle="modal"
                                    data-target=".bs-example-modal-lg">LIRE PLUS
                            </button>
                        </div>
                    </article>
                </div>
                <div class="col-md-9 col-7">
                    @forelse($message->slice(0,2) as $mes)
                    <div class="row">
                        <div class="my-info shape">
                            <ul class="list">
                                <li><i class="fa fa-check main-color"></i>
                                    {{$mes->titreMessage}}
                                </li>
                                <li><i class="fa fa-calendar main-color"></i>
                                    {{$mes->date}}
                                    <i class="fa fa-microphone main-color"></i>
                                    {{$mes->prenom . ' ' . $mes->nom}}
                                </li>
                                <li><i class="fa fa-download main-color"></i>
                                    <a href="{{route('message', ['id'=>$mes->id])}}">
                                        Découvrir
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    @empty
                        <spam>Aucun membre</spam>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg"
             tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header t-left">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Mimile MAISHA MUKUNA</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Président d'IRMA CONGO</h4>
                        <p>
                            M. Mimile Mukuna Maisha est un expert en droit international des affaires et gestion internationale des risques et assurances des affaire. Depuis 2013, il est Directeur Général de First Continental Legal and Risk Consulting, basé a Londres et Johannesburg, où il conseille toutes les catégories d'investisseurs internationaux et de gouvernements africains sur les traités d'investissement internationaux, la gestion des risques des Investissements Directs Etrangers et sur les transactions de financement internationales.
                        </p>

                        <p>
                            M. Maisha a débuté sa carrière professionnelle en 1994 à la Munich Reinsurance comme que directeur adjoint puis directeur des marchés des pays francophones et lusophones en Africain. Durant ses fonctions a la Munich Re, M. Maisha sera conseiller aux gouvernement Mozambicain et Rwandais pour les libéralisation des marchés des assurances dans leurs pays respectifs et sera le Consultant principal pour la création de la première société d'assurance en Guinée Equatoriale. Il rejoint en 1997 Maritime Brokers and Consultants en tant que Directeur responsable des classes d'assurance hors-transport et du Département Afrique. Puis, en 1999, il a fera partie du groupe d'experts sud-africains de renom qui créerons à Londres et Johannesburg la société de consultance en Financement/Transfert Alternatif des Risques Eikos Risk Applications où il a conseillé des multinationales et des SPV sur les solutions de Financement des Alternatif des Risques et de financement structuré. En 2001, il sera nommé directeur général de l'assureur mozambicain Compania Geral de Seguros da Mozambique (CGSM) et, en 2003, il retournera en Afrique du Sud pour rejoindre, en tant que Directeur Général, Phoenix Risk Solutions, un courtier de réassurance et Consultance en Transfert Alternatif des risques pour lequel il a ouvert des bureaux de représentation à Dakar, Kinshasa et Lagos.
                        </p>

                        <p>
                            Depuis 2019, M. Maisha est Président de l’African Risk Management Society (ARiMaS). Il intervient régulièrement lors de conférences et séminaires en Afrique sur la gestion des risques commerciaux et le droit des investissements internationaux et est l'auteur du livre populaire sur la gestion des risques des affaires en Afrique «Why Risk so Much for so Little?»
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid" style="margin: 20px!important;">
        <div class="padding-vertical-40 text-center">
            <h2>NOS PARTENAIRES</h2>
        </div>
        <div class="clients horizontal-slider"
             data-slides_count="{{ count($partenaires) }}"
             data-scroll_amount="{{ count($partenaires) }}" data-slider-speed="300"
             data-slider-infinite="1" data-slider-dots="0"
             data-slider-arrows="1">
             @forelse ($partenaires as $partenaire)

             <div>
                 <a href="">
                     <img style="height: 79px; width: 170px; object-fit:scale-down; border: 2px solid #000000" src="{{ $partenaire->image }}" alt="">
                 </a>
             </div>

             @empty

             <span>Aucun partenaire</span>

             @endforelse
        </div>
    </div>

@endsection
