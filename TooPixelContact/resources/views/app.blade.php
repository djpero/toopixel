<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TooPixel Contact Page</title>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div>
            <a href="/" ><img src="{{ URL::asset('logo_en.png') }}" alt="logo"/></a>
        </div>

    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        Pero
    </footer>
</body>
</html>
