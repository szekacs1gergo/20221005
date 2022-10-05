<!DOCTYPE html>
<html>
<head>
<meta >
<title>
<?php 
if(isset($_GET['p'])) $p=$_GET['p'];
	else $p="";
	if	($p=="") 		$cim="Kezdolap"									;else
	if 	($p=="szolga") 	$cim="Szolgáltatásaink" 									;else
	if 	($p=="eler") 	$cim="Elérhetőségek"							;else
	if 	($p=="gyik") 	$cim="Gyakori Kérdések" 					;else
	if 	($p=="rol") 	$cim="Rólunk" 								;else
	if 	($p=="ar") 		$cim="Áraink"								;else
	if 	($p=="kar") 	$cim="Karrier"								;else
	if 	($p=="regist") 	$cim="Regisztráció"								;else
	if 	($p=="belep") 	$cim="Belépés"								;else
	print $cim;
?></title>
</head>
<body>
<div name="fejlec">
Menüs Weboldal
</div>



<div name="menu">
<a href="./"	>Kezdőlap</a>
<a href="./?p=szolga"	>Szolgáltatásaink</a>
<a href="./?p=gyik"		>GYIK</a>
<a href="./?p=rol"		>Rólunk</a>
<a href="./?p=eler"		>Elérhetőségek</a>
<a href="./?p=ar"		>Áraink</a>
<a href="./?p=kar"		>Karrier</a>
<a href="./?p=regist"	>Regisztráció</a>
<a href="./?p=belep"	>Belépés</a>
</div>
<hr>
<div name="tartalom">
<?php
	if(isset($_GET['p'])) $p=$_GET['p'];
	else $p="";
	if	($p=="") 		include("kezdolap.php")									;else
	if 	($p=="szolga") 	include("szolga.php") 									;else
	if 	($p=="eler") 	include("elerhetosegek.php")							;else
	if 	($p=="gyik") 	print 	"<h1>Gyakori Kérdések</h1>" 					;else
	if 	($p=="rol") 	print 	"<h1>Rólunk</h1>" 								;else
	if 	($p=="ar") 		print 	"<h1>Áraink</h1>"								;else
	if 	($p=="kar") 	print 	"<h1>Karrier</h1>"								;else
	if 	($p=="regist") 	include("regist.php")								;else
	if 	($p=="belep") 	include("belep.php")								;else
	print ("Error");
?>
</div>
<br>
<iframe name="kisablak">

</iframe>
</body>
</html>