<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite ('resources/css/app.css')
    </head>
    <body class="antialiased px-[10rem] py-2">
        <x-nav/>
        <p>Dashboard</p>
       <h1>Dashboard page</h1>
    </body>
</html>
