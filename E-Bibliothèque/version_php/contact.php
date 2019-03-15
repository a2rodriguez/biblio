<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>CONTACT</title>
	<link href="style/stylebb.css" rel="stylesheet"/>
	<script type='text/javascript' src='script/scriptbb.js'></script>

</head>

<body>
	<?php include ('header.php'); ?>

	<div class="sisiny">

	<form action="newsletter.php" method="post">
	 	<div align="center" style="color:#6666FF"><h3>« --- Formulaire de contact --- »</h3></div>
		<table width="65%" align="Center">
		
		<!-- <table align="Center"> --->
			<tr> <!--- NOM --->
				<td align=right valign="top" ><label for="anarana">Nom :</label></td>
				<td>
					<input type="text" size="50" name="anarana" id="anarana" required>
				</td>
				<td align=left valign="top"><span style="color:red">* </span></td>
			</tr>
			<tr> <!--- PRENO --->
				<td align=right valign="top"><label for="fanarana">Prénom(s):</label></td>
				<td>
					<input type="text" size="50" name="fanarana" id="fanarana">
				</td>
				<td></td>
			</tr>
		<tr>
			<td align=right valign="top"><label for="mailaka">E-Mail:</label></td>
			<td>
				<input type="email" size="50" name="mailaka" id="mailaka" required>
			</td>
			<td align=left valign="top"><span style="color:red">* </span></td>
		</tr>
		<tr></tr>

		<tr>

		</tr>
		<tr></tr>
		<tr>
			<td align=right valign="top"><label for="message">Message :</label><br /></td>
			<td><textarea name="message" id="message" cols="40" rows="5" required></textarea></td>
			<td align=left valign="top"><span style="color:red">* </span></td>
		</tr>
		<tr></tr>
		<tr>
			<td align=right></td>
			<td align=right><span style="color:red">* Champ(s) obligatoire(s)</span></td>
			<td align=left valign="top"></td>
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
