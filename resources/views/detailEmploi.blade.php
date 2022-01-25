@extends('layouts.appss')

@section('title')
Details Offres d'emploi
@endsection

@section('content')
    <div id="contentWrapper">

        <div class="pageContent">

            <div class="page-title title-1" style="height: 20rem;">

                <div style="padding-right: 3rem; padding-top: 8rem">
                    <div class="heading main-heading text-center">
                        <h3>Offres <span class="bold"><span class="main-color">d'E</span>mpl<span class="main-color">oi</span></span></h3>
                        <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-md-7 "></div>
                        <div class="col-md-4 "><h1>
                                @if(session('message'))
                                    {{session('message')}}
                                @endif
                            </h1></div>


                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 fx animated fadeInLeft" data-animate="fadeInLeft">
                            <div class="section gry-bg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 pro-info-cell">
                                            <div>

                                                <div class="heading sub-head">
                                                    <h3 class=" head-6" style="text-transform: capitalize !important;">
                                                        <span class="main-color">{{$emploi->titre}} </span></h3>
                                                </div>
                                                <ul class="list">
                                                    <li>
                                                        <i class="fa fa-tag"></i> <span class="bold main-color">Salary:</span>&nbsp; $<a href="#">
                                                            {{$emploi->salaire}} $
                                                        </a> <a href="#"></a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-user"></i> <span class="bold main-color">Job Type:&nbsp;</span>
                                                    {{$emploi->contrat}}</li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i> <span class="bold main-color">Date Added: &nbsp;</span>
                                                        {{$emploi->created_at}}											</li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i> <span class="bold main-color">Exp Date: &nbsp;</span>
                                                        {{$emploi->expiration}}											</li>
                                                    <li><i class="fa fa-check"></i> <span class="bold main-color">Requirements: &nbsp;</span>
                                                        {{$emploi->prerequis}}</li>
                                                    <li>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="heading sub-head margin-top-15">
                                                <h3 class=" head-6"><span class="main-color">
											Aperçu de</span> l'emploi</h3>
                                            </div>
                                            <p style="width: 100% !important">
                                                {{$emploi->apercu}}
                                            </p>

                                            <div class="heading sub-head margin-top-15">
                                                <h3 class=" head-6"><span class="main-color">Qualités </span></h3>
                                            </div>
                                            {{$emploi->qualite}}
                                            <div class="heading sub-head margin-top-15">
                                                <h3 class=" head-6"><span class="main-color">Compétences</span></h3>
                                            </div>

                                            {{$emploi->competence}}
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div class="margin-top-15">
                                <a href="{{route('emplois')}}"><button class="btn btn-md main-bg shape">Arrière</button></a>
                            </div>
                        </div>





                        <div class="col-md-4 fx animated fadeInRight" data-animate="fadeInRight">
                            <div class="heading">
                                <h3 class=" head-6"><span class="main-color">Formulaire de </span> Demande D'Emploi</h3>
                                <p>Toutes les espaces avec le sign* doivent^etre remplies</p>
                            </div>
                            <div class="contact-form">
                                <form action="{{route('candidat')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-input">
                                        <label>
                                            Prénom <span class="red">*</span></label>
                                        <input type="text" class="form-control shape" required="" name="FirstName">
                                    </div>
                                    <div class="form-input">
                                        <label>
                                            Nom de Famille <span class="red"></span></label>
                                        <input type="text" class="form-control shape" name="MiddleName">
                                    </div>

                                    <div class="form-input">
                                        <label>
                                            Deuxiéme Prénom <span class="red">*</span></label>
                                        <input type="text" class="form-control shape" required="" name="LastName">
                                    </div>


                                    <div class="form-input">
                                        <label>Email<span class="red">*</span></label>
                                        <input type="text" class="form-control shape" required="" name="email">
                                    </div>

                                    <div class="form-input">
                                        <label>
                                            Province *<span class="red">*</span></label>
                                        <input type="text" class="form-control shape" required="" name="state">
                                    </div>

                                    <div class="form-input">
                                        <label>
                                            Ville <span class="red">*</span></label>
                                        <input type="text" class="form-control shape" required="" name="city">
                                    </div>

                                    <div class="form-input">
                                        <label>
                                            Date de Naissance <span class="red">*</span></label>
                                        <input type="date" class="form-control shape" required="" name="date">
                                    </div>
                                    <div class="form-input">
                                        <label>
                                            Numéro de Téléphone <span class="red">*</span></label>
                                        <input type="tel" class="form-control shape" required="" name="phone">
                                    </div>
                                    <div class="form-input">
                                        <label>Télécharger le CV</label>
                                        <input class="form-control shape" type="file" name="file">
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-md main-bg shape" value="Cotinuer">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
