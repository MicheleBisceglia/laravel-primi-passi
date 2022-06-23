<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <a href="{{ route('home') }}">Home</a>
<div>
  <h4>Giochi Preferiti</h4>
  <ul>
      @foreach ($games as $game)
          <li>Nome: {{ $game['name'] }} - Creato da: {{ $game['publisher'] }} - Genere: {{ $game['genre'] }}
          </li>
      @endforeach
  </ul>

</div>
</body>
</html>

<style>
  body {
    background-color: lightskyblue;
    color: white;
  }
  a {
    text-decoration: none;
    color: white;
  }
  li {
    list-style: none;
  }
</style>