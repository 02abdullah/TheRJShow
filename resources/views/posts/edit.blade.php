@extends('main')

@section('title', 'Edit Blog Post')

@section('content')

    <div class="row">
        <div class="col-md-8" style="padding-top: 10px">
        {!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) !!}
        <div class="form-group">
            <strong>{!! Form::label('title', 'Title:*') !!}</strong>
            {!! Form::text('title', null, array('class'=>'form-control')) !!}
            <br>

            <strong>{!! Form::label('category_id', 'Category:') !!}</strong>
            {!! Form::select('category_id',array('1'=>'Personal Updates', '2'=>'Student Life', '3'=>'Prospective Students', '4'=>'Campus Living','5'=>'Module Talk','6'=>'Mental Health'), '7', array('placeholder' => 'Select category')) !!}

            <br>
            <br>
            <strong>{!! Form::label('body', 'Post Body:*', array('style' => 'padding-top: 10px')) !!}</strong>
            {!! Form::textarea('body', null, array('class'=>'form-control')) !!}
            <p>* - Required</p>
        </div>
        </div>

        <div class="col-md-4">
            <div class="card my-4">
                <h3 class="card-header">Edit Options</h3>
                <div class="card-body">
                    <p>Last updated on: {{$post->updated_at}}</p>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::submit('Save Changes', array('class'=>'btn btn-success btn-block')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
