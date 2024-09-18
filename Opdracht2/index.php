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
        }
        closedir($dh);
        }
    }   
  //We moeten voor de integriteit van de bestandsnaam een urlencode() gebruiken anders wordt de punt voor de bestandsextensie een underscore
  print_r("<ul>");
  foreach ($filesArray as $name){
    $encodedName = urlencode($name);
    print_r('<li><A HREF="App.php?file=' . $encodedName . '">' . $encodedName . "</li><BR />");
    }
    print_r("</ul>");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File-getter-organizer-thingamabob</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <div class="ms-5 mt-5">  

<?php
  readFiles();
  ?>

</body>

