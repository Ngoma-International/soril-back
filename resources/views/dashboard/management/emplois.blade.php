@extends('dashboard.layout.app')

@section('content')
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Emploi & Job</h3>
                                <div class="nk-block-des text-soft">
                                    <p>
                                        {{count($membres)}} Emploi (s)
                                    </p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <a data-toggle="modal" data-target="#update" class="btn btn-white btn-outline-light">
                                                    <em class="icon ni ni-plus"></em>
                                                    <span>AJOUTER UN EMPLOI</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        @if(session('message'))
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <div class="nk-block-des">
                                        <div class="example-alert">
                                            <div class="alert alert-success alert-icon">
                                                <em class="icon ni ni-check-circle"></em> <strong>Successfully</strong>.
                                                {{session('message')}} </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card card-preview">
                            <div class="card-inner">
                                <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                    <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </th>
                                        <th class="nk-tb-col"><span class="sub-text">Titre ou Position</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Salaire Mensuel</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date d'Expiration</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Ville</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($membres as $sec)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </td>

                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{$sec->titre}}
                                                            <span class="dot dot-success d-md-none ml-1"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->salaire}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->expiration}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li>
                                                        <span>{{$sec->ville}}</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#update-{{$sec->id}}">
                                                            <em class="icon ni ni-pen2"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action">
                                                        <form action="{{ route('emplois.destroy' , $sec->id)}}" method="POST">
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            {{ csrf_field() }}

                                                                <button type="submit" class="btn btn-primary">
                                                                    <em class="icon ni ni-trash-alt"></em>
                                                                </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->
                                        <div class="modal fade" tabindex="-1" role="dialog" id="update-{{$sec->id}}">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                    <div class="modal-body modal-body-lg">
                                                        <h5 class="title">Update Emploi</h5>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                            </li>
                                                        </ul><!-- .nav-tabs -->
                                                        <form action="{{route('emplois.update', $sec->id)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="personal">
                                                                    <div class="row gy-4">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="prenom">Titre ou Position</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="titre" value="{{$sec->titre}}"
                                                                                       placeholder="Enter a Title">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Salaire</label>
                                                                                <input type="number" class="form-control form-control-lg"
                                                                                       name="salaire" value="{{$sec->salaire}}"
                                                                                       placeholder="Enter salaire">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Date d'expiration</label>
                                                                                <input type="date" class="form-control form-control-lg"
                                                                                       name="expiration" value="{{$sec->expiration}}"
                                                                                       placeholder="Enter date">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Type Secteur : {{$sec->secteur}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="secteur"
                                                                                            data-search="on">
                                                                                        <option value="Transport et Logistique"> Transport et Logistique <!-- option-->
                                                                                        </option><option value="Assurances"> Assurances <!-- option-->
                                                                                        </option><option value="Audit et Comptabilité"> Audit et Comptabilité <!-- option-->
                                                                                        </option><option value="Legal, Lawyers &amp; Tax"> Legal, Lawyers &amp; Tax <!-- option-->
                                                                                        </option><option value="Banking &amp; Financial Services"> Banking &amp; Financial Services <!-- option-->
                                                                                        </option><option value="General Trade"> General Trade <!-- option-->
                                                                                        </option><option value="Consulting/Advisory"> Consulting/Advisory<!-- option-->
                                                                                        </option><option value="Construction"> Construction <!-- option-->
                                                                                        </option><option value="Digital, Marketing &amp; Communications"> Digital, Marketing &amp; Communications <!-- option-->
                                                                                        </option><option value="Management"> Management <!-- option-->
                                                                                        </option><option value="Transports/Distribution"> Transports/Distribution <!-- option-->
                                                                                        </option><option value="Finance &amp; Accounting"> Finance &amp; Accounting <!-- option-->
                                                                                        </option><option value="Hotelerie, Restaurants &amp; Tourisme"> Hotelerie, Restaurants &amp; Tourisme <!-- option-->
                                                                                        </option><option value="Real Estate"> Real Estate <!-- option-->
                                                                                        </option><option value="Engineering &amp; Industries"> Engineering &amp; Industries <!-- option-->
                                                                                        </option><option value="Logistics &amp; Supply Chain"> Logistics &amp; Supply Chain <!-- option-->
                                                                                        </option><option value="Human Resources"> Human Resources <!-- option-->
                                                                                        </option><option value="Santé"> Santé <!-- option-->
                                                                                        </option><option value="Publique  &amp; Non Profit"> Publique  &amp; Non Profit <!-- option-->
                                                                                        </option><option value="Technologie d'Information"> Technologie d'Information <!-- option-->
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="phone">Ville</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="ville" value="{{$sec->ville}}"
                                                                                       placeholder="Ville">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Pays : {{$sec->pays}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="pays"
                                                                                            data-search="on">
                                                                                        @forelse(\App\Models\Country::all() as $country)
                                                                                            <option value="{{$country->code}}">{{$country->name}}</option>
                                                                                        @empty
                                                                                        @endforelse
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Type de contrat : {{$sec->contrat}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="contrat"
                                                                                            data-search="on">
                                                                                        <option value="">Choisir le Type de Contrat</option>
                                                                                        <option value="Temporaire">Temporaire</option>
                                                                                        <option value="Temps Plein">Temps Plein</option>
                                                                                        <option value="Temps Partiel">Temps Partiel</option>
                                                                                        <option value="Projet">Projet</option>
                                                                                        <option value="Consultant">Consultant</option>
                                                                                        <option value="Contract à  Durée Indeterminée">Contract à  Durée Indeterminée</option>
                                                                                        <option value="Contract à  Durée Determinée">Contract à  Durée Determinée</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="default-textarea">Compétences</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="competence">
                                                                                        {{$sec->competence}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="default-textarea">Qualitées réquises</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="qualite">
                                                                                        {{$sec->qualite}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="default-textarea">Pre-requis</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="prerequis">
                                                                                        {{$sec->prerequis}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="default-textarea">Aperçu</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="apercu">
                                                                                        {{$sec->apercu}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                                <li>
                                                                                    <input type="submit" class="btn btn-lg btn-primary" placeholder="Update Profile" >
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .tab-pane -->
                                                            </div><!-- .tab-content -->
                                                        </form>
                                                    </div><!-- .modal-body -->
                                                </div><!-- .modal-content -->
                                            </div><!-- .modal-dialog -->
                                        </div><!-- .modal -->
                                    @empty
                                    @endforelse

                                    <div class="modal fade" tabindex="-1" role="dialog" id="update">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                <div class="modal-body modal-body-lg">
                                                    <h5 class="title">Add Emploi</h5>
                                                    <ul class="nk-nav nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                        </li>
                                                    </ul><!-- .nav-tabs -->
                                                    <form action="{{route('emplois.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="personal">
                                                                <div class="row gy-4">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="prenom">Titre ou Position</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="titre" required
                                                                                   placeholder="Enter a Title">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Salaire</label>
                                                                            <input type="number" class="form-control form-control-lg"
                                                                                   name="salaire" required
                                                                                   placeholder="Enter salaire">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Date d'expiration</label>
                                                                            <input type="date" class="form-control form-control-lg"
                                                                                   name="expiration" required
                                                                                   placeholder="Enter date">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Type Secteur :</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="secteur"
                                                                                        required
                                                                                        data-search="on">
                                                                                    <option value="Transport et Logistique"> Transport et Logistique <!-- option-->
                                                                                    </option><option value="Assurances"> Assurances <!-- option-->
                                                                                    </option><option value="Audit et Comptabilité"> Audit et Comptabilité <!-- option-->
                                                                                    </option><option value="Legal, Lawyers &amp; Tax"> Legal, Lawyers &amp; Tax <!-- option-->
                                                                                    </option><option value="Banking &amp; Financial Services"> Banking &amp; Financial Services <!-- option-->
                                                                                    </option><option value="General Trade"> General Trade <!-- option-->
                                                                                    </option><option value="Consulting/Advisory"> Consulting/Advisory<!-- option-->
                                                                                    </option><option value="Construction"> Construction <!-- option-->
                                                                                    </option><option value="Digital, Marketing &amp; Communications"> Digital, Marketing &amp; Communications <!-- option-->
                                                                                    </option><option value="Management"> Management <!-- option-->
                                                                                    </option><option value="Transports/Distribution"> Transports/Distribution <!-- option-->
                                                                                    </option><option value="Finance &amp; Accounting"> Finance &amp; Accounting <!-- option-->
                                                                                    </option><option value="Hotelerie, Restaurants &amp; Tourisme"> Hotelerie, Restaurants &amp; Tourisme <!-- option-->
                                                                                    </option><option value="Real Estate"> Real Estate <!-- option-->
                                                                                    </option><option value="Engineering &amp; Industries"> Engineering &amp; Industries <!-- option-->
                                                                                    </option><option value="Logistics &amp; Supply Chain"> Logistics &amp; Supply Chain <!-- option-->
                                                                                    </option><option value="Human Resources"> Human Resources <!-- option-->
                                                                                    </option><option value="Santé"> Santé <!-- option-->
                                                                                    </option><option value="Publique  &amp; Non Profit"> Publique  &amp; Non Profit <!-- option-->
                                                                                    </option><option value="Technologie d'Information"> Technologie d'Information <!-- option-->
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="phone">Ville</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="ville" required
                                                                                   placeholder="Ville">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Pays :</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="pays"
                                                                                        required
                                                                                        data-search="on">
                                                                                    @forelse(\App\Models\Country::all() as $country)
                                                                                        <option value="{{$country->code}}">{{$country->name}}</option>
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Type de contrat : </label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="contrat"
                                                                                        required
                                                                                        data-search="on">
                                                                                    <option value="">Choisir le Type de Contrat</option>
                                                                                    <option value="Temporaire">Temporaire</option>
                                                                                    <option value="Temps Plein">Temps Plein</option>
                                                                                    <option value="Temps Partiel">Temps Partiel</option>
                                                                                    <option value="Projet">Projet</option>
                                                                                    <option value="Consultant">Consultant</option>
                                                                                    <option value="Contract à  Durée Indeterminée">Contract à  Durée Indeterminée</option>
                                                                                    <option value="Contract à  Durée Determinée">Contract à  Durée Determinée</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="default-textarea">Compétences</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="competence" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="default-textarea">Qualitées réquises</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="qualite" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="default-textarea">Pre-requis</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="prerequis" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="default-textarea">Aperçu</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="apercu" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                            <li>
                                                                                <input type="submit" class="btn btn-lg btn-primary" placeholder="Update Profile" >
                                                                            </li>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .tab-pane -->
                                                        </div><!-- .tab-content -->
                                                    </form>
                                                </div><!-- .modal-body -->
                                            </div><!-- .modal-content -->
                                        </div><!-- .modal-dialog -->
                                    </div><!-- .modal -->

                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
