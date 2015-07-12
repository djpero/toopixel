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
        <div class="left-part">
            <a href="/" ><img src="{{ URL::asset('logo_en.png') }}" alt="logo"/></a>
        </div>
        <div class="right-part">
            <ul>
                <li><a class="@if($value === 'en') active @endif" href="/language/choose/en">EN</a></li>
                <li><a class="@if($value === 'fr') active @endif" href="/language/choose/fr">FR</a></li>
            </ul>
        </div>

    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <p>Pero Knezevic</p>
    </footer>
</body>
</html>
