<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dc-@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <div class=top-nav>
        @include('templates.top-nav')
    </div>
    <header>
        @include('templates.header')
    </header>
    <div class="jumbotron"></div>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('templates.footer')
    </footer>
</body>
</html>