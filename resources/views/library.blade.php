@extends('layouts.appss')

@section('title')
    Columna - Library
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto my-auto">
                        <h1 class="text-white">Soril Library</h1>
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
                            <a href="{{route('conference', $annual->id)}}"
                               style="margin:20px!important;
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
            <div class="card">
                <header>
                    <div class="page-header min-vh-100">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                 style="background-image:url({{asset($books->first()->bo_picture)}})"></div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                                    <h1 class="text-gradient text-info">FEATURED BOOK</h1>
                                    <h3 class="text-gradient text-dark">{{$books->first()->bo_title}}</h3>
                                    <p class="lead pe-5 me-5">
                                        Price : <b>{{$books->first()->bo_price}}$</b> <br>
                                        Date published : <b>{{$books->first()->bo_pub_date}}</b> <br>
                                        Author : <b>{{$books->first()->bo_author}}</b>
                                    </p>
                                    <div class="buttons">
                                        <a type="button" href="https://www.library.soril.org/public/?link={{asset($books->first()->bo_file)}}"
                                           class="btn bg-gradient-info mt-4" target="_blank" rel="noopener noreferrer">Read More</a>
                                        <br>
                                        <a href="#section-2" class="btn bg-gradient-info mt-4">MORE BOOKS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </section>

    <section class="py-2" id="section-2">
        <div class="container">
            <div class="row text-center py-3 mt-3">
                <div class="col-md-12 mx-auto">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" style="color:black"
                                   data-bs-toggle="tab" href="#risk" role="tab" aria-controls="profile" aria-selected="true">
                                    Risk Management
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" style="color:black" data-bs-toggle="tab" href="#insurance" role="tab" aria-controls="dashboard" aria-selected="false">
                                    Insurance
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" style="color:black" data-bs-toggle="tab"
                                   href="#other" role="tab" aria-controls="dashboard" aria-selected="false">
                                    Other
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content mt-4">
                        <div id="risk" class="tab-pane active">
                            <div class="container">
                                <div class="row">
                                    @forelse ($books as $items)
                                        @if ($items->bo_cat_id == 1)
                                            <div class="col-lg-4">
                                                <div class="card shadow-lg">
                                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                                        <div class="d-block blur-shadow-image">
                                                            <img style="width: 50%; object-fit: cover" src="{{asset($items->bo_picture)}}">
                                                        </div>
                                                        <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);"></div>
                                                    </div>
                                                    <div class="card-body">
                                                        <a href="https://www.library.soril.org/public/?link={{asset($items->first()->bo_file)}}"
                                                           target="_blank" rel="noopener noreferrer">
                                                            <h5 class="mt-3">
                                                                {{$items->bo_title}}
                                                            </h5>
                                                        </a>
                                                        <p>
                                                            <em>{{$items->bo_author}} </em> | {{$items->bo_price}}$
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                    @endforelse
                                </div>

                                <div class="row my-4">
                                    <div class="d-flex">
                                        <ul class="pagination mx-auto">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;" aria-label="Previous">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#1">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#2">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#3">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;" aria-label="Next">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="insurance" class="tab-pane fade">
                            <div class="container">
                                <div class="row">
                                    @forelse ($books as $items)
                                        @if ($items->bo_cat_id == 2)
                                            <div class="col-lg-4">
                                                <div class="card shadow-lg">
                                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                                        <div class="d-block blur-shadow-image">
                                                            <img style="width: 50%; object-fit: cover" src="{{asset($items->bo_picture)}}">
                                                        </div>
                                                        <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);"></div>
                                                    </div>
                                                    <div class="card-body">
                                                        <a href="https://www.library.soril.org/public/?link={{asset($items->first()->bo_file)}}"
                                                           target="_blank" rel="noopener noreferrer">
                                                            <h5 class="mt-3">
                                                                {{$items->bo_title}}
                                                            </h5>
                                                        </a>
                                                        <p>
                                                            <em>{{$items->bo_author}} </em> | {{$items->bo_price}}$
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                    @endforelse
                                </div>

                                <div class="row my-4">
                                    <div class="d-flex">
                                        <ul class="pagination mx-auto">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;" aria-label="Previous">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#1">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#2">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#3">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;" aria-label="Next">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="other" class="tab-pane fade">
                            <div class="container">
                                <div class="row">
                                    @forelse ($books as $items)
                                        @if ($items->bo_cat_id == 3)
                                            <div class="col-lg-4">
                                                <div class="card shadow-lg">
                                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                                        <div class="d-block blur-shadow-image">
                                                            <img style="width: 50%; object-fit: cover" src="{{asset($items->bo_picture)}}">
                                                        </div>
                                                        <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);"></div>
                                                    </div>
                                                    <div class="card-body">
                                                        <a href="https://www.library.soril.org/public/?link={{asset($items->first()->bo_file)}}"
                                                           target="_blank" rel="noopener noreferrer">
                                                            <h5 class="mt-3">
                                                                {{$items->bo_title}}
                                                            </h5>
                                                        </a>
                                                        <p>
                                                            <em>{{$items->bo_author}} </em> | {{$items->bo_price}}$
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                    @endforelse
                                </div>

                                <div class="row my-4">
                                    <div class="d-flex">
                                        <ul class="pagination mx-auto">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;" aria-label="Previous">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#1">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#2">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#3">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;" aria-label="Next">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
