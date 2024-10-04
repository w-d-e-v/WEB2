<?php
  include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div id="navbar"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            $("#navbar").load("navbar.html");
        });
    </script>
  <?php

  /* ultrafijne startcode laten we nog ff staan
    $usersObj = new UsersView();
    echo $usersObj->showUser('Bas');
    $usersObj2 = new UsersContr();
    $usersObj2->createUser('Iet', 'Sanders', '1999-07-07');
    */

    /* ff testen of we een share kunnen maken op basis van wat ik heb gemaakt 
    $sharesObj = new SharesContr();
    $sharesObj->createShare(2, 'En nog een derde!', 'Nu al succesvoller dan twitter', 'https://hatseflats.nl/');
    */
    
    // Dan moet hij ook uitgelezen kunnen worden
    $sharesRead = new SharesView();
    echo $sharesRead->showShares();
  ?>
</body>
</html>