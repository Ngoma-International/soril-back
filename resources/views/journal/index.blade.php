@extends('layouts.appss')

@section('title')
    Journal
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-100" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto my-auto bg-white">
                        <img src="{{asset('assets/img/journal.png')}}" width="75%;"
                             style="margin: 10px" alt="">
                    </div>
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
            <div class="row" id="overview">
                <div class="col-lg-7">
                    <h2 class="text-gradient text-danger mb-0 mt-2">
                        The Journal Overview
                    </h2>
                    <p style="color: black; margin-left: 30.0px">
                        The African Journal of Risk Leadership (AJRL) is published quarterly online only on behalf of on behalf of the African Risk Management Society.
                        <br><br>
                        The mission of the ARJL is to create, stimulate and perpetuate a culture of information sharing and publishing amongst researchers and practitioners of risk management in African in ways that will contribute to availability of Africa related risk and risk management information, better understanding of Africa risk and risk management particularities and, overall, to the purpose of ARiMaS.

                        <b>The Scope</b>
                        <br>
                        The AJRM publishes risk management related original and review papers, studies, technical reports, educational articles, conference reports, management reports, book reviews, news and notes commentaries on business, organisational, social, political, and economic risks and risk management issues and new developments in the field of risk management.
                        <br><br>
                        <b>Target Audience</b>
                        <br>
                        The AJRM is intended for African practitioners, researchers, and scholars involved with or interested in Africa risk management issues and adjacent fields.
                        <br><br>
                        <b>Submissions</b>
                        <br>
                        Submissions may be voluntary, by invitation, and suggestions for special issues and publications are welcome. We are particularly interested in receiving articles and comments reflecting the point of view and experience of practitioners working in Africa.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 ms-auto mt-lg-0 mt-4">

                    <div class="row">
                        <nav class="navbar navbar-expand
                                        blur blur-rounded top-0 z-index-fixed
                                        shadow position-relative start-0 end-0 mb-3">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse pt-1 pb-1 py-lg-0" id="navigation">
                                    <ul class="navbar-nav navbar-nav-hover ms-lg-0 ps-lg-0 w-100">

                                        <li class="nav-item dropdown dropdown-hover mx-0">
                                            <a class="nav-link ps-2 d-flex justify-content-between align-items-center"
                                               href="{{route('journal-articles')}}"
                                               style="color: black;">
                                                Articles
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover mx-0">
                                            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                               href="{{route('submit')}}"
                                               style="color: black;">
                                                Submit
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover mx-0">
                                            <a href="{{route('author.create')}}"
                                               class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                                                Author Login
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <a href="{{route('author.index')}}">
                                    <h5 class="mt-3">
                                        Register as Author
                                    </h5>
                                </a>
                                <hr>

                                <a href="{{route('article.index')}}">
                                    <h5 class="mt-3">
                                        Submit an Article
                                    </h5>
                                </a>
                                <hr>

                                <a href="{{route('subscribe')}}">
                                    <h5 class="mt-3">
                                        Subscrite to The Journal
                                    </h5>
                                </a>
                                <hr>

                                @if (session('subscribe'))
                                    <a href="{{route('shows', ['id'=>session('subscribe')])}}">
                                        <h5 class="mt-3">
                                            Subscribe Profile
                                        </h5>
                                    </a>
                                    <hr>
                                @endif

                                <a href="{{route('artis')}}">
                                    <h5 class="mt-3">
                                        View Articles
                                    </h5>
                                </a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h4 style="color: black">
                        Areas of particular interest are:
                    </h4>

                    <div class="col-lg-6">
                        <ul style="color: black">
                            <li>Enterprise risk management (corporate, governments/municipalities)</li>
                            <li>Insurance</li>
                            <li>Alternative Risk financing</li>
                            <li>Operational Risk Management (financial and non-financial companies)</li>
                            <li>Credit Risk Management (financial and non-financial companies)</li>
                            <li>Treasury Risk management(financial and non-financial companies)</li>
                            <li>Corporate Governance</li>
                            <li>External/Internal Audit</li>
                            <li>Healthcare risk management</li>
                            <li>Country Risk Management</li>
                            <li>Economic Risk Management</li>
                            <li>Disaster Management</li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul style="color:black">
                            <li>Environmental Risk Management</li>
                            <li>Crisis management</li>
                            <li>Business Continuity</li>
                            <li>Cyber Risk Management</li>
                            <li>Social Risk Management</li>
                            <li>Risk Governance (Global Risks)</li>
                            <li>International Business Law</li>
                            <li>International Investment Law</li>
                            <li>International Trade</li>
                            <li>Leadership</li>
                            <li>Strategic Management</li>
                            <li>Risk management information systems</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark my-5">

            <div class="container" id="edito">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="text-gradient text-danger mb-0 mt-2">
                            Editorial Board
                        </h2>
                        <h4 style="color:black">
                            Editors Chiefs
                        </h4>

                        <ul>
                            <li>
                                <b>Henri</b>, Donker, University of Capetown, South Africa(henry.donker@arimas.org)
                            </li>
                            <li>
                                <b>Mimile</b>, Maisha, First Continental Legal and Risk Consultants, Johannesburg, South Africa(mimile.maisha@arimas.com)
                            </li>
                        </ul>

                        <h4 style="color:black">
                            Editorial Boards Members
                        </h4>

                        <ul>
                            <li>
                                <b>Monga</b>, Hatarig, Egerton University, Kenya
                            </li>
                            <li>
                                <b>Robert</b>, Hasan, University of Dodoma, Tanzania
                            </li>
                            <li>
                                <b>Mula</b>, Kagga, Makerere University , Uganda
                            </li>
                            <li>
                                <b>Hill</b>, Jennifer, University of Pretoria, South Africa
                            </li>
                            <li>
                                <b>Jeffrey</b>, Khumalo, University Cape town, South Africa
                            </li>
                            <li>
                                <b>Jong</b>, Abe de, UNISA, South Africa
                            </li>
                            <li>
                                <b>Patricia</b>, Babalolba, Covenant, Nigeria
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="text-gradient text-danger mb-0 mt-2">
                            Contact US
                        </h2>

                        <p style="color:black" class="text-sm">
                            <b>Editorial</b>
                            <br>
                            Franchesca J. Charney <br>
                            Phone: <a href="tel:011 312 54334">011 312 54334</a> <br>
                            Email: <a href="mailito:fcharney@arimas.org">fcharney@arimas.org</a>
                        </p>

                        <p style="color:black" class="text-sm">
                            <b>Publications</b>
                            <br>
                            Richard Reicherter <br>
                            Phone: <a href="tel:011 312 54334">011 312 54334</a> <br>
                            Email: <a href="mailito:richard@arimas.org">richard@arimas.org</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="journalLogin" tabindex="-1" aria-labelledby="journalLoginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOGIN OR REGISTER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col-lg-6">
                            <h6 style="color:black">
                                Register
                            </h6>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Author
                            </button>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Subscriber
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <h6 style="color:black">
                                Login
                            </h6>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Admin Journal
                            </button>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Author
                            </button>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Subscriber
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
@endsection
