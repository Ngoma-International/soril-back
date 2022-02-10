<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logos/icon.png')}}">
    <title>
        SORIL
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
<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
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
                        <ul class="navbar-nav navbar-nav-hover col-12 ps-lg-1 w-100">
                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('home')}}"
                                   style="color: black; font-weight: bold;"
                                >
                                    Home
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('about')}}"
                                   style="color: black; font-weight: bold;">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('evenementss')}}"
                                   style="color: black; font-weight: bold;">
                                    Events
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false"
                                   style="color: black; font-weight: bold;">
                                    Membership
                                    <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                    <div class="d-none d-lg-block">
                                        <a href="{{route('individual')}}" class="dropdown-item border-radius-md">
                                            <span class="ps-3">individual Membership</span>
                                        </a>
                                        <a href="{{route('collective')}}" class="dropdown-item border-radius-md">
                                            <span class="ps-3">Coorporate Membership</span>
                                        </a>
                                        <a href="{{route('membre')}}" class="dropdown-item border-radius-md">
                                            <span class="ps-3">Member Associations</span>
                                        </a>
                                    </div>
                                    <div class="d-lg-none">
                                        <a href="{{route('individual')}}" class="dropdown-item border-radius-md">
                                            <span class="ps-3">individual Membership</span>
                                        </a>
                                        <a href="{{route('collective')}}" class="dropdown-item border-radius-md">
                                            <span class="ps-3">Coorporate Membership</span>
                                        </a>
                                        <a href="{{route('membre')}}" class="dropdown-item border-radius-md">
                                            <span class="ps-3">Member Associations</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('certification')}}"
                                   style="color: black; font-weight: bold;">
                                    Certification
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('journal.index')}}"
                                   style="color: black; font-weight: bold;">
                                    Journal
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('library')}}"
                                   style="color: black; font-weight: bold;">
                                    Library
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('emplois')}}"
                                   style="color: black; font-weight: bold;">
                                    Job Offers
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   id="dropdownMenuPages" href="{{route('moreinfo')}}"
                                   style="color: black; font-weight: bold;">
                                    More Information
                                </a>
                            </li>

                            <li class="nav-item my-auto ms-3 ms-lg-0 ml-5">
                                <a>
                                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-toggle="modal" data-bs-target="#login">
                                        LOGIN
                                    </button>
                                </a>
                            </li>

                            <?php
                            if((isset($_GET["page"]))){
                            if(!(empty(htmlspecialchars($_GET["page"])))){
                            ?>
                            <li class="nav-item my-auto ms-3 ms-lg-2">
                                <a href="" class="info">
                                    <i class="fa fa-shopping-cart fa-2x"></i>
                                    <span style="color:black"
                                          class="badge badge-md badge-circle badge-floating badge-danger border-dark">
              0
            </span>
                                </a>
                            </li>
                            <?php
                            }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- End Navbar -->
        </div>
    </div>
</div>

@yield('content')

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

<footer class="footer pt-4 mt-4">
    <hr class="horizontal dark mb-2">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <img src="assets/img/logos/icon.png"
                         style="width: 80%; object-fit: cover;"
                         alt="">
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h4 class="text-gradient text-dark">Contact</h4>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" target="_blank">
                                <i class="fa fa-mobile text-lg opacity-8"></i>
                                011 277 583
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" target="_blank">
                                <i class="fa fa-mobile text-lg opacity-8"></i>
                                071 573 4653
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" target="_blank">
                                <i class="fa fa-map-marker text-lg opacity-8"></i>
                                08, Meadowbrook Lane, Epsom Downs, Sandton
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" target="_blank">
                                <i class="fa fa-envelope-o text-lg opacity-8"></i>
                                infos@arimas.org
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h4 class="text-gradient text-dark">Useful Links</h4>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}" target="_blank">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('individual')}}" target="_blank">
                                Individual Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('collective')}}" target="_blank">
                                Corporate Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('certification')}}" target="_blank">
                                Certification
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('journal.index')}}" target="_blank">
                                The Journal
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-4">
                <div>
                    <h4 class="text-gradient text-dark">Annual Conference</h4>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('conference', \App\Models\Evenement::where('typeEvent', 'annual')->first()->id)}}"
                               target="_blank">
                                <h6>{{\App\Models\Evenement::where('typeEvent', 'annual')->first()->titre}}</h6>
                                <i class="fa fa-calendar text-lg opacity-8"></i>
                                {{ Carbon\Carbon::parse(\App\Models\Evenement::where('typeEvent', 'annual')->first()->date)->format('F, d Y') }}
                                -
                                Durée : {{\App\Models\Evenement::where('typeEvent', 'annual')->first()->duree}} day(s)
                                <br><i class="fa fa-map-marker text-lg opacity-8"></i>
                                {{\App\Models\Evenement::where('typeEvent', 'annual')->first()->lieu}}
                                | {{\App\Models\Evenement::where('typeEvent', 'annual')->first()->ville}}
                            </a>
                        </li>
                    </ul>

                    <h4 class="text-gradient text-dark">Seminars</h4>
                    <ul class="flex-column ms-n3 nav">
                        @forelse (\App\Models\Evenement::orderBy('date', 'desc')->take(2)->get() as $item)
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{route('conference', $item->id)}}"
                                   target="_blank">
                                    <h6>{{$item->titre}}</h6>
                                    <i class="fa fa-calendar text-lg opacity-8"></i>
                                    {{ Carbon\Carbon::parse($item->date)->format('F, d Y') }}
                                    -
                                    Durée : {{$item->duree}} day(s)
                                    <br><i class="fa fa-map-marker text-lg opacity-8"></i>
                                    {{$item->lieu}}
                                    | {{$item->ville}}
                                </a>
                            </li>
                        @empty

                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center">
                    <p class="my-4 text-sm">
                        All rights reserved. Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> -- Created & Powered by <a href="https://www.ngomadigitech.com/" target="_blank">NGOMBA DigiTech (Pty) Ltd.</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
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
