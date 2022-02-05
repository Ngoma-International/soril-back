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
                        <h1 class="text-white">AJRL</h1>
                        <h2 class="text-white">JOURNAL</h2>
                        <p>
                            <a href="{{route('author.index')}}">
                                <button type="button" class="btn btn-warning w-auto me-1 mb-0">Register As Author</button>
                            </a>
                            <button type="button" class="btn btn-white w-auto me-1 mb-0">Subscribe AJRL</button>
                            <button type="button" class="btn btn-info w-auto me-1 mb-0">Submit Article</button>
                        </p>
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
                    <h2 class="text-gradient text-danger mb-0 mt-2">
                        ARTICLES DETAILS
                    </h2>
                    <p style="color: black; margin-left: 30.0px">
                        The African Journal of Risk Management (AJRM) is published quarterly online only on behalf of on behalf of the African Risk Management Society.
                        <br><br>
                        The mission of the ARJM is to create, stimulate and perpetuate a culture of information sharing and publishing amongst researchers and practitioners of risk management in African in ways that will contribute to availability of Africa related risk and risk management information, better understanding of Africa risk and risk management particularities and, overall, to the purpose of ARiMaS.

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
            </div>
            <hr class="horizontal dark my-5">

            <div class="container" id="edito">
                <h3>Articles</h3>
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="card" style="padding: 10px">
                            <h4>Titre article</h4>
                            <h6>Auteur</h6>
                            <p>Date</p>

                            <a href="./articleDetail.php">
                                <button type="button" class="btn btn-dark w-auto me-1 mb-0">READ</button>
                            </a>
                        </div>
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
