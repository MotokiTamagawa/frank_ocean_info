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

    <div class="split">
    <div class="split-item split-left">
        <div class="split-left__inner">
            <!-- 随時変更 -->
            <h2>3: Fertilizer</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4oolNFjgCbM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 3
                <br>
                Year : 2012
                <br>
                Produced by :  Malay
                </h3>  
                <p>James Fauntleroyの楽曲” Fertilizer “をカバーした作品。<br>
                <p>” Thinkin Bout You “から” Sierra Leone “を繋ぐ40秒ほどのインタールード、<br>そしてアルバムの1曲目” Start “と同じように、テレビから流れてくる音声をイメージした作品となっております。
                <br>「カチッ」っという音は、おそらくテレビの” チャンネル “を変えるサウンドであり、<br>この楽曲はアルバムにおいての” CM “のような役割を担っているのかもしれません。</p>              
                
        </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>

            <h3>Lyric</h3>
            <hr>
            <p>
            (Really, though, I think)<br>
            (本当さ、でも、思ったんだ)<br><br>

            Fertilizer<br>
            肥料さ<br><br>

            I’ll take bullshit if that’s all you got<br>
            君の手持ちがそれで全てなら、俺は君にクソを届けるよ<br><br>

            Some fertilizer<br>
            肥料を<br><br>

            Fertilizer<br>
            肥料をね<br><br>
            </p>

            <!-- 随時変更 -->
            <h3>Review</h3>
            <hr>
            <div class = "reviews">
            @foreach($startreviews as $startreview)
            <tr> 
                <h5>name<br>{{$startreview->user->name}}</h5>
                <h5>comment<br>「{{$startreview->review}}」</h5>
                <br>
                <p>{{$startreview->created_at}}</p>
                <hr>
                <br>           
            </tr>
            @endforeach
            <!-- 随時変更 -->
            <div class="post_review">
            <form action="{{ route('Fertilizer.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="3">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>    
            <!-- 随時変更 -->
                <div class="nav-links"> 
                    <a class="page-numbers" href="{{ url('/Thinkin_Bout_You') }}">BACK</a>
                    <a class="page-numbers" href="{{ url('/Sierra_Leone') }}">NEXT</a>
                </div>
            </div>    
        </div>
    </div>
</div>

</body>
</html>   
