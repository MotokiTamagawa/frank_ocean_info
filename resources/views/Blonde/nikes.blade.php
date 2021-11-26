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
            <h2>1: Nikes</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/diIFhc_Kzng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 1
                <br>
                Year : 2016
                <br>
                Produced by :Malay, Om’Mas Keith & Frank Ocean
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
            [Verse 1: Frank Ocean]<br>
            These bitches want Nikes<br>
            ビッチたちはNikeを欲しがってる<br>
            (Nikeのマークは” ✔︎ チェックマーク “と似ています。ビッチたちは、フランクの” チェック – お金 “が欲しいという意味)<br><br>

            They looking for a check<br>
            あいつらみんな” チェック “を探してて<br><br>

            Tell ‘em it ain’t likely<br>
            「そんな上手くは行かない」って伝えといてくれ<br><br>

            Said she need a ring like Carmelo<br>
            彼女はCarmeloみたいにリングを欲しがってるらしいね<br>
            (NBAプレイヤー” カーメロー・アンソニー “のこと。優秀なプレイヤーにも関わらず、チームは無冠に終わることが多く、タイトルを一つも獲得したことがありませんでした。そんなカーメロのように、彼女はトロフィー(リング)を欲しがっている)<br><br>

            It must be on that white like Othello<br>
            そうなれば、オセロみたいに彼女は白に乗っかるんだろうな<br>
            (リング(お金)が手に入れれば、白(コカイン)で上(ハイ)になる)<br><br>

            All you want is Nikes<br>
            君が欲しいのはNikesだけ<br>
            (ナイキのスニーカーは、物質主義を象徴的に表したものです。人々はあの「ロゴ」に熱狂し、機能性としては大きな特徴のない靴も高価で購入しています)<br><br>

            But the real ones just like you, just like me<br>
            それも「本物」が欲しいんだろ、君や、俺みたいにさ<br>
            (Nike – ナイキの名前の由来はギリシア神話に登場する” 勝利の女神・ニケ “。彼らは「本物」を勝ち取ることを大事にしています)<br><br>

            I don’t play, I don’t make time<br>
            俺には遊んでる時間も、作る時間もない<br><br>

            But if you need dick I got you<br>
            でも、君が俺のアソコが欲しいなら<br><br>

            And I yam from the line<br>
            このラインからダンクを決めてやるよ<br>
            (” yam “は性的な意味に加え、ダンク・シュートという意味も。フリースローのラインからダンクを決めるような勢いがあると。バスケットボールとNikeのシューズは深い関係性があることから)<br><br>

            Pour up for A$AP, R.I.P. Pimp C<br>
            A$APに酒を注ぐよ、安らかに眠ってくれPimp Cよ<br>
            (2015年に亡くなったA$AP Yams、2007年に亡くなったテキサスのラッパーPimp Cのこと)<br><br>

            RIP Trayvon, that nigga look just like me<br>
            安らかに眠ってくれTrayvon、あいつ俺にソックリだったのにさ<br>
            (2012年にフロリダで非武装ながら殺害された青年トレイヴォン・マーティンのこと。その後加害者であるジョージ・ジマーマンには正当防衛が適応され、不起訴となりました。この事件をきっかけに” Black Lives Matter (黒人の命も大事なんだ) “という運動が生まれました。後半のラインは、バラク・オバマのトレイヴォンへの追悼の言葉「自分に息子がいたら、彼のような青年だっただろう」という発言から)<br><br>

            Woo, fuckin’ buzzin’, woo!<br>
            あぁ、超ハイだよ、マジでさ<br><br>

            That my little cousin, he got a little trade<br>
            それは年下のいとこの話、彼は取引に少し足をつっこんでた<br>
            (彼のいとこはドラッグ・ディールをやっていたんですね）<br><br>

            His girl keep the scales, a little mermaid<br>
            そいつの彼女が重さを測ってる、まるでリトル・マーメイドみたいに<br>
            (いとこの彼女も取引に携わっていた。” scale “は重さを測るという意味の他に「鱗」という意味があります。リトル・マーメイドと繋がってきます)<br><br>

            We out by the pool, some little mermaids<br>
            俺たちでプールから出るのさ、小さな人魚たちとね<br>
            (リトル・マーメイドで、主人公アリエルは地上の世界に憧れ、王子エリックと恋に落ち、外の世界に出ることを決意します）<br><br>

            Me and them gel<br>
            俺とあのジェル<br>
            (” gel “はロンドンで” 女 “を意味するスラング)<br><br>

            Like twigs with them bangs<br>
            まるで前髪のあるtwigsみたいにさ<br>
            (シンガーFKA Twigsは、ジェルで固められた独特のヘアスタイルをしています)<br><br>

            Now that’s a real mermaid<br>
            これで本物のマーメイドだな<br><br>

            You been holding your breath, weighted down<br>
            君は息をずっと止めながら、深く沈んでいく<br><br>

            Punk madre, punk papa<br>
            くだらないママに、くだらないパパ<br>
            (” madre・papa “はスペイン語。リトル・マーメイドの主人公アリエルは、厳しい両親に地上の人間と関わってはいけないと言われています。地上の人間である王子への恋心を抑えなければいけない、その厳しい「ルール」は、男同士では付き合ってはいけないという、私たちの生きる現代の「ルール」にも似ているように思えます)<br><br>

            He don’t care for me, but he cares for me<br>
            彼は俺のことなんて気にしてない、でも” 気にしている “<br>
            (彼の父はフランクのことを本当の意味では気遣っていません。ただ形式的に気にしているだけで、本当に彼のことを考えてくれていない。リトル・マーメイドの内容とも繋がります)<br><br>

            And that’s good enough<br>
            でもそれで十分なのさ<br><br>

            We don’t talk much or nothin’<br>
            俺たちはほとんど喋らないけど<br><br>

            But when we talkin’ about something<br>
            でも何かについて喋る時には<br><br>

            We have good discussion<br>
            良い会話ができるんだ<br><br>

            I met his friends last week<br>
            先週、彼の友人たちに会ったよ<br>
            (いとこの友人のこと)<br><br>

            Feels like they’re up to somethin’<br>
            彼らは、まるで何かを企んでるようだった<br><br>

            That’s good for us<br>
            別に構わないけどさ<br><br><br><br>
            </p>
            <p>
            [Verse 2: Frank Ocean]<br>
            We’ll let you guys prophesy<br>
            お前らに好きに予想させてやる<br><br>

            We’ll let you guys prophesy<br>
            お前らに好きに予想させてやるよ<br><br>

            We gon’ see the future first<br>
            俺たちが先に未来を見るんだ<br><br>

            We’ll let you guys prophesy<br>
            お前らに好きに予想させてやるけど<br><br>

            We gon’ see the future first<br>
            未来を目にするのは、俺たちが先だぜ<br><br>

            Living so the last night feels like a past life<br>
            今を生きるんだ、そしたら昨日の夜さえ「前世」のように思えてくる<br><br>

            Speaking of the, don’t know what got into people<br>
            何が人々に取り憑いているのか、俺にはわからないけど<br><br>

            Devil be possessin’ homies<br>
            悪魔が俺のホーミーに取り憑いてるみたいだ<br><br>

            Demons try to body jump<br>
            悪魔が身体を乗っ取ろうとしてるのさ<br>
            (金や名声などを比喩で表現しています)<br><br>

            Why you think I’m in this bitch wearing a fucking Yarmulke?<br>
            なんで俺がヤムルカなんて着けてると思ったんだ？<br>
            (ヤムルカ = ユダヤ人が魔除けの意味で被っている帽子のこと。キッパとも呼ばれます)<br><br>

            Acid on me like the rain<br>
            雨みたいにアシッドが俺に降りかかる<br>
            (” アシッド “はLSDなどのドラッグを意味する言葉)<br><br>

            Weed crumbles into glitter<br>
            粉々になったウィードは輝いて<br>
            (ウィードは粉々になると、金色っぽく光るそうです)<br><br>

            Rain, glitter<br>
            雨、煌めき<br><br>

            We laid out on this wet floor<br>
            俺たちは濡れた床に寝そべってた<br><br>

            Away turf, no Astro<br>
            人工芝からは離れて<br>
            (家のプールサイドに敷いてある人工芝が浮かびます)<br><br>

            Mesmerized how the strobes glow<br>
            ストロボの輝きに魅了されていた<br><br>

            Look at all the people feet dance<br>
            みんなが踊っている、その足を見つめて<br><br>

            I know that your nigga came with you<br>
            わかってるよ、あいつが君と一緒に来たってね<br><br>

            But he ain’t with you<br>
            でもその彼は、もう君とは離れ離れに<br>
            (一緒にパーティに来た男性とは、離れ離れになっている = その男性よりもフランクに興味がある)<br><br>

            We only human and it’s humid in these Balmains<br>
            俺たちはただの人間さ、Balminsの中は蒸れてるし<br>
            (ファッション・ブランド、バルマンのこと。細いデニムが有名ですね。”  Nikes “のビデオの衣装はバルマンのクリエイティブ・ディレクターが担当しています)<br><br>

            I mean my balls sticking to my jeans<br>
            玉がジーンズにくっつくのさ<br><br>

            We breathin’ pheremones, Amber Rose<br>
            俺たちはみんなフェロモンを吸ってる、Amber Roseみたいに<br>
            (Amber Rose はカニエ・ウエストなど有名ラッパーと交際して来た、有名なモデル)<br><br>

            Sippin’ pink-gold lemonades<br>
            ピンク・ゴールドのレモネードを飲んで<br><br>

            Feelin’<br>
            感じるんだ<br><br><br><br>
            </p>
            <p>
            [Bridge: Frank Ocean]<br>
            I may be younger but I’ll look after you<br>
            俺は君より若いかもしれない、でも俺が面倒みるよ<br><br>

            We’re not in love but I’ll make love to you<br>
            俺たちは愛し合ってない、でも君と愛を育むのさ<br>
            (愛し合ってはいないけど性的な行為をする。ただ” make love to you “というラインからは、ただの身体だけの関係だとは言い切れないニュアンスが読み取れます)<br><br>

            When you’re not here I’ll save some for you<br>
            君がいない時は、君のためにお楽しみはとっておくから<br><br>

            I’m not him but I’ll mean something to you<br>
            俺は” 彼 “じゃない、でも君にとって大事な人になるんだ<br><br>

            I’ll mean something to you<br>
            I’ll mean something to you<br>
            君にとって「大事」な、そんな人にね<br><br>

            You got a roommate, he’ll hear what we do<br>
            君にはルーム・メイトがいるから、俺たちが何をしたか彼に伝わるかもね<br><br>

            It’s only awkward if you’re fucking him too<br>
            彼ともヤってるなら、ただただ気まずいけどさ<br><br><br><br>
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
            <form action="{{ route('Nikes.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="18">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/End') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Ivy') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
