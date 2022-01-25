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
                                <h3 class="nk-block-title page-title">Animateurs</h3>
                                <div class="nk-block-des text-soft">
                                    <p>
                                        {{count($sponsors)}} Sponsor (s)
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
                                                    <span>CREER UN SPONSOR</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a data-toggle="modal" data-target="#attribution" class="btn btn-white btn-outline-light">
                                                    <em class="icon ni ni-plus"></em>
                                                    <span>AJOUTER UN SPONSOR UN EVENEMENT</span>
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
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Photo</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Organisation</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Téléphone</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Pays</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Actualiser / Effacer</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($sponsors as $sec)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="{{asset($sec->image)}}" style="width: 50%" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->organisation}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->email}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li>
                                                        <span>{{$sec->phone}}</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->pays}}</span>
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
                                                        <form action="{{ route('sponsor.destroy' , $sec->id)}}" method="POST">
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
                                                        <h5 class="title">Update Animateur</h5>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                            </li>
                                                        </ul><!-- .nav-tabs -->
                                                        <form action="{{route('sponsor.update', $sec->id)}}"
                                                              method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="personal">
                                                                    <div class="row gy-4">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="prenom">Organisation</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="organisation" value="{{$sec->organisation}}"
                                                                                       placeholder="Enter a Organisation">
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
                                                                                <label class="form-label" for="nom">Nom cocmplet</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="nom" value="{{$sec->nom}}"
                                                                                       placeholder="Enter a lastName">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Position</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="position" value="{{$sec->position}}"
                                                                                       placeholder="Enter a Position">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Email</label>
                                                                                <input type="email" class="form-control form-control-lg"
                                                                                       name="email" value="{{$sec->email}}"
                                                                                       placeholder="Enter a email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Phone</label>
                                                                                <input type="tel" class="form-control form-control-lg"
                                                                                       name="phone" value="{{$sec->phone}}"
                                                                                       placeholder="Enter a email">
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
                                                                                    <input type="submit" class="btn btn-lg btn-primary" value="Update" >
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
                                                    <h5 class="title">Add Animateur</h5>
                                                    <ul class="nk-nav nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                        </li>
                                                    </ul><!-- .nav-tabs -->
                                                    <form action="{{route('sponsor.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="personal">
                                                                <div class="row gy-4">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="prenom">Organisation</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="organisation" required
                                                                                   placeholder="Enter a Organisation">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Pays</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="pays" required
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
                                                                            <label class="form-label" for="nom">Nom cocmplet</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="nom" required
                                                                                   placeholder="Enter a lastName">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Position</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="position" required
                                                                                   placeholder="Enter a Position">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Email</label>
                                                                            <input type="email" class="form-control form-control-lg"
                                                                                   name="email" required
                                                                                   placeholder="Enter a email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Phone</label>
                                                                            <input type="tel" class="form-control form-control-lg"
                                                                                   name="phone" required
                                                                                   placeholder="Enter a email">
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
                                                                                <input type="submit" class="btn btn-lg btn-primary" value="Submit" >
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

                                    <div class="modal fade" tabindex="-1" role="dialog" id="attribution">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                <div class="modal-body modal-body-lg">
                                                    <h5 class="title">Add Animateur</h5>
                                                    <ul class="nk-nav nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                        </li>
                                                    </ul><!-- .nav-tabs -->
                                                    <form action="{{route('add_sponsors')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @csrf
                                                        <label>Nom de l'Evénément</label>
                                                        <br>
                                                        <select class="form-control" name="event" id="event">
                                                            @forelse($evenements as $evenement)
                                                                <option value="{{$evenement->id}}">{{$evenement->titre}}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                        <label>Animateur</label>
                                                        <br>
                                                        <select class="form-control" name="sponsor" id="sponsor">
                                                            @forelse($sponsors as $anim)
                                                                <option value="{{$anim->id}}">{{$anim->organisation}}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                        <button type="submit" class="btn btn-primary">Soumettre</button>
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
