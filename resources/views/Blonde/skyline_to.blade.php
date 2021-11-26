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
            <h2>6: Skyline To </h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CtkUJb22oSQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 6
                <br>
                Year : 2016
                <br>
                Produced by :Malay, Tyler, The Creator, <br>Om’Mas Keith & Frank Ocean
                </h3>  
                <p> 
                Skyline Toでは、フランク・オーシャンと交際相手がドライブをした後、カリフォルニアのビーチで愛を育む<br>
                情景が浮かんでくる一曲になっています。この曲で目立つ表現が、「太陽と月の光」を情景を表すのに<br>
                多用していること。「月明かりの下にいる二人」「世が明けて、太陽の光が俺たちを包む」<br>
                「夕方になって、黄金の輝きは終わりを迎える」などリスナーの頭の中に、夏のLAの情景を視覚的に<br>
                頭に浮かべながらストーリーは進んでいきます。

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
            This is joy, this is summer<br>
            お楽しみさ、もう夏だよ<br><br>

            Keep alive, stay alive<br>
            生き続けるのさ、生き延びるんだ<br>
            (アメリカでは、気温が上がれば上がるほど犯罪率が高くなるデータが出ています。夏は楽しい季節である反面、危険な時期でもあると)<br><br>

            Got your metal on, we’re alone<br>
            君は” メタル “をつけてるけど、俺たち二人とも孤独なんだ<br>
            (ここの” メタル “は結婚指輪ではないかと思います。もしくは、相手の男性が興奮している様子のどちらか、だと考えられます)<br><br>

            Making sweet love, takin’ time<br>
            甘い愛を育むのさ、ゆっくり時間をかけて<br><br>

            ‘Til God strikes us<br>
            神様に打ち堕とされる、その時まで<br>
            (キリスト教の教えの中には、同性愛を「罪」として考えるものもあります。また、先ほど「結婚指輪」を相手がつけていると示唆されていたことから、不倫の関係である可能性も浮かびます。神に罰せられる認識があることは間違いありません)<br><br>

            That’s a pretty fucking fast year flew by<br>
            1年が過ぎていくのは、本当にクソほど早くてさ<br><br>

            That’s a pretty long third gear in this car<br>
            この車を3のギアに置いておく時間は、本当に長いけど<br>
            (マニュアル車でギアを長時間セットしておくのは「3」なんですね)<br><br>

            Glidin’ on the five<br>
            5を走っていく<br>
            (LAの高速道路” Interstate 5 “のこと)<br><br>

            The deer run across, kill the headlights<br>
            鹿が道を横切って、ヘッドライトを殺すのさ<br>
            (LAの高速ではシカと遭遇することも少なくありません。シカは車のヘッドライトを見ると、動きを止めてしまう習性があるので、遭遇した際にはヘッドライトを消さなければいけない)<br><br>

            Pretty fucking, underneath moonlight now<br>
            今は月明かりの下にいるんだ<br>
            (” Pretty fucking “は「強調」の意味とも取れますが、月明かりの下で、セックスをしているという意味にも取れます)<br><br>

            Pretty fucking, sunrise in sight<br>
            本当だよ、夜が明けてきた<br>

            In comes the morning, haunting us with the beams<br>
            朝が来ると、光のビームが俺たちを包んで<br><br>

            Solstice ain’t as far as it used to be<br>
            あの頃みたいに太陽はそう遠くはないんだ<br>
            (” Soltice “は夏至を意味する言葉。この曲が夏の終わりに作られたもので、太陽が一番高く登る夏至の時期の思い出を回想しているように思えます。またまた身体の小さかった少年時代を思い返して、太陽との距離感が変わったことを表現しているのかもしれません)<br><br>

            It begins to blur, we get older (Blur!)<br>
            年をとれば取るほど、太陽の光はぼやけてくるんだ (ぼやけるんだよ)<br><br>

            Summer’s not as long as it used to be<br>
            あの頃みたいに夏は長くない<br>
            (少年時代より、時間が過ぎるのが早いんだと)<br><br>

            Everyday counts like crazy (Smoke, haze)<br>
            だから毎日がクレイジーなほど大事なのさ (吸って、ぼんやりしてる)<br><br>

            Wanna get soaked?<br>
            濡れたいのかい？<br><br>

            Wanna film a tape on the speed boat?<br>
            スピードボートの上で撮影したいって？<br>
            (女優のPamela Anderson、アーティストTom Leeの二人はボートの上で撮影されたセックス・テープが流出した過去を持っていますが、そのことだと思われます)<br><br>

            We smell of Californication<br>
            ” カリフォルニケーション “の香りがする<br>
            (” カリフォルニケーション “はまさに「カリフォルニアという土地にイメージされるもの」という意味であり、カリフォルニアの生活、カルチャー全般のことを指します。性的な意味合いやドラッグを指して使われることもあり、先ほどの「撮影」などとも繋がってきます。カリフォルニアのビーチの月明かりの下で、彼らが楽しんでいるのが浮かびます)<br><br>

            Strike a pose<br>
            ポーズを決めるのさ<br><br>

            Everything grows in the Congo<br>
            全てがコンゴで育ってるのさ<br>
            (コンゴはアフリカの国ですが、マリファナの名産地としても知られています）<br><br>

            Everything grows<br>
            何もかも、そこで育つんだよ<br><br>

            Can you come when I call again?<br>
            連絡すれば、また来てくれるかい？<br><br><br><br>
            </p>
            <p>
            [Verse 2]<br>
            On comes the evening, gold seeking ends<br>
            夕方になれば、ゴールドの輝きは終わりを迎える<br>
            (太陽が落ちていく様子です)<br><br>

            Piece in my hands worth twice than a friend<br>
            手に込められた一欠片は、友達の2倍は価値のあるもの<br>
            (” Piece – 一欠片 “は、マリファナのことだと思われます。” Piece “は” Peace – 平穏 “にも聞こえますので、「葉っぱがもたらしてくれる平穏は、友達よりも価値がある」と彼は言っているように思えます)<br><br>

            And two limbs over shoulder, carried away<br>
            二本の腕を肩に回して、我を忘れてさ<br>
            (フランクが相手の肩に手を回している光景が浮かびます）<br><br>

            Because I’m stronger and the Congo is damned (smoke)<br>
            だって俺の方が強いからさ、コンゴはダメになっちまってる (吸うのさ)<br>
            (コンゴ民主共和国は、度重なる紛争や、感染病、飢饉に襲われていました)<br><br>

            In comes the morning (smoke)<br>
            朝を迎える、その時まで (吸うのさ)<br><br>

            In comes the morning (haze)<br>
            朝を迎える、その時までね (吸うんだよ）<br><br><br><br>
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
            <form action="{{ route('Skyline_To.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="23">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Solo') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Self_Control') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
