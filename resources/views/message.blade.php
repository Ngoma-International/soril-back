@extends('layouts.appss')

@section('title')
    Irma - Message
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
                                    Messages
                                    <span class="main-color">
                                            </span>
                                </h4>
                                <div class="heading-separator"><span class="main-bg"></span>
                                    <span class="dark-bg"></span></div>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="padding-horizontal-20 padding-vertical-20">
                <div class="container-fluid">
                    <div class="row">


                        <aside class="col-md-3" style="margin-left: 2rem; margin-right: 2rem">

                            <ul class="sidebar_widgets">
                                <li class="widget search-widget shape">

                                    <img alt="" class="bordered-img shape lg main-border img"
                                         src="{{$message->image}}">
                                    <a class="link" data-toggle="modal" data-target=".bs-example-modal-login">
                                        <p>
                                            {{$message->prenom . ' ' . $message->nom}}
                                        </p>
                                    </a>
                                    <p style="margin-top: -2rem"><b>{{$message->titreAuteur}}</b></p>

                                </li>
                            </ul>
                        </aside>


                        <div class="col-md-7">
                            <h5>
                                {{$message->titreMessage}}
                            </h5>
                            <p style="margin-top: -2rem"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$message->date}}</p>
                            <p style="margin-top: -2rem">{{$message->prenom . ' ' . $message->nom}}</p>

                            <p>
                                {{$message->message}}
                            </p>


                            <p>Par : {{$message->prenom . ' ' . $message->nom}}</p>
                            <p style="margin-top: -2rem">{{$message->titreAuteur}}</p>


                        </div>
                        <div class="col-md-1"></div>

                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
