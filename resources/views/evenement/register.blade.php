@extends('layouts.appss')

@section('title')
    Register Event
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

    <div
        style="padding: 50px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-lg-10">
                    <div class="heading centered padding-vertical-20">

                        <i class="fa fa-info-circle tbl main-color"></i>
                        <h5 class="uppercase head-4 bold">Tous les champs obligatoires sont marqués * et doivent être remplis.</h5>
                    </div>
                    <form action="{{url('register_evenement_post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="form-group label-floating">
                                <input name="id" id="id" type="hidden" value="{{$id}}" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-input col-md-8 ">
                                <label class="control-label" style="">Title *</label>
                                <select name="title" id="title" class="form-control" style="" required="">
                                    <option value="mr">Monsieur</option>
                                    <option value="mrs">Madame</option>
                                    <option value="ms">Mademoiselle</option>
                                </select>


                            </div>



                            <div class="form-input col-md-5">
                                <label>Prénom
                                    <span class="red">*</span></label>
                                <input type="text" class="form-control shape" required="" name="firstName" id="firstName">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Nom de Famille <span class="red">*</span></label>
                                <input type="text" class="form-control shape" required="" name="lastName" id="lastName">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    deuxième nom<span class="red">*</span></label>
                                <input type="text" class="form-control shape" name="middleName" id="middleName">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Email <span class="red">*</span></label>
                                <input type="email" class="form-control shape" required="" name="email" id="email">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Pays<span class="red">*</span></label>
                                <select id="pays" name="pays" class="form-control">
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
                            <div class="form-input col-md-5">
                                <label>
                                    Ville <span class="red">*</span></label>
                                <input type="text" class="form-control shape" required="" name="ville" id="ville">
                            </div>

                            <div class="form-input col-md-5">
                                <label>
                                    Province | Etat *<span class="red">*</span></label>
                                <input type="text" class="form-control shape" required="" name="province" id="province">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Nom de la Société <span class="red">*</span></label>
                                <input type="text" class="form-control shape" required="" name="company" id="company">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Fonction/Titre <span class="red">*</span></label>
                                <input type="text" class="form-control shape" required="" name="position" id="position">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Département <span class="red">*</span></label>
                                <input type="text" class="form-control shape" required="" name="departement" id="departement">
                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Secteur<span class="red">*</span></label>

                                <select class=" shape" style="color: #fff; background-color:#54585c;" id="industrie" name="industrie">
                                    <option>Accounting</option>
                                    <option>Airlines/Aviation</option>
                                    <option>Alternative Dispute Resolution</option>
                                    <option>Alternative Medicine</option>
                                    <option>Animation</option>
                                    <option>Apparel/Fashion</option>
                                    <option>Architecture/Planning</option>
                                    <option>Arts/Crafts</option>
                                    <option>Automotive</option>
                                    <option>Aviation/Aerospace</option>
                                    <option>Banking/Mortgage</option>
                                    <option>Biotechnology/Greentech</option>
                                    <option>Broadcast Media</option>
                                    <option>Building Materials</option>
                                    <option>Business Supplies/Equipment</option>
                                    <option>Capital Markets/Hedge Fund/Private Equity</option>
                                    <option>Chemicals</option>
                                    <option>Civic/Social Organization</option>
                                    <option>Civil Engineering</option>
                                    <option>Commercial Real Estate</option>
                                    <option>Computer Games</option>
                                    <option>Computer Hardware</option>
                                    <option>Computer Networking</option>
                                    <option>Computer Software/Engineering</option>
                                    <option>Computer/Network Security</option>
                                    <option>Construction</option>
                                    <option>Consumer Electronics</option>
                                    <option>Consumer Goods</option>
                                    <option>Consumer Services</option>
                                    <option>Cosmetics</option>
                                    <option>Dairy</option>
                                    <option>Defense/Space</option>
                                    <option>Design</option>
                                    <option>E-Learning</option>
                                    <option>Education Management</option>
                                    <option>Electrical/Electronic Manufacturing</option>
                                    <option>Entertainment/Movie Production</option>
                                    <option>Environmental Services</option>
                                    <option>Events Services</option>
                                    <option>Executive Office</option>
                                    <option>Facilities Services</option>
                                    <option>Farming</option>
                                    <option>Financial Services</option>
                                    <option>Fine Art</option>
                                    <option>Fishery</option>
                                    <option>Food Production</option>
                                    <option>Food/Beverages</option>
                                    <option>Fundraising</option>
                                    <option>Furniture</option>
                                    <option>Gambling/Casinos</option>
                                    <option>Glass/Ceramics/Concrete</option>
                                    <option>Government Administration</option>
                                    <option>Government Relations</option>
                                    <option>Graphic Design/Web Design</option>
                                    <option>Health/Fitness</option>
                                    <option>Higher Education/Acadamia</option>
                                    <option>Hospital/Health Care</option>
                                    <option>Hospitality</option>
                                    <option>Human Resources/HR</option>
                                    <option>Import/Export</option>
                                    <option>Individual/Family Services</option>
                                    <option>Industrial Automation</option>
                                    <option>Information Services</option>
                                    <option>Information Technology/IT</option>
                                    <option>Insurance</option>
                                    <option>International Affairs</option>
                                    <option>International Trade/Development</option>
                                    <option>Internet</option>
                                    <option>Investment Banking/Venture</option>
                                    <option>Investment Management/Hedge Fund/Private Equity</option>
                                    <option>Judiciary</option>
                                    <option>Law Enforcement</option>
                                    <option>Law Practice/Law Firms</option>
                                    <option>Legal Services</option>
                                    <option>Legislative Office</option>
                                    <option>Leisure/Travel</option>
                                    <option>Library</option>
                                    <option>Logistics/Procurement</option>
                                    <option>Luxury Goods/Jewelry</option>
                                    <option>Machinery</option>
                                    <option>Management Consulting</option>
                                    <option>Maritime</option>
                                    <option>Market Research</option>
                                    <option>Marketing/Advertising/Sales</option>
                                    <option>Mechanical or Industrial Engineering</option>
                                    <option>Media Production</option>
                                    <option>Medical Equipment</option>
                                    <option>Medical Practice</option>
                                    <option>Mental Health Care</option>
                                    <option>Military Industry</option>
                                    <option>Mining/Metals</option>
                                    <option>Motion Pictures/Film</option>
                                    <option>Museums/Institutions</option>
                                    <option>Music</option>
                                    <option>Nanotechnology</option>
                                    <option>Newspapers/Journalism</option>
                                    <option>Non-Profit/Volunteering</option>
                                    <option>Oil/Energy/Solar/Greentech</option>
                                    <option>Online Publishing</option>
                                    <option>Other Industry</option>
                                    <option>Outsourcing/Offshoring</option>
                                    <option>Package/Freight Delivery</option>
                                    <option>Packaging/Containers</option>
                                    <option>Paper/Forest Products</option>
                                    <option>Performing Arts</option>
                                    <option>Pharmaceuticals</option>
                                    <option>Philanthropy</option>
                                    <option>Photography</option>
                                    <option>Plastics</option>
                                    <option>Political Organization</option>
                                    <option>Primary/Secondary Education</option>
                                    <option>Printing</option>
                                    <option>Professional Training</option>
                                    <option>Program Development</option>
                                    <option>Public Relations/PR</option>
                                    <option>Public Safety</option>
                                    <option>Publishing Industry</option>
                                    <option>Railroad Manufacture</option>
                                    <option>Ranching</option>
                                    <option>Real Estate/Mortgage</option>
                                    <option>Recreational Facilities/Services</option>
                                    <option>Religious Institutions</option>
                                    <option>Renewables/Environment</option>
                                    <option>Research Industry</option>
                                    <option>Restaurants</option>
                                    <option>Retail Industry</option>
                                    <option>Security/Investigations</option>
                                    <option>Semiconductors</option>
                                    <option>Shipbuilding</option>
                                    <option>Sporting Goods</option>
                                    <option>Sports</option>
                                    <option>Staffing/Recruiting</option>
                                    <option>Supermarkets</option>
                                    <option>Telecommunications</option>
                                    <option>Textiles</option>
                                    <option>Think Tanks</option>
                                    <option>Tobacco</option>
                                    <option>Translation/Localization</option>
                                    <option>Transportation</option>
                                    <option>Utilities</option>
                                    <option>Venture Capital/VC</option>
                                    <option>Veterinary</option>
                                    <option>Warehousing</option>
                                    <option>Wholesale</option>
                                    <option>Wine/Spirits</option>
                                    <option>Wireless</option>
                                    <option>Writing/Editing</option>
                                </select>

                            </div>
                            <div class="form-input col-md-5">
                                <label>
                                    Numéro de Contact <span class="red">*</span></label>
                                <input type="tel" class="form-control shape" required="" name="phone" id="phone">
                            </div>
                            <div class="form-input col-md-5">
                                <label>

                                    bureau tel <span class="red">*</span></label>
                                <input type="tel" class="form-control shape" required="" name="phoneBureau" id="phoneBureau">
                            </div>


                        </div>

                        <div class="clearfix"></div>
                        <div class="form-input margin-top-20 clearfix col-md-5">
                            <input type="submit" class="btn btn-lg main-bg btn-block shape" value="Soumettre">
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
