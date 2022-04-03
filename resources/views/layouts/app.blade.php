<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @stack('css')
      <title>@yield('title')</title>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header>
                <div id="hamburger">
                    <div class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <nav class="sm">
                    <ul>
                        <li>
                            <a class="header-contents" href="/game/home">HOME</a>
                        </li>
                        <li>
                            <a class="header-contents" href="/game/register">GAME</a>
                        </li>
                        <li>
                            <a class="header-contents" href="/user/search">SEARCH</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                LOGOUT
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <nav class="pc">  <!--pcクラスを追記-->
                    <ul>
                        <li>
                            <a class="header-contents" href="/game/home">
                                <img src="{{ asset('img/home.png') }}" alt="" class="header-img" id="home-img">
                            </a>
                        </li>
                        <li>
                            <a class="header-contents" href="/game/register">
                                <img src="{{ asset('img/mygame.png') }}" alt="" class="header-img" id="mygame-img">
                            </a>
                        </li>
                        <li>
                            <a class="header-contents" href="/user/search">
                                <img src="{{ asset('img/search.png') }}" alt="" class="header-img" id="search-img">
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <img src="{{ asset('img/logout.png') }}" alt="" class="header-img" id="logout-img">
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
            @yield('content')
            </main>
        </div>
        <!--▽▽jQuery▽▽-->
        <script>
            $('#hamburger').on('click', function(){
                $('.icon').toggleClass('close');
                $('.sm').slideToggle();
            });
        </script>
        <!--△△jQuery△△-->
    </body>
</html>