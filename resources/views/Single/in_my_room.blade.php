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
            <h2>In My Room</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/PtvlmOsNV4E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- 随時変更 -->
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2019
                <br>
                Produced by :  Frank Ocean & Michael Uzowuru
                </h3>  
                <p> ” DHL “と同じように「性とドラッグ」について語りながら、彼が音楽業界をどのように生きてきたか<br>
                という彼の心境が、この作品では明かされる。また、LGBTQのコミュニティのために「PrEP+」を催したこともあり、<br>
                ” ポッパーズ “というゲイコミュニティの間で流行したドラッグの名前などがリリック中で登場することも、<br>
                「2019年時点の彼らしさ」の一つとしてこの楽曲に表現されている。



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
            No sleeper seats, that’s a mattress<br>
            No sleeper seats, that’s a mattress<br>
            寝台席なんてナシさ、あれはマットレスだぜ<br>
            (彼は飛行機などでマットレス付きのファーストクラスに乗っています)<br><br><br><br>

            (Sleep)<br><br>

            You ain’t stingy, split your tablets with me<br>
            君は気前が良いから、錠剤を半分にして、俺に分けてくれる<br>
            (錠剤 = ドラッグのことでしょうか)<br><br>

            You won’t flinch when camera flashing, flashing<br>
            カメラにフラッシュを焚かれても、君は怯んだりしない<br><br>

            Not fake laidback, no it’s natural<br>
            その落ち着きはフェイクなんかじゃない、生まれつきのものさ<br><br>

            And I think you made for the life I lead<br>
            君は俺の人生のために生まれてきたと思うんだ<br><br>

            I’m not fake patient, I don’t fake sick<br>
            俺はフェイクな病人なんかじゃない、仮病なんか言ったりしないぜ<br><br>

            That kinda coffin don’t need lean, rest in peace<br>
            棺桶にはリーンなんて必要ない、安らかに眠ってくれ<br>
            (リーンは咳止めシロップを用いるドラッグ。亡くなった後はストレスなどなく安らかに過ごせることを示しています。<br>
            ” Coffin – 棺桶 “と” 咳をする – Coughing “をかけています)<br><br>

            Got this lust for life<br>
            人生をかけられることを見つけたんだ<br>
            (音楽のことでしょう)<br><br>

            Horny for the game (Yeah)<br>
            このゲームに興奮してるのさ<br>
            (ここから音楽の世界（ゲーム）と、人間関係（恋愛）を比較しながら語ります)<br><br>

            First they kiss, then they bite soft (Yeah)<br>
            あいつらみんなキスをしたと思ったら、優しく噛み付いてくる<br>
            (彼はメジャーレコード会社と契約をした後、その契約に不満を持ち、「Blonded」という独自のレーベルを立ち上げました。最初は優しく近づいてくるビジネスマンたちに、牙を剥かれたわけですね)<br><br>

            Then that bitch wanna play it off (Huh?)<br>
            と思ったら、ビッチたちは本心を誤魔化そうとするんだ (なんだよ？)<br><br>

            Fuck it, I’m pretty still in a pit of snakes<br>
            クソだね、俺はまだ、ヘビたちに四方を囲まれてるんだ<br>
            (” Snake – ヘビ “は裏切り者を意味する言葉)<br><br>

            Where serpents shake, some brand new scales<br>
            ヘビが現れれば、そこには新たな天秤が生まれる<br><br>

            I need a new face, I’m tired of these weirdos<br>
            新しい「顔」が欲しいよ、もう気味の悪い奴らには疲れたんだ<br>
            (私生活とアーティストとしての自分を分けたいんですね。NYTimesが2016年に行なったインタビューでも同じことを言っています)<br><br>

            Acting familiar, took all the rock<br>
            仲良いフリしやがってさ。ロックの世界を制すれば<br><br>

            And turned it to pop, they think that they Elvis<br>
            ポップスに生まれ変わる、みんな自分のことをエルヴィスだと思ってる<br>
            (エルヴィス・プレスリーはロックンロールの王様と呼ばれ、ポップ・ミュージックを作り上げました)<br><br>

            Plenty ungrateful, they don’t say thank you<br>
            恩知らずなやつばっかりだよ、あいつらみんな「ありがとう」の一言もない<br><br>

            They don’t say grace, not even for meals, not even for millions<br>
            お祈りさえしないんだ、飯を食う時もだぜ、どんな大金を手にしても感謝ができないんだ<br><br>

            Fuck it I’m pretty still, look at my deal<br>
            それってクソだよな、俺はまだ自分の契約書を見つめてる<br>
            (彼の契約には多大な金銭が含まれます。彼はまだお金や宝石などの魅力に取り憑かれていると)<br><br>

            Richard Mille, look at my ears, flooded with diamonds<br>
            リチャード・ミル、俺の耳を見てくれよ、ダイアモンドで埋め尽くされてるぜ<br>
            (リチャード・ミルは高級時計のブランド)<br><br>

            Look at my skills, running through blocks like 49ers<br>
            俺のスキルをよく見ておけよ、49ersみたいにブロックをすり抜ける<br>
            (49ersはサンフランシスコに拠点を置くアメフト・チーム)<br><br>

            Forty-nine diamonds, stuffed in my bracelet<br>
            49もダイアモンドをつけてるんだ、ブレスレットにぶら下がってる<br><br>

            That cost a whop, that cost a whopper<br>
            めちゃくちゃな値段だよ、途轍もないコストさ<br>
            (彼はプラスチック製の花柄のブレスレットをつけていましたが、最近、そのブレスレットを全てダイアモンドに作り替えました。<br>
            元はバーガーキングの” Whopper “のような安いブレスレットだったのに、途轍もなく（Whopper）高価なものに変わったんですね)<br><br>

            And it ain’t new, I had to knot at John Ehret in my locker<br>
            新しくなんかないさ、このブレスレットはJohn Ehretのロッカーに結んでおいたものだから<br>
            (” John Ehret “は彼の出身高校のこと)<br><br>

            Pretty still, it ain’t no pretty pill<br>
            ずっと変わらないのさ、錠剤なんかじゃない<br><br>

            It’s either real or real<br>
            選択肢はリアルかリアル。フェイクなんてありえない<br><br>

            Real easy on the eyes, green like a soccer field<br>
            リアルは目に映りやすい、サッカーコートのように緑に染まってる<br><br>

            Skin hot, when they try me like them poppers feel<br>
            アツくなってきた、あいつらポッパーズみたいに俺を試そうとしてる<br>
            (ポッパーズはゲイコミュニティの間で流行したドラッグ。肛門の筋肉を緩ませる効果があるそう)<br><br>

            Hands shaking, norepinephrine levels sky, rocket fuel (Rocket)<br>
            手を握りながら、ノルアドレナリンが空まで高まって（ハイになって）、まるでロケットの燃料みたいだ<br>
            (性的な興奮をロケット燃料に例えて表しています)<br><br><br><br>


            </p>

            <p>
            [Bridge]<br>
            Quit being violent with me (Yeah, why?, why?)<br>
            俺に暴力的になるのはやめてくれ<br><br>

            Quit being violent with me<br>
            Quit being violent with me<br>
            乱暴するのはやめてくれよ<br><br>

            You make me violent<br>
            君は俺を暴力的にするんだ<br><br>

            [Outro]<br>
            My room, my room, my room with me<br>
            Every night you were in my room<br>
            俺の部屋で君と一緒にいるんだ、毎晩君は俺の部屋にいる<br><br>

            My room, my room with me<br>
            俺の部屋で、俺と二人きり<br><br>

            I guess I can’t state my feelings too soon<br>
            俺はきっとこの気持ちをすぐに伝えることはできないよ<br><br>

            I don’t know you<br>
            君のことよく知らないから
            <br><br>
            And I can’t put no threats in the air<br>
            二人の空気を急かしたくもないから<br><br><br><br>
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
            <form action="{{ route('In_My_Room.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="42">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/DHL') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Dear_April') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
