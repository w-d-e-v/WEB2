<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title>
					Millennium-Equilibrium Calculator
			</title>
	</head>
<body>
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