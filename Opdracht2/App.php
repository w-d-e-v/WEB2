<?php

declare(strict_types = 1);
//Binnenhalen en decoderen van de bestandsnaam
if (isset($_GET['file'])){
    $fileName = urldecode($_GET['file']);
    }
    else { //Wanneer iemand App.php oproept willen we geen undeclared variable zien
        $fileName = NULL;
    }

//Nu willen we op basis van een switch de transformatie doen

switch ($fileName){
    case "gegevens-1.csv":
        print_r("Het gekozen bestand is gegevens-1.csv");
        break;
    case "transacties-1.csv":
        print_r("Het gekozen bestand is transacties-1.csv");
        break;
    case "transacties-2.csv":
        print_r("Het gekozen bestand is transacties-2.csv");
        break;
    default:
        print_r("Deze zie je als je App.php direct oproept");
    }