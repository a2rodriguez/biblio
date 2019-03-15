<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Bibliothèque - Location</title>
	<link href="style/stylebb.css" rel="stylesheet"/>
	<script>
		function getLocalDate_fr(){
				var now = new Date();
				var day = now.getDay();
				var date = now.getDate();
				var month = now.getMonth();
				var year = now.getFullYear();
				var DOW=new Array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
				var MON=new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
				return DOW[day] + ' ' + date + ' ' + MON[month] + ' ' + year+'.';
		}
	</script>
</head>

<body>
	<div id=moi>
	<br><h1>E-Bibliothèque</h1>

	</div>
	<div align="right">
		<img src="images/phbiblio.jpg">
	</div>

	<nav>
		<ul>
			<li><a href="accueil.php">ACCUEIL</a></li>
			<li><a href="location.php">LOCATION</a></li>
			<li><a href="achat.php">ACHAT</a></li>
			<li><a href="electure.php">LECTURE</a></li>
			<li><a href="bibliotheque.php">BIBLIOTHEQUE</a></li>

		</ul>
	</nav>
	<div class="sisiny">
		<div id="havia">
			<p>GAUCHE</p>

		</div>
		<div id="havanana">
			<p>DROITE</p>

		</div>
	</div>

	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>
