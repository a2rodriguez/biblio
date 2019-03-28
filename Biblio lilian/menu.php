<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>E-Bibliotheque</title>
	<link rel="stylesheet" type="text/css" href="monstyle.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="fond">
	<nav>
		<div class="table">
			<ul id="onglets">
				<li class="menu-ind">
					<a href="#actualite">Actualités</a>
				</li>
				<li class="location">
					<a href="#sport">Sport</a>
				</li>
        <li class="achat">
          <a href="#histoire">Histoire</a>
        </li>
        <li class="e-lecture">
          <a href="#manga">Manga</a>
        </li>
        <li class="Bibliotheque">
          <a href="#cuisine">Cuisine</a>
        </li>
        <li class="Roman">
          <a href="#roman">Roman</a>
        </li>
				<li>
					<a href="#fiction">Fiction</a>
				</li>
			</ul>
		</div>
		<!---début du tableau --->
		<table>
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
		<div id="actualite">
			<p>ACTU</p>
		</div>
		<div id="sport">
			<p>SPORT</p>
		</div>
		<footer>
			<?php include('footer.php'); ?>
		</footer>
	</body>
	</html>
