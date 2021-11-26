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
            <h2>16: Godspeed</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/P18g4rKns6Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Blonde
                <br>
                Track : 16
                <br>
                Year : 2016
                <br>
                Produced by : Malay, Om’Mas Keith, <br>
                James Blake & Frank Ocean
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
            [Verse: Frank Ocean and Yung Lean]<br>
                I will always love you how I do<br>
                いつまでも君を愛してるよ、でもどうすればいい？<br><br>

                Let go of a prayer for you<br>
                君のために祈りを捧げて<br><br>

                Just a sweet word<br>
                甘い言葉を囁けばいいのかい<br><br>

                The table is prepared for you<br>
                このテーブルは君のためにあるのさ<br>
                (旧約聖書 詩篇23篇から)<br><br>

                (Ooh, ooh, ooh)<br><br>

                (Ball so hard, all my boys flex)<br>
                (豊かな生活を送って、仲間たちはみんなイケてる)<br><br>

                Wishing you godspeed, glory<br>
                君の幸福を祈ってる、栄光が差しますように<br><br>

                There will be mountains you won’t move<br>
                君に動かせない山だって現れるさ<br>
                (聖書: マタイによる福音書17章から。イエス・キリストは「深い信仰」さえあれば、山だとしても動かせると言っています。つまり、” 君 “に対して「山が動かせない時もある」と言うことは、いつも誠実でい続けなくてもいいんだよ。と語りかけているという意味に捉えられます)<br><br>

                (Ooh, ooh, ooh)<br><br>

                Still I’ll always be there for you how I do<br>
                俺はずっと、君のためにここにいるよ、でもどうすればいい？<br><br>

                I let go of my claim on you<br>
                君への思いを諦めれば<br><br>

                It’s a free world<br>
                自由な世界が広がっているのかもしれない<br><br>

                You look down on where you came from sometimes<br>
                君は時々、自分自身の過去を見下すけれど<br><br>

                But you’ll have this place to call home always<br>
                でも君は「家」と呼べる場所をいつまでも持ってるんだよ<br><br><br><br>
                </p>   
                <p>
                [Bridge: Frank Ocean & Kim Burrell]<br>
                (Godspeed, glory)<br>
                (君の幸福、栄光を）<br><br>

                This love will keep us through blinding of the eyes (Ohh)<br>
                この愛は俺たちの心に残り続ける、目が見えなくなっても<br>
                (たとえ別れても、彼らの心の中に愛は永遠に残り続けます。後半のラインから、彼の愛が単に「視覚的」なものではなく「心から」の愛であることがわかります)<br><br>

                Silence in the ears, darkness of the mind<br>
                耳には沈黙、心には暗闇が続く<br><br>

                Until it’s time<br>
                「その時」までは<br><br>

                This love will keep us through blinding of the eyes (Ohh)<br>
                この愛は俺たちの心に残り続ける、目が見えなくなっても<br><br>

                Silence in the ears, darkness of the mind (Ohh)<br>
                耳には沈黙、心には暗闇が続く<br><br>

                Ohh, it’s ‘til it’s time we die<br>
                俺たち二人の命が尽きる、その時まで<br><br>

                This love will keep us through blinding of the eyes<br>
                この愛は俺たちの心に残り続ける、目が見えなくなっても<br><br>

                Silence in the ears, darkness of the mind<br>
                耳には沈黙、心には暗闇が続く<br><br><br><br>
            </p>
            <p>
            [Outro: Kim Burrell]<br>
            Oh-oh, ohhh<br>
            I’ll always love you<br>
            いつまでも君を愛してる<br><br>

            Until the time we die<br>
            二人の命が尽きる、その時まで<br><br>

            Oh-oh, ohhh<br><br><br><br>
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
            <form action="{{ route('Godspeed.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="33">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Seigfried') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Futura_Free') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
