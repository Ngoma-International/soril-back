@extends('layouts.appss')

@section('title')
    Membres
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
                                    Adhésions
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

            <div style="padding: 20px">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-7">
                            <div class="icons-style-1">
                                <p>
                                    Etre un affilié de l'IRMA témoigne de votre bonne conduite et indique que vous avez suivi une formation approfondie en assurance ou en risk management et que vous avez l'expérience nécessaire à des différents niveaux.
                                    <br><br>
                                    Mais aussi, être un affilié éxige que vous accepter de respecter
                                    <a href="">nos normes professionnelles</a> et de souscrire à notre
                                    <a href="">Code d’Ethique.</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-4">
                            <div>
                                <h4 style="margin: 0px!important;">Etes-vous déjà membre?</h4>
                                Inscrivez-vous aux Commissions Techniques?
                                <a href="{{route('techniques')}}" class="btn main-bg shape new-angle">S'INSCRIRE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row parallax"
                     style="background-image:url('assets/images/people.jpg')"
                     data-stellar-background-ratio="0.4">
                    <div class="heading full-heading main-bg">
                        <h3 class="inner-head white" style="font-weight: normal!important;">Categories des membres</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="testimonials testimonials-4 horizontal-slider"
                             data-slides_count="3" data-scroll_amount="1"
                             data-slider-speed="300" data-slider-infinite="1"
                             data-slider-dots="1" data-slider-arrows="0">
                            <div>
                                <div class="testimonials-bg white shape lg">
                                    <h3>Membres Ordinaires</h3>
                                    <ul style="list-style: disc !important; margin-left: 4rem; margin-bottom: 20px">
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp">

                                            Personnes ayant un minimum d'une année d'expérience
                                            dans le secteur des assurances ou dans le domaine du risk management;
                                        </li>
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp"
                                            data-animation-delay="100">
                                            Avoir réussi aux Examens CQARM1/Détenteur
                                            d'un Certificat d'Aptitude dans les Assurances
                                            et le Risk Management;
                                        </li>
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp"
                                            data-animation-delay="200">
                                            Avoir un niveau académique CQ Niveau 2;
                                        </li>
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp"
                                            data-animation-delay="200">
                                            Payer les frais d'affiliation de 100$/Pers
                                            (du 1er janvier au 31 décembre) ou 50$
                                            affiliation au 2ème semestre (à partir du 1er juillet).
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="row justify-content-center text-center">
                                        <a class="btn btn-md btn-3d btn-white"
                                           href="{{route('individual', ['type'=>'Ordinaire', 'amount'=>'100'])}}">
                                            <i class="fa fa-gear"></i>
                                            Membre Individuelle
                                        </a>
                                        <br> <br>
                                        <a class="btn btn-md btn-3d btn-white"
                                           href="{{route('collective')}}">
                                            <i class="fa fa-gear"></i>
                                            Membre Collective
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testimonials-bg white shape lg">
                                    <h3>Membres Associés</h3>
                                    <ul style="list-style: disc !important; margin-left: 4rem; margin-bottom: 20px">
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp">
                                            Personnes ayant entre deux ans et 5 ans d'expérience dans
                                            le secteur des assurances ou dans le domaine du risk management;
                                        </li>
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp"
                                            data-animation-delay="100">
                                            Avoir réussi aux Examens CQARM2/Détenteur
                                            d'un Certificat d'Aptitude dans les Assurances et le Risk Management
                                        </li>
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp"
                                            data-animation-delay="200">
                                            Avoir un niveau académique CQ Niveau 3
                                        </li>
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp"
                                            data-animation-delay="200">
                                            Payer les frais d'affiliation de 150$/Pers
                                            (du 1er janvier au 31 décembre) ou
                                            75$ affiliation au 2ème semestre (à partir du 1er juillet)
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="row justify-content-center text-center">
                                        <a class="btn btn-md btn-3d btn-white"
                                           href="{{route('individual', ['type'=>'Associés', 'amount'=>'150'])}}">
                                            <i class="fa fa-gear"></i>
                                            Membre Individuelle
                                        </a>
                                        <br> <br>
                                        <a class="btn btn-md btn-3d btn-white"
                                           href="{{route('collective')}}">
                                            <i class="fa fa-gear"></i>
                                            Membre Collective
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testimonials-bg white shape lg">
                                    <h3>Affiliés Fellows</h3>
                                    <ul style="list-style: disc !important; margin-left: 4rem; margin-bottom: 20px">
                                        <li class="fx"
                                            style="list-style: disc;"
                                            data-animate="fadeInUp">
                                            Personnes ayant plus de cinq années
                                            d'expérience dans le secteur des assurances
                                            ou dans le domaine du risk management;
                                        </li>
                                        <li class="fx"
                                            data-animate="fadeInUp"
                                            style="list-style: disc;"
                                            data-animation-delay="100">
                                            Avoir réussi aux Examins CQARM3/Détenteur
                                            d'un Certificat d'Aptitude dans les
                                            Assurances et le Risk Management;
                                        </li>
                                        <li class="fx"
                                            data-animate="fadeInUp"
                                            style="list-style: disc;"
                                            data-animation-delay="200">
                                            Avoir un niveau académique CQ Niveau 4;
                                        </li>
                                        <li class="fx"
                                            data-animate="fadeInUp"
                                            style="list-style: disc;"
                                            data-animation-delay="200">
                                            Payer les frais d'affiliation de 200$/Pers
                                            (du 1er janvier au 31 décembre) ou 100$
                                            affiliation au 2ème semestre (à partir du 1er juillet).
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="row justify-content-center text-center">
                                        <a class="btn btn-md btn-3d btn-white"
                                           href="{{route('individual', ['type'=>'Fellows', 'amount'=>'200'])}}">
                                            <i class="fa fa-gear"></i>
                                            Membre Individuelle
                                        </a>
                                        <br> <br>
                                        <a class="btn btn-md btn-3d btn-white"
                                           href="{{route('collective')}}">
                                            <i class="fa fa-gear"></i>
                                            Membre Collective
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <button type="button"
                                    class="btn main-bg btn-lg shape"
                                    data-toggle="modal"
                                    data-target=".bs-example-modal-lg">
                                Lire Plus Sur les Examens CQARM
                            </button>
                            <div style="padding: 5px; display: inline"></div>
                            <button type="button"
                                    class="btn main-bg btn-lg shape"
                                    data-toggle="modal"
                                    data-target=".bs-example-modal-lg-2">
                                Lire Plus Sur les Niveaux CQ
                            </button>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="modal fade bs-example-modal-lg"
                     tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header t-left">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">
                                    LES EXAMENS CQARM
                                </h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Les Examens CQARM permettent de garantir
                                    qu'une norme nationale est maintenue en
                                    termes de compétences et de connaissances requises
                                    pour les affiliés d'IRMA d'occuper différents
                                    niveaux de fonctions ou prester certains types de
                                    service dans le secteur des assurances et dans le
                                    domaine du risk management en R.D. Congo.
                                    L'admission à une particulière affiliation
                                    d'IRMA (Ordinaire, Associée ou Fellow) est donc
                                    conditionnée entre autres par la réussite à
                                    l'Examen CQARM correspondant.
                                </p>
                                <hr>

                                <h4>Aperçu des Examens</h4>
                                <p>
                                    Conteenu d'apercu
                                </p>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bs-example-modal-lg-2"
                     tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header t-left">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">
                                    LES NIVEAUX CQ
                                </h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Le CQ est un ensemble des niveaux appliqués par IRMA pour catégorisser et uniformiser les qualifications des personnes œuvrant dans les métiers du risque liés aux assurances et au risk management en République Démocratique du Congo ou celles des personnes désireuses d'y travailler.
                                    <br><br>
                                    Le CQ se compose de 6 niveaux. Les qualifications à caractère non-manuel, aritistique, sportif ou réligieux ne sont pas prises en considération.
                                </p>
                                <hr>

                                <h4>Niveau de qualification</h4>
                                <ul style="list-style: disc !important; margin-left: 4rem;">
                                    <li style="list-style: disc;">Niveau 1: Diplôme d’Etat plus formation courte ou cours spécialisés </li>
                                    <li style="list-style: disc;">Niveau 2 : Diplôme d’institut Supérieur </li>
                                    <li style="list-style: disc;">Niveau 3 : Diplôme de 1er Cycle/Graduat d'une université ou d'un institut supérieur </li>
                                    <li style="list-style: disc;">Niveau 4 : Diplôme de licence d'une université agréée ou d'un institut supérieur agréé </li>
                                    <li style="list-style: disc;">Niveau 5 : Diplôme de Maîtrise</li>
                                    <li style="list-style: disc;">Niveau 6 : Diplôme de docteur</li>

                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div style="padding: 50px!important;">
                        <div class="heading sub-head">
                            <h3 class="head-4"><span class="main-color">
                                            Avantages </span><span class="bold">d'être Membre</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="icon-box-small">
                                    <i class="main-bg filled shape md-icon">1</i>
                                    <div class="icon-sm-desc md-desc">
                                        <p>
                                            Accessibilité à un réseau national et international des experts en assurances et risk management incluant des activités de réseautage en compagnie de vos pairs ainsi que divers experts du milieu du risk managemen et des assurances.
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-box-small">
                                    <i class="main-bg filled shape md-icon">2</i>
                                    <div class="icon-sm-desc md-desc">
                                        <p>
                                            Le droit de collaborer à des sous-comités liés à plusieurs portefeuilles dont l'éducation, l'organisation d'événements et le développement.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icon-box-small">
                                    <i class="main-bg filled shape md-icon">3</i>
                                    <div class="icon-sm-desc md-desc">
                                        <p>Développer vos connaissances et vos compétences en bénéficiant des travaux des Commissions Techniques et de nombreuses publications (livres blancs, rapports techniques, études des cas, enquêtes...).</p>
                                    </div>
                                </div>
                                <div class="icon-box-small">
                                    <i class="main-bg filled shape md-icon">4</i>
                                    <div class="icon-sm-desc md-desc">
                                        <p>
                                            Propulser votre carrière en ayant accès aux tarifs réduits, aux formations qualifiantes et formations certifiantes, à des séminaires ainsi qu'à la Conférence Annuelle IRMA.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
