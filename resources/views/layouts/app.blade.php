<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('Navbar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
    