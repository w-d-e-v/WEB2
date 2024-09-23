<?php

declare(strict_types = 1);

//De variabele hieronder heb ik moeten aanpassen om de padstructuur op mijn machine te fixen
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Opdracht2' . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

//Binnenhalen en decoderen van de bestandsnaam
if (isset($_GET['file'])){
    $fileName = urldecode($_GET['file']);
    }
    else { //Wanneer iemand App.php oproept willen we geen undeclared variable zien
        $fileName = NULL;
    }

//Nu willen we op basis van een switch de transformatie doen
//Garbage in, maar clean output. Wat een opdracht...
//We beginnen met een functie

function readCSV($fileName){
    $data = []; //alle inhoud moet in een array
    $separator = ',';
    $decimal ='.';

    //Laten we dan eerst de separators en decimaaltekens definiëren
    switch ($fileName){
        case "gegevens-1.csv":
            print_r("Het gekozen bestand is gegevens-1.csv");
            $separator = ",";
            $decimal = ".";
            include VIEWS_PATH . 'transactions.php'; 
            break;
        case "transacties-1.csv":
            print_r("Het gekozen bestand is transacties-1.csv");
            $separator = "\t";
            $decimal = ",";
            include VIEWS_PATH . 'transactions.php'; 
            break;
        case "transacties-2.csv":
            print_r("Het gekozen bestand is transacties-2.csv");
            $separator = "\t";
            $decimal = ",";
            include VIEWS_PATH . 'transactions.php'; 
            break;
        default:
            print_r("Deze zie je als je App.php direct oproept, je krijgt nu dus geen tabel of data te zien (pannekoek)");
        }
    
        

}
