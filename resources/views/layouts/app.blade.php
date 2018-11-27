<!DOCTYPE html>
<html>
    <head>
        <title>Sentry Demo - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @section('sidebar')
            Sidebar
        @show

        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
