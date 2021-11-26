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
            <h2>3: Pink + White </h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uzS3WG6__G4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 3
                <br>
                Year : 2016
                <br>
                Produced by :Frank Ocean & Pharrell Williams
                </h3>  
                <p> 
                Pink + Whiteは、過去の回想をしながら、ある人がフランクに伝えた「教え」について語られた一曲。<br>
                リリックに登場する” You – 君 “という人物は「頷くの、目は閉じちゃいけない」という言葉を<br>フランクに送っています。
                コントロールできない物事に対して、簡単に諦めることなく、「イエスと言ってみる(頷く)、<br>
                何かを実行すること」が大事なんだと。そのマインドを持ち続けるために重要なのは” 愛情 “であり、<br>
                フランクは” 君 “から、そんな深い愛情を与えられた。と語っています。では、そんな深い愛情と、<br>
                人生のアドバイスをくれた” 君 “とは一体誰なのでしょうか。答えはリリックの最後で示唆されています。


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
            Yeah, yeah (woo!)<br>
            Yeah, yeah, yeah<br><br>
            </p>
            <p>
            [Verse 1: Frank Ocean]<br>
            That’s the way every day goes<br>
            こうやって毎日は続いてく<br><br>

            Every time we’ve no control<br>
            俺たちにはコントロールできやしないんだ<br><br>

            If the sky is pink and white<br>
            もし空がピンクとホワイトなら<br>
            (夕焼けが浮かびますね。彼の楽曲では” 色 “が重要なテーマとして語られることがあります。また、ピンクの空というのは、大気汚染による影響とも考えられているため、環境問題を指摘しているのかもしれません)<br><br>

            If the ground is black and yellow<br>
            もし地面がブラックとイエローなら<br>
            (アメリカの車道は、黒いコンクリートの上に黄色い線が引いてあります。空の色も、地面の色も、私たちにコントールできるものではないと)<br><br>

            It’s the same way you showed me<br>
            君が俺に教えてくれた通りだろ<br><br>

            Nod my head, don’t close my eyes<br>
            「頷くの、目は閉じてはいけない」だろ<br>
            (先ほどの” コントロールできない問題 “に対して、簡単に諦めてしまうのではなく「イエスと言ってみる、何かを実行することが大事」だと” 君 “は教えてくれたんですね)<br><br>

            Halfway on a slow move<br>
            ゆっくりした動きの途中で<br><br>

            It’s the same way you showed me<br>
            君が教えてくれた通りなんだ<br><br>

            If you could fly, then you’d feel south<br>
            もし君が空を飛べるなら、” サウス “を感じるだろうね<br>
            (鳥が寒さから避けるために、南の暖かい方角に向かう習性があることから。しかし” 君 ”が空を飛べないことは明確なので、フランクは” 君 “に対して、「暖かい場所にいてほしい」とメッセージを送っているように見えます。<br>
            環境問題について語っているとすれば、アフリカ(南半球)の飢餓・干ばつの問題を示唆しているようにも思えます。)<br><br>

            Up north’s getting cold soon<br>
            北はもうすぐ寒くなってくるからさ<br><br>

            The way it is, we’re on land<br>
            こうやって進んでいくんだ、俺たちは飛べずに陸にいるけど<br><br>

            Still I’m someone to hold true<br>
            それでも俺は” 真実 “を手にしてるだろ<br><br>

            Keep you cool when it’s still alive<br>
            君が生きている限り、落ち着いた気持ちでいさせるから<br><br>

            Won’t let you down when it’s all ruin<br>
            何もかも破滅しても、君を落ち込ませたりしないよ<br><br><br><br>


            </p>
            <p>
            [Chorus: Frank Ocean]<br>
            Just the same way you showed me, showed me<br>
            君が俺に教えてくれたようにね、君が教えてくれたんだ<br><br>

            You showed me love<br>
            君は「愛」を見せてくれた<br>
            (コントロールできないことも、受け入れるようなそんな深い愛情のこと)<br><br>

            Glory from above<br>
            まるで天から降る栄光のようにね<br><br>

            Regard, my dear<br>
            愛を込めて、親愛なる人よ<br><br>

            It’s all downhill from here<br>
            ここからはずっと下り坂だよ<br>
            (” Downhill “は困難なことがこの先に起きないことを意味しています)<br><br><br><br>
            </p>
            <p>
            [Verse 2: Frank Ocean]<br>
            In the wake of a hurricane<br>
            ハリケーンが目を覚まして<br>
            (彼の育った地ルイジアナはハリケーン・カトリーナによって壊滅的な状態に陥りました。その影響で彼のリリックには度々「ハリケーン」が登場します)<br><br>

            Dark skin of a summer shade<br>
            黒い肌、夏の日陰<br>
            (彼自身、友人、家族、” 君 “など、彼の周りのアフリカン・アメリカンを指しています。またハリケーンの発生する時期は夏が多いことから先ほどのイメージと繋がってきます)<br><br>

            Nosedive into flood lines<br>
            洪水の中に頭からダイブして<br>
            (自身の体験を回顧します。洪水で歩くことのできなくなった状況のこと。またコカインを吸引することを彷彿とさせます。” Lines “はコカインの粉を並べてある状態。鼻から吸引することが” Nosedive “という単語に含まれています)<br><br>

            Tall tower of milk crates<br>
            タワーのように積み上がった、牛乳が入れてあったケース<br>
            (彼はインタビューで、洪水に襲われた時、足のつかないほどの水の中を、牛乳のケースを浮き輪のようにして移動したと語っています)<br><br>

            It’s the same way you showed me<br>
            君が教えてくれた通りだよ
            <br><br>
            Cannonball off the porch side<br>
            砲丸のように玄関から飛び込むのさ<br><br>

            Older kids trying off the roof<br>
            年上の子供たちは、屋根から飛び込もうとしてる<br><br>

            Just the same way you showed me (You showed)<br>
            君が教えてくれた通りなんだ (君が教えてくれた)<br><br>

            If you could die and come back to life<br>
            もしあなたが死んで、その後に息を吹き返したなら<br><br>

            Up for air from the swimming pool<br>
            プールから浮き上がって、空気を吸えるのさ<br>
            (水で溺れていた彼が、” 君 “のおかげで浮き上がって空気を吸えた。” 君 “のおかげで困難を乗り越えられたことがわかります)<br><br>

            You’d kneel down to the dry land<br>
            あなたはこの乾いた地面に膝をついて<br>
            (コントロールできないと思っていた” 洪水 “は去って、地面は乾いたんですね。簡単に諦めないことの重要性を実証しています)<br><br>

            Kiss the Earth that birthed you<br>
            あなたを産んだ地球にキスをするんだろうね<br>
            (「母なる地球 – Mother Earth」と言うように、ここまでリリックに登場してきた” 君 “は彼の母親のカトーニャ・ブローさんであることが示唆されます。)<br><br>

            Gave you tools just to stay alive<br>
            生き抜くための道具を、地球はくれたのさ<br><br>

            And make it out when the sun is ruined<br>
            太陽が壊れてしまった時でも、生き抜くのさ<br><br><br><br>


            </p>
            <p>
            [Chorus: Frank Ocean]<br>
            Just the same way you showed me, showed me<br>
            君が俺に教えてくれたようにね、君が教えてくれたんだ<br><br>

            You showed me love<br>
            君は「愛」を見せてくれた<br><br>

            Glory from above<br>
            まるで天から降る栄光のようにね<br><br>

            Regard, my dear<br>
            愛を込めて、親愛なる人よ<br><br>

            It’s all downhill from here<br>
            ここからはずっと下り坂だよ<br><br><br><br>
            </p>
            <p>
            [Outro: Frank Ocean & Beyoncé]<br>
            Remember life, remember how it was<br>
            あの頃の生活がどんなものだったか、覚えてるよ<br>
            (少年時代のことでしょう)<br><br>

            Climb trees, Michael Jackson, it all ends here<br>
            木を登るマイケル・ジャクソン、もう全て終わってしまった<br>
            (マイケル・ジャクソンはよく” Giving Tree “という木に登り、曲を構想していたと言われています。そんなマイケルのいた時代も彼の少年時代で終わってしまったと)<br><br>

            Say what up to Matthew, to Shoob<br>
            Matthewと白い飼い犬に、会釈をするのさ<br><br>

            Say what up to Danny<br>
            Dannyにも一言言ってさ<br><br>

            Say what up to life immortality<br>
            永遠の人生にも、一言言っとくよ<br><br>

            Bending up my Nikes<br>
            Nikeの靴を履きつぶして<br><br>

            Running out the melpomene, nicotine<br>
            メルポメネもいっぱいさ、タバコも切れちまった<br>
            (” メルポメネ “はニューオリンズの住宅プロジェクト。ハリケーンによって多くの住宅が壊滅し、新たな住宅が一斉に求められたため集合住宅が建てられました。フランク自身も、このメルポメネに一時的に住んでいたようです。また、メルポメネの語源はギリシア神話に登場する悲劇の女神の名前から。ナイキの語源である” ニケ “もギリシア神話が由来なので、繋がってきます）<br><br>

            Stealing granny cigs (Take it easy)<br>
            ばあちゃんのタバコを盗んでさ (怒らないでよ))<br><br>

            Gimme something sweet<br>
            甘いものをちょうだいよ<br><br>

            Bitch, I might like immortality<br>
            ビッチ、俺は「永遠に続くもの」が好きなのかもしれない<br>
            (変わらないものに対して安心する気持ちですね。不変性や永続性の魅力を語ります)<br><br>

            This is life, life immortality<br>
            これが人生さ、人生は永遠に続くのさ<br><br><br><br>


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
            <form action="{{ route('Pink_White.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="20">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Ivy') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Be_Yourself') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
