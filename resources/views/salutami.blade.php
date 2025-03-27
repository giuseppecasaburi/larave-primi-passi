<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Benvenuto</title>
</head>

<body>

    <h1>Ciao <?php echo $_GET["nome_user"] ?? "fratello!";?></h1>
    <button><a href="/">Torna in home</a></button>
</body>

</html>
