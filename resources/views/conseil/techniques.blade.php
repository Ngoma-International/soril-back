@extends('layouts.appss')

@section('title')
    Conseils Techniques
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto my-auto">
                        <img src="{{asset('assets/img/logos/carl-logo.png')}}" width="75%;" style="margin: 0px" alt="">
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
                <div class="col-lg-3">
                    <h2 class="text-gradient text-danger mb-0 mt-2">Key Features</h2>
                    <p style="color: black">
                        Course Name: <b>Certified African Risk Leader</b> <br>
                        Reference: <b>CARL</b> <br>
                        Duration: <b>0 Year(s)</b> <br>
                        Starting Date: <b>Facultative</b> <br>
                        Fees: <b>$ 15000</b> <br>
                        Members: <br>
                        Non-Members: <br>
                    </p>

                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-2">Enroll Now</button>
                    <br>
                    <a href="{{route('moreinfo')}}" class="btn bg-gradient-info w-auto me-1 mb-2">
                        More Information
                    </a>
                </div>

                <div class="col-lg-6">
                    <h2 class="text-gradient text-danger mb-0 mt-2">Description</h2>
                    <p style="color:black">
                        Socio-economic factors, geopolitical tensions, digitisation, new technological advances, large scale natural disasters and climate change are delivering an era of greater uncertainty and volatility for organisations at a time when opportunities are expanding and becoming more globally integrated and complex.
                        <br>
                        These new risk trends are emerging simultaneously and require executives and board members to develop risk leadership capabilities beyond the any existing risk management function. This is because leaders in organisations can powerfully influence culture and policies. They can inspire, energise, and, well, lead on how to respond to risk. Through their actions and decisions, they can ensure that risk thinking is part of decision making
                        <br><br>
                        The Certified African Risk Leader course (CARL) is designed to equip participants with the knowledge and skillset required to become risk leaders in their companies and organisations. The course is will immerse you in dynamic case studies, tail-risk stress tests, scenario planning, and wargaming exercises, as you explore how to make informed risk management decisions for current and emerging risks, and to critically appraise real life case studies from different sectors and countries.
                    </p>
                </div>

                <div class="col-lg-3">
                    <img src="assets/img/logos/carl-badge.svg" alt="" style="width: 100%">

                    <h6 style="color:black">Who is it for?</h6>

                    <ul class="text-sm" style="color:black">
                        <li>Senior business leaders in large established companies who have significant corporate management responsibilities, including:</li>

                        <li>Chief risk officers and other leaders in risk management roles</li>

                        <li>Chief financial officers</li>

                        <li>Board members</li>

                        <li>General managers, including CEOs, COOs, and division heads</li>

                        <li>Senior leaders responsible for executing and controlling strategy</li>

                        <li>Public relations executives</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Receive Your Certification in 5 Steps!</h5>

                    <div>
                        <ul class="list-group">
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>1</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Read program description and eligibility criteria to view important information that will help you be a successful candidate
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>2</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Submit your application online with all required documentation
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>3</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Successful applicants will receive username and password to their online learning portal where they can download study materials and practice questions
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>4</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Choose an examination date, prepare for it and take the 2.5-hour online examination consisting of 125 multiple choice questions.
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>5</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Upon passing, successful candidates will receive their certification card and acknowledged as a CARM holder!
                                        </small></p>
                                </div>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <h5>Key Attributes</h5>

                    <div>
                        <ul class="list-group">
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="" alt="quixote">
                                </div>
                                <div class="flex-column">
                                    Relevant
                                    <p><small>
                                            CARM is created by risk professionals in Africa for the risks relevant to this region. We use Asia Pacific case studies and the syllabus is crafted based on what risk managers in the region are most concerned with.
                                        </small></p>
                                </div>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="" alt="quixote">
                                </div>
                                <div class="flex-column">
                                    Holistic
                                    <p><small>
                                            The syllabus comprises a holistic range of risk management activities that goes beyond ERM. It also touches on risk financing and risk treatment. We believe that the syllabus encompasses what the risk managers of today need to be equipped with.
                                        </small></p>
                                </div>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="" alt="quixote">
                                </div>
                                <div class="flex-column">
                                    Supportive
                                    <p><small>
                                            CARM comes with online training courses for each of the 5 modules, should the candidate wish to practice. We ensure that you will be equipped with the tools and training needed to successfully complete the CARM.
                                        </small></p>
                                </div>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div>
                        <h5>Non-ARiMaS Members</h5>

                        <div class="card" style="padding: 10px">
                            <p>
                                Enroling for the CARM means you join ARiMaS as a member and become part of our African risk management Community. The additional fee you pay on top of your application fee goes toward the payment of your membership.
                            </p>
                        </div>
                    </div>

                    <br>

                    <div>
                        <h2 class="text-gradient text-danger mb-0 mt-2">Contact US</h2>
                        <p style="color:black">
                            <b>Editorial</b> <br> <br>
                            Dwayne J. Williams <br>
                            Phone: 011 312 54334 <br>
                            Email: fcharney@arimas.org <br>
                            <br>
                            <b>Publications</b> <br><br>
                            Don Richards <br>
                            Phone: 011 312 54334 <br>
                            Email: richard@arimas.org
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
