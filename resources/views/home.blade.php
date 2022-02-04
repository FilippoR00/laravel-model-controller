<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <main>
        <h1>Lista film:</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <div class="card">
                        <div>Titolo: <strong>{{$movie["title"]}}</strong></div>
                        <div>Titolo originale: {{$movie["original_title"]}}</div>
                        <div>Nazionalità: {{$movie["nationality"]}}</div>
                        <div>Data: {{$movie["date"]}}</div>
                        <div>Voto: <span class="vote">{{$movie["vote"]}}</span></div>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>