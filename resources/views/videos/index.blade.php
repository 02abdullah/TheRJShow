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

        <div class="row">
            <div class="col-md-10">
                <h1>All Videos</h1>
            </div>
{{--            Only ADMINS can add videos--}}
            @if(Auth::id() == '4')
            <div class="col-md-2">
                <a href="{{ route('videos.create') }}" class="btn btn-lg btn-block btn-primary">Add new video</a>
            </div>
            @endif
            <div class="col-md-12">
                <hr>
            </div>
        </div>
    {{--    If no videos, then display message, else display videos--}}
    @if($videos->count() == 0)
        <div class="container-fluid pb-video-container">
            <div class="col-lg-12" style="padding-bottom: 15px">
                <div class="row pb-row" style="padding-bottom: 10px">
                    <h1>Oops! There are no videos to show right now.</h1>
                    <p>You should check out our <a href="https://m.youtube.com/channel/UCNpZoy0ZhftWVx4t5oifPhw"
                                                   target="_blank">YouTube</a> channel for now!</p>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid pb-video-container">
            <div class="col-lg-12" style="padding-bottom: 15px">
                <div class="row pb-row" style="padding-bottom: 10px">
                    @foreach($videos as $video)
                        <div class="col-lg-4 pb-video" style="padding-bottom: 10px">
                            <iframe width="100%" height="300" src="{{ $video->url }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            <label class="form-control text-xs-center">{{ $video->name }}</label>
{{--                            Only ADMINS can delete videos--}}
                            @if(Auth::id() == '4')
                            <div class="col-sm-6">
                                {!! Form::open(array('route' => array('videos.destroy', $video->id), 'method' => 'DELETE')) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                                {!! Form::close() !!}
                            </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection

