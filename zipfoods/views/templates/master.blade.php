<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/zipfoods.css' rel='stylesheet'>

    @yield('head')

</head>

<body>

    <header>
        <a href="/"><img id='logo' src='/images/zipfoods-logo.png' alt='Zip Foods Logo'></a>
        <h1>{{ $app->config('app.name') }}</h1>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>

</html>