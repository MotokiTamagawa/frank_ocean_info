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
            <h2>8: Pilot Jones</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vP8LWMcIWXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 8
                <br>
                Year : 2012
                <br>
                Produced by :Shea Taylor
                </h3>  
                <p>
                この曲のタイトル” Pilot Jones “はアメリカで1997年公開の映画『love jones』から引用したものだと思われます。<br>
                アメリカに住むアフリカン・アメリカン同士の恋愛がこの映画では描かれております。<br>
                リリック中でフランクは一人の女性との恋愛関係を語っています。二人の関係性は「普通」とは呼ぶことはできない、<br>
                「ドラッグ・ディーラー同士の恋愛」という特殊なモノでした。<br>
                彼女はフランクの運ぶドラッグを使用していることがリリックからは理解できます。<br><br>

        </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Intro]<br>
            We once had things in common<br>
            俺たち色々な物を一緒に共有してた<br><br>

            Now the only thing we share is the refrigerator<br>
            それが今じゃ一緒に使ってるのは冷蔵庫くらいだよ<br><br>

            Ice cold, baby, I told you, I’m ice cold (Ice cold!)<br>
            アイス・コールド、ベイビー言ったよね、俺はアイスみたいに冷たいんだ (アイス・コールド！）<br>
            (” Cold “と” Cool “と言う意味にも捉えられますので、冷蔵庫の冷たさのようなクールさを彼は持っていると)<br><br>

            You out here flyin’ high (High)<br>
            君はここから飛び出して、高く飛んでいく (高く)<br><br>

            Go head, fly that thing!<br>
            もっと高く、飛び越していくんだ！<br><br>

            High, high, yeah<br>
            高く、高く、エイ<br><br>

            But fly alone<br>
            でも飛んでいくのは、一人っきりさ<br><br><br><br>
            </p>
            <p>
            [Verse 1]<br>
            You always smokin’ in the house<br>
            君はいつも家の中で吸ってるよね<br><br>

            What if my mother comes over?<br>
            もしママが入ってきたらどうするんだい？<br><br>

            You can’t get up and get a job<br>
            君は起き上がって、仕事を見つけることができない<br><br>

            Cause this little hustle’s getting you by<br>
            だってこのハッスルが君の近くにいるから<br>
            (ハッスル = フランクのこと。彼が届けるドラッグを彼女は使っています。フランクが養っている、ドラッグに溺れて普通の仕事ができていないことが浮かびます)<br><br>

            You’re the dealer and the stoner<br>
            君はディーラーでもストーナーある<br>
            (ディーラー＝ 売人、ストーナー = 使用者)<br><br>

            With the sweetest kiss I’ve ever known<br>
            俺の知ってる限り、一番スイートなキスは君となんだ<br>
            (いつも葉っぱ・ドラッグを吸引している彼女とのキスはスイートなんだと)<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            I know what I was on<br>
            俺はわかってるんだ<br><br>

            I had a Pilot Jones (What you know about it?)<br>
            俺はパイロット・ジョーンズと一緒だったって (君に何がわかるんだい？)<br>
            (この曲中ではフランクの「彼女」がこの存在に当たります。曲中では飛行機が飛ぶ効果音も入っています)<br><br>

            She took me high (Oh, did she now?)<br>
            彼女は俺をハイにしてくれた (それで今は？)<br><br>

            Then she took me home (We talkin’ ‘bout)<br>
            そしたら彼女は俺を家に連れ帰ったんだ (話してるとこだ)<br><br>

            Pilot Jones, Pilot Jones<br>
            パイロット・ジョーンズ、パイロット・ジョーンズ<br><br><br><br>
            </p>
            <p>
            [Verse 2]<br>
            Tonight she came stumblin’ across my lawn again<br>
            今夜彼女は俺の家の庭を震えながら歩いてきて<br><br>

            I just don’t know why I keep on tryin’ to keep a grown woman sober<br>
            俺はわからないんだ、なんで俺はこの大人の女性から酒やドラッグを取り上げようとしてるのか<br><br>

            See there you go reachin’ up your blouse<br>
            見ろよ、君はブラウスに手を伸ばしてる<br><br>

            And no I don’t want a child<br>
            だけど俺は子供が欲しくないんだ<br>
            (ここで、女性は大人になりきることができていません。彼は大人として対応していますが、彼女に子供でいることを求められているように見えます)<br><br>

            But I ain’t been touched in a while<br>
            しばらくずっと会ってなかったよな<br><br>

            By the dealer and the stoner<br>
            ディーラー、そしてストーナーとしては<br><br>

            With the sweetest kiss I’ve ever known, ever known<br>
            俺の知ってる、一番スイートなキスは君とした、あのキスだから<br>
            (ローリン・ヒル” The Sweetest Thing”を引用していると思われます。『love jones』の主題歌はローリン・ヒルが務めています)<br><br>
            </p>
            <p>
            [Chorus]<br>
            I know what I was on (Ever known)<br>
            俺はわかってるよ (知ってんだ)<br><br>

            I had a Pilot Jones (What you know about it?)<br>
            パイロット・ジョーンズと一緒だったって (君に何がわかるんだい？)<br><br>

            She took me high (Oh, did she now?)<br>
            彼女は俺をハイにしてくれた (それで今は？)<br><br>

            Then she took me home (We talkin’ ‘bout)<br>
            そしたら彼女は俺を家に連れ帰ったんだ (話してるとこだ)<br><br>

            Pilot Jones, Pilot Jones<br>
パイロット・ジョーンズ、パイロット・ジョーンズ<br><br><br><br>
            </p>
            <p>
            [Verse 3]<br>
            In the sky up above, the birds<br>
            空高くには、鳥たちがいて<br><br>

            I saw the sky like I never seen before<br>
            俺は今まで見たことのない物のように、空を見てた<br><br>

            You thought I was above you<br>
            君は俺が「上」にいたと思ってるだろうけど<br><br>

            Above this in so many ways<br>
            ここで言う「上」っていうのは色んな意味でさ<br><br>

            But if I got a condo on a cloud<br>
            でももし家が雲の上にあったら<br><br>

            Then I guess you can stay at my place<br>
            そしたら君も俺の居場所にい続けられるよね<br>
            (彼女はドラッグ中毒なので「ハイ」でい続けなければ、苦しいというわけです)<br><br>

            I’ma get one<br>
            きっと手に入れるよ<br><br>

            I need ya<br>
            君が必要だから<br><br>

            Admit it<br>
            認めるよ<br><br>

            You’re my Pilot Jones<br>
            君が俺のパイロット・ジョーンズだってね<br><br><br><br>

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
            <form action="{{ route('Pilot_Jones.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="8">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Super_Rick_Kids') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Crack_Rock') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
