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
    <ul>
        @foreach ($store as $comic)
            <li>
               Name: {{$comic["title"]}} <br>
               Description: {{ $comic["description"] }}
            </li>
        @endforeach
    </ul>
</body>
</html>