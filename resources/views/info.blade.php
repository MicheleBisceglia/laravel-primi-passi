
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
<!-- Header -->
  @include('partials.header', [
  'name' => 'Michele',
  'lastname' => 'Bisceglia',
  'img' => 'https://it.videogamer.com/wp-content/uploads/2017/10/gran-turismo-sport-keyart-1-e1508203779494.png',
  'isLoggedIn' => true,
  ])
<!-- / Header -->

<main>
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
</main>

  <!-- Footer -->
  @include('partials.footer')
  <!-- / Footerr -->
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