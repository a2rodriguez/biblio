<!Doctype html>
<html>
    <head>
        
        <meta charset="UTF-8"/>
        <title>Affichage de données</title>
    </head>
    <body>
    <?php include ('header.php'); ?>
        <div align="center"><h2>AFFICHAGE DE DONNEES</h2></div>
            <?php include('db_connect.php'); 

            $sql = "SELECT * FROM client";
            $result = $conn->query($sql);
            //$i=0;

            if ($result->num_rows > 0) {
                // output data of each row
                
                while($row = $result->fetch_assoc()) {
                    
                    echo "#ID : ".$row['ID_Client']."<br>";
                    echo "Nom : ".$row['Nom']."<br>";
                    echo "Prénom(s) : ".$row['Prenom']."<br>";
                    echo "Adresse : ".$row['Adresse']."<br>";
                    echo "Mail : ".$row['Email']."<br>";
                    echo "Téléphone :".$row['telephone']."<br><br>";
   
                }
            } else {
                echo "0 results";
            }
            //echo "Nombre d'nregistrement(s) : ".echo $i;
            $conn->close();
		    ?>
    <?php include ('footer.php'); ?>
    </body>
</html>


