<?php
    $index = fopen("php/indexStat.txt", "r");
    $tobbi = fopen("php/tobbiStat.txt", "r");
    $i;
    $t;

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
    echo 'A főaldal megnyitásainak száma az összes oldal megnyitásához képest '.round($i / ($ossz / 100)).'%, ameddig az összes többi oldal ennek '.round($t / ($ossz / 100)).'%-a.';
    echo '<br/>Összes oldanyítás: '.$ossz;
?>