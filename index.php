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
        </nav>

        <main>
            <aside id="hf">
                <form id="login" method="POST" action="php/bejelentkezes.php" autocomplete="on">
                    <fieldset>
                        <legend>Bejelentkezés</legend>
                        <input type="text" name="username" placeholder="Felhasználónév..." required/> <br/><br/>
                        <input type="password" name="pass" placeholder="Jelszó..." required/> <br/><br/>
                        <input type="submit" value="Bejelentkezés"/>
                        <input type="reset"/>
                        <p id="transzformalunk">Regisztráció a főoldal alján!</p>
                    </fieldset>
                </form>
            </aside>
            <div class="szoveg">
                <h1>Bemutatkozó</h1>
                <p><em>Üdvözlünk mindenkit honlapunkon!</em></p>
                <p>A honlap célja bemutatni a DJ-k világának lehető legtöbb aspektusát. A jelenség történelmi-kulturális hátterétől kezdve,
                    az előadáshoz használt eszközökön és híres "disc jockeyk"-on át egészen a témában alkotott filmekig: megpróbáljuk bejárni a témát,
                    remélve, hogy a laikus szemek és a témához értő érdeklődők is találnak valami számukra élvezhetőt.
                </p>
                <div style="border-style: ridge; padding: 0px 5px 20px 5px;">
                    <h2>Ki/mi is az a <mark>DJ</mark>?</h2>
                    <p> A <mark>lemezlovas</mark> vagy <mark>disc jockey</mark> (IPA: [ˈdɪsk ˌdʒɒki], röviden DJ, IPA: [ˈdiː ˌdʒeɪ]) a köznyelvben olyan könnyűzenével foglalkozó személy, 
                        aki folyamatos zenét szolgáltat egy zenés-táncos rendezvény alkalmából a közönségnek. A DJ jellemzője, hogy széles körű ismeretekkel bír 
                        az általa képviselt illetve kedvelt zenei műfajokban, és többnyire saját hanghordozókészlettel is rendelkezik, tehát egyben zenei gyűjtőről is beszélhetünk. 
                    </p>
                    <a class="wikipedialink" href="https://hu.wikipedia.org/wiki/Lemezlovas" style="text-align: right;">Forrás: Wikipédia</a>
                </div>

                <form id="reg" method="POST" action="php/regisztralas.php" autocomplete="on">
                    <p>Regisztráció</p>
                    <fieldset>
                        <legend>Kötelező adatok</legend>
                        <label>Felhasználónév: <input type="text" name="usrname" placeholder="Felhasználónév..." required/></label><br/>
                        <label>Jelszó: <input type="password" name="passwd" placeholder="Jelszó..." required/></label><br/>
                        <label>Jelszó újra: <input type="password" name="passwd1" placeholder="Jelszó..." required/></label><br/>
                        <input type="email" name="email" placeholder="e-mail cím" required/><br/>                       
                        <label for="jellemzoSelect">Hogyan jellemeznéd magad?</label><br/>
                        <select id="jellemzoSelect" name="jellSelect">
                            <option value="dj">DJ</option>
                            <option value="tanulo">Tanuló DJ</option>
                            <option value="rajongo">Rajongó</option>
                        </select>
                        <br/>
                        <input type="checkbox" name="rejtett" id="rejtettBox">
                        <label for="rejtettBox">Rejtett felhasználó?</label>
                    </fieldset>
                    <fieldset>
                        <legend>Egyéb</legend>
                        <label for="jellemzoSzoveg">Leírás</label>
                        <textarea  class="szovegblokk" id="jellemzoSzoveg" name="jellemzo" rows="10" cols="30" maxlength="300" placeholder="Írj valamit magadról! (max. 300 karakter!)"></textarea>
                        <input type="hidden" id="teszt" name="teszt" value="00"/>   
                    </fieldset>
                    <fieldset>
                        <input type="submit" value="Regisztráció" style="float: none;"/>
                        <input type="reset" style="float: none; margin-left: 10px;"/>
                    </fieldset>
                </form>
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