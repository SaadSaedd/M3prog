    <?php 
    $afstand = 1081.23;
    $prijs = 1.89;
    $treinreis = 60;
    $inhoud = 60;
    $liter = 15;
    $tankenkost = 50;


    $tanken = 1.3;
   

    $gebruik = $afstand / $liter;
    $aantal = $gebruik / $tankenkost;
    $kost = $gebruik / $prijs; 




    if ($kost >  $treinreis){
        echo "Ik ga met trein omdat het goed koper is ";
    }else {
        echo "ik ga met auto omdat het goedkoper is <br>";
        echo "de totale afstand is $afstand <br>";
        echo "de prijs is $kost <br>";
        echo "hoe veel je gebruikt $gebruik <br>";
        echo "hoe vaak je moet tanken $tanken <br>";
    };


    ?>


