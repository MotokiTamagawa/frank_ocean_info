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
            <h2>Provider</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XKQNJzquduI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- 随時変更 -->
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2017
                <!-- <br>
                Produced by : Midi Mafia -->
                </h3>  
                <p> 

            </p>    
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Verse1]<br>
            Memo finna start acting out if I don’t see him soon<br>
            Memoは俺に会わないと変になっちまいそうで<br>
            (フランクのボーイ・フレンドのMemo Guzmanのこと。” Futura Free “でも彼の存在は語られています)<br><br>

            Yeah my best friend ain’t backing out, it’s still on sight, fool<br>
            ああ、お前は俺の親友で、裏切ったりしないよ。しっかり見てるからさ、バカだな<br><br>

            I’m the only one out here on the night loops<br>
            I’m the only one out here on the night loops<br>
            毎日繰り返すこの夜で、いつも俺は一人なんだ<br><br>

            Trophy case still light, body need a race stripe<br>
            トロフィーケースはまだ軽いまま、車のボディーにはレーシングストライプを欲してる<br>
            (彼の評価とは裏腹にグラミーなどの賞は2つのみの受賞に留まっています。彼の車好きがここにも現れています）<br><br>

            And these minerals on my body break light<br>
            身につけた宝石が反射してる<br>
            (フランクが身につけているダイヤモンドなどの宝石のこと。ブレーキランプとかけています)<br><br>

            And these reds on my body brakelight<br>
            この身体のキスマークはブレーキランプみたいだよ<br><br>

            New man comin’ up ahead on his own two<br>
            あいつは自分の足でやってくるさ<br>
            (Memo Guzmanのことでしょう)<br><br>

            Is you a natural blondie like Goku?<br>
            お前は孫悟空みたいに地毛が金髪なのかい？<br>
            (ドラゴンボールの孫悟空です。しかし悟空の地毛は黒なので、本当の自分を偽っているのではないか。とフランクは疑っています)<br><br>

            Sleepin’ on my belly in a loop like a serpent<br>
            俺の腹の上で蛇みたいに丸まって寝てる<br><br>

            Talking Heads ripplin’ on the surface<br>
            そこにTalking Headsがぼんやり流れてるんだ<br>
            (Talking Headsは1970s〜NYのバンド)<br><br><br><br>
            </p>
            <p>
            [Pre-Chorus]<br>
            Eyes low, chin heavy shoegazer<br>
            目線は落ちてて、うつむいてる、シューゲーザーみたいだろ<br>
            (シューゲイザーは、1980s-UKインディーロックのジャンル。その名の通り観客よりも、自分たちの靴を見ながら演奏します。フランクが人の目を見(れ)ないことが語られます)<br><br>

            Moonwalkin’, R.I.P. Stanley Kubrick<br>
            ムーンウォークなんかしてね、Stanley Kubrickよ、安らかに眠れ<br>
            (Stanley Kubrickは宇宙を題材にしていた映画監督、1999年に亡くなっています)<br><br>

            You had you some birthdays, could you prove it?<br>
            もう何年も経ったよな、証明できるかい？<br><br>

            Show me the wisdom in your movement<br>
            その動きで、君の経験を証明してくれよ<br><br>

            Show me some wisdom in your movement<br>
            その動きで、培った経験を見せてくれよ<br>
            (数年間会っていなかった恋人に、その間に培った性的なテクニックの向上を証明してくれ。と言います)<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            Feelings you provide<br>
            Feelings you provide<br>
            君が与えてくれるこの感情だよ<br><br>

            I know it, I know it<br>
            わかってる、わかってるんだ<br><br>

            The feelings I, the feelings, I know it, I<br>
            この俺の感情のことさ、わかってる、俺はさ<br><br>

            Feelings you provide<br>
            Feelings you provide<br>
            君が与えてくれるこの気持ち<br><br>

            I know it, I know it<br>
            わかってる、わかってるんだ<br><br>

            The feelings, I know it, the feelings, I, I<br>
            この感情のことだよ、わかってるんだ、この感情をね<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            Tonight I might change my life<br>
            今夜、俺の人生が変わってしまうかも<br><br>

            If you lived like I live<br>
            君も俺みたいな生活で生きてたら<br><br>

            You couldn’t live without it<br>
            この感情なしじゃ生きれないだろうね<br><br>

            Said I’d be your new best friend<br>
            俺が君の新しい親友になれるって言ったよな<br><br>

            But what more? Yeah<br>
            でもそれ以上じゃないのかい？エイ<br><br>

            Ain’t too late to out<br>
            遅すぎるなんて事はないよ<br><br>

            Ooh, ooh, ooh, ahhh<br>
            Provide, provide<br>
            Pro…<br>
            君が与えてくれるんだ<br><br>

            Ooh, oooh, oooh<br>
            Tonight I might change my life, all for you<br>
            今夜、俺の人生が変わってしまうかも、全てお前のためにね<br><br>

            All for you (Provide)<br>
            全部お前のためにさ<br><br><br><br>
            </p>

            <p>
            [Verse2]<br>
            Provided, diamond lane that didn’t exist<br>
            ダイヤモンド・レーンなんて存在してなかったんだ<br>
            (優先レーンのこと。彼に会いに行くために優先レーンを使って急ぎます)<br><br>

            Packed the Astro van and brought my kids through<br>
            バンにシャツを詰めて子供達に持って行くんだ<br>
            (アルバム『Blonde』のマーチャンダイスtシャツのこと。子供というのはファンのことですね)<br><br>

            Prada tee on the eldist, throw the Gildan on the children<br>
            年長者にはプラダのtシャツをあげて、幼い子にはギルダンか<br>
            (不公平性を表現しています。フランクのtシャツは全てギルダン製です)<br><br>

            Hand-me-down fits<br>
            俺の手作りのシャツだぜ<br><br>

            Chest pass, see mist off rotation (Swish, swisha)<br>
            チェスト・パス、煙が動くのを見せてくれよ (スイッシュ)<br>
            (バスケのチェスト・パスと、葉っぱを回すことをかけています。swishはボールがゴールに入る音のこと。swishaは葉っぱのスラングです)<br><br>

            Stiff smile just like I’m Aphex Twin (Yeah, come to daddy, yeah)<br>
            Aphex Twinみたいにこわばった笑顔の俺(エイ、こっちにきなよ、エイ)<br>
            (Aphex Twin はイギリスのミュージシャン。『Come To Daddy』というEPのジャケットにメンバーのこわばった笑顔が)<br><br>

            Pat the Patagonia pockets, tryna find my zip (uh, where it’s at? Yeah)<br>
            パタゴニア・ジャケットのポケットのジップを探してるんだ (ああ、どこいったんだよ、エイ)<br>
            (zipは葉っぱのスラングの一つ)<br><br>

            Blunt twist, tightropes, I’m not fallin’ off (never that, no)<br>
            葉っぱを巻くのさ、危険な橋だけど、俺は落ちないね (ありえないよ)<br><br>

            Watch friends, go pro through fisheye lens, drownin’ off clear<br>
            仲間たちを見てみろよ、魚眼レンズを通してプロ級さ、ウォッカで酔っ払ってる<br>
            (go proはカメラの一種、二つの意味をかけています)<br><br>

            I just saw JAWS, divin’ under influence<br>
            ジョーズを見たとこなんだ、影響されすぎかな<br>
            (彼の友人のプロスケーター” Aaron Homoki “のニックネームはJaws)<br><br>

            Been feelin’ like the Lord just out of reach for me (for me)<br>
            神様が俺を見放してるような気がしてるんだ<br><br>

            How I feel lettin’ man speak<br>
            他の奴に自分の気持ちを語られるって<br><br>

            How I feel lettin’ man speak for me (for me)<br>
            他人に自分の思いを語られるなんて、どんな気持ちかわかるか？<br><br>

            Holyfield, keep your ears split for me<br>
            Holyfieldみたいにさ、俺の思いに耳を傾けてくれ<br>
            (Holyfieldはマイク・タイソンに試合中に耳を噛まれたボクサー)<br><br>

            Can’t show my face if you spit for me<br>
            敬意を示さないなら、お前に顔は見せられないよ<br><br>

            Spit for me, yeah<br>
            敬意を示さないならね、エイ<br><br><br><br>
            </p>
            <p>
            [Pre-Chorus]<br>
            Eyes low, chin heavy shoegazer<br>
            目線は落ちてて、うつむいてる、シューゲーザーみたいだろ<br><br>

            Moonwalkin’, R.I.P. Stanley Kubrick<br>
            ムーンウォークなんかしてね、Stanley Kubrickよ、安らかに眠れ<br><br>

            You had you some birthdays, could you prove it?<br>
            もう何年も経ったよな、証明できるかい？<br><br>

            Show me the wisdom in your movement<br>
            その動きで、君の経験を証明してくれよ<br><br>

            Show me some wisdom in your movement<br>
            その動きで、培った経験を見せてくれよ<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            Feelings you provide<br>
            Feelings you provide<br>
            君が与えてくれるこの感情だよ<br><br>

            I know it, I know it<br>
            わかってる、わかってるんだ<br><br>

            The feelings I, the feelings, I know it, I<br>
            この俺の感情のことさ、わかってる、俺はさ<br><br>

            Feelings you provide<br>
            Feelings you provide<br>
            君が与えてくれるこの気持ち<br><br>

            I know it, I know it<br>
            わかってる、わかってるんだ<br><br>

            The feelings, I know it, the feelings, I, I<br>
            この感情のことだよ、わかってるんだ、この感情をね<br><br><br><br>
            </p>

            <p>
            [Outro]<br>
            Tonight I might change my life, all for you, all for you<br>
            Provide<br>
            今夜、俺の人生が変わってしまうかも、全部君のためにね<br>
            君の与えてくれる感情のためにね<br><br><br><br>
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
            <form action="{{ route('Provider.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="39">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Lens') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Moon_River') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
