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
                                <h3 class="nk-block-title page-title">Membres Corporates</h3>
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
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Logo</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Nom de l'organisation</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Contact</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Position</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Ville</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></th>
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
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <img src="{{asset($sec->logo)}}" style="width: 50%" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->name}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->email}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->phone}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li>
                                                        <span>{{$sec->position}}</span>
                                                    </li>

                                                </ul>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li>
                                                        <span>{{$sec->city}}</span>
                                                    </li>

                                                </ul>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                        <li class="nk-tb-action">
                                                            <form action="{{ route('corporate.update' , 0)}}" method="POST">
                                                                @csrf
                                                                {{ method_field('PUT') }}
                                                                <input type="hidden" name="name" value="{{$sec->id}}">
                                                                <input type="hidden" name="statut" value="{{$sec->statut}}">
                                                                @if($sec->statut)
                                                                    <button type="submit" class="btn btn-success">
                                                                        Activé
                                                                    </button>
                                                                @else
                                                                    <button type="submit" class="btn btn-danger">
                                                                        Desactivé
                                                                    </button>
                                                                @endif
                                                            </form>
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
                                                        <form action="{{ route('corporate.destroy' , $sec->id)}}" method="POST">
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
                                                        <h5 class="title">Update Membre</h5>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                            </li>
                                                        </ul><!-- .nav-tabs -->
                                                        <form action="{{route('corporate.store')}}"
                                                              method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$sec->id}}">
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="personal">
                                                                    <div class="row gy-4">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="prenom">Organisation</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="name" value="{{$sec->name}}"
                                                                                       placeholder="Enter a FirstName">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Secteur</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="industry" value="{{$sec->industry}}"
                                                                                       placeholder="Enter a industry">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Pays : {{$sec->country}}</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select class="form-select form-control form-control-lg"
                                                                                            name="country"
                                                                                            data-search="on">
                                                                                        @forelse(\App\Models\Country::all() as $country)
                                                                                            @if($country->code == $sec->country)
                                                                                                <option selected value="{{$country->code}}">{{$country->name}}</option>
                                                                                            @else
                                                                                                <option value="{{$country->code}}">{{$country->name}}</option>
                                                                                            @endif
                                                                                        @empty
                                                                                        @endforelse
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Province</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="province" value="{{$sec->province}}"
                                                                                       placeholder="Enter a state">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Ville</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="city" value="{{$sec->city}}"
                                                                                       placeholder="Enter a city">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Website</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="website" value="{{$sec->website}}"
                                                                                       placeholder="Enter a website">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <p>Information sur le contact principal</p>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Prénom</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="firstName" value="{{$sec->firstName}}"
                                                                                       placeholder="Enter a firstName">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Nom</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="lastName" value="{{$sec->lastName}}"
                                                                                       placeholder="Enter a last Name">
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
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Email</label>
                                                                                <input type="email" class="form-control form-control-lg"
                                                                                       name="email" value="{{$sec->email}}"
                                                                                       placeholder="Enter a city">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <p>Contact pour la facturation</p>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Prénom</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="ffirstName" value="{{$sec->fFirstName}}"
                                                                                       placeholder="Enter a firstName">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Nom</label>
                                                                                <input type="text" class="form-control form-control-lg"
                                                                                       name="flastName" value="{{$sec->fLastName}}"
                                                                                       placeholder="Enter a last Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Phone</label>
                                                                                <input type="tel" class="form-control form-control-lg"
                                                                                       name="fphone" value="{{$sec->fPhone}}"
                                                                                       placeholder="Enter a email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="nom">Email</label>
                                                                                <input type="email" class="form-control form-control-lg"
                                                                                       name="femail" value="{{$sec->fEmail}}"
                                                                                       placeholder="Enter a city">
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
