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
            <h2>15: Pink Matter(Feat. Andre 3000)</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7eJdb8lDXdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 15
                <br>
                Year : 2012
                <br>
                Produced by :Om’Mas Keith, Frank Ocean & Malay
                </h3>  
                <p>
                初恋の思い出を” オレンジ “と表したフランクでしたが、彼は何度も” ピンク “を「性的な表現」に用いています。<br>
                2017年にリリースした” Chanel “でも同じように、ピンクを性的な意味合いで用いていることから、<br>
                今回のタイトルも間違いなく性的な意味も含んでいるように思います。<br>
                アンドレ3000をフューチャーした、この作品では、彼の頭の中で描かれる哲学的な思考と葛藤が語られています。<br>
                日本語の「センセイ」と呼ばれる人物との対話のシーンがあるなど、彼には東洋的な思考があるのかもしれません。<br>
                ドラゴンボールの魔人ブウなども登場するので、そこにも注目です !


                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Intro: Frank Ocean]<br>
            And the peaches and the mangos<br>
            ピーチにマンゴーをさ<br><br>

            That you could sell for me<br>
            君は俺にくれるんだろ<br>
            (ピーチ・マンゴーはどちらも、比喩で女性の性器を表すもの。彼女がフランクに性的な満足を与えていることが浮かびます)<br><br><br><br>
            </p>
            <p>
            [Verse 1: Frank Ocean]<br>
            What do you think my brain is made for<br>
            俺の脳は、何で作られてると思う？<br><br>

            Is it just a container for the mind?<br>
            気持ちを押し込んであるだけの容器か？<br>
            (心と脳の働きについて疑問を浮かべています。脳が自分の行動を司っているなら意識や感情はどう働いているんだ。と)<br><br>

            This great grey matter<br>
            これってまさに灰白質だな<br>
            (先ほどのラインから。灰白質は脳や神経を構成する部位のこと)<br><br>

            Sensei replied, “What is your woman?<br>
            センセイがこう返してきたよ「あなたの彼女を思い浮かべて？」<br>
            (日本語のセンセイが登場していますね)<br><br>

            Is she just a container for the child?”<br>
            「彼女はただの子どもを産むための器だと思う？」<br><br>

            That soft pink matter<br>
            いや、彼女は柔らかなピンク色をした大事な人<br>
            (フランクにとってただの子どもを産むための器ではありませんでした。もっと大事な存在なんだと。一番最初の「ピーチを与えてくれる」というラインから、女性の性器のカラーを彷彿とさせます)<br><br>

            Cotton candy, Majin Buu, oh, oh, ohh<br>
            コットン・キャンディーみたいで、魔人ブウみたいなさ、あぁ<br>
            (彼にとってのピンクの例です。魔人ブウは、ドラゴン・ボールに登場するピンク色の肌をしたキャラクター)<br><br>

            Close my eyes and fall into you, you, you<br>
            君が俺の目元に近づけば、俺は君の瞳に吸い込まれて<br><br>

            My God, she’s giving me pleasure<br>
            ああ神よ、彼女は俺に「喜び」を与えてくれるんだ<br><br><br><br>
            </p>
            <p>
            [Verse 2: Frank Ocean]<br>
            What if the sky and the stars are for show<br>
            もしも、この空や星々がただのショーで<br><br>

            And the aliens are watching live<br>
            エイリアンがずっと見世物にしてたらさ<br>
            (地球や自分たちが、ちっぽけな存在で、ただのエイリアンのためのショーに出てくる見世物だったらと空想しています)<br><br>

            From the purple matter?<br>
            紫色の宇宙船から見てたら、それってどうなんだい？<br><br>

            Sensei went quiet then violent<br>
            センセイは黙り込んで、イライラしちゃってさ<br>
            (センセイの言った答えは、答えになっていなかったと。フランクに言い返せず黙りこくるセンセイは悶々とします)<br><br>

            And we sparred until we both grew tired<br>
            二人とも疲れ切るまで、口論したんだ<br><br>

            Nothing mattered<br>
            そしたらどうでもよくなっちゃってさ<br>
            (この世界がもし見世物だったら、真面目に口論する必要もないんだと)<br><br>

            Cotton candy, Majin Buu, oh, oh, oh, oh<br>
            コットン・キャンディに、魔人ブウ、あぁ<br><br>

            Dim the lights and fall into you, you, you<br>
            微かな光が射して、君に吸い込まれていくんだ<br><br>

            My God, giving me pleasure<br>
            あぁ神よ、彼女は俺に喜びをくれる<br><br>

            Pleasure, pleasure, pleasure<br>
            快楽さ、満たしてくれるんだ<br><br>

            Pleasure over matter<br>
            「喜び」が、どんな問題をも上回るんだよ<br><br><br><br>


            </p>
            <p>
            [Verse 3: André 3000]<br>
            Hey, hey<br>
            ヘイ、ヘイ<br><br>

            Since you been gone, I been having withdrawals<br>
            君がいなくなってから、俺はずっと引きこもってた<br><br>

            You were such a habit to call<br>
            君との電話はまるで習慣だったからさ<br><br>

            I ain’t myself at all, had to tell myself, “Naw<br>
            もう自分が自分じゃなくなっちまったよ、だから自分にこう言い聞かせないと<br><br>

            She better with some fella with a regular job”<br>
            「あぁ、彼女は普通の仕事をしてるやつといた方がいいんだ」って<br>
            (ラッパーという特別な職業は、彼女にとって負担にもなります）<br><br>

            I didn’t wanna get her involved<br>
            彼女を巻き込みたくはなかったんだ<br><br>

            By dinner Mr. Benjamin was sitting in awe<br>
            ディナーには、ベンジャミンが怖がりながら座ってた<br>
            (アンドレの本名は” Andre Lauren Benjamin “。彼女がいなくなってしまうことにビビっていたと)<br><br>

            Hopped into my car; drove far<br>
            俺の車に乗り込んで、遠くまでドライブしてた<br><br>

            Far’s too close and I remember my memory’s no sharp<br>
            「遠く」だって近すぎるんだよ、もう記憶があんまりシャープ(鮮明)に残ってないけどね<br>
            (別れが近づいている彼には、長いドライブもほんの短い時間にしか感じられないと)<br><br>

            Butter knife, what a life, anyway<br>
            それもバター・ナイフくらいでさ、なんて人生だよ、まあとにかくね<br>
            (記憶の鮮明(シャープ)さが、バター・ナイフの切れ味の悪さくらい、シャープではないと)<br><br>

            I’m building y’all a clock, stop, what am I, Hemingway?<br>
            俺はお前たちの時計を作ってんだ、待て、俺ってヘミングウェイだっけか？<br>
            (ヘミングウェイの『殺し屋』から。作品の中では、時計が20分進んでいる描写があります。ヘミングウェイはストーリーテリングが非常に上手い小説家であり、自分のラップのスタイルと重ねています)<br><br>

            She had the kind of body that would probably intimidate<br>
            彼女は脅迫でも受けそうな感じのボディーだったんだ<br>
            (アンドレの彼女は完璧な体型ではなく、それが彼のファンやメディアによって叩かれそうだったと)<br><br>

            Any of ‘em that were un-southern, not me, cousin<br>
            そういうことする奴らは、サウスじゃねえし、俺もそんなことはしねえよ<br>
            (彼の出身はサウスサイドのアトランタ)<br><br>

            If models are made for modelin’<br>
            もしモデルが、モデルをやるために生まれたなら<br>
            (世の中の美の基準は「細いモデル体型」だとされています)<br><br>

            Thick girls are made for cuddlin’<br>
            太った女の子たちは、抱きしめられるために生まれたんだろうな<br>
            (彼はモデル体型をもてはやすのではなく、それぞれが良い部分を持っていて、愛されるべきだと主張します）<br><br>

            Switch worlds and we can huddle then<br>
            世界を移すんだ、そしたら二人でゆっくり話せるだろ<br>
            (メディアやファンに追いかけ回される、この世界から出ていく)<br><br>

            Who needs another friend? I need to hold your hand<br>
            どこの誰が他のツレなんているんだい？俺はただ君の手を握りたいんだ<br><br>

            You’d need no other man, we’d flee to other lands<br>
            君だって他の男はいらないだろ、他の世界に逃げちゃおうぜ<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            Grey matter<br>
            グレイ・マターさ<br><br>

            Blue used to be my favorite color<br>
            ブルーは俺のお気に入りの色だった<br><br>

            Now I ain’t got no choice<br>
            でも今はもう選択肢はないね<br><br>

            Blue matter<br>
            ブルーな問題さ<br>
            (彼女に別れを告げられ、「ブルー」な気持ちになっていると。また、” Bruce Coville “という作家の『Am I Blue?』という、作品では、自身のセクシャリティへの葛藤が描かれており、フランクの心境もここで表現されています)<br><br><br><br>
            </p>
                <p>
                [Outro: André 3000]<br>
            You’re good at being bad, you’re bad at being good<br>
            君は悪いことをするのが得意なんだな、君は悪い子だよ<br>
            (関係を壊したことに対してですね)<br><br>

            For heaven’s sakes, go to hell, nah, knock on wood, hey<br>
            頼むから、地獄に行ってくれよ、なぁ木を叩いておくぜ<br>
            (おまじないをしたり、お願い事をするときに、「木を叩く」という習慣があるそうです)<br><br>

            You’re good at being bad (you’re bad at being good)<br>
            君は悪いことをするのが得意なんだな<br><br>

            For heaven’s sakes, go to hell<br>
            天国のためにもさ、地獄に行ってくれよ<br><br>

            Knock, knock, knock, knock on wood<br>
            おまじないをしておくぜ<br><br>

            Well frankly when that ocean so mu’fucking good<br>
            まあ言うとさ、オーシャンがマジで最高だから<br>
            (ここから、海に浮かぶ船についての話が始まります。同時にフランク・オーシャンを彷彿とさせます)<br><br>

            Make her swab the mu’fucking wood<br>
            彼女をデッキの端に追いやって<br><br>

            Make her walk the mu’fucking plank<br>
            デッキの端まで歩かせるのさ<br><br>

            Make her rob a mu’fucking bank<br>
            彼女に強盗をやらせるくらいにさ<br>
            (強盗をやらせるくらいに危険で、激しい関係だと)<br><br>

            With no mask on and a rusty revolver<br>
            マスクも付けずに、錆びた銃を持ってね<br>
            (映画『オーシャンズ』に登場する強盗にブラッド・ピットが演じる” Rusty “という役があります。オーシャンのラインから繋がっています)<br><br><br><br>
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
            <form action="{{ route('Pink_Matter.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="15">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('Bad_Religion/') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Forrest_Gump') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
