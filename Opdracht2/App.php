<?php

declare(strict_types = 1);

//Eerst uitvogelen welk bestand we binnenkrijgen. Dit doen we door een vieze
//hack want kennelijk is de filename de key en niet de value in dit GET array
$fileArray = $_GET;

foreach ($fileArray as $fileName=>$value){

print_r($fileName);
}

//Nu willen we op basis van een if..elseif..else of switch de transformatie doen

switch ($fileName){
    case "gegevens-1.csv":
        print_r("Het gekozen bestand is gegevens-1.csv");
        break;
    case "transacties-1.csv":
        print_r("Het gekozen bestand is transacties-1.csv");
        break;
    case "transacties-2.csv":
        print_r("Het gekozen bestand is transacties-2.csv");
    default:
        print_r("Deze zie je als je App.php direct oproept");
    }