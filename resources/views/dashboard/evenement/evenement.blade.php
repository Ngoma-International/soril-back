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
                                <h3 class="nk-block-title page-title">Evenements</h3>
                                <div class="nk-block-des text-soft">
                                    <p>
                                        {{count($membres)}} Membre (s)
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
                                                    <span>AJOUTER UN EVENEMENT</span>
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
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Type</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Photo</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Titre</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Ville</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Date</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Prix</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Animateur</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Durée</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Programme</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Actualiser / Effacer</span></th>
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
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->typeEvent}}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="{{asset($sec->image)}}" style="width: 50%" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->titre}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->ville}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li>
                                                        <span>{{$sec->date}}</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->prix}} $</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->animateur}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->duree}} Days</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a href="{{route('programmes.index', ['id'=>$sec->id])}}" class="btn btn-trigger btn-icon">
                                                            <em class="icon ni ni-eye"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a class="btn btn-trigger btn-icon"
                                                           data-toggle="modal" data-target="#update-{{$sec->id}}">
                                                            <em class="icon ni ni-pen2"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action">
                                                        <form action="{{ route('evenements.destroy' , $sec->id)}}" method="POST">
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
                                                        <h5 class="title">Update Event</h5>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                            </li>
                                                        </ul><!-- .nav-tabs -->
                                                        <form action="{{route('evenements.update', $sec->id)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="personal">
                                                                    <div class="row gy-4">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Type d'Evenement : {{$sec->typeEvent}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="typeEvent"
                                                                                            data-search="on">
                                                                                        <option value="annual"> Annuel</option>
                                                                                        <option value="seminar"> Séminaire</option>
                                                                                        <option value="workshop"> Atélier</option>
                                                                                        <option value="conference"> Conférence</option>
                                                                                        <option value="pre-con">Pre-Conférence</option>
                                                                                        <option value="lecture"> Discours</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="prenom">Titre</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="titre" value="{{$sec->titre}}"
                                                                                       placeholder="Enter a titre">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Sous Titre</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="sousTitre" value="{{$sec->sousTitre}}"
                                                                                       placeholder="Enter a SubTitle">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Lieu</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="lieu" value="{{$sec->lieu}}"
                                                                                       placeholder="Enter a Place">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Durée / Jours</label>
                                                                                <input type="number" class="form-control form-control-lg"
                                                                                       name="duree" value="{{$sec->duree}}"
                                                                                       placeholder="Enter a durée ici">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Date</label>
                                                                                <input type="date" class="form-control form-control-lg"
                                                                                       name="date" value="{{$sec->date}}"
                                                                                       placeholder="Enter a durée ici">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Animateur : {{$sec->animateur}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="animateur"
                                                                                            data-search="on">
                                                                                        @forelse($animateurs as $anim)
                                                                                            <option value="{{$anim->id}}">{{$anim->prenom . ' ' . $anim->nom}}</option>
                                                                                        @empty
                                                                                        @endforelse
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Ville ou ONline : {{$sec->ville}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="ville"
                                                                                            data-search="on">
                                                                                        <option value="">Veuillez selectionner</option>
                                                                                        <option value="Online">Evénement en Ligne</option>
                                                                                        <option value=" Bandundu">Bandundu</option>
                                                                                        <option value="Boende">Boende</option>
                                                                                        <option value="Bukavu">Bukavu</option>
                                                                                        <option value="Bunia">Bunia</option>
                                                                                        <option value="Buta"> Buta</option>
                                                                                        <option value="Gbadolite">Gbadolite</option>
                                                                                        <option value="Gemena">Gemena</option>
                                                                                        <option value="Goma">Goma</option>
                                                                                        <option value="Inongo">Inongo</option>
                                                                                        <option value="Isiro">  Isiro</option>
                                                                                        <option value="Kabinda">Kabinda</option>
                                                                                        <option value="Kalemie">Kalemie</option>
                                                                                        <option value="Kamina"> Kamina</option>
                                                                                        <option value="Kananga">Kananga</option>
                                                                                        <option value="Kenge">Kenge</option>
                                                                                        <option value="Kindu">Kindu</option>
                                                                                        <option value="Kinshasa">Kinshasa</option>
                                                                                        <option value="Kisangani">Kisangani</option>
                                                                                        <option value="Kolwezi">Kolwezi</option>
                                                                                        <option value="Lisala">Likasi</option>
                                                                                        <option value="Lisala">Lisala</option>
                                                                                        <option value="Lubumbashi ">Lubumbashi  </option>
                                                                                        <option value="Lusambo">Lusambo</option>
                                                                                        <option value="Matadi">Matadi</option>
                                                                                        <option value="Mbandaka">Mbandaka</option>
                                                                                        <option value="Mbuji-Mayi">Mbuji-Mayi</option>
                                                                                        <option value="Tshikapa">Tshikapa</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                       for="default-textarea">Aperçu</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="apercu">
                                                                                        {{$sec->apercu}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                       for="default-textarea">Qui Devrait Participer?</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="participer">
                                                                                        {{$sec->participer}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="email">Pre-requis</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="prerequis" value="{{$sec->prerequis}}"
                                                                                       placeholder="Prerequis ici">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="email">Certification</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="certification" value="{{$sec->certification}}"
                                                                                       placeholder="Certification here">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Type : {{$sec->type}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="type"
                                                                                            data-search="on">
                                                                                        <option value="Séminaire public"> Séminaire public</option>
                                                                                        <option value="Responsabilité Sociale des Entreprises (RSE)"> Responsabilité Sociale des Entreprises (RSE)</option>
                                                                                        <option value="Interne"> Interne</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="phone">Prix</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="prix" value="{{$sec->prix}}"
                                                                                       placeholder="Price here">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                       for="default-textarea">Description</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="description">
                                                                                        {{$sec->description}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="default-06">Télécharger la photo</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="custom-file">
                                                                                        <input type="file"
                                                                                               multiple class="custom-file-input"
                                                                                               accept="image/png, image/jpeg"
                                                                                               name="file">
                                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                    </div>
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
                                                    <h5 class="title">Add Event</h5>
                                                    <ul class="nk-nav nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                        </li>
                                                    </ul><!-- .nav-tabs -->
                                                    <form action="{{route('evenements.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="personal">
                                                                <div class="row gy-4">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Type d'Evenement :</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="typeEvent" required
                                                                                        data-search="on">
                                                                                    <option value="annual"> Annuel</option>
                                                                                    <option value="seminar"> Séminaire</option>
                                                                                    <option value="workshop"> Atélier</option>
                                                                                    <option value="conference"> Conférence</option>
                                                                                    <option value="pre-con">Pre-Conférence</option>
                                                                                    <option value="lecture"> Discours</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="prenom">Titre</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="titre" required
                                                                                   placeholder="Enter a titre">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Sous Titre</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="sousTitre" required
                                                                                   placeholder="Enter a SubTitle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Lieu</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="lieu" required
                                                                                   placeholder="Enter a Place">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Durée / Jours</label>
                                                                            <input type="number" class="form-control form-control-lg"
                                                                                   name="duree" required
                                                                                   placeholder="Enter a durée ici">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Date</label>
                                                                            <input type="date" class="form-control form-control-lg"
                                                                                   name="date" required
                                                                                   placeholder="Enter a durée ici">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Animateur : </label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="animateur"
                                                                                        required
                                                                                        data-search="on">
                                                                                    @forelse($animateurs as $anim)
                                                                                        <option value="{{$anim->id}}">{{$anim->prenom . ' ' . $anim->nom}}</option>
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Ville ou ONline : {{$sec->ville}}</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="ville"
                                                                                        data-search="on">
                                                                                    <option value="">Veuillez selectionner</option>
                                                                                    <option value="Online">Evénement en Ligne</option>
                                                                                    <option value=" Bandundu">Bandundu</option>
                                                                                    <option value="Boende">Boende</option>
                                                                                    <option value="Bukavu">Bukavu</option>
                                                                                    <option value="Bunia">Bunia</option>
                                                                                    <option value="Buta"> Buta</option>
                                                                                    <option value="Gbadolite">Gbadolite</option>
                                                                                    <option value="Gemena">Gemena</option>
                                                                                    <option value="Goma">Goma</option>
                                                                                    <option value="Inongo">Inongo</option>
                                                                                    <option value="Isiro">  Isiro</option>
                                                                                    <option value="Kabinda">Kabinda</option>
                                                                                    <option value="Kalemie">Kalemie</option>
                                                                                    <option value="Kamina"> Kamina</option>
                                                                                    <option value="Kananga">Kananga</option>
                                                                                    <option value="Kenge">Kenge</option>
                                                                                    <option value="Kindu">Kindu</option>
                                                                                    <option value="Kinshasa">Kinshasa</option>
                                                                                    <option value="Kisangani">Kisangani</option>
                                                                                    <option value="Kolwezi">Kolwezi</option>
                                                                                    <option value="Lisala">Likasi</option>
                                                                                    <option value="Lisala">Lisala</option>
                                                                                    <option value="Lubumbashi ">Lubumbashi  </option>
                                                                                    <option value="Lusambo">Lusambo</option>
                                                                                    <option value="Matadi">Matadi</option>
                                                                                    <option value="Mbandaka">Mbandaka</option>
                                                                                    <option value="Mbuji-Mayi">Mbuji-Mayi</option>
                                                                                    <option value="Tshikapa">Tshikapa</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="default-textarea">Aperçu</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="apercu" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="default-textarea">Qui Devrait Participer?</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="participer" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="email">Pre-requis</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="prerequis" required
                                                                                   placeholder="Prerequis ici">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="email">Certification</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="certification" required
                                                                                   placeholder="Certification here">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Type :</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="type"
                                                                                        required
                                                                                        data-search="on">
                                                                                    <option value="Séminaire public"> Séminaire public</option>
                                                                                    <option value="Responsabilité Sociale des Entreprises (RSE)"> Responsabilité Sociale des Entreprises (RSE)</option>
                                                                                    <option value="Interne"> Interne</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="phone">Prix</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="prix" required
                                                                                   placeholder="Price here">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="default-textarea">Description</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="description" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="default-06">Télécharger la photo</label>
                                                                            <div class="form-control-wrap">
                                                                                <div class="custom-file">
                                                                                    <input type="file"
                                                                                           multiple class="custom-file-input"
                                                                                           accept="image/png, image/jpeg"
                                                                                           required
                                                                                           name="file">
                                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-12">
                                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                            <li>
                                                                                <input type="submit" class="btn btn-lg btn-primary" placeholder="Update" >
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
