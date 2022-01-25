@extends('layouts.appss')

@section('title')
Normes professionnels
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
                                Normes Professionnelles
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
                    <p>Des normes élevées de compétence et d'intégrité sont la marque des professionnels des assurances et du risk management. En tant qu'organisation professionnelle et éducative des assurances et du Risk Management, l'IRMA joue un rôle de premier plan dans l'établissement de ces normes. Elles fournissent un cadre pour nos <span><a href="https://education.irmacongo.org/certification.php" style="    color: #a9bf04;">titres professionnels</a></span> et <span><a href="https://education.irmacongo.org/certification.php" style="    color: #a9bf04;">nos formations </a></span> et pour  <span><a href="https://irmacongo.org/subscribe4.php" style="    color: #a9bf04;">le Développement Professionnel Continu (DPC)</a></span> des affiliés.</p>
                    <p>Le cadre de nos normes définit les connaissances, les compétences et les comportements exigés de ceux qui travaillent dans les assurances et le risk management, c’est-à-dire, ce que les professionnels du risque devraient savoir et ce qu'ils devraient être capables de faire à différents niveaux de leur carrière, ainsi que les qualités personnelles et les comportements nécessaires pour respecter les meilleures pratiques.</p>
                    <p>Nos normes aident également les employeurs à accroître leur capacité organisationnelle en leur donnant une référence par rapport à laquelle recruter et retenir des personnes correctement formées et qualifiées. </p>
                    <br>


                    <div class="heading sub-head margin-top-15">
                        <h3 class="head-6"><span class="main-color">Niveaux </span> de Carrière</h3>
                    </div>
                    <div>
                        <br>
                        Le Cadre des normes professionnelles est basé sur quatre niveaux de carrière, plutôt que sur des rôles ou des titres de poste spécifiques. <br><br>

                        <h4 class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">Niveau Leadership</a></h4>

                        Le plus haut niveau de connaissances et de Compétences.

                        <br>
                        <br>

                        <h4 class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">Niveau Supérieur</a></h4>

                        Niveau avancé de connaissances et de compétences.

                        <br>
                        <br>

                        <h4 class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">Niveau Management</a></h4>

                        Pleine connaissance des concepts et de compétences.

                        <br>
                        <br>

                        <h4 class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">Niveau Assistant</a></h4>

                        Connaissances ou compétences de base ou inexistantes


                    </div>
                </div>

                <div class="col-md-4">
                    <div>
                        <div class="heading sub-head">
                            <h3 class="head-6"><span class="main-color">Cadre </span> des Normes</h3>
                        </div>
                        <h4 class="white fx animated fadeInUp" data-animate="fadeInUp">
                            <a class="main-color" href="#">Cadre Fonctionnel</a>
                        </h4>

                        Les normes fonctionelles décrivent les connaissances et les compétences nécessaires pour faire le travail. Il existe quatre domaines fonctionnels, chacun comportant un certain nombre de composants:
                        <ul style="list-style: disc !important; margin-left: 4rem;">
                            <li style="list-style: disc;">Perspectives et contexte</li>
                            <li style="list-style: disc;">Stratégie et performance</li>
                            <li style="list-style: disc;">Capacités techniques</li>
                            <li style="list-style: disc;">Innovation et catalyseur</li>
                            <li style="list-style: disc;">Capacités organisationnelles</li>
                        </ul>

                        <h4 class="white fx animated fadeInUp" data-animate="fadeInUp"><a class="main-color" href="#">Cadre Comportemental</a></h4>
                        Les compétences comportementales décrivent les qualités personnelles et les comportements nécessaires pour bien faire le travail. Il existe six compétences comportementales:
                        <ul style="list-style: disc !important; margin-left: 4rem;">
                            <li style="list-style: disc;">Courage et confiance</li>
                            <li style="list-style: disc;">Influence et impact</li>
                            <li style="list-style: disc;">Intégrité, éthique et valeurs</li>
                            <li style="list-style: disc;">Innovation et catalyseur</li>
                            <li style="list-style: disc;">Capacité de motiver</li>
                            <li style="list-style: disc;">Collaboration et partenariat</li>
                        </ul>
                    </div>

                    <br>

                    <div class="row">
                        <div class="text-center justify-content-center">
                            <a class="btn main-bg shape" href="{{asset('assets/brochure.pdf')}}">Télecharger le brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
