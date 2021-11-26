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
            <h2>Moon River</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mXiFHDfvn4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- 随時変更 -->
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2017
                <!-- <br>
                Produced by : Midi Mafia -->
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
            Moon river wider than a mile<br>
            ムーンリバー  広大な川<br><br>

            I'm crossing you in style someday (someday, day)<br>
            いつか美しく渡ってみせるわ<br><br>

            A dream maker (maker, maker)<br>
            夢見る人<br><br>

            My heartbreaker (you heartbreaker)<br>
            失恋した<br><br>

            Wherever you're goin', I'm goin' that way (the same, the same)<br>
            どこにいくのも　一緒にいくわ　<br><br><br><br>
            </p>

            <p>
            Two drifters off to see the world<br>
            二人で漂流して世界を見にいくの<br><br>

            There's such a crazy world to see<br>
            狂った世界を見るの<br><br>
            We're all chasin' after all the same<br>
            私たちは皆　追い求めて結局同じところに着くの<br><br>

            Chasing after our rainbow's end<br>
            虹の端追い求め続けた後に<br><br><br><br>
            </p>
            <p>
            Moon river wider than a mile<br>
            ムーンリバー  広大な川<br><br>

            I'm crossing you in style someday (someday, day)<br>
            いつか美しく渡ってみせるわ<br><br>

            A dream maker (maker, maker)<br>
            夢見る人<br><br>

            My heartbreaker (you heartbreaker)<br>
            失恋した<br><br>

            Wherever you're goin', I'm goin' that way (the same, the same)<br>
            どこにいくのも　一緒にいくわ　<br><br>
            </p>

            <p>
            Two drifters off to see the world<br>
            二人で漂流して世界を見にいくの<br><br>

            It's such a crazy world you'll see (What I see, who I become)<br>
            すごく狂った世界をあなたは見るわ<br><br>

            What I see, who I become<br>
            何を見ても　何になっても<br><br>

            We're all chasin' after our end<br>
            私たちは最後まで追い求めるの<br><br>

            Chasin' after our ends<br>
            私たちの最後を<br><br><br><br>
            
            </p>

            <p>
            Life's just around the bend, my friend<br>
            人生は狂ってるのよ　我が友よ<br><br>
            Moon river and me<br>
            
            ムーンリバー　と　わたし<br><br><br><br>
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
            <form action="{{ route('Moon_River.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="40">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Provider') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/DHL') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
