<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title') - La Molisana</title>
    <link rel="stylesheet" href="@yield('common_css')">
    <link rel="stylesheet" href="@yield('specific_css')">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
</head>
<body>

    <header>
        @include('partials/logo_menu')
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer>
        @include('partials/footer')
    </footer>

    {{-- scripts --}}
</body>
</html>
