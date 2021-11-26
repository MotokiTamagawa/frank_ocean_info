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
            <h2>14: Bad Religion</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/90WFVUNZ-1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 14
                <br>
                Year : 2012
                <br>
                Produced by :Frank Ocean, Malay, Om’Mas Keith
                </h3>  
                <p>live映像↓</p> 
                <iframe width="260" height="95" src="https://www.youtube.com/embed/mZR6ZxxUsw8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            Taxi driver<br>
            タクシー・ドライバー<br><br>

            Be my shrink for the hour<br>
            俺の話し相手になってくれよ<br>
            (” shrink “には精神科医という意味があります）<br><br>

            Leave the meter running<br>
            メーターは切らなくてもいいからさ<br><br>

            It’s rush hour<br>
            今はラッシュ・アワーだし<br>
            (17-19時）<br><br>

            So take the streets if you wanna<br>
            さあこの街に繰り出して<br><br>

            Just outrun the demons, could you?<br>
            あの悪魔たちから逃げて欲しいんだ、できるかい？<br><br><br><br>
            </p>
            <p> 
            [Chorus]<br>
            He said “Allahu akbar”<br>
            彼はこう言った「アッラーフ・アクバル」って<br>
            (” 神は偉大である “という意味。イスラム系の敬虔な信者が思い起こされます）<br><br>

            I told him, “Don’t curse me”<br>
            だから「俺を祟らないで」って答えたよ<br>
            (同性愛を認めない宗教は数多くあります。報われない愛のことを「悪い宗教」だと言うなら、その宗教 (=愛)に対し、自身の心を傷つけないで。と言っているように思います)<br><br>

            “Bo Bo, you need prayer”<br>
            「Bo Bo、君には祈る時間が必要だ」<br>
            (” Bo Bo “は「バカな奴」という意味のスラング。またアルバム内のトラックにも登場する国・シエラ・レオネの言語で” bobo “は「少年」という意味があります)<br><br>

            I guess it couldn’t hurt me<br>
            そんなものには俺は傷つけられないよ<br><br>

            If it brings me to my knees, it’s a bad religion, ooh<br>
            もし俺が膝をついたなら、そんなの悪い信仰だ<br>
            (人を愛することで、膝をついて悔いなければいけない宗教なんて、間違っていると)<br><br>

            This unrequited love<br>
            この報われない愛は<br><br>

            To me, it’s nothin’ but a one-man cult<br>
            俺にとっては一人ぼっちのカルトにしか過ぎない<br><br>

            And cyanide in my styrofoam cup<br>
            コップに青酸カリを混ぜて<br><br>

            I can never make him love me<br>
            俺は一生彼を振り向かせられないんだ<br><br>

            Never make him love me<br>
            彼に愛してもらえることはないんだよ<br>
            (フランクは” 彼 “の恋愛対象になることはなかったんですね)<br><br>

            Love me, love me<br>
            Love me, love me<br>
            Love me, love me<br>
            Love me, love me<br>
            愛してくれ、俺を愛してくれよ<br><br>

            Love me, love<br>
            俺を愛してよ<br><br><br><br>
            </p>
            <p>
            [Verse 2]<br>
            Taxi driver<br>
            タクシー・ドライバー<br><br>

            I swear I’ve got three lives<br>
            誓うよ、俺は3つの人生を生きてきた<br>
            (本名のクリストファー・ブロー、フランク・オーシャン、そしてクィアとしてのアイデンティティのことでしょう)<br><br>

            Balanced on my head like steak knives<br>
            頭の上でステーキ・ナイフのバランスを取ってるみたいに<br>
            (危険な状態)<br><br>

            I can’t tell you the truth about my disguise<br>
            隠してきた、でも真実が言えないんだ<br><br>

            I can’t trust no one<br>
            誰も信じられないんだよ<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            He said “Allahu akbar”<br>
            あいつは言ってた「アッラーフ・アクバル」だってさ<br><br>

            I told him, “Don’t curse me”<br>
            だから「俺を祟らないで」って答えたよ<br><br>

            “Bo Bo, you need prayer”<br>
            「Bo Bo、君には祈る時間が必要だ」<br><br>

            I guess it couldn’t hurt me<br>
            そんなものには俺は傷つけられないよ<br><br>

            If it brings me to my knees, it’s a bad religion, ooh<br>
            もし俺に膝をついたなら、そんなの悪い信仰だ<br><br>

            This unrequited love<br>
            この報われない愛は<br><br>

            To me, it’s nothin’ but a one-man cult<br>
            俺にとっては一人ぼっちのカルトにしか過ぎない<br><br>

            And cyanide in my styrofoam cup<br>
            コップに青酸カリを混ぜて<br><br>

            I can never make him love me<br>
            俺は一生彼を振り向かせられないんだ<br><br>

            Never make him love me<br>
            彼に愛してもらえることはないんだよ<br><br>

            No, no ah<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            It’s a, it’s a bad religion<br>
            悪い宗教だよ<br><br>

            To be in love with someone<br>
            誰かのことを愛するってのはさ<br><br>

            Who could never love you<br>
            しかも、その人は決して愛してくれないんだ<br><br>

            Ohh, only bad, only bad religion<br>
            あぁ、こんなの悪い宗教だけだよ<br><br>

            Could have me feeling the way I do<br>
            俺をこんな気持ちにさせるのはさ<br><br><br><br>
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
            <form action="{{ route('Bad_Religion.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="14">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Monks') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Pink_Matter') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
