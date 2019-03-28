<!Doctype html>
<html>
    <head>
        
        <meta charset="UTF-8"/>
        <title>Affichage de données</title>
    </head>
    <body>
    <?php include ('header.php'); ?>
        <div align="center"><h2>RESULTAT DE LA RECHERCHE</h2></div>
            <?php include('db_connect.php'); 

            $mitady = $_POST['rech'];
            $sql = "SELECT * FROM client WHERE ID_Client=". $mitady;
            $result = $conn->query($sql);
            //$i=0;

            if ($result->num_rows > 0) {
                /* output data of each row */ 
                
                if ($row = $result->fetch_assoc()){
                /*while($row = $result->fetch_assoc()) {*/
                    
                    echo "#ID : ".$row['ID_Client']."<br>";
                    echo "Nom : ".$row['Nom']."<br>";
                    echo "Prénom(s) : ".$row['Prenom']."<br>";
                    echo "Adresse : ".$row['Adresse']."<br>";
                    echo "Mail : ".$row['Email']."<br>";
                    echo "Téléphone :".$row['Telephone']."<br><br>";
   
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


