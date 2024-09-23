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
            $separator = ',';
            $decimal = ".";
            break;
        case "transacties-1.csv":
            print_r("Het gekozen bestand is transacties-1.csv");
            $separator = "\t";
            $decimal = ",";
            break;
        case "transacties-2.csv":
            print_r("Het gekozen bestand is transacties-2.csv");
            $separator = "\t";
            $decimal = ",";
            break;
        default:
            print_r("<H2><strong>Deze zie je als je App.php direct oproept, je krijgt nu dus geen tabel of data te zien (pannekoek)</h2></strong>");
        }
    
     //Open het bestand
     if (($fileHandle = fopen(FILES_PATH . $fileName, "r"))) {
        //Strip de eerste regel garbage er af
        $stripHeaders = fgetcsv($fileHandle);
        //Laad dan de overige meuk in
        
        while ($row = fgetcsv($fileHandle, 500, $separator, "\"", "\\")){
           foreach ($row as &$value) { //Deze ampersand helpt om de elementen in het array aan te passen!
            $value = str_replace('"', '', $value); //Strip alle overbodige double quotes weg uit <gegevens-1 class="csv"></gegevens-1>
            $value = str_replace(';', '', $value); //Strip alle overbodige puntkomma's weg uit gegevens-1.csv    
            $value = str_replace($decimal, ".", $value); //Maak de decimaal uniform een punt
           }
                $data[] = $row; //En voeg de inhoud van de regel toe aan het array
                
        }
    
    
        fclose($fileHandle); //Absch(l)ießen
}
        include VIEWS_PATH . 'transactions.php'; //Druk het geheel in tabelsjabloon
}
readCSV($fileName);