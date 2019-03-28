<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>E-Bibliothèque - BDD Client</title>
	<link href="style/stylebbcolorA.css" rel="stylesheet"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<?php include ('header.php'); ?>
<!--
	<div id=moi>
	<br><h1>E-Bibliothèque</h1>
	<script>document.write(getLocalDate_fr());</script>

	</div>
	<div class="io" align="right">
		<img src="images/phbiblio.jpg">
		<br>
		<br>
	</div>
	<div>
	<nav>
		<ul>
			<li><a href="accueil.php">ACCUEIL</a></li>
			<li><a href="location.php">LOCATION</a></li>
			<li><a href="achat.php">ACHAT</a></li>
			<li><a href="electure.php">LECTURE</a></li>
			<li><a href="bibliotheque.php">BIBLIOTHEQUE</a></li>

		</ul>

</nav> -->

	<div class="sisiny">
        <div align="center"><h2>BASE DE DONNEES CLIENT</h2></div>
        <ol>
            <li><a href="affichage.php">AFFICHAGE LISTE CLIENT</a></li>
            <li><a href="ajout.php">AJOUT DE CLIENT</a></li>            
            <li><a href="suppression.php">SUPPRESSION DE CLIENT</a></li>            
            <li><a href="rech.php">RECHERCHE DE CLIENT</a></li>
        </ol>
    </div>
		<?php include ('header.php'); ?>
		<!--<footer>
			<div align="center">
				<h4><a href="contact.php">Nous contacter</a> |  Mail : <a href="mailto:contact@bookiner.fr">contact@bookiner.fr</a> | Téléphone: 09.xx.xx.xx.xx | <a href="mention.php">Mentions légales</a> </h4>
		</footer>
	-->
	</body>
</html>
