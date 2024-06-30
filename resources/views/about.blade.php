<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/about.css">
    <title>About Comic</title>
</head>
<body>
    <h1>About Comics</h1>
        @foreach ($store as $comic)
            <div class="info_container">
                <div class="text_box">
                    <h3>{{$comic["title"]}}</h3>
                    <p>{{ $comic["description"]}}</p>
                </div>
                <div class="img_box">
                    <img src= {{$comic["thumb"]}} > 
                </div>
            </div>
        @endforeach
</body>
</html>