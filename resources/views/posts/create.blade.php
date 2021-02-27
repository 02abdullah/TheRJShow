@extends('main')

@section('title', 'Create Post')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <h1>New Post</h1>
        <hr>

        {!! Form::open(array('route'=>array('posts.store'))) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, array('class'=>'form-control')) !!}

            {!! Form::label('body', 'Post Body:') !!}
            {!! Form::textarea('body', null, array('class'=>'form-control')) !!}
            <br>
            {!! Form::submit('Create Post', array('class'=>'btn text-light', 'style' => 'background-color: #c3073f')) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection

