@extends('layouts.appss')

@section('title')
    Articles
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">SUBMIT YOUR ARTICLE</h1>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/  2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
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
            <div class="row" id="overview">
                <div class="col-lg-12">
                    <p style="color: black">
                        The Submission button is at the bottom of this page. <br>
                        We require you to please read the important information outlined below before submiting your article.
                    </p>

                    <ol>
                        <li>
                            <a href="#pub">What do we publish?</a>
                        </li>

                        <li>
                            <a href="#aims">Aims & Scope</a>
                        </li>

                        <li>
                            <a href="#edito">Editorial and Publishing Policies</a>
                        </li>

                        <li><a href="#submission">Submission Checklist</a></li>

                        <li>
                            <a href="#make">Make Your Submission</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <hr class="horizontal dark my-4">

    <section id="pub" class="">
        <div class="container-fluid text-center">
            <h2 style="color:black">WHAT DO WE PUBLISH?</h2>
            <div class="row">
                <div class="col-lg-4">
                    <h4>Editorials</h4>
                    Articles referring to research published elsewhere in that issue of the journal, or to important events in patient safety and the management of risk. Editorials are generally invited.
                </div>

                <div class="col-lg-4">
                    <h4>Personal Views</h4>
                    Articles pertinent to risk management, patient safety and medicolegal issues. Personal Views are generally invited.
                </div>

                <div class="col-lg-4">
                    <h4>Original Articles</h4>
                    Articles regarding the prevention and management of clinical risk. These should be between 2000–3000 words in total. Illustrations and tables must be included in the total words count (approx. 200 words each). Structured headings are required. All original articles submitted to the AJRM must contain an abstract, up to a maximum of 250 words.
                </div>
            </div>
        </div>
    </section>

    <section id="aims" class="my-8">
        <div class="container-fluid text-center">
            <h2 style="color:black">Aims and Focus</h2>
            <div class="row">
                <p class="color:black">
                    A key focus of the Journal is supporting ARiMAs’ purpose which is to “help build strong and resilient companies, economies and societies in Africa.” Accordingly, when submitting your work to the Journal, it would be useful to the broader readership to highlight where possible any issues that is in line with the focus.
                </p>
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
