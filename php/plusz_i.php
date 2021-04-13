<?php
    $n;

    $i = fopen("php/indexStat.txt", "r");
    if($i !== FALSE)
    {
        $n = (int)fgets($i);
    }
    fclose($i);

    $i = fopen("php/indexStat.txt", "w");
    if($i !== FALSE)
    {
        fwrite($i, $n + 1);
    }
    fclose($i);
?>