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
            <h2>Cayendo</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XPEQHJ7elK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- 随時変更 -->
                <h3>
                <!-- Album : nostalgia, ULTRA
                <br>
                Track : 10 -->
                Year : 2020
                <br>
                Produced by :  Daniel Aged & Frank Ocean
                </h3>  
                <p>

                “ Cayendo ”はスペイン語で「落ちていく」の意味。<br>
                パートナーとの複雑な関係性から、心が砕けていく様子を表現している。
            </p>    
                    
            </div>
    </div>
    <div class="split-item split-right">
        <div class="split-right__inner">
            <br>
            <h3>Lyric</h3>
            <hr>
            <p>
            [Chorus] <br>
            No hablará de mí, ni hablará de esto <br>
            彼は俺のことを口にしない。この話だってきっと話さないんだろう <br> <br>

            Lo que él quiere de ti, yo no se lo negaría <br>
            彼が君に求めているものを、俺には否定できないけど <br>
            （フランク・オーシャンのパートナーは、フランク以外の男性/女性とも関係を持っているんですね） <br> <br>

            Si esto no me ha partío’, ya no me partiré nunca <br>
            俺はこれまでの出来事を耐えられているから、これからも心が引き裂かれることはないはずさ <br>
            （以上のような出来事（浮気？）に耐えられるなら、これからも関係は続くはず） <br> <br>

            Si puedo soportar lo que siento, ¿por qué me ‘toy cayendo? <br>
            でも自分の感情に耐えられているなら、なんで俺は落ちてるんだ？ <br>
            （耐えられていると言いつつも、彼は心の中では受け入れられないんですね） <br> <br> <br> <br>
            </p>

            <p>
            [Verse] <br>
            You stood me up, you lay me down <br>
            君は俺を一人にした、そしてまた俺を寝かしつけるんだ <br>
            （フランクのパートナーは彼の元から離れたり、近づいたりを繰り返すと） <br> <br>

            You know too much, I can’t be proud <br>
            君は知りすぎた、だからもう強がることもできない <br> <br>

            I still really, really love you, yes, I do <br>
            俺はまだ、本当に君を愛してるんだ、君をさ <br> <br>

            When I still really, really love you, like I do <br>
            君のことをまだ愛してるんだ、本当に愛してる <br>
            （Sade “ Love Is Stronger Than Pride “を引用。ヴァースの2文目にもかかっています） <br> <br>

            If you won’t, then I will <br>
            君が同じ気持ちじゃないとしても、俺は変わらないよ <br> <br>

            If you can’t, then I will <br>
            もし君が愛せなくても、俺は君を愛するよ <br> <br>

            Is it love to keep it from you? <br>
            この気持ちを隠すことが愛するってことなのかな？ <br> <br> <br> <br>
            </p>

            <p>
            [Chorus] <br>
            No hablará de mí, ni hablará de esto <br>
            彼は俺のことを口にしない。この話だってきっと話さないんだろう <br> <br>

            Lo que él quiere de ti, yo no se lo negaría <br>
            彼が君に求めているものを、俺には否定できないけど <br> <br>

            Si esto no me ha partío’, ya no me partiré nunca <br>
            俺はこれまでの出来事を耐えられているから、これからも心が引き裂かれることはないはずさ <br> <br>

            Si puedo soportar lo que siento, ¿por qué me ‘toy cayendo? <br>
            でも自分の感情に耐えられているなら、なんで俺は落ちてるんだ？ <br> <br> <br> <br>
            </p>

            <p>
            [Outro] <br>
            ¿Acaso voy cayendo? <br>
            俺は落ちていってるのかな？ <br> <br>

            You stood me up, you lay me down <br>
            君は俺を一人にした、そしてまた俺を寝かしつけるんだ <br> <br>

            You know too much (Too much), I can’t be proud <br>
            君は知りすぎた、だからもう強がることもできない <br> <br>

            I still really, really love you, yes, I do <br>
            俺はまだ、本当に君を愛してるんだ、君をさ <br> <br> <br> <br>
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
            <form action="{{ route('Cayendo.store') }}" method="POST">
                    {{csrf_field()}}
                        <h3>Post Review</h3>
                        <!-- 随時変更valueを -->
                        <input type="hidden" name="song_id" value="44">
                        <textarea class="review" placeholder="レビュー内容" rows="5" name="review"></textarea><br>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </form>
            </div>
            <!-- 随時変更     -->
                <div class="nav-links">
                <a class="page-numbers" href="{{ url('/Dear_April') }}">BACK</a>
                <!-- <a class="page-numbers" href="{{ url('/Cayendo') }}">NEXT</a>          -->
            </div>
            </div>    
        </div>
    </div>
</div>
</body>
</html>   
