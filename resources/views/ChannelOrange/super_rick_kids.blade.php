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
            <h2>7: Super Rick Kids (Feat. Earl Sweatshirt)</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OOb7-p2FM44" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 7
                <br>
                Year : 2012
                <br>
                Produced by :Frank Ocean, Om’Mas Keith & Malay
                </h3>  
                <p>フランク・オーシャン自身も所属していたクルー” Odd Future “のメンバーである<br>アール・スウェットシャツを迎えた一曲.</p>
                <p>同アルバム5曲目の” Sweet Life “でも描かれていたような、<br>リッチな生活を送る青年たちの物語が語られています。<br>
豪邸に暮らし、親の金で遊び放題の彼らですが、どこか悲しげな雰囲気を漂わせています。<br>若者たちにとって、メイドすら付いているような何不自由ない生活の中で、<br>足りなかったものとは一体何なのでしょう。</p>

        </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Chorus: Frank Ocean]<br>
            Too many bottles of this wine we can’t pronounce <br>   
            目の前にある、山ほどのワインボトルの名前は読めないけど<br>
            (超リッチな彼らは、たくさんのワインを持っています。名前が読めない理由は、海外製のワインであること。そして、彼らがワインを飲みすぎて、意識が朦朧としていることの二つが考えられます)<br><br>

            Too many bowls of that green, no Lucky Charms<br>
            山ほどの” 緑のボウル “もさ、ラッキー・チャームスなんてなかったんだよ<br>
            (” 緑のボウル “は葉っぱを詰める吸引具のことですね。対照的に描かれるラッキー・チャームスはシリアルのブランド。リッチな彼らの青年時代には、普通の暮らしの象徴であるシリアルがなく、葉っぱだらけだったと)<br><br>

            The maids come around too much<br>
            メイドはしつこいくらいに周りをずっとうろちょろしてる<br><br>

            Parents ain’t around enough<br>
            親は全然家にはいなかったけどさ<br><br>

            Too many joy rides in daddy’s Jaguar<br>
            親のジャガーに乗って、アホやったりも沢山したよな<br>
            (親が常に家にいないと、車に乗って遊ぶこともできる)<br><br>

            Too many white lies and white lines<br>
            真っ白の嘘に、真っ白のラインを山ほど並べて<br>
            (真っ白のライン = コカインを線状に並べて吸引すること。その事実を親に対して、耳障りの良い(=真っ白)な嘘でごまかすと)<br><br>

            Super rich kids with nothing but loose ends<br>
            俺たちはスーパー・リッチ・キッズ、でもいつもグダグダして終わっちまう<br>
            (” loose ends “は、意志の弱さから自然に目的などが消滅してしまうこと。リッチな彼らにできないことはありませんが、いつも途中で辞めてしまうと)<br><br>

            Super rich kids with nothing but fake friends<br>
            俺らはスーパー・リッチ・キッズさ、でも友達は、金目当てでフェイクな奴らばっかなんだよ<br><br><br><br>
            </p>
            <p>
            [Verse 1: Frank Ocean]<br>
            Start my day up on the roof<br>
            屋根の上で一日を始める<br>
            (ペントハウスのこと。マンションの最上階だけに作られる特別な仕様の高級な住戸です）<br><br>

            There’s nothing like this type of view<br>
            こんな景色は他では味わえないだろうね<br><br>

            Point the clicker at the tube<br>
            テレビにリモコンを向けて<br><br>

            I prefer expensive news<br>
            俺は高級なニュースが好きなんだよ<br>
            (大きく高級なテレビでニュースを見ることですね。もしくは高所得者向けのニュースのこと。このラインの前後から、メロディの裏でテレビ番組が流れている音が聞こえます。一説にはアメリカのTVショー” Good Times “の音声だそう。)<br><br>

            New car, new girl<br>
            新しい車に、新しい彼女<br><br>

            New ice, new glass<br>
            新しいダイアモンドに、新しいグラス<br>
            (どちらもメタンフェタミンのスラングでもあります。覚せい剤ですね)<br><br>

            New watch, good times babe<br>
            新しい時計に、最高の時間だよ、ベイビー<br><br>

            It’s good times, yeah<br>
            そう最高の時間さ、エイ<br><br>

            She wash my back three times a day<br>
            彼女は俺の背中を1日に3回も流してくれる<br><br>

            This shower head feels so amazing<br>
            シャワー・ヘッドが最高に気持ち良いよ<br>
            (シンプルにシャワーが気持ちいいという意味。自分のアソコに見立てて、彼女にフェラしてもらうという意味)<br><br>

            We’ll both be high, the help don’t stare<br>
            俺たち二人ともハイになっちまって、メイドも見るに耐えないって感じさ<br><br>

            They just walk by, they must don’t care<br>
            あいつら部屋に入ってくるんだけど、何も気にしてないんだ<br>
            (メイドたちは、彼らの行動に慣れてしまっています)<br><br>

            A million one, a million two<br>
            100万ドルあっても、110万ドルあっても<br><br>

            A hundred more will never do<br>
            もう100万あっても足りないよ<br><br><br><br>
            </p>
            <p>
            [Chorus: Frank Ocean]<br>
            Too many bottles of this wine we can’t pronounce<br>
            目の前にある、山ほどのワインボトルの名前は読めないけど<br><br>

            Too many bowls of that green, no Lucky Charms<br>
            山ほどの” 緑のボウル “もさ、ラッキー・チャームスなんてなかったんだよ<br><br>

            The maids come around too much<br>
            メイドはしつこいくらいに周りをずっとうろちょろしてる<br><br>

            Parents ain’t around enough<br>
            親は全然家にはいなかったけどさ<br<br>>

            Too many joy rides in daddy’s Jaguar<br>
            親のジャガーに乗って、アホやったりも沢山したよな<br><br>

            Too many white lies and white lines<br>
            真っ白の嘘に、真っ白のラインを山ほど並べて<br><br>

            Super rich kids with nothing but loose ends<br>
            俺たちはスーパー・リッチ・キッズ、でもいつもグダグダして終わっちまう<br><br>

            Super rich kids with nothing but fake friends<br>
            俺らはスーパー・リッチ・キッズさ、でも友達は、金目当てでフェイクな奴らばっかなんだよ<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            Real love, I’m searching for a real love<br>
            真実の愛、俺は本当の愛を求めてるんだ<br><br>

            Oh, real love, I’m searching for a real love<br>
            フェイクじゃないやつだよ、俺はリアルな愛を求めてるんだ<br><br>

            Oh, real love<br>
            本物のやつだよ<br><br><br><br>
            </p>
            <p>
            [Verse 2: Earl Sweatshirt]<br>
            Close your eyes to what you can’t imagine<br>
            想像もつかない、そんなことを想像してみろよ<br><br>

            We are the Xanny-gnashing<br>
            俺たちいつも、ザナックスをガリガリ噛み砕いて<br>
            (ザナックスは抗不安薬のこと)<br><br>

            Caddy-smashing, bratty ass<br>
            キャデラックをバットでぶっ壊すのさ、手に負えねえ野郎さ<br><br>

            He mad, he snatched his daddy’s Jag<br>
            狂ってるよな、親父のジャガーを盗んで<br><br>

            And used that shit for batting practice<br>
            バッティングの練習のために使うんだぜ<br>
            (アメリカのイタズラで” mailbox batting “というものがあります。車の窓から、家のメールボックスをバットで叩いて壊していくイタズラです)<br><br>

            Adamant and he thrashing<br>
            言っても聞かないし、女とも遊び放題<br><br>

            Purchasing crappy grams with half the hand of cash you handed<br>
            親のくれた金を半分使って、ひでえ質の葉っぱでぼったくられて<br>
            (彼はスーパーリッチなので、多少ぼったくられようが気にしないと)<br><br>

            Panic and patch me up<br>
            親はパニックになって、何とか更生させようと必死になるけど<br><br>

            Pappy done latch-keyed us<br>
            これもパパが俺たちをほったらかしたせいだぜ<br>
            (” latchkeyd “は、子供が両親のいない部屋に入ることを表現しています)<br><br>

            Toying with Raggy Anns and Mammy done had enough<br>
            Raggy Annsと遊んでたよ、ママが耐えきれなくなるまでね<br>
            (” Raggy Anns “は人形のこと。ここの主語は「パパ」なので、パパが人形と遊ぶ = 不倫をしていたと。また、アールの少年時代が孤独だったことを表現しています）<br><br>

            Brash as fuck, breaching all these aqueducts<br>
            俺はクソ生意気だぜ、でも水路からはもう水が溢れ出してる<br>
            (強がっていても、彼の心の中はいっぱいいっぱいになっています。涙を彷彿とさせます)<br><br>

            Don’t believe us<br>
            俺たちのこと何もわかってないみたいだ<br>
            (両親は彼の表面的な部分しか見えていません。心の中では涙が溢れています)<br><br>

            Treat us like we can’t erupt, yup<br>
            「でも金があるから大丈夫」って扱いしやがる、だろ<br>
            (豊かな暮らしをさせてあげてるんだから、大丈夫だと)<br><br><br><br>
            </p>
            <p>
            [Alternate Verse 2: Frank Ocean]<br>
            Polo sweats and Hermes blankets<br>
            ポロのスウェットに、エルメスのブランケット<br>
            (ポロ・ラルフローレン)<br><br>

            Them label hoes be stealing my shit<br>
            あいつら勝ち気なビッチたちは、俺のモノをパクっていきやがる<br><br>

            And all they clothes revealing they tits<br>
            あいつらみんな、胸を出して俺にアピールしてくるんだ<br><br>

            Pills, high enough to touch the rim in that bitch<br>
            錠剤があれば、バスケのリングに届くくらい高く(ハイに)なれるぜ<br><br>

            We party in my living room<br>
            リビングでパーティをやるのさ<br><br>

            ‘Cause father is gone<br>
            だって父さんはどこかに消えたからね<br><br>

            And he left me this empire<br>
            で残ったのは、この大豪邸ってワケ<br><br>

            That runs on its own<br>
            家事は全部やってくれるからね<br><br>

            So all I got to do is whatever the fuck I want<br>
            だから俺のやることって言ったら、「自分のやりたいこと」。それだけさ<br><br>

            All we ever do is whatever the fuck we want<br>
            俺たちは今まで、やりたいことしかやってこなかったのさ<br><br>
            </p>
            <p>
            [Verse 3: Frank Ocean]<br>
            We end our day up on the roof<br>
            俺たちは、一日の終わりも屋上で迎える<br><br>

            I say I’ll jump, I never do<br>
            「飛び降りてやるよ」なんて言うけど、結局できないのさ<br><br>

            But when I’m drunk I act a fool<br>
            でも酔っ払って、バカみたいに騒いだ時にさ<br><br>

            Talking bout, do they sew wings on tailored suits<br>
            「オーダーメードのスーツなら、翼だって付けられるかな」なんて呟いて<br><br>

            I’m on that ledge, she grabs my arm<br>
            屋上の端に立ったんだ、でも彼女が俺の手を引いて、降ろされたんだ<br><br>

            She slaps my hand<br>
            彼女に怒られて叩かれちまったよ<br><br>

            It’s good times, yeah<br>
            楽しい思い出だな、エイ<br><br>

            Sleeve rips off, I slip, I fall<br>
            もし彼女の掴んだ袖が抜け落ちてたら、俺を滑って、落ちてたんだろうな<br><br>

            The market’s down like 60 stories<br>
            60階下まで落ちるみたいに、マーケットに真っ逆さまさ<br>
            (ここのマーケットは、労働者階級という意味を彷彿とさせます。死んでしまえば、階級の差・貧富の差なんて何の意味もないことが示唆されます。高さが” story “という単語で表現されていることは、走馬灯の意味合いを持っているようにも思えます)<br><br>

            And some don’t end the way they should<br>
            思い描いたゴールに到達できないこともあるのさ<br><br>

            My silver spoon has fed me good<br>
            シルバー・スプーンのおかけで、いい生活を送ってきた<br>
            (” シルバー・スプーン “は社会的なステータスが高いことの証)<br><br>

            A million one, a million cash<br>
            100万ドル、100万ドルを手にして<br><br>

            Close my eyes and feel the crash<br>
            目を閉じて、身体が地面にぶつかる衝撃を感じてる<br>
            (先ほどの60階から飛び降りるラインから。お金は結局は人を幸せにはしてくれないというメッセージです。また、アールの最初のラインは” close your eyes “から始まっています)<br><br><br><br>
            </p>
            <p>
            [Chorus: Frank Ocean]<br>
            Too many bottles of this wine we can’t pronounce<br>
            目の前にある、山ほどのワインボトルの名前は読めないけど<br><br>

            Too many bowls of that green, no Lucky Charms<br>
            山ほどの” 緑のボウル “もさ、ラッキー・チャームスなんてなかったんだよ<br><br>

            The maids come around too much<br>
            メイドはしつこいくらいに周りをずっとうろちょろしてる<br><br>

            Parents ain’t around enough<br>
            親は全然家にはいなかったけどさ<br><br>

            Too many joy rides in daddy’s Jaguar<br>
            親のジャガーに乗って、アホやったりも沢山したよな<br><br>

            Too many white lies and white lines<br>
            真っ白の嘘に、真っ白のラインを山ほど並べて<br><br>

            Super rich kids with nothing but loose ends<br>
            俺たちはスーパー・リッチ・キッズ、でもいつも何かを達成せずに辞めちまう<br><br>

            Super rich kids with nothing but fake friends<br>
            俺らはスーパー・リッチ・キッズさ、でも友達は、金目当てでフェイクな奴らばっかなんだよ<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            Real love, ain’t that something rare<br>
            本当に俺を想ってくれるそんな人がさ、そんなに珍しいものじゃないだろ<br><br>

            I’m searching for a real love, talking bout real love<br>
            俺はそんな本当の愛を探してるんだ。本物の愛の話をしてんだよ<br><br>

            Real love yeah<br>
            Real love<br>
            本物の愛さ<br><br>

            I’m searching for a real love<br>
            俺を本当に想ってくれる、そんな愛を探してるんだ<br><br>

            Talking bout a real love<br>
            本物の愛の話をしてるんだ<br><br><br><br>
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
            <form action="{{ route('Super_Rick_Kids.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="7">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Not_Just_Money') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Pilot_Jones') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>

</body>
</html>   
