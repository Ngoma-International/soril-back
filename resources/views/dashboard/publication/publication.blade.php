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

                <div class="modal fade bs-example-modal-xl"
                     tabindex="-1" role="dialog"
                     aria-labelledby="myExtraLargeModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="myModalLabel">Créer un Article</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                            </div>
                            <form action="{{route('publication.store')}}" method="post"
                                  enctype="multipart/form-data" style=" padding: 0 2rem;">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Prénom de l'Auteur</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Nom de l'Auteur</label>
                                            <input type="text" class="form-control" name="lastName" id="lastName" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Type</label>
                                                <select class="form-control" name="type" id="type" required="">
                                                    <option value="original paper"> Original </option>
                                                    <option value="reasech">Recherche</option>
                                                    <option value="case study">Cas d\'Etude</option>
                                                    <option value="opinion paper"> Opinion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Titre</label>
                                                <input type="text" class="form-control" name="title" id="title" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Pays</label>
                                                    <select class="form-control" name="country" id="country" required>
                                                        <option value="">Selectionner le Pays</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option>Albania</option>
                                                        <option>Algeria</option>
                                                        <option>Andorra</option>
                                                        <option>Angola</option>
                                                        <option>Antigua &amp; Deps</option>
                                                        <option>Argentina</option>
                                                        <option>Armenia</option>
                                                        <option>Australia</option>
                                                        <option>Austria</option>
                                                        <option>Azerbaijan</option>
                                                        <option>Bahamas</option>
                                                        <option>Bahrain</option>
                                                        <option>Bangladesh</option>
                                                        <option>Barbados</option>
                                                        <option>Belarus</option>
                                                        <option>Belgium</option>
                                                        <option>Belize</option>
                                                        <option>Benin</option>
                                                        <option>Bhutan</option>
                                                        <option>Bolivia</option>
                                                        <option>Bosnia Herzegovina</option>
                                                        <option>Botswana</option>
                                                        <option>Brazil</option>
                                                        <option>Brunei</option>
                                                        <option>Bulgaria</option>
                                                        <option>Burkina</option>
                                                        <option>Burundi</option>
                                                        <option>Cambodia</option>
                                                        <option>Cameroon</option>
                                                        <option>Canada</option>
                                                        <option>Cape Verde</option>
                                                        <option>Central African Rep</option>
                                                        <option>Chad</option>
                                                        <option>Chile</option>
                                                        <option>China</option>
                                                        <option>Colombia</option>
                                                        <option>Comoros</option>
                                                        <option>Congo Brazzerville</option>
                                                        <option>Congo Democratic Rep</option>
                                                        <option>Costa Rica</option>
                                                        <option>Croatia</option>
                                                        <option>Cuba</option>
                                                        <option>Cyprus</option>
                                                        <option>Czech Republic</option>
                                                        <option>Denmark</option>
                                                        <option>Djibouti</option>
                                                        <option>Dominica</option>
                                                        <option>Dominican Republic</option>
                                                        <option>East Timor</option>
                                                        <option>Ecuador</option>
                                                        <option>Egypt</option>
                                                        <option>El Salvador</option>
                                                        <option>Equatorial Guinea</option>
                                                        <option>Eritrea</option>
                                                        <option>Estonia</option>
                                                        <option>Ethiopia</option>
                                                        <option>Fiji</option>
                                                        <option>Finland</option>
                                                        <option>France</option>
                                                        <option>Gabon</option>
                                                        <option>Gambia</option>
                                                        <option>Georgia</option>
                                                        <option>Germany</option>
                                                        <option>Ghana</option>
                                                        <option>Greece</option>
                                                        <option>Grenada</option>
                                                        <option>Guatemala</option>
                                                        <option>Guinea</option>
                                                        <option>Guinea-Bissau</option>
                                                        <option>Guyana</option>
                                                        <option>Haiti</option>
                                                        <option>Honduras</option>
                                                        <option>Hungary</option>
                                                        <option>Iceland</option>
                                                        <option>India</option>
                                                        <option>Indonesia</option>
                                                        <option>Iran</option>
                                                        <option>Iraq</option>
                                                        <option>Ireland {Republic}</option>
                                                        <option>Israel</option>
                                                        <option>Italy</option>
                                                        <option>Ivory Coast</option>
                                                        <option>Jamaica</option>
                                                        <option>Japan</option>
                                                        <option>Jordan</option>
                                                        <option>Kazakhstan</option>
                                                        <option>Kenya</option>
                                                        <option>Kiribati</option>
                                                        <option>Korea North</option>
                                                        <option>Korea South</option>
                                                        <option>Kosovo</option>
                                                        <option>Kuwait</option>
                                                        <option>Kyrgyzstan</option>
                                                        <option>Laos</option>
                                                        <option>Latvia</option>
                                                        <option>Lebanon</option>
                                                        <option>Lesotho</option>
                                                        <option>Liberia</option>
                                                        <option>Libya</option>
                                                        <option>Liechtenstein</option>
                                                        <option>Lithuania</option>
                                                        <option>Luxembourg</option>
                                                        <option>Macedonia</option>
                                                        <option>Madagascar</option>
                                                        <option>Malawi</option>
                                                        <option>Malaysia</option>
                                                        <option>Maldives</option>
                                                        <option>Mali</option>
                                                        <option>Malta</option>
                                                        <option>Marshall Islands</option>
                                                        <option>Mauritania</option>
                                                        <option>Mauritius</option>
                                                        <option>Mexico</option>
                                                        <option>Micronesia</option>
                                                        <option>Moldova</option>
                                                        <option>Monaco</option>
                                                        <option>Mongolia</option>
                                                        <option>Montenegro</option>
                                                        <option>Morocco</option>
                                                        <option>Mozambique</option>
                                                        <option>Myanmar, {Burma}</option>
                                                        <option>Namibia</option>
                                                        <option>Nauru</option>
                                                        <option>Nepal</option>
                                                        <option>Netherlands</option>
                                                        <option>New Zealand</option>
                                                        <option>Nicaragua</option>
                                                        <option>Niger</option>
                                                        <option>Nigeria</option>
                                                        <option>Norway</option>
                                                        <option>Oman</option>
                                                        <option>Pakistan</option>
                                                        <option>Palau</option>
                                                        <option>Panama</option>
                                                        <option>Papua New Guinea</option>
                                                        <option>Paraguay</option>
                                                        <option>Peru</option>
                                                        <option>Philippines</option>
                                                        <option>Poland</option>
                                                        <option>Portugal</option>
                                                        <option>Qatar</option>
                                                        <option>Romania</option>
                                                        <option>Russian Federation</option>
                                                        <option>Rwanda</option>
                                                        <option>St Kitts &amp; Nevis</option>
                                                        <option>St Lucia</option>
                                                        <option>Saint Vincent &amp; the Grenadines</option>
                                                        <option>Samoa</option>
                                                        <option>San Marino</option>
                                                        <option>Sao Tome &amp; Principe</option>
                                                        <option>Saudi Arabia</option>
                                                        <option>Senegal</option>
                                                        <option>Serbia</option>
                                                        <option>Seychelles</option>
                                                        <option>Sierra Leone</option>
                                                        <option>Singapore</option>
                                                        <option>Slovakia</option>
                                                        <option>Slovenia</option>
                                                        <option>Solomon Islands</option>
                                                        <option>Somalia</option>
                                                        <option>South Africa</option>
                                                        <option>South Sudan</option>
                                                        <option>Spain</option>
                                                        <option>Sri Lanka</option>
                                                        <option>Sudan</option>
                                                        <option>Suriname</option>
                                                        <option>Swaziland</option>
                                                        <option>Sweden</option>
                                                        <option>Switzerland</option>
                                                        <option>Syria</option>
                                                        <option>Taiwan</option>
                                                        <option>Tajikistan</option>
                                                        <option>Tanzania</option>
                                                        <option>Thailand</option>
                                                        <option>Togo</option>
                                                        <option>Tonga</option>
                                                        <option>Trinidad &amp; Tobago</option>
                                                        <option>Tunisia</option>
                                                        <option>Turkey</option>
                                                        <option>Turkmenistan</option>
                                                        <option>Tuvalu</option>
                                                        <option>Uganda</option>
                                                        <option>Ukraine</option>
                                                        <option>United Arab Emirates</option>
                                                        <option>United Kingdom</option>
                                                        <option>United States</option>
                                                        <option>Uruguay</option>
                                                        <option>Uzbekistan</option>
                                                        <option>Vanuatu</option>
                                                        <option>Vatican City</option>
                                                        <option>Venezuela</option>
                                                        <option>Vietnam</option>
                                                        <option>Yemen</option>
                                                        <option>Zambia</option>
                                                        <option>Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label> Téléphone</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label> Organisation</label>
                                                    <input type="text" class="form-control" name="organisation" id="organisation" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label> Position</label>
                                                    <input type="text" class="form-control" name="position" id="position" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="wrapper">
                                                    <div class="add-feature">
                                                        <p class="input-text">Note: 250 limite de mots</p>
                                                        <textarea type="text" id="note"
                                                                  class="form-control" name="note" required="">

                                                        </textarea>
                                                    </div>
                                                    <div class="submit-output">
                                                        <ul id="feature-list"></ul>
                                                    </div>
                                                </div>
                                                <script>
                                                    //Limit number of words in input box
                                                </script>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Télécharger le Manuscrit</label>
                                                <input type="file" name="manuscrit" id="manuscrit" required accept=".pdf">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Créer </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div><!-- /.modal-dialog -->
                </div>

                <div class="row">
                    <div class="col-xl-12 col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                <div
                                    style="margin: 20px!important;"
                                    class="">
                                    <h4 class="mb-sm-0">Publications</h4>
                                </div>
                                <button type="button"
                                        style="margin-left: 20px!important; margin-bottom: 20px!important;"
                                        class="btn btn-secondary btn-sm waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                    Créer une publication
                                </button>
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
                                            <th scope="col">Titre</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Organisation</th>
                                            <th scope="col">Voir</th>
                                            <th scope="col">Actualier/Effacer</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($articles as $article)
                                            <tr>
                                                <td>{{$article->firstName . ' ' . $article->lastName}}</td>
                                                <td>{{$article->email}}</td>
                                                <td>{{$article->phone}}</td>
                                                <td>{{$article->title}}</td>
                                                <td>{{$article->type}}</td>
                                                <td>{{$article->organisation}}</td>
                                                <td>
                                                    <a href="{{route('pdfviewer', ['pdf'=>$article->manuscrit])}}"
                                                       class="btn btn-outline-success btn-sm">
                                                        Voir
                                                    </a>
                                                </td>
                                                <td>
                                                    <a type="button"
                                                       data-bs-toggle="modal"
                                                       data-bs-id="{{'$article->id'}}"
                                                       data-bs-target=".bs-example-modal-xl-{{$article->id}}"
                                                       class="btn btn-outline-success btn-sm">
                                                        Editer
                                                    </a>
                                                    <form id="delete-form-{{ $article->id }}" method="post" action="{{ route('publication.destroy',$article->id) }}" style="display: none">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                    <a href="" class="btn btn-outline-warning btn-sm" onclick="
                                                        if(confirm('Are you sure, You Want to delete this?'))
                                                        {
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $article->id }}').submit();
                                                        }
                                                        else{
                                                        event.preventDefault();
                                                        }" >Supprimer
                                                    </a>
                                                </td>
                                            </tr>

                                            <div class="modal fade bs-example-modal-xl-{{$article->id}}"
                                                 tabindex="-1" role="dialog"
                                                 aria-labelledby="myExtraLargeModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="myModalLabel">Créer un Article</h6>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                                        </div>
                                                        <form action="{{route('publication.update', $article->id)}}" method="post"
                                                              enctype="multipart/form-data" style=" padding: 0 2rem;">
                                                            @csrf
                                                            {{ method_field('PATCH') }}
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label> Prénom de l'Auteur</label>
                                                                        <input type="text" class="form-control" value="{{$article->firstName}}" id="firstName" name="firstName" required="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label> Nom de l'Auteur</label>
                                                                        <input type="text" class="form-control" value="{{$article->lastName}}" name="lastName" id="lastName" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label> Type</label>
                                                                            <select class="form-control" name="type" id="type" required="">
                                                                                <option value="original paper"> Original </option>
                                                                                <option value="reasech">Recherche</option>
                                                                                <option value="case study">Cas d\'Etude</option>
                                                                                <option value="opinion paper"> Opinion</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Titre</label>
                                                                            <input type="text" class="form-control" value="{{$article->title}}" name="title" id="title" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>Pays</label>
                                                                                <select class="form-control" name="country" id="country" required>
                                                                                    <option value="">Selectionner le Pays</option>
                                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                                    <option>Albania</option>
                                                                                    <option>Algeria</option>
                                                                                    <option>Andorra</option>
                                                                                    <option>Angola</option>
                                                                                    <option>Antigua &amp; Deps</option>
                                                                                    <option>Argentina</option>
                                                                                    <option>Armenia</option>
                                                                                    <option>Australia</option>
                                                                                    <option>Austria</option>
                                                                                    <option>Azerbaijan</option>
                                                                                    <option>Bahamas</option>
                                                                                    <option>Bahrain</option>
                                                                                    <option>Bangladesh</option>
                                                                                    <option>Barbados</option>
                                                                                    <option>Belarus</option>
                                                                                    <option>Belgium</option>
                                                                                    <option>Belize</option>
                                                                                    <option>Benin</option>
                                                                                    <option>Bhutan</option>
                                                                                    <option>Bolivia</option>
                                                                                    <option>Bosnia Herzegovina</option>
                                                                                    <option>Botswana</option>
                                                                                    <option>Brazil</option>
                                                                                    <option>Brunei</option>
                                                                                    <option>Bulgaria</option>
                                                                                    <option>Burkina</option>
                                                                                    <option>Burundi</option>
                                                                                    <option>Cambodia</option>
                                                                                    <option>Cameroon</option>
                                                                                    <option>Canada</option>
                                                                                    <option>Cape Verde</option>
                                                                                    <option>Central African Rep</option>
                                                                                    <option>Chad</option>
                                                                                    <option>Chile</option>
                                                                                    <option>China</option>
                                                                                    <option>Colombia</option>
                                                                                    <option>Comoros</option>
                                                                                    <option>Congo Brazzerville</option>
                                                                                    <option>Congo Democratic Rep</option>
                                                                                    <option>Costa Rica</option>
                                                                                    <option>Croatia</option>
                                                                                    <option>Cuba</option>
                                                                                    <option>Cyprus</option>
                                                                                    <option>Czech Republic</option>
                                                                                    <option>Denmark</option>
                                                                                    <option>Djibouti</option>
                                                                                    <option>Dominica</option>
                                                                                    <option>Dominican Republic</option>
                                                                                    <option>East Timor</option>
                                                                                    <option>Ecuador</option>
                                                                                    <option>Egypt</option>
                                                                                    <option>El Salvador</option>
                                                                                    <option>Equatorial Guinea</option>
                                                                                    <option>Eritrea</option>
                                                                                    <option>Estonia</option>
                                                                                    <option>Ethiopia</option>
                                                                                    <option>Fiji</option>
                                                                                    <option>Finland</option>
                                                                                    <option>France</option>
                                                                                    <option>Gabon</option>
                                                                                    <option>Gambia</option>
                                                                                    <option>Georgia</option>
                                                                                    <option>Germany</option>
                                                                                    <option>Ghana</option>
                                                                                    <option>Greece</option>
                                                                                    <option>Grenada</option>
                                                                                    <option>Guatemala</option>
                                                                                    <option>Guinea</option>
                                                                                    <option>Guinea-Bissau</option>
                                                                                    <option>Guyana</option>
                                                                                    <option>Haiti</option>
                                                                                    <option>Honduras</option>
                                                                                    <option>Hungary</option>
                                                                                    <option>Iceland</option>
                                                                                    <option>India</option>
                                                                                    <option>Indonesia</option>
                                                                                    <option>Iran</option>
                                                                                    <option>Iraq</option>
                                                                                    <option>Ireland {Republic}</option>
                                                                                    <option>Israel</option>
                                                                                    <option>Italy</option>
                                                                                    <option>Ivory Coast</option>
                                                                                    <option>Jamaica</option>
                                                                                    <option>Japan</option>
                                                                                    <option>Jordan</option>
                                                                                    <option>Kazakhstan</option>
                                                                                    <option>Kenya</option>
                                                                                    <option>Kiribati</option>
                                                                                    <option>Korea North</option>
                                                                                    <option>Korea South</option>
                                                                                    <option>Kosovo</option>
                                                                                    <option>Kuwait</option>
                                                                                    <option>Kyrgyzstan</option>
                                                                                    <option>Laos</option>
                                                                                    <option>Latvia</option>
                                                                                    <option>Lebanon</option>
                                                                                    <option>Lesotho</option>
                                                                                    <option>Liberia</option>
                                                                                    <option>Libya</option>
                                                                                    <option>Liechtenstein</option>
                                                                                    <option>Lithuania</option>
                                                                                    <option>Luxembourg</option>
                                                                                    <option>Macedonia</option>
                                                                                    <option>Madagascar</option>
                                                                                    <option>Malawi</option>
                                                                                    <option>Malaysia</option>
                                                                                    <option>Maldives</option>
                                                                                    <option>Mali</option>
                                                                                    <option>Malta</option>
                                                                                    <option>Marshall Islands</option>
                                                                                    <option>Mauritania</option>
                                                                                    <option>Mauritius</option>
                                                                                    <option>Mexico</option>
                                                                                    <option>Micronesia</option>
                                                                                    <option>Moldova</option>
                                                                                    <option>Monaco</option>
                                                                                    <option>Mongolia</option>
                                                                                    <option>Montenegro</option>
                                                                                    <option>Morocco</option>
                                                                                    <option>Mozambique</option>
                                                                                    <option>Myanmar, {Burma}</option>
                                                                                    <option>Namibia</option>
                                                                                    <option>Nauru</option>
                                                                                    <option>Nepal</option>
                                                                                    <option>Netherlands</option>
                                                                                    <option>New Zealand</option>
                                                                                    <option>Nicaragua</option>
                                                                                    <option>Niger</option>
                                                                                    <option>Nigeria</option>
                                                                                    <option>Norway</option>
                                                                                    <option>Oman</option>
                                                                                    <option>Pakistan</option>
                                                                                    <option>Palau</option>
                                                                                    <option>Panama</option>
                                                                                    <option>Papua New Guinea</option>
                                                                                    <option>Paraguay</option>
                                                                                    <option>Peru</option>
                                                                                    <option>Philippines</option>
                                                                                    <option>Poland</option>
                                                                                    <option>Portugal</option>
                                                                                    <option>Qatar</option>
                                                                                    <option>Romania</option>
                                                                                    <option>Russian Federation</option>
                                                                                    <option>Rwanda</option>
                                                                                    <option>St Kitts &amp; Nevis</option>
                                                                                    <option>St Lucia</option>
                                                                                    <option>Saint Vincent &amp; the Grenadines</option>
                                                                                    <option>Samoa</option>
                                                                                    <option>San Marino</option>
                                                                                    <option>Sao Tome &amp; Principe</option>
                                                                                    <option>Saudi Arabia</option>
                                                                                    <option>Senegal</option>
                                                                                    <option>Serbia</option>
                                                                                    <option>Seychelles</option>
                                                                                    <option>Sierra Leone</option>
                                                                                    <option>Singapore</option>
                                                                                    <option>Slovakia</option>
                                                                                    <option>Slovenia</option>
                                                                                    <option>Solomon Islands</option>
                                                                                    <option>Somalia</option>
                                                                                    <option>South Africa</option>
                                                                                    <option>South Sudan</option>
                                                                                    <option>Spain</option>
                                                                                    <option>Sri Lanka</option>
                                                                                    <option>Sudan</option>
                                                                                    <option>Suriname</option>
                                                                                    <option>Swaziland</option>
                                                                                    <option>Sweden</option>
                                                                                    <option>Switzerland</option>
                                                                                    <option>Syria</option>
                                                                                    <option>Taiwan</option>
                                                                                    <option>Tajikistan</option>
                                                                                    <option>Tanzania</option>
                                                                                    <option>Thailand</option>
                                                                                    <option>Togo</option>
                                                                                    <option>Tonga</option>
                                                                                    <option>Trinidad &amp; Tobago</option>
                                                                                    <option>Tunisia</option>
                                                                                    <option>Turkey</option>
                                                                                    <option>Turkmenistan</option>
                                                                                    <option>Tuvalu</option>
                                                                                    <option>Uganda</option>
                                                                                    <option>Ukraine</option>
                                                                                    <option>United Arab Emirates</option>
                                                                                    <option>United Kingdom</option>
                                                                                    <option>United States</option>
                                                                                    <option>Uruguay</option>
                                                                                    <option>Uzbekistan</option>
                                                                                    <option>Vanuatu</option>
                                                                                    <option>Vatican City</option>
                                                                                    <option>Venezuela</option>
                                                                                    <option>Vietnam</option>
                                                                                    <option>Yemen</option>
                                                                                    <option>Zambia</option>
                                                                                    <option>Zimbabwe</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label> Téléphone</label>
                                                                                <input type="text" class="form-control" value="{{$article->phone}}" name="phone" id="phone" required="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label> Organisation</label>
                                                                                <input type="text" class="form-control" value="{{$article->organisation}}" name="organisation" id="organisation" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label> Position</label>
                                                                                <input type="text" class="form-control" value="{{$article->position}}" name="position" id="position" required="">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label> Email</label>
                                                                                <input type="email" class="form-control" value="{{$article->email}}" name="email" id="email" required="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">

                                                                            <div class="wrapper">
                                                                                <div class="add-feature">
                                                                                    <p class="input-text">Note: 250 limite de mots</p>
                                                                                    <textarea type="text" id="note"
                                                                                              class="form-control" name="note" required="">
                                                                                        {{$article->note}}
                                                                                    </textarea>
                                                                                </div>
                                                                                <div class="submit-output">
                                                                                    <ul id="feature-list"></ul>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                //Limit number of words in input box
                                                                            </script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Télécharger le Manuscrit</label>
                                                                            <input type="file" name="manuscrit" id="manuscrit" accept=".pdf">
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Créer </button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-dialog -->
                                            </div>
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
