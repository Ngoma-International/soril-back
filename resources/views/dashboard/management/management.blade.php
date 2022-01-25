@extends('dashboard.layout.app')

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
                            @csrf
                            <div class="row">
                            <div class="col-xl-12 col-sm-12">
                                <div class="card">
                                    <div class="card-head">
                                        <div
                                            style="margin: 20px!important;"
                                            class="">
                                            <h4 class="mb-sm-0">Profil</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class="container">
                                                    <form id="fileUploadForm" method="POST" action="{{ url('/upload-doc-file') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <img    style="object-fit: cover!important; margin-bottom: 20px!important;
                                                                    height: 125px!important; width: 200px!important;"
                                                                    class="rounded-circle"
                                                                    src="{{asset($data->image)}}" alt="">
                                                            <div class="form-group mb-3">
                                                                <input name="file" type="file" class="form-control">
                                                            </div>

                                                            <div class="d-grid mb-3">
                                                                <input type="submit" value="Submit" class="btn btn-primary">
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="col-xl-8">
                                                <form id="updateData" method="POST" action="{{ url('/update_user') }}" autocomplete="off">
                                                    @csrf
                                                    <div class="table-responsive">
                                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                                        <tbody>
                                                        <tr data-id="1">
                                                            <td style="width: 80px">Nom complet:</td>
                                                            <td>
                                                                <input type="text" name="nom" id="nom" placeholder="{{$user->name}}">
                                                            </td>
                                                        </tr>
                                                        <tr data-id="2">
                                                            <td style="width: 80px">Téléphone:</td>
                                                            <td>
                                                                <input type="text" name="phone" id="phone" placeholder="{{$data->phone}}">
                                                            </td>
                                                        </tr>
                                                        <tr data-id="3">
                                                            <td style="width: 80px">Email:</td>
                                                            <td>
                                                                <input type="email" name="email" id="email" placeholder="{{$user->email}}" disabled>
                                                            </td>
                                                        </tr>
                                                        <tr data-id="4">
                                                            <td style="width: 80px">Bio:</td>
                                                            <td>
                                                                <textarea name="about" id="about" cols="30"
                                                                          rows="5">
                                                                    {{$data->about}}
                                                                </textarea>
                                                            </td>
                                                        </tr>

                                                        <tr data-id="5">
                                                            <td style="width: 80px">Nouveau Mot de passe</td>
                                                            <td>
                                                                <input type="password"
                                                                       name="password1" id="password1">
                                                            </td>
                                                        </tr>

                                                        <tr data-id="5">
                                                            <td style="width: 80px">Votre Mot de passe</td>
                                                            <td>
                                                                <input type="password"
                                                                       name="password" id="password">
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                    <div class="d-grid mb-3">
                                                        <p style="color: red">{{session('message')}}</p>
                                                        <input type="submit" value="Update" class="btn btn-primary">
                                                    </div>
                                                </form>
                                            </div>
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
