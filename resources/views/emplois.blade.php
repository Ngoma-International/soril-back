@extends('layouts.appss')

@section('title')
    Offres d'emploi
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Job Offers</h1>
                        <h6 class="text-white">
                            SORIL membership is restricted to risk professionals involved in

                            Risk Management for their organisation in Countries

                            where there is not a Risk Management Association
                        </h6>
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
                <div class="col-lg-12 text-center">
                    <h4 class="text-gradient text-dark mb-0 mt-2">
                        Consult here the job or internship offers posted on our site *!
                    </h4>
                    <br>
                    <p style="color: black">
                        This space is free and is not controlled by ARIMAS. ARIMAS declines
                        all responsibility <br> for the accuracy of the information and data and the
                        use that is made of it.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="card text-center">
                    <div class="form-group">
                        <script>
                            function myFunction(value){
                                var url = 'http://localhost/soril-back/public/offresEmploi';
                                if (url.indexOf('?') > -1){
                                    url = urls + '?pays' +value
                                }else{
                                    url += '?pays='+value
                                }
                                window.location.href = url;
                            }
                        </script>
                        <h4 for="exampleFormControlSelect1">Filter Country</h4>
                        <select class="form-control-lg text-center" name="type" onchange="myFunction(this.value)">
                            @if(request()->pays == "all" || request()->pays == "")
                                <option selected value="all">All</option>
                                <option value="CD">Congo Democratic Republic</option>
                                <option value="ZM">Zambia</option>
                                <option value="TZ">Tanzania</option>
                                <option value="UG">Uganda</option>
                                <option value="BI">Burundi</option>
                            @elseif(request()->pays == "CD")
                                <option value="all">All</option>
                                <option selected value="CD">Congo Democratic Republic</option>
                                <option value="ZM">Zambia</option>
                                <option value="TZ">Tanzania</option>
                                <option value="UG">Uganda</option>
                                <option value="BI">Burundi</option>
                            @elseif(request()->pays == "ZM")
                                <option value="all">All</option>
                                <option value="CD">Congo Democratic Republic</option>
                                <option selected value="ZM">Zambia</option>
                                <option value="TZ">Tanzania</option>
                                <option value="UG">Uganda</option>
                                <option value="BI">Burundi</option>
                            @elseif(request()->pays == "TZ")
                                <option value="all">All</option>
                                <option value="CD">Congo Democratic Republic</option>
                                <option value="ZM">Zambia</option>
                                <option selected value="TZ">Tanzania</option>
                                <option value="UG">Uganda</option>
                                <option value="BI">Burundi</option>
                            @elseif(request()->pays == "UG")
                                <option value="all">All</option>
                                <option value="CD">Congo Democratic Republic</option>
                                <option value="ZM">Zambia</option>
                                <option value="TZ">Tanzania</option>
                                <option selected value="UG">Uganda</option>
                                <option value="BI">Burundi</option>
                            @elseif(request()->pays == "BI")
                                <option value="all">All</option>
                                <option value="CD">Congo Democratic Republic</option>
                                <option value="ZM">Zambia</option>
                                <option value="TZ">Tanzania</option>
                                <option value="UG">Uganda</option>
                                <option selected value="BI">Burundi</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px">
                @forelse ($emplois as $emploi)
                    @if(request()->pays == "all" || request()->pays == "")
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body pt-2 text-center">
                                    <a href="javascript:;" class="card-title h5 d-block text-darker">
                                        {{$emploi->titre}}
                                    </a>
                                    <p class="card-description mb-4">
                                        <i class="fa fa-calendar me-1"></i> Expiration : {{$emploi->expiration}}
                                        <br>
                                        <i class="fa fa-map-marker me-1"></i> {{$emploi->ville}}
                                    </p>

                                    <button type="button" class="btn bg-gradient-dark w-auto me-1 mb-0"
                                            data-bs-toggle="modal" data-bs-target="#job-{{$emploi->id}}"
                                    >View
                                    </button>

                                    <button type="button" class="btn bg-gradient-dark w-auto me-1 mb-0"
                                            data-bs-toggle="modal" data-bs-target="#job-apply-{{$emploi->id}}"
                                    >Apply
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="job-{{$emploi->id}}" tabindex="-1"
                             role="dialog" aria-labelledby="LoginLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLabel">{{$emploi->titre}}</h6>
                                        </div>
                                        <div class="modal-body">
                                            <p class="card-description mb-4">
                                                <i class="fa fa-money-check-alt"></i> Salaire : {{$emploi->salaire}} $
                                                <br>
                                                <i class="fa fa-vector-square"></i> Sector : {{$emploi->secteur}}
                                                <br>
                                                <i class="fa fa-calendar me-1"></i> Expiration : {{$emploi->expiration}}
                                                <br>
                                                <i class="fa fa-map-marker me-1"></i>City : {{$emploi->ville}}
                                                <br>
                                                Compétence : {{$emploi->competence}}
                                                <br>
                                                Qualité : {{$emploi->qualite}}
                                                <br>
                                                Pre-requis : {{$emploi->prerequis}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-info" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="job-apply-{{$emploi->id}}" tabindex="-1"
                             role="dialog" aria-labelledby="LoginLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <br>
                                            <h4>Apply for {{$emploi->titre}}</h4>
                                            <form action="{{route('candidat')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-input">
                                                    <label>
                                                        Firstname <span class="red">*</span></label>
                                                    <input type="text" class="form-control shape" required="" name="FirstName">
                                                </div>
                                                <div class="form-input">
                                                    <label>
                                                        LastName <span class="red"></span></label>
                                                    <input type="text" class="form-control shape" name="MiddleName">
                                                </div>

                                                <div class="form-input">
                                                    <label>
                                                        MiddleName <span class="red">*</span></label>
                                                    <input type="text" class="form-control shape" required="" name="LastName">
                                                </div>


                                                <div class="form-input">
                                                    <label>Email<span class="red">*</span></label>
                                                    <input type="text" class="form-control shape" required="" name="email">
                                                </div>

                                                <div class="form-input">
                                                    <label>
                                                        State *<span class="red">*</span></label>
                                                    <input type="text" class="form-control shape" required="" name="state">
                                                </div>

                                                <div class="form-input">
                                                    <label>
                                                        City <span class="red">*</span></label>
                                                    <input type="text" class="form-control shape" required="" name="city">
                                                </div>

                                                <div class="form-input">
                                                    <label>
                                                        Birthday date <span class="red">*</span></label>
                                                    <input type="date" class="form-control shape" required="" name="date">
                                                </div>
                                                <div class="form-input">
                                                    <label>
                                                        Phone Number <span class="red">*</span></label>
                                                    <input type="tel" class="form-control shape" required="" name="phone">
                                                </div>
                                                <div class="form-input">
                                                    <label>Download your CV here</label>
                                                    <input class="form-control shape" type="file" name="file">
                                                </div>
                                                <div>
                                                    <input type="submit" class="btn btn-md main-bg shape"
                                                           value="APPLY">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-info"
                                                data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        @if(request()->pays == $emploi->pays)
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body pt-2 text-center">
                                        <a href="javascript:;" class="card-title h5 d-block text-darker">
                                            {{$emploi->titre}}
                                        </a>
                                        <p class="card-description mb-4">
                                            <i class="fa fa-calendar me-1"></i> Expiration : {{$emploi->expiration}}
                                            <br>
                                            <i class="fa fa-map-marker me-1"></i> {{$emploi->ville}}
                                        </p>

                                        <button type="button" class="btn bg-gradient-dark w-auto me-1 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#job-{{$emploi->id}}"
                                        >View</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @empty
                    No Jobs
                @endforelse
            </div>

            <br>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
@endsection
