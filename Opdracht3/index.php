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
            $("#navbar").load("/includes/navbar.php");
        });
    </script>
  <?php
    
    $routes = [
      '/shares'=> [SharesView::class, 'showShares'],
      '/register' => [UsersContr::class, 'createUser'],
      '/create' => [SharesContr::class, 'createShare'],
      '/deleteShare' => [SharesContr::class, 'deleteShare'],
      '/login' => [UsersContr::class, 'loginUser'],
      '/logout' => [UsersContr::class, 'logoutUser'],
      '/showuser' => [UsersView::class, 'showUser'],
    ];

    //Ik geef eerlijk toe dat ik dit zonder AI niet voor elkaar had gekregen
    //Al begrijp ik als ik er naar kijk volgens mij redelijk wat er gebeurt
    $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //vul variabele met wat er achter de eerste slash/ staat

    if ($urlPath == '/' || $urlPath == '/index.php') { //alleen bij index.php of top domain start HTML tonen
    $startHtml = '<div class="position-relative mt-5">
         <h1 style="text-align:center;">
         <img src="/blogding.png"><br>
          Welcome to Blogding</h1><br>
          <p style="text-align:center;"><strong>Find something cool? Share it with our community. Look at other shares as well</strong></p><br>
          <p style="text-align:center;"><a class="btn btn-primary" href="/shares">Share Now</a></p><br>
          </div>';
    echo $startHtml;
    }

    if (array_key_exists($urlPath, $routes)) { //als we dit gevuld hebben
    $controllerClass = $routes[$urlPath][0]; //vul deze waarde met wat er in $routes staat gedefinieerd als klasse
    $method = $routes[$urlPath][1]; //en vul deze waarde met wat er voor functienaam (methodenaam) in $routes staat gedefinieerd
    $controller = new $controllerClass(); //  voorbeeld object maken zoals $sharesRead = new SharesView();
    $controller->$method(); //  en aanroepen zoals echo $sharesRead->showShares();
}
