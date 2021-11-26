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
            <h2>16: Forrest Gump</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3E_R4DV9w58" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 16
                <br>
                Year : 2012
                <br>
                Produced by :Frank Ocean, Om’Mas Keith &Malay
                </h3>  
                <p>
                1994年に公開されたトムハンクス主演の映画『Forest Gump』をモチーフに作られた作品です。<br>
                    映画をご覧になった方ならわかると思いますが、映画『Forest Gump』は主人公フォレスト・ガンプが、<br>
                    人生を純真な心と周囲の人々の協力を受けて、様々な境遇を乗り越えていくというストーリー。その中で、<br>
                    幼馴染の” ジェニー “のことを思い続け、彼らは結婚を果たします。
                フォレストは何度、ジェニーと会えなくなっても、常に彼女のことを思い続け、片時も彼女を忘れることはありませんでした。
                フランク・オーシャンはこの曲で、そんな献身的で、<br>優しく、純粋な愛情を持つ” フォレスト・ガンプ “という存在を、意中の存在に当てはめて歌っています
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
            I wanna see your pom poms from the stands<br>
            君がスタンドで” ポンポン “を持っているのが見たいんだ<br>
            (映画の主人公、フォレスト・ガンプは大学のアメフトで活躍します。その客席に” 君 “がいてほしいと。ポンポンはチアリーダーが持っているような応援道具ですね)<br><br>

            Come on, come on<br>
            来てくれたらなあって<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            My fingertips and my lips<br>
            指先も、唇だって<br><br>

            They burn from the cigarettes<br>
            タバコで焼かれてしまってる<br>
            (主人公のフォレスト・ガンプはタバコやドラッグをやる男ではありません。劇中ではタバコが嫌いなことを明かしています。ここでは、明らかにフォレストの幼馴染・後の妻になるジェニーの目線から語っています。また、フランク・オーシャン自身が、彼にとっての「フォレスト・ガンプ」に思いを馳せていることが、この後のリリックからわかります)<br><br>

            Forrest Gump<br>
            フォレスト・ガンプ<br><br>

            You run my mind, boy<br>
            君が俺の気持ちを走り過ぎて行くんだ、ボーイ<br>
            (作中で幼馴染のジェニーは、フォレストに「走って、フォレスト、走るの！」と何度も語っていることから)<br><br>

            Running on my mind, boy<br>
            俺の気持ちを駆け抜けてるんだよ、ボーイ<br><br>

            Forrest Gump<br>
            君はフォレスト・ガンプ<br><br><br><br>
            </p>
            <p>
            [Verse 1]<br>
            I know you, Forrest<br>
            君のことはよくわかってる、フォレスト<br><br>

            I know you wouldn’t hurt a beetle<br>
            君がカブトムシだって傷つけられないのを、わかってる<br><br>

            But you’re so buff and so strong<br>
            でも君は本当に大きくて、力強いんだよ<br>
            (作中で、ジェニーに暴力を振るう男たちに勇敢に殴りかかっているシーンがあります)<br><br>

            I’m nervous, Forrest<br>
            俺は緊張してるよ、フォレスト<br><br>

            Forrest Gump<br>
            フォレスト・ガンプ<br>
            (ジェニーにとってのフォレスト・ガンプ。そしてフランクにとっての意中の相手のことですね)<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            My fingertips and my lips<br>
            指先も、唇だって<br><br>

            They burn from the cigarettes<br>
            タバコで焼かれてしまってる<br><br>

            Forrest Gump<br>
            フォレスト・ガンプ<br><br>

            You run my mind, boy<br>
            君が俺の気持ちを走り過ぎて行くんだ、ボーイ<br><br>

            Running on my mind, boy<br>
            俺の気持ちを駆け抜けてくのさ、ボーイ<br><br>

            Forrest Gump<br>
            君はフォレスト・ガンプさ<br><br><br><br>
            </p>
            <p>
            [Verse 2]<br>
            I saw your game, Forrest<br>
            君のゲームを見たよ、フォレスト<br><br>

            I was screaming, “Run forty-four!”<br>
            俺叫んでたんだよ「走って！44番！」ってね<br>
            (フォレスト・ガンプが着けていた背番号は44番。フランク・オーシャンは客席から彼を見ていたと)<br><br>

            But you kept running past the end zone<br>
            でも君はゾーンを超えても、走り続けてる<br>
            (彼はルールを理解せずにアメフトをやっていました。そのためどこまで走ればいいかわからないまま走り続けるシーンがあります。フランクにとってのフォレストは、声をかけても立ち止まってくれなかったと)<br><br>

            Oh, where’d you go, Forrest?<br>
            あぁ、どこまで行くんだよフォレスト？<br><br>

            Forrest Gump<br>
            君はフォレスト・ガンプさ<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            My fingertips and my lips<br>
            指先も、唇だって<br><br>

            They burn from the cigarettes<br>
            タバコで焼かれてしまってる<br><br>

            Forrest Gump<br>
            フォレスト・ガンプ<br><br>

            You run my mind, boy<br>
            あなたが私の気持ちを走り過ぎて行くの、ボーイ<br><br>

            Running on my mind, boy<br>
            私の気持ちを駆け抜けてるのよ、ボーイ<br><br>

            Forrest Gump<br>
            あなたはフォレスト・ガンプ<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            Forrest green, Forrest blues<br>
            フォレスト・グリーン、そしてフォレスト・ブルース<br>
            (グリーンは” 嫉妬 “を表すカラー。フランクの意中の相手は彼に振り向かず、他の相手と付き合ってしまったんですね。その相手に嫉妬していると。その後に” ブルース “が続くことから、悲しい出来事が起きたことが予想できます)<br><br>

            I’m remembering you<br>
            今君を思い出してるところだよ<br><br>

            If this is love, I know it’s true<br>
            もしこれが愛ってモノなら、真実の愛なんだよ<br><br>

            I won’t forget you<br>
            君を絶対忘れないから<br><br>

            (You, you, oh, you, you)<br>
            (君をね、忘れたりなんかしない)<br><br>

            It’s for you, Forrest<br>
            君に送るよ、フォレスト<br><br>

            (You, you, oh, you, you)<br>
            (君にね、君に送るんだ)<br><br>

            It’s for you, Forrest<br>
            君に送るよ、フォレスト<br><br>

            Forrest Gump<br>
            フォレスト・ガンプ<br><br><br><br>
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
            <form action="{{ route('Forrest_Gump.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="16">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Pink_Matter') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/End') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
