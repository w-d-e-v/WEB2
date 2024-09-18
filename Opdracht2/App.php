<?php

declare(strict_types = 1);

//Eerst uitvogelen welk bestand we binnenkrijgen. Dit doen we door een vieze
//hack want kennelijk is de filename de key en niet de value in dit GET array
$fileArray = $_GET;
foreach ($fileArray as $fileName=>$value){

print_r($fileName);
}