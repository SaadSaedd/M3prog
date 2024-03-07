    <?php
    $getal = 21.12547;
    $afrond = round($getal);
    $min =1;
    $max =999;

    $getal2 = rand ($min*10, $max*10) / 10;
    $getal3 = rand ($min*10, $max*10) / 10;
    $getal4 = rand ($min*10, $max*10) / 10;


    
    echo  $getal2 + $getal3 / $getal4 ;
    ?>