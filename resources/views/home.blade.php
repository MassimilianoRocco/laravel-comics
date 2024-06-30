<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Main Heroes List</h1>
    <ul>
        @foreach ($heroes as $hero)
            <li>{{ $hero["name"] }}</li>
        @endforeach
    </ul>
</body>
</html>