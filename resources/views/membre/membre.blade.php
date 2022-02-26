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
                        <h1 class="text-white">Member Associations</h1>
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
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="text-gradient text-danger mb-0 mt-2">
                        Who is Our Associate Member?
                    </h2>
                    <p style="color: black">
                        National risk management associations are at the heart of our community. This is evident in their missions and activities to advance the discipline of risk management, to represent, defend and equip African risk management professionals and in their support for businesses and industries in their countries.
                        <br><br>
                        National associations are any association, legally established, with a minimum of ten members (individual or legal entities), concerned with the defence of the interests of risk managers and risk management solutions or services operating within the national boundary of an African country.
                    </p>
                </div>
                <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                    <h2 class="text-gradient text-danger mb-0 mt-2">
                        Membership Fee
                    </h2>

                    <div class="card">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Members</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Fee / member</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck"></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$25</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">0-50</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$20</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">51-150</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$17.5</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">151-300</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$15</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">301-450</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$12.5</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">451-Above</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">Free</h6>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-lg-12 ms-auto mt-lg-0 mt-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <a href="javascript:;">
                                <h5 class="mt-3">
                                    Payment methods
                                </h5>
                            </a>
                            <p>
                                Once you have sent your application form, you will automatically receive an invoice from SoRil. The invoice is payable by Bank transfer or online debit card.
                                <br>
                                All bank charges for all payments by any method will be borne by the remitter.
                            </p>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-0">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->


    <script>
        // get the element to animate
        var element = document.getElementById('count-stats');
        var elementHeight = element.clientHeight;

        // listen for scroll event and call animate function

        document.addEventListener('scroll', animate);

        // check if element is in view
        function inView() {
            // get window height
            var windowHeight = window.innerHeight;
            // get number of pixels that the document is scrolled
            var scrollY = window.scrollY || window.pageYOffset;
            // get current scroll position (distance from the top of the page to the bottom of the current viewport)
            var scrollPosition = scrollY + windowHeight;
            // get element position (distance from the top of the page to the bottom of the element)
            var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

            // is scroll position greater than element position? (is element in view?)
            if (scrollPosition > elementPosition) {
                return true;
            }

            return false;
        }

        var animateComplete = true;
        // animate element when it is in view
        function animate() {

            // is element in view?
            if (inView()) {
                if (animateComplete) {
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
                    animateComplete = false;
                }
            }
        }

        if (document.getElementById('typed')) {
            var typed = new Typed("#typed", {
                stringsElement: '#typed-strings',
                typeSpeed: 90,
                backSpeed: 90,
                backDelay: 200,
                startDelay: 500,
                loop: true
            });
        }
    </script>
    <script>
        if (document.getElementsByClassName('page-header')) {
            window.addEventListener('scroll', function() {
                var scrollPosition = window.pageYOffset;
                var bgParallax = document.querySelector('.page-header');
                var limit = bgParallax.offsetTop + bgParallax.offsetHeight;
                if (scrollPosition > bgParallax.offsetTop && scrollPosition <= limit) {
                    bgParallax.style.backgroundPositionY = (50 - 10 * scrollPosition / limit * 3) + '%';
                } else {
                    bgParallax.style.backgroundPositionY = '50%';
                }
            });
        }
    </script>
@endsection
