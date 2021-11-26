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
            <h2>6: Not Just Money</h2>
            <!-- 随時変更 -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Zt0NF6fpOs4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>
                Album : Channel Orange
                <br>
                Track : 6
                <br>
                Year : 2012
                <br>
                Produced by :Franko
                </h3>  
                <p>フランクの少年時代からの友人の母親” ロージー・ワトソン “さんが<br>息子にあてた電話をそのまま楽曲に落とし込んだ一曲。<br></p>
                <p>
                アメリカの高校で最終学年に催されるパーティ・プロムを前に、お金を借りようと母親に頼みこむ息子と、<br>お金の重要性を語るロージーさんのメッセージが語られています。

                </p>
        </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Skit: Rosie Watson]<br>
            Stop thinking of this as being money<br>
            何でもかんでも、お金に置き換えるのはやめなさい<br><br>

            It’s just money, I’ma make more<br>
            「ただの金だろ、もっと稼ぐぜ」だなんて<br><br>

            No, no no no no no<br>
            そんなのダメよ、ダメなの<br><br>

            Please decondition yourself<br>
            お願い、きちんと自分を見つめ直して<br><br>

            It’s not just money<br>
            それはただのお金じゃないの<br><br>

            It’s happiness<br>
            それは「幸せ」よ<br><br>

            It’s the difference between happy, being happy and sad<br>
            お金は「幸せ」も「悲しみ」も産むのよ<br><br>

            It’s the difference between having a home and living on the streets<br>
            家を持てるのか、ストリートで生きるのか<br><br>

            That’s what it is, it’s not just money<br>
            まさにそういうことよ、ただのお金なんかじゃない<br><br>

            It’s so much more than that<br>
            もっと重要な意味があるの<br><br>

            Right now it’s the difference between you being able to go to a prom, and disappointing a girl<br>
            今あなたには、プロムにいって、彼女をガッカリさせるかもなんて思ってるんだろうけど<br>
            (プロムはアメリカの高校のイベントですね。イケてるスーツにイケてる車で彼女を迎えに行きたい電話の主は、親にお金を要求していると)<br><br>

            As I told you from the beginning, I don’t have money<br>
            ずっと言ってるでしょ、私にはお金がないの<br><br>

            I have bills to pay, but that meant nothing to you<br>
            支払わなきゃいけないお金があるの、でもそれはあなたにとって何の意味もないんでしょ<br>
            (彼女にとってお金は、生きるための物なのであり、贅沢をしたり、見栄を張ったりするのに使うものではないと)<br><br>

            Absolutely nothing<br>
            本当に、何の意味もね<br><br>

            Let’s see, I have<br>
            ほらそうでしょ<br><br>

            Ooh yeah, I’ma make myself a hot link when I get home<br>
            そうでしょ、家に帰ったら自分のためにソーセージを焼くわ<br><br>

            It meant nothing to you<br>
            あなたにはどうでもいいんでしょうけど<br><br>

            Saving my seven dollars<br>
            私が7ドルを節約しようともね<br>
            (彼女は外出するのではなく、家族のために家でソーセージを焼き節約してるんだと息子に伝えています)<br><br>
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
            <form action="{{ route('Not_Just_Money.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="6">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Sweet_Life') }}">BACK</a>
                <a class="page-numbers" href="{{ url('/Super_Rick_Kids') }}">NEXT</a>         
            </div>
            </div>    
        </div>
    </div>
</div>

</body>
</html>   
