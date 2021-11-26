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
            <h2>2: Thinkin Bout You</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8sEbQJev54A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 2
                <br>
                Year : 2012
                <br>
                Produced by :  Frank Ocean & Shea Taylor
                </h3>  
                <p>当時19歳だった、フランオーシャンの初恋の相手は男性でした。<br>25になった彼はアルバムリリースの前にTumblrで初恋の経験をカムアウトします。</p>
                <a href="http://frankocean.tumblr.com/post/26473798723 ">カミングアウトしたTumblerでの投稿はこちら</a>
        </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>

            <h3>Lyric</h3>
            <hr>
            <p>[Verse1]<br>
            A tornado flew around my room before you came<br>
            君が来る前に部屋を台風が荒らしてったんだ<br><br>

            Excuse the mess it made, it usually doesn’t rain<br>
            In Southern California, much like Arizona<br>
            散らかっててゴメンよ、この辺じゃ雨すらあんまり降らないんだけど<br>
            南カリフォルニアだしね、アリゾナみたいな感じだよ<br><br>

            My eyes don’t shed tears, but, boy, they pour<br>
            めったに涙したりしないんだけどな、でもなんでかな、こぼれ落ちてくるんだ
            <br><br><br><br>
            </p>
            <p>
            [Pre-Chorus]<br>
            When I’m thinkin’ ‘bout you (ooh, no, no, no)<br>
            君のことを考えてるとさ<br><br>

            I been thinkin’ ‘bout you (you know, know, know)<br>
            ずっと君のこと考えてるんだ<br><br>

            I been thinkin’ ‘bout you<br>
            君のことをずっと考えてる<br><br>

            Do you think about me still?<br>
            君は僕のことまだ想ってるのかい?<br><br>

            Do you, do you?<br>
            どうなんだい？<br><br><br><br>
            </p>

            <p>[Chorus]<br>
            Or do you not think so far ahead (ahead)?<br>
            君はずっと先のこととか、考えたりしないのかい?<br><br>

            ‘Cause I’ve been thinkin’ ‘bout forever (Oooh, oooh)<br>
            こっちはあれからずっと想い続けてるのに<br><br>

            Or do you not think so far ahead (ahead)?<br>
            君は二人の未来を考えたりしないのかい?<br><br>

            ‘Cause I’ve been thinkin’ ‘bout forever (Oooh, oooh)<br>
            なんでかって、僕はずっと考えてるからだよ<br><br><br><br>
            </p>
            <p>
            [Verse2]<br>
            No, I don’t like you, I just thought you were cool<br>
            別に君のことが好きなわけじゃないんだ、ただちょっとイイなって思ったくらいで<br><br>

            Enough to kick it<br>
            まあイチャつくには十分だったね<br><br>

            Got a beach house I could sell you in Idaho<br>
            アイダホにビーチハウスがあるから、君にあげても良かったんだけど<br><br>

            Since you think I don’t love you, I just thought you were cute<br>
            別に僕には好かれてないって思ってるんだろ?  いやただ可愛いなって思っただけなんだ<br><br>

            That’s why I kissed you<br>
            それが君にキスした理由ってわけだよ<br><br>

            Got a fighter jet, I don’t get to fly it, though<br>
            ジェット機も持ってるんだ、まあ操縦できないんだけどね<br><br><br><br>
            </p>

            <p>
            [Pre-Chorus]<br>
            I’m lyin’ down thinkin’ ‘bout you (ooh, no, no, no)<br>
            寝転がって、君のことを想い続けてる<br>
            (lyin’は「嘘を付いている」ことを裏付ける言葉遊びです）<br><br>

            I’ve been thinkin’ ‘bout you (you know, know, know)<br>
            ずっと君のこと考えてるんだ<br><br>

            I’ve been thinkin’ ‘bout you<br>
            ずっと考えてる<br><br>

            Do you think about me still?<br>
            君はまだ僕のこと考えてる?<br><br>

            Do you, do you?<br>
            どうなんだい？<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            Or do you not think so far ahead (ahead)?<br>
            君はずっと先のこととか、考えたりしない？<br><br>

            Cause I’ve been thinkin’ ‘bout forever (Oooh, oooh)<br>
            こっちはあれからずっと想い続けてるからさ<br><br>

            Or do you not think so far ahead (ahead)?<br>
            将来のこととか考えたりしないのかい?<br><br>

            ‘Cause I been thinkin’ ‘bout forever (Oooh, oooh)<br>
            だって僕はずっと考えてるんだ<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            Yes, of course<br>
            ああ、もちろんそうだよ<br><br>

            I remember, how could I forget (how could I forget)?<br>
            覚えてるよ、君を忘れられるわけないだろ<br><br>

            How you feel (how you feel)?<br>
            君はどんな気持ちなんだい?<br><br>

            You know you were my first time (time).<br>
            わかってるだろ、君が初めてだった<br><br>

            A new feel<br>
            あんな気持ちになったのは初めてだったんだよ<br><br>

            It won’t ever get old, not in my soul,<br>
            それは色褪せることないもの<br><br>

            Not in my spirit, keep it alive (spirit, keep it alive)<br>
            今でも心に生き続けてる<br><br>

            We’ll go down this road<br>
            僕らはこの先も歩んでいくんだ<br><br>

            ‘Til it turns from color to black and white<br>
            白と黒のモノクロに変わるまでね<br>
            (ここでの”モノクロ”に変わるまでというのは、
            「オズの魔法使い」で主人公ドロシーが長い冒険を終え、元に戻ってきた世界が白黒だったことから→冒頭の台風も繋がってきます）
            </p><br><br><br><br>
            <p>
            [Chorus]<br>
            Or do you not think so far ahead (ahead)?<br>
            君はずっと先のこととか、考えたりしない？<br><br>

            Cause I’ve been thinkin’ ‘bout forever (Oooh, oooh)<br>
            こっちはあれからずっと想い続けてるからさ<br><br>

            Or do you not think so far ahead (ahead)?<br>
            将来のこととか考えたりしないのかい?<br><br>

            ‘Cause I been thinkin’ ‘bout forever (Oooh, oooh)<br>
            だって僕はずっと考えてるんだ<br><br><br><br>
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
            <form action="{{ route('Thinkin_Bout_You.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="2">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Start') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Fertilizer') }}">NEXT</a>
            
            </div>
            </div>    
        </div>
    </div>
</div>

</body>
</html>   
