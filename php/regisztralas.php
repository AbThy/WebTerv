<?php
    session_start();
    $egyezes = FALSE;
    $felhasznalo_temp;

    if(isset($_POST["usrname"]) && isset($_POST["passwd"]) && isset($_POST["passwd1"]) && isset($_POST["email"])) // "hamisan" kitöltött mezők
    {
        if($_POST["usrname"] != "" && $_POST["passwd"] != "" && $_POST["passwd1"] != "" && $_POST["email"] != "") // "hamisan" kitöltött mezők
        {
            if($_POST["passwd"] == $_POST["passwd1"]) // Jelszó és ellenőrző jelszó egyezésének ellenőrzése
            {
                try
                {
                    foglalt_e();
                }
                catch(Exception $e)
                {
                    redirect("Hiba történt a regisztráció során!<br/><br/>Ha találsz egy informatikust mutasd meg neki ezt:<br/>".$e);
                }
                if($egyezes !== TRUE) // Foglalt felhasználónév ellenőrzése --> [foglalt_e()]
                {
                    if(strlen($_POST["passwd"]) >= 6) //Jelszó hosszának ellenőrzése
                    {
                        if(!str_contains($_POST["usrname"],"\""))
                        {
                            if(!str_contains($_POST["usrname"],"\\"))
                            {
                                $at = explode("@",$_POST["email"]);
                                if(count(explode(".",$at[1])) <= 2)
                                {
                                    try
                                    {
                                        felhasznalo_mentes();
                                    }
                                    catch(Exception $e)
                                    {
                                        redirect("Fájlkezelési hiba történt a regisztráció során!<br/><br/>Ha találsz egy informatikust mutasd meg neki ezt:<br/>".$e);
                                    }
                                }
                                else{redirect("Az email címben nem állhat 1-nél több pont a @ jel után!");}
                            }else{redirect("A felhasználónév nem tartalmazhat \\ karaktert!");}
                        }else{redirect("A felhasználónév nem tartalmazhat \" karaktert!");}
                    }else{redirect("A jelszónak legalább 6 karakter hosszúnak kell lennie!");}
                }else{redirect("A megadott felhasználónév már foglalt!");}
            }else{redirect("A jelszavak nem egyeznek!");}
        }else{redirect("Üres mezők!");}
    }else{redirect("Minden mező kitöltése kötelező!");}

    function foglalt_e()
    {
        global $egyezes;
        global $felhasznalo_temp;
        $string_temp;
        
        $fajl = fopen("felhasznalok.txt","r");
        if($fajl === FALSE)
        {
            throw new Exception("HIBA a megnyitáskor: felhasznalok.txt");
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
        if($f === FALSE)
        {
            throw new Exception("HIBA a megnyitáskor: felhasznalok.txt");
        }
        fwrite($f, serialize($temp) . "\n");
        fclose($f);
        redirect("A regisztráció sikeres volt " . $temp["nev"] . " névvel!");
    }

    function redirect($uzenet)
    {
        echo "<br/>".$uzenet;
        header("refresh:6;url=../index.php");
        echo "<br/>Visszaírányítunk a főoldalra 6mp-en belül!";
    }
?>