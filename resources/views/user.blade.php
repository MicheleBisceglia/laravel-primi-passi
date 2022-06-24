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
<!-- Header -->
  @include('partials.header', [
  'name' => 'Michele',
  'lastname' => 'Bisceglia',
  'img' => 'https://it.videogamer.com/wp-content/uploads/2017/10/gran-turismo-sport-keyart-1-e1508203779494.png',
  'isLoggedIn' => true,
  ])
<!-- / Header -->
  <main>
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
  </main>

  <!-- Footer -->
  @include('partials.footer')
  <!-- / Footerr -->

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