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
            <h2>15: Seigfried</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RWgpBlz16-s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 15
                <br>
                Year : 2016
                <br>
                Produced by : Malay & Frank Ocean
                </h3>  
                <p> タイトルの” Seigfried “は、ドイツの英雄” Siegfried – ジークフリート “を彷彿とさせるワード。<br>
                (eとiの順番が逆になっているため、実際には違うワード)ジークフリートは黒髪長髪の、勇気あるドイツの英雄として<br>
                語り継がれている人物。この人物が、フランク・オーシャンが一時期付き合っていた男性Willy Cartier <br>
                (ウィリー・カルティエ)と共通点があることから、彼のことを表した作品なのではないか。<br>
                とファンの間では騒がれております。そんな彼とは、フランクはすでに別れてしまっているワケですが、この曲では、<br>
                一人の男性(おそらくウィリー)との別れ、性的マイノリティとして生きていく上での苦悩が描かれています。

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
            The markings on your surface<br>
            君の肌に描かれた印<br>
            (フランクが付き合っていたとされるモデルWilly Cartierは全身にタトゥーを刻んでいます)<br><br>

            Your speckled face<br>
            そばかすのある君の顔<br>
            (同じくWillyのことです。彼の顔にはそばかすがあります)<br><br>

            Flawed crystals hang from your ears<br>
            耳からはクリスタルがぶら下がってる<br><br>

            I couldn’t gauge your fears<br>
            俺は君の抱える「恐怖」に気づくことができなかった<br><br>

            I can’t relate to my peers<br>
            仲間と自分を比べることなんてできないよ<br>
            (彼の恋愛対象の性別は仲間たちとは違います。もしくは「LGBTQアーティスト」というラベルを貼られることが嫌なのかもしれません。もちろん性的対象の違いとは関係のない意味とも取れます)<br><br>

            I’d rather live outside<br>
            俺は「外側」で生きていくのさ<br>
            (しがらみに取り憑かれた世界から解放されること。また、男と女が付き合うべきだ。という固定観念がはびこる世界から、外に出て生きていくということ)<br><br>

            I’d rather chip my pride than lose my mind out here<br>
            プライドなんて砕いてやるよ、ここで自分を失うよりマシさ<br><br>

            Maybe I’m a fool<br>
            もしかして俺はアホなのかもな<br><br>

            Maybe I should move and settle<br>
            もう辞めちまって、落ち着いた方がいいのかもしれない<br>
            (性的マイノリティであることを否定し、女性と付き合うことで楽になることもできる)<br><br>

            Two kids and a swimming pool<br>
            二人の子供に、スウィミング・プール<br>
            (いわゆるみんなの思う「理想の暮らし」です。2人の子供を持ち、プールのついた豪邸に住む。そんな家庭の形も幸せであると彼はわかっています)<br><br>

            I’m not brave (brave)<br>
            でも俺にはそんな勇気がないんだ (勇気がね)<br>
            (男性と結婚し、「理想の暮らし」像を捨てる勇気が彼にはない。もしくは、女性と結婚することで、男性との関係を諦めてしまうことへの恐怖です)<br><br>

            I’m not brave<br>
            俺は度胸なしなんだ<br>
            (タイトルの” Seigfried – ジークフリート “から。ジークフリートはドイツの英雄ですので、まさに「勇敢さ」そのものを表している人物です。そのジークフリートと自分を比べています)<br><br><br><br>
            </p>

            <p>
            [Verse 2]<br>
            I’m living over city<br>
            俺は都会に住んでるけど<br><br>

            And taking in the homeless sometimes<br>
            時々ホームレスを家に迎え入れるんだ<br>
            (ここでいう” ホームレス “は、広い意味合いで「居場所のない人」と捉えることができます)<br><br>

            Been living in an idea<br>
            一つの考えの中で俺は生きてきた<br><br>

            An idea from another man’s mind<br>
            他人の考えの中で、生きてきたのさ<br>
            (今まで信じてきた「一つの考え」とは、社会に当たり前に存在している考え方のこと。「聖書」を信じることなども正にその一例ですね)<br><br>

            Maybe I’m a fool<br>
            もしかして俺はバカなのかもな<br><br>

            To settle for a place with some nice views<br>
            美しい景色に囲まれて、そんな場所に落ち着くこともできるのに<br><br>

            Maybe I should move, settle down<br>
            辞めちまって、落ち着くべきなのかもな<br><br>

            Two kids and a swimming pool<br>
            二人の子供に、スウィミング・プール<br><br>

            I’m not brave<br>
            俺にはそんな勇気はないんだよ<br><br>

            I’d rather live outside<br>
            「外側」で生きていたいんだ<br><br>

            I’d rather live outside<br>
            「外側」で生きていたいんだよ<br><br>

            I’d rather go to jail<br>
            刑務所に入った方がマシなのかもな<br><br>

            I’ve tried hell (It’s a loop)<br>
            地獄に立ち向かってきた (繰り返しさ)<br>
            (” Solo “や” Nights “で語られていたような、繰り返しの毎日のことを「地獄」と表現しています)<br><br>

            What would you recommend I do?<br>
            俺はどうすればいい？君はどう思う？<br><br>

            (And the other side of the loop is a loop)<br>
            (「ループ」の反対は「ループ」なんだよ)<br>
            (” ∞ “の記号のこと。左右対称です）<br><br>

            This, this fe-, this feel<br>
            この気持ち、この感情さ<br><br>

            This feel, this feels<br>
            この気持ち、この感情は<br>

            This feels how molly must feel<br>
            まるでMollyをヤった時の心地だよ<br>
            (” Molly “はドラッグ・MDMAを意味するスラング。ドラッグでリラックスしている様子が浮かびます)<br><br>

            This feels how molly must feel<br>
            Mollyをした時みたいな感覚さ<br><br>

            How molly must feel, this feels how molly must feel<br>
            Mollyの感覚だよ、これはMollyをした時の心地みたいだ<br><br>

            How molly must feel<br>
            間違いないね<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            This is not my life<br>
            これは俺の人生じゃないんだ<br><br>

            It’s just a fond farewell to a friend<br>
            It’s just a fond farewell to a friend<br>
            ただの「友への愛を込めた別れ」さ<br>
            (Elliott Smith ” A Fond Farewell “から。彼はドラッグ中毒を断ち切ることができず、自殺してしまっています。<br>
            フランクはこの曲で自信を生まれ変わらせようとしているように思えます。今までの人生に別れを告げ、新たな人生を歩むことを決意しているラインとも取れます)<br><br>

            This is not my life<br>
            これは俺の人生じゃないんだ<br><br>

            It’s just a fond farewell to a friend<br>
            友への愛を込めた別れ、それだけなのさ<br><br>

            It’s not what I’m like<br>
            そんなの俺らしくないだろ<br><br>

            It’s just a fond farewell (brave)<br>
            ただの愛を込めた別れだからさ (勇気を持って)<br><br><br><br>


            </p>

            <p>
            [Verse 3]<br>
            Speaking of Nirvana, it was there<br>
            ニルヴァーナの話をするよ、この目で見たんだ<br>
            (ニルヴァーナは「死後の世界」という意味。ここから「死」を意識させるような描写が登場します)<br><br>

            Rare as the feathers on my dash from a phoenix<br>
            車のダッシュボードにフェニックスの羽が落ちる、そのくらい珍しいことだけど<br>
            (フェニックスは死期が来ると「灰」になると言われているため、羽を落とすことはありません）<br><br>

            There with my crooked teeth and companion sleeping, yeah<br>
            そこには歯並びの悪い俺のツレも乗っててさ<br><br>

            Dreaming a thought that could dream about a thought<br>
            「” 夢 “を見れるように」って、願ってたんだ<br>
            (ここからかなり抽象的な表現が続きます。「神からの栄光」を手にしたい彼は、夢の中でそれが得られることを願い、夢見ることを願います)<br><br>

            That could think of the dreamer that thought<br>
            その夢では、頭で思い描いた” 夢見る人 “を思い浮かべることができて<br><br>

            That could think of dreaming and getting a glimmer of God<br>
            夢見ることを思い描けば、神が微かな光を与えてくれるんだ<br><br>

            I be dreaming of dreaming a thought<br>
            俺は「夢見ること」を夢見てる<br><br>

            That could dream about a thought<br>
            ある「一つの考え」を、頭の中に思い描けるような、そんな夢をね<br><br>

            That could think of dreaming a dream<br>
            そうすれば、夢を見ることを思い描けるんだ<br><br>

            Where I cannot, where I cannot<br>
            俺には不可能な夢も。俺には不可能な夢でもさ<br><br>


            </p>
            <p>
            [Verse 4]<br>
            Less morose and more present<br>
            不機嫌はやめて、もっと前(present)向きにさ<br><br>

            Dwell on my gifts for a second, a moment<br>
            一瞬だけ、ほんの少しだけ、自分に与えられた物(present)を思い浮かべる<br><br>

            One solar flare, we’re consumed<br>
            太陽フレア一つで、俺たちは消えちまう<br>
            (太陽における爆発)<br><br>

            So why not spend this flammable paper on the film that’s my life?<br>
            映画に出て来るような、燃える紙は使っちまうんだ、それが俺の人生だろ？<br>
            (昔、映画を撮影するカメラのフィルムは、” ニトロセルロース “という非常によく燃焼する可燃性の物質から作られていたそう。” flammable paper “というワードはマリファナの巻紙も彷彿とさせます)<br><br>

            High flights, inhale the vapor, exhale once and think twice<br>
            ハイになるまで飛び立って、蒸気を吸い込む、一息吐き出して、もう一度考えてみる<br><br>

            Eat some shrooms, maybe have a good cry about you<br>
            マッシュルームを色々食べたら、君を想って涙が出てきたよ<br>
            (マジック・マッシュルームのこと。ドラッグです。男性と付き合うことを、辞めれば楽になるかもしれないと考えていた彼も、結局その男性のことが好きで涙を浮かべてしまうんですね。どんなに辛くても彼への思いを諦めきれないんだと)<br><br>

            See some colors, light hang glide off the moon (In the dark)<br>
            いろんな色が見えるよ、月から光が滑るように放たれるのが見えるんだ (闇の中でね)<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            (In the dark)<br>
            I’d do anything for you<br>
            (In the dark)<br>
            I’d do anything for you<br>
            (In the dark)<br>
            I’d do anything for you<br>
            (In the dark)<br>
            I’d do anything for you<br>
            (闇に包まれて)<br>
            君のためなら何だってやる<br><br>

            (In the dark)<br>
            I’d do anything for you, anything for you<br>
            (In the dark)<br>
            I’d do anything for you, anything for<br>
            (闇の中で)<br>
            君のためならどんなことだってする、どんなことだってね<br><br><br><br>
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
            <form action="{{ route('Seigfried.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="32">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/White_Ferrari') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Godspeed') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
