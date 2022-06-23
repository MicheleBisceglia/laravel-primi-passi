<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    </ul>
  </header>

  <div>
    <h2>Continua a Giocare ai tuoi titoli preferiti!</h2>
    <ul class="card-container">
        @foreach ($games as $game)
            <li class="card">
              <strong>
                <p>{{ $game['name'] }}</p>
                <p>{{ $game['publisher'] }}</p>
                <p>{{ $game['genre'] }}</p> 
              </strong>
              <img class="game_poster" src="{{ $game['poster'] }}" alt="">
            </li>
        @endforeach
    </ul>

  </div>
</body>
</html>

<style>
  .card-container {
    display: flex;
    flex-wrap: wrap;
    width: 80%;
    margin: 0 auto;
  }
  .card {
    width: calc(100% / 4);
    margin: 3%;
    height: 200px;
    background-color: black;
    border-radius: 10px;
  }
  .card strong {
    position: absolute;
    margin-left: 15px;
    margin-top: 30px;
    color: white;
    font-size: 1.5rem
  }
  .game_poster {
    height: 100%;
    width: 100%;
    opacity: 50%;
    object-fit: cover;
  }
  
</style>