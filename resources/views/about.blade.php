<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/about.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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