<?php
    session_start();

    /*----------------de mi lehet a kiterjesztése?...-----------------------*/
    /*$fajlnev = $_FILES["fesztKep"]["name"];
    $darabok = explode(".", $fajlnev);
    $kiterjesztes = strtoupper(end($darabok));
    echo "A fájl kiterjesztése: $kiterjesztes <br/>";*/

    /*----------------------átmozgatás biztibe------------------------------*/
    /*$cel_utvonal = "feltoltottKepekMappaja/" . $_FILES["fesztKep"]["name"];
    if (move_uploaded_file($_FILES["fesztKep"]["tmp_name"], $cel_utvonal)) {//ha azonos nevű a fájl --> felülírjuk
        echo "A fájl sikeresen átmozgatásra került! Már épségben van! ^^ :D";
    } else {
        echo "Hiba történt a fájl átmozgatása során! :(";
    }*/

if (isset($_FILES["fesztKep"])) {
    $engedelyezett_kiterjesztesek = ["jpg", "jpeg", "png"]; //csak ezek

    $fajlnev = $_FILES["fesztKep"]["name"];
    $darabok = explode(".", $fajlnev);
    $kiterjesztes = strtolower(end($darabok));
    //echo "A fájl kiterjesztése: $kiterjesztes <br/>";

    // a feltöltött fájl kiterjesztésének lekérdezése
    //$kiterjesztes = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));

    // ha a fájl kiterjesztése szerepel az engedélyezett kiterjesztések között...
    if (in_array($kiterjesztes, $engedelyezett_kiterjesztesek)) {
        if ($_FILES["fesztKep"]["error"] === 0) {
            if ($_FILES["fesztKep"]["size"] <= 31457280) {
                $cel_utvonal = "feltoltottKepekMappaja/" . $_FILES["fesztKep"]["name"];
                if (file_exists($cel_utvonal)) {
                    $cel_utvonal = "feltoltottKepekMappaja/" . '0' . $_FILES["fesztKep"]["name"];
                }
                if (move_uploaded_file($_FILES["fesztKep"]["tmp_name"], $cel_utvonal)) {
                    echo "A fájl sikeresen átmozgatásra került! Már épségben van! ^^ :D <br/>";
                } else {
                    echo "<strong>Juj!</strong> Hiba történt a fájl átmozgatása során! :( <br/>";
                }
            } else {
                echo "<strong>Juj!</strong> A fájl mérete túl nagy, de az élmény még nagyobb lehetett! Próbálkozz másik képpel.<br/>";
            }
        } else {
            echo "<strong>Juj!</strong> A fájlfeltöltés nem sikerült! :(<br/>";
        }
    } else {
        echo "<strong>Juj!</strong> A fájl kiterjesztése nem megfelelő! Amiket szeretünk: jpg, jpeg, png <3 <br/>";
    }
}
header("refresh:4;url=../fesztival.php");
?>