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
            <h2>4: Be Yourself </h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/BU59wJ9qb6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 4
                <br>
                Year : 2016
                <br>
                Produced by :Buddy Ross
                </h3>  
                <p> 
                Be Yourselfは、フランク・オーシャンの少年時代の友人の母親” ロージー・ワトソン “さんが息子にあてた<br>
                ボイス・メッセージをそのまま楽曲に落とし込んだ一曲。アルバムがリリースされた際には、この音声は<br>
                フランクの母親・カトーニャさんによるものだと思われていましたが、フランクの兄弟であるライアンによって、<br>
                この音声が友人の母親のものであると後から発覚したそう。(電話の音声をそのまま使う形は過去にも<br>
                『Channel Orange』の” Not Just Money “で用いられていました)ボイス・メッセージには、<br>
                大学に進学した息子に「他の誰かに成ろうとしてはいけない。自分自身でいるのよ」というアドバイスが<br>
                込められていました。その後は「ドラッグやマリファナ、アルコールを使ってはいけない」と息子を諭しています。

                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Skit: Rosie Watson]<br>
            Many college students have gone to college<br>
            多くの学生は、大学に進学すると<br><br>

            And gotten hooked on drugs, marijuana, and alcohol<br>
            ドラッグやマリファナ、アルコールにハマってしまうのよ<br><br>

            Listen, stop trying to be somebody else<br>
            聞いて。” 他の誰か “に成ろうとするのはやめるのよ<br><br>

            Don’t try to be someone else<br>
            誰かに成ろうとしちゃいけないの<br><br>

            Be yourself and know that that’s good enough<br>
            自分自身でいるのよ、それで十分だって理解するの<br><br>

            Don’t try to be someone else<br>
            誰かに憧れて、その人に成ろうとしちゃいけない<br><br>

            Don’t try to be like someone else<br>
            誰かのように、なりたいなんて思っちゃダメよ<br><br>

            Don’t try to act like someone else<br>
            誰かの真似なんてしちゃいけないわ<br><br>

            Be yourself, be secure with yourself<br>
            あなた自身でいるの、自分は自分で守るのよ<br><br>

            Rely and trust upon your own decisions<br>
            自分自身の決断を信じるのよ<br><br>

            On your own beliefs<br>
            自分自身の信念をもって決めるの<br><br>

            You understand the things that I’ve taught you<br>
            私の教えてきたことは理解してるでしょ<br><br>

            Not to drink alcohol, not to use drugs<br>
            アルコールを飲まない、ドラッグはやらない<br><br>

            Don’t use that cocaine or marijuana<br>
            コカインやマリファナは使っちゃいけないの<br><br>

            Because that stuff is highly addictive<br>
            中毒性がとても高いからダメなのよ<br><br>

            When people become weed-heads<br>
            ウィードばっかりやってる人は<br><br>

            They become sluggish, lazy, stupid and unconcerned<br>
            頭も働かないし、怠惰で、無関心な馬鹿になってしまうの<br><br>

            Sluggish, lazy, stupid and unconcerned<br>
            頭のキレない、怠惰で、無関心なアホよ<br><br>

            That’s all marijuana does to you, okay? This is mom<br>
            それがマリファナがあなたに及ぼす影響なの。わかった？ママよ<br><br>

            Unless you’re taking it under doctor’s, um, control<br>
            お医者さんの処方なら、まぁ<br><br>
            Then it’s regulated<br>
            ちゃんと制御されてるはずだけど<br><br>

            Do not smoke marijuana, do not consume alcohol<br>
            マリファナは吸っちゃダメなの、アルコールも飲んじゃダメ<br><br>

            Do not get in the car with someone who is inebriated<br>
            酔っ払った人と車に乗っちゃいけないのよ<br><br>

            This is mom, call me, bye<br>
            ママからよ、ちゃんとかけ直してね。じゃあね。<br><br><br><br>

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
            <form action="{{ route('Be_Yourself.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="21">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Pink_White') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Solo') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
