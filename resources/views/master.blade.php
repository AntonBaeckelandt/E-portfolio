<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anton Baeckelandt - @yield('title')</title>
    @section('head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/normalize.css') }}" />
    @endsection
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul>
                <h1 class="navbar-brand">Anton Baeckelandt</h1>
                <div class="my-2 my-lg-0">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Over mij...</a></li>
                    <li><a href="#">CV</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
</body>
</html>