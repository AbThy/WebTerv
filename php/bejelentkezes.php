<?php
    session_start(); //menetkövetés
    $fajl;
    //$felhasznalo = "";
    //$jelszo = "";
    if(!isset($_POST["username"]) || trim($_POST["username"]) === "" || !isset($_POST["pass"]) || trim($_POST["pass"]) === "") 
    {
        echo "<strong>Hiba:</strong> Minden mező kitöltése kötelező!<br/>Visszalépés a főoldalra...";
        header("refresh:6;url=../index.php");
    } 
    else 
    {
        try
        {
            $fajl = fopen("felhasznalok.txt","r");
            if($fajl === FALSE)
            {
                throw new Exception();
            }
        }
        catch(Exception $e)
        {
            echo "A mentett felhasználók betöltése sikertelen!<br/>Visszalépés a főoldalra...";
            header("refresh:6;url=../index.php");
            die();
        }

        $be = FALSE;
        $felhasznalo;
        $sor;
        while (($sor = fgets($fajl)) !== FALSE)
        {
            $felhasznalo = unserialize($sor); //visszaalakítás
            if ($felhasznalo["nev"] === $_POST["username"] && $felhasznalo["jelszo"] === $_POST["pass"]) 
            {
                echo "Sikeres belépés!";
                $_SESSION["user"] = $felhasznalo;      
                header("refresh:1;url=../index.php");
                $be = TRUE;
            }
        }
        if(!$be)
        {
            echo "Hibás felhasználónév vagy jelszó!<br/>Visszalépés a főoldalra...";
            header("refresh:6;url=../index.php");  
        }
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