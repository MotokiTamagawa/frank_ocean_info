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
            <h2>Dear April</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/pvU4b4N1-QU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- 随時変更 -->
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2020
                <br>
                <!-- Produced by :  Frank Ocean & Michael Uzowuru -->
                </h3>  
                <p> 曲自体は昨年（2019年）から既に発表されていたものらしい。<br>
                けれども、恋人との関係が変わってしまったことを歌っている歌詞は、いま聞くと違った意味<br>
                にも聞こえてくる。ウィルスの影響で生活が損なわれて失われてしまった状況にとても合うのだ。<br>
                "what we had won't be the same now"（もう今までと同じではいられない）という部分とか特に。


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
            Dear April, the only face in the crowd that I know<br>

            エイプリル、人ごみの中でも僕は君を見分けられる<br><br>

        
            Dear April, are you watchin' him?<br>
            Are you watchin' him dance?<br>
            エイプリル、君は彼を見ているの？<br>
            踊っている彼を見ているの？<br><br>


            Dear April, we were safe for a while<br>
            We were safe as the years flew by<br>
            エイプリル、僕らは安全でいられた<br>
            過ぎ行く時の中、平穏でいられた<br><br>


            If you could take two strangers<br>
            見知らぬ二人を連れ出せるなら、<br><br>


            Lead them left and right<br>
            At a certain place and time<br>
            ある時、ある場所で、<br>
            あちこちに連れ出して、<br><br>


            Like you took these strangers<br>
            見知らぬ彼らを連れ出して、<br><br>

            

            And our two strange lives<br>
            奇妙な僕ら二人の人生<br><br>


            And made us new<br>
            新しい僕らが生まれ、<br><br>


            And took us through<br>
            時は過ぎ、<br><br>


            And woke us up<br>
            そして目を覚ます<br><br>


            I believe that no matter what it makes us do<br>
            どうなろうと知ったこっちゃない<br><br>


            Take us through it<br>
            やがて過ぎ去って<br><br>

            

            And wake us up again<br>
            また僕らは目を覚ます<br><br>


            And what we had won't be the same now (Now, now)<br>
            僕らはもう今までと同じではいられない<br><br>


            But you will make something new<br>
            けれども君はまた新しい何かを生み、<br><br>


            And it'll take you through this<br>
            そしてこれもまた過ぎ去る<br><br>

            

            You can take two strangers<br>
            見知らぬ二人を連れして、<br><br>

            

            Lead them left and right<br>
            At a certain place and time<br>
            ある時、ある場所で、<br>
            あちこちに連れ出して、<br><br>

            

            Like you took these strangers<br>
            見知らぬ彼らを連れ出して、<br><br>

            

            And our two strange lives<br>
            奇妙な僕ら二人の人生<br><br>


            And made us new<br>
            新しい僕らが生まれ、<br><br>


            And took us through<br>
            時は過ぎ、<br><br>


            And woke us up<br>
            そして目を覚ます<br><br>

            

            I believe no matter what<br>
            どうなったっていい<br><br>

            

            Take us through it<br>
            やがて過ぎ去っていく<br><br>

            

            And wake us up again<br>
            そしてまた目を覚ます<br><br>

            

            And what we had can't be the same now, now<br>
            僕らはもう今までと同じではいられない<br><br>


            But you will make something<br>
            それでも何かを生んで、<br><br>


            That'll take you through<br>
            君はやっていける<br><br>


            It'll wake you up again<br>
            また君は目を覚ますだろう<br><br>


            Just like you made me new (You made me new)<br>
            新しい僕を君がくれたように<br><br>


            Just like you took me through (Took me through)<br>
            君が僕を連れ出したように<br><br>

            

            Just like you woke me up (Woke me up, yeah)<br>
            君が僕の目を覚まさせたように<br><br>

            
        
            You made me new<br>
            You took me through<br>
            You woke me up (Woke me up)<br>
            新しい僕が生まれ、<br>
            時は過ぎ、<br>
            そして僕は目を覚ます<br><br><br><br>
            </p>
            <p>
            [Outro]<br>
            Dear April, are you watchin' him dance?<br>
            Dear April, are you watchin' him dance?<br>
            エイプリル、踊っている彼を見ているの？<br>
            エイプリル、踊っている彼を見ているの？<br><br><br><br>
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
            <form action="{{ route('Dear_April.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="43">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/In_My_Room') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Cayendo') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
