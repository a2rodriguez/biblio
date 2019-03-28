<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Affichage de données</title>
    </head>
    <body>
    <?php include ('header.php'); ?>
        <div align="center"><h2>SUPPRESSION DE DONNEES</h2></div>

            <?php include('db_connect.php'); ?>


            <form method="POST" action="">
            <table border="0" align="center" cellspacing="2" cellpadding="2">
                <tr align="right">
                    <td>ID à supprimer : </td>
                <td><input type="text" name="id"></td>
                </tr>
                
                <td colspan="2"><input type="submit" name="suppr" value="Supprimer">
                <input type="reset" value="Effacer"></td>
                </tr>
            </table>

            <?
                $suppra = $_POST['id'];
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // sql to delete a record
                $sql = "DELETE FROM client WHERE ID_Client=".$suppra;

                if (mysqli_query($conn, $sql)) {
                    echo "Enregistrement supprimé avec succès !";
                } /*else {
                    echo "Erreur de suppresson: " . mysqli_error($conn);
                }*/

                mysqli_close($conn);
                

            ?>

<?php include ('footer.php'); ?>
    </body>
</html>




