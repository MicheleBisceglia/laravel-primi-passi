
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

  <ul class="info-list">
    <li>
      <h2>Cos'è OmiPlay?</h2>
      <h2>OmiPlay è il luogo ideale per giocare, discutere e sviluppare nuovi titoli.</h2>
    </li>
    <li>
      <h2>Quali sono i vantaggi di OmiPlay?</h2>
      <h2>
        Accesso immediato a circa 30.000 giochi, da titoli AAA fino alle produzioni indie. Potrai godere di offerte esclusive, aggiornamenti automatici dei giochi ed altri fantastici vantaggi.
      </h2>
      <h2>Stringi nuove amicizie, unisciti ai gruppi, forma dei clan, usa la chat in gioco e molto altro! Con oltre 100 milioni di potenziali amici (o nemici), il divertimento non avrà limiti!</h2>
    </li>
    <li>
      <h2>Inoltre siamo costantemente al lavoro per portare nuovi aggiornamenti e funzionalità su Omiplay, ad esempio:</h2>
      <h2>E molto altro ancora...
        Sblocca gli achievement, leggi le recensioni, scopri i titoli consigliati per te e molto altro.</h2>
    </li>
  </ul>
</body>
</html>

<style>
  .info-list li{
    padding-top: 20px;
    padding-bottom: 20px;
    border-bottom: 3px solid gray;
    width: 80%;
    margin: 0 auto;
  }
</style>