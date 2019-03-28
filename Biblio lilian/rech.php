<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Affichage de données</title>
    </head>
    <body>
    <?php include ('header.php'); ?>
        <div align="center"><h2>RECHERCHE ID</h2></div>
            <form action="recherche.php" method="POST">
                <table border="0" align="center" cellspacing="2" cellpadding="2">
                    <tr align="right">
                        <td>ID à chercher : </td>
                    <td><input type="text" name="rech" id="rech"></td>
                    </tr>
                    <td colspan="2"><input type="submit" name="Rechercher" value="Rechercher"><input type="reset" value="Effacer"></td>
                    </tr>
                </table>
            </form>
     <?php include ('footer.php'); ?>
    </body>
</html>


