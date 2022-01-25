@extends('layouts.appss')

@section('title')
    Developpement Continu
@endsection

@section('content')
<div id="contentWrapper">

    <div class="pageContent">

        <div class="page-title title-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="page-title title-5"
                         style="background:url('assets/images/page-titles/title-light.jpg') no-repeat 0% 0"
                         data-stellar-background-ratio="0.65">
                        <div class="heading main-heading centered">
                            <br><br><br><br>
                            <h4 class="sub-title">
                                Developpement Professionnel Continu
                                <span class="main-color">
                                        </span>
                            </h4>
                            <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid padding-vertical-20 padding-horizontal-20">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        Dans un secteur et un domaine en constante évolution comme celui des assurances et du risk management respectivement, il n'a jamais été aussi important de maintenir vos compétences à jour et de vous préparer a de nouvelles opportunités.
                        <br><br>
                        Le Dévelopment Professionel Continu (DPC) permet aux détenteurs de nos titres non seulement d’évaluer leurs compétences, mais également de mesurer leurs engagements aussi bien à accroître leur propre expertise qu’à repousser les limites du savoir, du savoir-faire et de l’expérience de la profession dans son ensemble.
                        <br><br>
                        Afin de garder leurs titres octroyés par IRMA qui courent pour une periode de deux ans, les détenteurs des titres IRMA doivent s'assurer qu'ils se conforment aux éxigences du DPC.
                        <br><br>
                        Le détenteur d’un de nos titres professionnels doit accumuler au moins 25 points DPC et payer les frais de renouvellement tous les deux ans.
                    </p>
                    <div class="heading sub-head">
                        <h3 style="margin: 5px!important;" class="head-4"><span class="main-color">
                                Point </span><span class="bold">
                                par Activité</span></h3>
                        <div>

                            <h4 style="margin: 5px!important;" class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">10 points</a></h4>
                            Participation à des conférences organisées IRMA.
                            <br>
                            <br>

                            <h4 style="margin: 5px!important;" class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">10 points</a></h4>

                            Participation aux programmes éducatifs IRMA.
                            <br>
                            <br>

                            <h4 style="margin: 5px!important;" class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">2 points</a></h4>
                            Participation aux événements soutenus par IRMA.
                            <br>
                            <br>

                            <h4 style="margin: 5px!important;" class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">2 points par session</a></h4>

                            Conférencier / Animateur à toute conférence externe sur les risques (par exemple, conférence, séminaire, atelier, etc.)
                            <br>
                            <br>

                            <h4 style="margin: 5px!important;" class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">3 points </a></h4>

                            Enseigner des cours relatives aux assurances et au risk management dans un établissement d'enseignement postsecondaire.
                            <br>
                            <br>
                            <h4 style="margin: 5px!important;" class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">15 points</a></h4>
                            Rédaction de publications / articles liés à la gestion des risques : 15 points par manuel (si auteur unique).
                            8 points par manuel (si collaboration): 2 points par article contribué ; 2 points par vidéo; 2 points par interview publiée.
                            <br>
                            <br>
                            <h4 style="margin: 5px!important;" class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">5 points</a></h4>
                            Membre du conseil d'administration ou équivalent dans une organisation à but non lucratif/commerce ou association professionnelle liée aux risques.
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="panel-group accordion style-2" id="accordion-5" role="tablist">
                        <div class="panel main-bg shape">
                            <div class="panel-heading" role="tab" id="headingOne-5">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseOne-5" aria-expanded="true" aria-controls="collapseOne-5"><i class="fa fa-desktop main-color"></i>
                                        Conditions du DPC IRMA
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-5">
                                <div class="panel-body">
                                    <p>Période Applicable</p>
                                    Le programme DPC pour chaque affilié est d’une période fixe de deux ans allant du début janvier à la fin décembre de l’année suivante. Les affilié qui se joignent après Juin d'une année donnée ne seront tenus de commencer leur programme DPC qu'en janvier de l'année suivante.
                                    <br><br>
                                    <p>Mise à Jour des Points</p>
                                    Pour mettre à jour vos points DPC, veuillez soumettre les justificatifs (certificats de réussite ou de participation/preuve de présence) de vos activités DPC. Il incombe au membre de conserver un registre de ses activités DPC.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center justify-content-center">
                            <a class="btn main-bg shape" href="{{asset('assets/fiche.pdf')}}">Registre des Points DPC</a>
                            <br><br>
                            <a class="btn main-bg shape" href="{{route('dcp.index')}}">Soumettre Documents DCP</a>
                            @if(session('message'))
                                <p>{{session('message')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
