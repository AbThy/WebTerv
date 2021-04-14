<?php
    session_start();
    if(!isset($_SESSION["user"]) || $_SESSION["user"] === null)
    {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>

<html lang="hu">
    <head>
        <title>DJP: Főoldal</title>
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
        <!--PHP-->
    </head>

    <body>
        <!--<div id="overlay">Köszöntünk az oldalon!</div>-->
        <header>
            <h1>Disc Jockey Projekt</h1>
            <h2>Főoldal</h2>
        </header>

        <nav>
            <a class="navElem aktivFul" href="index.php">Főoldal</a>
            <a class="navElem" href="kontrollerek.php">Kontrollerek</a>
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
            <aside id="hf">
                <?php
                    if(isset($_SESSION["user"]) && $_SESSION["user"] !== null)
                    {
                        echo '<div style="margin: 20px">';
                        echo 'Szia ' . $_SESSION["user"]["nev"] . '!';
                        echo '</div>';
                    }
                    else
                    {
                        include "be_FORM.html";
                    }
                ?>
            </aside>
            <div class="szoveg">
                <p style="margin: 42px; text-align: center;">A honlapstatisztika csak regisztrált tagoknak elérhető!</p>
                <div style="padding: 20px 50px; margin-top: 100px; margin-bottom: 420px; text-align: center; border-style: dotted; color: red;">
                    <?php
                        include 'php/honlapStatisztika.php';    
                    ?>
                </div>
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