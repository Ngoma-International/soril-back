@extends('layouts.appss')

@section('title')
    Evenements
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
                                    Evénements
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

            <div class="padding-horizontal-20 padding-vertical-20">
                <div class="container-fluid">
                    <div class="row">
                        <div class="clearfix"></div>
                        <div class="col-md-8">
                            <div class="toolsBar">
                                <div class="col-md-10 left products-filter-top">
                                    <div class="left">
                                        <span>
                                            L'IRMA organise tout au long de l'année des séminaires, des ateliers et des conférences, destinés à diffuser ses travaux, à entretenir et développer ses réseaux et ceux de ses membres et pour faire progresser la connaissance et la carrière de ses derniers.
                                            <br><br>
                                            Les membres de RIMS bénéficient de tarifs préférentiels sur tous les événements et offres éducatives.
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="heading sub-head">
                                <h3 class="head-4">
                                            <span class="main-color">
                                                Nos
                                            </span>
                                    <span class="bold">
                                                Séminaires
                                            </span>
                                </h3>
                            </div>
                            <div class="grid-list list">
                                @foreach($events as $event)
                                    <div class="col-md-4 shop-item">
                                        <div class="item-box shape shape">
                                        <div class="item-img">
                                            <img alt="" src="{{$event->image}}">
                                            <div class="hidden-img">
                                                <img alt="" src="{{$event->image}}">
                                            </div>
                                        </div>
                                        <h3 class="item-title">
                                            <a href="{{route('evenementDetail', ['id'=>$event->id])}}">
                                                {{$event->titre}}
                                            </a>
                                        </h3>
                                        <div class="item-details">
                                            <p>
                                                {{$event->sousTitre}}
                                            </p>
                                            <p>
                                                <i class="fa fa-calendar"></i>
                                                {{ Carbon\Carbon::parse($event->date)->format('d-m-Y') }}
                                                -
                                                <i class="fa fa-map-marker"></i>
                                                {{$event->ville}}
                                            </p>
                                            <div class="item-price">${{$event->prix}}</div>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center">
                                {{ $events->links() }}
                            </div>
                            <div class="clearfix"></div>

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
