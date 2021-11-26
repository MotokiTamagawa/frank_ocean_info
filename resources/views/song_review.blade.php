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
    <div class="content">
      <div class ="page_title">
        <h1>LYRIC and REVIEW</h1>
      </div> 
      <hr>
      <h4>Albums</h4>
        <div class = "channelorange">
            <div class = "album_introduction">
            <a href ="{{ url('/Start') }}"> <img src="/images/channelorange2.jpeg" name ="album-image"></a>
            <h2>Channel Orange</h2>
            <p>Release Date : July 10, 2012</p>
        </div>
        <div class = "songs">
            <br>
                <a href ="{{ url('/Start') }}">1: Start (No Lyrics)</a>
            <br>
            <a href="{{ url('/Thinkin_Bout_You') }}">2: Thinkin Bout You</a>
            <br>
            <a href="{{ url('/Fertilizer') }}">3: Fertilizer</a>
            <br>
            <a href="{{ url('/Sierra_Leone') }}">4: Sierra Leone</a>
            <br>
            <a href="{{ url('/Sweet_Life') }}">5: Sweet Life</a>
            <br>
            <a href="{{ url('/Not_Just_Money') }}">6: Not Just Money</a>
            <br>
            <a href="{{ url('/Super_Rick_Kids') }}">7: Super Rick Kids (Feat. Earl Sweatshirt)</a>
            <br>
            <a href="{{ url('/Pilot_Jones') }}">8: Pilot Jones</a>
            <br>
            <a href="{{ url('/Crack_Rock') }}">9: Crack Rock</a>
            <br>
            <a href="{{ url('/Pyramids') }}">10: Pyramids</a>
            <br>
            <a href="{{ url('/Lost') }}">11: Lost</a>
            <br>
            <a href="{{ url('/White') }}">12: White (Feat. John Mayer) (No Lyrics)</a>
            <br>
            <a href="{{ url('/Monks') }}">13: Monks</a>
            <br>
            <a href="{{ url('/Bad_Religion') }}">14: Bad Religion</a>
            <br>
            <a href="{{ url('/Pink_Matter') }}">15: Pink Matter (Feat. Andre 3000)</a>
            <br>
            <a href="{{ url('/Forrest_Gump') }}">16: Forrest Gump</a>
            <br>
            <a href="{{ url('/End') }}">17: End</a>
        </div>
<hr>
        <div class = "blonde">
                <div class = "album_introduction">
                <a href ="{{ url('/Nikes') }}"> <img src="/images/blonde.jpeg" name ="album-image"></a>
                    <h2>Blonde</h2>
                    <p>Release Date : August 20, 2016</p>
                    <p>"アンビエントR&B"という新たな潮流を生み出したフランク・オーシャンの新作「Blonde」は、リスナーの細胞にサウンドが染み込んでいく、野心的かつミステリアスな一枚。華麗な言葉遊びやメロディがふんだんに盛り込まれている一方で、彼は本作において印象主義的なスタイルを追求。ムードを変えながら展開する"Nights"や、滑らかに流れていくような"White Ferrari"など、抽象的でありながらも驚くほどの情緒や温もりを感じさせるナンバーが続く。前触れなしに現れた真のマスターピースと呼べる一枚。</p>
                 </div>
                 <div class = "songs">
                    <br>
                    <a href ="{{ url('/Nikes') }}">1: Nikes</a>
                    <br>
                    <a href ="{{ url('/Ivy') }}">2: Ivy</a>
                    <br>
                    <a href ="{{ url('/Pink_White') }}">3: Pink + White</a>
                    <br>
                    <a href ="{{ url('/Be_Yourself') }}">4: Be Yourself</a>
                    <br>
                    <a href ="{{ url('/Solo') }}">5: Solo</a>
                    <br>
                    <a href ="{{ url('/Skyline_To') }}">6: Skyline To</a>
                    <br>
                    <a href ="{{ url('/Self_Control') }}">7: Self Control</a>
                    <br>
                    <a href ="{{ url('/Good_Guy') }}">8: Good Guy</a>
                    <br>
                    <a href ="{{ url('/Nights') }}">9: Nights</a>
                    <br>
                    <a href ="{{ url('/Solo_Reprise') }}">10: Solo (Reprise)</a>
                    <br>
                    <a href ="{{ url('/Pretty_Sweet') }}">11: Pretty Sweet</a>
                    <br>
                    <a href ="{{ url('/Facebook_Story') }}">12: Facebook Story</a>
                    <br>
                    <a href ="{{ url('/Close_to_You') }}">13: Close to You</a>
                    <br>
                    <a href ="{{ url('/White_Ferrari') }}">14: White Ferrari</a>
                    <br>
                    <a href ="{{ url('/Seigfried') }}">15: Seigfried</a>
                    <br>
                    <a href ="{{ url('/Godspeed') }}">16: Godspeed</a>
                    <br>
                    <a href ="{{ url('/Futura_Free') }}">17: Futura Free</a>

                </div>
        </div>
        <hr>
        <h4>SINGLE/EP</h4>
        <div class = "swim_good">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Swim_Good') }}"> <img src = "/images/swim_good.jpeg"> </a>             
                </div>
                <h2>Swim Good</h2>
                <p>Release Date : 2011</p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Swim_Good') }}">1: Swim Good</a>
                    <br>
                </div>
            </div>
        </div>
<hr>
        <div class = "chanel">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Chanel') }}"> <img src = "/images/chanel.jpeg"> </a>             
                </div>
                <h2>Chanel</h2>
                <p>Release Date : 2017</p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Chanel') }}">1: Chanel</a>
                    <br>
                </div>
            </div>
        </div>
<hr>
        <div class = "biking">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Biking') }}"> <img src = "/images/biking.jpeg"> </a>             
                </div>
                <h2>Biking (Feat. JAY Z & Tyler, the Creator)</h2>
                <p>Release Date : 2017</p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Biking') }}">1: Biking (Feat. JAY Z & Tyler, the Creator)</a>
                    <br>
                </div>
            </div>
        </div>
<hr>
        <div class = "lens">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Lens') }}"> <img src = "/images/lens.jpeg"> </a>    
                   <a href="{{ url('/Lens') }}"> <img src = "/images/lens_v2.jpeg"> </a>           
                </div>
                <h2>Lens V2(feat. Travis Scott)</h2>
                <p>Release Date : 2017</p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Lens') }}">1: Lens V2(feat. Travis Scott)</a>
                    <br>
                </div>
            </div>
        </div>
<hr>
        <div class = "Provider">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Provider') }}"> <img src = "/images/provider.jpeg"> </a>             
                </div>
                <h2>Provider</h2>
                <p>Release Date : 2017</p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Provider') }}">1: Provider</a>
                    <br>
                </div>
            </div>
        </div>
<hr>
        <div class = "Moon_River">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Moon_River') }}"> <img src = "/images/moon_river.jpeg"> </a>             
                </div>
                <h2>Moon River</h2>
                <p>Release Date :2018 </p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Moon_River') }}">1: Moon River</a>
                    <br>
                </div>
            </div>
        </div>
<hr>
        <div class = "dhl">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/DHL') }}"> <img src = "/images/dhl.jpeg"> </a>             
                </div>
                <h2>DHL</h2>
                <p>Release Date : 2019</p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/DHL') }}">1:DHL </a>
                    <br>
                </div>
            </div>
        </div>
<hr>
        <div class = "In My Room">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/In_My_Room') }}"> <img src = "/images/in_my_room.jpeg"> </a>             
                </div>
                <h2>In My Room</h2>
                <p>Release Date : 2019</p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/In_My_Room') }}">1:In My Room </a>
                    <br>
                </div>
            </div>
        </div>
<hr>
<div class = "Dear_April">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Dear_April') }}"> <img src = "/images/dear_april.jpeg"> </a>             
                </div>
                <h2>Dear April</h2>
                <p>Release Date :2020 4/3 </p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Dear_April') }}">1: Dear April</a>
                    <br>
                </div>
            </div>
        </div>
<hr>

<div class = "Cayendo">
            <div class = "album_introduction">
                <div class="img_wrap">
                   <a href="{{ url('/Cayendo') }}"> <img src = "/images/cayendo.jpeg"> </a>             
                </div>
                <h2>Cayendo</h2>
                <p>Release Date :2020 </p>
                <div class = "songs">
                    <br>
                    <a href ="{{ url('/Cayendo') }}">1: Cayendo</a>
                    <br>
                </div>
            </div>
        </div>
<hr>




<footer class="site-footer">
                <p class="copyright">@2021 Motoki Tamagawa</p>
            </footer>    
</body>
</html>