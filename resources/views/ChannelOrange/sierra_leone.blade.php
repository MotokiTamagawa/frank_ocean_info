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
            <h2>4: Sierra Leone</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wyGhypto5m4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 4
                <br>
                Year : 2012
                <br>
                Produced by :   Malay
                </h3>  
                <p>Sierra Leone – シエラ・リオネ “は西アフリカに位置する共和国。ダイアモンドの採掘量が非常に多く、<br>それを密輸出することで内戦の資金を生み出していることから、<br>カニエ・ウエストの” Diamonds From Sierra Leone “など<br>ヒップホップ/ラップの作品には頻繁に登場するテーマとなっています。
                <br>リリックは、孤独を生きる一人の若者がある女性と関係を持ち、<br>二人の間に新しい生命を授かることがテーマになっています。
            </p>
                
        </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            (We’re was spendin’ too much time alone)<br>
            (俺たちは一人の時間を過ごしすぎていた)<br><br>

            Spendin’ too much time alone<br>
            一人で居すぎたんだ<br><br>

            (And I just ran outta Trojans)<br>
            (俺はちょうどTrojansを使い果たしたとこで)<br>
            (” Trojans “はアメリカで有名なコンドームのブランド)<br><br>

            Horses gallop to her throne<br>
            ギャロップが彼女の王座まで辿り着くのさ<br>
            (性行為を比喩的に表現しています。先ほど「コンドームを使い果たした」というラインがあったことにも注目です）<br><br><br><br>
            </p>
            <p>
            (We’re behaving like teenagers)<br>
            (俺たちはまるでティーンエイジャーみたいに振舞って)<br><br>

            We’re behaving like teenagers<br>
            俺たちまるでティーンエイジャーみたいに振舞ってさ<br><br>

            (Making less than minimum wage)<br>
            (最低賃金よりも稼げねえ)<br><br>

            Still inside our parents’ homes<br>
            未だに両親の家の中から出れずに<br><br>

            (No, I don’t live in Denver)<br>
            (違うんだ、俺はDenverには住んでいない）<br><br>

            No, I don’t live in Denver<br>
            違うんだよ、俺はDenverに住んでないんだ<br><br>
            (コロラド州デンバーはゴールド・ラッシュが行われていた当時の金鉱が有名な街。タイトルのシエラ・リオネもダイアモンドで有名な国なことから)<br><br><br><br>
            </p>
            <p>
            (I grew up in Sierra Leone)<br>
            (俺はシエラ・リオネで育ったんだ)<br><br>

            And her pink skies will keep me warm<br>
            ピンクの空が俺を温めてくれるんだろうな<br>
            (シエラ・リオネは西アフリカに位置する国。鮮やかな朝日・夕日が昇る様子が頭の中に浮かびます)<br><br>

            Sierra Leone<br>
            シエラ・リオネ<br><br>

            Sierra Leone<br>
            シエラ・リオネ<br><br><br><br>
            </p>
            <p>
            Tid bits of intuition that I be gettin’ abandon mission<br>
            ミッションを中止しようとした、それはほんの少しの本能で<br><br>

            (Sierra Leone)<br>
            (シエラ・リオネ)<br><br>

            Abandon mission, you must be kiddin’, this shit feelin’ different<br>
            ミッションを取りやめるんだ、冗談って言ってくれよ、嫌な予感がするから<br><br>

            Shit feelin’ too good to me<br>
            俺にはその素晴らしい事実は、受け入れらなくてさ<br>
            (先ほど避妊をせずに性行したことから、新たな生命を授かったことが示唆されています。そんな素晴らしい事実も” ティーンエイジャー “みたいに振る舞う彼には、受け入れられないものだったと)<br><br>

            Glistening, shimmerin’ underneath the sunlight, the sunlight<br>
            キラキラ輝く、太陽の光を浴びてさ、太陽の光の下で<br><br>

            (Sierra Leone)<br>
            (シエラ・リオネ)<br><br><br><br>
            </p>
            <p>
            And a new day will bring about the dawn<br>
            新しい一日が朝日を運んできてくれる<br><br>

            And a new day will bring another crying babe into the world<br>
            新しい一日が、また一人” 赤子 “を世界に運んでくるのさ<br><br>

            (Girl now)<br>
            (ガール、さぁ)<br><br>

            Our daughter’s reaching for your nipple cause it’s time for her to eat<br>
            俺たちの娘が君の乳房に手を伸ばしてる、彼女も食事の時間みたいだ<br><br>

            Tonight I’ll lay her in the cradle if it’s time for go to sleep<br>
            夜になれば、俺は彼女をゆりかごに寝かせて<br><br>

            I’ll sing a Lennon lullaby, she can have a pretty dream<br>
            Lennonのララバイを歌うんだよ、彼女がいい夢を見られるようにさ<br>
            (ザ・ビートルズ” Good Night “から。Lennonはジョン・レノンのこと)<br><br>

            Baby girl if you knew what I know, knew what I know<br>
            君が俺の気持ちを知っていてくれたらな、ベイビー・ガール<br><br>

            Na, na na, na na, na…<br>
            Na, na na, na na, na…<br><br><br><br>
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
            <form action="{{ route('Sierra_Leone.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="4">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Fertilizer') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Sweet_Life') }}">NEXT</a>
            
            </div>
            </div>    
        </div>
    </div>
</div>

</body>
</html>   
