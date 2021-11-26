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
            <h2>17: Futura Free</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VHGqsnsuA3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 17
                <br>
                Year : 2016
                <br>
                Produced by : Malay, Om’Mas Keith, <br>
                Buddy Ross & Frank Ocean
                </h3>  
                <p> フランクの過去と現在が対比される形で語られ、自らを振り返る一曲にもなっているこの作品。<br>
                最初にこの曲を聞いた時、「Futuraってなんだ?」と思ったのですが、フォントの一種とのこと。<br>
                Supremeのロゴなんかにも使われていて、フランクも愛用しています。この曲のラスト、は<br>
                「How far is a light year?」-「1光年ってどれくらいの長さなの?」という言葉で締めくくられます。<br>
                「1光年ってどれくらい？」という質問から、この” Futura “は ”Future – 未来 “というワードも<br>
                彷彿とさせます。彼は「自由な未来が広がってるんだよ」と、このアルバムのラストで伝えたいのかもしれません。

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
            Alright, hold on<br>
            大丈夫さ、ちょっと待ってね<br><br><br><br>
            </p>
            <p>
            [Verse 1]<br>
            If I was being honest<br>
            もし俺が正直だったら<br><br>

            I’d say long as I could fuck three times a day<br>
            一日に3回はヤれるって言うんだろうな<br><br>

            And not skip a meal, I’m good<br>
            もちろん食事はちゃんと食べてさ、大丈夫だよ<br><br>

            I used to work on my feet for 7 dollars a hour<br>
            昔は時給7ドル立ちっぱなしで、よく働いてたよな<br>
            (BBCのインタビューで彼は地元・ニューオリンズにいた頃、洗車や芝刈りのアルバイトをしていたと語っています）<br><br>

            Call my Momma like, “Momma<br>
            ママに電話をかけるんだ「ママ<br><br>

            I ain’t making minimum wage, Momma<br>
            最低賃金すら、もらえないんだ、ママ<br><br>

            I’m on, Momma, I’m on<br>
            俺はママに頼りきりだな、俺はさ」<br><br>

            Now I’m making 400, 600, 800K, Momma<br>
            今じゃ40万、60万、80万ドルも稼いでるよ、ママ<br><br>

            To stand on my feet, Momma<br>
            自分の足でしっかり立てるようになったんだ、ママ<br><br>

            Play these songs, it’s therapy, Momma<br>
            曲を作るんだ、それが心の癒しでさ、ママ<br><br>

            They paying me, Momma<br>
            そしたら、みんなお金を払って買ってくれる、ママ<br><br>

            I should be paying them<br>
            俺こそ、彼らに金を払うべきなのにな<br><br>

            I should be paying, y’all honest to God<br>
            俺こそ感謝するべきだよ、神様へ、全て正直に言うよ<br><br>

            I’m just a guy, I’m not a god<br>
            俺はただの人間なんだ、神なんかじゃない<br><br>

            Sometimes I feel like I’m a god, but I’m not a god<br>
            時々、自分が神なんじゃないかって感じる時もあるけど、でも俺は神様なんかじゃない<br><br>

            If I was I don’t know which heaven would have me, Momma<br>
            もし俺が神なら、俺を受けてくれる天国なんてあるのかい、ママ<br><br>

            Let me run this bitch<br>
            このビッチを俺が動かせるなら<br><br>

            I’ma run it into the ground, Momma, the whole galaxy<br>
            地面の中に一直線に突き落とすよ、ママ、全ての銀河系で<br>
            (もし神になって、人の運命が決められるなら、ビッチを地獄に落とすと)<br><br>

            God damn, fuck these lames, they don’t want none<br>
            クソ、ダセえ奴らはクソ喰らえだね、あいつら何も求めてない<br><br>

            Fuck these lames, they don’t want none<br>
            ファックだよ、ダセえ奴ら、あいつら何も求めない<br><br>

            Fuck these niggas<br>
            あいつらみんなクソ喰らえだよ<br><br>

            Fuck these niggas, they don’t want none<br>
            みんなクソ喰らえだ、あいつら何も求めないから<br><br>

            Fuck these niggas<br>
            ファック、お前らクソだよ<br><br>

            Fuck you niggas<br>
            クソ喰らえ<br><br>

            Fuck me if I hated on you<br>
            俺がお前を嫌ったら、お前も俺を嫌えばいいさ<br><br>


            </p>

            <p>
            [Verse 2]<br>
            I’ma stick around<br>
            この辺をブラついて<br><br>

            I’m gon’ let my nuts hang<br>
            ただただ時間を持て余してる<br><br>

            Nigga, you got some just like me don’t you?<br>
            なぁ、君も俺みたいに色々手に入れただろ？<br><br>

            Or maybe not just like me<br>
            俺とはちょっと違うかもしれないけど<br><br>

            You know I’m Africano Americano<br>
            知ってるだろ、俺はアフリカン・アメリカンだから<br><br>

            And even if you’re half Japanese, roots run deep<br>
            たとえ君が日本人とのハーフでも、ルーツは深く残ってるんだ<br><br>

            Family tree, throw a big shadow<br>
            受け継がれてきた家系は、大きな影を落とす<br><br>

            (Jamming to the rhythm)<br>
            (リズムに合わせてジャムする）<br><br>

            Tech company<br>
            テック・カンパニー<br><br>

            Please gimme immortality<br>
            俺に「死なない」技術をくれよ<br><br>

            (It’s a face to face)<br>
            (面と向かって)
            <br><br>
            I’m going rapidly, fading drastically<br>
            俺は途端に現れて、劇的に消えていく<br><br>

            (Keep me high, Castrati)<br>
            (ハイでいさせてくれ、カストラート)<br>
            (” カストラート “は中世ヨーロッパの「去勢された男性歌手」のこと。声変わりすることなく「高い(ハイな)声」を出し続けることができたそう)<br><br>

            (Punani fade the stress)<br>
            (女性器がストレスを和らいでくれる)<br><br>

            Or pull the zip down<br>
            チャックを下ろして<br><br>

            Wet your lips first, lick the tip now<br>
            まずは君の唇を濡らして、先端から舐め始めるんだ<br><br>

            (Bugatti left some stretch marks on that freeway)<br>
            (ブガッティは高速の上で、線を残していく)<br>
            (ブガッティは超高級なスポーツカー。” stretch marks “は妊娠の際に皮膚の表面に現れるラインという意味も)<br><br>

            Smoke some’n<br>
            たくさん吸って<br><br>

            (Marks on that freeway)<br>
            (高速にはマークが残ってる)<br><br>

            They tryna find 2Pac, don’t let ‘em find 2Pac<br>
            みんな2Pacを探そうと必死さ、あいつらに2Pacを見つけさせちゃダメだ<br><br>

            He evade the press, he escape the stress<br>
            彼はプレスから逃げてるのさ、ストレスから逃げてるんだよ<br><br>

            La da da da da, la da da da da<br>
            La da da da da (la da da da da)<br>
            (2Pac “Hail Mary “から)<br><br><br><br>
            </p>

            <p>
            [Verse 3]<br>
            I’ll keep quiet and let you run your phone bill up<br>
            俺は黙り続けるよ、そしたら君の携帯料金は上がっていくだろ<br><br>

            I know you love to talk<br>
            君はおしゃべりが好きだもんな<br><br>

            I ain’t on your schedule<br>
            君のスケジュールには合わせられないよ<br><br>

            I ain’t on no schedule<br>
            俺はスケジュールを作らないから<br><br>

            I ain’t had me a job since 2009<br>
            2009年から「仕事」はないんだ<br>
            (2009年フランクはDef Jamと契約を果たしています。ソング・ライティングの仕事をやめ、自分の音楽制作に専念し始める）<br><br>

            I ain’t on no sales floor<br>
            売り場にはもう立たないのさ<br><br>

            You say I’m changing on you<br>
            君は、俺が変わっていってるって言うよね<br><br>

            I feel like Selena, they wanna murder a nigga<br>
            Selenaみたいな気持ちだよ、あいつら人を殺したいんだ<br>
            (セリーナは90s・アメリカのテハーノ歌手。ファンクラブの会長によって発砲され亡くなっています)<br><br>

            Murder me like Selena<br>
            俺をSelenaみたいに殺すんだろ<br><br>

            You must ain’t get the memo<br>
            お前はあのメモを見てないんだろ<br><br>

            I don’t cut bitches no more<br>
            もうビッチたちとも遊ばねえんだ<br>
            (” あのメモ “とはおそらく、フランクが『Channel Orange』リリース前に公開した、男性への初恋の物語のこと)<br><br>

            But your bitch my exception<br>
            けど、お前のビッチは例外だぜ<br><br>

            Come get her outta my four door<br>
            俺の4ドアから彼女を降ろしにくればいいだろ<br>
            (4ドアの車のこと)<br><br>

            I only got one four door<br>
            俺は4ドアは一台しか持ってないんだ<br>
            (彼はスポーツカー好きです。2ドアのタイプが多いんですね)<br><br>

            Remember when I had that Lexus, no<br>
            俺がレクサスに乗ってた頃を覚えてるかい、いや<br><br>

            Our friendship don’t go back that far<br>
            俺たちの仲はそこまで昔からじゃなかったかもな<br><br>

            Tyler slept on my sofa, yeah<br>
            タイラーがうちのソファーで寝てた、エイ<br>
            (タイラー・ザ・クリエイターのこと）<br><br>

            Niggas go back that far<br>
            あいつとは、それくらい昔からの仲なんだ<br><br>

            I ain’t smoked all year<br>
            俺はこの1年、全く葉っぱを吸わなかった<br><br>

            This the last song so, I’m finna wipe that off<br>
            これが最後の曲だよ、だからそれもようやく終わりだな<br><br>

            Tolerance is so low, still smoke a whole ‘gar<br>
            超弱くなっちまってるよ、でも全部巻いて吸うんだ<br><br>

            Ménage on my birthday, tap out on the first stroke<br>
            俺の誕生日に3Pをする、一回ヤっただけで、もう限界さ<br><br>

            ‘Cause this ain’t no work day, she don’t give head anyway<br>
            だってこれは仕事じゃないから、どちらにしても彼女は” ヘッド “をくれないんだ<br>
            (” ヘッド “をくれない = フェラしてくれない）<br><br>

            ‘Cause what niggas say, that’s what she tell her man<br>
            だって彼女が、彼氏に言ってた、あいつも言ってたけどさ<br><br>

            What a difference distance makes<br>
            「距離」が違いを生むんだって<br><br>

            Niggas want fight in the streets<br>
            みんなストリートで喧嘩したがってる<br><br>

            Now shit starting to make my hands hurt<br>
            そのせいで手が痛むよ<br>
            (2013年彼はクリス・ブラウンとの喧嘩騒動を起こしています。その際、クリスの手が包帯でグルグル巻きだったので、そのことを表しているのかもしれません）<br><br>

            Jay hit me on the email, said I oughta act my net worth<br>
            Jayがメールをくれた、俺がきちんと自分の価値通り行動するべきだって言ってくれた<br>
            (Jay-Zのこと。きちんと法廷で争うべきだとメッセージをくれたそう）<br><br>

            Dog this is chess now, not fetch<br>
            なぁ、これはチェスだぜ、” フェッチ “じゃねえ<br>
            (彼にとって音楽の世界で生きていくのは、チェスのように緻密に計画されたものであり、犬との” フェッチ(物を投げて犬が取ってくる) “といった「遊び」じゃないんだと)<br><br>

            I ain’t runnin’ for a nigga, ain’t ran since track meet<br>
            俺は他人のためには走らない、陸上大会以来走ってないんだ<br><br>

            That’s the only time I ran from a nigga<br>
            それが唯一の瞬間だったね、俺が誰かから逃げるなんて<br><br>

            You could change this track now<br>
            君ならこの曲を今すぐ変えられるんだよ<br><br>

            Could’ve changed this bitch a long time ago<br>
            もっと遠い昔に変えることもできたけど<br><br>

            —know and —know, —know and —know<br>
            知ってる、それも知ってる、それもさ<br><br>

            Shout out to Hollygrove, I’m from that 7th though<br>
            Hollygroveに感謝を送るよ、俺の出身は7番の地区だけどさ<br>
            (Hollygroveはフランクの出身ニューオリンズの地区。リル・ウェインの出身としても知られています）<br><br>

            Twins know and Lance know, Clark know and Matt know<br>
            Twinsも、Lanceも知ってる、ClarkにMattも知ってるんだ<br><br>

            Shit went 180 on me, please run that back though<br>
            みんな俺に180度手のひらを返してさ、お願いだよ、巻き戻ってくれ<br><br><br><br>


            </p>

            <p>
            [Outro: Mikey Alfred, Ryan Breaux & Sage Elsesser]<br>
            Make sure you speak up<br>
            大きな声で喋ってくれよ<br><br><br><br>
            </p>

            <p>
            [Ryan Breaux]<br>
            Okay<br>
            オーケイ<br><br>

            What’s your name?<br>
            君の名前を聞かせてくれ<br><br>

            Ryan<br>
            「ライアンさ」<br><br>

            Yo, ayy be quiet. What’s your name? What do you do? What’s your first memory?<br>
            Yo、おいおい、静かにしてくれよ、名前は？仕事は何してる？物心ついて最初の記憶は？<br><br>

            The first word I learned to say or that I ever said<br>
            「最初に習っただか、喋れた言葉は…」<br><br>

            What’s the most amazing thing you’ve ever witnessed?<br>
            今まで目撃した中で、最も驚いたことは？<br><br>

            (Uh, hell no)<br>
            (ああ、クソ)<br><br>

            (You’re not gonna make it, are you?)<br>
            (これじゃ上手くいかないよな？)<br><br>

            Friendship and how it controls the world, hahaha<br>
            「友情。友情が世界をどうコントロールしてるか、かな。ハハハハ」<br><br>

            Hahaha, alright, um, what three superpowers do you wish you had? They say they have to be…<br>
            ハハハ、いいね、もしこの3つの超能力どれかを手に入れらえるなら、何にする？彼らは間違いなく…<br><br>

            Flying, super strength…<br>
            空を飛べる、超人的な力…<br><br>

            Alright, what’s your name?<br>
            オーケー、君の名前はなんだっけ？<br><br>

            Maybe we can get a little—a little bit, a little bit, a little bit<br>
            俺たち、少し、ほんの少しイケるかもな<br><br>

            I wish I could sleep without, like, being dead<br>
            「永遠に眠りたいんだ、まるで、死んだみたいにさ」<br><br>

            But forever at the same time<br>
            「死にたくはないけどね、でも永遠に眠りたいんだ」<br><br>

            Yo, what, what’s, what’s the… dog, stop, stop, stop<br>
            Yo、何だよ、なぁ、やめろ、止めろよ<br><br>

            (What you mean bro?)<br>
            (どういう意味だい？ブラザー)<br><br>

            And ships could fly. Buildings would be very, very tall<br>
            「船が飛べるようになって、ビルはもっともっと高くなるんだ」<br><br>

            And everybody won’t know the ground is up<br>
            「それでみんな、地面があったことを忘れてしまうんだよ」<br><br>

            (That’s fucked up)<br>
            (もうめちゃくちゃだよ)<br><br>

            Chloe, shh, okay, start over right now<br>
            クロエ、静かにしてくれよ、もう一度やり直そう<br><br>

            Best thing about being me is I got a nice set of friends<br>
            「” 自分自身 “でい続けることの最も良い点は、良い友人を持ったことかな」<br><br>

            Pretty clear mind, I feel like, sometimes<br>
            「マインドが超クリアになったりね、時々、そう感じたりもする」<br><br>

            ［Sage］<br>
            Probably, uh, being great<br>
            「多分な、俺は偉大になることかな」<br><br>

            I think a lot, a lot, too much. Sometimes I’m very messy<br>
            「色々考えるよ、多すぎるくらい考えてる、時々、頭がめちゃくちゃになっちまうけど」<br><br>

            Talents, got any secret talents?<br>
            才能、何か特別な才能があると思う？<br><br>

            I don’t think so, I’m pretty open and all in everything that I do<br>
            「そうは思わないな、俺は超オープンで、やることは全て全力を取り組めるけど」<br><br>

            Talents? Um, I can play the theremin<br>
            「才能？あぁ、俺テルミンを弾けるんだ」<br>
            (ロシアで発明された世界初の電子楽器）<br><br>

            Probably, uh, probably Tyler, his life seems pretty awesome<br>
            「多分ね、タイラーもかな、彼の生活はマジで最高そうさ」<br><br>

            No, actually, no, fuck him. Um, I don’t know<br>
            「いや、まあ実際のところ、関係ないか、まあ、よくわかんないや」<br><br>

            Probably Dill ‘cause he doesn’t have to do anything at all<br>
            「ディルもそうかな、だって彼には一つもやらなきゃいけないことがないから」<br>
            (ジェイソン・ディルのこと。Fucking Awesomeのフィルマーをしているそう）<br><br>

            Just sits inside his house<br>
            「家で座ってるだけだよ」<br><br>

            What’s your name?<br>
            君の名前は？<br><br>

            Sage Elsesser<br>
            「セイジ・エルセッサー」<br>
            (Supremeのライダーですね)<br><br>

            What do you do?<br>
            普段は何をしてるの？<br><br>

            I play soccer and I go to school<br>
            「サッカーをプレイしたり、学校に行ったりかな」<br><br>

            Um, I wanna be better at skating<br>
            「あとは、もっとスケートを上手くなりたいよ」<br><br>

            (It’s probably up something really high, it’s super high<br>
            I tried to land, like, a handstand or something)<br>
            (超難易度の高い技に乗れるかってところかもな、逆立ちみたいなレベルのやつ)<br><br>

            Alright, that’s it…<br>
            いい感じだね、これで終わりだよ<br><br>

            I spend a couple hours with my family and I go out<br>
            「家族と何時間か家で過ごして、外に出たんだ」<br><br>

            And do everything that I ever thought about trying<br>
            「外に出て俺が必死に考えていたのは」<br><br>

            How far is a light year? How far is a light year?<br>
            「1光年ってどれくらい遠いんだ？1光年ってどれくらい長いんだ？ってこと」<br><br><br><br>


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
            <form action="{{ route('Futura_Free.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="34">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Godspeed') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Swim_Good') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
