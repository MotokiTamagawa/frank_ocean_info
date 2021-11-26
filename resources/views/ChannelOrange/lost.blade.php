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
            <h2>11: Lost</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XsFyMbPagnQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 11
                <br>
                Year : 2012
                <br>
                Produced by :Malay
                </h3>  
                <p> 
                ” Lost “では、ある女性がドラッグの「運び屋」として世界中を飛び回るというテーマが描かれております。<br>
                また、フランクはそんなドラッグを受け取って、売りさばくディーラーを演じています。<br>
                フランクのビジネスを「運び屋」という形で手助けする女性は、彼に対して特別な感情を持っていました。<br>
                捕まるリスクを背負いながらも、彼に愛してもらいたい一心で仕事を全うしています。<br>
                この曲では、危険を顧みない彼女がまさに「愛に” Lost – 迷子 “」になってしまっている。<br>
                という様子と、ドラッグを運ぶために「世界各地で迷子」になってしまっている姿を描き出されています。<br>


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
            Double D<br>
            ダブル・D<br><br>
                    
            Big full breasts on my baby<br>
            俺のベイビーは胸が大きくて<br>
            (ダブル・Dとは胸のカップ数のことだったんですね)<br><br>

            (Yo we going to Florida)<br>
            (俺たちはフロリダに向かってる)<br><br>

            Triple weight<br>
            量を3倍にして<br>
            (ドラッグが浮かびます。” weight “はコカインを表すことがあります)<br><br>

            Couldn’t weigh the love I’ve got for the girl<br>
            君への愛の量を測ることはできないけどね<br><br>

            And I just wanna know<br>
            俺はただ知りたいだけなんだ<br><br>

            Why you ain’t been going to work<br>
            なんで君がずっと仕事に行ってないのかをね<br><br>

            Boss ain’t working you like this<br>
            職場のボスはこんな風に君を楽しませてくれないだろ<br>
            (フランクは彼女にドラッグを買い与えています。性的な意味にも取れます)<br><br>

            He can’t take care of you like this<br>
            彼じゃ君をこんな風に扱えないだろうから<br><br>
            </p>
            <p>
            [Chorus]<br>
            Now you’re lost, lost in the heat of it all<br>
            君は今迷子なんだ、感情の渦の中で迷子になってる<br><br>

            Girl, you know you’re lost<br>
            ガール、君は迷子なんだよ<br><br>

            Lost in the thrill of it all<br>
            興奮の渦に飲み込まれてる<br><br>

            Miami, Amsterdam, Tokyo, Spain, lost<br>
            マイアミ、アムステルダム、東京、スペインで迷子になってる<br><br>

            Los Angeles, India, lost on a train, lost<br>
            ロサンジェルス、インド、電車の中で見失ってるんだ、ロストだよ<br>
            (ウェス・アンダーソンが監督を務めた映画『The Darjeeling Limited』を彷彿とさせます。この映画はインドが舞台となり、3人の兄弟が列車で旅をするという内容)<br><br><br><br>
            </p>
            <p>
            [Verse 2]<br>
            Got on my buttercream silk shirt and it’s Versace<br>
            バターみたいに滑らかなシルクシャツを身につける、しかもVersaceさ<br>
            (Versace = 高級ブランド）<br><br>

            (There he goes, one of God’s own prototypes)<br>
            (彼を見てみろ、彼は神の持つプロトタイプの一つだ)<br>
            (映画『Fear And Loathing in Las Vegas』のセリフから)<br><br>

            Hand me my triple weight<br>
            俺のトリプル・ウェイトを渡してくれ<br>
            (先ほどの3倍の量のドラッグのことですね)<br><br>

            So I can weigh the work I got on your girl<br>
            そしたら俺も仕事ができるから、君のおかげでね<br>
            (彼女がドラッグの「運び屋」であることが浮かびます)<br><br>

            (Too weird to live, too rare to die)<br>
            (生きていくには異質すぎるが、死ぬには珍しすぎる)<br>
            (先ほどの映画『Fear And Loathing in Las Vegas』のセリフの続き)<br><br>

            No I don’t really wish<br>
            本当にそんな気持ちはないんだ<br><br>

            I don’t wish the titties would show<br>
            君の胸を見たいなんて気持ちはないんだよ<br>
            (彼女が「胸」をドラッグの隠し場所として用いていることが浮かびます)<br><br>

            Nor have I ever, have I ever let you get caught?<br>
            違うだろ、今まで君を捕まる危険に晒したことなんてあったかい？<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            Now you’re lost, lost in the heat of it all<br>
            君は今迷子なんだ、感情の渦の中で迷子になってる<br><br>

            Girl, you know you’re lost<br>
            ガール、君は迷子なんだよ<br><br>

            Lost in the thrill of it all<br>
            興奮の渦に飲み込まれてる<br><br>

            Miami, Amsterdam, Tokyo, Spain, lost<br>
            マイアミ、アムステルダム、東京、スペインで迷子になってる<br><br>

            Los Angeles, India, lost on a train, lost<br>
            ロサンジェルス、インド、電車の中で見失ってるんだ、ロストだよ<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            She’s at a stove (Who)<br>
            彼女は暖炉の前に (誰だ)<br><br>

            Can’t believe I got her out here cooking dope (Cooking dope)<br>
            信じられないよ、彼女をこんな世界に引き込んでしまったのが (コカインを炙ってる)<br>
            (クラック・コカインは火であぶることで効果がより強くなる)<br><br>

            I promise she’ll be whipping meals up for a family of her own some day<br>
            約束するよ、彼女がいつの日か家族全員の食事をまかなえるようになるって<br><br>

            Nothing wrong (Nothing wrong)<br>
            何の間違いもないぜ (何も間違ってない)<br><br>

            No, nothing wrong (Ain’t nothing wrong) with a lie (Ooh)<br>
            違うね、何の間違いもない (何も間違ってない)、嘘が紛れていても<br><br>

            Nothing wrong (Nothing wrong)<br>
            何の間違いもないぜ (何も間違ってない)<br><br>

            With another short plane ride (Ain’t nothing wrong)<br>
            ほんの少しだけ飛行機に乗って (何も間違ってないだろ)<br>
            (もう一度” ハイ “になることですね)<br><br>

            Through the sky (Up in the sky)<br>
            あの空を通り抜けて (天高くまで飛んで)<br><br>

            You and I (Just you and I)<br>
            君と俺で (君と俺だけで)<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            Lost, lost in the heat of it all<br>
            ロスト、君は感情の渦の中で迷子になってる<br><br>

            Girl, you know you’re lost<br>
            ガール、君は迷子なんだよ<br><br>

            Lost in the thrill of it all<br>
            興奮の渦に飲み込まれてる<br><br>

            Miami, Amsterdam, Tokyo, Spain, lost<br>
            マイアミ、アムステルダム、東京、スペインで迷子になってる<br><br>

            Los Angeles, India, lost on a train, lost<br>
            ロサンジェルス、インド、電車の中で見失ってるんだ、ロストだよ<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            Love lost, lost? Love, love<br>
            愛の中で迷子に。ロスト？愛、愛の中で<br><br>

            Love lost, lost? Love, love<br>
            愛の中で迷子に。ロスト？愛、愛の中で<br><br>

            Love lost, love love, love lost<br>
            愛の中で迷子に。愛、愛の中で迷子に<br><br>

            Faith is the substance-<br>
            信仰とは実体のあるものである<br>
            (聖書・ヘブライ人の手紙11章から)<br><br>

            Manos arriba!-<br>
            「手を挙げろ！」<br>
            (最後に彼らが捕まってしまったことが浮かびます)<br><br>

            Then the other channel on the-<br>
            別のチャンネルでは…<br><br><br><br>
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
            <form action="{{ route('Lost.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="11">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Pyramids') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/White') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
