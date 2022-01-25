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
                                <h3 class="nk-block-title page-title">Commissions Techniques</h3>
                                <div class="nk-block-des text-soft">
                                    <p>
                                        {{count($coms)}} Commissions (s)
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
                                                    <span>AJOUTER UNE COMMISSION</span>
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
                                        <th class="nk-tb-col"><span class="sub-text">Commission</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Président</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Jours</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Heure</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($coms as $sec)
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
                                                        <img src="{{'https://irmacongo.org/dash/adminMember/commissions/' . $sec->picture}}" style="width: 50%" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{$sec->	commissionName}}
                                                            <span class="dot dot-success d-md-none ml-1"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->president}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->meetingDay}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li>
                                                        <span>{{$sec->fromm . ' - ' .$sec->too}}</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#update-{{$sec->commissionID}}">
                                                            <em class="icon ni ni-pen2"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action">
                                                        <form action="{{ route('commissions.destroy' , $sec->commissionID)}}" method="POST">
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
                                        <div class="modal fade" tabindex="-1" role="dialog" id="update-{{$sec->commissionID}}">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                    <div class="modal-body modal-body-lg">
                                                        <h5 class="title">Update Commissions</h5>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                            </li>
                                                        </ul><!-- .nav-tabs -->
                                                        <form action="{{route('commissions.update', $sec->commissionID)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="personal">
                                                                    <div class="row gy-4">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="prenom">Nom de la commission</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="commissionName" value="{{$sec->commissionName}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Président</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="president" value="{{$sec->president}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Type d'administrateur : {{$sec->meetingDay}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="meetingDay"
                                                                                            data-search="on">
                                                                                        <option value="Lundi">Lundi</option>
                                                                                        <option value="Mardi">Mardi</option>
                                                                                        <option value="Mercredi">Mercredi</option>
                                                                                        <option value="Jeudi">Jeudi</option>
                                                                                        <option value="Vendredi">Vendredi</option>
                                                                                        <option value="Samedi">Samedi</option>
                                                                                        <option value="Dimanche">Dimanche</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="email">De</label>
                                                                                <input type="time" class="form-control form-control-lg"
                                                                                       name="fromm" value="{{$sec->fromm}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="email">A</label>
                                                                                <input type="time" class="form-control form-control-lg"
                                                                                       name="too" value="{{$sec->too}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="phone">Objectifs</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="objectives" value="{{$sec->objectives}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="default-textarea">Description</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="overview">
                                                                                        {{$sec->overview}}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="default-06">Télécharger la photo de profil</label>
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
                                                                                    <input type="submit" class="btn btn-lg btn-primary" value="Update Profile" >
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
                                                    <h5 class="title">Add Conseiller</h5>
                                                    <ul class="nk-nav nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                        </li>
                                                    </ul><!-- .nav-tabs -->
                                                    <form action="{{route('commissions.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="personal">
                                                                <div class="row gy-4">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="prenom">Nom de la commission</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="commissionName" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="nom">Président</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="president" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Type d'administrateur</label>
                                                                            <div class="form-control-wrap">
                                                                                <select class="form-select form-control form-control-lg"
                                                                                        name="meetingDay"
                                                                                        required
                                                                                        data-search="on">
                                                                                    <option value="Lundi">Lundi</option>
                                                                                    <option value="Mardi">Mardi</option>
                                                                                    <option value="Mercredi">Mercredi</option>
                                                                                    <option value="Jeudi">Jeudi</option>
                                                                                    <option value="Vendredi">Vendredi</option>
                                                                                    <option value="Samedi">Samedi</option>
                                                                                    <option value="Dimanche">Dimanche</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="email">De</label>
                                                                            <input type="time" class="form-control form-control-lg"
                                                                                   name="fromm" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="email">A</label>
                                                                            <input type="time" class="form-control form-control-lg"
                                                                                   name="too" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="phone">Objectifs</label>
                                                                            <input type="text" class="form-control form-control-lg"
                                                                                   name="objectives" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="default-textarea">Description</label>
                                                                            <div class="form-control-wrap">
                                                                                    <textarea class="form-control no-resize"
                                                                                              name="overview" required>
                                                                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="default-06">Télécharger la photo de profil</label>
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
                                                                                <input type="submit" class="btn btn-lg btn-primary" value="Update Profile" >
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
