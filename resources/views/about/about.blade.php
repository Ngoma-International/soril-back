@extends('layouts.appss')

@section('title')
    A Propos
@endsection

@section('content')
    <style>
        .obj {
            list-style: none;
        }

        .obj li::before {
            content: "\2022";
            color: black;
            font-weight: bold;
            size: 100px;
            margin-bottom: 20px;
        }
    </style>

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
                                    A Propos
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
            <br>

            <div style="padding: 20px">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-7">
                            <div class="icons-style-1">
                                <div class="heading sub-head">
                                    <h3 class="head-4">
                                            <span class="main-color">
                                                A Propos
                                            </span>
                                        <span class="bold">
                                                de nous
                                            </span>
                                    </h3>
                                </div>
                                <p>
                                    l'IRMA est une organisation de développement professionel des personnes œuvrant dans les métiers du risque liés aux assurances et au risk management en République Démocratique du Congo. Créé en 2018 en tant qu'Association Sans but Lucratif, Son dessein est d' aider ces personnes à atteindre et à maintenir un haut niveau d’excellence.
                                    <br><br>
                                    L'Institut réalise son dessein en offrant des cours menant à des titres professionnels, des cours de formations menant à des compétences spécifiques et des publications, en facilitant le développement Professionnel Continu, en établissant des normes professionnelles de compétences et de conduite ainsi que par l’affiliation des personnes désireuses de se developper professionellement à travers ses offres.
                                    <br><br>
                                    l’Institut entretient des liens étroits avec des organisations internationales ayant un mandat similaire pour s'assurer que ses affiliés se tiennent au courant des derniers développements.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-4">

                            <div class="panel-group accordion style-2" id="accordion-5" role="tablist">
                                <div class="panel main-bg shape">
                                    <div class="panel-heading" role="tab" id="headingOne-5">
                                        <h4 class="panel-title">
                                            <a role="button"
                                               data-toggle="collapse"
                                               data-parent="#accordion-5"
                                               href="#collapseOne-5" aria-expanded="true"
                                               aria-controls="collapseOne-5"><i class="fa fa-desktop main-color"></i>
                                                Objectifs Stratégiques</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne-5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-5">
                                        <div class="panel-body">
                                            <ul style="list-style: disc !important; margin-left: 4rem;">
                                                <li style="list-style: disc;">
                                                    Devenir une organisation centrale pour le
                                                    développement des compétences dans les
                                                    assurances et dans le risk management;
                                                </li>
                                                <li style="list-style: disc;">
                                                    Créer un impact et une transformation positifs
                                                    et tangibles pour l'industrie et notre pays;
                                                </li>
                                                <li style="list-style: disc;">
                                                    Etablir une base de connaissances pour le secteur
                                                    des assurances et le domaine du risk management;
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="padding-vertical-0">
                <div class="container">
                    <div class="divider centered"><i class="fa fa-sun-o"></i></div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading sub-head">
                            <h3 class="head-4">
                                            <span class="main-color">
                                                Notre
                                            </span>
                                <span class="bold">
                                                Structure
                                            </span>
                            </h3>
                        </div>
                        <div class="tabs-style-ballon">
                            <ul class="nav nav-tabs shape" role="tablist">
                                <li role="presentation"
                                    class="active"><a href="#mission-4">
                                                <span>
                                                    <i class="fa fa-briefcase"></i>Le Conseil d'Administration</span></a></li>
                                <li role="presentation"><a href="#vision-4"><span><i class="fa fa-eye"></i>
                                                    Le Bureau Exécutif</span></a></li>
                                <li role="presentation"><a href="#strategy-4"><span><i class="fa fa-cogs"></i>
                                                    Comité Technique Permanent</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane shape fade in active" id="mission-4">
                                    <div class="container-fluid">
                                        <div class="row">
                                            @forelse($admin as $adm)
                                                <div class="col-md-3">
                                                    <div class="team-box box-3 shape lg">
                                                        <div class="team-img">
                                                            <span></span>
                                                            <img alt="" src="{{$adm->image}}">
                                                        </div>
                                                        <div class="team-details main-bg">
                                                            <h3 class="team-name">
                                                                {{$adm->prenom . ' ' . $adm->nom}}
                                                            </h3>
                                                            <h5 class="team-pos white">
                                                                {{$adm->position}}
                                                                <br>
                                                                {{$adm->email}}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane shape fade" id="vision-4">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <p>Le Bureau Exécutif exécute les décisions de l’Assemblée Générale.</p>
                                                <li style="list-style: disc;">Il contrôle et veille à la bonne marche de l’association;
                                                </li><li style="list-style: disc;">Il veille au respect des statuts et règlement d’ordre intérieur par les membres;
                                                </li><li style="list-style: disc;">Il a les pouvoirs les plus étendus pour représenter l’Association envers les tiers.</li> <p></p>
                                                <p>Le Bureau Exécutif est composé d’un président, d’un vice-président, d’un secrétaire général, d’un secrétaire général adjoint, d’un trésorier, d’un chargé des relations publiques, d’un chargé de la logistique Les membres du Bureau Exécutif sont élus parmi les membres effectifs par l’assemblée générale pour une durée de 5 ans renouvelables. Ils doivent représenter, autant que possible, les différents secteurs économiques auxquels appartiennent les membres de l’Association.</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            @forelse($secretariats as $sec)
                                                <div class="col-md-3">
                                                    <div class="team-box box-3 shape lg">
                                                        <div class="team-img">
                                                            <span></span>
                                                            <img alt="" src="{{$sec->image}}">
                                                        </div>
                                                        <div class="team-details main-bg">
                                                            <h3 class="team-name">
                                                                {{$sec->prenom . ' ' . $sec->nom}}
                                                            </h3>
                                                            <h5 class="team-pos white">
                                                                {{$sec->type}}
                                                                <br>
                                                                {{$sec->email}}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane shape fade" id="strategy-4">
                                    <div class="container-fluid">
                                        <div role="tabpanel" class="tab-pane fade active in" id="u-2" style="padding-left: 4rem;">
                                            <h5>L'AAMRCO est dotée d'un Comité Technique Permanent (CTP) dont les missions sont:</h5>

                                            <p></p><li style="list-style: disc;">Proposer des thèmes d'étude et de réflexion pour les Commissions Techniques</li>
                                            <li style="list-style: disc;">Contribuer et/ou donner un avis scientifique sur les positions de l'AARMCO</li>
                                            <li style="list-style: disc;">Contribuer et/ou valider les publications de l'AARMCO</li>
                                            <li style="list-style: disc;">Développer et mettre en œuvre le programme du Congrès Annuel.</li>
                                            <p></p>
                                            <p>Une Charte du CSP en précise les missions, la composition et le fonctionnement.</p>

                                            <p>
                                                Sous la présidence de Mimile Maisha (Président de l'AARMCO) le CTP se compose actuellement des personnalités suivantes :</p>

                                            <div class="col-md-6">

                                                <ul style="list-style: disc !important; margin-left: 4rem;">
                                                    <li style="list-style: disc;">Gilles Malula</li>
                                                    <li style="list-style: disc;">Dan Parfait</li>
                                                    <li style="list-style: disc;">Philippe Teboko</li>
                                                    <li style="list-style: disc;">Jean Lunda</li>
                                                    <li style="list-style: disc;">Marie-Paul Dunia</li>
                                                    <li style="list-style: disc;">Anne-Marie Fournier</li>
                                                    <li style="list-style: disc;">Debeau Likosa</li>
                                                    <li style="list-style: disc;">Hermes Mirindi</li>
                                                    <li style="list-style: disc;">Merci Deko</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li style="list-style: disc;">Adrien Jules</li>
                                                    <li style="list-style: disc;">Grand Tebo</li>
                                                    <li style="list-style: disc;">Patrick Jean-Luc</li>
                                                    <li style="list-style: disc;">Françoise Marcos</li>
                                                    <li style="list-style: disc;">Michelle Mulunda</li>
                                                    <li style="list-style: disc;">Franck Kalumba</li>
                                                    <li style="list-style: disc;">Estelle Bulaya</li>
                                                    <li style="list-style: disc;">Jérôme Nkuli</li>
                                                    <li style="list-style: disc;">Alain Loji</li>
                                                </ul>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
@endsection
