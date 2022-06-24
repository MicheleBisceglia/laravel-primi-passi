<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style.css">
  <title>Document</title>
</head>
<body>
  
</body>
  <div class="header-top">
    @if ($isLoggedIn)
        <span>Bentornato {{ $name }}!</span>
        <a href="{{ route('user') }}">
            <img class="user_img" src="{{ $img }}" alt="">
        </a>
    @else
        <a href="{{ route('home') }}">Esegui login</a>
    @endif
  </div>
  <header>
    <ul class="header-list">
      <li>
        <a href="{{ route('home') }}">Home</a>
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
</html>