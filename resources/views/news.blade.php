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
      <div class ="page_title">
        <h1>NEWS</h1>
      </div> 
        <a href= "{{ url('/news1') }}">1,フランク・オーシャンとは?謎に包まれた天才のこれまでと、その音楽性</a>
            <br>
        <a href="https://sublyrics.info/frank-ocean-gayletter/">2,【インタビュー全訳】FRANK OCEAN – GAYLETTER</a>
            <br>
        <a href="https://sublyrics.info/frank-ocean-gayletter-2/">3,【インタビュー全訳】FRANK OCEAN – GAYLETTER(2)</a>
        <br>
        <a href="https://sublyrics.info/world-accoding-to-frank-ocean/">4,【インタビュー全訳】The World according to Frank Ocean by DAZED</a>
        <br>
        <a href="https://sublyrics.info/news-191001-1/">5,【インタビュー全訳】 唯一無二の動きを生み出すアーティスト、フランク・オーシャン / WMagazine</a>
        <br>
        <!-- <a href="">6,</a>
        <br>
        <a href="">7,</a> -->
        <br>


    </div>  

</body>
</html>