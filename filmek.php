<?php 
    session_start();
    include 'php/plusz_t.php';
?>
<!DOCTYPE html>

<html lang="hu">
    <head>
        <title>DJP: Filmek</title>
        <meta name="author" content="Csapó Krisztina & Szigethy Ábrahám András"/>
        <meta charset="UTF-8"/>
        <!-- CSS -->
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/animaciok.css"/>
        <link rel="stylesheet" href="css/forms.css"/>
        <!--Böngésző ikon-->
        <link rel="icon" href="css/img/logo.png"/>
        <!-- Google Fonts API: betű importálás-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <h1>Disc Jockey Projekt</h1>
            <h2>Filmek a témában</h2>
        </header>

        <nav>
            <a class="navElem" href="index.php">Főoldal</a>
            <a class="navElem" href="kontrollerek.php">Kontrollerek</a>
            <a class="navElem" href="djk.php">Disc Jockey-k</a>
            <a class="navElem aktivFul" href="filmek.php">Filmek</a>
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
                        include "aside_film.html";
                    }
                    else
                    {
                        include "be_FORM.html";
                    }
                ?>
            </aside>
            <div class="szoveg">
                <h1>Szexizmus & DJ-k</h1>
                <p>Mint mindenhol máshol, a szórakoztatóiparban, fesztiválokon és klubokban is fontos téma lett a férfi-női egyenjogúság.
                    A problémát, ilyen keretek között most először, mutatja be a REZZ és Alison Wonderland megnyilvánulásaival is reklámozott
                    film, az <cite>Underplayed</cite> című alkotás.
                </p>
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FHNiPw1c2WE" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!--
                <div >
                    <img id="nagyobb" src="css/img/szoveg.jpg" alt="szoveg" width="150" height="150"/>
                </div>
                --->
                <br/>
                <br/>
                <div /*id="filmErtek"*/>
                    <?php
                        if(isset($_SESSION["user"]) && $_SESSION["user"] !== null)
                        {
                            include 'velemeny_FORM.html';
                        }
                        else
                        {
                            echo '<p style="padding: 10px 100px; border: dashed 1px white;">Vélemény írásához jelentkezz be!</p>';
                        }
                    ?>
                </div>
                <div> <!-- Vélemények betöltése -->
                        <h2>Eddigi vélemények:</h2> <br/>
                        <p>
                            <?php
                                $s = fopen("php/velemenyek.txt","r");
                                if($s !== FALSE)
                                {
                                    $i = 1;
                                    while (($sor = fgets($s)) !== FALSE)
                                    {
                                        echo $sor . '<br/>';
                                    }
                                }
                                else
                                {
                                    echo "A kommentek betöltése sikertelen!";
                                }
                            ?>
                        </p>
                </div>
            </div>
        </main>

        <footer>
            <a href="https://jigsaw.w3.org/css-validator" id="cssValidalt">
                <img style="border:0;width:88px;height:31px"
                    src="https://jigsaw.w3.org/css-validator/images/vcss"
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