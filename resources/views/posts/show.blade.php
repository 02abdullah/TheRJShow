@extends('main')

@section('title', 'View Blog Post')

@section('content')
    <div class="row">
        <div class="col-md-8" style="padding-top: 15px">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>

            <div class="col-md-4">
                <div class="card my-4">
                <h3 class="card-header">Post Details</h3>
             <div class="card-body">
                    <p>Posted on: {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                    <p>Last Updated on: {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                 <div class="row">
                     <div class="col-sm-6">
                         {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                     </div>
                     <div class="col-sm-6">
                         {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
@endsection

