<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Benvenuto in OmiPlay</h1>
    </main>

    <!-- Footer -->
    @include('partials.footer')
    <!-- / Footerr -->
    
</body>
</html>

<style>
main {
  background-image: url(https://www.tomshw.it/images/images/2019/06/playstation-5-40134.jpg);
  background-size: cover;
}
main h1 {
  text-align: center;
  font-size: 4rem;
  width: 70%;
  padding-top: 60px;
  margin: 0 auto;
  color: white;
}
</style>



