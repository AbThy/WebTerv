<?php
    $mappanev = "php/feltoltottKepekMappaja";

    $mappa = opendir($mappanev);
    while( $fajl = readdir($mappa) )
    {
        $t = strtolower(substr( $fajl , -4 ));

        if( $t==".jpg" || $t=="jpeg" || $t==".png" || $t==".gif" )
        {
            $blank = "_blank";
            print "
                  <div class='kiskep'>
                     <a href='php/galeria.php?kepnev=feltoltottKepekMappaja/$fajl'> <img src='$mappanev/$fajl' alt='a_feltoltott_kep' /> </a>
                  </div>
               " ;
               /* a href="" -tulajdonságba ágyaztuk a GET parancsot, ami meghívja a galeria.php-t. Így GET-ben adjuk át a képet. */
        }
    }
    closedir($mappa);
?>
