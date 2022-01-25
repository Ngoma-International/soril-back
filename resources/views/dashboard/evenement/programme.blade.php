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
                                <h3 class="nk-block-title page-title">
                                    Programmes pour {{$events->titre}}</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <a data-toggle="modal" data-target="#update" class="btn btn-white btn-outline-light">
                                                    <em class="icon ni ni-plus"></em>
                                                    <span>AJOUTER UNE ACTIVITE</span>
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
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Date</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Time</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Header</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Title</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Facilitator</span></th>
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
                                                <span>{{$sec->date}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->time}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->header}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li>
                                                        <span>{{$sec->title}}</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->facilitator}}</span>
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
                                                        <form action="{{ route('programmes.destroy' , $sec->id)}}" method="POST">
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
                                                        <h5 class="title">Update Activity</h5>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                            </li>
                                                        </ul><!-- .nav-tabs -->
                                                        <form action="{{route('programmes.update', $sec->id)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="personal">
                                                                    <div class="row gy-4">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="hidden" class="form-control form-control-lg"
                                                                                       name="evenement_id" value="{{$events->id}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Date</label>
                                                                                <input type="date" class="form-control form-control-lg"
                                                                                       name="date" value="{{$sec->date}}"
                                                                                       placeholder="Enter a SubTitle">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Time</label>
                                                                                <input type="time" class="form-control form-control-lg"
                                                                                       name="time" value="{{$sec->time}}"
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
                                                                                <label class="form-label">Facilitator : {{$sec->facilitator}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="facilitator"
                                                                                            data-search="on">
                                                                                        @forelse($anims as $anim)
                                                                                            <option value="{{$anim->id}}">{{$anim->prenom . ' ' . $anim->nom}}</option>
                                                                                        @empty
                                                                                        @endforelse
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="email">Header</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="header" value="{{$sec->header}}"
                                                                                       placeholder="Header">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="email">Title</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="title" value="{{$sec->title}}"
                                                                                       placeholder="Title">
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
                                                    <h5 class="title">Add Activity</h5>
                                                    <ul class="nk-nav nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                        </li>
                                                    </ul><!-- .nav-tabs -->
                                                    <form action="{{route('programmes.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="personal">
                                                                <div class="row gy-4">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="hidden" class="form-control form-control-lg"
                                                                                   name="evenement_id" value="{{$events->id}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Date</label>
                                                                            <input type="date" class="form-control form-control-lg"
                                                                                   name="date" required
                                                                                   placeholder="Enter a SubTitle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Time</label>
                                                                            <input type="time" class="form-control form-control-lg"
                                                                                   name="time" required
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
                                                                            <label class="form-label">Facilitator :</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="facilitator"
                                                                                        required
                                                                                        data-search="on">
                                                                                    @forelse($anims as $anim)
                                                                                        <option value="{{$anim->id}}">{{$anim->prenom . ' ' . $anim->nom}}</option>
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="email">Header</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="header" required
                                                                                   placeholder="Header">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="email">Title</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="title" required
                                                                                   placeholder="Title">
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
