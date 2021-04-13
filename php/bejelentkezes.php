<?php
    session_start(); //menetkövetés
    //$felhasznalo = "";
    //$jelszo = "";
    $uzenet="juj^^";
    if(!isset($_POST["username"]) || trim($_POST["username"]) === ""
        || !isset($_POST["pass"]) || trim($_POST["pass"]) === "") {
        $uzenet = "<strong>Hiba:</strong> Minden mező kitöltése kötelező!";
    } 
    else 
    {
        $uzenet = "Sikertelen belépés! A belépési adatok nem megfelelők!";
        // alapból azt feltételezzük, hogy a bejelentkezés sikertelen


        /*---------------Eddigi felhasznalok------------------*/
        $fajl = fopen("felhasznalok.txt","r");

        if($fajl === FALSE){
            die("\nHIBA: a mentett felhasználók betöltése sikertelen!");
        }


        /* Kicsit átalakítottam a bejelentkezést */

        $felhasznalo;
        $sor;
        while (($sor = fgets($fajl)) !== FALSE)
        {
            $felhasznalo = unserialize($sor); //visszaalakítás
            if ($felhasznalo["nev"] === $_POST["username"] && $felhasznalo["jelszo"] === $_POST["pass"]) 
            {
                $uzenet = "Sikeres belépés! :)";
                $_SESSION["user"] = $felhasznalo;           
                break;
            }
        }
        header("Location: ../index.php"); //átirányítás
    }

        /*  EZ A RÉGI BEJELENTKEZÉS

        $felhasznalok = []; //tömbünk
        while (($sor = fgets($fajl)) !== FALSE)
        {
            $felhasznalo = unserialize($sor); //visszaalakítás
            $felhasznalok[] = $felhasznalo;
        }

        fclose($fajl);

            //-----------felhasználónév-jelszó páros--------------
            foreach ($felhasznalok as $felh) { //bejárás
                if ($felh["nev"] === $felhasznalonev && $felh["jelszo"] === $jelszo) {
                    $uzenet = "Sikeres belépés! :)";
                    $_SESSION["user"] = $felh;
                    header("Location: ../index.php"); //átirányítás
                    break;
                }
            }
            //----------------------------------------------------
            */
?>