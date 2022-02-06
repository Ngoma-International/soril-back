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
                        <h1 class="text-white">Author Register</h1>
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

    @if($author == null)
        <section class="py-2">
            <div class="container">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                <form action="{{route('author.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="firstName" class="col-4 col-form-label">First Name</label>
                        <div class="col-8">
                            <input id="firstName" name="firstName" placeholder="Enter your first name" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastName" class="col-4 col-form-label">Last Name</label>
                        <div class="col-8">
                            <input id="lastName" name="lastName" placeholder="Enter your last name" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middleName" class="col-4 col-form-label">Middle Name</label>
                        <div class="col-8">
                            <input id="middleName" name="middleName" placeholder="Enter your middle name" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" placeholder="Enter your mail adress" type="email" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">Password</label>
                        <div class="col-8">
                            <input id="password" name="password" placeholder="Your Password" type="password" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-4 col-form-label">Country</label>
                        <div class="col-8">
                            <select class="form-select form-control form-control-lg"
                                    name="country" id="country"
                                    data-search="on">
                                @forelse(\App\Models\Country::all() as $country)
                                    <option value="{{$country->code}}">{{$country->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-4 col-form-label">City</label>
                        <div class="col-8">
                            <input id="city" name="city" placeholder="Entre your city of residence" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-4 col-form-label">Date</label>
                        <div class="col-8">
                            <input id="date" name="date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="state" class="col-4 col-form-label">State</label>
                        <div class="col-8">
                            <input id="state" name="state" placeholder="Entrer your state of residence" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="companyName" class="col-4 col-form-label">Company Name</label>
                        <div class="col-8">
                            <input id="companyName" name="companyName" placeholder="Enter a Name of your company" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-4 col-form-label">Department</label>
                        <div class="col-8">
                            <input id="department" name="department" placeholder="Your Department in company" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-4 col-form-label">Position</label>
                        <div class="col-8">
                            <input id="position" name="position" placeholder="Your Position" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-4 col-form-label">Profile Image</label>
                        <div class="col-8">
                            <input id="image" name="image" type="file" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    @else
        <section class="py-2">
            <div class="container">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                <form action="{{route('author.update', $author->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-group row">
                        <label for="firstName" class="col-4 col-form-label">First Name</label>
                        <div class="col-8">
                            <input id="firstName" name="firstName"
                                   placeholder="Enter your first name"
                                   type="text" class="form-control"
                                   value="{{$author->firstName}}"
                                   required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastName" class="col-4 col-form-label">Last Name</label>
                        <div class="col-8">
                            <input id="lastName" name="lastName" value="{{$author->lastName}}" placeholder="Enter your last name" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middleName" class="col-4 col-form-label">Middle Name</label>
                        <div class="col-8">
                            <input id="middleName" name="middleName" value="{{$author->middleName}}" placeholder="Enter your middle name" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" value="{{$author->email}}" placeholder="Enter your mail adress" type="email" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">New Password (if you change)</label>
                        <div class="col-8">
                            <input id="new_password" name="new_password"
                                   value="{{$author->password}}"
                                   placeholder="Your Password"
                                   type="password" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-4 col-form-label">Country</label>
                        <div class="col-8">
                            <select class="form-select form-control form-control-lg"
                                    name="country" id="country"
                                    data-search="on">
                                @forelse(\App\Models\Country::all() as $country)
                                    @if($author->country == $country->code)
                                        <option selected value="{{$country->code}}">{{$country->name}}</option>
                                    @else
                                        <option value="{{$country->code}}">{{$country->name}}</option>
                                    @endif
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-4 col-form-label">City</label>
                        <div class="col-8">
                            <input id="city" value="{{$author->city}}" name="city" placeholder="Entre your city of residence" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-4 col-form-label">Date</label>
                        <div class="col-8">
                            <input id="date" value="{{$author->date}}" name="date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="state" class="col-4 col-form-label">State</label>
                        <div class="col-8">
                            <input id="state" name="state" value="{{$author->state}}" placeholder="Entrer your state of residence" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="companyName" class="col-4 col-form-label">Company Name</label>
                        <div class="col-8">
                            <input id="companyName" value="{{$author->companyName}}" name="companyName" placeholder="Enter a Name of your company" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-4 col-form-label">Department</label>
                        <div class="col-8">
                            <input id="department" value="{{$author->department}}" name="department" placeholder="Your Department in company" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-4 col-form-label">Position</label>
                        <div class="col-8">
                            <input id="position" value="{{$author->position}}" name="position" placeholder="Your Position" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-4 col-form-label">Profile Image</label>
                        <div class="col-8">
                            <input id="image" name="image" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">Ancien Mot de passe</label>
                        <div class="col-8">
                            <input id="password" name="password" placeholder="Your Password" type="password" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    @endif
@endsection
