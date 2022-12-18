<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">
    <div><h1 class="text-warning text-center mb-5">Laravel model Controller</h1></div>
    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card col-2 mb-3 me-3" style="">
                <img class="card-img-top" src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <p class="card-text ">Titolo originale : {{ $movie['original_title'] }}</p>
                    <p class="card-text"> Data uscita: {{ $movie['date'] }}</p>

                    <p class="card-text"> Voto: {{ $movie['vote'] }}</p>

                </div>
            </div>
        @endforeach

    </div>

</body>

</html>