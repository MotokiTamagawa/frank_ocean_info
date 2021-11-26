<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
    <header class="site-header">
    <h1 class="site-logo">Frank Ocean INFO</h1>
        <nav class="gnav">
            <ul class="gnav__menu">
            @if (Route::has('login'))
                @auth
                <li class="gnav__menu__item"><a href="{{ url('/') }}">Home</a></li>
                <li class="gnav__menu__item"><a href="{{ url('/mypage') }}">Mypage</a></li>
                <li class="gnav__menu__item"><a href="{{ url('/news') }}">News</a></li>
                <li class="gnav__menu__item"><a href="{{ url('/song_review') }}">Lyric&Review</a></li>
                @else
                <li class="gnav__menu__item"><a href="{{ url('/news') }}">News</a></li>
                <li class="gnav__menu__item"><a href="{{ url('/song_review') }}">Lyric&Review</a></li>
                <li class="gnav__menu__item"><a href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                    <li class="gnav__menu__item"><a href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth
            @endif    
            </ul>
        </nav>
    </header>
            <div class="content">
                <div class = "home"> 
                    <img src = "/images/1.jpeg">  

                </div>
                <div class = "home_title">
                    <h2>ABOUT FRANK OCEAN????</h2>
                    <a href ="{{ url('/news1') }}"><img src="/images/3.png"></a>
                    <a href ="{{ url('/news1') }}"><p>フランク・オーシャンとは?謎に包まれた天才のこれまでと、その音楽性</p></a>
                    <a href ="{{ url('/news') }}"><h5>全てのニュース記事はこちら</h5></a>
                </div>
                <div class="slide" >
                    <h2>SONGS</h2>
                    <a href ="{{ url('/Start') }}"> <img src="/images/channelorange2.jpeg" class = "homeimg"></a>
                    <a href ="{{ url('/Nikes') }}"> <img src="/images/blonde.jpeg" class = "homeimg"></a>
                    <a href="{{ url('/Swim_Good') }}"> <img src = "/images/swim_good.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/Chanel') }}"> <img src = "/images/chanel.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/Biking') }}"> <img src = "/images/biking.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/Lens') }}"> <img src = "/images/lens_v2.jpeg"class = "homeimg"> </a>           
                    <a href="{{ url('/Provider') }}"> <img src = "/images/provider.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/Moon_River') }}"> <img src = "/images/moon_river.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/DHL') }}"> <img src = "/images/dhl.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/In_My_Room') }}"> <img src = "/images/in_my_room.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/Dear_April') }}"> <img src = "/images/dear_april.jpeg"class = "homeimg"> </a>             
                    <a href="{{ url('/Cayendo') }}"> <img src = "/images/cayendo.jpeg"class = "homeimg"> </a>             
                </div>
            </div>


            <footer class="site-footer">
                <p class="copyright">@2021 Frank Ocean INFO</p>
            </footer>        
    </body>
</html>
