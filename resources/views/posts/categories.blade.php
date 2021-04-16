@extends('main')

@section('title', 'Category')

@section('content')
    <div class="row" style="padding-top: 20px">
        <div class="col-md-10">
            <h1>All Posts Under Category</h1>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- Blog posts as cards -->
            @if (count($posts))
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ substr($post->body, 0, 105) }}{{ strlen($post->body) > 105 ? "..." : "" }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{ date('M j, Y h:ia', strtotime($post->created_at)) }} by
                            {{$post->user_name}}
                        </div>
                    </div>
            @endforeach
        @endif

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
                            <!--List of categories, with the category_id resolved from URL in routes--!>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="/posts/category/1">Personal Updates</a>
                                </li>
                                <li>
                                    <a href="/posts/category/2">Student Life</a>
                                </li>
                                <li>
                                    <a href="/posts/category/3">Prospective Students</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="/posts/category/4">Campus Living</a>
                                </li>
                                <li>
                                    <a href="/posts/category/5">Module Talk</a>
                                </li>
                                <li>
                                    <a href="/posts/category/6">Mental Health</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-title">Didn't find what you were looking for?</h5>
                    <p class="card-text">Be the first to talk about it!</p>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-2">Create Post</a>
                    <br>
                    <a href="/posts" class="card-link"><< Back to All Posts</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="padding-bottom: 5px">
        <hr>
    </div>
@endsection
