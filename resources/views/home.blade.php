<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @if ($isLoggedIn)
        <img class="user_img" src="{{ $img }}" alt="">
        <span>Bentornato {{ $name }}!</span>
    @else
        <p>Fai login</p>
    @endif
    <h1>Hello world</h1>
</body>
</html>

<style>
    body {
        font-family: 'Nunito', sans-serif;
        background-color: lightskyblue;
        color: white;
    }
    h1 {
        text-align: center;
        padding-top: 50px;
        font-size: 5rem;
    }
    span {
        font-size: 1.5rem;
        padding-right: 10px;
        margin-top: 0;
    }
    .user_img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }
</style>

