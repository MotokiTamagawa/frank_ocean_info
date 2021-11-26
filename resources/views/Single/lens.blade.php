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
            <h2>Lens V2(feat. Travis Scott)</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HE6hpNS2i6Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2017
                <!-- <br>
                Produced by : Midi Mafia -->
                </h3>  
                <p> リミックスバージョンである” V2 “はトラヴィス・スコットを迎え、二人の初めての<br>
                コラボレーションとなった一曲に。曲中では、彼らが「常にレンズを通して見られている」という<br>
                感覚を歌っています。彼らはスターであり、パパラッチなどは彼らを追い続けます。どんなところでも、<br>
                彼らは監視されているという感覚を常に感じているということですね。” Nights “などのリリックにもあった<br>
                ように、3人称視点からフランク自身を客観視して語るラインが冒頭からあるので、それを意識しながら<br>
                読むと、より解釈しやすいかもしれません。シングルのジャケットは、画家ケリー・ジェームズ・マーシャルの<br>
                ”  A Portrait of the Artist as a Shadow of his Former Self “にインスパイアされたもの<br>
                だとされています。
                    

            </p>    
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Verse 1: Frank Ocean]<br>
            My girl made him wait ‘til the hours of the night<br>
            俺の彼女は彼を夜まで待たせてる<br>
            (彼はフランク・オーシャン自身のこと。ここから、自身のことを他人の視点から語っていきます)<br><br>

            Then hit you with the, “You know it’s mid, right?”<br>
            だから君にこう連絡するんだ「もういい時間じゃない？そうでしょ？」って<br>
            (夜も更けてきたということ)<br><br>

            Can’t be on time for the free rides<br>
            下道じゃきっと時間には間に合わないよ<br>
            (彼は彼女の元に向かいます)<br><br>

            Can’t be my type, I’m a low life<br>
            彼は同じタイプではないね、だって俺は本当に弱い人間だから<br>
            (冒頭と同じ視点です。しかし、ここに関しては、フランクオーシャンの「心の内側」からの視点のようにも思えます。外見では強くしっかりした人間のように見えても、心の内側は非常に弱いと)<br><br>

            Crammed in some time, now I’m your whole life<br>
            色々な出来事があったけど、今じゃ俺はお前(ら)の全てだろ<br>
            (彼女に向けて。ファンに向けて、とも取れます)<br><br>

            Can’t make those calls in the low light<br>
            でも、この薄明かりの中じゃ、電話なんてかけられないよ<br><br>

            Are you ready to go? We gon’ be waitin’ in line<br>
            もう準備はできたかい？きっと君も俺も待つことになるだろうから<br><br>

            Yeah you look good, would I fuck? Yeah<br>
            君は大丈夫そうだね、俺はヤるのかな？そうだね<br><br>

            Did I? Almost<br>
            俺はヤったのかって？大体はね<br><br>

            Back home with that, almost<br>
            ヤりかけたけど帰ってきたんだ<br><br>

            Back home with that, next time<br>
            帰ってきたんだ、次を約束してね<br><br>

            Bags with all that Rally’s in ‘em<br>
            バッグの中にはRally’sがいっぱいさ<br>
            (Rally’sはファストフードレストランのこと)<br><br>

            Trades with all the valley (Come on!)<br>
            Valleyをずっと進んでいくんだ<br>
            (カリフォルニアのSan Fernando Valleyのこと。地名です)<br><br>

            Top chopped down like blades came through the valley Freeway<br>
            Valleyの高速を剣みたいなオープンカーで通り過ぎたとこだよ<br><br><br><br>


            </p>

            <p>
            [Chorus: Frank Ocean]<br>
            Despite our history<br>
            俺たち二人には過去があるのにさ<br>
            (ここで視点はフランク自身からになります)<br><br>

            Somewhere in your nights, you’re stuck when you think of me<br>
            君は夜のどこかで、俺を考えて息詰まってるんだろ<br><br>

            Despite the life I lead<br>
            俺はこんな人生を過ごしてきたけど<br><br>

            All this life in me<br>
            俺の過ごしてきた人生はさ<br><br>

            Spirits watch me, pants down<br>
            誰もが俺も見てるんだ、パンツを降ろしてね<br>
            (彼の人生は普通の人とは明らかに異なります。曲のテーマにも繋がりますが、ファンたちは彼のことを常に見張っています。<br>
            パンツを降ろす = ファンたちが彼の活動に熱狂していることを表現)<br><br>

            Can’t be ‘barrassed of it<br>
            別に恥ずかしいわけじゃないさ<br>
            (先ほどのラインから、「bare-assed – 尻を出している」という風にも聞こえます)<br><br>

            I feel their smiles on me (Smiles on me)<br>
            俺はみんなが笑顔を見せてくれてるって感じてるんだ<br><br>

            I feel their smiles on me (Smile on me)<br>
            みんなが俺に向け笑ってるってね<br><br>

            I feel their smiles on me (Lens on me right now)<br>
            みんな俺に向けて笑ってくれてる (俺にレンズを当ててね)<br><br>

            Oh yeah, oh yeah<br><br><br><br>


            </p>

            <p>
            [Verse 2: Frank Ocean]<br>
            Throw team on back like I tatted the Mariah (Know I got some sins on me)<br>
            マライアのタトゥーみたいに、背中にはチームがついてるんだ<br>
            (俺は罪を背負ってるんだ)<br>
            (マライア・キャリーの元夫Nick Cannonの背中には彼女の名前のタトゥーが入っています。忠誠を誓っている点でキリスト教的な表現で、直後のラインに繋がります。チームとは信仰のことでしょう)<br><br>

            Then get the scream mask for the vert ride (Ridin’)<br>
            改造車に乗るために叫びのマスクを手にいれたよ<br>
            (叫びのマスク = キャラクター Ghostfaceのマスクのこと)<br><br>

            Weed smoke in the sky, picture what I’m realizin’ (Got some sins on me)<br>
            ウィードの煙が空に、俺が何を理解したかを表しているかのように<br>
            (俺は罪を背負ってるんだ)<br><br>

            Ain’t seen rainbows in the sky since college<br>
            大学時代から空に虹が見えなくなったよ<br>
            (大学をルイジアナで過ごした後、彼はLAやロンドンといった大都会に移り住んでいます)<br><br>

            This thing won’t last unless we’re both lyin’ (Both lyin’)<br>
            この関係は続かないよ、二人が嘘を付き合わない限りはね (二人がさ)<br><br>

            Fake flowers, no water needed<br>
            偽物の花束に、水は必要ないから<br><br>

            Real life drowned by the weekend<br>
            週末のせいで、リアルな生活は葬られる<br>
            (アルコールやドラッグなどを週末にやって、リアルな生活を忘れる様子が浮かびます)<br><br>

            No wins, call it timeless<br>
            煮え切らないよ、この関係はタイム・レスだから<br><br>

            No ends ‘cause you’re timeless (Timeless!)<br>
            終わりはないんだ、君はタイム・レスだから<br><br><br><br>


            </p>

            <p>
            [Chorus: Frank Ocean]<br>
            Despite our history<br>
            俺たち二人には過去があるのにさ<br><br>

            Somewhere in your nights, you’re stuck when you think of me<br>
            君は夜のどこかで、俺を考えて息詰まってるんだろ<br><br>

            Despite the life I lead<br>
            俺はこんな人生を過ごしてきたけど<br><br>

            All this life in me<br>
            俺の過ごしてきた人生はさ<br><br>

            Spirits watch me, pants down<br>
            誰もが俺も見てるんだ、パンツを降ろしてね<br><br>

            Can’t be ‘barrassed of it<br>
            別に恥ずかしいわけじゃないさ<br><br>

            I feel their smiles on me (Smiles on me)<br>
            俺はみんなが笑顔を見せてくれてるって感じてるんだ<br><br>

            I feel their smiles on me (Smile on me)<br>
            みんなが俺に向け笑ってるってね<br><br>

            I feel their smiles on me (Lens on me right now)<br>
            みんな俺に向けて笑ってくれてる (俺にレンズを当ててね)<br>

            Oh yeah, oh yeah<br><br><br><br>

            </p>

            <p>
            [Bridge: Frank Ocean]<br>
            Lionel got a lens, Janet got a lens<br>
            リオネルがレンズを手に入れたみたいだ、ジャネットも手に入れてる<br>
            (リオネルは彼の祖父、ジャネットは叔母さんです)<br><br>

            Matthew got a lens on me right now, yeah<br>
            今じゃマフューもレンズで俺を見てるんだ<br>
            (マフューは彼の少年時代からの友人Matthew Lacy)<br><br>

            Cleve got a lens, Kevin got a lens<br>
            クリーブも、ケビンもレンズを手に入れてる<br>
            (クリーブは、LGBT・AIDSの活動家Cleve Jonesのこと。ケビンはおそらくボーイズバンド・ブロックハンプトンのメンバー、ケビン・アブストラクトのこと。ゲイであることを表明していて、フランクオーシャンの大ファンです)<br><br>

            Know I got some sins on me right now<br>
            俺は今罪を背負ってるんだ<br><br>

            On me<br>
            On me, on me<br>
            On me, on me<br>
            On me, on me<br>
            On me, on me<br>
            On me, on me<br>
            俺の背にね<br><br><br><br>
            </p>

            <p>
            [Verse 3: Travis Scott]<br>
            Ayy roll up this<br>
            エイ、俺が来たよ<br><br>

            Yeah, cameras, cameras on me, I need tints (Watch, tints)<br>
            エイ、無数のカメラが俺に、車にスモークが必要だぜ<br>
            (トラヴィスもフランクと同じくパパラッチに囲まれます)<br><br>

            Smilin’ but inside I’m feelin’ bent (Watch, tints)<br>
            笑顔だよ、でも心の中は折れ曲がってる<br><br>

            Come direct, please I can’t take no hints (Yah! Yeah)<br>
            直接言えよ、ヒントなんて受け付けないから<br><br>

            Bicycles and pegs, yeah<br>
            自転車にペダル、エイ<br><br>

            Ride low, duck the feds, watch<br>
            低めに乗って、警察を巻くんだ、見てな<br><br>

            Du-rag on my head, yeah<br>
            ドゥーラグを頭に巻いて、エイ<br><br>

            Money on my head, yeah<br>
            俺の頭には金がついてる<br>
            (賞金首と同じような表現ですね。自身が狙われていることを示唆します)<br><br>

            Cameras, cameras on me when I’m bent<br>
            俺が最悪な時も、カメラはぴったりついてるんだ<br><br>

            Mix the waterfall right behind the tent (Yeah)<br>
            ウォーターフォールをテントの裏で混ぜてる<br>
            (ウォーターフォールはカクテルの名前、テントはフェスなどの舞台裏のことでしょう)<br><br>

            Backseat, spacious, I pulled up, spaceship, yeah (Turn it)<br>
            バックシートは広くて、車を停めれば、宇宙船さ、エイ (点けるんだ)<br>
            (ロールス・ロイスのファントムは、車内の天井にプラネタリウムのような星空が映し出されます)<br><br>

            This ain’t Vegas, yeah this here vacant, yeah (Turn it)<br>
            ここはベガスじゃないけど、だだっ広いだろ、エイ<br><br>

            Black skin bastard, tad bit savage<br>
            黒い肌の誰かさん、ただほんの少しヤバいだけさ<br><br>

            Cause a tad bit havoc, when I come through, damage<br>
            俺の通る道は、ほんの少しめちゃくちゃだから<br><br>

            Hop out (Hop out), roll (Roll), pop it, pour (Pour)<br>
            飛び起きて、巻いて、楽しむんだ、注ぐのもいいね<br><br>

            Planet froze, chain Keyshia Cole (Froze)<br>
            冷え切った惑星さ、チェインはまるでKeyshia Cole<br>
            (R&BシンガーKeyshia Coleのこと。frozeからice = 宝石とも繋がってきます）<br><br>

            Molly help me sleep, yeah<br>
            Mollyが俺を寝つかせてくれる、エイ<br>
            (Mollyはドラッグ)<br><br>

            Xannies make her sleep, yeah<br>
            Xanniesは彼女を眠らせてるんだ、エイ<br>
            (Xanaxは抗うつ剤）<br><br>

            93, 93, 93, spot<br>
            93にスポットを当てな<br><br>

            Yeah<br>
            エイ<br><br><br><br>


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
            <form action="{{ route('Lens.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="38">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Biking') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Provider') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
