<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='url icon' href='images/pig_icon.png'>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@900&display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@900&family=Poppins:wght@500&display=swap"
        rel="stylesheet">

    <link href='/css/pigs.css' rel='stylesheet'>


    @yield('head')

</head>
<header>
    @yield('navigation')
    <nav class='nav'>
        <ul class="topnav">
            <li>
                <a href="http://e2p3.tablespoon.me/">HOME</a>
            </li>
            <li>

                <a href="http://e2p3.tablespoon.me/play">PLAY</a>


            <li>
                <a href="http://e2p3.tablespoon.me/history"> HISTORY</a>
            </li>
            <li>
                <a href="http://e2p3.tablespoon.me/rules">RULES</a>
            </li>
            </li>
        </ul>
    </nav>
</header>

<body>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>

</html>
