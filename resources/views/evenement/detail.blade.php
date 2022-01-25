@extends('layouts.appss')

@section('title')
    Details Evenements
@endsection

@section('content')
    <div class="container">
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
                                        Event Detail
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

                @if(session('success'))
                    <div class="container">
                        <div class="row">
                            <div class="bg-success">
                                <p>
                                    {{session('success')}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="blog-single">
                                    <div class="post-item">

                                        <div class="details-img">
                                            <img src="{{$event->image}}"
                                                 alt="Our Blog post image goes here">
                                        </div>

                                        <article class="post-content">

                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <i class="fa fa-book post-icon"></i>
                                                    <h2><a href="blog-single.html">
                                                            {{$event->titre}}
                                                        </a></h2>
                                                    <ul class="post-meta">
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i>
                                                            {{ Carbon\Carbon::parse($event->date)->format('d-m-Y') }}
                                                        </li>
                                                        <li><i class="fa fa-folder-open"></i>Type:
                                                            <a href="#">{{$event->typeEvent}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p>
                                                <b>Apercu</b> <br>
                                                {{$event->apercu}}
                                            </p>

                                            <p>
                                                <b>Audience Cible</b> <br>
                                                {{$event->participer}}
                                            </p>

                                            <p>
                                                <b>Animateur</b>
                                                <br>
                                                {{$anim->prenom . ' ' . $anim->nom}}
                                            </p>

                                            <br>

                                            <a class="btn btn-primary shape text-right" href="{{route('regEvent', ['id'=>$event->id])}}">
                                                S'ENREGISTRER
                                            </a>

                                            <div class="margin-top-20">
                                                <div class="divider lft"><i class="fa fa-scissors"></i></div>
                                            </div>
                                        </article>

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Programme du Jour</h4>
                                                    <div class="tabs-style-default">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                @forelse($programs as $program)
                                                                    <li role="presentation" class="">
                                                                        <a href="#{{$program->id}}">
                                                                        <span>
                                                                        <i class="fa fa-briefcase main-color"></i>
                                                                            {{$program->header}}
                                                                        </span>
                                                                        </a>
                                                                    </li>
                                                                @empty
                                                                @endforelse
                                                            </ul>

                                                            <div class="tab-content">
                                                                @forelse($programs as $program)
                                                                    <div role="tabpanel" class="tab-pane shape fade in" id="{{$program->id}}">
                                                                        <p>
                                                                            <b>Title : </b> {{$program->title}}
                                                                        </p>
                                                                        <p>
                                                                            <b>Heure : </b> {{Carbon\Carbon::parse($program->time)->format('h:m')}}
                                                                        </p>
                                                                        @forelse($anims as $anim)
                                                                            @if($program->facilitator == $anim->id)
                                                                                <p>
                                                                                    <b>Animateur : </b> {{$anim->prenom . ' ' . $anim->nom}}
                                                                                </p>
                                                                            @endif
                                                                        @empty
                                                                        @endforelse
                                                                    </div>
                                                                @empty
                                                                @endforelse
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .post-item end -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
