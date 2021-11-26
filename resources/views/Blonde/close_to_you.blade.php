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
            <h2>13: Close to you</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ncqkC9Ob2ZI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 13
                <br>
                Year : 2016
                <br>
                Produced by :Frank Ocean, Buddy Ross <br>
                 Francis Farewell Starlite
                </h3>  
                <p> 
                スティービー・ワンダーの楽曲をカバーした作品。スティービー・ワンダーも、” Burt Bacharach “という<br>
                アーティストの楽曲を用いて、カバーをしているので、「カバーのカバー」という形になりますが、<br>
                リリック・曲調は変更されております。12曲目” Facebook Story “では「Facebookによる嫉妬」<br>
                という現代的な「別れ」が描かれていましたが、” Close To You “は、別れを経た<br>
                彼の” 感情 “が描かれています。絶望してたワケじゃない、でも君は俺の手を握ることもできたんだ」<br>
                と、別れた後にどことなく「寂しさ」「孤独」が彼の心の中に、あったことが明かされます。
                </p>   
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Verse]<br>
            I’ll be honest, I wasn’t devastated<br>
            正直に言うよ、俺は絶望してたワケじゃない<br><br>

            But you could’ve held my hands through this, baby<br>
            でもその間に、君は俺の手を握ることだってできたよね、ベイビー<br>
            (別れた後に彼女はフランクの手を取ってはくれませんでした)<br><br>

            Let my mind run underneath warm jets<br>
            シャワーを浴びながら、考えを巡らせてる<br>
            (『Blonde』のアルバムジャケットの写真とも繋がってきます）<br><br>

            I run my hands through what’s left<br>
            残されたものに手を伸ばしてるのさ<br>
            (二人の思い出でしょう)<br><br>

            But we’re getting older, baby<br>
            でも俺たちも段々、年を取っていってる、ベイビー<br><br>

            Don’t have much longer baby<br>
            あまり長い時間は残されていないんだよ、ベイビー<br><br>

            Why am I preaching?<br>
            何で俺はこんな説教くさいこと言ってんだ？<br><br>

            To this choir, to this atheist<br>
            聖歌隊や、無神論者に説教してるみたいだよな<br><br>

            Just like mine, versions of these belong to you<br>
            俺と同じように、君も「君の思い出」を持ってる<br>
            (それぞれが同じ思い出を共有していても、その思い出に対しての思いや、感情は異なっていて、それぞれのバージョンが存在しているんだと)<br><br>

            After a while, they’re keeping me close to you<br>
            しばらく経っても、また記憶が君を思い出させるんだ<br><br>

            (Just like me, they long to be close to you)<br>
            (俺と同じようにね。思い出が君を近くに引き寄せてくれる)<br><br><br><br>
            
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
            <form action="{{ route('Close_to_You.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="30">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Facebook_Story') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/White_Ferrari') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
