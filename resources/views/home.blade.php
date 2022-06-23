<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
    <div class="header-top">
        @if ($isLoggedIn)
            <span>Bentornato {{ $name }}!</span>
            <a href="{{ route('user') }}">
                <img class="user_img" src="{{ $img }}" alt="">
            </a>
        @else
            <p>Esegui login</p>
        @endif
    </div>
    <header>
        <ul class="header-list">
            <li>
                <a href="{{ route('home') }}">home</a>
            </li>
            <li>
                <a href="{{ route('favorite') }}">Preferiti</a>
            </li>
            <li>
                <a href="{{ route('info') }}">Info</a>
            </li>
            <li>
                <a href="{{ route('contacts') }}">Assistenza</a>
            </li>
            <li>
                <a href="{{ route('user') }}">Info utente</a>
            </li>
        </ul>
        
    </header>


    
    <main>
        <h1>Benvenuto in OmiPlay</h1>
    </main>
    
    
    
</body>
</html>


