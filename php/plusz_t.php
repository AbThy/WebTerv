<?php
    $n;

    $t = fopen("php/tobbiStat.txt", "r");
    if($t !== FALSE)
    {
        $n = (int)fgets($t);
    }
    fclose($t);

    $t = fopen("php/tobbiStat.txt", "w");
    if($t !== FALSE)
    {
        fwrite($t, $n + 1);
    }
    fclose($t);
?>