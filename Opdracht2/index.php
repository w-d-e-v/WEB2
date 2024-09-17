<?php

declare(strict_types = 1);

//De variabele hieronder heb ik moeten aanpassen om de padstructuur op mijn machine te fixen
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Opdracht2' . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);


//Ik heb het W3schools voorbeeld verbasteld met een foreach loop
//We strippen current path en bovenliggend path er af door een extra array
//Hyperlinks zijn aangemaakt en sturen richting App.php zodat die de inhoud kan gaan 
//inlezen en sorteren 😵‍💫

function readFiles(){
if (is_dir(FILES_PATH)){
    if ($dh = opendir(FILES_PATH)){
        foreach(scandir(FILES_PATH) as $file){
             if ($file !== '.'&& $file !== '..'){
 //volgens copilot moet je dit nu eerst in een array stoppen om geen error te krijgen, ik hoop dat het daarmee wel werkt
                $filesArray[] = $file;
      }
      closedir($dh);
    }
    }   
  }
  print_r("<ul>");
  foreach ($filesArray as $name){
    print_r('<li><A HREF="App.php?' . $name . '">' . $name . "</li><BR />");
    }
    print_r("</ul>");
}

readFiles();