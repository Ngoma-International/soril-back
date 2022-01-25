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
                                        {{count($reservations)}} Reservations (s)
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
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Nom de l'evenement</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Participant</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Téléphone</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Pays</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Ville</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Date</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Actualiser / Effacer</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($reservations as $reservation)
                                        @forelse($evenements as $evenement)
                                            @if($reservation->evenement_id == $evenement->id)
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                                            <label class="custom-control-label" for="uid1"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span>{{$evenement->titre}}</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span>{{$reservation->name}}</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                        <ul class="list-status">
                                                            <li>
                                                                <span>{{$reservation->email}}</span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span>{{$reservation->phone}}</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span>{{$reservation->pays}}</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span>{{$reservation->ville}}</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span>{{$reservation->created_at}}</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span>{{$reservation->status}}</span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li class="nk-tb-action">
                                                                <form action="{{ route('deleteReservation' , $reservation->id)}}" method="POST">
                                                                    {{ csrf_field() }}

                                                                    <button type="submit" class="btn btn-primary">
                                                                        <em class="icon ni ni-trash-alt"></em>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item  -->
                                            @endif
                                        @empty
                                        @endforelse
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
