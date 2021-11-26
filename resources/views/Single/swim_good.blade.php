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
            <h2>Swim Good</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ic1nhvWBvIo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : nostalgia, ULTRA
                <br>
                Track : 10
                <br>
                Year : 2011
                <br>
                Produced by : Midi Mafia
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
            That’s a pretty big trunk on my Lincoln town car, ain’t it?<br>
            俺のリンカーン・タウンカーには大きなトランクがついてる、そうだろ？<br>
            (フォード社の発売していた車。霊柩車に用いられることから棺を入れるトランクが浮かびます）<br><br>

            Big enough to take these broken hearts and put ‘em in it<br>
            壊れた心を拾い集めるには十分大きいだろ、そこに入れておくんだ<br><br>

            Now I’m drivin’ ‘round on the boulevard, trunk bleedin’<br>
            俺は今この大通りを車で走ってる、トランクから血が流れ出て<br>
            (壊れた心を詰めこんだトランクから、血が流れ出る)<br><br>

            And every time the cops pull me over, they don’t ever see them<br>
            警察は俺の車を停めても、壊れた心には見向きもしない<br><br>

            They never see them<br>
            あいつら見向きもしないんだ<br><br><br><br>
            </p>
            <p>
            [Pre-Chorus]<br>
            And I’ve got this black suit on<br>
            俺はこの真っ黒のスーツを身に纏って<br><br>

            Roamin’ around like I’m ready for a funeral<br>
            ここらを歩き回る、まるでもう葬式の準備をしているみたいに<br><br>

            Five more miles ‘til the road runs out<br>
            この道が終わるのも、あと5マイルを残すのみさ<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            I’m about to drive in the ocean<br>
            俺はもうすぐ海の中をドライブするんだ<br><br>

            I’ma try to swim from somethin’ bigger than me<br>
            俺より大きな存在から泳いで逃げようとする<br><br>

            Kick off my shoes and swim good, and swim good<br>
            靴を脱ぎ捨てて、泳いで行くんだ、泳ぐんだよ<br><br>

            Take off this suit and swim good, and swim good, good<br>
            このスーツを脱ぎ捨てて、泳ぐんだ、泳いで行くんだ<br><br><br><br>
            </p>

            <p>
            [Verse 2]<br>
            Got some pretty good beats on this 808 CD, yeah<br>
            この808のCDには最高のビートが入ってる、エイ<br>
            (カニエの『808s & Heartbreak』ですね、冒頭の壊れた心も繋がります)<br><br><br><br>

            Memory seats I’m sittin’ on stay heated<br>
            この” 思い出の席 “は今も生暖かいまま<br>
            (” heated “には喧嘩や怒りの意味もありますので、この車では色々な出来事があったことが思い起こされます)<br><br><br><br>

            I woulda put tints on my windows but what’s the difference?<br>
            この窓ガラスにスモークをつけるよ、でも何の違いがあるんだい？<br>
            (この車は彼の人生そのものを物語っています。自分の身を周りから隠しても何も違いは生まれない)<br><br><br><br>

            If I feel like a Ghost, no Swayze<br>
            まるで幽霊になった気持ちなんだ、スウェイジじゃなくてさ<br>
            (映画『ゴースト』で幽霊役のキャラクター・スウェイジのこと)<br><br>

            Ever since I lost my baby<br>
            ベイビーを失ってからずっとさ<br><br><br><br>


            </p>

            <p>
            [Pre-Chorus]<br>
            And I’ve got this black suit on<br>
            俺はこの真っ黒のスーツを身に纏って<br><br>

            Roamin’ around like I’m ready for a funeral<br>
            ここらを歩き回る、まるでもう葬式の準備をしているみたいに<br><br>

            One more miles ‘til the road runs out<br>
            この道が終わるのも、あと1マイルを残すのみさ<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            I’m about to drive in the ocean<br>
            俺はもうすぐ海の中をドライブするんだ<br><br>

            I’ma try to swim from somethin’ bigger than me<br>
            俺より大きな存在から泳いで逃げようとする<br><br>

            Kick off my shoes and swim good, and swim good<br>
            靴を脱ぎ捨てて、泳いで行くんだ、泳ぐんだよ<br><br>

            Take off this suit and swim good, and swim good, good<br>
            このスーツを脱ぎ捨てて、泳ぐんだ、泳いで行くんだ<br><br><br><br>
            </p>

            <p>
            [Bridge]<br>
            I’m goin’ off (Oh, my pretty love)<br>
            俺は海に消えて行く (あぁ、俺の愛しい人よ)<br><br>

            Don’t try stopping me<br>
            俺を止めないでくれ<br><br>


            I’m goin’ off (Throw me a line)<br>
            俺は海に飛び込むんだ (助けてくれ)<br><br>

            Don’t try saving (Broke my heart)<br>
            助けようとしないでくれ (この心は壊れてるんだ)<br><br>

            No flares (Broke my heart)<br>
            発煙筒も (心は壊れたんだ)<br><br>

            No vest (Drove my love)<br>
            救命のベストもない (愛に溺れるんだ)<br><br>

            And no fear<br>
            でも怖くはないね<br><br>

            Waves are washin’ me out<br>
            この波が俺を清めてくれるから<br><br><br><br>
            </p>

            <p>
            [Chorus]<br>
            I’m about to drive in the ocean<br>
            俺はもうすぐ海の中をドライブするんだ<br><br>

            I’ma try to swim from somethin’ bigger than me<br>
            俺より大きな存在から泳いで逃げようとする<br><br>

            Kick off my shoes and swim good, and swim good<br>
            靴を脱ぎ捨てて、泳いで行くんだ、泳ぐんだよ<br><br>

            Take off this suit and swim good, and swim good, good<br>
            このスーツを脱ぎ捨てて、泳ぐんだ、泳いで行くんだ<br><br><br><br>
            </p>

            <p>
            [Outro]<br>
            Don’t die<br>
            死なないでくれ<br><br><br><br>
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
            <form action="{{ route('Swim_Good.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="35">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Futura_Free') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Chanel') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
