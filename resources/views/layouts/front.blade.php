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
        <div id = "app">
        <div class ="content-wrapper header-nav">
                <div class="right-nav">
                    <ul>
                    <li><a class="logo" href="{{  action('GoodsController@index')  }}">GOODS</a></li>
                    <li><a class="post" href="{{  action('ListController@index')  }}">口コミを見る</a></li>
                    </ul>
                </div>
                <div class="left-nav">
                @guest
                    <ul>
                    <li><a class="navRegister" href="{{ route('register') }}">新規登録</a></li>
                    <li><a class="navLogin" href="{{ route('login') }}">ログイン</a></li>
                    </ul>
                </div>

                @else
                <div class="navLogout">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="san">さん </span><span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('messages.Logout') }}
                            </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                </div>
                @endguest
        </div>
    </header>

    @yield('contents')

    <footer>
    <p class="footer_logo">(c)GOODS 2020</p>
    </footer>
        </div>
    </body>
</html>
