<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primo utilizzo Laravel</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
</head>
<body>
    <header>
        <nav>
            <a href="{{route("home_laravel")}}">Pagina Laravel</a>
            <a href="{{route("benvenuto")}}">Fatti salutare bello!</a>
            <a href="{{route("bye")}}">Devi andare via?</a>
        </nav>
    </header>
    <div style="margin: 50px auto 0; text-align: center;">
        <h1>Ciao, io sono Home</h1>
        <h3>Sono completamente scritto in ".blade"</h3>
        <br>
        <h5>Se mi fornisci il tuo nome, possiamo personalizzare il saluto!</h5>
        <form action="{{route("benvenuto")}}" method="GET">
            <label for="">Inserisci un nome</label>
            <input type="text" name="nome_user">
            <button type="submit">Genera il saluto!</button>
        </form>
    </div>
    <div>
        
    </div>
</body>
</html>
