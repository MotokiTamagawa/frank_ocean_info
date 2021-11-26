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
            <h2>Chanel</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XnbsIl2BnWw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2017
                <!-- <br>
                Produced by : Midi Mafia -->
                </h3>  
                <p> 文字通りあの” シャネル “をタイトルに用いたわけなんですが、その理由は、シャネルのロゴの持つ2面性に<br>
                あったようです。シャネルといえば” C “の文字が対になって重なっているロゴですが、そのロゴと自身の<br>
                バイセクシャルという2面性を重ねて、比喩表現としてシャネルを用いています。リリック冒頭では、<br>
                フランクの彼氏が「女の子みたいに可愛い」という面、「男らしく喧嘩した話がある」という面の<br>
                2つを持ち合わせていることが語られます。表面上は男らしく振る舞う彼も、彼氏であるフランクの前では女の子<br>
                のように可愛いという両面性、2面性を持っているということですね。この「二面性」は『blonde』や<br>
                『Channel Orange』など彼の過去の作品にも随所に表れています。そして今曲のリリックには<br>
                ” Shibuya “という言葉も出てきます。渋谷で警察に黒人であるために犯罪者だと思われたエピソードが<br>
                語られていて、「俺が誰だからわからないのか？」と問いかけます。音楽では神のように賞賛されたにも関わらず、<br>
                極東の地に降りて、自分のことを黒人というだけで見下してくる警察に対して批判を送っています。ある意味ここも<br>
                ” 二面性 “なわけですが、日本にこういった黒人への差別意識が根強く残っていることがよくわかる箇所になっています。<br>
                性的な表現もあるんですが、フランク・オーシャンの楽曲はいやらしさみたいなものが感じられないような気がします。
                    

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
            My guy pretty like a girl<br>
            俺の彼氏は女の子みたいに可愛くて<br><br>

            And he got fight stories to tell<br>
            でも男らしく喧嘩した話も持ってるんだ<br><br>

            I see both sides like Chanel<br>
            シャネルみたいに両面が見えるよ<br><br>

            See on both sides like Chanel<br>
            シャネルのように二つの面を持ってるんだ<br><br>

            Swimming laps through pool water<br>
            プールで泳ぎ回って<br><br>

            Heated like I’m underworld<br>
            地獄みたいに熱されるんだ<br><br>

            Hide my tattoos in Shibuya<br>
            渋谷ではタトゥーを隠さないとな<br><br>

            Police think I’m of the underworld<br>
            警察は俺のこと犯罪者だと思ってるから<br><br>

            12 treat a nigga like he 12<br>
            警官は黒人の俺をまるで12歳みたいに扱うんだ (12は警察のこと)<br>

            How you looking up to me and talking down?<br>
            俺の顔を見上げてるけど、心の中では見下してるんだろ？<br>
            (身長はフランクの方が高く、警官は見上げて話しているということ)<br><br>

            Can’t you see I am the big man?<br>
            俺がビッグな男だってわからないのか？<br><br>

            God level I am the I am (whoa)<br>
            神の領域だっていうのにさ、俺は俺だよ<br>
            (職務質問されている光景が思い浮かびます。名前や職業を聞かれて答えるも彼を知らない日本の警察が衝撃だったんでしょう)<br><br>

            Now film it with that drone cam<br>
            ドローンのカメラで撮ってくれよ<br><br>

            In the pink like Killa Cam<br>
            Killa Camみたいにピンクを纏ってさ<br>
            (Killa CamとはラッパーのCam’ronのこと。またフランクは『Pink Matter』で、ピンクを性的な意味合いでも用いている)<br><br>

            Put a zoom on that stick; Noé<br>
            Gasper Noeみたいにズームするんだ<br>
            (Gasper Noeはセックステープを撮影しているフィルムメイカー、空撮など特殊な撮影で有名です)<br><br>

            Up so close I’m on that kill<br>
            近くまでアップして、迫るのさ<br><br>

            Remote controller on your lower back<br>
            腰に取り付けたリモコンで操作するんだ<br><br>

            Yes, the good<br>
            イエス、いい感じだ<br><br>

            Dick could roll the eyes back in the skull<br>
            アソコの快感で骨の裏側まで白目を剥いちまうよ<br><br>

            Rolling when you ride, poppin’<br>
            君が上に乗ると白目を剥くほどなんだ<br><br>

            Rolling when you ride, ride the Rodman<br>
            君が上に乗ると白目を剥いてしまうね、ロッドマンみたいさ<br>
            (nbaのスタープレイヤー、ロッドマンもバイセクシャルで知られています)<br><br>

            Got one that’s straight acting<br>
            彼はストレートを演じてたけど<br><br>

            Turnt out like some dirty plastic (Ride)<br>
            そうじゃないってわかってからは、使い終わったゴムだらけだよ<br>
            (冒頭にも述べられていた通り、フランクの彼氏は表面上は喧嘩の武勇伝を語るような男らしいストレートな人間であるということ)<br><br>

            2016 burnt some discs<br>
            2016年はディスクをたくさん焼いて<br>
            (blondeをリリースした年）<br><br>

            2017 ideas playing off a Walkman<br>
            2017年は曲のアイデアとしてカセットをウォークマンで再生してたんだ<br><br>

            This a cult, not a clique on the net<br>
            これはカルトだよ、ネットにいる小さな集団とかじゃない<br><br>

            With a cup in a cup, Actavis<br>
            ダブルカップさ、アクタビスだよ<br>
            (アクタビスはリーンのシロップを製造している会社です)<br><br>

            That’s a double edge, “issa knife”<br>
            ダブルエッジ、諸刃の剣さ、issaナイフってやつかな<br>
            (21savageの額のタトゥーのことです)<br><br>

            And I don’t like to fight ‘til I’m fighting<br>
            争いたくはないんだ、こっちがマジにならない限りはね<br><br>

            Revenge in the air make my lungs sick<br>
            復讐だなんて体に悪いね<br><br>

            Chopper in the sky like a gun trick<br>
            空を飛ぶヘリのように銃を宙にくるくる舞わせるんだ<br><br>

            Clips on clips like Mike<br>
            マイクみたいにクリップにクリップを重ねてる<br>
            (Mike Alfredのこと。タイラー・ザ・クリエイターのビデオなどを手がけています。クリップは映像のことですが、銃という意味のスラングでもあり、かけています)<br><br>

            It’s really all<br>
            何でもアリなんだよ<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            I see both sides like Chanel<br>
            シャネルみたいに両面が見えるよ<br><br>

            See on both sides like Chanel<br>
            まるでシャネルみたいに二つ目の面を持ち合わせているんだ<br><br><br><br>
            </p>

            <p>
            [Bridge]<br>
            It’s really you on my mind<br>
            俺の心は君でいっぱいなんだ<br><br>

            It’s really you on my mind<br>
            俺の心は君でいっぱいさ<br><br>

            It’s really you<br>
            君でいっぱいなんだ<br><br>

            It’s really you on my mind<br>
            俺の心の中は君でいっぱいだ<br><br><br><br>
            </p>

            <p>
            [Verse 2]<br>
            V both sides of the 12<br>
            Vの両面には12の文字<br>
            (アストンマーチンV12のこと。ここでも彼の車愛が表れています)<br><br>

            Steam both sides of the L<br>
            葉っぱを両面から吸うんだ<br>
            (葉っぱを両端から吸うことはできません。不可能なことも可能にしてしまう。という比喩です)<br><br>

            Freeze smoke rings and they hail<br>
            葉っぱの煙で円を描いて、それを冷やすと、雹が降りそそぐ<br><br>

            Sleet snow grind for the wealth<br>
            みぞれ雪だらけの富への道さ<br>
            (雪だろうとみぞれだろうと彼の成功への道を止めることはできません)<br><br>

            Whole team diamonds is real<br>
            俺の仲間たちはリアルなダイヤモンド揃いだ<br><br>

            Showed ‘em how to shine by theirselves<br>
            彼ら自身がその輝きを示す方法はわかってる<br><br>

            You need a cosign for your health<br>
            体には気をつけろよ<br><br>

            I need that bitch to grind on my belt<br>
            俺のベルトを取っちまうくらいのビッチが必要だよ<br><br>

            I know you need to try for my belt<br>
            君はこのベルトが欲しいんだってわかってる<br>
            (ボクシングなどのチャンピオンベルトも彷彿とさせます)<br><br>

            I know you seen it driving itself<br>
            その車が自動で運転するの見たことあるだろ<br><br>

            No matte black on the ride ‘cause it’s stale<br>
            マットなブラックな塗装するのはナシだね、だって古くさいだろ<br><br>

            But it’s stealth<br>
            でもそれってステルスだよな<br>
            (テスラの自律走行車はすごく静かなので、その車に黒の塗装をすれば、まさに”ステルス”というわけです）<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            I see both sides like Chanel<br>
            シャネルみたいに2つの面があるんだ<br><br>

            I see both sides like Chanel<br>
            シャネルみたいに2つを兼ね備えてる<br><br><br><br>
            </p>

            <p> 
            [Outro]<br>
            My pockets snug<br>
            金でポケットがいっぱいになって<br><br>

            They can’t hold my 7<br>
            自分の携帯すら入らないよ<br><br>

            They banned my Visa<br>
            あいつら俺のビザや<br><br>

            My Amex and Mastercards<br>
            アメックス、マスターカードまで使用禁止にしてきた<br>
            (フランクの買い物が高額すぎてカード会社に使用を制限されてしまいます)<br><br>

            I got new money<br>
            だから新しく金を稼いできたよ<br><br>

            And it’s all cash<br>
            それに全部現金でね<br><br>

            I got new bags<br>
            新しいバッグをゲットしてきた<br><br>

            And they all collabs<br>
            それに全部コラボものだよ<br><br>

            I rubber band a bunch of thousand dollar Delta gift cards<br>
            (I mean my baby bi)<br>
            俺は1000ドル分のデルタ航空のカードを紐でまとめてるんだ<br>
            (マイベイビー買い物しようぜ)<br>
            (BuyとBi – バイセクシャルをかけています)<br><br>

            Amazing the cash online unknown<br>
            匿名で買い物できるなんてすげえよな<br><br>

            (I mean my baby bi)<br>
            (ベイビー買い物しようぜ)<br><br>

            Blazing the dash, counting money at home<br>
            葉っぱを炙りながら、家で金を数えるんだ<br><br><br><br>
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
            <form action="{{ route('Chanel.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="36">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Swim_Good') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Biking') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
