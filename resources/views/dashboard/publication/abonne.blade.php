@extends('dashboard.layout.app')

@section('title')
    <title>Irma / Administration Publication</title>
@endsection

@include('dashboard.management.navbar')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12 col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                <div
                                    style="margin: 20px!important;"
                                    class="">
                                    <h4 class="mb-sm-0">Publications</h4>
                                </div>
                                @if(session('success'))
                                    <div
                                        style="margin: 20px!important;"
                                        class="">
                                        <h5 class="mb-sm-0">{{session('success')}}</h5>
                                    </div>
                                @endif
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Téléphone</th>
                                            <th scope="col">Titre Article</th>
                                            <th scope="col">Date d'abonnement</th>
                                            <th scope="col">Statut</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($abonnements as $a)
                                            @forelse($users as $us)
                                                @forelse($articles as $article)
                                                    @if($us->id == $a->abonne_id && $a->article_id == $article->id)
                                                        <tr>
                                                            <td>{{$us->firstName . ' ' . $article->lastName}}</td>
                                                            <td>{{$us->email}}</td>
                                                            <td>{{$us->contact}}</td>
                                                            <td>{{$article->title}}</td>
                                                            <td>{{ \Carbon\Carbon::parse($a->created_at)->format('d/m/Y') }}</td>
                                                            @if($a->status)
                                                                <td>
                                                                    <a href="{{route('mufano', ['id'=>$a->id, 'status'=>$a->status])}}"
                                                                       class="btn btn-outline-warning btn-sm">
                                                                        Desactiver
                                                                    </a>
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <a href="{{route('mufano', ['id'=>$a->id, 'status'=>$a->status])}}"
                                                                       class="btn btn-outline-success btn-sm">
                                                                        Activer
                                                                    </a>
                                                                </td>
                                                            @endif
                                                        </tr>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @empty
                                            @endforelse
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Upzet.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <script>
        $(function () {
            $(document).ready(function () {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        console.log('File has uploaded');
                    }
                });
            });
        });
    </script>
@endsection
