<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>E-Bibliothèque - Contact</title>
	<link href="style/stylebb.css" rel="stylesheet"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php include ('header.php'); ?>
<!--
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
	</nav> -->
	<div class="sisiny">

		<form action="mailto:a.raharijaona@simplon-charleville.fr" method="POST" enctype="text/plain">
			<table align="Center">
			<tr>
				<td align=right valign="top"><label for="email_expediteur">Votre adresse e-mail (obligatoire):</label></td>
				<td>
					<input type="text" size="50" name="email_expediteur" id="email_expediteur" required>
				</td>
				<td align=left valign="top"><span style="color:red">* </span></td>
			</tr>
			<tr></tr>

			<tr>
				<td align=right valign="top"><label for="titre">Titre de message (facultatif):</label><br /></td>
				<td>
					<input type="text" size="50" name="titre" id="titre">
				</td>
				<td align=left></td>
			</tr>
			<tr></tr>
			<tr>
				<td align=right valign="top"><label for="message">Message (obligatoire):</label><br /></td>
				<td><textarea name="message" id="message" cols="40" rows="5" required></textarea>
				</td>
				<td align=left valign="top"><span style="color:red">* </span></td>
			</tr>
			<tr></tr>
			<tr>
				<td align=right></td>
				<td align=left></td>
				<td align=left valign="top"><span style="color:red">* Champ(s) obligatoire(s)</span></td>
			</tr>
			<tr>
				<table  align="Center">
				<td align=center><input type="submit" name="envoyer" value="Envoyer"/> <input type="reset" name="effacer" value="Effacer"/></td>
				</table>
			</tr>
			</table>
		</form>

	</div>

	<?php include ('footer.php'); ?>
</body>
</html>
