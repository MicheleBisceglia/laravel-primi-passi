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
    @if ($isLoggedIn)  
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
    @else
      <h3>Inserisci le tue credenziali</h3>
      <div class="my_input">
        <input type="text" placeholder="Inserisci indirizzo email">
        <input type="text" placeholder="Inserisci la tua password">
      </div> 
    @endif
  </main>

  <!-- Footer -->
  @include('partials.footer')
  <!-- / Footerr -->
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
    font-size: 1.5rem;
    display: none;
  }
  .game_poster {
    height: 100%;
    width: 100%;
    opacity: 100%;
    object-fit: cover;
  }
  .card:hover .game_poster{
    opacity: 30%;
  }
  .card:hover strong{
    display: inline;
  }

  .my_input {
    display: flex;
    justify-content: center;
    margin-top: 100px;
  }
  
</style>