<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title>
					Millennium-Equilibrium Calculator
			</title>
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
<br />
<center>
	<p>
		<strong>
			Millennium-Equilibrium Calculator
		</strong>
	</p>
	<p>
		Wanneer heb je exact even veel dagen voor het jaar 2000 als daarna meegemaakt? Tijd voor een feestje!
<form action="./index.php" method="post">
	Geboortedatum:
	<input type="date" name="bday">
	<br />
	<input type="submit" value="Vind mijn ME dag">
	
</form>

<?php

echo ("<br />");

$start = strtotime($_POST['bday']);
$end = strtotime('2000-01-01');


#echo ("start is $start");
#echo ("end is $end");

$days_between = ceil(abs($start - $end) / 86400);
$me_day_unixtime = ceil(abs($start - $end) + $end);
$me_day = date("d-m-Y", $me_day_unixtime);


if(!empty($_POST)){
echo ("Dagen tussen jouw geboortedatum en de eeuwwisseling: <b>$days_between</b>");
echo ("<br /><br />");
echo ("Jouw Millennium-Equilibrium dag (1 januari 2000 + $days_between dagen) is: <b>$me_day </b>");
}
?>

<br /><br /><br /><br />
<p>
<small>Het beste PHP-project ooit. Iets nuttigers dan dit moet nog bedacht worden</small></p>

</center>
</body>

</html> 