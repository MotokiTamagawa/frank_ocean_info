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
            <h2>5: Sweet Life</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6P5Nx6zshMI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 5
                <br>
                Year : 2012
                <br>
                Produced by :Frank Ocean & Pharrell Williams
                </h3>  
                <p>
                ヤシの木と、目いっぱいの海が視覚的に浮かぶようなサウンドが特徴的な作品で、<br>
                実際にリリックでは、フランクと「君」が裕福な「パラダイス」に暮らしていることが語られています。<br>
                リリックに登場する「君」という存在は、生まれた時から大きな庭や、<br>
                お手伝いさんに囲まれ、太陽のように優しい両親に育てられたと語られている裕福な人物で、<br>
                フランクとは恋愛関係だと想像できます。<br>
               「どうしてこんな世の中を直視するんだい？君にはビーチがあるだろ」と「君」に問いかけています。



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
            The best song wasn’t the single, but you weren’t either<br>
            アルバムのベストソングがシングルカットとは限らないだろ? それは君も同じさ<br>
            (人気ではない人が” ベスト “かもしれない、逆に人気だとされていた人が” ベスト “ではないかもしれないということを、アルバムのシングルカットと比較しています)<br><br>

            Livin’ in Ladera Heights, the black Beverly Hills<br>
            レイデラ・ハイツに住んでさ、”クロ”のビバリーヒルズだよ<br>
            (南カリフォルニアの非常に裕福なアフリカン・アメリカンが住む地域)<br><br>

            Domesticated paradise, palm trees and pools<br>
            飼いならされたパラダイスだ、ヤシの木とプールで取り繕ってる<br><br>

            The water’s blue, swallow the pill<br>
            水は鮮やかな青、その錠剤を飲み込めば<br><br>

            Keepin’ it surreal, whatever you like<br>
            リアルを超えるんだ、君の好きなようにね<br>
            (映画マトリックスから、赤の薬を飲めば現実世界で真実を知る、青の薬を飲めば夢の世界に戻るという2択を与えられるシーンです。彼は青の薬を選んだ、ということです。この錠剤の色とカリフォルニアの海の色を対比させています)<br><br><br><br>
            </p>
            <p>
            Whatever feels good, whatever takes you mountain high<br>
            なんでもいいんだ、山の高さくらいハイにしてくれるやつだよ<br><br>

            Keepin’ it surreal, not sugar-free<br>
            リアルを超えるんだ、シュガーフリーとか現実的なやつじゃない<br>
            (“Sweet” Life)<br><br>

            My TV ain’t HD, that’s too real<br>
            俺のテレビはHDじゃないんだ、だってリアルすぎるだろ<br>
            (青の薬を選んだように、真実より、あえて無知を選びます)<br><br>

            Grapevine, mango, peaches and limes, the sweet life<br>
            葡萄にマンゴー、ピーチ、それにライム、これがスイートライフだよ<br>
            (ライムは甘い果物ではありません、” 飼いならされたパラダイス “という表現同様、彼は” スイートライフ ”を皮肉っているようにも思えます)<br><br><br><br>
            </p>

            <p>
            [Pre-Chorus]<br>
            Sweet life, sweet life<br>
            Sweet life, sweet life<br>
            スイートなライフだ<br><br>

            The sweet, sweet, sweet, sweet life<br>
            甘い、甘い日々だよ<br><br>

            Sweet life, the sweet life<br>
            スイートライフ<br><br>

            Sweetie pie<br>
            なあ俺のスイーティ<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            You’ve had a landscaper and a house keeper since you were born<br>
            生まれた時から君はでっかい庭があって、お手伝いさんもいて<br><br>

            The sunshine always kept you warm<br>
            太陽みたいな優しい両親に守られて<br><br>

            So why see the world, when you got the beach<br>
            それなのに、どうしてこんな世の中を見るんだい、ビーチがあるってのに<br><br>

            Don’t know why see the world, when you got the beach<br>
            君がこんな醜い世界を見る訳がわからないんだ、こんな美しいビーチがあるのに<br><br>

            The sweet life<br>
            スイートライフだよ<br><br><br><br>
            </p>
            <p>
            [Verse2]<br>
            The best song wasn’t the single, but you couldn’t turn your radio down<br>
            ベストソングがシングルとは限らない、でも君はヒットチャートを消せないんだ<br>
            (シングルばかり聞いて(外見や評判ばかり見て)、アルバムの中身をディグしないこと(人間性を知ろうとしないこと))<br><br>

            Satellite need a receiver, can’t seem to turn the signal fully off<br>
            衛星には受信機が必要だろ、完全にそのシグナルを切れないみたいだ<br>
            (先ほどと同様に、音楽と人間関係を比喩で伝えています。シングル ・独り身でいようとする人は、深く人間性を知ろうとしないが、真剣な関係を求める人のシグナルを完全には拒否できないこと)<br><br>

            Transmitting the waves<br>
            思いの波を届けるんだ<br><br>

            You’re catching that breeze ‘til you’re dead in the grave<br>
            死んで墓に入るまで、波風に打たれ続けるんだよ<br><br>

            But you’re keepin’ it surreal, whatever you like<br>
            でも君はリアルを超えるんだ、君の好きなようにね<br><br>

            Whatever feels good, whatever takes you mountain high<br>
            なんでもいいんだ、山の高さくらいハイにしてくれるやつだよ<br><br>

            Keepin’ it surreal, not sugar-free, my tv ain’t HD, that’s too real<br>
            リアルを超えるんだ、シュガーフリーじゃない、俺のテレビはHDじゃないんだ、だってリアルすぎるだろ<br><br>

            Grapevines, mango, peaches and lime, a sweet life<br>
            葡萄にマンゴー、ピーチ、それにライム、これがスイートライフだよ<br><br><br><br>
            </p>
            <p>
            [Pre-Chorus]<br>
            A sweet life<br>
            A sweet life, yeah<br>
            A sweet life, a sweet life<br>
            A sweet life<br>
            スイートライフだ<br><br>

            Live and die in the life<br>
            こんな世界で生きて、死んでいくんだ<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            You’ve had a landscaper and a house keeper since you were born<br>
            生まれた時から君はでっかい庭があって、お手伝いさんもいて<br><br>

            The sunshine always kept you warm<br>
            太陽みたいな優しい両親に守られて<br><br>

            So why see the world, when you got the beach<br>
            それなのに、どうしてこんな世の中を見るんだい、ビーチがあるってのに<br><br>

            Don’t know why see the world, when you got the beach<br>
            君がこんな醜い世界を見る訳がわからないんだ、こんな美しいビーチがあるのに<br><br>

            The sweet life<br>
            スイートライフだよ<br><br><br><br>
            </p>
            <p>
            [Bridge]<br>
            And the water, is exactly what I wanted<br>
            そうこの海だ、これが俺が求めていたやつだ<br><br>

            It’s everything I thought it would be (Thought it would be)<br>
            そう、これがこの世界のなるべき姿なんだよ<br>
            (カリフォルニアの海のように、静かで、落ち着いた世界)<br><br>

            But this neighborhood is gettin’ trippier every day<br>
            でも現実は混沌としてるんだ、毎日銃に暴力にって<br><br>

            The neighborhood is goin’ ape shit crazy<br>
            みんなマジでクレイジーになっていってる<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            You’ve had a landscaper and a house keeper since you were born<br>
            生まれた時から君はでっかい庭があって、お手伝いさんもいて<br><br>

            The sunshine always kept you warm<br>
            太陽みたいな優しい両親に守られて<br><br>

            So why see the world, when you got the beach<br>
            それなのに、どうしてこんな世の中を見るんだい、ビーチがあるってのに<br><br>

            Don’t know why see the world, when you got the beach<br>
            君がこんな醜い世界を見る訳がわからないんだ、こんな美しいビーチがあるのに<br><br>

            The sweet life<br>
            スイートライフだよ<br><br><br><br>
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
            <form action="{{ route('Sweet_Life.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="5">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Sierra_Leone') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Not_Just_Money') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>

</body>
</html>   
