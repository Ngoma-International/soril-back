@extends('layouts.appss')

@section('title')
    Profile Publication
@endsection

@section('content')
    <div id="contentWrapper">

        <div class="pageContent">

            <div class="page-title title-1 parallax about-me-title" style="background-image: url(&quot;assets/images/page-titles/2.jpg&quot;);
            background-position: 0px 103.6px;" data-stellar-background-ratio="0.65" data-overlay="rgba(0,0,0,.3)">
                <div class="parallax-overlay" style="background-color:rgba(0,0,0,.3)"></div>
                <div class="container">
                    <div class="row">
                        <h1 class="white">{{$user->firstName . ' ' . $user->lastName}}</h1>
                        <h3 class="white">{{$user->societe . ' - ' . $user->fonction}}</h3>
                        <h5 class="white">Vos abonnements : </h5>
                        <div class="my-info shape">
                            <ul class="list">
                                @forelse($abonnements as $abonnement)
                                    @forelse($articles as $article)
                                        @if($abonnement->article_id == $article->id)
                                            <li><i class="fa fa-check main-color"></i>
                                                <em>Titre : </em> {{$article->title}} /
                                                <em>Crée le : </em> {{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y') }} /
                                                @if($abonnement->status)
                                                    <a href="{{route('pdfviewer', ['pdf'=>$article->manuscrit])}}">Lire le Document</a>
                                                @else
                                                    <em>Statut : </em> En attente de confirmation
                                                @endif
                                            </li>
                                        @endif
                                    @empty
                                    @endforelse
                                @empty
                                @endforelse
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
