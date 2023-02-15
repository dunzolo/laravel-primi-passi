<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Laravel Primi Passi</title>
    </head>
    <body>
        <h1>ETA'</h1>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('email')}}">Email</a></li>
            <li><a href="{{route('age')}}">Età</a></li>
            <li><a href="{{route('address')}}">Indirizzo</a></li>
        </ul>
        <p>Età: {{$age}}</p>
    </body>
</html>