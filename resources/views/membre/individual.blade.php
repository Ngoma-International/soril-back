@extends('layouts.appss')

@section('title')
    Membres
@endsection

@section('content')

    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto my-auto">
                        <h1 class="text-white">Individual MemberShip</h1>
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
                            <a href="{{route('conference', $annual->id)}}" style="margin:0px!important;
                            background-color: #6092fe;
                            color:white!important;" target="_blank"
                               class="btn btn-outline-white mt-5 up btn-round">View More ...</a>
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
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="text-gradient text-danger mb-0 mt-2">
                        Who Are Our Individual Members?
                    </h2>
                    <p style="color: black">
                        ARiMaS’ individual membership is restricted to risk individuals who hold key executive positions within their firms, organisations or institutions. They lead the risk agenda in organisations.
                        <br><br>
                        Risk leaders are typically senior management, Heads of Risk areas, C-level executives, Chief Risk Officers, board members, senior risk consultants as well as representatives of risk management associations and institutes.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <a href="javascript:;">
                                <h5 class="mt-3">
                                    Membership Fees
                                </h5>
                            </a>
                            <p>
                                The annual membership fee is <b>USD 250.</b>
                                <br><br>
                                This fee is payable upon application. We cannot begin to process your application until this has been received.
                            </p>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-0">Register</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="horizontal dark my-5">

            <div class="row text-center py-3 mt-3">
                <div class="col-md-12 mx-auto">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" style="color:black"
                                   data-bs-toggle="tab" href="#whybecome" role="tab" aria-controls="profile" aria-selected="true">
                                    Why Become a Member?
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" style="color:black" data-bs-toggle="tab" href="#manageyour" role="tab" aria-controls="dashboard" aria-selected="false">
                                    Manage Your Membership
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" style="color:black" data-bs-toggle="tab" href="#reduced" role="tab" aria-controls="dashboard" aria-selected="false">
                                    Reduced Fees
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div id="whybecome" class="tab-pane active">
                            <h3 style="color:black">Why Become a Member?</h3>
                            <p>
                                Being an ARiMaS member does not just open the door to exciting opportunities in your career and personal development. It also gives you access to a first-class range of services designed to support you in your professional life.
                            </p>

                            <br>

                            <div class="col-12 mx-auto">
                                <button type="button"
                                        class="btn btn-outline-dark mb-0"
                                        data-container="body"
                                        data-bs-toggle="popover"
                                        data-bs-placement="top"
                                        data-bs-title="ARIMAS keeps you at the leading-edge of the profession with a range of benefits and services which include.">
                                    Member benefits and services
                                </button>

                                <button type="button"
                                        class="btn btn-outline-dark mb-0"
                                        data-container="body"
                                        data-bs-toggle="popover"
                                        data-bs-placement="top"
                                        data-bs-title="ARIMAS keeps you at the
                                    leading-edge of the profession with a
                                    range of benefits and services which include.
                                    "
                                >
                                    The ARIMAS designation - the choice among employers
                                </button>
                            </div>
                        </div>
                        <div id="manageyour" class="tab-pane fade">
                            <h3 style="color:black">Manage Your Membership</h3>
                            <p>
                                In return for all the member benefits we provide, we charge an annual subscription. This also helps to support our objective of promoting our members on the continental stage. Your annual subscription is payable on 1 January each year and we’ll send you a notification the November before.
                                <br>
                                If you’re a new member, welcome. You’ll start paying your annual membership subscription from 1 January following your admission. You’ll also pay a one-off admission fee.
                                <br>
                                The simplest and quickest way to pay your subscription is online, via myARiMaS, although there are other options available.
                                <br>
                                Please remember to pay your fees on time to continue your membership.
                            </p>

                            <div class="col-12 mx-auto">
                                <button type="button"
                                        class="btn btn-outline-dark mb-0"
                                        data-container="body"
                                        data-bs-toggle="popover"
                                        data-bs-placement="top"
                                        data-bs-title="ARIMAS keeps you at the leading-edge of the profession with a range of benefits and services which include.">
                                    Member benefits and services
                                </button>

                                <button type="button"
                                        class="btn btn-outline-dark mb-0"
                                        data-container="body"
                                        data-bs-toggle="popover"
                                        data-bs-placement="top"
                                        data-bs-title="ARIMAS keeps you at the
                                    leading-edge of the profession with a
                                    range of benefits and services which include.
                                    "
                                >
                                    The ARIMAS designation - the choice among employers
                                </button>
                            </div>
                        </div>
                        <div id="reduced" class="tab-pane fade">
                            <h3 style="color:black">Reduced Fees</h3>
                            <p>
                                Need a little help? ARiMaS offers two categories of reduced Fees:
                            </p>

                            <div class="col-12 mx-auto">
                                <button type="button"
                                        class="btn btn-outline-dark mb-0"
                                        data-container="body"
                                        data-bs-toggle="popover"
                                        data-bs-placement="top"
                                        data-bs-title="ARIMAS keeps you at the leading-edge of the profession with a range of benefits and services which include.">
                                    Member benefits and services
                                </button>

                                <button type="button"
                                        class="btn btn-outline-dark mb-0"
                                        data-container="body"
                                        data-bs-toggle="popover"
                                        data-bs-placement="top"
                                        data-bs-title="ARIMAS keeps you at the
                                    leading-edge of the profession with a
                                    range of benefits and services which include.
                                    "
                                >
                                    The ARIMAS designation - the choice among employers
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->

@endsection
