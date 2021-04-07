<!DOCTYPE html>

<html lang="hu">
    <head>
        <title>DJP: Disc Jockey-k</title>
        <meta name="author" content="Csapó Krisztina & Szigethy Ábrahám András"/>
        <meta charset="UTF-8"/>
        <!-- CSS -->
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/djk.css"/>
        <link rel="stylesheet" href="css/animaciok.css"/>
        <!--Böngésző ikon-->
        <link rel="icon" href="css/img/logo.png"/>
        <!-- Google Fonts API: betű importálás-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <h1>Disc Jockey Projekt</h1>
            <h2>Híres DJ-k</h2>
        </header>

        <nav>
            <a class="navElem" href="index.php">Főoldal</a>
            <a class="navElem" href="kontrollerek.php">Kontrollerek</a>
            <a class="navElem aktivFul" href="djk.php">Disc Jockey-k</a>
            <a class="navElem" href="filmek.php">Filmek</a>
            <a class="navElem" href="fesztival.php">Hazai fesztiválok</a>
        </nav>
		
        <main>
            <aside>
                <p><q>I never set out to be part of a genre, because I listen to all types of music.</q> <br/> - Skrillex </p><br/>
                <p><q>When you catch other people with a sound like yours, that's when you know you did something.</q> <br/> - Zedd </p><br/>
                <p><q>My studio is a laptop. Everybody I work with is the same. We make computer music, we're the laptop generation.</q> <br/> - David Guetta </p>

            </aside>
            <div class="szoveg">
                <h1>Mainstream</h1>
                <h2>DJMAG Top100</h2>
                <p>Ahogy a legtöbb előadóművészetben, a mainstream DJ-k is világszerte celebnek számítanak. Mint más, hasonló figyelemnek örvendő szférákban,
                    itt is versenyeznek a résztvevők a közönség elismeréséért. Világunk talán legelismertebb rangsora a DJMAG évente megrendezett, közönségszavazás 
                    alapú versenye, a DJMAG Top100. A 2020-as évben a top5 dj listája így alakult (a táblázatban a + jelölés a ranglistán előbbre jutást, a - jelölés 
                    a visszaesést jelzi):
                </p>

                <table id="djTabla">
                    <caption>DjMag Top5 (2020)</caption>
                    <tr>
                        <th id="helyezes">Helyezés</th>
                        <th id="nev">Név</th>
                        <th id="ugras">Ugrás a ranglistán</th>
                        <th id="stilus">Stílus</th>
                        <th id="szarmazas">Származás</th>
                    </tr>
                    <tr>
                        <td headers="helyezes">1.</td>
                        <td headers="nev">David Guetta</td>
                        <td headers="ugras">+2</td>
                        <td headers="stilus">House</td>
                        <td headers="szarmazas">Párizs, Franciaország</td>
                    </tr>
                    <tr>
                        <td headers="helyezes">2.</td>
                        <td headers="nev">Dimitri Vegas & Like Mike</td>
                        <td headers="ugras">-1</td>
                        <td headers="stilus">Progressive House</td>
                        <td headers="szarmazas">Belgium</td>
                    </tr>
                    <tr>
                        <td headers="helyezes">3.</td>
                        <td headers="nev">Martin Garrix</td>
                        <td headers="ugras">-1</td>
                        <td headers="stilus">Progressive House</td>
                        <td headers="szarmazas">Amstelveen, Hollandia</td>
                    </tr>
                    <tr>
                        <td headers="helyezes">4.</td>
                        <td headers="nev">Armin Van Buuren</td>
                        <td headers="ugras">0</td>
                        <td headers="stilus">Trance</td>
                        <td headers="szarmazas">Leiden, Hollandia</td>
                    </tr>
                    <tr>
                        <td headers="helyezes">5.</td>
                        <td headers="nev">Alok</td>
                        <td headers="ugras">+6</td>
                        <td headers="stilus">House</td>
                        <td headers="szarmazas">Goiânia, Goiás, Brazília</td>
                    </tr>
                </table>

                <h1>Magyarország</h1>
                <h2>Mainstrem vs Alternatív</h2>
                <p>
                    Magyarországon -főleg a kelet-európai régióhoz képest- meglehetősen erősen képviseltetik magukat a manapság népszerűbb műfajok mellett az alternatív irányzatok is.
                    Remek példa, hogy Európa legnagyobb <i>PsyTrance</i> fesztiválja, az <b>Ozora</b> is Magyarországon kerül megrendezésre. Világszínvonalat képviselnek a budapesti
                    <b>Next Level Hungary</b> rendezvényei is, amelyek a <i>Dubstep</i>, <i>Trap</i> és <i>BassHouse</i> stílusokkal töltik meg teltházasra -gyakran a környező
                    országokból is idecsalogatva az embereket- a bulikat. Említésre méltó a <b>BladeRunnaz</b> brigádja is, ami több mint <u>20 éve</u> biztosít Drum and Bass-t
                    az alternatív közegnek.
                </p>
                <br/>
                <div class="bal">
                    <h3>Híresebb magyar DJ-k:</h3>
                    <h4>Mainstream</h4>
                    <ul>
                        <li>Yamina</li>
                        <li>Metzker Viktória</li>
                        <li>Bricklake</li>
                        <li>Newik</li>
                        <li>Pixa</li>
                        <li>Andro</li>
                        <li>PureBeat --a Lacika</li>
                    </ul>
                    <h4>Alternatív</h4>
                    <ul>
                        <li>Dublic fivérek</li>
                        <li>Nosphere</li>
                        <li>Puppetz</li>
                        <li>Chris.SU</li>
                    </ul>
                </div>
            </div>
        </main>

        <footer>
            <a href="http://jigsaw.w3.org/css-validator" id="cssValidalt">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                     alt="Érvényes CSS!"/>
            </a>
            <section id="soundCloud">
                <iframe width="300" height="90" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/990189583&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/oood" title="OOOD" target="_blank" style="color: #cccccc; text-decoration: none;">OOOD</a> · <a href="https://soundcloud.com/oood/rama-oood-ukiyo" title="Rama - Ukiyo" target="_blank" style="color: #cccccc; text-decoration: none;">Rama - Ukiyo</a></div>
            </section>
            <p>Készítette: Csapó Krisztina & Szigethy Ábrahám András</p>
            <p>SZTE TTIK</p>
            <p>Webtervezés gyakorlat</p>
        </footer>
    </body>
</html>