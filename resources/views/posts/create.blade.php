@extends('main')

@section('title', 'Create Post')

@section('content')
<div class="row" style="padding-top: 20px">
    <div class="col-md-8 offset-2">
        <h1>New Post</h1>
        <hr>

        {!! Form::open(array('route'=>array('posts.store'))) !!}
        <div class="form-group" style="padding-bottom: 20px">
            <strong>{!! Form::label('title', 'Title:*') !!}</strong>
            {!! Form::text('title', null, array('class'=>'form-control')) !!}
            <br>

            <strong>{!! Form::label('category_id', 'Category:') !!}</strong>
            {!! Form::select('category_id', array('1'=>'Personal Updates', '2'=>'Student Life', '3'=>'Prospective Students', '4'=>'Campus Living','5'=>'Module Talk','6'=>'Mental Health'), null, array('placeholder' => 'Select category')) !!}
            <br>
            <br>
            <strong>{!! Form::label('body', 'Post Body:*') !!}</strong>
            {!! Form::textarea('body', null, array('class'=>'form-control')) !!}
            <p>* - Required</p>
            {!! Form::submit('Create Post', array('class'=>'btn btn-success')) !!}
            <a class="btn btn-danger" href="/posts">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection

