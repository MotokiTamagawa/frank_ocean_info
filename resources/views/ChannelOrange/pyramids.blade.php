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
            <h2>10: Pyramids</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ljvyS-mjsUA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 10
                <br>
                Year : 2012
                <br>
                Produced by :Om’Mas Keith, Malay & Frank Ocean
                </h3>  
                <p>タイトル通り、「ピラミッド、エジプト、クレオパトラ」といったワードが登場する作品ですが、<br>
                Part1、Part2の2部構成になっており、Part1では古代エジプトでのお話、Part2では現代のお話という大きな<br>
                括りがあります。</p>
                <p>パート2ではなんとフランクオーシャンが、売春の斡旋をしている役として歌っています。
                    <br>途中で何度か視点が変わることにも注目していただけたら、内容がよりわかりやすくなっています。

            </p>    
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Part1]<br><br>

            [Hook]<br>
            Set the cheetahs on the loose<br>
            チーターを追わせておいてくれ<br><br>

            There’s a thief out on the move<br>
            人さらいがまだ逃げてるんだ<br><br>

            Underneath our legion’s view<br>
            我々の軍隊の目下で<br><br>

            They have taken Cleopatra<br>
            あいつらクレオパトラをさらってったんだ<br><br>
            </p>
            <p>
            [Bridge]<br>
            Run run run come back for my glory<br>
            私の栄光を取り戻す為に走れ、走るんだ<br>
            (クレオパトラは古代ギリシア語でgloryという意味です)<br><br>

            (Cleopatra, Cleopatra)<br>
            Bring her back to me<br>
            私の元に連れ帰ってくれ<br><br>

            (Cleopatra, hey oh Patraehh ehh Cleopatra)<br>
            Run run run the crown of our pharaoh<br>
            走れ、走れ、ファラオの王冠のために<br><br>

            (Cleopatra, Cleopatra)<br>
            The throne of our queen is empty<br>
            王女の座は空いたままだ<br><br>

            (Hey oh’ Patra, Cleopatra)<br><br><br><br>
            </p>
            <p>
            [Verse1]<br>
            And we’ll run to the future<br>
            そうして我々は未来へと進む<br><br>

            Shining like diamonds in a rocky world<br>
            彼女はこの暗い世に、ダイヤモンドのように輝いているんだ<br><br>

            A rocky, rocky world<br>
            この暗い、暗い世の中で<br><br>

            Our skin like bronze and our hair like cashmere<br>
            銅のような肌に、カシミアのような髪<br><br>

            As we march to the rhythm on the Palace floor<br>
            この神殿でリズムに乗って行進すれば<br><br>

            Chandeliers inside the pyramids<br>
            ピラミッドの中のシャンデリア<br><br>

            Tremble from the force<br>
            それは力によって揺れ動き<br><br>

            Cymbals crash inside the pyramids<br>
            シンバルの音が鳴り響く<br><br>

            Voices fill up the halls<br>
            そしてこの空間に無数の声がとどろく<br>
            (クレオパトラの治世下で行われたパレードの様子)<br><br><br><br>
            </p>
            <p>
            [Hook]<br>
            Set the cheetahs on the loose<br>
            チーターを追わせておいてくれ<br><br>

            There’s a thief out on the move<br>
            人さらい達がまだ逃げてるんだ<br><br>

            Underneath our legion’s view<br>
            我々の軍隊の目下で<br><br>

            They have taken Cleopatra<br>
            あいつらクレオパトラをさらってったんだ<br><br><br><br> 
            </p>
            <p>
            [Verse2]<br>
            The jewel of Africa<br>
            アフリカ産の宝石だ<br>
            (クレオパトラをつなぎとめるため、アフリカの星と呼ばれる宝石を渡したそう)<br>
            (Jewel)<br><br>

            What good is a jewel that ain’t still precious<br>
            どんなに素晴らしい宝石でも、彼女なしではダメなんだ<br><br>

            How could you run off on me?<br>
            どうして私の元を離れたりするんだ?<br><br>

            How could you run off on us?<br>
            どうして我々から逃げるんだ?<br><br>

            You feel like God inside that gold<br>
            君は自分の内側にある神聖さを感じてるんだろう<br><br>

            I found you laying down with Samson<br>
            ついに君がサムソン(古代イスラエルの英雄)と寝ているのを見つけたんだ<br><br>

            And his full head of hair<br>
            それに彼の髪をね<br>
            (サムソンの髪は彼の超人的な怪力を示すものだとされてるそうです)<br><br>

            Found my black queen Cleopatra<br>
            ついに私の「ブラッククイーン」、クレオパトラを見つけたんだ<br><br>

            Bad dreams Cleopatra<br>
            悪夢だよ、クレオパトラよ<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            Remove her<br>
            彼女を消してくれ<br><br>

            Send the cheetahs to the tomb<br>
            そしてチーターを墓に連れて行ってくれ<br>
            (cheetahsとcheater、つまり浮気をかけています)<br><br>

            Our war is over, our queen has met her doom<br>
            我々の戦いは終わりだ、女王は悪い運命に巡り合ったんだ<br><br>

            No more she lives, no more serpent in her room<br>
            もう彼女はいない、もう毒蛇もいないんだ<br>
            (クレオパトラは毒蛇によって自殺を行なったことで有名ですが、ヘビは裏切りの象徴でもあります)<br><br>

            No more, it has killed Cleopatra, Cleopatra<br>
            もういっぱいだ、ヘビがクレオパトラを殺したんだ<br>
            (裏切り、浮気が彼女を殺めたということです)<br><br><br><br>
            </p>
            <p>
            [Part2]<br><br>

            [Segue]<br>
            Big sun coming strong through the motel blinds<br>
            モーテルのブラインド越しには強い光が<br><br>

            Wake up to your girl for now let’s call her Cleopatra, Cleopatra<br>
            さあ起きろよ、君をクレオパトラって呼ぶよ<br>
            (先述の「悪夢」から目覚めたということ)<br><br>

            I watch you fix your hair<br>
            君が髪を繕うのを見てるんだ<br><br>

            Then put your panties on in the mirror, Cleopatra<br>
            そして鏡の前で下着をつけるのをね、クレオパトラ<br><br>

            Then your lipstick, Cleopatra<br>
            それにリップもだ、クレオパトラ<br><br>

            Then your six inch heels, Catch her<br>
            そして6インチのヒールだ、彼女を捕まえてくれ<br><br>

            She’s headed to the pyramid<br>
            彼女はピラミッドに向かってるんだ<br>
            (ここでいうピラミッドは、ストリップクラブや風俗などのこと)<br><br><br><br>
            </p>
            <p>
            [Hook]<br>
            She’s working at the pyramid tonight<br>
            彼女は今夜ピラミッドで働いてるんだ<br>
            (ラスベガスにはピラミッドを形取ったホテルやカジノがあります)<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            今夜、ピラミッドで働いてるんだ<br><br><br><br>
            </p>
            <p>
            [Verse1]<br>
            Pimping in my convos<br>
            仕事にはコンバースを履いてる (ここからがフランクオーシャンの視点です)<br><br>

            Bubbles in my champagne<br>
            シャンパンに浮かぶ泡<br><br>

            Let it be some jazz playing<br>
            いい感じのジャズでも流しておいてくれ<br><br>

            Top floor motel suite, twisting my cigars<br>
            モーテルの最上階、タバコを巻いて<br><br>

            Floor model TV with the VCR<br>
            VCRの映像にディスプレイ用のTVだ<br>
            (ホテルではなくモーテル、通常より安いディスプレイ用のtvなどチープさを感じさせます)<br><br>

            Got rubies in my damn chain<br>
            俺のチェインにはルビーが埋め込んであるんだ<br>
            (古代エジプトでもルビーは権威の象徴)<br><br>

            Whip ain’t got no gas tank<br>
            この車ガスタンクすらねえんだけどさ<br><br>

            But it still got woodgrain<br>
            でもイケてる木目の内装で (モーテルの比喩、見た目は良いが品質は低い)<br><br>

            Got your girl working for me<br>
            君の女は俺のために働いてんだ<br><br>

            Hit the strip and my bills paid<br>
            ストリップしてくれれば、俺に支払われるってわけ<br><br>

            That keep my bills paid<br>
            儲け続けるんだよ<br><br>

            Hit the strip and my bills paid<br>
            ストリップすれば、俺が儲けるんだ<br><br>

            Keep a nigga bills paid<br>
            そのまま続けてくれよ<br><br><br><br>


            </p>
            <p>
            [Hook]<br>
            She’s working at the pyramid tonight<br>
            彼女は今夜ピラミッドで働いてるんだ<br>
            (ラスベガスにはピラミッドを形取ったホテルやカジノがあります)<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            今夜、ピラミッドで働いてるんだ<br><br><br><br>
            </p>
            <p>
            [Verse2]<br>
            You showed up after work I’m bathing your body<br>
            仕事を終えて現れた、君の体を流してる<br>
            (視点が変わっています、フランクの視点ではありません)<br><br>

            Touch you in places only I know<br>
            俺しか知らない場所で、君と会ってるってワケだ<br><br>

            You’re wet and you’re warm just like our bathwater<br>
            君もいい感じに盛り上がってきて、アツくなってるみたいだ、風呂の湯みたいに<br><br>

            Can we make love before you go<br>
            出て行ってしまう前に、愛しあえないかい<br><br>

            The way you say my name makes me feel like I’m that Nigga<br>
            君が俺の名前を呼ぶと、まるで王様になった気分だ<br><br>

            But I’m still unemployed<br>
            でも相手にしてくれないんだろ<br><br>

            You say it’s big but you take it<br>
            君は大きいだなんていうけど、それが嘘なのはわかってるんだ<br><br>

            Ride cowgirl<br>
            カウガールみたいに上に乗ってね<br><br>

            But your love ain’t free no more, baby<br>
            でも君の愛は無料じゃないんだ、ベイビー<br><br>

            But your love ain’t free no more<br>
            これは仕事なんだって<br>
            (客として彼女と関係を持つが、本当は真っ当に関係を持ちたいという気持ちが現れています)<br><br><br><br>
            </p>
            <p>
            [Hook]<br>
            She’s working at the pyramid tonight<br>
            彼女は今夜ピラミッドで働いてる<br>

            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            ピラミッドで働いてるんだ<br><br>

            That’s right<br>
            そうさ<br><br>

            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            Working at the pyramid<br>
            Working at the pyramid tonight<br>
            今夜ピラミッドで働いてるんだ<br><br><br><br>           
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
            <form action="{{ route('Pyramids.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="10">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Crack_Rock') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Lost') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
