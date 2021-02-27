@extends('main')
@section('title', 'Videos')
@section('header')
<header style="background-color: #c3073f" class="py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-dark mt-5 mb-2">The Rhys & James Show Video Gallery</h1>
                <p class="lead mb-5 text-dark"><strong>Here you can watch exclusive content as well as a behind the scenes look into the creation of our videos.</strong></p>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="container-fluid pb-video-container">
    <div class="col-md-10 offset-md-1">
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/K68UrdUOr2Y?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Claydee - Alena</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/wjT2JVlUFY4?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Manuel Riva - Mhm Mhm</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/papuvlVeZg8?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Clean Bandit - Rockabye</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Y1_VsyLAGuk?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Burak Yeter - Tuesday</label>
            </div>
        </div>
        <div class="pt-4"></div>
        <div class="row pb-row mb-4">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/UY1bt8ilps4?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">F.O. and Peeva - Lichnata</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/QpbQ4I3Eidg?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Machine Gun - Bad Things</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/h3kRIxLruDs?ecver=" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">INNA - Say it with your body</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Jr4TMIU9oQ4?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">INNA - Gimme Gimme</label>
            </div>
        </div>
    </div>
</div>
@endsection
