@extends('layouts.appss')

@section('title')
    Publication
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
                                    Nos Publications
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
                            Cahiers techniques, Prises de Position, livres blancs, études, enquêtes : l'AARMCO se distingue par une abondante production littéraire professionnelle, fruit de l'intelligence collective de ses adhérents.
                            <br>
                            <br>
                            Les membres AARMCO peuvent télécharger gratuitement les versions PDF en se connectant sur le compte membre.
                        </p>
                        <div class="heading sub-head">
                            <h3 class="head-4"><span class="main-color">
                                    Publications </span><span class="bold">
                                    Régulières</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="icon-box-small">
                                    <i class="fa fa-leaf main-bg filled shape md-icon"></i>
                                    <div class="icon-sm-desc md-desc">
                                        <h4>PRISES DE POSITION</h4>
                                        <p>
                                            A son initiative ou à la demande des pouvoirs publics, l'AARMCO prend des positions sur des sujets qui concernent la gestion des risques et des assurances.
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-box-small">
                                    <i class="fa fa-refresh main-bg filled shape md-icon"></i>
                                    <div class="icon-sm-desc md-desc">
                                        <h4>CAHIERS TECHNIQUES</h4>
                                        <p>
                                            Ils ont vocation à fournir des réponses directement applicables au quotidien pour les Risk Managers et assureurs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icon-box-small">
                                    <i class="fa fa-bomb main-bg filled shape md-icon"></i>
                                    <div class="icon-sm-desc md-desc">
                                        <h4>ETUDES ET ENQUETES</h4>
                                        <p>
                                            L'AARMCO produit régulièrement des études sur l'actualité des pratiques de gestion des risques et la fonction de Risk Manager, notamment par le biais d'enquêtes auprès de ses membres.
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-box-small">
                                    <i class="fa fa-hand-grab-o main-bg filled shape md-icon"></i>
                                    <div class="icon-sm-desc md-desc">
                                        <h4>LIVRES BLANCS</h4>
                                        <p>
                                            En partenariat avec d’autres associations ou organismes, l’AARMCO contribue à l’élaboration et la diffusion des bonnes pratiques en matière de gestion des risques via l’élaboration de livres blancs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function myFunction() {
                                var x = document.getElementById("myDIV");
                                if (x.style.display === "none") {
                                    x.style.display = "block";
                                } else {
                                    x.style.display = "none";
                                }
                            }
                        </script>

                        <div class="row" id="myDIV" style="display:none">
                            <div class="container">
                                <div class="login-box-lg">

                                    <div class="clearfix over-hidden">

                                        <div class="login-head f-right">Login</div>
                                    </div>

                                    <div class="login-inner shape">

                                        <h4 class="bold intro uppercase black-color"></h4>

                                        <form class="login-form" id="login-form" method="post" action="{{route('login-subscribe')}}" autocomplete="off">
                                            @csrf
                                            <div class="form-input">
                                                <label class="main-color">Email</label>
                                                <span class="fa fa-user main-color"></span>
                                                <input type="email" required="required" class="form-control shape" name="email" id="email">
                                            </div>
                                            <div class="form-input">
                                                <label class="main-color">Password</label>
                                                <span class="fa fa-lock main-color"></span>
                                                <input name="password" type="password" class="form-control shape" id="password" required="required">
                                            </div>
                                            <div class="form-input">
                                                <input type="submit" class="" value="Login">
                                            </div>

                                            <div class="login-links">
                                                <a>Pas de compte, Enregistrez-vous a une publication</a>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="heading sub-head">
                            <h3 class="head-4"><span class="main-color">
                                    Autres </span><span class="bold">
                                    Publications</span></h3>
                        </div>
                        <div class="panel-group accordion style-2" id="accordion-5" role="tablist">
                            <div class="panel main-bg shape">
                                <div class="panel-heading" role="tab" id="headingOne-5">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseOne-5" aria-expanded="true" aria-controls="collapseOne-5"><i class="fa fa-desktop main-color"></i>
                                            Le Baromètre du Professionnel du Risque</a>
                                    </h4>
                                </div>
                                <div id="collapseOne-5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-5">
                                    <div class="panel-body">
                                        <p>
                                            Tous les deux ans, cette enquête permet de mesurer les évolutions dans la durée de la profession du risque. Le Baromètre constitue un véritable outil de benchmark vous permettant de nous positionner dans l’environnement actuel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel shape new-angle main-bg">
                                <div class="panel-heading" role="tab" id="headingTwo-5">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseTwo-5" aria-expanded="true" aria-controls="collapseTwo-5"><i class="fa fa-circle-o-notch main-color"></i>
                                            Etat du Marché</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo-5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo-5" aria-expanded="true" style="">
                                    <div class="panel-body">
                                        <p>
                                            Chaque septembre, l’AARMCO interroge les principaux courtiers sur les tendances des renouvellements sur le marché des risques d’entreprise, et en restitue le résultat à ses Membres sous la forme d’une Etude « Etat du marché »
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="text-center justify-content-center">
                                <a class="btn main-bg shape" onclick="myFunction()">Connectez-vous</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="padding-horizontal-20 padding-vertical-20">
                <div class="container-fluid">
                    <div class="row">
                        <div class="clearfix"></div>
                        <div class="col-md-8">
                            <div class="clearfix"></div>
                            <div class="grid-list list">
                                @forelse($publications as $publication)
                                    <div class="col-md-4 shop-item">
                                        <div class="item-box shape shape">
                                            <div class="item-img">
                                                <div class="product-buttons">
                                                    <a class="add-cart shape"
                                                       href="#" data-title="Add To Cart" data-tooltip="true">
                                                        <i class="fa fa-shopping-cart"></i></a>
                                                    <a class="shape" href="#" data-title="Add to Wishlist" data-tooltip="true"><i class="fa fa-heart"></i></a>
                                                    <a href="shop-item.html" data-title="Quick view" class="ajax-popup shape" data-tooltip="true"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="item-title">
                                                <a href="{{route('subscribe', ['id'=>$publication->id])}}">
                                                    {{$publication->title}}
                                                </a></h3>
                                            <div class="item-details">
                                                <p>
                                                    {{$publication->note}}
                                                </p>
                                                <div class="item-price">
                                                    <i class="fa fa-calendar"></i>
                                                    {{ $publication->created_at->diffForHumans() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                            <div class="clearfix"></div>
                            <div class="pagination">
                                {{ $publications->links('layouts.custom') }}
                            </div>
                        </div>

                        <aside class="col-md-4">
                            <ul class="sidebar_widgets">
                                <li class="widget widget-categories shape">
                                    <h4 class="widget-head main-color">
                                        La Conférence Annuelle
                                    </h4>
                                    <div class="widget-content">
                                        <p>
                                            Tenue chaque année durant trois joursdurant aucours de la première semaine de février, la Conférence Annuelle AARMCO constitue un rendez-vous incontournable des professionels de la gestion des risuqes et des assurances.
                                            <br><br>
                                            Elle combine une session plénière avec des orateurs de grand talent (professionnels d’envergure dans les assurances et le risk management ainsi que des chefs entreprise de renom) et une dizaines d’ateliers, véritable terreau de réflexion, d’échanges, et de diffusion des bonnes pratiques du Risk Management et des assurances.
                                        </p>
                                        <br>
                                        <div style="">
                                            <img src="{{$annual->image}}"
                                                 alt="Our Blog post image goes here">
                                        </div>

                                        <div class="widget-post-info">
                                            <div class="meta">
                                                <a href="{{route('conference', $annual->id)}}">
                                                    <div class="item-rating" style="font-size: 15px;">
                                                        <b>{{$annual->titre}}</b>
                                                    </div>
                                                </a>
                                                <p style="font-size: 10px !important;"><b>{{$annual->sousTitre}}</b></p>

                                                <p style="margin-top: -2rem !important; font-size: 11px;">{{ Carbon\Carbon::parse($annual->date)->format('F, d, Y') }} <br>{{$annual->ville}}</p>												</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </aside>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
