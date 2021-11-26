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
            <h2>Biking (Feat. JAY Z & Tyler, the Creator)</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fYGPcfUqzL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2017
                <!-- <br>
                Produced by : Midi Mafia -->
                </h3>  
                <p> 『Blonde』以降、フランク・オーシャンは数枚のシングルをリリースしますが、こちらの” Biking “は<br>
                ジェイ・Z、そしてタイラーを迎え豪華な面々を揃えた一曲に。ジェイ・Zとは『Watch The Throne』、<br>
                『Magna Carta』以来の共演となりましたが、やっぱりこのコラボはかっこいいですね。曲中では、<br>
                タイトル・ジャケットにある通りバイク (自転車) に関してのリリックがたくさん出てくるんですが、<br>
                フランクとタイラーは過去の共作” Slater “でバイクに関する曲をすでにやっていて、私自身は今曲が<br>
                その続きの作品のようなイメージを持っています。自転車のタイヤが回る様子と、物事が周り回って起きている<br>
                ことを重ねて表現しているJay-Zのイントロが印象的な今曲。ジャケットで片輪を浮かせている様子はまさに<br>
                「Nigga one wheel, one wheel, one wheel」というリリックを表していますね。
                    

            </p>    
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Intro: Jay Z]<br>
            Uh, turn, what goes around comes around<br>
            あぁ、因果応報だよ、周り回るんだ<br><br>

            Ayy, turn, turn the music up, uh, yeah<br>
            エイ、音量を上げてくれよ、エイ<br><br>

            Goes around comes around<br>
            周り回るんだぜ<br><br>

            What goes, alright, like like<br>
            やったことはさ、そうまるで<br><br>

            Life goes in cycles<br>
            人生は周り回って進むんだ<br><br>

            Everything that comes around goes around<br>
            何もかも、周り回ってるんだ<br>
            (自転車のタイヤが回る様子と、人生の進む様子を重ねます)<br><br>

            ‘Fore it goes down, get you some ice<br>
            だから消えてしまう前に、ダイヤをゲットしちまうんだ<br>
            (名声や成功も一時的で、いづれ消えてしまうとわかっていることから、今の瞬間を楽しむということです）<br><br><br><br>
            </p>

            <p>
            [Verse 1: Jay Z]<br>
            Life goes in cycles, what comes around goes around<br>
            人生はサイクルの中進んでく、やったことは返ってくるんだ<br><br>

            So ’fore it goes down, nigga, get you some icicles<br>
            だから失敗する前に、なあ、ダイヤをゲットするんだ<br>
            (icicleは、bicycle、cycleとかけています)<br><br>

            Audemars before all of y’alls<br>
            お前らの前に、Audemarsは着けてたぜ<br>
            (Audemars Piguetは高級時計のブランド。ジェイ・Zが2002年リリックに登場させたのち、2005年にコラボレーションモデルを発表し、一気に人気を獲得しています)<br><br>

            Wristwatch got a Russian face like an oligarch, uh<br>
            着けた腕時計は、まるでロシア人の支配者みたいだろ<br>
            (ジェイも多額を出資しているNBAチーム・ブルックリンネッツのオーナーはロシア人のミハイル・プロホロフ。彼のことを彷彿とさせます)<br><br>

            12 o’clock, boy, silly nice, huh<br>
            12o’clock boy、イケてるね<br>
            (12 o’clockはバルチモアの、ダート・バイクギャング集団。タイトルのbikingから)<br><br>

            Willie in traffic, I’m Philly nice, uh<br>
            道路をウィリーで走るんだ、フィラデルフィアみたいでイケてるだろ<br>
            (Willieは”Big Willie”の略で、「大物」という意味のスラングでもあります。”Can’t Knock The Hustle”でも同じライムを用いています。ダート・バイクのカルチャーはフィラデルフィアから)<br><br>

            E.T. on the handles, uh<br>
            E.Tがハンドルの上に<br>
            (映画E.Tのシーンで、E.Tが自転車のカゴに隠れるシーンがあります。また、彼はE.Tをお気にいりの映画だと発言しています)<br><br>

            Handlebars like a Xanax<br>
            ハンドルバーはまるでザナックスみたいだ<br>
            (自転車のハンドルはまるでザナックスのような中毒性があるということ。また、”bar”という単語から、彼のようなリリカルなラップにも中毒性があるという二つの意味がかかっています)<br><br>

            Shammgod with the AND1 moves<br>
            Shammgod、まさにAND1で見たムーブだ<br>
            (NBAプレイヤーGod Shammgodのこと。AND1は服のブランドで、バスケのスーパープレイのムービーを発売していました)<br><br>

            Throw that shit ‘round your neck<br>
            その首に巻いてある宝石を投げてくれよ<br><br>

            Right quick, broke boys get fixed<br>
            早くしてくれ、壊れても一文無しが直すからさ<br><br>

            Right quick, Nigel Sylvester with these bike flips<br>
            早くしてくれよ、Nigle Sylvesterのバイクのトリックくらいにさ (Nigleはクイーンズ出身のBMXライダー)<br><br>

            Uh, that’s a full cab and a back flip<br>
            まさにフルキャブかバックフリップって感じだな (どちらもバイクのトリックの名前)<br><br>

            Uh, sidebar<br>
            サイドバーさ<br>
            (おそらくバイクのハンドルの両端に着いたバーエンドのこと。クロスバイクなんかに着いている角みたいな奴ですね)<br><br><br><br>


            </p>

            <p>
            [Verse 2: Frank Ocean]<br>
            Arm stretch a tee like I nailed it<br>
            技を決めた後、腕の形はまるでTの形さ (バイクのトリックを決めた後の体の形が、まるでアルファベットのTのようだと)<br><br>

            Raf movin’ slow like a creep<br>
            Rafは変な奴みたいにゆっくり動いてる<br>
            (デザイナーRaf Simonsのこと。2002年” Virginia Creeper “というコレクションを発表しています。またフランクオーシャンは、エイサップロッキーと” Raf “という曲も製作しています)<br><br>

            Shirt in the breeze like I’m sailin’<br>
            シャツが凍りつくよ、まるで海に出たみたいに<br><br>

            And I walk in my sleep, I can’t help that (I can’t)<br>
            それに俺は夢遊病なんだ、どうしようもないし<br>
            (寝ながら意識のないまま、起き上がって行動する症状のこと)<br><br>

            When’s the last time I asked for some help that<br>
            前に助けを求めた時は<br><br>

            I couldn’t get from nobody else, yeah?<br>
            誰も助けてくれなかったよな？<br><br>

            I couldn’t get from nobody out there (I can’t)<br>
            誰もそこにいてくれやしなかったんだ<br><br>

            When’s the last time I asked for some help that<br>
            俺がそうやって助けを求めた時<br><br>

            I couldn’t get from nobody else, yeah?<br>
            誰一人として助けてくれなかったよな？<br><br>

            Nobody<br>
            誰もさ<br><br><br><br>
            </p>

            <p>
            [Chorus: Frank Ocean]<br>
            I don’t get weak in the knees<br>
            もうビビったりしないよ<br>
            (直訳で「足が疲れない」という意味のこの文章のように今曲のテーマであるバイクの話は続きます。しかし実際の意味は、彼が昔のように深く落ち込んだりはしないということを表しているように感じます)<br><br>

            Hundreds spread out like a fan<br>
            金なら何百万ドルだってあるから、まるで扇子を広げるようにね<br>
            (扇子を広げた状態と、札束を並べた見た目が似ていることから。たくさんのお金を比喩で表す際に、よく扇子は用いられるそうです)<br><br>

            Vert feel like some Gucci sandals<br>
            グッチのサンダルみたいに、自由自在さ<br>
            (vertはおそらくconvertibleの略、バイクに乗っている心地よさがグッチのサンダルの履き心地のように良いと表現しています)<br><br>

            Open the sky, get a handful<br>
            空を切り開くんだ、この手にいっぱい掴んで<br><br>

            Torso marked up like a vandal<br>
            胸にはタトゥーが入ってる、野蛮な奴みたいにね<br>
            (彼の胸にはタトゥーが入っています。Chanelでも語られていたように、彼は日本のようにタトゥーが危険な人間の象徴だとされる文化を知っています)<br><br>

            How you not fuckin’ with cash?<br>
            どうやったら金を気にせずに生きてけるんだ？<br><br>

            God gave you what you could handle<br>
            神は君に乗り越えられる試練しか与えないんだ (ここでも”handle”というバイクに関連した単語を使っています)<br><br>

            Gave you what you could handle<br>
            乗り越えられる試練しかね (聖書コリント人への第一の手紙10章から)<br><br>

            I got the grip like the handle<br>
            だから俺はこのハンドルを握るように、自分の道をコントロールするんだ<br><br>

            And I’m bikin’<br>
            バイクに乗ってね<br><br>

            I’m bikin’ with me and my Daniel<br>
            俺のダニエルと走るんだ<br>
            (ダニエルはカリフォルニアで有名なバイクのショップのこと。おそらくここで買ったバイクのことを彼はダニエルと呼んでいるのでしょう)<br><br>

            Hades got the angels<br>
            ハデスが天使と出会ったみたいにね<br><br>

            TV’s got the angles<br>
            TVが天使をゲットしたみたいにさ<br><br>

            I’m brakin’… got…<br>
            俺はブレーキをかけることにするよ…<br><br><br><br>
            </p>

            <p>
            [Verse 3: Frank Ocean]<br>
            Bikin’, I’m bikin’, I’m bikin’ slow-mo<br>
            スローモーションみたいに走るんだ<br><br>

            Maybe the four wheel excitin’ us mo’<br>
            4つ車輪があればもっとエキサイトするかもね<br><br>

            I’m cold when the temperatures dip below 70s<br>
            70Fを下回れば、寒いって思っちゃうね<br>
            (Fは温度を表す記号。度にすると21℃らしいです。近年カリフォルニアの温暖化が進んでいることを皮肉ります)<br><br>

            How can I be burr around L.A. coast?<br>
            どうやってLAの海岸で宝石を着けてられるんだ？<br><br>
            
            The diamonds is plural, the Tiffany brooch<br>
            ダイアモンドは純正、ティファニーのブローチもね<br><br>

            On my lapel, at the table, I’m givin’ a toast<br>
            襟にはラペル、テーブルで乾杯をして (ラペルは襟織のこと)<br><br>

            The first wedding that I’ve been in my twenties<br>
            最初の結婚式に出たのは20代の時だった<br><br>

            Thinkin’ maybe someone is not somethin’ to own<br>
            思うに、人は誰かが所有するものじゃないのかもな (結婚のこと)<br><br>

            Maybe the government got nothin’ to do with it<br>
            政府はどうでもよかったのかもな (LGBTの結婚の合法化についてでしょう)<br><br>

            Thinkin’ maybe the feeling just comes and it goes<br>
            思うに、感情は簡単に変わってしまうんだろ (離婚してしまうカップルは大勢います。恋愛感情は一時のものだと。彼はシングルマザーの家庭で育ったことも影響しているかもしれません)<br><br>

            Think I want me a lil’ one that look like my clone<br>
            まるでクローンみたいに、小さくなりたいよ<br><br>

            Me and my baby can’t do on our own<br>
            だって俺と俺のベイビーでは、子供を産むことはできないから (男性同士では、子供を産むことができません)<br><br>

            I landed a trick, got my impossibles<br>
            トリックに乗ったんだ、インポッシブルって技だぜ<br>
            (スケートボードのトリック、インポッシブルは非常に難易度が高い技。つまり不可能を可能にすることができると)<br><br>

            I’m fuckin’ with Addy, I’m watchin’ my dose<br>
            アデロールを使ってんだ、その錠剤をずっと近くでみてるよ<br>
            (アデロールはADHDの治療薬、ドラッグとしても用いられます)<br><br>

            24 hours like they never close<br>
            24時間ずっとね、この目は閉じないんじゃないかってくらいさ<br><br>

            I’m bikin’, I’m bikin’, I’m bikin’ these blocks, yeah<br>
            バイクでブロック(地区)を走り回るんだ、エイ<br><br>

            Since Ben Baller sold all his ice up at Slauson, ooh<br>
            SlausonでBen Ballerが全部宝石を売り切っちまってから<br>
            (Ben Ballerはレコード会社の代表で、宝石をSlausonというロスのモールで売っていました。フランクオーシャンも2011に彼から宝石を購入したそう)<br><br>

            I’m bikin’ uphill and it’s burnin’ my quads (obstacles)<br>
            坂を登って、腿が焼けちまいそうだぜ<br><br>

            I’m bikin’ downhill and it sound like a fishin’ rod<br>
            坂を下ると、釣り竿みたいな音が鳴ってる<br>
            (車輪が回る音が、釣り竿のリールを回す音に似ていることから)<br><br>

            Savage, I’m bikin’, yeah<br>
            サベージだろ、気持ちいいよ、エイ<br><br><br><br>


            </p>

            <p>
            [Verse 4: Tyler, The Creator]<br>
            From Coldwater to the Shaw<br>
            ColdwaterからShawまで行くぜ<br>
            (どちらもLAの地名。Coldwater CanyonとCrenshaw Boulevardのこと)<br><br>

            Alcoholic way I handle the bars<br>
            アルコールが入ったまま、ハンドルを握る<br>
            (Jay-Zのバースと同じように、barを二つの意味で使っています。リリカルなラップと、バイクのハンドルのこと)<br><br>

            This a PK, PK Ripper<br>
            これはもう、PK、PK Ripperみたいだろ (Pk RipperはBMXのライダー)<br><br>

            Nah, you can’t fuck with the boy<br>
            いや、お前は俺とは関われないぜ<br><br>

            That’s my problem, yeah, I got ‘em<br>
            自分の問題は自分自身で解決するって決めてんだ<br><br>

            My tire smokin’ when I stop<br>
            バイクを止めると、タイヤからはスモークが<br><br>

            Okay, nobody fuckin’ with me<br>
            オーケー、誰も俺には関われないね<br><br>

            My accolades hang from my neck<br>
            賞賛の証なら首から吊り下がってるぜ<br>
            (タイラーは首にアルバム『Cherry Bomb』のネックレスをかけています。このネックレスもBen Ballerで作ったそう)<br><br>

            Pedal, I drown in the heat<br>
            暑さに溺れるほどに、ペダルを漕ぎ続ける<br><br>

            My sapphires drown in my sweat<br>
            俺のサファイヤが汗で溺れちまいそうだ (ネックレスのことでしょう)<br><br>

            White mags, but I jet<br>
            白のmags、でも俺はぶっ飛ぶぜ<br>
            (magsは自転車のタイヤにつける装飾のこと。装飾を着けてタイヤが重くなっても、彼には関係ないということ)<br><br>

            Jackson, I’m savin’ the streets<br>
            ジャクソン、俺はストリートを救ったぜ<br>
            (ディズニーTVショー” The Famous Jett Jackson “で、主人公がストリートの人々を救うことから。先ほどのbut I “jet”とJett Jacksonをかけています）<br><br>

            I’m Roger Rabbit in the air<br>
            俺は宙に舞うロジャー・ラビットさ (映画・ディズニーキャラクターです。トゥーンワールドのあれですね)<br><br>

            I don’t care, Big Willie Style, yeah<br>
            気にしないよ、Big Willerスタイルさ<br>
            (先ほどのJay-Zのラインから。またウィル・スミスのデビューアルバムの名前もこの『Big Willer Style』)<br><br>

            Nigga one wheel, one wheel, one wheel<br>
            車輪は一つだぜ、片方だけさ<br><br>

            Nigga one wheel, I fishtail downhill, yeah<br>
            車輪は一つさ、ダウンヒルをドリフトするんだ<br><br>

            I rose my rate, brand new brakes<br>
            気分は最高だよ、新しいブレーキもつけて<br><br>

            Why I name it Slater? Ask my date<br>
            なんでバイクをSlaterって呼んでるかって？俺のデート相手に聞いてみなよ<br><br><br><br>


            </p>

            <p>
            [Chorus: Frank Ocean]<br>
            I don’t get weak in the knees<br>
            もうビビったりしないよ<br><br>

            Hundreds spread out like a fan<br>
            金なら何百ドルだってあるから、まるで扇子を広げるようにね<br><br>

            Vert feel like some Gucci sandals<br>
            グッチのサンダルみたいに、自由自在さ<br><br>

            Open the sky, get a handful<br>
            空を切り開くんだ、この手にいっぱい掴んで<br><br>

            Torso marked up like a vandal<br>
            胸にはタトゥーが入ってる、野蛮な奴みたいにね<br><br>

            How you not fuckin’ with cash?<br>
            どうやったら金を気にせずに生きてけるんだ？<br><br>

            God gave you what you could handle<br>
            神は君に乗り越えられる試練しか与えないんだ<br><br>

            Gave you what you could handle<br>
            乗り越えられる試練しかね<br><br>

            I got the grip like the handle<br>
            だから俺はこのハンドルを握るように、自分の道をコントロールするんだ<br><br>

            And I’m bikin’<br>
            バイクに乗ってね<br><br>

            I’m bikin’ with me and my Daniel<br>
            俺のダニエルと走るんだ<br><br>

            Hades got the angels<br>
            ハデスが天使と出会ったみたいにね<br><br>

            TV’s got the angles<br>
            TVが天使をゲットしたみたいにさ<br><br>
            
            I’m brakin’… got…<br>
            俺はブレーキをかけることにするよ…<br><br><br><br>
            </p>

            <p>
            [Outro: Frank Ocean]<br>
            Got, got me fucked up<br>
            参っちまうよ<br><br>

            Got a million dollar bike<br>
            Got a million dollar bike<br>
            何百万もするバイクをゲットしたんだ<br><br>

            Got, got me fucked up<br>
            Got me fucked up, up<br>
            参っちまうね<br><br>

            Million dollar bike<br>
            何百万もするバイクだってさ<br><br>

            Got, got me fucked up, up<br>
            参っちまうよ<br><br>

            Million dollar bike<br>
            何百万もするんだ<br><br>

            Got, got me fucked up<br>
            参っちまうよ<br><br>

            Got a million dollar bike<br>
            Got a million dollar bike<br>
            そんなバイクを手に入れたんだ<br><br>

            Got, got me fucked up<br>
            Got me fucked up, up<br>
            参っちまうよ<br><br>

            Million dollar bike<br>
            何百万だぜ<br><br>

            Got, got me fucked up, up<br>
            参っちまうね<br><br>

            Million dollar bike<br>
            何百万もするバイクだぜ<br><br><br><br>
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
            <form action="{{ route('Biking.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="37">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Chanel') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Lens') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
