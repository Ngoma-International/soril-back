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
                                <h3 class="nk-block-title page-title">Auteurs</h3>
                                <div class="nk-block-des text-soft">
                                    <p>
                                        {{count($auteurs)}} Auteurs (s)
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
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Nom</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Company Name</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Position</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Ville</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Actualiser / Effacer</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($auteurs as $sec)
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
                                                <span>{{$sec->firstName . ' ' . $sec->lastName . ' ' . $sec->middleName}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->email}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->companyName}}</span>
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
                                                            <form action="{{ route('auteurs.update' , 0)}}" method="POST">
                                                                @csrf
                                                                {{ method_field('PUT') }}
                                                                <input type="hidden" name="name" value="{{$sec->id}}">
                                                                <input type="hidden" name="statut" value="{{$sec->status}}">
                                                                @if($sec->status)
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
                                                        <form action="{{ route('auteurs.destroy' , $sec->id)}}" method="POST">
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
                                                        <form action="{{route('auteurs.update', 5)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{method_field('PUT')}}
                                                            <input type="hidden" name="name" id="name" value="{{$sec->id}}">
                                                            <div class="form-group row">
                                                                <label for="firstName" class="col-4 col-form-label">First Name</label>
                                                                <div class="col-8">
                                                                    <input id="firstName" name="firstName"
                                                                           placeholder="Enter your first name"
                                                                           type="text" class="form-control"
                                                                           value="{{$sec->firstName}}"
                                                                           required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="lastName" class="col-4 col-form-label">Last Name</label>
                                                                <div class="col-8">
                                                                    <input id="lastName" name="lastName" value="{{$sec->lastName}}" placeholder="Enter your last name" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="middleName" class="col-4 col-form-label">Middle Name</label>
                                                                <div class="col-8">
                                                                    <input id="middleName" name="middleName" value="{{$sec->middleName}}" placeholder="Enter your middle name" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="email" class="col-4 col-form-label">Email</label>
                                                                <div class="col-8">
                                                                    <input id="email" name="email" value="{{$sec->email}}" placeholder="Enter your mail adress" type="email" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="password" class="col-4 col-form-label">New Password (if you change)</label>
                                                                <div class="col-8">
                                                                    <input id="new_password" name="new_password"
                                                                           value="{{$sec->password}}"
                                                                           placeholder="Your Password"
                                                                           type="password" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="country" class="col-4 col-form-label">Country</label>
                                                                <div class="col-8">
                                                                    <select class="form-select form-control form-control-lg"
                                                                            name="country" id="country"
                                                                            data-search="on">
                                                                        @forelse(\App\Models\Country::all() as $country)
                                                                            @if($sec->country == $country->code)
                                                                                <option selected value="{{$country->code}}">{{$country->name}}</option>
                                                                            @else
                                                                                <option value="{{$country->code}}">{{$country->name}}</option>
                                                                            @endif
                                                                        @empty
                                                                        @endforelse
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="city" class="col-4 col-form-label">City</label>
                                                                <div class="col-8">
                                                                    <input id="city" value="{{$sec->city}}" name="city" placeholder="Entre your city of residence" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="date" class="col-4 col-form-label">Date</label>
                                                                <div class="col-8">
                                                                    <input id="date" value="{{$sec->date}}" name="date" type="date" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="state" class="col-4 col-form-label">State</label>
                                                                <div class="col-8">
                                                                    <input id="state" name="state" value="{{$sec->state}}" placeholder="Entrer your state of residence" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="companyName" class="col-4 col-form-label">Company Name</label>
                                                                <div class="col-8">
                                                                    <input id="companyName" value="{{$sec->companyName}}" name="companyName" placeholder="Enter a Name of your company" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="department" class="col-4 col-form-label">Department</label>
                                                                <div class="col-8">
                                                                    <input id="department" value="{{$sec->department}}" name="department" placeholder="Your Department in company" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="position" class="col-4 col-form-label">Position</label>
                                                                <div class="col-8">
                                                                    <input id="position" value="{{$sec->position}}" name="position" placeholder="Your Position" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="image" class="col-4 col-form-label">Profile Image</label>
                                                                <div class="col-8">
                                                                    <input id="image" name="image" type="file" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="offset-4 col-8">
                                                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
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
