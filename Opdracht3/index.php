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
            $("#navbar").load("/includes/navbar.html");
        });
    </script>
  <?php

  /* ultrafijne startcode laten we nog ff staan
    $usersObj = new UsersView();
    echo $usersObj->showUser('Bas'); 
    $usersObj2 = new UsersContr();
    $usersObj2->createUser('Tammo', 'tammo@tammo.com', 'mooiwachtwoord');
    */

    /* ff testen of we een share kunnen maken op basis van wat ik heb gemaakt 
    $sharesObj = new SharesContr();
    $sharesObj->createShare(1, 'En nog een vierde ook!', 'Wat prachtig dit', 'https://behang.com/');
    */
    
    /* Dan moet hij ook uitgelezen kunnen worden
    $sharesRead = new SharesView();
    echo $sharesRead->showShares();
    */
    
    $startHtml = '<div class="position-relative mt-5">
         <h1 style="text-align:center;">
          Welcome to Blogding</h1><br>
          <p style="text-align:center;"><strong>Find something cool? Share it with our community. Look at other shares as well</strong></p><br>
          <p style="text-align:center;"><a class="btn btn-primary" href="sharesview.php">Share Now</a></p><br>
          </div>';
    //echo $startHtml;

    $routes = [
      '/shares'=> [SharesView::class, 'showShares'],
    ];

    //Ik geef eerlijk toe dat ik dit zonder AI niet voor elkaar had gekregen
    //Al begrijp ik als ik er naar kijk volgens mij redelijk wat er gebeurt
    $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (array_key_exists($urlPath, $routes)) {
    $controllerClass = $routes[$urlPath][0];
    $method = $routes[$urlPath][1];
    $controller = new $controllerClass();
    $controller->$method();
}
  ?>
</body>
</html>