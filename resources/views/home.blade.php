<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
     body {
        font-family: 'Nunito', sans-serif;
        color: white;
        background-color: black;
    }
    header,
    .header-top{
        background-color: lightskyblue;
        padding-bottom: 15px;
        display: flex;
        justify-content: flex-end;
    }
    header a,
    li{
        list-style: none;
        color: white;
        text-decoration: none;
        padding-left: 10px;
    }
    .header-list {
        display: flex;
        justify-content: space-between;
        max-width: 30%;
        margin: 0 auto;
    }
    main {
        background-image: url(https://www.tomshw.it/images/images/2019/06/playstation-5-40134.jpg);
        background-size: cover;
        height: calc(100vh - 100px)

    }
    h1 {
        text-align: center;
        font-size: 4rem;
        width: 70%;
        padding-top: 60px;
        margin: 0 auto;
    }
    span {
        font-size: 1.5rem;
        padding-right: 10px;
        margin-top: 0;
    }
    .user_img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }
    ul {
        list-style: none;
    }
</style>

