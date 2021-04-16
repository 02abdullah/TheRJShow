@extends('main')

@section('title', 'View Blog Post')

@section('content')
    <div class="row" style="padding-top: 15px">
        <div class="col-sm-2">
            <p><a class="btn btn-info" href="/posts">Back to all posts</a></p>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" style="padding-top: 15px">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="card my-4">
                <h3 class="card-header">Post Details</h3>
                <div class="card-body">
                    <p>Written by: {{ $post->user_name}}</p>
                    <p>Category: {{ $post->category->name }}</p>
                    <p>Posted on: {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                    <p>Last Updated on: {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                    <div class="row">
                       {{--Only the user who wrote the post can edit or delete--}}
                        @if(Auth::id() == $post->user_id)
                            <div class="col-sm-6">
                                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                                {!! Form::close() !!}
                            </div>
                        @elseif(Auth::id() == '4')
                            <div class="col-sm-6">
                                {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                                {!! Form::close() !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

