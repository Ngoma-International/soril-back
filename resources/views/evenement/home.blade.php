@extends('layouts.appss')

@section('title')
    Evenements
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">All Events</h1>
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
                <div class="col-lg-6">
                    <div class="col-lg-12">
                        <div class="row justify-content-center text-center my-sm-1">
                            <h2 class="text-dark mb-0">The Annual Conference</h2>
                        </div>
                        <br>
                        <p style="color: black">
                            The biggest meeting of risk leaders, The Annual Risk Leaders’ Conference, takes place each year in different African capital cities during the first week of October.
                            <br>
                            <br>
                            This conference brings together Arimas individual members and corporate members, representatives of risk management associations, risk management practitioners, researchers, regulators, and policy-makers to share their insights on the main issues that affect risk leadership and management in current African risk landscape and how to advance the practice.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                            <div class="card card-background card-background-mask-dark tilt" data-tilt>
                                <div class="full-background"
                                     style="background-image: url('https://perspectives-cblacp.eu/wp-content/uploads/2020/10/Aerial-view-of-Kigali-Convention-Centre-1-1024x492.jpg')"></div>
                                <div class="card-body pt-0 text-center">
                                    <h1 class="text-white up mb-0">{{$annual->titre}}</h1>

                                    <p style="color: white; font-weight: bold">
                                        {{$annual->lieu}} | {{$annual->ville}}
                                    </p>

                                    <p style="color: white; font-weight: bold">
                                        {{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }}
                                        <br>
                                        Durée : {{$annual->duree}} jour(s)
                                    </p>

                                    <br>

                                    <h4 class="text-white">
                                        {{$annual->description}}
                                    </h4>
                                    <a href="{{route('conference', $annual->id)}}" target="_blank"
                                       class="btn mt-5 up btn-round">View More ...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-center text-center my-sm-1">
                        <h2 class="text-dark mb-0">Upcoming Seminars</h2>
                    </div>
                    <div class="col-lg-12 ms-auto mt-lg-0 mt-0">
                        <br>
                        <p style="color:black">
                            Throughout the year we have a rolling programme of seminars that are held in different cities around the continents.
                            <br><br>
                            These seminars give participants valuable and unique insights into risk management and risk leadership and are and are an opportunity for them to network
                        </p>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">

                            @forelse($events as $event)
                                <div class="col-md-4 mt-md-2">
                                    <a href="{{route('conference', $event->id)}}">
                                        <div class="card card-background card-background-mask-{{$color[$loop->index]}} tilt" data-tilt>
                                            <div class="full-background"
                                                 style="background-image: url('https://perspectives-cblacp.eu/wp-content/uploads/2020/10/Aerial-view-of-Kigali-Convention-Centre-1-1024x492.jpg')"></div>
                                            <div class="card-body pt-3 text-center">
                                                <h4 class="text-white">{{$event->titre}}</h4>

                                                <p style="font-size: 75%; color: white; font-weight: bold">
                                                    <i class="fa fa-calendar me-1"></i> {{ Carbon\Carbon::parse($event->date)->format('F, d Y') }}
                                                </p>

                                                <p style="color: white; font-weight: bold">
                                                    <i class="fa fa-map-marker me-1"></i> {{$event->lieu}} | {{$event->ville}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
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
