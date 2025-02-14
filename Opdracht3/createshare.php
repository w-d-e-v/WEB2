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
    <div class="mt-5 ms-5">
        <h2>Share something!</h2>
        <form method="post" action="/create">
            <input type="hidden" name="user_id" value="
                <?php 
                    include 'includes/class-autoload.inc.php';
                    $user = new UsersView();
                    $userData = $user->showUser($_COOKIE["Blogding"]); 
                    echo $userData['id'];
                    ?>
                ">
            <div class="col-12 col-md-6 col-lg-4">
                <label for="shareTitle" class="form-label">Share Title</label><br>
                <input type="text" name="title" placeholder="Text share"><br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="shareBody" class="form-label">Body</label><br>
                <input type="text" name="body" placeholder="This is a test share"><br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <label for="shareLink" class="form-label">Link</label><br>
            <input type="text" name="link" placeholder="https://something.com"><br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>