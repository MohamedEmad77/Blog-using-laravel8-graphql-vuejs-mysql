<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog-QL</title>

        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <script src="{{ mix('js/app.js')}} " defer></script>

    <body class="antialiased">

        <div id="app">
            <router-view></router-view>
        </div>
    </body>
</html>
