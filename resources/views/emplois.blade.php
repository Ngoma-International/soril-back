@extends('layouts.appss')

@section('title')
    Offres d'emploi
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
                                Offre d'Emploi
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

        <div class="section" style="width: 100%;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <p>Si vous êtes prêt a de nouveaux défis professionnels, recherchez votre prochain job en sélectionnant la catégorie de l'emploi voulu. Ces offres sont faites par des trieces parties et IRMA ne facile que leurs publications. Il n'en assume donc aucune responsabilité.</p>
                    </div>
                </div>
            </div>



            <div class="container">

                <div class="row">
                    <form action="" method="POST">
                        <div class="col-md-11">
                            <div class="row">
                                    <div class="col-md-9 margin-bottom-50">
                                        <script>
                                            function myFunction(value){
                                                var url = 'http://localhost/irma-congo/public/offresEmploi';
                                                if (url.indexOf('?') > -1){
                                                    url = urls + '?secteur' +value
                                                }else{
                                                    url += '?secteur='+value
                                                }
                                                window.location.href = url;
                                            }
                                        </script>
                                        <select class="form-control" name="type" onchange="myFunction(this.value)">
                                            <option>Choisir un secteur</option>
                                            <option value="all">Toute les secteurs</option>
                                            <option value="Transport et Logistique"> Transport et Logistique <!-- option-->
                                            </option>
                                            <option value="Assurances"> Assurances <!-- option-->
                                            </option><option value="Audit et Comptabilité"> Audit et Comptabilité <!-- option-->
                                            </option><option value="Legal, Lawyers & Tax"> Legal, Lawyers &amp; Tax <!-- option-->
                                            </option><option value="Banking & Financial Services"> Banking &amp; Financial Services <!-- option-->
                                            </option><option value="General Trade"> General Trade <!-- option-->
                                            </option><option value="Consulting/Advisory"> Consulting/Advisory<!-- option-->
                                            </option><option value="Construction"> Construction <!-- option-->
                                            </option><option value="Digital, Marketing &amp; Communications"> Digital, Marketing &amp; Communications <!-- option-->
                                            </option><option value="Management"> Management <!-- option-->
                                            </option><option value="Transports/Distribution"> Transports/Distribution <!-- option-->
                                            </option><option value="Finance & Accounting"> Finance &amp; Accounting <!-- option-->
                                            </option><option value="Hotelerie, Restaurants &amp; Tourisme"> Hotelerie, Restaurants &amp; Tourisme <!-- option-->
                                            </option><option value="Real Estate"> Real Estate <!-- option-->
                                            </option><option value="Engineering & Industries"> Engineering &amp; Industries <!-- option-->
                                            </option><option value="Logistics & Supply Chain"> Logistics &amp; Supply Chain <!-- option-->
                                            </option><option value="Human Resources"> Human Resources <!-- option-->
                                            </option><option value="Santé"> Santé <!-- option-->
                                            </option><option value="Publique  & Non Profit"> Publique  &amp; Non Profit <!-- option-->
                                            </option><option value="Technologie d'Information"> Technologie d'Information <!-- option-->
                                            </option>
                                        </select>
                                    </div>
                            </div>

                            <div class="row">

                                @forelse ($emplois as $emploi)

                                    @if(request()->secteur == "all" || request()->secteur == "")
                                        <div class="col-lg-4">
                                            <div class="post-item">

                                                <article class="post-content">
                                                    <div class="post-info-container">
                                                        <div class="post-info">
                                                            <i class="fa fa-tasks post-icon"></i>
                                                            <h2>
                                                                <a href="{{route('detailsEmplois', ['id'=>$emploi->id])}}" style="text-transform: capitalize !important;">

                                                                    {{ $emploi->titre }}
                                                                </a></h2>
                                                            <ul class="post-meta">

                                                                <li class="meta_date">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    {{ $emploi->updated_at }}</li>
                                                                <li><i class="fa fa-folder-open"></i>
                                                                    Type de Contrat: {{ $emploi->contrat }};
                                                                </li>
                                                                <li class="meta-user"><i class="fa fa-user"></i>
                                                                    Date Fin: {{ $emploi->expiration }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="bottom_tools">
                                                        <a class="meta_comments f-left shape" href="{{route('detailsEmplois', ['id'=>$emploi->id])}}">
                                                            <i class="fa fa-location-arrow"></i>{{ $emploi->pays }}</a>



                                                        <a class="f-right more_btn shape" href="{{route('detailsEmplois', ['id'=>$emploi->id])}}">Détails</a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    @else
                                        @if(request()->secteur == $emploi->secteur)
                                            <div class="col-lg-4">
                                            <div class="post-item">
                                                <article class="post-content">
                                                    <div class="post-info-container">
                                                        <div class="post-info">
                                                            <i class="fa fa-tasks post-icon"></i>
                                                            <h2>
                                                                <a href="{{route('detailsEmplois', ['id'=>$emploi->id])}}" style="text-transform: capitalize !important;">

                                                                    {{ $emploi->titre }}
                                                                </a></h2>
                                                            <ul class="post-meta">

                                                                <li class="meta_date">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    {{ $emploi->updated_at }}</li>
                                                                <li><i class="fa fa-folder-open"></i>
                                                                    Type de Contrat: {{ $emploi->contrat }};
                                                                </li>
                                                                <li class="meta-user"><i class="fa fa-user"></i>
                                                                    Date Fin: {{ $emploi->expiration }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="bottom_tools">
                                                        <a class="meta_comments f-left shape" href="{{route('detailsEmplois', ['id'=>$emploi->id])}}">
                                                            <i class="fa fa-location-arrow"></i>{{ $emploi->pays }}</a>



                                                        <a class="f-right more_btn shape" href="{{route('detailsEmplois', ['id'=>$emploi->id])}}">Détails</a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        @endif
                                    @endif

                                @empty

                                Pas d'offre d'emploi

                                @endforelse
                            </div>
                                {{--  <div class="row">																						<div style="padding: 10px 20px 0px; border-top: dotted 1px #CCC;">
                                    <strong>Page 1 of 2</strong>
                                </div>
                                <div class="pagination">
                                    <ul>
                                        <li class="shape selected"><a href="jobs.php?page=1">1</a>
                                        </li>
                                        <li class="shape selected"><a href="jobs.php?page=2">2</a></li>
                                        <li class="shape"><a href=""><i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>  --}}

                            </div>
                        </div>

            </div>
        </div>

    </div>

</div>
@endsection
