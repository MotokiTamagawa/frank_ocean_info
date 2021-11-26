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
            <h2>17: End</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uF4G7yKwnXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 17
                <br>
                Year : 2012
                <br>
                Produced by :Pharrell Williams, Frank Ocean & Malay
                </h3>  
                <p>
                
                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Part I: End]<br><br>

            Darker times<br>
            夜は更に更けて<br><br>

            They’re telling boulder heavy lies<br>
            彼らは「石が重くのしかかってる」と語る<br><br>

            Looks like all we’ve got is each other<br>
            俺たちが手にしたものは「お互い」。それだけだったのかもな<br><br>

            The truth is obsolete<br>
            もう” 真実 “なんて言葉、時代遅れになってる<br><br>

            Remember when all I had was my mother<br>
            思い出すよ、自分の世界に母親しかいなかった頃を<br><br>

            She didn’t compromise<br>
            彼女は妥協なんてしなかった<br><br>

            She could recognize<br>
            彼女はきっとわかってたんだ<br><br>

            Voodoo<br>
            ブードゥー<br><br>

            Our daughters and our sons<br>
            俺たちの娘たちや息子たちは<br><br>

            Are just candles in the sun<br>
            ただの太陽の下のロウソクなんだよ<br><br>

            Voodoo<br>
            ブードゥー<br><br>

            Don’t let him see divide<br>
            彼に喧嘩を見せないでくれ<br><br>

            Don’t you let her see divide<br>
            彼女に喧嘩を見せちゃいけない<br><br>

            Voodoo<br>
            ブードゥー<br><br>

            She’s got the whole wide world in her juicy fruit<br>
            彼女はその甘い果実に、広い世界を手にした<br><br>

            He’s got the whole wide world in his pants<br>
            彼もそのパンツの中に、広い世界を手にした<br><br>

            He wrapped the whole wide world in a wedding band<br>
            彼はそんな広い世界を、結婚指輪に包み込んだ<br><br>

            Then put the whole wide world on her hands<br>
            そして彼女の手に” 広い世界 “を与えた<br><br>

            She’s got the whole wide world in her hands<br>
            彼女はその手の中に、広い世界を手に入れたんだ<br><br>

            He’s got the whole wide world in his hands<br>
            そして彼も、その手の中に広い世界を手に入れた<br><br>

            There’s somethin’ about you<br>
            君は特別なんだ<br><br>

            I can’t believe I’m even talking to you, tellin’ you this right now<br>
            こうやって話せてるのも信じられないよ、こうやって話をしてるのすらね<br><br>

            You’re special<br>
            君は特別だよ<br><br>

            I wish you could see what I see<br>
            俺の見てるものが、君にも見えていればいいな<br><br><br><br>
            </p>
            

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
            <form action="{{ route('End.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="17">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Forrest_Gump') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Nikes') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
