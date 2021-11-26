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
            <h2>11: Pretty Sweet</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HWDaIRe8_XI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 11
                <br>
                Year : 2016
                <br>
                Produced by :Malay, Om’Mas Keith & Frank Ocean
                </h3>  
                <p> 
                『Blonde』から11曲目” Pretty Sweet “は、ビートの切り替わりが非常に印象的な一曲。<br>
                曲自体は短く、2:39に収まっているのですが、1:40あたりから一斉にドラムが入り込み、<br>
                曲のペースは一気に増します。ここからのサウンドはまさに「カオス」そのもの。<br>
                リリックにしっかりとした文脈が読み取れないのも、その「カオス」さを表しているのかもしれません
                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Intro]<br>
            Now, to the edge I’ll race<br>
            さぁ、俺は最後まで競い続ける<br><br>

            To the end I’ll make it<br>
            最後まで、やりきってやる<br><br>

            All the risk, I’ll take it<br>
            どんなリスクだって俺が背負って<br><br>

            Head bang with my faux friends<br>
            フェイクな友達とヘッドバンキングして<br>
            (音楽に乗せて頭を揺らすこと)<br><br>

            We pour a taste out for the dead<br>
            俺たちは死者に酒を手向けるんだ<br>
            (先ほどの” フェイクな友人 “というワードから、「最後の晩餐」が浮かびます。イエス・キリストもユダという裏切り者に囲まれていました)<br><br>

            This is the blood, the body, the life right now<br>
            ここに流れる血、身体、この生命<br><br>

            The height right now<br>
            そして今あるこの「高み」が<br>
            (ドラッグでハイなこと。彼が名声を手に入れたことが浮かびます）<br><br>

            Might be what I need<br>
            俺には必要だったのかも<br><br>

            Might be what I need<br>
            俺には必要だったのかもな<br><br>

            Said you wanna hurt me now<br>
            君は俺を傷つけたいって言ってたよね<br><br>

            You can’t hurt me now<br>
            君には傷つけられないよ<br><br>

            That might be what you need<br>
            それが君の求めていることだとしてもね<br><br><br><br>
            </p>
            <p>
            [Verse]<br>
            What it means to be alive on this side<br>
            「こっち側」で生きるってことは<br>
            (「生と死」というテーマを語っています。現世で生きていることを「こっち側」、死んでしまったら「あの世」に行くことについて語っています。また、彼がセクシャル・マイノリティであることも関係しているかもしれません。ゲイとストレートの世界を分けて、ゲイとして生きている人を「こっち側」と呼んでいるのかもしれません)<br><br>

            (Said you wanna kill me now)<br>
            (俺を殺したいって言ってたよな)<br><br>

            On this side<br>
            こっち側にいるなら<br><br>

            (Don’t let me down)<br>
            (俺をガッカリさせないでくれ)<br><br>

            On this side<br>
            こっち側ならさ<br><br>

            (Down, down)<br>
            (失望させないで)<br><br>

            Fuck the other side<br>
            「あっち側」なんてクソくらえ<br><br>

            I’m on this side, I’m on this side, I’m on this side<br>
            俺は「こっち側」なんだ、「こっち側」さ<br><br>

            How it feels to have arrived<br>
            そこに辿り着いたら、どんな心地なんだろうな<br>
            (死んでしまったら、どんな感覚になるのだろうと)<br><br>

            I’m inside, I’m inside<br>
            今、内側にいるよ、内側にさ<br>
            (性的な表現にも聞こえます）<br><br>
            　
            Those are my niggas for life<br>
            あいつらは、一生の仲間だよ<br><br>

            Mothers of us be kind<br>
            俺たちの母親は、優しくなきゃ<br><br>

            To the fathers on whom we rely<br>
            俺たちが頼ってる父親にさ<br><br>

            Fathers of us be kind<br>
            父親だって優しくなきゃ<br><br>

            To the mothers on whom we rely<br>
            俺たちの大事な母親にね<br><br>

            Ah-hah, ah-hah, ah-hah, ah-hah<br>
            Ah-hah, ah-hah, ah-hah, ah-hah<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            We know you’re sugar<br>
            俺たちはわかってる、君が” シュガー “なんだって<br>
            (フランクの生まれ育ったサウスでは、ゲイの方を「シュガー」と呼ぶことがあります)<br><br>

            We know you’re sweet like a sucka<br>
            君が飴みたいに甘いんだって、知ってるんだよ<br><br>

            Pretty sweet, pretty sweet<br>
            とっても甘い、君はとっても甘いのさ<br><br><br><br>
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
            <form action="{{ route('Pretty_Sweet.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="28">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Solo_Reprise') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Facebook_Story') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
