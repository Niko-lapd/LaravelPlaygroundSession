<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initail-scale=1">

    <title> Laravel </title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
@yield('content')

<footer> 
Copright 2020 Pizza house
</footer>
</body>
</html>   