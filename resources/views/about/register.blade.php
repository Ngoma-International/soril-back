@extends('layouts.appss')

@section('title')
    Author Register
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Partenaire Register</h1>
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
                        <div class="alert alert-danger" role="alert">
                            {{session('message')}}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="py-2">
            <div class="container">
                <form action="{{route('send-register')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="prenom">Organisation</label>
                                <input type="text" class="form-control form-control-lg"
                                       name="organisation" required
                                       placeholder="Enter name of Organisation">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Country :</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg"
                                            name="pays" required
                                            data-search="on">
                                        @forelse(\App\Models\Country::all() as $country)
                                            <option value="{{$country->code}}">{{$country->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3>Représentant</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">Full Name</label>
                                <input type="text" class="form-control form-control-lg"
                                       name="nom" required
                                       placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control form-control-lg"
                                       name="email" required
                                       placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg"
                                       name="phone" required
                                       placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">Position</label>
                                <input type="text" class="form-control form-control-lg"
                                       name="position" required
                                       placeholder="Position">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="default-06">Logo of organisation</label>
                                <div class="form-control-wrap">
                                    <div class="custom-file">
                                        <input type="file"
                                               multiple class="custom-file-input"
                                               accept="image/png, image/jpeg"
                                               required
                                               name="file">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-lg btn-secondary" placeholder="Update Profile" >
                        </div>
                    </div>
                </form>
            </div>
        </section>

@endsection
