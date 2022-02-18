@extends('layouts.appss')

@section('title')
    Soril - Home
@endsection

@section('content')
    <header class="header-2">
        <div class="page-header min-vh-100"
             style="background-image: url('{{asset('assets/img/bg.jpg')}}');
                 background-color: rgba(0,0,0,0.5);">
            <div style="background-color: black; opacity: 0.7;
            height: 100%; width: 100%; position: absolute"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <p class="lead mt-0" style="color: white; font-size: 125%">
                            <img src="{{asset('./assets/img/logos/soril.png')}}"
                                 class="w-50 border-radius-xl position-relative z-index-5" alt=""> <br>
{{--                            Making African Organisations and Institutions <br>--}}
{{--                            More Effective and resilient through risk leadership.--}}
                            <br>
                            <a style="color:white" href="#learnMore">
                                Learn more about Risk Leadership
                                <br>
                                in the President's Coner
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="text-center"
                             style="border-radius: 0%; width: 80%; margin: auto;
                             border-top: 6px solid #6092fe;
                             color: #FFFFFF;
                             background: rgba(18, 19, 49, 0.62); padding: 10px; margin-top: 5px">
                            <h4 style="color: white; text-transform: capitalize">{{$annual->titre}}</h4>

                            <p>
                                <i>{{$annual->description}}</i>
                            </p>

                            <p>
                                {{$annual->lieu}} | {{$annual->ville}}
                            </p>

                            <p>
                                {{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }}
                                -
                                Durée : {{$annual->duree}} day(s)
                            </p>
                            <a href="{{route('conference', $annual->id)}}" style="margin:0px!important;
                            background-color: #6092fe;
                            color:white!important;" target="_blank"
                               class="btn btn-outline-white mt-5 up btn-round">View More ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="pt-6 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                    <div class="row">
                        <div class="col-md-6 position-relative">
                            <div class="col-lg-12 ms-auto mt-lg-0 mt-2">
                                <div class="card shadow-lg">
                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                        <div class="d-block blur-shadow-image">
                                            <img src="{{asset('assets/img/logos/carl-logo.png')}}"
                                                 style="width: 100%;"
                                                 alt="img-blur-shadow" class="">
                                        </div>
                                        <div class="colored-shadow" style="background-image: url(&quot;assets/img/logo_illustration.jpg&quot;);"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="vertical dark">
                            <div class="card-body">
                                <p class="text-sm mb-0" style="color: black">
                                    The Certified African Risk Leader course (CARL)
                                    is designed to equip participants with the knowledge
                                    and skillset required to become risk leaders in their organisations.
                                    The course is will immerse you in dynamic case studies,
                                    tail-risk stress tests, scenario planning, and wargaming exercises,
                                    as you explore how to make informed risk management decisions.
                                </p>

                                <br>

                                <a href="{{route('certification')}}">
                                    <span class="badge bg-gradient-info">EXPLORE</span></a>
                            </div>
                        </div>

                        <div class="col-md-6 position-relative">
                            <div class="col-lg-12 ms-auto mt-lg-0 mt-2">
                                <div class="card shadow-lg">
                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                        <div class="d-block blur-shadow-image">
                                            <img src="{{asset('assets/img/journal.png')}}"
                                                 style="width: 100%;"
                                                 alt="img-blur-shadow" class="">
                                        </div>
                                        <div class="colored-shadow" style="background-image: url(&quot;assets/img/logo_illustration.jpg&quot;);"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="vertical dark">
                            <div class="card-body">
                                <p class="text-sm mb-0" style="color: black">
                                    The African Journal of Risk Management (AJRM) is published quarterly online only on behalf of on behalf of the African Risk Management Society.
                                    <br>
                                    The mission of the ARJM is to create, stimulate and perpetuate a culture of information sharing and publishing amongst researchers and practitioners of risk management in African in ways that will contribute.
                                </p>

                                <br>

                                <a href="{{route('journal.index')}}"><span class="badge bg-gradient-info">EXPLORE</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="learnMore">

    </div>

    <br>

    <hr>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6" style="border-right: 1px solid #333;">
                <section class="my-0 py-0">
                    <div class="container">
                        <div class="row">
                            <div class="row justify-content-center text-center my-sm-1">
                                <div class="col-lg-6">
                                    <h2 class="text-dark mb-0">Upcoming Events</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-sm-1 mt-1">
                        <div class="row">
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

                                <br>
                                <div class="text-center">
                                    <a href="{{route('evenementss')}}">
                                        <button type="button"
                                                class="btn bg-gradient-info w-auto me-1 mb-0">View More ...</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="py-sm-1 py-3 position-relative">

                    <div class="row">
                        <div class="row justify-content-center text-center my-sm-0">
                            <div class="col-lg-6">
                                <h2 class="text-dark mb-0">The President's Corner</h2>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12 mx-auto">
                                <div class="row py-lg-3 py-6">
                                    <div class="col-lg-4 col-md-5">
                                        <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2"
                                             src="{{asset('assets/img/mimile.png')}}" alt="bruce">
                                    </div>
                                    <div class="col-lg-6 col-md-7 position-relative my-auto">
                                        <p class="text-lg mb-0" style="color: black">
                                            <a
                                               style="border-color: transparent;
                                                    background-color: transparent">
                                                <b>Mimile Mukuna Maisha</b>
                                            </a>
                                            <br>
                                            President
                                            <br>
                                            <a type="button"
                                               data-bs-toggle="modal" data-bs-target="#biographieModal"
                                               style="border-color: transparent;
                                                    background-color: transparent">
                                                <em>Biography</em>
                                            </a>
                                        </p>
                                        <div class="modal fade" id="biographieModal" tabindex="-1" aria-labelledby="biographieModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">MIMILE MUKUNA Maisha</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Mimile is an expert in International Business Law and International Business Risk Management.
                                                        Since 2013, he has been CEO of First Continental Legal and Risk Consulting where he advises on
                                                        International Business Law, International Business Risk Management and on international financing
                                                        transactions.
                                                        His expertise has been sought by transnational companies, governments and professional bodies.
                                                        He previously spent 20 years in the insurance/risk finance industry where he occupied executive
                                                        positions in various companies in different African countries.
                                                        He is a regular speaker at conferences and seminars on International Business Risk Management
                                                        and international investment/trade law topics and has made it his mission to promote the principle
                                                        and practice of risk leadership in the business world. he is the author of the book titled "Why
                                                        Risk so Much For so Little published in 2011.
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <hr style="color:white">
                                        @forelse (\App\Models\MessagePresident::all() as $item)
                                            <div class="">
                                                <p class="text-lg mb-0" style="color: black">
                                                    {{$item->titreMessage}}
                                                    <br>
                                                    <em>{{ Carbon\Carbon::parse($item->date)->format('F, d Y') }}</em>
                                                    <br>
                                                    <a href="javascript:;" class="text-info icon-move-right"
                                                       data-bs-toggle="modal" data-bs-target="#messageModal-{{$item->id}}">Read Full Message
                                                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- Modal 2 -->
                                            <div class="modal fade" id="messageModal-{{$item->id}}" tabindex="-1"
                                                 aria-labelledby="messageModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{$item->titreMessage}}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div>
                                                                <h6 class="mb-0">{{$item->introduction}}</h6>
                                                            </div>
                                                            <em>{{ Carbon\Carbon::parse($item->date)->format('F, d Y') }}</em>
                                                            <br>
                                                            <br>

                                                            <p class="text-sm mb-0">
                                                                {{$item->message}}
                                                            </p>

                                                            <p>
                                                                {{$item->about}}
                                                            </p>

                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection


{{--<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">Message of the President</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div>--}}
{{--                    <h6 class="mb-0">The Significance of Risk Leadership in--}}
{{--                        Helping People Deal with Uncertainty.</h6>--}}
{{--                </div>--}}
{{--                <em>11-04-2020</em>--}}
{{--                <br>--}}
{{--                <br>--}}

{{--                <p class="text-sm mb-0">--}}
{{--                    In his play, An Enemy of the People, written in 1882,--}}
{{--                    Henrik Ibsen shows that being truthful to people about a--}}
{{--                    problem was essential even when this is unpopular.--}}
{{--                    The crucial issue in the play emerges when Doctor Thomas Stockmann,--}}
{{--                    a medical officer charged with inspecting the public baths on which--}}
{{--                    the prosperity of his native town depends, receives a laboratory report--}}
{{--                    confirming his suspicions that the water supply for the public baths is--}}
{{--                    contaminated by the local tannery. Jubilant that he has detected the contamination--}}
{{--                    in time to prevent a disastrous epidemic, he is however unable to get his message--}}
{{--                    across through the press. He then calls a public meeting where he intends to expose--}}
{{--                    the fact that the whole town’s prosperity is rooted in a lie and to prove to people--}}
{{--                    that he has an unpopular but necessary duty and shut down the baths. His opponents--}}
{{--                    take charge of the meeting, however, and rule all discussion of the baths out of order--}}
{{--                    and declare him "an enemy of the people".--}}
{{--                    <br>--}}
{{--                    <br>--}}

{{--                    Today, just as in An Enemy of the People, some leaders claim that the Corona Virus pandemic is overblown especially if the required restrictions affect their popularity and some people decry such restrictions on their “freedom”. But not telling people the truth about a bad situation the may face is simple, while telling people things they would not want to hear is difficult, and, as a result, a test of risk leadership. Indeed, Risk Leadership is not about taking actions that are popular in uncertain times, but as I have defined it, it is the ability of a leader to take risks or to deal with uncertainty in a manner that is good for everyone involved in and affected by the leader’s actions. We can better understand the essence of risk leadership if we situate, for instance, the uncertainty that the coronavirus poses within the Tame-Wicked-Critical problems framework.--}}

{{--                    <br>--}}
{{--                    <br>--}}
{{--                    Tame problems are complicated, known (likely to have occurred before) problems with known solutions that are within the purview of experts. They are to a large extent characterise by certainty and thus are associated with Management. To solve the problem, the management’s role, therefore, is to provide the appropriate processes – or standard operating procedure (SOP). Covid-19 testing can be put in this category—we know how to do it, provided the means and knowhow are available.--}}

{{--                    <br>--}}
{{--                    <br>--}}
{{--                    Wicked Problems are complex beyond being complicated. They do not have right or wrong solutions, but good or bad developments and, therefore, have no definition of success. Put differently, there is a great degree of uncertainty in Wicked Problems, both in terms of their causes and effects besides, as I have just said, in terms of the solutions they required. If we knew what their exact causes and effects were and how to fix them, they would be Tame Problems, not Wicked Problems. Leadership is often mistakenly associated with the exact opposite - the ability to solve problems, to act decisively, and to know what to do. This, actually, is what management is about. Managers deal with certainty. They embrace the process, seek stability and control, and instinctively try to solve problems quickly, sometimes before they fully understand the importance of a problem. Leaders, on the other hand, deal with uncertainty. They embrace chaos and lack of structure and are willing to delay closure in order to better understand the issues. In this way, true leaders have much more in common with artists and other creative thinkers. Taking one''s good management skills for leadership creates pressure to act decisively and therefore often leads to trying (and failing) to solve Wicked Problems as if they were Tame Problems. For Instance, when Global Warming first emerged as a problem, some of the responses focused on solving the problem through science (a Tame response), manifested in the development of biofuels; but we now know that biofuels seem to rob the world of important food resources, so what looked like a solution has become another problem. Again, this is typical of what happens when we try to solve Wicked Problems; other problems arise to make the original problem worse.--}}

{{--                    <br>--}}
{{--                    <br>--}}
{{--                    Additionally, Wicked Problems are usually intractable so that we must learn to endure them, often in a divided fashion on the basis of conflicting convictions. What I am suggesting is that, since Wicked Problems are partly characterised by the absence of a solution, the leader’s responsibility is therefore to ask the right questions rather than to provide the right answers because the answers may not be compelling and will require a collaborative process to mitigate the impact of the problem. The leader then must engage the collective in solving the problem and to rally the community to help itself whenever possible and to cope with the new reality. This is, today, similar to the call for social distancing, quarantine and mutual assistance.--}}

{{--                    <br>--}}

{{--                    Critical problems are crises, that is, risks that have materialised. They require urgent action. The individual having authority acts as the Commander and dictates the response to the situation. Here, there is no uncertainty as to what needs to be done although there may be some uncertainty (which does not immediately matter) as to the cause of the problem. There is no need nor time to initiate processes (Management) or ask questions (Leadership). The success of a commander’s action depends solely on his leadership skills and qualities. But, all kinds of problems arise when the Commander sees himself as a god who thinks they can do as they wish with people. Evidently, the Commander may in private remain uncertain as to whether their action is appropriate or whether the reframing of the problem as a crisis is convincing, but this uncertainty is unlikely to be evident to people. Ordering the closure of schools, businesses, restaurants and places of worship for the foreseeable future would be an example of tackling a critical problem.--}}

{{--                    <br>--}}
{{--                    <br>--}}
{{--                    It often happens that the same person in position of authority switches between management, leadership and command approaches according to how they perceive or establish the problem as Tame, Wicked or Critical, or as a problem moves across these confines. The perception or establishment of a problem may lead to a dangerous mismatch between the approach and the problem. Indeed, if we approach the problem from the wrong angle, then we risk making it worse. Therefore, indecision on what to do and the search for collective ideas when uncertainty has materialised such as the pandemic we are going through right now, is exercising Leadership when command is required. Equally, requiring for example businesses to shut down without considering or caring about the wider impact on the community as people are losing their income, is to confuse the importance of leadership with suitability of command. But unless one takes expert advice on what to do, one can be decisively wrong, and ignoring experts in order to promote self-interest or the interest of a minority group, is just as likely to lead to chaos.--}}

{{--                    <br>--}}
{{--                    <br>--}}
{{--                    That Risk Leadership is similar to any other form of leadership but just applied to the risk or uncertainty explains both its importance and paradox. It is the most vital approach vital in today''s world which made of complex and interconnected uncertainties, yet, it remains one of the three approaches which most individual in position of authority will try to stay away from because it entails that: (1) they do not have the answer to the problem, (2) their mission is to have people assume their responsibilities and adapt to the reality of the problem, ( 3) that it will require a long time to build the “answer” to the problem and that this answer will only lessen the effects of the problem, not solve it, and (4) that it will require constant efforts to maintain the answer, although its greatest advantage is that it will allow people to collectively adapt to the problem or to live with it. It requires the risk leader to have the ability to inspire people to give up some their privileges and to be compassionate with one another. Obviously, it is much easier to opt for either a management approach - engaging a proven and reliable process - or a command approach - imposing the response on people. This and because of the realities of the world we live in today explains the need to equip the leaders in our organisations and institutions with Risk Leadership capabilities.--}}
{{--                </p>--}}

{{--            </div>--}}
{{--            <div class="modal-footer justify-content-between">--}}
{{--                <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>--}}
{{--            </div>--}}
{{--        </div>--}}
