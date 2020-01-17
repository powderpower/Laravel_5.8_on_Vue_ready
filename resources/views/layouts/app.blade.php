<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title')
        </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('head')
    </head>
    <body>
        @yield('content')
        @yield('script')
    </body>
</html>