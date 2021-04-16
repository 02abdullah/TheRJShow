@extends('main')

@section('title', 'Add New Video')

@section('content')
    <div class="row" style="padding-top: 20px">
        <div class="col-md-8 offset-2">
            <h1>New Video</h1>
            <hr>

            {!! Form::open(array('route'=>array('videos.store'))) !!}
            <div class="form-group" style="padding-bottom: 20px">
                <strong>{!! Form::label('name', 'Name of video:*') !!}</strong>
                {!! Form::text('name', null, array('class'=>'form-control')) !!}
                <br>

                <strong>{!! Form::label('url', 'YouTube embed URL:*') !!}</strong>
                {!! Form::text('url', null, array('class'=>'form-control')) !!}
                <br>

                <p>* - Required</p>
                {!! Form::submit('Add Video', array('class'=>'btn btn-success')) !!}
                <a class="btn btn-danger" href="/posts">Cancel</a>
            </div>
            {!! Form::close() !!}

            <br>
            <strong>Tip</strong>
            <p>To add a video, please go to a YouTube video and select the <strong>'Share'</strong> button underneath the video. Then
                select <strong>'Embed'</strong>. A new pop-up should appear, click the text on the top right once and copy it. You should
                then paste this into the URL field above. You will need to find where it says '<strong>src=</strong>', you want the URL
                after the equals sign and in between the speech marks, <strong>remove any other text before and after this URL</strong>.
                You should now be left with a URL in the field.</p>
            <br>
            <p>For example:</p>
            <p>&lt;iframe&gt; width="560" height="315" src="<strong>https://www.youtube.com/embed/R6bx7-5lnKY</strong>" title="YouTube
                video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                gyroscope; picture-in-picture" allowfullscreen>&lt;/iframe&gt;</p>
            <p>You should be left with:</p>
            <p>https://www.youtube.com/embed/R6bx7-5lnKY</p>
        </div>
    </div>
@endsection

