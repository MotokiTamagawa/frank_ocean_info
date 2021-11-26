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
            <h2>DHL</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ccU0JCRNj3A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- 随時変更 -->
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2019
                <br>
                Produced by : Boys Noize & Frank Ocean
                </h3>  
                <p> プロデュースにはドイツ出身のBoys Noize（ボーイズ・ノイズ）というエレクトロ・プロ<br>
                デューサー/DJを迎えている。『Channel Orange』『Blonde』のようなシンガーとしてのフランクの姿は<br>
                このニューシングルにはそれほど見られなく、今までの作品とは一風変わった楽曲になっている。単調なラップの<br>
                リズムが繰り返されるこの作品には、今までのフランク・オーシャンが作り出してきたようなキャッチーな音色や<br>
                リリックは見られない。それゆえに少しわかりにくい（抽象的な）作品になっているのかもしれない。リリックで主に<br>
                語られるのは「性とドラッグ」についてである。スローかつ暗いビートの中で、繰り返されるラップはまさに<br>

                ドラッグでトリップする彼の精神世界を描いたようなサウンドに聴こえてくる。



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
            Love that I, love that I give<br>  
            愛、それは俺が与えた愛<br>  <br>  

            That is not love that I get from you<br>  
            君からの愛じゃない<br><br>  

            Uh, huh-huh<br>  <br>

            (Love that I, love that I give) Uh-huh, uh-huh, huh<br>
            (俺の愛、俺が与えた愛)<br><br><br><br>
            </p>
            <p>
            [Verse 1]<br>
            Look at them shakes, uh-huh (That is not love)<br>
            あのヘビたちを見てみなよ、あぁ (あれは愛じゃない)<br>
            (ヘビは裏切り者の比喩として用いられるワード)<br><br>

            Made up a dance (That I get)<br>
            ダンスを作り上げた (俺が手に入れた)<br><br>

            How come you shook? (From you)<br>
            なんで驚いてるんだい？<br><br>

            When I ain’t took out my hands<br>
            俺が手を差し出さなかっただけでさ<br><br>

            Beans, Starbucks, starstruck<br>
            ビーンズ、スターバックス、スターストラック<br>
            (スターストラック = スターに魅了される、スターに出会う)<br><br>

            Bitch comin’ soon<br>
            ビッチがもうすぐ来るころだ<br><br>

            That’s ‘cause you suck<br>
            なんでかって君がクソだからさ<br><br>

            (Suck me, suck me, suck me<br>
            Suck me, suck me, suck me)<br>
            (俺を楽しませてくれよ)<br><br>

            That’s comin’ soon (Suck my dick, huh)<br>
            もうすぐさ (俺のアソコを咥えて)<br><br>

            Come on, I’m back, I want my babe<br>
            さあ、俺が戻ってきたぜ、ベイビーが欲しいんだ<br><br>

            Stayin’ alert, I’m going steady<br>
            警戒し続けないと、俺は着実に行くぜ<br><br>

            ‘Cause on my chains, diamonds keep callin’<br>
            だってチェインやダイアモンドが俺を呼び続けてるから<br><br>

            Findin’ the key, put it in, Kawasaki<br>
            キーを探して、カワサキに差し込む<br>
            (バイクのKawasakiのことですね)<br><br>

            Totin’ the Amazon (Amazon)<br>
            Amazonを輸送する (Amazon)<br><br>

            Shit like 6’5” (Shit like 6’5”)<br>
            シットはまるで195cm (シットはまるで6’5フィート)<br><br>

            Take back, rewind, now I rewind<br>
            取り返す、巻き戻すのさ<br><br>

            Ooh, ooh, baby, be mine (Baby, be mine)<br>
            ベイビー、俺のものになってくれ<br><br>

            Ooh, ooh, baby, be mine<br>
            ベイビー、俺のものになってくれよ<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            Just got a pack, came from the DHL<br>
            荷物が届いたよ、DHLからだ<br>
            (DHLは国際便を中心とした世界的な運送会社ですね)<br><br>

            Just got up with a pack<br>
            そこには包みが付いていて<br><br>

            Got out a pack, came from DHL<br>
            包みを開けるんだ、DHLからのね<br><br>

            Just had got off like a bail<br>
            パラシュートみたいに飛び出すんだ<br><br>

            Got out a pack<br>
            包みを開けると<br><br>

            New ones in my jail<br>
            そこには俺の牢獄にやってきた新入りが<br><br>

            Just got out, found a pack<br>
            取り出して、包みを見つけた<br><br>

            I got a pack<br>
            包みを手に入れたんだ<br><br>

            (Been in jail, been in jail, yeah, yeah, yeah)<br>
            (ずっと牢屋に閉じ込められてた、エイ、エイ)<br><br>

            Just got a pack, came from DHL<br>
            包みを手に入れた、DHLから来たんだ<br><br>

            We get the check, bail (Like it longterm like the pill)<br>
            ちゃんと本物さ、飛び上がるよ (錠剤みたいに効き続けるんだ)<br>
            (荷物についていた包みはドラッグだったんですね)<br><br>

            I got a pack, came from DHL<br>
            荷物が届いたよ、DHLからだ<br><br>

            Just caught up on a pill<br>
            この錠剤に夢中になったんだ<br><br>

            I got a<br>
            手に入れたよ<br><br><br><br>
            </p>

            <p>
            [Verse 2]<br>
            Niggas think it’s new, it ain’t new, boy<br>
            みんなそれを新しいと思ってる、本当は違うのに<br>
            (この曲も本当は数年前に作られていたのかもしれません)<br><br>

            Old files just turned two, yeah it flew, yeah<br>
            昔のファイルはもう2年経つ、時は流れてさ<br>
            (2年前にリリースした” Chanel “や、” Biking “などのことでしょうか)<br><br>

            Still sound like it’s comin’ soon, comin’ soon, yeah<br>
            まだ「カミングスーン」って感じに聞こえるよな、エイ<br><br>

            Still sound like it’s comin’ soon, tell the truth, yeah<br>
            まだ「カミングスーン」って感じだ、さあ真実を伝えるよ<br><br>

            Boy-toy suck me like a Hoover, like a Hoover<br>
            愛人は俺にフーバーみたいに吸い付く<br>
            (Hooverはアメリカの掃除機ブランドです)<br><br>

            Boy-toy ride me like a Uber, like the Uber<br>
            愛人は俺をUberみたいに乗りこなす<br>
            (Uberはタクシーのサービス)<br><br>

            Smiley face, factory case, ain’t bust it down, yeah<br>
            笑顔が浮かぶフェイス、工房製さ、超高級だぜ<br>
            (フランクは日本のKapitalというブランドが販売している「笑顔マーク」が盤面にデザインされている時計を着用しています)<br><br>

            I left it, I forgave their violations, ain’t seen ‘em around, yet to test it<br>
            もういいんだ、あいつらが犯した冒涜だって許した。<br>
            もう近くであいつらは見ない、本当かはわからないけど<br><br>

            Wavy pool, sit behind the pool<br>
            波打つプール、その端に座ってる<br><br>

            I’m tellin’ the truth, bro<br>
            俺は真実を伝えてるんだ、兄弟よ<br><br>

            Remind me of trade, brushin’ his waves<br>
            取引を思い出すよ、髪のウェーブを整えてさ<br><br>

            Shit look like ramen noodles<br>
            その髪はまるでラーメンみたいでさ<br>
            (アフリカン特有の髪のウェーブを茹でる前のラーメンに例えています)<br><br>

            Fuck, this shit sound like it’s comin’ soon, comin’ soon, bro<br>
            ファック、この曲もまた「カミングスーン」って感じじゃねえか<br><br>

            And it still sound like it’s comin’ soon, comin’ soon<br>
            まだ「カミングスーン」って感じだ、カミングスーン<br><br>

            New files sittin’ on my drive, nothin’ new, yeah<br>
            新しい曲ならドライブに入ってる、そこに「新しさ」なんてないけど<br>
            (フランクはインタビューで、ハッキングを恐れ、必ず制作した音楽はハードドライブに入れると言っていました)<br><br>

            New fobs and I can’t get down, what to do, yeah<br>
            新しい宝石には抗えないね、つまりさ<br><br>

            New fobs, really can’t get down to the pool, yeah<br>
            新しい宝石、プールには入れないよ、エイ<br><br>

            New glist’ sittin’ on a cyst on my wrist, yeah<br>
            新しいダイアモンドは手首の上に<br><br>

            New bitch ridin’ on my dick like a kit, yeah<br>
            新しいビッチは俺のディックの上に、まるで子猫みたいだ<br><br>

            All of them days when I paid for the studio rate, instead of the rent, yeah<br>
            スタジオを借りずに、一回ずつ使用料を払ってた頃があったよな<br>
            (彼には地元ニューオリンズのスタジオがハリケーン・カトリーナによって水没した過去があります)<br><br>

            Now I can hang in this bitch every day, wait for some inspiration to hit me<br>
            俺は今、毎日このビッチと一緒にいて、何かインスピレーションを与えてくれるのを待ってる<br><br>

            Look like I’m dressed for a hike but I really look like I’m in Paris and shit, yeah<br>
            登山家みたいな服を着てる、でも本当はパリにいるみたいなんだ<br>
            (2019年、フランクはパリ・ファッション・ウィークに登場。アウトドアブランドを身につけていました。また今年のMet Galaのテーマは「Camp」でしたね)<br><br>

            Look like I’m dressed for a camp ‘cause I’m pitchin’ a bag like I’m pitchin’ a tent, yeah<br>
            キャンプをするみたいな服を着てる、だって俺はテントを張るみたいに” バッグ “をピッチするから<br>
            (ピッチする = ドラッグを売りさばく)<br><br>

            This ain’t no fuckin’ hopes and dreams, it’s prophecy<br>
            これは望みや夢なんかじゃ無い、絶対に起きる予言さ<br><br>

            Hardly sleep, faith was in the coffee bean<br>
            ほとんど眠れないよ、コーヒー豆を信用してた<br>
            (コーヒーのカフェインで眠れなくなることを示唆してるのでしょうか)<br><br>

            Roman numerals, niggas pourin’ up Ivy Leagues, fours<br>
            ローマ数字、みんなIvy Leagueを飲みまくってる、4をさ<br>
            (ローマ数字で4は” IV “。アルファベットで読むと” I Vy “でIvy Leagueとつながります。” 4 “はリーンを意味するスラングですので、ここでは「リーンを飲みまくる」という意味になるでしょうか。アメリカのエリート大学生とドラッグのイメージは結びつきやすいこともあります)<br><br>

            Double D’s exposed, throw some beads<br>
            大金を見せびらかして、宝石を首から下げる<br><br>

            Fuckin’ these hoes, leave, now my fuckin’ flow’s stole<br>
            クソビッチどもは消えていって、今も俺のフロウは盗まれたまま<br><br>

            Screw me slow, yes<br>
            俺はゆっくり壊されてゆく<br><br>

            Ooh, he TX, XTC rollin’<br>
            彼はTX(セラピー)、エクスタシーが駆け巡る<br>
            (エクスタシーは覚せい剤のこと)<br><br>

            You seen my bag, it’s swollen, Rimowa, I can’t even fold it<br>
            俺のバッグを見ただろ、あんなに膨らんでるんだ、Rimowaだよ、閉じられないな<br>
            (Rimowaはスーツケースのブランド。高度が高い場所に行くとスーツケーツが膨らむように、彼がドラッグで「ハイなこと」を表しています)<br><br>

            I drop you a pin like I’m bowlin’<br>
            球を投げるように君の位置にピンを置いて<br>
            (マップ上にピンを置くのが浮かびます。彼は誰かを迎えに行くのでしょう)<br><br>

            We moanin’ ’til not even mornin’<br>
            朝が来たことさえ関係なしに喘ぎ続ける<br><br>

            Breakfast and dinners is blendin’<br>
            朝食もディナーも一緒くたにして<br><br>

            We spent all that time alone<br>
            俺たちはずっと孤独を過ごすんだ<br><br>

            Alone, watchin’ the clouds roll, woah<br>
            孤独だよ、積乱雲が動くのを見ながらね<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            Just got a pack, came from the DHL<br>
            荷物が届いた、DHLからだ<br><br>

            Just got up with a pack<br>
            その荷物には小包が付いてて<br><br>

            I got a pack, came from the DHL<br>
            荷物が届いた、DHLからだ<br><br>

            Just got up with a pack<br>
            その荷物には小包が付いてて<br><br>

            I got a pack, woah, a pack, yeah<br>
            その包みを手にしたんだ、包みをね<br><br>

            Just caught up with a pack<br>
            その包みに夢中になってるのさ<br><br>

            I got a pack on DHL<br>
            荷物が届いた、DHLからだ<br><br>

            Just caught up with a pill<br>
            その錠剤に夢中になってるんだ<br><br>

            There it is, woo<br>
            そこにあるんだよ<br><br>

            DHL, just caught up with a pack<br>
            DHL、俺はその包みに夢中なんだ<br><br>

            I got a pack, came up on DHL<br>
            DHLから来た、小包があるんだ<br><br>

            Just came up with a pack<br>
            その包みと一緒に出て来たんだ<br><br>

            I got a pack, came up on DHL<br>
            荷物が届いた、DHLからだ<br><br>

            Just caught up with a pack<br>
            その包みに夢中になったんだ<br><br>

            I got a pack, came up on DHL<br>
            荷物が届いた、DHLからだ<br><br>

            Just got off with the pack<br>
            その包みを開けているところだよ<br><br><br><br>
            </p>

            <p>
            [Outro]
            Independent jugg, sellin’ records out the trunk<br>
            独立した策略の持ち主、トランクで曲を売ってる<br>
            (フランクのことですね。彼は『Blonde』のリリース直前Def Jamから独立しました)<br><br>

            I’m already rich as fuck so the products in the front<br>
            俺はすでにクソほどリッチさ、だから商品だって売ってる<br>
            (“ 商品 “は音楽以外のマーチやZINEのことでしょうか)<br><br>

            Got my partner in the front, been my BF for a month<br>
            パートナーだってそうさ、1ヶ月だけボーイフレンドだった<br><br>

            But we been fuckin’ from the jump<br>
            でも俺たちはジャンプ (フライト) からずっと一緒にいるんだ<br>
            (ここでいうジャンプ/フライトはドラッグでハイになることでしょう)<br><br><br><br>
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
            <form action="{{ route('DHL.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="41">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Moon_River') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/In_My_Room') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
