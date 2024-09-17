<?php

declare(strict_types = 1);

//De variabele hieronder heb ik moeten aanpassen om de padstructuur op mijn machine te fixen
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Opdracht2' . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);


//Ik heb het W3schools voorbeeld verbasteld met een foreach loop
//Probleem is dat . en .. (current path en bovenliggend path) ook weergegeven worden
//Ik ga eerst kijken of ik hier makkelijk hyperlinks van kan maken
//Maar op basis van de opdracht moet ik vermoedlelijk iets met method = POST
//sturen richting App.php zodat die de inhoud kan gaan inlezen en sorteren 😵‍💫

function readFiles(){
if (is_dir(FILES_PATH)){
    if ($dh = opendir(FILES_PATH)){
        foreach(scandir(FILES_PATH) as $file){
            print_r($file . "<BR />");
      }
      closedir($dh);
    }
  }
}

readFiles();