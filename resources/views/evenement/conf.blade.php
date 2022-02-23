
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logos/icon.png')}}">
    <title>
        Home - SORIL
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/soft-design-system.css?v=1.0.5')}}" rel="stylesheet" />
</head>

<body class="index-page">

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur top-0 z-index-fixed justify-content-center shadow position-absolute my-3 py-2 start-0 end-0 mx-0">
                <div class="container-fluid">
                    <!--<a class="navbar-brand font-weight-bolder ms-sm-3"
                      href="index.html"
                      rel="tooltip" title="Go To Home" data-placement="bottom"
                      target="_blank"
                      >
                      SORIL
                    </a>-->
                    <button class="navbar-toggler shadow-none ms-2" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation"
                            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav  justify-content-center navbar-nav-hover col-12 ps-lg-1 w-100">
                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('home')}}"
                                   style="color: black; font-weight: bold;"
                                >
                                    Back To Arimas
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="#home"
                                   style="color: black; font-weight: bold;"
                                >
                                    Home
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="#schedule"
                                   style="color: black; font-weight: bold;">
                                    Schedules
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="#registration"
                                   style="color: black; font-weight: bold;">
                                    Registration
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="#sponsors"
                                   style="color: black; font-weight: bold;">
                                    Sponsors
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<header id="home" class="header-2">
    <div class="page-header min-vh-100 dark"
         style="background-image: url('{{asset('assets/img/bg.jpg')}}');">
        <div style="background-color: black; opacity: 0.8;
            height: 100%; width: 100%; position: absolute"></div>
        <div class="container">
            <div class="col-lg-7 text-center mx-auto">

                <h1 class="text-white mb-0 mt-2">
                    {{$annual->titre}}
                </h1>
                <br>
                <p class="lead text-white mt-0" style="text-shadow: 2px 2px 4px black;">
                    {{$annual->description}}
                </p>
                <p class="lead text-white mt-0" style="text-shadow: 2px 2px 4px black;">
                    <i class="fa fa-map-marker"></i> {{$annual->lieu}} | {{$annual->ville}}
                <p class="lead text-white mt-0" style="text-shadow: 2px 2px 4px black;">
                    <i class="fa fa-calendar"></i>
                    {{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }}
                    <br>
                    Durée : {{$annual->duree}} day (s)
                </p>
                <br>
            </div>
        </div>
    </div>
</header>


<section>
    <div class="container">
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
            <div class="card mt-5 my-5">
                <h3 class="text-gradient text-dark mb-0 mt-2">
                    Description
                </h3>

                <p style="color:black">
                    {{$annual->description}}
                </p>
                <hr class="dark horizontal">
                <br>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <h4 style="color:black">Certification</h4>
                        <p style="margin-left: 20px;">{{$annual->certification}}</p>

                        <h4 style="color:black">Prerequisites</h4>
                        <p style="margin-left: 20px;">{{$annual->prerequis}}</p>

                        <h4 style="color:black">Sponsorship</h4>
                        <p style="margin-left: 20px;">Opportunity</p>

                        <a href="{{route('opportunity')}}">
                            <button type="button" class="btn bg-gradient-dark w-auto me-1 mb-0">View More</button>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <img src="{{asset($anim->image)}}"
                             class="w-100 border-radius-xl my-4" alt="">
                    </div>
                    <div class="col-lg-4 col-12">
                        <h2>Keynote Speaker</h2>
                        <h5>{{$anim->prenom . ' ' . $anim->nom}}</h5>
                        <h6>{{$anim->organisation . ' - ' . $anim->position}}</h6>
                        <h6>{{\App\Models\Country::where('code', $anim->pays)->first()->name}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section id="schedule" class="my-6">
    <div class="container-fluid">
        <div class="row text-center">
            <h2>PROGRAM</h2>

            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Facilitator</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date and Time</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Activity</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($programs as $program)
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$program->header}}</p>
                                </td>
                                <td>
                                    @forelse($anims as $anim)
                                        @if($program->facilitator == $anim->id)
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset($anim->image)}}"
                                                         class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs">{{$anim->prenom . ' ' . $anim->nom}}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{$anim->email}}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                    @endforelse
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">
                                        {{ Carbon\Carbon::parse($program->date)->format('F, d Y') }} -
                                        {{ Carbon\Carbon::parse($program->time)->format('h:i A') }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{$program->title}}</p>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="horizontal dark my-6">

<section id="registration" class="my-6">
    <div class="container-fluid">
        <div class="row text-center">
            <h2>REGISTRATION</h2>>

            <section class="py-sm-1">
                <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
                    <img src="../assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
                    <div class="container py-2 postion-relative z-index-2 position-relative">
                        <div class="row">
                            <div class="col-md-7 mx-auto text-center">
                                <h1 class="text-white">Price : {{$annual->prix}} $</h1>
                                <a
                                    type="button"
                                    data-bs-toggle="modal" data-bs-target="#registration-modal"
                                    class="btn btn-white btn-lg mb-3 mb-sm-0">REGISTER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<hr class="horizontal dark my-4">

<section class="pt-4 pb-6" id="sponsors">
    <div class="container text-center">
        <h2>SPONSORS</h2>
        <br>
        <div class="row mb-7">
            @forelse(\App\Models\SponsorEvent::all() as $spon)
                @forelse(\App\Models\Sponsor::all() as $spons)
                    @if($spon->sponsor_id == $spons->id)
                        @if($spon->evenement_id == $annual->id)
                            <div class="col-lg-2 col-md-4 col-6 mb-4">
                                <img class="w-100 opacity-7" src="{{asset($spons->image)}}" alt="logo">
                                <p>{{$spons->organisation}}</p>
                            </div>
                        @endif
                    @endif
                @empty
                @endforelse
            @empty
            @endforelse
        </div>
    </div>
</section>

<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
<div class="container">
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="LoginLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Soril Administration</h6>
                    </div>
                    <div class="modal-body">
                        <a href="./login-form.php?type=administration?stype=null">
                            <button type="button" class="btn btn-outline-dark mb-0">Manager</button>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Soril Event</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-outline-dark mb-0">Manager</button>
                    </div>
                </div>

                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Soril MemberShip</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-outline-dark mb-0">Members Manager</button>

                        <button type="button" class="btn btn-outline-dark mb-0">Individual Members</button>

                        <button type="button" class="btn btn-outline-dark mb-0">Corporate Members</button>

                        <button type="button" class="btn btn-outline-dark mb-0">Members Associations</button>
                    </div>
                </div>

                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">The Journal</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-outline-dark mb-0">Managers</button>

                        <button type="button" class="btn btn-outline-dark mb-0">Authors</button>

                        <button type="button" class="btn btn-outline-dark mb-0">Subscriber</button>
                    </div>
                </div>

                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">BookShop</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-outline-dark mb-0">Manager</button>
                    </div>
                </div>

                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">A CRMP COURSE</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-outline-dark mb-0">Staff</button>

                        <button type="button" class="btn btn-outline-dark mb-0">Participant</button>
                    </div>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-info" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registration-modal" tabindex="-1" aria-labelledby="biographieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MIMILE MUKUNA Maisha</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form
                    action="{{url('register_evenement_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="form-group label-floating">
                            <input name="id" id="id" type="hidden" value="{{$annual->id}}" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-input col-md-6">
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
                                @forelse (\App\Models\Country::all() as $item)
                                    <option value="{{$item->code}}">{{$item->name}} </option>
                                @empty

                                @endforelse
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
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{asset('assets/js/plugins/countup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/choices.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/prism.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/highlight.min.js')}}"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{asset('assets/js/plugins/rellax.min.js')}}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{asset('assets/js/plugins/tilt.min.js')}}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{asset('assets/js/plugins/choices.min.js')}}"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
<!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{asset('assets/js/soft-design-system.min.js?v=1.0.5')}}" type="text/javascript"></script>
<script type="text/javascript">
    if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
            countUp1.start();
        } else {
            console.error(countUp1.error);
        }
    }
    if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
            countUp2.start();
        } else {
            console.error(countUp2.error);
        };
    }
</script>
</body>

</html>
