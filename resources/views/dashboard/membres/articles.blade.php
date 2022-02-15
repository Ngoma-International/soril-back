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
                                <h3 class="nk-block-title page-title">Articles</h3>
                                <div class="nk-block-des text-soft">
                                    <p>
                                        {{count($membres)}} Article (s)
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
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Titre</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Type</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Auteur</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Voir</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Effacer</span></th>
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
                                                <span>{{$sec->title}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$sec->type}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{\App\Models\Author::where('id', $sec->author_id)->first()->firstName . ' ' .
                                                        \App\Models\Author::where('id', $sec->author_id)->first()->lastName}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                        <li class="nk-tb-action">
                                                            <a href="{{asset('storage/docs/' . $sec->manuscrit)}}"  class="btn btn-success">
                                                                Voir le pdf
                                                            </a>
                                                        </li>

                                                </ul>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                <ul class="list-status">
                                                    <li class="nk-tb-action">
                                                        <form action="{{ route('articles.update' , 0)}}" method="POST">
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
                                                        <form action="{{ route('articles.destroy' , $sec->id)}}" method="POST">
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
                                                        <h5 class="title">Update Article</h5>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#personal">Informations</a>
                                                            </li>
                                                        </ul><!-- .nav-tabs -->
                                                        <form action="{{route('articles.update', 5)}}" method="post" enctype="multipart/form-data">
                                                            {{method_field('PUT')}}
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label for="title" class="col-4 col-form-label">Title</label>
                                                                <input type="hidden" name="name" id="name" value="{{$sec->id}}">
                                                                <div class="col-8">
                                                                    <input id="title" name="title" placeholder="Enter a title of article here"
                                                                           value="{{$sec->title}}"
                                                                           type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="type" class="col-4 col-form-label">Subtitle</label>
                                                                <div class="col-8">
                                                                    <input id="type" value="{{$sec->type}}" name="type" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="note" class="col-4 col-form-label">Description</label>
                                                                <div class="col-8">
                                                                    <textarea id="note" name="note" cols="40" rows="5" class="form-control">
                                                                        {{$sec->note}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="image" class="col-4 col-form-label">File</label>
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
