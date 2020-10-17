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
    @show
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="collapse navbar-collapse">
                <a href="{{ route('posts') }}"><h1 class="navbar-brand">Anton Baeckelandt</h1></a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-2"><a class="nav-link" href="{{ route('posts') }}">Blog</a></li>
                    <li class="nav-item mr-2"><a class="nav-link" href="#">CV</a></li>
                    <li class="nav-item mr-2"><a class="nav-link" href="{{ route('about') }}">Over mij...</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield('main')
    </main>
    <footer>
        <!-- TODO -->
    </footer>
</body>
</html>