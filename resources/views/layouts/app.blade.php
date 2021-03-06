<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Message Box') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="//at.alicdn.com/t/font_576648_i2zjjn0dnnyojemi.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        var main = document.querySelector('#app')
        var random = Math.random();           //生成0——1的随机数
        random = random*10;                        //0——10的随机数
        random = Math.ceil(random);
        main.style.backgroundImage='url(/img/bg'+random+'.jpg)'
    </script>
</body>
</html>
