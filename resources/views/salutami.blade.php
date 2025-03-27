<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Benvenuto</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
</head>

<body>
    <header>
        <nav>
            <a href="{{route("home_laravel")}}">{{$laravel}}</a>
            <a href="{{route("benvenuto")}}">{{$benvenuto}}</a>
            <a href="{{route("bye")}}">{{$bye}}</a>
        </nav>
    </header>
    <div class="saluto">
        <h1>Ciao {{$_GET["nome_user"] ?? "fratello!"}}</h1>
        <button><a href="{{route("home")}}">Torna in home</a></button>
    </div>
</body>

</html>
