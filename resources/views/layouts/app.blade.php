<!DOCTYPE html>
<html>
    <head>
        <title>Sentry Demo - @yield('title')</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
        <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    </head>
    <body>
        @section('sidebar')
            Sidebar
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
