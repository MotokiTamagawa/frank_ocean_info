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
            <h2>12: Facebook Story</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yWVoqpXfiPA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 12
                <br>
                Year : 2016
                <br>
                Produced by :Frank Ocean
                </h3>  
                <p> 
                Facebook Storyは、フランス人のDJ・プロデューサーSebastiAnが、付き合っていた彼女との<br>
                エピソードを語る音声をそのまま用いた一曲。アルバムのスキット的な役割をしており、<br>
                4曲目” Be Yourself “と同じスタイルの楽曲です。何の問題もなく付き合っていたカップルが、<br>
                Facebookというヴァーチャルな存在によって、疑い・嫉妬の念に駆られ、別れてしまう。<br>
                という現代的なテーマが語られています。
                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Skit: SebastiAn]<br>
            I was just telling that I got this girl before<br>
            前に付き合ってた彼女の話をしようと思ってたんだ<br><br>

            And I was together since 3 years<br>
            その彼女とはその時に、3年付き合ってて<br><br>

            And uhh, I was not even cheating her or what<br>
            えっとまぁ、俺は浮気とか一切したことなかったんだ<br><br>

            And Facebook arrived and, uh<br>
            でも、その辺りでFacebookが出てきてさ<br><br>

            She wanted me to accept her on Facebook<br>
            彼女はFacebookで俺に友達の申請を送ってきた<br><br>

            And I don’t want it because I was like in front of her<br>
            俺はしたくなかった、だって俺は彼女の目の前にいるんだから<br><br>

            And she told me like “Accept me on Facebook”<br>
            そしたら彼女は俺に「Facebookを承認して」って言ってきてさ<br><br>

            It was virtual, means no sense<br>
            そんなのはヴァーチャルだし、何の意味もないだろ<br><br>

            So I say “I’m in front of you, I don’t need to accept you on Facebook”<br>
            だから言ったんだ「俺は君の目の前にいるだろ、だから君をFacebookで承認しなくてもいいんだ」って<br><br>

            She started to be crazy<br>
            そしたら彼女狂ったように怒り始めたよ<br><br>

            She thought that because I didn’t accept her<br>
            彼女は考えたみたいだ、俺が「承認」しなかった理由をね<br><br>

            She thought I was cheating<br>
            浮気してると思ったんだってさ<br><br>

            She told me like, uh, “It’s over, I can’t believe you”<br>
            彼女は「もう終わりよ、もう信じられないわ」って言ってたよ<br><br>

            I said “come on, you’re crazy, because like yeah<br>
            だから俺も「おいおい、そんなのクレイジーだよ、だってさ、だって<br><br>

            I’m in front of you, I’m every day here in your house”<br>
            俺は君の目の前にいるじゃないか、毎日ここに、君の家にいるのに」<br><br>

            That’s, it means like it’s jealousy<br>
            それはさ、それはきっと「嫉妬」みたいなもので<br><br>

            Pure jealousy for nothing<br>
            何の意味もない、ただの嫉妬さ<br><br>

            You know, virtual thing<br>
            わかるだろ、ただのヴァーチャルなのにさ<br><br><br><br>
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
            <form action="{{ route('Facebook_Story.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="29">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Pretty_Sweet') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Close_to_You') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
