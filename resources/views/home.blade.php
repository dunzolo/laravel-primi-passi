<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Laravel Primi Passi</title>
    </head>
    <body>
        <h1>Hello world</h1>
        <p>Nome: {{$data['name']}}</p>
        <p>Cognome: {{$data['surname']}}</p>
        <p>Email: {{$data['email']}}</p>
        <p>Età: {{$data['age']}}</p>
        <p>Indirizzo: {{$address}}</p>
    </body>
</html>