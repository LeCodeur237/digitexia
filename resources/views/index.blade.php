<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiTexia | Transformation digitale des entreprises</title>
    <link rel="shortcut icon" href="{{ asset('logo/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/digitexiastyles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
    @stack('styles')
</head>

<body>
    @include('partials.header')

    <main>
        @yield('contain')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/digitexiajs001.js') }}"></script>
    <script src="{{ asset('js/digitexiajs002.js') }}"></script>
    <script src="{{ asset('js/digitexiajs003.js') }}"></script>
    <script src="{{ asset('js/myjs.js') }}"></script>
</body>

</html>
