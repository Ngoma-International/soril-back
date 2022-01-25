@extends('layouts.appss')

@section('title')
    Soumettre Document DCP
@endsection

@section('content')
    <style>
        .form-control {
            width: 80%!important;
        }

        select {
            width: 80%!important;
        }
    </style>

    <div style="padding: 50px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">

                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <h2>SOUMETTRE DES DOCUMENTS DCP</h2>
                            <div class="heading centered padding-vertical-20">
                                <i class="fa fa-info-circle tbl main-color"></i>
                                <h5 class="uppercase head-4 bold">Tous les champs obligatoires sont marqués * et doivent être remplis.</h5>
                            </div>
                            <form action="{{route('dcp.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-input col-md-5">
                                        <label>Prénom 	<span class="red">*</span></label>
                                        <input type="text" class="form-control shape" required="" name="firstName">
                                    </div>
                                    <div class="form-input col-md-5">
                                        <label>
                                            Nom de Famille <span class="red">*</span></label>
                                        <input type="text" class="form-control shape" required="" name="lastName">
                                    </div>
                                    <div class="form-input col-md-5">
                                        <label>
                                            Second Prénom <span class="red">*</span></label>
                                        <input type="text" class="form-control shape" name="middleName">
                                    </div>
                                    <div class="form-input col-md-5">
                                        <label>
                                            Email <span class="red">*</span></label>
                                        <input type="email" class="form-control shape" required="" name="email">
                                    </div>

                                    <label>

                                        <div class="form-input col-md-5">
                                            <label>
                                                Numéro de Contact <span class="red">*</span></label>
                                            <input type="tel" class="form-control shape" required="" name="phone">
                                        </div>

                                        <div class="form-input col-md-5">
                                            <label>
                                                Numéro d'Affiliation <span class="red">*</span></label>
                                            <input type="text" class="form-control shape" required="" name="membershipNumber">
                                        </div>




                                        <div class="form-input col-md-5">
                                            <label>
                                                Télécharger vos Documents DPC<span class="red">*</span></label>
                                            <input type="file" name="file" class="form-control shape" required="">
                                        </div>


                                        <div class="clearfix"></div>
                                        <div class="form-input margin-top-20 clearfix col-md-5">
                                            <input type="submit" class="btn btn-lg main-bg btn-block shape" value="Soumettre">
                                        </div>

                                    </label></div></form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
