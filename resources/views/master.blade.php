<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anton Baeckelandt - @yield('title')</title>
    @section('head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/normalize.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    @show
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <a href="{{ route('posts') }}"><h1 class="navbar-brand">Anton Baeckelandt</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-2"><a class="nav-link" href="{{ route('posts') }}">Blog</a></li>
                    <li class="nav-item mr-2"><a class="nav-link" href="#">CV</a></li>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
