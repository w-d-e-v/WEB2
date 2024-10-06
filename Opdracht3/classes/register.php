<?php
            include '../includes/class-autoload.inc.php';
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
    <div class="mt-5 ms-5">
        <h1>Register an account with Blogding.com</h1>
        <form method="post" action="/register">

            <div class="col-12 col-md-6 col-lg-4">
                <label for="inputName" class="form-label">Please enter your name:</label><br>
                <input type="text" name="username" placeholder="Enter your username here"><br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="inputEmail" class="form-label">Please enter your e-mail address:</label><br>
                <input type="email" id="email" name="email" placeholder="something@somedomain.tld"><br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="inputPassword" class="form-label">Please enter your password:</label><br>
            <input type="password" name="password" placeholder="Enter your password here"><br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <button>Submit</button>
            </div>
        </form>
    </div>
</body>
</html>