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
                        <h1 class="text-white">SUBMIT AN ARTICLE</h1>
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
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

            <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-4 col-form-label">Title</label>
                    <div class="col-8">
                        <input id="title" name="title" placeholder="Enter a title of article here" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-4 col-form-label">Subtitle</label>
                    <div class="col-8">
                        <input id="type" name="type" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="note" class="col-4 col-form-label">Description</label>
                    <div class="col-8">
                        <textarea id="note" name="note" cols="40" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-4 col-form-label">File</label>
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
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
@endsection
