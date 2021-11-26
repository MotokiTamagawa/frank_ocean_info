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
            <h2>7: Self Control </h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/BME88lS6aVY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 7
                <br>
                Year : 2016
                <br>
                Produced by :Malay, Jon Brion & Frank Ocean
                </h3>  
                <p> 
                この曲はフランクが「別れた相手への思い」を綴った作品です。一度「二人に将来がない」と確信を得て、<br>
                別れた関係を引き延ばすことは、お互いにとって良いことではありません。だからこそ、二人には[決まり]が<br>
                ありました。それは二人が再び惹き寄せられてしまった時に、タイトルである<br>
                「セルフ・コントロール – 自制」を用いて、「会いたい」気持ちを抑えること。そうすることで、二人はお互い<br>
                次のステップに進めるんだと。しかし、フランクの心の中には、” 自制 “できる以上の、<br>
                思いが募っていました。そんな彼の中にある抑えきれない思いが、この曲では表現されています。
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
            Poolside convo about your summer last night, ooh yeah<br>
            プールサイドで君と昨日の夜について話してる、エイ<br><br>

            About your summer last night<br>
            昨日のことだよ、夏の一夜について<br><br>

            Ain’t give you no play, mm<br>
            君をもて遊んでるわけじゃないよ<br><br>

            Could I make you shive last night?<br>
            昨日は君を気持ち良くさせることができたかな？<br><br>

            Could I make you shy on the last night, last night?<br>
            それとも不安にさせちゃった？昨日の夜のことさ<br><br>

            Could we make it in? Do we have time?<br>
            家に上がってく時間はあるかい？<br>
            (” Make it in “というラインは、「挿入する」という性的な表現にも聞こえます)<br><br><br><br>
            </p>

            <p>
            [Verse 1: Frank Ocean]<br>
            I’ll be the boyfriend in your wet dreams tonight<br>
            今夜、俺は君の夢の中で” ボーイフレンド “になるのさ<br>
            (フランクはバイ・セクシャルです。また” wet dreamz “とは” エロい夢 “のこと。性的な表現です)<br><br>

            Noses on a rail, little virgin wears the white<br>
            鼻をラインに乗せて、幼いヴァージンは白い服を纏ってる<br>
            (” 白 “というのは純白・潔癖というイメージがあると同時に、” コカイン “を彷彿とさせる色です。<br>
            前半の「鼻を” ライン “に乗せる」というのは、コカインを机の上にライン状に並べることから。<br>
            経験の浅い、フランクの相手の男性がコカインを吸引している姿が浮かびます)<br><br>

            You cut your hair but you used to live a blonded life<br>
            君は髪の毛を切った、でもまだ” blonded “な生活から抜け出せない<br>
            (” Blonded “は髪の色である” ブロンド “とも取れますが、” Blinded – 無知・軽率 “という単語にも聞こえます。<br>
            この” 無知 “というワードは、前作『Channel Orange』でもテーマになっていたので、こちらを意味している方が可能性としては高いでしょう)<br><br>

            Wish I was there, wish we’d grown up on the same advice<br>
            一緒にいたかったよ、俺たち二人とも「同じ教え」の元に育っていればよかったのに<br>
            (生まれた後に芽生えたアイデンティティ・知識によって、二人の考えはすれ違ってしまいます。<br>
            もし同じような環境で育っていれば、二人の考えは似通っていたのに。と)<br><br>

            And our time was right<br>
            そうやって二人の時間が上手く行けばよかったのにさ<br><br><br><br>
            </p>

            <p>
            [Chorus: Austin Feinstein]<br>
            Keep a place for me, for me<br>
            居場所をくれよ、居場所が欲しいんだ<br><br>

            I’ll sleep between y’all, it’s no thing<br>
            お前ら二人が寝てる間でも、どうってことないさ<br>
            (相手に新しい恋人ができても、フランクは構わないと）<br><br>

            It’s no thing, it’s no thing<br>
            どうってことないさ、大丈夫だよ<br><br>

            Keep a place for me, for me<br>
            俺は居場所が欲しいんだ、自分の居場所がね<br>
            (プリンスの” When You Were Mine “を引用していると言われています。この曲はフランクのお気に入りであり、ライブでカバーしたこともあります)<br><br><br><br>
            </p>

            <p>
            [Verse 2: Frank Ocean]<br>
            Now and then you miss it, sounds make you cry<br>
            時々、君も恋しくなるだろ、” 音 “を聞けば涙がこぼれたりしてさ<br>
            (相手の男性も、二人の関係が恋しくなる時があると。特に、音楽など耳から入ってくる情報で思い出すことがあると)<br><br>

            Some nights you dance with tears in your eyes<br>
            君は夜中に、涙を浮かべながらダンスしてる<br><br>

            I came to visit, ‘cause you see me like a UFO<br>
            君の元に行ってしまった、だって君は俺のことを、まるでUFOみたいに見るから<br>
            (彼はフランクの気持ちや、心の内側がわからなくなっていたんですね。だからこそ、得体のしれない” UFO “のように見ていたと)<br><br>

            That’s like never, ‘cause I made you use your self-control<br>
            そんなことないんだよ、だって俺が君に「セルフ・コントロール」を教えたんだから<br>
            (” セルフ・コントロール “とは、二人の関係・距離を近づけることを「自制」することです。すでに別れた彼らが、再び会うことが良いことに繋がるとは考えにくいわけです）<br><br>

            And you made me lose my self-control, my self-control<br>
            でも君は俺の「セルフ・コントロール」を失わせるんだ<br>
            (” 君 “の魅力は、フランク自身のセルフ・コントロールを失わせてしまうと。フランクは” 君 “に会いに行ってしまっています)<br><br><br><br>
            </p>

            <p>
            [Chorus: Austin Feinstein & Yung Lean]<br>
            Keep a place for me, for me<br>
            居場所をくれよ、居場所が欲しいんだ<br><br>

            I’ll sleep between y’all, it’s no thing<br>
            お前ら二人が寝てる間でも、どうってことないさ<br><br>

            Keep a place for me, for me<br>
            俺は居場所が欲しいんだ、自分の居場所がね<br><br>

            It’s no thing, it’s no thing<br>
            どうってことないさ、大丈夫だよ<br><br>

            It’s no thing, it’s no thing<br>
            どうってことないよ、大丈夫だから<br><br><br><br>
            </p>

            <p>
            [Bridge]<br>
            Sometimes you’ll miss it<br>
            時々、君も恋しくなるだろ<br><br>

            And the sound will make you cry<br>
            あの” 音 “を聞けば、君の目には涙が浮かんでさ<br><br>

            And some nights you’re dancing<br>
            君は夜中に<br><br>

            With tears in your eyes<br>
            涙を浮かべながらダンスしてる<br><br><br><br>
            </p>
            <p>
            [Outro: Frank Ocean]<br>
            I, I, I know you gotta leave, leave, leave<br>
            わかってるんだ、君はここを去った方が良いって<br><br>

            Take down some summer time<br>
            夏の間だけ一緒に過ごさないか<br><br>

            Give us, just tonight, night, night<br>
            今夜だけで良いから、時間をくれよ<br><br>

            I, I, I know you got someone comin’<br>
            わかってるよ、君の恋人がこれから来るって<br><br>

            You’re spittin’ game, know you got it<br>
            君にとってはこれもゲームだよね、あぁ君の勝ちさ<br><br>

            I, I, I know you gotta leave, leave, leave<br>
            わかってるんだ、君はここを去った方が良いって<br><br>

            Take down some summer time<br>
            夏の間だけ一緒に過ごさないか<br><br>

            Give us, just tonight, night, night<br>
            今夜だけで良いから、時間をくれよ<br><br>

            I, I, I know you got someone comin’<br>
            わかってるよ、君の恋人がこれから来るって<br><br>

            You’re spittin’ game, know you got it<br>
            君にとってはこれもゲームだよね、あぁ君の勝ちさ<br><br>

            (Nobody else, nobody else)<br>
            (誰でもない、誰でもない君さ)<br><br>

            I, I, I know you gotta leave, leave, leave<br>
            わかってるんだ、君はここを去った方が良いって<br><br>

            Take down some summer time<br>
            夏の間だけ一緒に過ごさないか<br><br>

            Give us, just tonight, night, night<br>
            今夜だけで良いから、時間をくれよ<br><br>

            I, I, I know you got someone comin’<br>
            わかってるよ、君の恋人がこれから来るって<br><br>

            You’re spittin’ game, know you got it<br>
            君にとってはこれもゲームだよね、あぁ君の勝ちさ<br><br><br><br>
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
            <form action="{{ route('Self_Control.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="24">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Skyline_To') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Good_Guy') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
