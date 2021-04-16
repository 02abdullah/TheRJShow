@extends('main')
@section('title', 'Videos')
@section('header')
    <header style="background-color: #c3073f" class="py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-dark mt-5 mb-2">The Rhys & James Show Video Gallery</h1>
                    <p class="lead mb-5 text-dark"><strong>Here you can watch exclusive content as well as a behind the
                            scenes look into the creation of our videos.</strong></p>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container-fluid pb-video-container">
        <div class="col-lg-12" style="padding-bottom: 15px">
            <div class="row pb-row" style="padding-bottom: 10px">
                <div class="col-lg-4 pb-video">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/eebReE06naM" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <label class="form-control label-warning text-xs-center">Placeholder Video 1</label>
                </div>
                <div class="col-lg-4 pb-video">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/k1GzReR2H28" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <label class="form-control label-warning text-xs-center">Placeholder Video 2</label>
                </div>
                <div class="col-lg-4 pb-video">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/wThrUc3H8LQ" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <label class="form-control label-warning text-xs-center">Placeholder Video 3</label>
                </div>
            </div>
        </div>
    </div>
@endsection

