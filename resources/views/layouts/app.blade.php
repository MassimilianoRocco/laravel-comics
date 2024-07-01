<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Laravel Template")</title>
    @yield('styles')
</head>

<body>

    @include('partials.header')

  
    @yield('main_content', "Messaggio in caso di contenuto non implementato nella sezione in questione")

    @yield("pageScript")
</body>


</html>