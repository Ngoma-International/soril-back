@extends('layouts.appss')

@section('title')
    A Propos
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">About US</h1>
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
    <section class="py-2">
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
                <div class="col-lg-5">
                    <h2 class="text-gradient text-danger mb-0 mt-2">Who We Are</h2>
                    <p style="color: black">The African Risk Management Society (ARiMaS) is a Non-Profit Organisation representing risk leaders from around the African continent and provides them with professional support. ARiMaS also partners with African national and regional risk management associations, institutes and academic institutions to advance risk leadership in Africa.
                        <br><br>
                        ARiMAs also operates as a coalition of national risk management associations to advance in Africa both the risk management practice and risk leadership.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 text-center">
                    @php
                        $annual = \App\Models\Evenement::where('typeEvent', 'annual')->first();
                    @endphp
                    <div class="text-center"
                         style="border-radius: 0%; width: 80%; margin: auto;
                             border-top: 6px solid #6092fe;
                             color: #FFFFFF;
                             background: rgba(18, 19, 49, 1); padding: 10px; margin-top: 5px">
                        <h4 style="color: white; text-transform: capitalize">{{$annual->titre}}</h4>

                        <p>
                            {{$annual->lieu}} | {{$annual->ville}}
                        </p>

                        <p>
                            {{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }}
                            -
                            Durée : {{$annual->duree}} day(s)
                        </p>

                        <p>
                            <i>{{$annual->description}}</i>
                        </p>
                        <a href="{{route('conference', $annual->id)}}" style="margin:20px!important;
                            background-color: #6092fe;
                            color:white!important;" target="_blank"
                           class="btn mt-5 up btn-round">View More ...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-gradient text-danger mb-0 mt-2">What Guide Us</h2>
                    <p style="color: black">
                        With the expiry of the previous Strategic Plan in 2019, ARiMaS decided to embark on the development of a new Strategic Plan which would transform the Organisation and created added value for its members and other stakeholders. The new Plan is for the period 2020-2025 and it is based on the Purpose Statement introduced by the new President, Mr Mimile Maisha.
                    </p>

                    <div class="row">
                        <div class="col-lg-4">
                            <h5>Purpose</h5>
                            <p class="text-sm mb-0" style="color: black">
                                To help risk leaders in African organisations
                                to be able to make risk-informed decisions for
                                the good of the organisation they run, the people
                                they lead and the communities in which they operate.
                            </p>
                        </div>

                        <div class="col-lg-4">
                            <h5>Mission</h5>
                            <p class="text-sm mb-0" style="color: black">
                                We advance risk leadership in African business and public organisations through internal and external events, professional development, research, and advocacy.
                            </p>
                        </div>

                        <div class="col-lg-4">
                            <h5>vision</h5>
                            <p class="text-sm mb-0" style="color: black">
                                A trusted and recognised partner for sustainable development in Africa.
                            </p>
                        </div>
                    </div>

                    <br>

                    <h2 class="text-gradient text-danger mb-0 mt-2">Our Governance</h2>
                    <p class="text-sm mb-0" style="color: black">
                        he Board of Directors is the decision-making body of the Society and its decisions are taken by consensus. It has the ultimate responsibility for directing the activities of the Society and in insuring that its stated purpose is effectively pursued and fulfilled. It consists of 12 risk professionals from different risk management associations and institutes in different African countries
                        <br>
                        <br>
                        The day-to-day operations and activities of the Society are performed by the General Secretariate which is accountable to the Board of Directors and provides regular progress updates and status reports on the Society’s operations and activities.
                        <br>
                        <br>
                        Additionally, the Board of Directors has appointed an independent Advisory Committee made up of experts from around the world with deep technical or policy experience related to risk management research and practice. The Advisory Board serves as an independent and unbiased sounding board to the executive team and provides expertise and guidance, while ensuring effective planning, monitoring and strengthening of the Society’s offerings and enhancing its public standing.
                    </p>

                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
                    <div class="container">
                        <h3>Strategic Objectives</h3>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fas fa-handshake opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                To collaborate with corporate and individual members, risk management associations institutes, academic institutions, policy makers, risk management practitioners in promoting risk leadership in Africa and for the realisation of our purpose;
                            </p>
                        </div>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fas fa-info-circle opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                To provide a risk leadership perspective on African issues;
                            </p>
                        </div>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fa fa-institution opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                To advocate for risk leadership before international and governmental institutions;
                            </p>
                        </div>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fa fa-child opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                To represent and defend the interests of our member associations and their members;
                            </p>
                        </div>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fa fa-plus-square opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                To create, collect and share knowledge and innovative approaches amongst our member associations and their members;
                            </p>
                        </div>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fa fa-bar-chart opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                To improve the recognition of and raise the role of risk leadership in African private and public organisations;
                            </p>
                        </div>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fa fa-check-square opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                To demonstrate the value that risk leadership bring to organisations;
                            </p>
                        </div>
                    </div>

                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center">
                            <i class="fa fa-certificate opacity-10"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0" style="color: black">
                                Take the lead with stakeholders who have an interest in risk leadership.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pt-sm-5 pb-5 position-relative bg-gradient-dark">
        <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
            <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-down</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-down">
                            <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <h3 class="text-white z-index-1 position-relative">Generale Secretariate</h3>
                </div>
            </div>
            <div class="row">
                @forelse($secretariats as $sec)
                    <div class="col-lg-3 col-6">
                        <div class="card card-profile overflow-hidden">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12 pe-lg-0">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-90 border-radius-md"
                                                 height="200px"
                                                 STYLE="object-fit: cover"
                                                 src="{{asset($sec->image)}}" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-6 col-12 ps-lg-0 my-auto">
                                    <div class="card-body">
                                        <h5 class="mb-0" style="color: black">{{$sec->prenom . ' ' . $sec->nom}}</h5>
                                        <h6 class="text-info">{{$sec->type}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <h3 class="text-white z-index-1 position-relative">Board of Directors</h3>
                </div>
            </div>
            <div class="row">
                @forelse($admins as $admin)
                    <div class="col-lg-3 col-12">
                        <div class="card card-profile overflow-hidden">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12 pe-lg-0">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-90 border-radius-md"
                                                 height="200px"
                                                 STYLE="object-fit: cover"
                                                 src="{{$admin->image}}" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-6 col-12 ps-lg-0 my-auto">
                                    <div class="card-body">
                                        <h5 class="mb-0" style="color: black">{{$admin->prenom . ' ' . $admin->nom}}</h5>
                                        <h6 class="text-info">{{$admin->position}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <h3 class="text-white z-index-1 position-relative">Advisory Board</h3>
                </div>
            </div>
            <div class="row">
                @forelse($consultatifs as $cons)
                    <div class="col-lg-3 col-12">
                    <div class="card card-profile overflow-hidden">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12 pe-lg-0">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-90 border-radius-md"
                                             height="200px"
                                             STYLE="object-fit: cover;"
                                             src="{{asset($cons->image)}}" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12 ps-lg-0 my-auto">
                                <div class="card-body">
                                    <h5 class="mb-0" style="color: black">{{$cons->prenom . ' ' . $cons->nom}}</h5>
                                    <h6 class="text-info">{{$cons->position}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse

            </div>
        </div>
        <div class="position-absolute w-100 bottom-0 mn-n1">
            <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-up</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-up" transform="translate(0.000000, -5.000000)">
                            <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z" fill="#f8f9fa"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-gradient text-danger mb-0 mt-3">Partnering With Us</h2>
                    <br>
                    <p style="color: black">
                        One of the most important strategic objectives of ARiMAS is to create and lead a coalition with African Risk Management Associations, Institutes and Academic Institutions advance risk leadership in Africa.
                        <br>
                        <br>
                        Should you wish to be counted among our valued partners, please register below. Our administration office will then contact you by phone or email to finalise the registration process.
                        <br>
                        <br>
                        <b class="text-lg">As a partner, you will be able to:</b>
                    </p>

                    <ul style="color: black">
                        <li>
                            Use of the description ‘ARiMaS’ Partnerr’ and use of the ARiMaS’ logo on website, stationery and publications
                        </li>
                        <li>
                            Listing as an ARiMaS’ Partners on our website and promotional materials
                        </li>
                        <li>
                            Priority access to exhibition and sponsorship opportunities
                        </li>
                        <li>Priority involvement in ARiMaS’ projects and activities</li>

                        <li>Stand for election to the Board of Directors and invitation to join our Advisory Board</li>
                        <li>Invitation to submit articles</li>
                        <li> Invitation to speak</li>
                        <li>Free access to the African Journal of Risk Management</li>
                        <li>Savings on ARiMaS’ events and training courses for your delegates</li>
                    </ul>

                    <div class="container">
                        <div class="row text-center">
                            <a href="{{route('partenariat')}}" type="button" class="btn btn-danger w-auto me-1 mb-0">Register</a>
                        </div>

                        <hr class="horizontal dark my-5">
                        <div class="row text-center">

                            <h2 class="mb-5 mt-2" style="color: black">Current Partners</h2>
                            <br>
                            @forelse($partenaires as $part)
                                <div class="col-lg-2 col-md-4 col-6 ms-auto">
                                    <img class="opacity-10"
                                         width="150px"
                                         height="80px"
                                         style="object-fit:contain"
                                         src="{{asset($part->image)}}" alt="Logo">
                                    <h5>{{$part->organisation}}</h5>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
