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
            <h2>10: Solo(Reprise) (Feat. Andre 3000)</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XXMHQ410P-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 10
                <br>
                Year : 2016
                <br>
                Produced by : Jon Brion, Frank Ocean & Mike Dean
                </h3>  
                <p> 
                ”前作『Channel Orange』の” Pink Matter “以来となるアンドレ3000との共演は果たしています。<br>
                作品を通して、共演者のパートは目立たないものが多いですが、この曲では曲中の全てのパートをアンドレが<br>
                担当しています。” Reprise “は反復という意味で、5曲目ですでに披露された” Solo “の続きのような<br>
                感覚で作られた作品。この一曲では「Solo – 孤独」という意味で用いているのではなく、<br>
                「So Low – 気分が最悪」という意味でこのワードを用いています。彼がキャリアの中で、<br>
                「現在」をどう捉えているか。非常に内省的なリリックに注目です。

                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Intro: André 3000]<br>
            Ayy, ayy, so now I’m—<br>
            エイ、エイ、今、俺はさ<br><br><br><br>
            </p>
            <p>
            [Verse: André 3000]<br>
            So low that I can see under the skirt of an ant<br>
            最悪なんだ、アリの足元が見えるくらいさ<br>
            (” So Low “は気分が落ち込んでいるという意味。アリの小ささほど、気分が「低い」と表現しています）<br><br>

            So low that I don’t get high no more<br>
            最悪だよ、もうハイにはなれない<br><br>

            When I “geronimo!,” I just go “heh”<br>
            「ジェロニモ」！ってシーンでも、実際は「heh」ってだけさ<br>
            (「ジェロニモ」は高い(ハイ)場所から飛び降りる時の合言葉。しかし、彼からは「heh」という言葉しか出ません。彼の気持ちが高く(ハイ)ないことを比喩で表現しています）<br><br>

            Solo, my cup is a rojo, my cholo, my friend<br>
            ” Solo “、俺のカップは” rojo “で、” cholo “が俺の友達なんだ<br>
            (” Solo “は、アメリカでよく用いられている赤いカップのブランドの名前でもあります。<br>
            ” rojo “はスペイン語で” 赤 “という意味。先ほどの” Solo “の色から。<br>
            ” Cholo “も同じくスペイン語で、” ヒスパニックの仲間 “という意味)<br><br>

            So low that I can admit<br>
            気分は最悪だから、認めるよ<br><br>

            When I hear that another kid is shot by the popo<br>
            また少年が警察に撃たれたって聞いた時<br><br>

            It ain’t an event no more<br>
            それがもう「事件」でもなんでもなくなっちまったって事をな<br>
            (非武装の黒人少年が白人警察に銃殺されることが、日常的に起きていること)<br><br>

            So low that no more high horses, so hard to wear Polo<br>
            最悪さ、もう誰にも勝てないよ、Poloだって着れないんだ<br>
            (自信を無くしている様子が描かれています。ファッション・ブランドである” Polo “は、「馬」のロゴが有名です。「グループの中で自分が優れている意識」を” high horse “と言いますが、そのワードとかけています)<br><br>

            When I do, I cut the pony off<br>
            着る時は、あの「馬」を切り取るのさ<br>
            (ポロ・ラルフローレンのロゴですね)<br><br>

            Now there’s a hole that once was a logo, how fitting<br>
            ロゴのあった部分にはぽっかり穴が空いているのさ、似合ってるかな<br>
            (心の真ん中に、ぽっかり穴が空いたことを比喩で表しています。ラップ・ゲームから退けたことで、彼の心には穴が空きます)<br><br>

            So low that I can give a fuck about what is trending<br>
            最悪だよ、「何がトレンドか」なんてことに注意を払うくらいさ<br><br>

            Tryna cut down on my spending<br>
            お金をあまり使わないように努力してるんだ<br>
            (ロゴを切りとる = 消費社会・物質主義への抵抗とも捉えられます)<br><br>

            Regardless of winning, instead of pretending<br>
            勝ち負けなんて気にしねえ、「真似」をするよりマシだろ<br><br>

            And bending over backwards<br>
            力の全てを出さずにさ<br><br>

            Over half of these hoes had work done<br>
            ビッチの半分は” ワーク “を済ませてるんだ<br>
            (整形手術のことでしょう)<br><br>

            Sayin’ they want something real from a man<br>
            「男は誠実(リアル)じゃないと」なんて言ってるくせにさ<br>
            (男にはリアルを求めるのに、ビッチたちの外見はフェイクなんだと)<br><br>

            Just saying it, we being real persons<br>
            正直に言っただけさ、これで俺たちみんなリアルな人間だろ<br><br>


            I hate that it’s like this, I feel for you, ant<br>
            こんな現状が嫌なんだ、君の気持ちもわかるよ、アリちゃんよ<br>
            (序盤に用いていた「アリ」を、ここでは彼が出会ってきた女性に例えています)<br><br>

            I don’t know what it’s like with a skirt on<br>
            スカートを履く感覚は俺にはわからないけど<br><br>

            So pardon me if I am being insensitive<br>
            もし俺が無神経だったら許してくれよ<br>
            (彼が自身をフェミニストと自称していることから)<br><br>

            But darling this only worsens<br>
            でもさダーリン、状況は悪くなる一方さ<br><br>

            So low my halo stay way low, it feels like it’s bent<br>
            最悪さ、俺についた後光も暗いまま、ねじ曲がっちまったみたいだ<br>
            (最近の自身のキャリアについて満足いっていないようです。アウトキャストで名声を得て、ソロ活動をしている彼ですが、グループの時のように、上手くいっていないと感じているのかもしれません)<br><br>

            So low that when they throw pussy or pesos<br>
            最悪だよ、女がアソコを差し出してきても<br><br>

            I pay no attention to it<br>
            何の興味も湧かなくなっちまった<br><br>

            So low that I am no rookie but feel like a kid<br>
            最悪だよ、ルーキーでもないのに、子供みたいな気持ちだよ<br>
            (自身のなさの表れです)<br><br>

            Lookin’ at the other kids<br>
            他のガキどもを見てるとさ<br><br>

            With astonishment while I’m on punishment<br>
            驚くと同時に、俺は罪を罰せられる<br><br>

            Watchin’ the summer come close to an end<br>
            「夏」が終わりに近づいているのを見てるのさ<br>
            (彼自身のキャリアを全体で捉えて、「夏の終わり」と表している)<br><br>

            After 20 years in, I’m so naïve I was under the impression<br>
            20年経ったけど、俺はマジで単純だし、思い込んでた<br><br>

            That everyone wrote they own verses<br>
            みんな自分のバースを自分で書いてると思ってたんだよ<br>
            (ドレイクなど、近年のゴーストライター騒動に触れています)<br><br>

            It’s comin’ back different and, yeah, that shit hurts me<br>
            変わり果てて帰ってくるなんてな、エイ、傷ついたよ<br><br>

            I’m hummin’ and whistlin’ to those not deserving<br>
            俺はその曲を口ずさんだり、口笛を吹いてる、そんな価値もないのにさ<br><br>

            I’ve stumbled and lived every word<br>
            俺は上手くいかない時も、言葉の一つ一つに思いを込めてたぜ<br><br>

            Was I working just way too hard?<br>
            これって俺が真面目にやり過ぎただけなのか？<br>
            (反語的な表現です)<br><br><br><br>
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
            <form action="{{ route('Solo_Reprise.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="27">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Nights') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Pretty_Sweet') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
