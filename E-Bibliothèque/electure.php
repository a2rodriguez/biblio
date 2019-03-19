<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>E-Bibliothèque - E-lecture</title>
	<link href="style/stylebb.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="style/styleel.css">
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
	<script>document.write(getLocalDate_fr());</script>

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
				<br>
				<strong><<< -- ESPACE E-LECTURE -- >>></strong>
				<p></p>
			</th>
		</tr>
		<tr>
			<th>
				<a class="bouton" href="#actualite">Actulités</a>
				<a class="bouton" href="#sport">Sport</a>
				<a class="bouton" href="#histoire">Histoire</a>
				<a class="bouton" href="#manga">Manga</a>
				<a class="bouton" href="#cuisine">Cuisine</a>
				<a class="bouton" href="#roman">Roman</a>
				<a class="bouton" href="#fiction">Fiction</a>

			</th>
		</tr>

	</tbody>
</table>

<!--- FIN MENU --->
<div id="actualite" align="center">
	<h3 align="left">ACTUALITE</h3>
	<table width="850">
		<tr>
		<td align="center">AUTEUR</td>
		<td align="center">PRIX</td>
	</tr>
	<tr>
	<td><a href="electure/lemonde.php">Le Monde, Coder, le futur métier en vogue</a></td>
	<td>0.20€</td>
	</tr>
	</table>
</div>


<div id="sport" align="center">
	<h3 align="left">SPORT</h3>
	<table width="850">
		<tr>
		<td align="center">AUTEUR</td>
		<td align="center">PRIX</td>
	</tr>
	<tr>
	<td><a href="electure/vitaform.php">VitaForm, Comment perdre le gras du ventre en un mois!</a></td>
	<td>1€</td>

	</tr>
	<tr>
	<td><a href="electure/fitness.php">Fitness, La bouée, la forme préférée des femmes de nos jours</a></td>
	<td>2€</td>
	</tr>
		</table>
</div>

<div id="histoire" align="center">
	<h3 align="left">HISTOIRE</h3>
	<table width="850">
		<tr>
		<td align="center">AUTEUR</td>
		<td align="center">PRIX</td>
	</tr>
	<tr>
	<td><a href="electure/histoire.php">Histoire, La 3ème guerre mondiale</a></td>
	<td>2€</td>

	</tr>
	<tr>
	<td><a href="electure/communiste.php">Communiste, Travailler pour mieux payer</a></td>
	<td>0.50€</td>
	</tr>
	<div align="right"><a href="#">Top</a></div>
	</table>
</div>

<div id="manga" align="center">
	<h3 align="left">MANGA</h3>
	<table width="850">
		<tr>
		<td align="center">AUTEUR</td>
		<td align="center">PRIX</td>
	</tr>
	<tr>
	<td><a href="electure/myheroacademia.php">My hero academia, All Might contre All for One</a></td>
	<td>0.50€</td>
	</tr>
	<div align="right"><a href="#">Top</a></div>
	</table>
</div>

<div id="cuisine" align="center">
	<h3 align="left">CUISINE</h3>
	<table width="850">
		<tr>
		<td align="center">AUTEUR</td>
		<td align="center">PRIX</td>
	</tr>
	<tr>
	<td><a href="electure/biencuisiner.php">Biencuisiner, Faire une poule au pot</a></td>
	<td>0.75€</td>

	</tr>
	<tr>
	<td><a href="electure/biengrossir.php">BienGrossir, Une bonne raclette même en été</a></td>
	<td>1€</td>
	</tr>
	<tr>
	<td><a href="electure/bienmaigrir.php">Bienmaigrir, un cornichon en guise de repas</a></td>
	<td>0.80€</td>

	</tr>
	<div align="right"><a href="#">Top</a></div>
	</table>
</div>

<div id="roman" align="center">
	<h3 align="left">ROMAN</h3>
	<table width="850">
		<tr>
		<td align="center">AUTEUR</td>
		<td align="center">PRIX</td>
	</tr>
	<tr>
	<td><a href="electure/gloria.php">Gloria, Vivre pour les autres</a></td>
	<td>1.50€</td>

</tr>
	<tr>
	<td><a href="electure/jkrowling.php">JK Rowling, Harry Potter et la coupe de feu</a></td>
	<td>1.50€</td>
	</tr>
	<tr>
	<div align="right"><a href="#">Top</a></div>
	</table>
</div>

<div id="fiction" align="center">
	<h3 align="left">FICTION</h3>
	<table width="850">
		<tr>
		<td align="center">AUTEUR</td>
		<td align="center">PRIX</td>
	</tr>
	<tr>
	<td><a href="electure/georgelucas.php">George Lucas, Star Wars</a></td>
	<td>1.80€</td>

	</tr>
	<div align="right"><a href="#">Top</a></div>
	</table>
</div>

<footer>
	<?php include('footer.php'); ?>
</footer>
</body>
</html>
