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
            <h2>9: Crack Rock</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gBp9-9R3lhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 9
                <br>
                Year : 2012
                <br>
                Produced by :Om’Mas Keith & Malay
                </h3>  
                <p>Live映像↓</p>
                <iframe width="260" height="95" src="https://www.youtube.com/embed/TLDEuLPQV7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Verse 1]<br>
            You don’t know how little you matter until you’re all alone<br>
            自分の存在がどれほど小さいか、君は知る余地もない<br><br>

            In the middle of Arkansas with a little rock left in that glass dick<br>
            ガラスの筒にコカインを残したまま、アーカンソーの真ん中で一人っきりになるまでは<br>
            (ガラスの筒 = コカインを熱して吸引する器具。アーカンソー州は非常に自然豊かなアメリカ南部の州。州都の名前は” little rock “。” rock “はスラングでコカインという意味なので、州都の名をかけています)<br><br>

            Used to date a blonde, you used to hit it raw<br>
            ブロンドの女とデートしてたよ、あの頃は生でヤったりもしてた<br>
            (” hit it raw “は避妊具なしで性行をすること。もしくはコカインを粉末状のまま吸引する、という2つの意味が考えられます）<br><br>

            Cause she was and you are madly involved, madly involved<br>
            だって彼女も君も狂ったようにハマっていったから、狂ったようにさ<br>
            ((ブロンドの)彼女と君は、フランクとの関係、そしてコカインにハマっていった)<br><br>
            </p>
            <p>
            [Hook]<br>
            Hittin’ stones in glass homes<br>
            ガラスの家に住んで、石を投げつける<br>
            (ことわざ「ガラスでできた家に住む者は、石を投げてはならない」から。自分も完璧ではないのだから、他者を批判してはいけない。石を投げ返されれば自分の家が壊れてしまう。やったことはやり返され、却って被害を被るという意味。
            また” stone “はコカインの意味もあるので、「ガラスの吸引器でコカインを吸う」という意味にも捉えられます)<br><br>

            You’re smokin’ stones in abandoned homes<br>
            君は廃墟みたいな家でコカインを吸ってる<br><br>

            You hit them stones and broke your home<br>
            君が石を投げれば、家は壊れてしまうんだよ<br>
            (フック・最初のラインから。コカインをやって彼女の身の回りが滅茶苦茶になってしまう)<br><br>

            Crack rock, crack rock<br>
            クラック・ロック、クラック・ロック<br><br>

            Crack rock, crack rock<br>
            クラック・ロック、クラック・ロック<br>
            (‘ crack rock ‘ = コカインのこと)<br><br>

            Hittin’ stones in glass homes<br>
            ガラスの家に住んで、石を投げつける<br><br>

            You’re smokin’ stones in abandoned homes<br>
            君は廃墟みたいな家でコカインを吸ってる<br><br>

            You hit them stones and broke your home<br>
            君が石を投げれば、家は壊れてしまうんだよ<br><br>

            Crack rock, crack rock<br>
            クラック・ロック、クラック・ロック<br><br>

            Crack rock, crack rock<br>
            クラック・ロック、クラック・ロック<br><br>
            </p>
            <p>
            [Verse 2]<br>
            You’re shuckin’ and jivin’, stealin’ and robbin’<br>
            君はなんとか誤魔化しながら、盗みを働く<br>
            (‘ shuckin and jivin ‘は何かを避けるために、ジョークなどで誤魔化すこと。奴隷制時代に主人を楽しませるため、ダンスをしたり歌を踊った文化に由来するそう。’ 君 ‘は中毒になり、どんなことよりもドラッグを追い求めます)<br><br>

            To get the fixing that you’re itching for<br>
            痒いところに手を伸ばそうとして<br>
            (恐らくドラッグの禁断症状のこと)<br><br>

            Your family stopped inviting you to things<br>
            君の家族は、君への招待を辞めて<br>
            (ディナーなど家族の行事に、ドラッグ中毒の彼女を誘うことを家族は辞めた)<br><br>

            Won’t let you hold their infant<br>
            君が新しい生命に触れることも拒んだみたいだね<br>
            (幼い子をドラッグ中毒の彼女には会わせられない）<br><br>

            You used to to get a little cut-up from time to time<br>
            君は時々コカインを並べるようになった<br>
            (コカインを粉末のまま吸引する際に、線状に並べることがあります。また’ cut up ‘には性行をするという意味も)<br><br>

            But the freaks ain’t trying to sleep with cracky<br>
            でもコカインで眠りにつこうなんて、イケてるやつはしないぜ<br><br>
            </p>
            <p>
            [Hook]<br>
            Hittin’ stones in glass homes<br>
            ガラスの家に住んで、石を投げつける<br><br>

            You’re smokin’ stones in abandoned homes<br>
            君は廃墟みたいな家でコカインを吸ってる<br><br>

            You hit them stones and broke your home<br>
            君が石を投げれば、家は壊れてしまうんだよ<br><br>

            Crack rock<br>
            クラック・ロック<br><br>

            Crack rock, crack rock<br>
            クラック・ロック、クラック・ロック<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            Crooked cop, dead cop<br>
            心の歪んだ警官、死んでる警官<br>
            (賄賂などを貰い、ドラッグ・ディールを黙認する警察のこと。そんな警官は死んでいるも同然。レーガン政権時など政府がコカインをバラまいているとアメリカでは言われています)<br><br>

            How much dope can you push to me?<br>
            俺にどれくらい売ってくれるんだい？<br><br>

            Crooked cop, dead cop<br>
            心の歪んだ警官、死んでる警官<br><br>

            No good for community<br>
            コミュニティに良いことなんて一つもない<br><br>

            Fuckin’ pig get shot, three hundred men will search for me<br>
            クソ豚野郎が銃を持ってる、300人の男が俺を探すんだろうな<br><br>

            My brother get popped and don’t no one hear the sound<br>
            ブラザーが撃たれたよ、誰も銃声は聞こえなかったんだってよ<br><br>

            Don’t no one hear the rounds (Sound)<br>
            この世の誰一人、聞いていないだ (銃声をさ）<br><br>

            Don’t no one hear the shells (Shells)<br>
            誰も銃声を聞いてないんだよ (銃弾を)<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            Don’t no one hear a sound<br>
            誰一人聞いてないんだ<br><br>

            Don’t no one disturb the peace for riot<br>
            暴動じゃ、平和を邪魔することはできない<br><br>

            Don’t no one disrupt nirvana<br>
            誰もニルヴァーナを崩壊させることはできない<br>
            (ニルヴァーナ = 死後の世界)<br><br>

            Don’t no one wanna blow the high<br>
            誰もハイになんてなりたくないんだ<br>
            (ドラッグ中毒になってしまった彼女も、そうなることを望んだ訳ではない。現実が辛いせいでドラッグに走っている)<br><br>

            Crack rock, crack rock, crack rock<br>
            クラック・ロック、クラック・ロック<br><br>

            How you feeling girl?<br>
            気分はどうだいガール？<br><br>

            How’s the gutter doing?<br>
            どん底にいる気分はさ？<br><br>

            Crack rock<br>
            クラック・ロック<br><br><br><br>
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
            <form action="{{ route('Crack_Rock.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="9">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Pilot_Jones') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Pyramids') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
