<?php 
    session_start();
    include 'php/plusz_t.php';
?>
<!DOCTYPE html>

<html lang="hu">
    <head>
        <title>DJP: Történelem</title>
        <meta name="author" content="Csapó Krisztina & Szigethy Ábrahám András"/>
        <meta charset="UTF-8"/>
        <!-- CSS -->
        <link rel="stylesheet" href="css/main.css"/>
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
            <h2>Hazai fesztiválok</h2>
        </header>

        <nav>
            <a class="navElem" href="index.php">Főoldal</a>
            <a class="navElem" href="kontrollerek.php">Kontrollerek</a>
            <a class="navElem" href="djk.php">Disc Jockey-k</a>
            <a class="navElem" href="filmek.php">Filmek</a>
            <a class="navElem aktivFul" href="fesztival.php">Hazai fesztiválok</a>
            <?php
                if(isset($_SESSION["user"]) && $_SESSION["user"] !== null)
                {
                    echo '<a class="navElem aktivFul" href="php/kijelentkezes.php">Kijelentkezés</a>';
                }
            ?>
        </nav>

        <main>
            <aside>
            <?php
                    if(isset($_SESSION["user"]) && $_SESSION["user"] !== null)
                    {
                        include "aside_feszt.html";
                    }
                    else
                    {
                        include "be_FORM.html";
                    }
                ?>
            </aside>
            <div class="szoveg">
                <h1>COVID-19 és a magyar fesztiválok</h1>
                <p>Az alábbi részleteket az <i>Index</i> által készített, Fülöp Zoltánnal készült interjúból válogattuk. A cikk elolvasható <a href="https://index.hu/gazdasag/2021/01/26/kerdeses_milyen_fesztivalszezon_lesz/" target="_blank">itt!</a></p>
                <article id="multiCol">
                    <p>
                        <u>Mi a helyzet a fesztiválokkal?</u>
                        <br/><br/>
                        A bizonytalanság és a folyamatos újratervezési kényszer okozta a legnagyobb nehézséget. Nem tudtuk, mikortól és hogyan lehet megrendezni a tervezett eseményeinket. Viszonylag hamar egyértelművé vált, hogy a nagy nemzetközi fesztiválokat, a Szigetet, a VOLT-ot és a Balaton Soundot nem tudjuk megtartani, így ezekkel kapcsolatban újabb feladatok vártak ránk.
                        <br/><br/>
                        <u>Mennyi jegyről van szó?</u>
                        <br/><br/>
                        Ha összeadjuk a bérleteket, napijegyeket és egyéb értékesített szolgáltatásokat,márciusig több százezer jegyvásárlással összefüggő tranzakció ment végbe.
                        A visszatérítés mellett felajánlottuk, hogy aki szeretné, automatikusan átviheti a jegyét 2021-re, anélkül, hogy bármilyen tennivalója lenne vele. A közönség bizalmát jelzi, hogy a jegyvásárlók több mint ötven százaléka a mai napig nem váltotta vissza a belépőjét.
                        <br/><br/>
                        <u>Meddig tartható fenn a mostani állapot?</u>
                        <br/><br/>
                        Év eleje van, de rengeteg kérdéssel megyünk bele a 2021-es évbe. Mikor áll helyre az élet Magyarországon és az egész világon? Visszaszorul-e a vírus nyárra? Lesz-e elegendő vakcina? Mekkora lesz a hajlandóság az oltásra az emberek körében? Lesznek-e idén fesztiválok? Ha igen, akkor milyen volumenűek lehetnek?
                        <br/><br/>
                        <u>És mi a válasz?</u>
                        <br/><br/>
                        Vélhetően lesz olyan időpont, amikor az átoltottság vagy a vírus visszaszorulása miatt jelentősen lehet oldani a korlátozásokat, és tömegrendezvényeket tudunk tartani. De hogy ez mikor jön el, az nehéz kérdés. Mégis
                        optimista vagyok, és bízom benne, hogy a nyár második felére olyan helyzet alakulhat ki, amely lehetővé teszi tízezres létszámú események megtartását.
                        Ez persze sok tényezőtől függ.
                    </p>
                </article>

                <div style="padding-top: 20px;">
                    <h2>A Sziget fesztivál 2013-as himnusza:</h2>
                    <p>Punnany Massif - Szabadon (Na-Na-Na)</p>
                    <audio controls>
                        <source src="css/sound/Punnany_Szabadon.mp3" type="audio/mpeg"/>
                    </audio>
                </div>

                <div>
                    <h2>Neked mi a kedvenc fesztiválemléked Magyarországról?</h2>
                    <p>Töltsd fel <i>te</i> is kedvenc képed!</p>
                    <form method="POST" action="fesztivalkep.php" enctype="multipart/form-data">
                        <input type="file" name="fesztKep" id="fesztivalKep">
                        <input type="submit" value="Feltöltés!" name="feltolt">
                    </form>
                </div>
            </div>
            <?php
                echo '<div style="padding: 10px 50px; border-style: dotted; color: red;">';
                include 'php/honlapStatisztika.php';    
                echo '</div>';                    
            ?>
        </main>

        <footer>
            <a href="http://jigsaw.w3.org/css-validator" id="cssValidalt">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                     alt="Érvényes CSS!" />
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