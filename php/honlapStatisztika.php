<?php
    $index = fopen("php/indexStat.txt", "r");
    $tobbi = fopen("php/tobbiStat.txt", "r");
    $i="";
    $t="";

    if($index !== FALSE)
    {
        $i = (int)fgets($index);
    }
    if($tobbi !== FALSE)
    {
        $t = (int)fgets($tobbi);
    }
    fclose($index);
    fclose($tobbi);

    $ossz = $i + $t;
    //A főoldal megnyitásainak száma az összes oldalénak 45%-át teszi ki, az összes többi oldalé a 55%-a.
    echo 'A főoldal megnyitásának száma az összes oldal megnyitásának '.round($i / ($ossz / 100)).'%-át teszi ki, az összes többi oldal a fennmaradó '.round($t / ($ossz / 100)).'%.';
    echo '<br/>Összes oldalnyitás: '.$ossz;
    echo '<br/><br/><br/>Amit magadról írtál: <i>"'.$_SESSION["user"]["jellemzo"]."</i>\"";
    echo '<br/><br/>Leírásod így <u>'.strlen($_SESSION["user"]["jellemzo"])."</u> karakter hosszú.";
?>