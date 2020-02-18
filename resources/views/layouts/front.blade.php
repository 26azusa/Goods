<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- title -->
        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Style -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">

    </head>
    <body>
    <header>
        <div class ="container header-nav">
                <div class="right-nav">
                    <ul>
                    <li><a class="logo" href="#">GOODS</a></li>
                    <li><a class="post" href="#">口コミを見る</a></li>
                    </ul>
                </div>
                <div class="left-nav">
                    <ul>
                    <li><a class="" href="#">新規登録</a></li>
                    <li><a class="post" href="#">ログイン</a></li>
                    </ul>
                </div>
        </div>
    </header>

    @yield('contents')
    </body>
</html>
