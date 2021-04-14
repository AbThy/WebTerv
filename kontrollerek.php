<?php 
    session_start();
    include 'php/plusz_t.php';
?>
<!DOCTYPE html>

<html lang="hu">
    <head>
        <title>DJP: Kontrollerek</title>
        <meta name="author" content="Csapó Krisztina & Szigethy Ábrahám András"/>
        <meta charset="UTF-8"/>
        <!-- CSS -->
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/animaciok.css"/>
        <link rel="stylesheet" href="css/kontroller.css"/>
        <!--Böngésző ikon-->
        <link rel="icon" href="css/img/logo.png"/>
        <!-- Google Fonts API: betű importálás-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <h1>Disc Jockey Projekt</h1>
            <h2>Kontrollerek, eszközök</h2>
        </header>

        <nav>
            <a class="navElem" href="index.php">Főoldal</a>
            <a class="navElem aktivFul" href="kontrollerek.php">Kontrollerek</a>
            <a class="navElem" href="djk.php">Disc Jockey-k</a>
            <a class="navElem" href="filmek.php">Filmek</a>
            <a class="navElem" href="fesztival.php">Hazai fesztiválok</a>
            <?php
                if(isset($_SESSION["user"]) && $_SESSION["user"] !== null)
                {
                    echo '<a class="navElem aktivFul" href="php/kijelentkezes.php">Kijelentkezés</a>';
                    echo '<a class="navElem" href="statisztika.php">Honlap statisztika</a>';
                }
            ?>
        </nav>

        <main>
            <aside>
            <?php
                    if(isset($_SESSION["user"]) && $_SESSION["user"] !== null)
                    {
                        include "aside_kontroll.html";
                    }
                    else
                    {
                        include "be_FORM.html";
                    }
                ?>
            </aside>
            <div class="szoveg">
                <h1>Egy lemezlovas eszközei</h1>
                <p>A zenék "keveréséhez" számos eszköz nélkülözhetetlen, ilyenek a:</p>
                <ul>
                    <li>Keverőpult, mely lehet (természetesen digitális és Vinyl is): 
                        <ul> 
                            <li>Integrált: egybeépített "lemezlejátszó" és "mixer" részek</li>
                            <li>Professzionális: Egyedi, vagy "kit"-ben beszerezhető lejátszók és mixerek összekapcsolva</li>
                        </ul>
                        <p><strong>Ezekről később részletesebben!</strong></p>
                    </li>
                    <li>Fejhallgató</li>
                    <li>USB-s adathordozó</li>
                </ul>
                <p>Illetve vannak olyan eszközök, amelyek a DJ repertoárjának kiegészítéséhez, a kreatívabb (inkább alkotói, mint előadói) munkát segítik:</p>
                <ul>
                    <li>LaunchPad</li>
                    <li>LoopStation</li>
                    <li>Szintetizátor</li>
                </ul>
                <br/>
                <div>
                    <h2>Modern keverők</h2>
                    <video width="480" autoplay loop muted>
                        <source src="../css/vid/pioneer.mp4" type="video/mp4"/>
                    </video>
                    <p>
                        A modern piacot a klubok, fesztiválok és otthoni használat esetében is a <u>pioneer</u> eszközei vezetik. Magyarországon is ez a standard.
                        Valójában az a helyzet, hogy tanulhat az ember bármilyen <i>Serato</i>, <i>Rekordbox</i>, <i>Traktor</i> vagy <i>VirtualDJ</i>-vel (ezek a legáltalánosabb DJ szoftverek)
                        kompatibilis eszközön, ugyan azt az eszköztárat sajátítja el. Lehet ez Numark, Native Instruments vagy Hercules kontroller, de a klubokban vagy fesztiválon szinte biztosan
                     moduláris Pioneer-en fog keverni, ami teljesen más világ.

                    </p>
                </div>
                <br/><br/><br/><br/>
            </div>
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