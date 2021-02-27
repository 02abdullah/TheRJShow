<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<body style="padding-top: 100px; background-color: #eeeeee" class="d-flex flex-column min-vh-100 text-dark">
@include('partials._nav')

@yield('header')

<!-- Page Content -->
<div class="container">
    @include('partials._messages')
    @yield('content')
</div>
</body>
@include('partials._footer')
