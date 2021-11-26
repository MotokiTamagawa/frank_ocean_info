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
            <h2>13: Monks</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lhJOtFGJRpo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 13
                <br>
                Year : 2012
                <br>
                Produced by :Frank Ocean, Om’Mas Keith & Malay
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
            [Verse 1]<br>
            Mosh pits and bare chest<br>
            モッシュ・ピットとむき出しの胸<br><br>

            Stage diving sky diver<br>
            ステージからダイブする、まるでスカイダイバー<br><br>

            Spray the crowd with cold water<br>
            冷たい水を観客に撒き散らして<br><br>

            Now it’s mosh pits and wet tits<br>
            みんな揉みくちゃになって、胸は水でびっしょり<br><br>

            I think I need a cold shower<br>
            だから冷たいシャワーを浴びたくなったのさ<br><br>

            Cool waters<br>
            冷たいシャワーをね<br><br>

            African girl speaks in English accent<br>
            アフリカン・ガールがイギリス訛りで喋ってる<br><br>

            Likes to fuck boys in bands<br>
            うちのバンドのメンバーとヤりたいみたいだ<br><br>

            Likes to watch Westerns<br>
            君は西部劇を見るのが好きなんだろ<br>
            (馬乗りになるのが好きというわけですね)<br><br>

            And ride me without the hands<br>
            手も使わずに俺に乗るんだ<br><br>

            Show me her passport<br>
            君のパスポートを見せてくれよ<br><br>

            She’s on her own tour<br>
            彼女も今ツアー中みたいだ<br>
            (フランクと同じように彼女も家を離れているんですね）<br><br>

            But you’re beautiful to me<br>
            でも君は美しいから<br><br>

            Wave em high girl to the sky<br>
            打つ波が、空までこの子を連れて行く<br>
            (フランクの” 上 “に乗っていた彼女は、その喜び・快感に包まれ、空高くまで” ハイ “になるんですね）<br><br>

            But you’re beautiful to me<br>
            でも君は本当に美しいんだ<br><br>

            Live in the clouds<br>
            雲に包まれて生きてゆく<br><br>

            Wave em high girl, to the sky<br>
            打つ波が、空までこの子を連れて行く<br><br>

            But you’re beautiful to me<br>
            でも君は本当に美しいんだ<br><br>

            Life in the clouds<br>
            空の上で過ごすのさ<br><br>

            Keep em high ya’ll<br>
            みんなずっとハイのまま<br><br>

            Beautiful stars<br>
            美しい星々が<br><br>

            In the sky<br>
            空にはあるから<br><br><br><br>
            </p>
            <p>
            [Verse 2]<br>
            Monks in the mosh pit<br>
            モッシュの中には僧侶が<br><br>

            Stage diving Dalai Lama<br>
            ダライ・ラマがステージからダイブする<br>
            (僧侶にとってダライ・ラマは尊敬の対象。ステージからダイブする自身 (アーティスト）の姿とダライ・ラマを重ねています)<br><br>

            Feet covered in cut flowers<br>
            足はカットされた花びらで覆われてる<br>
            (仏教の教えにはハスの花がよく登場します。お釈迦様の仏像などは、よくハスの花の上に立っていることがあります)<br><br>

            They mosh for enlightenment<br>
            彼らは自分を高めるために体をぶつけてるんだ<br>
            (仏教徒と観客を対比させています)<br><br>

            Clean chakra, good karma<br>
            清いチャクラ、善良なカルマ<br><br>

            One with the water<br>
            水で清められるのさ<br><br>

            Indian girl sleeps above the temple<br>
            インドの女の子が寺院の上で眠りについてる<br><br>

            Planning a runaway, young at heart<br>
            脱走の計画を練ってるんだ、でも心は若いままだから<br><br>

            You found a boyfriend<br>
            君はボーイフレンドを見つけて<br><br>

            And now you wanna get away, get away<br>
            そこを抜け出したくなったんだろ<br><br>

            Just a virgin lover on a getaway, get away<br>
            愛するヴァージンはそこから逃げるのさ<br><br>

            And at sunset they’re gonna try and get away, get away<br>
            日が落ちたら、あいつらは逃げようと必死になるのさ<br><br>

            Abhaya Mudra<br>
            アバヤー・ムドラ<br>
            (「恐れなくても良い」という意味で、手を差し出すサイン)<br><br>
            </p>
            <p>
            [Bridge]<br>
            I never ask for much<br>
            お願い事なんてしないから<br><br>

            But please keep up lover<br>
            ただ愛する人にそばにいて欲しいんだ<br><br>

            We’ve got no choices left<br>
            もう俺たちに選択肢は残されてない<br><br>

            The running’s fast<br>
            足取りは早くなる<br><br>

            Run run run run<br>
            走って、ただ走るんだ<br><br>

            You’re beautiful to me<br>
            君は本当に美しい<br><br>

            Run run run run you’d better run<br>
            走れ、走るんだ、君は走らない<br><br>

            You mean so much to me<br>
            俺にとって君は本当に大事な存在だから<br><br>

            In my world, my world<br>
            俺の世界の中でさ、俺の世界で<br><br><br><br>
            </p>
            <p>
            [Verse 3]<br>
            We made it safely<br>
            俺たちは上手く逃げられた<br><br>

            Even with your father’s army trailing us<br>
            たとえ、君のお父さんが軍隊で俺たちを引きづり回しても<br><br>

            We escaped him<br>
            俺たちは彼から逃げられたのさ<br><br>

            Even with his archer’s bows at our backs<br>
            たとえ、兵隊が俺たちの背中に弓矢を命中させてもさ<br><br>

            What a great escape<br>
            まさに大脱出って感じだろ<br><br>

            But there’s a long way still in fact<br>
            でも実際はここからが長い道のりでさ<br><br>

            We’re lost in a jungle underneath these clouds<br>
            今俺たちは雲の下、ジャングルの真ん中で迷子になってる<br><br>

            There’s a monsoon that never ends<br>
            ここの雨期は永遠に終わることがない<br><br>

            A coke white tiger woke us from our slumber<br>
            二人の眠りは真っ白なホワイト・タイガーに覚まされた<br>
            (” coke “というワードからコカインが連想されます)<br><br>

            To guide and protect us til the end<br>
            終わりを迎えるまで、俺たちを導き、守ってくれるんだ<br>
            (中国や東南アジアではホワイト・タイガーは魔除けや神として崇敬の対象になっているそう）<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            We’re in the clouds<br>
            俺たちは雲の中にいる<br><br>

            Wave em high now to the sky<br>
            打つ波が、空までこの子を連れて行く<br><br>

            But you’re beautiful to me<br>
            でも君は本当に美しいんだ<br><br>

            Keep em high ya’ll show you right<br>
            みんなハイのままで、正しい方向に導くよ<br><br>

            But you’re beautiful to me<br>
            でも君は本当に美しい<br><br>

            Beautiful<br>
            美しいんだ<br><br><br><br>
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
            <form action="{{ route('Monks.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="13">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/White') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Bad_Religion') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
