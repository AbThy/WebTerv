<?php
    session_start();
    $v = "";

    if(isset($_POST["ertekeles"]) && $_POST["ertekeles"] != "")
    {
        $v = $_POST["ertekeles"];
        velemeny_mentes();
    }
    header('Location: ../filmek.php');

    function velemeny_mentes()
    {
        $f = fopen("velemenyek.txt","a");
        if($f === FALSE)
        {
            die("HIBA: A vélemény mentése nem sikerült!");
        }
        fwrite($f, date("Y.m.d.") . " - " . $GLOBALS["v"] ."\n\n");
        fclose($f);
    }
?>