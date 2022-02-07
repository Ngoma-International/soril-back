@extends('layouts.appss')

@section('title')
    Publication
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

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Subscribe To Journal</h1>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->

    <div class="container">
        <div class="row">
            <p>If you have an account, click-here to :
                <a class="btn btn-success shape"
                   onclick="myFunction()">Login</a>
            </p>
        </div>
        <div class="row" id="myDIV" style="display:none">
            <div class="container">
                <div class="login-box-lg">

                    <div class="clearfix over-hidden">
                        <!-- Logo start -->
                        <div class="logo light f-left">
                            <a href="index.html"><img alt="" src="assets/images/logo.png"></a>
                        </div>
                        <!-- Logo end -->

                        <div class="login-head f-right">Login</div>
                    </div>

                    <div class="login-inner shape">

                        <h4 class="bold intro uppercase black-color"></h4>

                        <form class="login-form" id="login-form" method="post"
                              action="{{route('login-subscribe')}}" autocomplete="off">
                            @csrf
                            <input type="hidden" value="{{$id}}" id="id" name="id">
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                                <div class="form-group row">
                                    <label for="email" class="col-3 col-form-label">Email</label>
                                    <div class="col-9">
                                        <input id="email" name="email" placeholder="Your email adress"
                                               type="email" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-3 col-form-label">Password</label>
                                    <div class="col-9">
                                        <input id="password" name="password" placeholder="Your Password Here"
                                               type="password" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-3 col-9">
                                        <button name="submit" type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        @if(session('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="heading centered padding-vertical-20">
                    <h5 class="uppercase head-4 bold">
                        Complete this form for a Subscribe to Journal</h5>
                </div>
                <form action="{{route('abonne.store', ['id'=>$id])}}" method="POST">
                    @csrf
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <form>
                        <div class="form-group row">
                            <label for="firstName" class="col-3 col-form-label">First Name</label>
                            <div class="col-9">
                                <input id="firstName" name="firstName" placeholder="Your Frist Name Here" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-3 col-form-label">Last Name</label>
                            <div class="col-9">
                                <input id="lastName" name="lastName" placeholder="Your Last Name Here" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-3 col-form-label">Password</label>
                            <div class="col-9">
                                <input id="password" name="password" placeholder="Your Password Here" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-3 col-form-label">Email</label>
                            <div class="col-9">
                                <input id="email" name="email" placeholder="Your Email" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pays" class="col-3 col-form-label">Country</label>
                            <div class="col-9">
                                <select class="form-select form-control form-control-lg"
                                        name="pays" id="pays"
                                        data-search="on">
                                    @forelse(\App\Models\Country::all() as $country)
                                        <option value="{{$country->code}}">{{$country->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="etat" class="col-3 col-form-label">State</label>
                            <div class="col-9">
                                <input id="etat" name="etat" placeholder="State Here" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="societe" class="col-3 col-form-label">Company</label>
                            <div class="col-9">
                                <input id="societe" name="societe" placeholder="Company Name" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="position" class="col-3 col-form-label">Position</label>
                            <div class="col-9">
                                <input id="fonction" name="fonction" placeholder="Position" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="departement" class="col-3 col-form-label">Department</label>
                            <div class="col-9">
                                <input id="departement" name="departement" placeholder="Department" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="secteur" class="col-3 col-form-label">Secteur</label>
                            <div class="col-9">
                                <select id="secteur" name="secteur" class="custom-select" required="required">
                                    <option>Administrations Publiques</option>
                                    <option>Aéronautique, Espace</option>
                                    <option>Agriculture, foresterie, pêche et chasse</option>
                                    <option>Agroalimentaire</option>
                                    <option>Artisanat</option>
                                    <option>Audiovisuel, Spectacle Cinéma</option>
                                    <option>Audit, Comptabilité, Conseil</option>
                                    <option>Automobile</option>
                                    <option>Banques, Assurances</option>
                                    <option>BTP / Matériaux de construction</option>
                                    <option>Biologie, Chimie, Pharmacie</option>
                                    <option>Bois / Papier / Carton / Imprimerie</option>
                                    <option>Commerce, Distribution</option>
                                    <option>Communication</option>
                                    <option>Création, Métiers D'art</option>
                                    <option>Culture, Patrimoine</option>
                                    <option>Défense, Sécurité, Armée</option>
                                    <option>Documentation, Bibliothèque</option>
                                    <option>Droit, Services Juridiques</option>
                                    <option>Edition, Livres</option>
                                    <option>Electronique / Electricité</option>
                                    <option>Enseignement, Recherches</option>
                                    <option>Entretien, Propreté</option>
                                    <option>Environnement</option>
                                    <option>Ferroviaire</option>
                                    <option>Foires, Salons Et Congrès</option>
                                    <option>Fonction Publique</option>
                                    <option>Hôtellerie, Restauration, Tourisme</option>
                                    <option>Humanitaire</option>
                                    <option>Immobilier</option>
                                    <option>Informatique, Numérique et Réseaux</option>
                                    <option>Machines, Equipements</option>
                                    <option>Matériaux, Transformations</option>
                                    <option>Marketing, publicité, Communication</option>
                                    <option>Mécanique</option>
                                    <option>Métallurgie / Travail du métal</option>
                                    <option>Médias</option>
                                    <option>Mines, Carrières, Pétrole, Gaz</option>
                                    <option>Paramédical</option>
                                    <option>Plastique / Caoutchouc</option>
                                    <option>Propreté Et Services Associés</option>
                                    <option>Ressources Humaines</option>
                                    <option>Santé, Médical</option>
                                    <option>Social, Services à la personne</option>
                                    <option>Sport et Loisir</option>
                                    <option>Télécommunications</option>
                                    <option>Textile / Habillement / Chaussure</option>
                                    <option>Transport, Logistique, Entreposage</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-3 col-form-label">Phone Number</label>
                            <div class="col-9">
                                <input id="contact" name="contact" placeholder="Phone Number" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-3 col-9">
                                <button name="submit" type="submit" class="btn btn-primary">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </form>
            </div>

        </div>
    </div>
@endsection
