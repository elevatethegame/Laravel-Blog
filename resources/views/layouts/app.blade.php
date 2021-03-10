<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{ config('app.name', 'Laravel App') }}</title>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    </head>
    <body class="antialiased">
        @include('inc.navbar')
        <div class="container mt-5">
            @include('inc.messages')
            @yield('content')
        </div>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
