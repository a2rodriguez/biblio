<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>E-Bibliothèque - Location</title>
	<link href="style/stylebb.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="style/stylemn.css">

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
</div>


<!--- DEBUT MENU --->
<table width=100% cellspacing="10" cellpading="0" border=0>
	<tbody>
		<tr>
			<th>
				Aujourd'hui
			</th>
		</tr>
		<tr>
			<th>
				<a class="bouton" href="#actualite">Actulités</a>
				<a class="bouton" href="#sport">Sport</a>
				<a class="bouton" href="#histoire">Histoire</a>
				<a class="bouton" href="#manga">Manga</a>
				<a class="bouton" href="cuisine">Cuisine</a>
				<a class="bouton" href="#roman">Roman</a>
				<a class="bouton" href="fiction">Fiction</a>

			</th>
		</tr>

	</tbody>
</table>

<!--- FIN MENU --->
<div id="actualite" align="center">
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
</div>


<footer>
	<?php include('footer.php'); ?>
</footer>
</body>
</html>
