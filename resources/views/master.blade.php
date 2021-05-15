<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anton Baeckelandt - @yield('title')</title>
    @section('head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/normalize.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
              integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
              crossorigin="anonymous">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    @show
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <a href="{{ route('posts') }}"><h1 class="navbar-brand">Anton Baeckelandt</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-2"><a class="nav-link" href="{{ route('posts') }}">Blog</a></li>
                <li class="nav-item mr-2"><a class="nav-link" href="{{ route('projects') }}">Projecten</a></li>
                <li class="nav-item mr-2"><a class="nav-link" href="{{ route('about') }}">Over mij</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="container">
    @yield('main')
</main>
<footer class="bg-secondary text-center text-white">
    <div class="container p-2 pt-4">
        <section class="mb-2">
            <a class="btn btn-outline-light btn-floating m-1"
               href="https://www.linkedin.com/in/anton-baeckelandt/"
               role="button"
               target="_blank">
                <i class="bi bi-linkedin"></i>
            </a>
            <a class="btn btn-outline-light btn-floating m-1"
               href="https://github.com/AntonBaeckelandt/"
               role="button"
               target="_blank">
                <i class="bi bi-github"></i>
            </a>
        </section>
        <section>
            <p> Site gemaakt door Anton Baeckelandt</p>
        </section>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>
