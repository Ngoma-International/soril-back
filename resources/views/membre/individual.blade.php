@extends('layouts.appss')

@section('title')
    Membres
@endsection

@section('content')

    <div class="section" style="padding-top: 2rem !important">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-7">

                            <h3 class=" bold txt-shadow txt" style="margin-left: 12rem;">Membres {{request()->type}}</h3>

                            <br>
                            <center><h5 class="uppercase head-4 bold" style="position: absolute; left: 40%"></h5></center>
                            <br>
                        </div>
                        <div class="col-md-2"></div>
                    </div>



                    <center><h6 class="uppercase bold" style="font-size: 10px;margin-left: -20rem !important;">Tous les champs obligatoires sont marqués * et doivent être remplis.</h6></center>

                    <form action="{{route('add_individual')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="amount" value="{{request()->amount}}">
                        <input type="hidden" name="registrantType" value="{{request()->type}}">
                        <input type="hidden" name="userType" value="8">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>Prénom 	<span class="red">*</span></label>
                                <input type="text" class="form-control shape"
                                       required="" name="firstName">
                            </div>
                            <div class="form-group col-md-5">
                                <label>
                                    Nom de Famille <span class="red">*</span></label><input type="text" class="form-control shape" required="" name="lastName">
                            </div>
                            <div class="form-group col-md-5">
                                <label>Email <span class="red">*</span></label><input type="email" class="form-control shape" required="" name="email">
                            </div>

                            <div class="form-group col-md-5">
                                <label>
                                    Date de Naissance <span class="red">*</span></label><input type="date" class="form-control shape" required="" name="date">
                            </div>

                            <div class="form-group col-md-5">
                                <label>
                                    Pays<span class="red">*</span></label>
                                <select id="country" name="country" class="form-control">
                                    <option value="Afghanistan">Afghanistan </option>
                                    <option value="Afrique Centrale">Afrique Centrale </option>
                                    <option value="Afrique du sud">Afrique du Sud </option>
                                    <option value="Albanie">Albanie </option>
                                    <option value="Algérie">Algérie </option>
                                    <option value="Allemagne">Allemagne </option>
                                    <option value="Andorre">Andorre </option>
                                    <option value="Angola">Angola </option>
                                    <option value="Anguilla">Anguilla </option>
                                    <option value="Arabie Saoudite">Arabie Saoudite </option>
                                    <option value="Argentine">Argentine </option>
                                    <option value="Arménie">Arménie </option>
                                    <option value="Australie">Australie </option>
                                    <option value="Autriche">Autriche </option>
                                    <option value="Azerbaïdjan">Azerbaïdjan </option>
                                    <option value="Bahamas">Bahamas </option>
                                    <option value="Bangladesh">Bangladesh </option>
                                    <option value="Barbade">Barbade </option>
                                    <option value="Bahreïn">Bahreïn </option>
                                    <option value="Belgique">Belgique </option>
                                    <option value="Belize">Belize </option>
                                    <option value="Benin">Benin </option>
                                    <option value="Bermudes">Bermudes </option>
                                    <option value="Biélorussie">Biélorussie </option>
                                    <option value="Bolivie">Bolivie </option>
                                    <option value="Botswana">Botswana </option>
                                    <option value="Bhoutan">Bhoutan </option>
                                    <option value="Bosnie-Herzégovine">Bosnie-Herzégovine </option>
                                    <option value="Brésil">Brésil </option>
                                    <option value="Brunei">Brunei </option>
                                    <option value="Bulgarie">Bulgarie </option>
                                    <option value="Burkina-Faso">Burkina-Faso </option>
                                    <option value="Burundi">Burundi </option>
                                    <option value="Caïman">Caïman </option>
                                    <option value="Cambodge">Cambodge </option>
                                    <option value="Cameroun">Cameroun </option>
                                    <option value="Canada">Canada </option>
                                    <option value="Canaries">Canaries </option>
                                    <option value="Cap-Vert">Cap-Vert </option>
                                    <option value="Chili">Chili </option>
                                    <option value="Chine">Chine </option>
                                    <option value="Chypre">Chypre </option>
                                    <option value="Colombie">Colombie </option>
                                    <option value="Comores">Colombie </option>
                                    <option value="Congo ((République du) ">Congo ((République du) </option>
                                    <option value="(République Démocratique) ">Congo (République Démocratique) </option>
                                    <option value="Cook">Cook </option>
                                    <option value="Corée du Nord">Corée du Nord </option>
                                    <option value="Corée du Sud"> Corée du Sud </option>
                                    <option value="Costa-Rica">Costa-Rica </option>
                                    <option value="Côte-d’Ivoire">Côte-d’Ivoire </option>
                                    <option value="Croatie">Croatie </option>
                                    <option value="Cuba">Cuba </option>
                                    <option value="Danemark">Danemark </option>
                                    <option value="Djibouti">Djibouti </option>
                                    <option value="Dominique">Dominique </option>
                                    <option value="Egypte">Egypte </option>
                                    <option value="Emirats Arabes Unis">Emirats Arabes Unis </option>
                                    <option value="Equateur">Equateur </option>
                                    <option value="Erythrée">Erythrée </option>
                                    <option value="Espagne">Espagne </option>
                                    <option value="Estonie">Estonie </option>
                                    <option value="Etats-Unis">Etats-Unis </option>
                                    <option value="Ethiopie">Ethiopie </option>
                                    <option value="Falkland">Falkland </option>
                                    <option value="Féroé">Féroé </option>
                                    <option value="Fidji">Fidji </option>
                                    <option value="Finlande">Finlande </option>
                                    <option value="France">France </option>
                                    <option value="Gabon">Gabon </option>
                                    <option value="Gambie">Gambie </option>
                                    <option value="Géorgie">Géorgie </option>
                                    <option value="Ghana">Ghana </option>
                                    <option value="Gibraltar">Gibraltar </option>
                                    <option value="Grèce">Grèce </option>
                                    <option value="Grenade">Grenade </option>
                                    <option value="Groenland">Groenland </option>
                                    <option value="Guadeloupe">Guadeloupe </option>
                                    <option value="Guam">Guam </option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernesey">Guernesey </option>
                                    <option value="Guinée">Guinée </option>
                                    <option value="Guinée Bissau">Guinée Bissau </option>
                                    <option value="Guinée Equatoriale">Guinée Equatoriale </option>
                                    <option value="Guyana">Guyana </option>
                                    <option value="Guyane Française ">Guyane Française </option>
                                    <option value="Haïti">Haïti </option>
                                    <option value="Hawaii">Hawaii </option>
                                    <option value="Honduras">Honduras </option>
                                    <option value="Hongkong">Hongkong </option>
                                    <option value="Hongrie">Hongrie </option>
                                    <option value="Inde">Inde </option>
                                    <option value="Indonésie">Indonésie </option>
                                    <option value="Iran">Iran </option>
                                    <option value="Iraq">Iraq </option>
                                    <option value="Irlande">Irlande </option>
                                    <option value="Islande">Islande </option>
                                    <option value="Israël">Israël </option>
                                    <option value="Italie">Italie </option>
                                    <option value="Jamaïque">Jamaïque </option>
                                    <option value="Jan Mayen">Jan Mayen </option>
                                    <option value="Japon">Japon </option>
                                    <option value="Jersey">Jersey </option>
                                    <option value="Jordanie">Jordanie </option>
                                    <option value="Kazakhstan">Kazakhstan </option>
                                    <option value="Kenya">Kenya </option>
                                    <option value="Kirghizstan">Kirghizistan </option>
                                    <option value="Kiribati">Kiribati </option>
                                    <option value="Koweït">Koweït </option>
                                    <option value="Laos">Laos </option>
                                    <option value="Lesotho">Lesotho </option>
                                    <option value="Lettonie">Lettonie </option>
                                    <option value="Liban">Liban </option>
                                    <option value="Liberia">Liberia </option>
                                    <option value="Liechtenstein">Liechtenstein </option>
                                    <option value="Lituanie">Lituanie </option>
                                    <option value="Luxembourg">Luxembourg </option>
                                    <option value="Lybie">Lybie </option>
                                    <option value="Macao">Macao </option>
                                    <option value="Macédoine">Macédoine </option>
                                    <option value="Madagascar">Madagascar </option>
                                    <option value="Madère">Madère </option>
                                    <option value="Malaisie">Malaisie </option>
                                    <option value="Malawi">Malawi </option>
                                    <option value="Maldives">Maldives </option>
                                    <option value="Mali">Mali </option>
                                    <option value="Malte">Malte </option>
                                    <option value="Man">Man </option>
                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                    <option value="Maroc">Maroc </option>
                                    <option value="Marshall">Marshall </option>
                                    <option value="Martinique">Martinique </option>
                                    <option value="Maurice">Maurice </option>
                                    <option value="Mauritanie">Mauritanie </option>
                                    <option value="Mayotte">Mayotte </option>
                                    <option value="Mexique">Mexique </option>
                                    <option value="Micronésie">Micronésie </option>
                                    <option value="Midway">Midway </option>
                                    <option value="Moldavie">Moldavie </option>
                                    <option value="Monaco">Monaco </option>
                                    <option value="Mongolie">Mongolie </option>
                                    <option value="Montserrat">Montserrat </option>
                                    <option value="Mozambique">Mozambique </option>
                                    <option value="Namibie">Namibie </option>
                                    <option value="Nauru">Nauru </option>
                                    <option value="Népal">Népal </option>
                                    <option value="Nicaragua">Nicaragua </option>
                                    <option value="Niger">Niger </option>
                                    <option value="Nigeria">Nigeria </option>
                                    <option value="Niue">Niue </option>
                                    <option value="Norfolk">Norfolk </option>
                                    <option value="Norvège">Norvège </option>
                                    <option value="Nouvelle-Calédonie">Nouvelle-Calédonie </option>
                                    <option value="Nouvelle-Zélande">Nouvelle-Zélande </option>
                                    <option value="Oman">Oman </option>
                                    <option value="Ouganda">Ouganda </option>
                                    <option value="Ouzbékistan">Ouzbékistan </option>
                                    <option value="Pakistan">Pakistan </option>
                                    <option value="Palau">Palau </option>
                                    <option value="Palestine">Palestine </option>
                                    <option value="Panama">Panama </option>
                                    <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée </option>
                                    <option value="Paraguay">Paraguay </option>
                                    <option value="Pays-Bas">Pays-Bas </option>
                                    <option value="Pérou">Pérou </option>
                                    <option value="Philippines">Philippines </option>
                                    <option value="Pologne">Pologne </option>
                                    <option value="Polynésie">Polynésie </option>
                                    <option value="Porto Rico">Porto Rico </option>
                                    <option value="Portugal">Portugal </option>
                                    <option value="Qatar">Qatar </option>
                                    <option value="République Dominicaine">République Dominicaine </option>
                                    <option value="République Tchèque">République Tchèque </option>
                                    <option value="Réunion">Réunion </option>
                                    <option value="Roumanie">Roumanie </option>
                                    <option value="Royaume-Uni">Royaume-Uni </option>
                                    <option value="Russie">Russie </option>
                                    <option value="Rwanda">Rwanda </option>
                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                    <option value="Sainte-Lucie">Sainte-Lucie </option>
                                    <option value="Saint-Marin">Saint-Marin </option>
                                    <option value="Salomon">Salomon </option>
                                    <option value="Salvador">Salvador </option>
                                    <option value="Samoa Occidentales">Samoa Occidentales</option>
                                    <option value="Samoa Américaine">Samoa Américaine </option>
                                    <option value="Sao Tomé et Principe">Sao Tomé et Principe </option>
                                    <option value="Sénégal">Sénégal </option>
                                    <option value="Seychelles">Seychelles </option>
                                    <option value="Sierra Leone">Sierra Leone </option>
                                    <option value="Singapour">Singapour </option>
                                    <option value="Slovaquie">Slovaquie </option>
                                    <option value="Slovénie">Slovénie</option>
                                    <option value="Somalie">Somalie </option>
                                    <option value="Soudan">Soudan </option>
                                    <option value="Sri Lanka">Sri Lanka </option>
                                    <option value="Suède">Suède </option>
                                    <option value="Suisse">Suisse </option>
                                    <option value="Surinam">Surinam </option>
                                    <option value="Swaziland">Swaziland </option>
                                    <option value="Syrie">Syrie </option>
                                    <option value="Tadjikistan">Tadjikistan </option>
                                    <option value="Taiwan">Taiwan </option>
                                    <option value="Tonga">Tonga </option>
                                    <option value="Tanzanie">Tanzanie </option>
                                    <option value="Tchad">Tchad </option>
                                    <option value="Thaïlande">Thaïlande </option>
                                    <option value="Tibet">Tibet </option>
                                    <option value="Timor-Oriental">Timor-Oriental </option>
                                    <option value="Togo">Togo </option>
                                    <option value="Trinité-et-Tobago">Trinité-et-Tobago </option>
                                    <option value="Tristan da Cunha">Tristan de Cunha </option>
                                    <option value="Tunisie">Tunisie </option>
                                    <option value="Turkménistan">Turkménistan </option>
                                    <option value="Turquie">Turquie </option>
                                    <option value="Ukraine">Ukraine </option>
                                    <option value="Uruguay">Uruguay </option>
                                    <option value="Vanuatu">Vanuatu </option>
                                    <option value="Vatican">Vatican </option>
                                    <option value="Venezuela">Venezuela </option>
                                    <option value="Vierges Américaines">Vierges Américaines </option>
                                    <option value="Vierges Britanniques">Vierges Britanniques </option>
                                    <option value="Vietnam">Vietnam </option>
                                    <option value="Wake">Wake </option>
                                    <option value="Wallis et Futuma">Wallis et Futuma </option>
                                    <option value="Yémen">Yémen </option>
                                    <option value="Yougoslavie">Yougoslavie </option>
                                    <option value="Zambie">Zambie </option>
                                    <option value="Zimbabwe">Zimbabwe </option>

                                </select>
                            </div>

                            <div class="form-group col-md-5">
                                <label>
                                    Ville <span class="red">*</span></label>
                                <input type="text" class="form-control shape" name="city" required="">
                            </div>

                            <div class="form-group col-md-5">
                                <label>
                                    Province | Etat *<span class="red">*</span></label><input type="text" class="form-control shape" required="" name="state">
                            </div>
                            <div class="form-group col-md-5">
                                <label>
                                    Nom de la Société <span class="red">*</span></label><input type="text" class="form-control shape" required="" name="companyName">
                            </div>
                            <div class="form-group col-md-5">
                                <label>
                                    Fonction/Titre <span class="red">*</span></label><input type="text" class="form-control shape" required="" name="position">
                            </div>
                            <div class="form-group col-md-5">
                                <label>
                                    Département <span class="red">*</span></label><input type="text" class="form-control shape" required="" name="companyName">
                            </div>
                            <div class="form-group col-md-5">
                                <label>
                                    Secteur<span class="red">*</span></label>

                                <select class=" shape" style="color: #fff; background-color:#54585c;" name="industry">
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
                            <div class="row">
                                <div class="col-md-5 form-group ">
                                    <label>
                                        Numéro de Contact <span class="red">*</span></label><input type="tel" class="form-control shape" required="" name="phone">
                                </div>
                                <div class="col-md-5 form-group ">
                                    <label>
                                        Télécharger Fichier<span class="red">*</span></label><input type="file" class="form-control shape" required="" name="file">
                                </div>
                            </div>


                        </div>

                        <div class=" col-md-3"></div>
                        <div class="form-input margin-top-20 clearfix col-md-5">
                            <input type="submit" class="btn btn-lg main-bg btn-block shape" value="Soumettre">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
