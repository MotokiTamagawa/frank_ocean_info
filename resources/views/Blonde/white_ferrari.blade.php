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
            <h2>14: White Ferrari</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Dlz_XHeUUis" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 14
                <br>
                Year : 2016
                <br>
                Produced by :Om’Mas Keith, Jon Brion & Frank Ocean
                </h3>  
                <p> 白のフェラーリと題された一曲には、フランクが彼氏(彼女)とドライブをしているシーンから始まります。<br>
                        フランク・オーシャンは大の車好きとしても有名です。多くのアーティストは、” 車 “を「お金持ちである」<br>
                        といったステータスを表す物として用いがちですが、彼の場合は、ストーリーテリングにおいての一つの<br>
                        表現として、” 車 “を用いています。車中で多くの時間を過ごす、彼にとって” 車 “とは、<br>
                        その時期に経験した、色々な記憶・感情が込められたものです。そんな” 車 “という一つの「フレーム」を<br>
                        曲に落とし込むことによって、その時期の記憶・感情を思い起こさせるんですね。



                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            Bad luck to talk on these rides<br>
            話をするのが車の中で残念だよ<br>
            (” ride “はドラッグでハイになっているという意味にも捉えられます。ハイになっている状態で話すのは難しいと)<br><br>

            Mine on the road, your dilated eyes watch the clouds float<br>
            俺は道路を、君の見開いた目は、雲が浮かんでいるのをじっと見てる<br>
            (タイトルのホワイト・フェラーリをフランクが運転している姿が浮かびます。。” 白 “はコカインを彷彿とさせる色ですが、雲も” 白い “色をしていることから、助手席に座る相手がハイであることが予想されます)<br><br>

            White Ferrari, had a good time<br>
            ホワイト・フェラーリ、良い時間だったよね<br><br>

            (Sweet 16, how was I supposed to know anything?)<br>
            (スイート16、俺が何を知れたっていうんだい？)<br>
            (スイート16は16歳の時に行うアメリカ版の成人式。彼が無知で純粋であることが表現されています)<br><br>

            I let you out at Central<br>
            君をセントラルまで送って<br>
            (カリフォルニア・Central Cityのこと)<br><br>

            I didn’t care to state the plain<br>
            当たり前のことを、口にしたくなかった<br><br>

            Kept my mouth closed, we’re both so familiar<br>
            口は閉じたまま、けど俺たちは深く信頼し合ってた<br><br>

            White Ferrari, good times<br>
            ホワイト・フェラーリ、良い思い出だよ<br><br><br><br>
            </p>
            <p>
            Stick by me, close by me<br>
            俺の近くにいてくれよ<br><br>

            You were fine, you were fine here<br>
            君は最高だった、ここにいれば良かったのに<br><br>

            That’s just a slow body<br>
            あんなの、ただの遅いボディーさ<br>
            (自身をホワイト・フェラーリに置き換えて、他の車 (人)はイケてないと言っているように思えます）<br><br>

            You left when I forgot to speak<br>
            伝え忘れたことを思い出してさ、君と別れた後に気づいたよ<br><br>

            So I text the speech, lesser speeds, Texas speed, yes<br>
            だからメッセージを送ったんだ、いつもよりもっとゆっくりね、テキサス・スピードさ。そうだろ<br>
            (車で彼女を送った後に、家に一人で帰る途中、彼の頭の中に伝えられなかったことが思い浮かんだんですね。ドライブ中にテキストを打つ様子が浮かびます。<br>
            テキサス・スピード = テキサスがリーン (咳止めシロップで作るドラッグ)が生まれた場所であることから、リラックス・ゆっくりしたスピードが浮かびます。もしくは、テキサスの高速道路の制限速度のことを言及しているのかもしれません。テキサスはどの州よりも高速道路の制限速度が高い州です。テキストを打つスピードがゆっくりでも、ハイな彼は車を飛ばしていたのかもしれません)<br><br>

            Basic takes its toll on me, ‘ventually, ‘ventually, yes<br>
            そんな簡単なことで、こんなに苦しむとはね、結局、結局はさ、そうなんだよ<br><br>

            Ahh, on me ‘ventually, ‘ventually, yes<br>
            こんなに苦しめられるなんて、結局、結局さ、そうなんだよ<br><br><br><br>
            </p>

            <p>
            I care for you still and I will forever<br>
            「君のことをずっと、これからもずっと大事にし続けるよ」<br><br>

            That was my part of the deal, honest<br>
            それが取引の一部だったんだ、正直に言うとね<br><br>

            We got so familiar<br>
            俺たち本当に仲良くなったよな<br><br>

            Spending each day of the year<br>
            一年のうち毎日を過ごしてさ<br>
            (The Beatles ” Here, There And Everwhere “から)<br><br>

            White Ferrari, good times<br>
            ホワイト・フェラーリ、良い思い出だよ<br><br>

            In this life (life), in this life (life)<br>
            この人生でさ、この人生の中で<br><br>

            One too many years<br>
            一つのことに長すぎるほどの年月をかけて<br><br>

            Some tattooed eyelids on a facelift<br>
            シワを取ったまぶたにタトゥーを刻む<br><br>

            (Thought you might want to know now)<br>
            (君が知りたがってる、その思いは)<br><br>

            Mind over matter is magic, I do magic<br>
            「気持ちが一番大事」だなんてマジックさ、俺はそのマジックをしてるだけ<br>
            (二人の間には、何かしらの問題があり、彼はマジックでその問題をなんとか誤魔化していただけだった)<br><br>

            If you think about it, it’ll be over in no time<br>
            君がそれを思い浮かべていたら、もう時間が無くなっちゃうね<br><br>

            And that’s life<br>
            それが人生ってものなんだよ<br><br><br><br>
            </p>
            <p>
            I’m sure we’re taller in another dimension<br>
            別次元なら、もっと俺たちは高くまでいけるんだ<br><br>

            You say we’re small and not worth the mention<br>
            君は言ったよね、俺たちはちっぽけで、言及する価値もないってさ<br><br>

            You’re tired of movin’, your body’s achin’<br>
            君は動くのに疲れ切って、身体は痛んでる<br><br>

            We could vacay, there’s places to go<br>
            俺たちなら旅行にだって行けるよ、行くところならあるから<br><br>

            Clearly this isn’t all that there is<br>
            ここにあるものが、全てじゃないんだよ<br><br>

            Can’t take what’s been given<br>
            与えられてきたものを、今は受け取れないけど<br><br>

            But we’re so okay here, we’re doing fine<br>
            でも俺たちはここでいいんだ、ここで大丈夫なんだよ<br><br>

            Primal and naked<br>
            最初に戻ってさ、裸になって<br><br>

            You dream of walls that hold us in prison<br>
            君は俺たち二人を、牢獄の中に閉じ込める「壁」を夢見てる<br>
            (彼(彼女)がフランクのことを「壁」の中に閉じ込めておきたかったことがわかります)<br><br>

            It’s just a skull, least that’s what they call it<br>
            でもそんなのは、ただの「頭蓋骨」さ、少なくともみんなはそう呼んでる<br>
            (彼(彼女)の思いとは裏腹に、フランクは、「感情」というものに「壁」など無いと考えています。「感情」はもっと自由で、開かれたものであり、それを閉じ込めておくための頭蓋骨はただの「器」であり、二人の気持ちを押し込める「牢獄」にはなり得ないんだと)<br><br>

            And we’re free to roam<br>
            そうして俺たちは、自由に歩んで行けるのさ<br><br><br><br>
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
            <form action="{{ route('White_Ferrari.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="31">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Close_to_You') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Seigfried') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
