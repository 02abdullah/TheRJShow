@extends('main')

@section('title', 'Home')

@section('header')
<!-- Header -->
<header style="background-color: #c3073f" class="py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-dark mt-5 mb-2">The Rhys & James Show</h1>
                <p class="lead mb-5 text-dark"><strong>Welcome to our website, here you’ll find blogs and exclusive videos regarding University life, as well as insight into the daily life of a student and their personal stories to hopefully help inform you about University and what it has to offer.</strong></p>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 mb-5">
            <h2>What We Do</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
            <a class="btn btn-primary btn-lg" href="blog">Our Blog</a>
        </div>
        <div class="col-md-4 mb-5">
            <h2>Contact Us</h2>
            <hr>
            <address>
                <strong>The RJ Show</strong>
                <br>127  Crown Street
                <br>LONDON, SW11 9HL
            </address>
            <address>
                <abbr title="Phone">P:</abbr>
                 07776 59958
                <br>
                <abbr title="Email">E:</abbr>
                <a href="mailto:therjshow2019@gmail.com">therjshow2019@gmail.com</a>
            </address>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">YouTube</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                </div>
                <div class="card-footer">
                    <a href="https://m.youtube.com/channel/UCNpZoy0ZhftWVx4t5oifPhw" target="_blank" class="btn btn-primary">Take Me There!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">Facebook</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.facebook.com/The-Rhys-and-James-Show-101263594602731" target="_blank" class="btn btn-primary">Show Me!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">Instagram</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.instagram.com/rhyskhan16/" class="btn btn-primary" target="_blank">Let Me See!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    @endsection

