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
            <h2>8: Good Guy </h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZnnwfgqdEGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 8
                <br>
                Year : 2016
                <br>
                Produced by :Frank Ocean
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
            [Verse]<br>
            Here’s to the good guy, he hooked it up<br>
            この曲は「グッド・ガイ」に送るよ、彼は紹介してくれたんだ<br><br>

            Said if I was in NY I should look you up<br>
            「もしNYにいるなら、” 君 “に会ってみるべきだ」ってさ<br><br>

            First time I’d ever saw you<br>
            初めて” 君 “に出会った時、思ったよ<br><br>

            And you text nothing like you look<br>
            メールの文面と見た目のイメージが全然違うって<br><br>

            Here’s to the gay bar you took me to<br>
            俺をゲイバーに連れて行ってくれた” 君 “に送るよ<br>
            (メディア” Gayletter “にてこのバーが、NYにある” Boxers “というゲイバーだったと語っています)<br><br>

            Here’s when I realized you talk so much more than I do<br>
            そこで気づいたんだ、君は俺よりも、よく喋る人だって<br><br>

            Here’s to the highlights when I was convinced<br>
            その時に確信したんだ<br><br>

            That this was much more than just some night shit<br>
            この夜は、いつもの夜とは違うんだって<br>
            (次の曲” Nights “では、毎晩彼がスタジオに篭りっきりで変わらない生活を送っていることを語っているので、普段の生活と比較しています)<br><br>

            I know you don’t need me right now<br>
            でもわかってるよ、君が今、俺を必要としてないってことをね<br><br>

            And to you it’s just a late night out<br>
            君にとっては、ただの夜遊びなんだろ<br><br><br><br>
            </p>
            <p>
            [Outro]
            This nigga—all the bitches in the neighborhood wanna fuck you, nigga<br>
            近くに住むビッチたちは全員こいつとヤりたいって思ってる、そんな男なんだ<br><br>

            He told me<br>
            彼は俺に言った<br><br>

            I used to fuck with all of ‘em<br>
            「昔は、あいつらともヤってたよ」<br><br>

            Yeah—I ain’t got bitches no more<br>
            でももう、ビッチたちには興味ないんだ」ってね<br><br>

            But now I don’t care about bitches like that, my nigga, that shit… Jasmine fucking wrecked my heart<br>
            でも今は、そういうビッチたちとはつるんでないよ、わかるだろ、” ジャスミン “にマジで傷つけられてさ<br><br>

            I don’t even know how I feel about it<br>
            もう自分の気持ちもよくわからないんだ<br><br><br><br>
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
            <form action="{{ route('Good_Guy.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="25">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Self_Control') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Nights') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
