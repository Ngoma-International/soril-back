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
                                <h3 class="nk-block-title page-title">Abonnements</h3>
                                <div class="nk-block-des text-soft">
                                    <p>
                                        {{count($abonnements)}} Abonnements (s)
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
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Article</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Nom Complet</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Organisation</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Fonctions</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($abonnements as $sec)
                                        @forelse($articles as $art)
                                            @if($sec->article_id == $art->id)
                                                @forelse($abonnes as $abon)
                                                    @if($sec->abonne_id == $abon->id)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$art->title}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$abon->firstName . ' ' . $abon->lastName}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$abon->email}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$abon->phone}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$abon->societe}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$abon->fonction}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg"
                                                                data-order="Email Verified - Kyc Unverified">
                                                                <ul class="list-status">
                                                                    <li class="nk-tb-action">
                                                                        <form action="{{ route('abonnement.update' , $sec->id)}}" method="POST">
                                                                            @csrf
                                                                            {{ method_field('PUT') }}
                                                                            <input type="hidden" name="name" value="{{$sec->id}}">
                                                                            <input type="hidden" name="status" value="{{$sec->status}}">
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
                                                        </tr>
                                                    @endif
                                                @empty
                                                @endforelse
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
