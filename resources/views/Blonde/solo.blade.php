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
            <h2>5: Solo </h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/X_SEwgDl02E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 5
                <br>
                Year : 2016
                <br>
                Produced by :Frank Ocean & James Blake
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
            [Verse 1]<br>
            Hand me a towel, I’m dirty dancing by myself<br>
            タオルを取ってくれ、俺は一人でダーティ・ダンスをしてるんだ<br>
            (” Dancing by myself “は自慰行為の比喩。また、クラブで彼が一人で踊っている様子が浮かびます)<br><br>

            Gone off tabs of that acid<br>
            あのアシッドの錠剤は消えていったよ<br>
            (アシッド = LSD。前曲” Be Yourself “で「ドラッグをやるな」と言われていましたが、結局彼はアシッドを飲んでしまったんですね)<br><br>

            Form me a circle, watch my Jagger<br>
            俺の周りに円になってさ、俺のジャガーを見ろよ<br>
            (クラブで一人踊る彼の周りに人が集まります。ローリング・ストーンズのヴォーカリスト、ミック・” ジャガー “はステージで着ている派手なジャケットが特徴的です。ステージ上のミックのように、自分に注目してくれと彼が言っているように思えます)<br><br>

            Might lose my jacket and hit a solo, one time<br>
            ジャケットを失くしちまったかも、まあ一人でやるよ、今回はね<br><br>

            We too loud in public, them police turned down the function<br>
            俺たち公共の場でうるさくしすぎてさ、警察がお開きにしやがった<br><br>

            Now we outside and the timing’s perfect<br>
            みんな外に追い出されたから、完璧なタイミングだった

            Forgot to tell you, gotta tell you how much I vibe with you<br>
            伝え忘れたのさ、俺がどれほど君にバイブスを感じたか、それを伝えるべきだったのに<br><br>

            And we don’t gotta be solo<br>
            それに、俺たち「ソロ」ではいられないだろ<br>
            (二人とも孤独を感じているんですね。また、” solo “は” so low “にも聞こえます。クラブを追い出された彼らですが、その後「二人でもっとハイになれる」という意味にも取れます)<br><br>

            Now stay away from highways<br>
            もう高速からずいぶん遠いところまで来た<br><br>

            My eyes like them red lights<br>
            俺の眼はまるで赤いライトのように光ってる<br>
            (ドラッグをやると、目が充血することがよくあります)<br><br>

            Right now I prefer yellow<br>
            でも今は黄色の方がいい<br>
            (信号の色が浮かびます。「赤」でストップをかけていた彼が、「黄」でゆっくりゴーサインを出すと)<br><br>

            Redbone, so mellow<br>
            レッド・ボーン、かなりメロウだね<br>
            (” レッド・ボーン “は「肌の色が明るい黒人女性」を意味する言葉)<br><br>

            Fuck ‘round, be cutting you<br>
            いろんな人とヤっては、君のところへ戻ってくる<br><br>

            Think we were better off solo<br>
            思うんだよ、俺たち「ソロ」になった方が良かったのかなって<br><br>

            I got that act right in the Windy City that night<br>
            あの夜も” Windy City “でお楽しみをしたんだ<br>
            (” Windy City ” = シカゴ。” act right “で性的な行為という意味になります)<br><br>

            No trees to blow through but blow me and I owe you<br>
            吸う (blow) 葉っぱもないけど、君は俺を楽しませ (blow) てくれたから、借りがあるんだ<br><br>

            Two grams when the sun rise<br>
            太陽が昇れば、2グラムやって<br><br>

            Smoking good, rolling solo<br>
            いい感じだよ、一人で葉っぱを巻くのさ<br><br>

            Solo (solo), solo (solo)<br>
            一人でね (ソロ)、俺はソロだよ (一人さ) <br><br>

            S-solo (solo), s-solo, (solo)<br>
            俺はソロだよ (一人さ) 、孤独なんだ(ソロ)<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            It’s hell on Earth and the city’s on fire<br>
            ここは地球の地獄だよ、街は怒りで溢れてる<br>
            (現在のアメリカの状況を指しています。火がついている = 怒りが溢れている。という解釈をしています)<br><br>

            Inhale, in hell there’s heaven<br>
            葉っぱを吸うんだ、地獄の中にも天国はあるからさ<br>
            (地球という地獄から、葉っぱを吸うことで一時的に逃れることができると)<br><br>

            There’s a bull and a matador dueling in the sky<br>
            空では、牛と闘牛士が決闘してるんだ<br>
            (空に浮かぶオリオン座と、牡牛座が浮かびます)<br><br>

            Inhale, in hell there’s heaven<br>
            煙を吸い込んでさ、地獄にも天国はあるんだ<br><br>

            Oh, oh, oh, oh<br>
            Oh, oh, oh, oh<br>

            Solo, solo, solo, solo<br>
            一人っきりだよ、孤独なんだ<br><br>
            </p>
            <p>
            [Verse 2]<br>
            I’m skipping showers and switching socks, sleeping good and long<br>
            シャワーも浴びないで、靴下も変えずにさ、ずっとずっと眠り続けるんだ<br>
            (別れて「ソロ」になったことで、自分を清潔にしなくても良いと)<br><br>

            Bones feeling dense as fuck, wish a nigga would cross<br>
            身体の力がみなぎってる、誰かが来てくれることを願ってるよ<br><br>

            And catch a solo, on time<br>
            この「ソロ」を受け止めて欲しいんだ。時間通りにね<br>
            (” catch a solo “で「1対1で誰かと戦う」というスラング。押し込めない気持ちを誰かに受け取って欲しいという風にも感じます)<br><br>

            White leaf on my boxers, green leaf turn to vapors for the low<br>
            ボクサーの中にはホワイト・リーフ、グリーンは煙にしちゃうよ、簡単に手に入るしね<br>
            (ホワイト・リーフ = マリファナの一種である” White Widow “だと思われます。 普通のウィードは煙にして焚いてしまうと)<br><br>

            And that mean cheap, ‘cause ain’t shit free and I know it<br>
            安いってことだよ、タダじゃないのはちゃんとわかってる<br><br>

            Even love ain’t, ‘cause this nut cost, that clinic killed my soul<br>
            愛だってそうさ、射精にだって金はかかるし、クリニックに行けば” 魂 “を殺すことになるから<br>
            (コンドームを買うお金がかかると。それにお金をかけなければ、子供の魂を中絶という形で殺すことになります)<br><br>

            But you gotta hit the pussy raw though<br>
            でも君は生でプッシーに当てなきゃならなかった<br><br>

            Now your baby momma ain’t so vicious<br>
            それなら君のママは、そんなに悪者じゃないさ<br><br>

            All she want is her picket fence<br>
            彼女が欲しいのはただ「白い柵」だけだから<br>
            (家の周りに立つ「白い柵」はアメリカでは幸せな家庭の象徴です)<br><br>

            And you protest and you picket sign<br>
            君が抗議して、プラカードを掲げても<br><br>

            But them courts won’t side with you<br>
            法廷は君の味方をしてはくれないんだ<br><br>

            Won’t let you fly solo<br>
            君を一人では飛び立たせてくれない<br><br>

            I wanted that act right in Colorado that night<br>
            あの夜、コロラドでもお楽しみをやりたかったけど<br><br>

            I brought trees to blow through, but it’s just me and no you<br>
            その日は葉っぱを吸ってたよ、君はいなかった、俺一人だけだよ<br><br>

            Stayed up ‘til my phone died, smoking big, rolling solo<br>
            携帯が切れるまでずっと起きてたんだ、一人で巻いた葉っぱを、山ほど吸ってね<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            It’s hell on Earth and the city’s on fire<br>
            ここは地球の地獄だよ、街は怒りで溢れてる<br><br>

            Inhale, in hell there’s heaven<br>
            葉っぱを吸うんだ、地獄の中にも天国はあるからさ<br><br>

            There’s a bull and a matador dueling in the sky<br>
            空では、牛と闘牛士が決闘してる<br><br>

            Inhale, in hell there’s heaven<br>
            煙を吸い込んでさ、地獄にも天国はあるんだ<br><br>

            Oh, oh, oh, oh<br>
            Oh, oh, oh, oh<br>

            Solo, solo, solo, solo<br>
            一人っきりだよ、孤独なんだ<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            By myself<br>
            俺一人でね<br><br>

            Solo, solo, solo, solo<br>
            ソロ、孤独だよ<br><br>

            (By myself, by myself)<br>
            (一人だけさ、俺一人)<br><br>

            (Solo)<br>
            (ソロ)<br><br><br><br>
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
            <form action="{{ route('Solo.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="22">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Be_Yourself') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Skyline_To ') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
