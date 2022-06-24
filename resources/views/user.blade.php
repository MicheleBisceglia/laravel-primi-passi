<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    @if ($isLoggedIn)
      <h3>{{ $name }} {{ $lastname }}</h3>
      <h3>
        <i class="fas fa-user"></i> {{ $username }}</h3>
      <h3>
        <i class="fas fa-gamepad"></i> {{ $games_played}}</h3>
      <h3>
        <i class="fas fa-trophy"></i> {{ $trophies}}
      </h3>
      
    @else
      <p>Esegui login</p>
    @endif
  </div>
</body>
</html>

<style>
  h3 {
    text-align: left;
    width: 200px;
    margin: 0 auto;
    margin-top: 30px
    }
</style>