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
            <h2>9: Nights　 </h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/r4l9bFqgMaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 9
                <br>
                Year : 2016
                <br>
                Produced by :Buddy Ross, Frank Ocean, Joe Thornalley,<br>
                 Michael Uzowuru
                </h3>  
                <p> 
                軽快な音からスタートした今曲でしたが、後半部分に切り替わる瞬間のサウンドが本当に美しくて、<br>
                非常に引き込まれるサウンドになっています。後半部に切り替わるに当たって、リリックの視点が<br>
                変わることにも注目してみて頂きたいと思います。冒頭から中盤までは第三者がフランクオーシャンのことを<br>
                「You・君」と称して、語っていきます。ここでの語り手は、誰か特定の人というよりは、<br>
                大衆みたいなイメージかもしれませんね。視点が変わってからは、彼の回想が中心の内容になっています。
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

            [Verse1]<br>
            Round the city Round the clock<br>
            街中を駆け回るんだ、時計は進んでく<br><br>

            Everybody needs you<br>
            誰もが君を必要としてる<br><br>

            No you can’t make everybody equal<br>
            誰しも平等になんていかないよね<br><br>

            Although you got beaucoup family<br>
            たくさんファミリーはいるんだろうけど<br>
            (ここのファミリーは仲間という意味がこもっているでしょう)<br><br>

            You don’t even got nobody being honest with you<br>
            でもその内誰一人として君には誠実じゃないんだ<br><br>

            Breath till I evaporated<br>
            蒸発するまで吸い続けるんだ<br>
            (体が煙にまみれて浮くような感覚になるまで葉っぱをやること)<br><br>

            My whole body see through<br>
            体が透けてるような感じさ<br>
            (誰一人彼に対して誠実ではない環境では、まるで透明人間のよう。ということを表しています)<br><br>

            Transportation, handmade<br>
            ハンドメイドの乗り物さ<br>
            (彼はマガジン”Boys Don’t Cry”で車を製作するプロジェクトを進めています、また、葉っぱを自ら巻いて浮遊することの2つをさしています)<br><br>

            And I know it better than most people<br>
            他の奴らのより、そっちの方がきっといいよ<br><br>

            I don’t trust them anyways<br>
            どちらにせよあいつら信用してないんだ<br><br>

            You can’t break the law with them<br>
            あいつらと悪いことはできないよ<br>
            (裏切られ、チクられるから)<br><br>

            Get some pussy have a calm night<br>
            女と静かな夜を過ごすんだ<br><br>

            Shooters killing left and right<br>
            銃撃犯は右も左も殺してる<br><br>

            Working through your worst night<br>
            そんな最悪な夜もなんとかやりきるんだ<br><br>

            If I get my money right<br>
            金さえ得れればさ<br><br>

            You know I won’t need you<br>
            君は必要なくなるってワケ<br><br>

            And I tell you, (biiitch)<br>
            それに伝えとくよ<br><br>

            I hope the sack is full up<br>
            この袋がパンパンになるくらいの金があればなあ<br><br>

            I’m fuckin’, no I’m fucked up<br>
            マジで、ああやっちまったよ<br><br>

            Spend it when I get that<br>
            稼いだ金ならすぐに使っちまう<br><br>

            I ain’t trying to keep you<br>
            俺は君を留めようとはしないんだ<br><br>

            Can’t keep up a conversation<br>
            会話にはついていけないし<br><br>

            Can’t nobody reach you<br>
            誰も君には追いつけない<br><br>

            Why your eyes well up<br>
            なんで涙ぐんでるんだい (ドラッグの影響)<br><br>

            Did you call me from a seance<br>
            死んだ人間が俺を呼んでるだなんて<br>
            (seanceは降霊をする儀式のこと、体が透けているようなこと同様に、ハイな彼はもはや死んでいるも同然ということです)<br><br>

            You are from a past life<br>
            君はもう過去の人間なんだって<br><br>

            Hope you’re doing well bruh<br>
            君がうまくやってけることを願ってるよ<br><br>

            I been out here head firxst<br>
            なんでもまずは行動ってタイプなんだ<br><br>

            Always like the head first<br>
            いつもまずはヘッド (フェラ)ってのが好きだしね<br><br>

            Signal coming in and out<br>
            シグナルが行ったり来たりだ<br><br>

            Hope you’re doing well bruh<br>
            君が上手く行くよう願ってるよ<br><br>

            Everybody needs you<br>
            みんな君が必要なんだ<br><br>

            Everybody needs you<br>
            君が必要なんだよ<br><br>

            Oooh nani nani<br>
            This feel like a quaalude<br>
            クエイルードみたいな感触だ<br>
            (クエイルードは睡眠薬の一種です)<br><br>

            No sleep in my body<br>
            俺の体に睡眠なんて必要ないんだ<br><br>

            Ain’t no bitch in my body<br>
            俺のDNAにビッチはいないぞ<br><br><br><br>
            </p>
            <p>
            [Pre-Chorus]<br>
            New beginnings ahh<br>
            新たなる始まりだ<br><br>

            New beginnings wake up akh<br>
            始まりなんだ、起き上がるんだ<br><br>

            The sun’s going down<br>
            太陽は落ちていって<br><br>

            Time to start your day bruh<br>
            君の一日が始まるんだ<br><br>

            Can’t keep being laid off<br>
            そうやって横になっていられないだろ<br><br>

            Know you need the money if you gon’ survive the Every night shit<br>
            この毎夜を生き抜くためには、君には金が必要だって知ってるんだ<br><br>

            The every day shit<br>
            この毎日をね<br><br><br><br>
            </p>
            <p>
            [Chorus]<br>
            (フランクの視点に変わります)<br>
            Dropping baby off at home Before my night shift<br>
            夜の仕事の前にベイビーを送り届けるんだ<br><br>

            You know I can’t hear none of that spend the night shit<br>
            一緒に過ごせないってのはわかってるだろ<br><br>

            Kumbaya shit<br>
            偽りの仲ってヤツか、クソ<br>
            (Kumbayaはスピリチュアルソングの一節で、先ほどのseanceの流れで用いられています。意味はcome by here こちらにきて、だが「うわべの仲」という意味も)<br><br>

            Want to see nirvana, don’t want to die yeah<br>
            ニルバーナ(涅槃、死の世界)が見たいんだ、でも死にたくないね<br><br>

            Wanna feel that na na though<br>
            君のナーナーを感じたいんだよ (na naはインドの言葉で女性器のこと）<br><br>

            Could you ride come by After my shift<br>
            俺の仕事が終わったら君は立ち寄ってくれるかい<br><br>

            Know them boys wanna see me broke down and shit<br>
            あいつらが俺の失敗と落胆を願ってるってわかるだろ<br><br>

            Bummed out and shit, stressed out and shit<br>
            クソ気が重いよ、もう疲れちまった<br><br>

            That’s every day shit<br>
            これが毎日続くんだって、クソ<br><br>

            Shut the fuck up I don’t want your conversation<br>
            クソ黙りやがれ、お前らの会話は聞きたくもないんだ<br>
            (アーティストとして活躍するフランクの周りは常に騒がしく、批判の声も鳴り止みません。周りの人間も信用できる人ばかりではない中で、疲れ切り、一人になりたいと願います)<br><br>

            Rolling marijuana that’s a cheap vacation<br>
            マリファナを巻くんだ、チープな旅行だよ<br><br>

            My everyday shit, every night shit, my every day shit<br>
            これが俺の毎日なんだよ、毎晩これしかないんだ、クソ<br><br>

            Every night shit<br>
            毎晩これなんだ<br>
            (スタジオに毎晩こもりきる彼の毎日の生活には、葉っぱでする小旅行くらいしか残されていないということ)<br><br><br><br>
            </p>

            <p>
            [Bridge]<br>
            All my night, been ready from you all my life<br>
            ずっと君を待ってたんだ<br><br>

            Been waiting on you all my life<br>
            君をずっとずっと待ってたんだ<br><br>

            I’ll buzz you in just let me know when you outside<br>
            来たならいってくれよ、迎えに行くからさ<br><br>

            All my life, you’ve been missing all my life<br>
            俺の毎日だ、君はずっといなくなってただろ<br><br>

            Still got some good nights memorized<br>
            あの頃はよかったなって思うんだ<br>
            (彼の青年時代は今より良かったと)<br><br>

            And look back’s getting me right<br>
            それを思い返すと、正しい方向に進める気がするんだ<br><br>
            </p>
            <p>
            [Part2]<br><br>

            [Verse2]<br>
            Every night fucks every day up<br>
            毎晩それをやって、気持ち悪い朝が始まるんだ (ドラッグにも二日酔いはあるんですね)<br><br>

            Every day patches the night up<br>
            日々の癒しが、この夜を続けてくれる<br><br>

            On God you should match it, it’s that KO<br>
            葉っぱの量を合わせてみるかい、KOだろうね<br>
            (品質の高い葉っぱを持っているフランクは、共に吸う人よりもずっとハイでいられると自信を見せます、格闘技のように、長くハイでいられることが勝敗の基準なんですね。<br>
            ” match “というのは葉っぱをやる時、お互いの量を合わせるテーブルマナーのようなことらしいです。KOとかけていますね)<br><br>

            No white lights til I fuck my 28th up<br>
            28になるまでは白のライターはなしだよ<br>
            (ジムモリソンやジミヘンドリクスなどのアーティスト達はは、ポケットに白のライターを入れたまま27歳で亡くなっています)<br><br>

            In 1998 my family had that Acura, oh<br>
            1998年、うちの家族はアキュラって車を買ったんだよ<br>
            (彼のミックステープのジャケットにもなっています)<br><br>

            The Legend, kept at least six discs in the changer<br>
            Acura Legendだよ、6枚くらいCDはずっと置いてたんだ<br><br>

            Back when Boswell and Percy had it active<br>
            BoswellとPercyがいた頃を思い出すとさ<br>
            (彼の地元であるニューオリンズのレコード会社の設立者達です)<br><br>

            Couple bishops in the city building mansions<br>
            何人かの司教達はマンションを建ててたよ<br><br>

            All the Reverends<br>
            聖職者の奴らはみんなだ<br><br>

            Preaching self made millionaire status<br>
            まずは自分の億万長者ってステータスを説教しないといけないはずなのにね<br><br>

            When we could only eat at Shoneys on occasion<br>
            うちの家族がたまに外食っていったら、Shoneysぐらいなのに<br>
            (高くないレストランです)<br><br>

            After trina hit I had to transfer campus<br>
            カトリーナがめちゃくちゃにしてった後、俺はキャンパスを移らないといけなかった<br>
            (彼の地元ニューオリンズはハリケーン：カトリーナの被害を受け、ニューオリンズ大からルイジアナ大に移ることになります)<br><br>

            Your apartment out in Houston’s where I waited<br>
            ヒューストンのアパートってのは俺が求めてたもので<br>
            (彼はヒューストンで恋人を見つけます)<br><br>

            Stayin’ with you when I didn’t have a address<br>
            俺にちゃんとした住所ってのがないときにも、一緒にいてくれたよな<br><br>

            Fuckin on you when I didn’t own a mattress<br>
            マットレスもなかったのに、ヤったりしてたよな<br><br>

            Working on a way to make it outta Texas<br>
            テキサスを抜け出すために頑張ってたよ<br>
            (その後カリフォルニアに行き、Odd Futureのメンバーに出会い、Def Jamと契約を結ぶことになります)<br><br>

            Every night<br>
            毎晩さ<br><br><br><br>
            </p>
            <p>
            [Chorus]
            Drop the baby off at home before my night shift<br>
            夜の仕事の前にベイビーを送り届けるんだ<br><br>

            You know I can’t hear none of that spend the night shit, Kumbaya shit<br>
            今夜一緒にいたいだなんて無理なのはわかってるだろ、偽りの仲ってわけだよ<br><br>

            Want to see nirvana, we don’t want to die yeah<br>
            ニルバーナが見たいね、でも死にたくはないんだ<br><br>

            Wanna feel that lovin’ when you come by<br>
            君が来るって時は、愛を感じたいんだ<br><br>

            Fuck with me after my shift<br>
            仕事が終わったら始めるんだ<br><br>

            Know them boys wanna see me broke down<br>
            あいつら俺の失敗と落胆を願ってるんだ<br><br>

            Wanna see me bummed out Stressed out<br>
            がっかりしてイラついてるとこが見たいんだよ<br><br>

            Everyday shit<br>
            毎日だよクソ<br><br>

            Shut the fuck up I don’t want your conversation<br>
            クソ黙りやがれ、お前らの会話は聞きたくもないんだ<br><br>

            Rolling marijuana, that’s a cheap vacation<br>
            マリファナを巻くんだ、チープな旅行だよ<br><br>

            Everyday shit, every night shit, every day shit<br>
            こういう毎日だ、毎晩これなんだよ、クソ<br><br>

            Every night shit<br>
            毎晩なんだ<br><br><br><br>
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
            <form action="{{ route('Nights.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="26">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Good_Guy') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Solo_Reprise') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
