<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>TEAM</h1>

        <ul>
            <li><a href="{{ route('staff') }}">Staff della squadra</a></li>
            <li><a href="{{ route('tickets') }}">Biglietteria</a></li>
            <li><a href="{{ route('info') }}">Ulteriori info</a></li>
        </ul>
    </header>
    
    <h2>Nome: {{ $name }}</h3>
    <h3>Allenatore: {{ $coach }}</h3>
    <h3>Stadio: {{ $stadium }}</h3>
    <h3>Colori sociali: {{ $colors }}</h3>
</body>
</html>