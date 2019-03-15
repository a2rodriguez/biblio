<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>E-Bibliothèque - Accueil</title>
	<link href="style/stylebb.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<div>
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
		<p><h2>Bonjour et bienvenu sur "Bookiner.fr" !</h2></p>
		<p>Nous vous proposons une liste de livre que vous pouvez consulter, acheter ou louer
		à votre convenance.</p>
		<p>Nous trions les livres par auteur et nous indiquons les prix sur la droite.</p>

		<table width="850">
			<tr>
			<td align="center">AUTEUR</td>
			<td align="center">PRIX</td>
		</tr>
		<tr>
		<td>Beethoven, La musqiue pour les nuls</td>
		<td>5€</td>

	</tr>
	<tr>
		<td>Mozart, La flûte enchantée</td>
		<td>7€</td>
	</tr>
		</table>

		<p>nous vous invitons à naviguer à travers les différents onglets pour faire votre choix</p>
		<br>

		<h2>BONNE LECTURE !</h2>
</div>
		<footer>
			<div align="center">
				<h4><a href="contact.php">Nous contacter</a> |  Mail : <a href="mailto:contact@bookiner.fr">contact@bookiner.fr</a> | Téléphone: 09.xx.xx.xx.xx | <a href="mention.php">Mentions légales</a> </h4>
		</footer>
	</body>
</html>
