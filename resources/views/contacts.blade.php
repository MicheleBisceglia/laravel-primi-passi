
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

  <h2>Stai cercando di contattare il servizio clienti di OmiPlay? Ecco tutti i dettagli e i canali aggiornati per contattare OmiPlay, inclusi numeri di telefono, account dei social media, sito web ufficiale e altro ancora.</h2>
  <ul>
    <li>
      <h3>
        Numero di Telefono: (800 221 234 22)
      </h3>
    </li>
    <li>
      <h3>
        Email: Omiplay_assistenza@info.it
      </h3>
    </li>
    <li>
      <h3>
        Facebook: Assistenza OmiPlay
      </h3>
    </li>
    <li>
      <h3>
        Twitter: @ OmiPlay_Support
      </h3>
    </li>
    <li>
      <h3>
        Indirizzo: Via Delle Api n 23 Foggia 
      </h3>
    </li>
  </ul>
</body>
</html>

<style>
  h2,h3 {
    padding-top: 30px;
    width: 80%;
    margin: 0 auto;
  }
</style>