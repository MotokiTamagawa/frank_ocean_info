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
            <h2>2: Ivy</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AE005nZeF-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 2
                <br>
                Year : 2016
                <br>
                Produced by :Om’Mas Keith, Frank Ocean & Rostam
                </h3>  
                <p> Ivy “は、失敗に終わってしまった過去の恋愛を回想する一曲。<br>
                「思ってもないことを言って、君を傷つけてしまった」というラインに象徴されるように、本当は相手のことを<br>
                想っていたのに強く当たってしまったり、傷つけるような発言をしてしまったことに対して、<br>
                彼は深い後悔の念に苛まれます。<br>
                またフランクはリリックで、友達からもっと深い関係(恋愛関係)に進んでいく過程と、<br>
                子どもから大人へと成長する過程を照らし合わせています。
                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Chorus]<br>
            I thought that I was dreaming when you said you loved me<br>
            君が愛を伝えてくれた時、夢を見てるのかと思ったよ<br><br>

            The start from nothing, I had no chance to prepare<br>
            突然だったから、準備する暇もなくて<br><br>

            I couldn’t see you coming<br>
            君の姿は見えなかったのに<br><br>

            The start from nothing, I could hate you now<br>
            突然始まったんだ、もう俺は君を嫌うこともできるし<br><br>

            It’s quite alright to hate me now<br>
            君だって俺を嫌うことは当然できる<br><br>

            When we both know that deep down<br>
            でも二人とも心の奥底では思ってるんだ<br><br>

            The feeling still deep down is good<br>
            心の奥底で感じたあの感情は、嘘じゃないって<br><br><br><br>
            </p>
            <p>
            [Verse 1]<br>
            If I could see through walls, I could see you’re faking<br>
            あの壁の奥にいる君が見えるなら、君の本心だって見抜けたはずなのに<br>
            (” 壁の奥 “は、感情の壁のことですね。二人の間には、何かしらの感情の壁があり、それを取り除くことできないと、本心は見抜けない)<br><br>

            If you could see my thoughts, you would see our faces<br>
            もし君が俺の考えをわかっていたら、もう一度会うことになっただろうけど<br>
            (フランクは” 準備できていなかった “と語っています。友達の関係だったのに、突然の告白によって二人の関係は崩れてしまいます)<br><br>

            Safe in my rental like an armored truck back then<br>
            あの頃は、レンタルの家で、まるで武装したトラックの中にいるみたいに落ち着いてた<br><br>

            We didn’t give a fuck back then<br>
            あの頃は、俺たち何も気にしてなかったよな<br><br>

            I ain’t a kid no more, we’ll never be those kids again<br>
            でも俺たちもう子供じゃないんだ、あの頃みたいなガキには戻れない<br><br>

            We’d drive to Syd’s, had the X6 back then, back then<br>
            X6に乗ってシドの家に行ったよな、思い出すよ<br>
            (BMW X6のこと。シドはThe Internetのリード・ヴォーカル。Odd Futureに所属していました)<br><br>

            No matter what I did, my waves wouldn’t dip back then<br>
            あの頃は何をやっても、俺の髪型は上手く決まらなかったし<br>
            (” waves “は髪型を指します。また、音楽での成功を比喩しているようにも思えます。あの頃は音楽も上手くいかなったと)<br><br>

            Everything sucked back then, we were friends<br>
            何もかもしょうもなかったよな、でも俺たちは友達だった<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            I thought that I was dreaming when you said you loved me<br>
            君が愛を伝えてくれた時、夢を見てるのかと思ったよ<br><br>

            The start from nothing, I had no chance to prepare<br>
            突然だったから、準備する暇もなくて<br><br>

            I couldn’t see you coming<br>
            君の姿は見えなかったのに<br><br>

            The start from nothing, I could hate you now<br>
            突然始まったんだ、もう俺は君を嫌うこともできるし<br><br>

            It’s quite alright to hate me now<br>
            君だって俺を嫌うことは当然できる<br><br>

            When we both know that deep down<br>
            でも二人とも心の奥底では思ってるんだ<br><br>

            The feeling still deep down is good<br>
            心の奥底で感じたあの感情は、嘘じゃないって<br><br><br><br>
            </p>
            <p>
            [Verse 2]<br>
            In the halls of your hotel<br>
            君の泊まってるホテルのホールで<br><br>

            Arm around my shoulder so I could tell<br>
            君は俺の肩に手を回してきたから<br><br>

            How much I meant to you, meant it sincere back then<br>
            俺にとって君は大事な存在だったんだって思うよ、誠実な気持ちがあったんだって<br><br>

            We had time to kill back then<br>
            あの頃は時間を持て余してたしさ<br><br>

            You ain’t a kid no more, we’ll never be those kids again<br>
            でも君ももう子供じゃない、もう俺たちはガキの頃には戻れないんだ<br><br>

            It’s not the same, ivory’s illegal, don’t you remember?<br>
            もう同じじゃない、コカインも違法なんだ、覚えてるかい？<br>
            (” Ivory “は象牙を意味する言葉。スラングでコカインという意味も)<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            I broke your heart last week<br>
            先週、君の気持ちを深く傷つけた<br><br>

            You’ll probably feel better by the weekend<br>
            君は週末にはきっと吹っ切れるんだろうな<br><br>

            Still remember, had you going crazy<br>
            まだ覚えてるよ、君を狂ったように怒らせて<br><br>

            Screaming my name, the feeling deep down is good<br>
            俺の名前を叫ばせたことをね、それでも心の奥底では君を想ってた<br><br>
            </p>
            <p>
            [Chorus]<br>
            I thought that I was dreaming when you said you loved me<br>
            君が愛を伝えてくれた時、夢を見てるのかと思ったよ<br><br>

            The start from nothing, I had no chance to prepare<br>
            突然だったから、準備する暇もなくて<br><br>

            I couldn’t see you coming<br>
            君の姿が見えなかったんだ<br><br>

            The start from nothing, I could hate you now<br>
            突然始まった、もう俺は君を嫌うこともできるし<br><br>

            It’s quite alright to hate me now<br>
            君だって俺を嫌うことは当然できる<br><br>

            When we both know that deep down<br>
            でも二人とも心の奥底では思ってるんだ<br><br>

            The feeling still deep down is good<br>
            心の奥底で感じたあの感情は、嘘じゃないって<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            All the things I didn’t mean to say, I didn’t mean to do<br>
            思ってもない、やるつもりもないことで君を傷つけた<br><br>

            There were things you didn’t need to say<br>
            君も言う必要もないことで、俺を傷つけたよね<br><br>

            Did you mean to? Mean to…<br>
            あれは本気だったの？本気でそう思ってたの？<br><br>

            I’ve been dreaming of you, dreaming of you<br>
            I’ve been dreaming of you, dreaming of you<br>
            俺はまだ君を夢に見るよ、君を夢に見てるんだ<br><br>

            I’ve been dreaming, dreaming<br>
            ずっと夢に見てるのさ<br><br><br><br>
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
            <form action="{{ route('Ivy.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="19">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Nikes') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Pink_White') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
