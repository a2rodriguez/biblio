<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Affichage de données</title>
    </head>
    <body>
    <?php include ('header.php'); ?>
        <div align="center"><h2>AJOUT INFORMATION</h2></div>
            <form action="resultat.php" method="POST">
                <table border="0" align="center" cellspacing="2" cellpadding="2">
                    <tr align="right">
                        <td>Nom : </td>
                    <td><input type="text" name="nom" id="nom"></td>
                    </tr>
                    <tr align="right">
                        <td>Prénom(s) : </td>
                    <td><input type="text" name="prenom" id="prenom"></td>
                    </tr>
                    <tr align="right">
                        <td>Adresse : </td>
                    <td><input type="text" name="adresse" id="adresse"></td>
                    </tr>
                    <tr align="right">
                        <td>Adresse mail : </td>
                    <td><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr align="right">
                        <td>Numéro de téléphone : </td>
                    <td><input type="text" name="telephone" id="telephone"></td>
                    </tr>
                
                    <tr align="center">
                    <td colspan="2"><input type="submit" name="Ajouter" value="Ajouter"><input type="reset" value="Effacer"></td>
                    </tr>
                </table>
            </form>
    </body>
    <?php include ('footer.php'); ?>

</html>


