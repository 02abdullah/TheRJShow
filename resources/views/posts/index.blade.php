@extends('main')

@section('title', 'All Posts')

@section('header')
    <header style="background-color: #c3073f" class="py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-dark mt-5 mb-2">The Rhys & James Show Blog</h1>
                    <p class="lead mb-5 text-dark"><strong>Here you can post blogs about your own experiences with
                            University and student life. You’ll also be able to post and participate in polls to help
                            with future video ideas for both our website and YouTube channel.</strong></p>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- Blog posts as cards -->
            @foreach($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ substr($post->body, 0, 105) }}{{ strlen($post->body) > 105 ? "..." : "" }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{ date('M j, Y h:ia', strtotime($post->created_at)) }} by
                        <a href="#">User</a>
                    </div>
                </div>
        @endforeach

        <!-- Pagination -->
            <div class="text-center" style="padding-bottom: 25px">
                {!! $posts->links() !!}
            </div>


        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card mb-2">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    {!! Form::open(['route' => ['posts.search'],'method' => 'GET']) !!}

                    {!! Form::text('query') !!}
                    {!! Form::submit('Find Posts') !!}

                    {!! Form::close() !!}
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <a href="#">Category</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <a href="#">Category</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h3 class="card-header">Daily Poll</h3>
                <div class="card-body">
                    <h5 class="card-header"><span class="fa fa-line-chart"></span>Test Poll</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Excellent
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Good
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Satisfactory
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Needs Improvement
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=""> Poor
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12" style="padding-bottom: 5px">
        <hr>
    </div>
@endsection
