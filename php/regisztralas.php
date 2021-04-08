<?php
    $egyezes = FALSE;
    $felhasznalo_temp;

    if(isset($_POST["usrname"]) && isset($_POST["passwd"]) && isset($_POST["passwd1"]) && isset($_POST["email"]))
    {
        if($_POST["usrname"] != "" && $_POST["passwd"] != "" && $_POST["passwd1"] != "" && $_POST["email"] != "")
        {
            if($_POST["passwd"] == $_POST["passwd1"])
            {
                foglalt_e();
                if($egyezes !== TRUE)
                {
                    felhasznalo_mentes();
                }
                else
                {   
                    echo "A megadott felhasználónév már foglalt!";
                }
            }
            else
            {
                echo "A jelszavak nem egyeznek!";
            }
        }
        else
        {
            echo "Üres mezők!";
        }
    }
    else
    {
        echo "Minden mező kitöltése kötelező! - ";
    }

    function foglalt_e()
    {
        global $egyezes;
        global $felhasznalo_temp;
        $string_temp;

        $fajl = fopen("felhasznalok.txt","r");
        if($fajl === FALSE)
        {
            die("\nHIBA: a mentett felhasználók betöltése sikertelen!");
        }
        while(($string_temp = fgets($fajl)) !== FALSE)
        {
            $felhasznalo_temp = unserialize($string_temp);
            if($felhasznalo_temp["nev"] === $_POST["usrname"])
            {
                $egyezes = TRUE;
                fclose($fajl);
                return;
            }
        }
        fclose($fajl);
    }

    function felhasznalo_mentes()
    {
        $b = isset($_POST["rejtett"]);
        $temp = ["nev" => $_POST["usrname"], "jelszo" => $_POST["passwd"], "mail" => $_POST["email"], "jelleg" => $_POST["jellSelect"], "rejtett" => $b, "jellemzo" => $_POST["jellemzo"]];
        $f = fopen("felhasznalok.txt","a");
        fwrite($f, serialize($temp) . "\n");
        fclose($f);
        echo "A regisztráció sikeres volt " . $temp["nev"] . " névvel!";
    }
?>