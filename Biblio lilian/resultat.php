<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Affichage du résultat</title>
    </head>
    <body>
    <?php include ('header.php'); ?>
        <div align="center"><h2>RESULTAT DE LA SAISIE</h2></div>
            <?php include('db_connect.php'); 

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }else 
                {
                    //Nom:
                    $nom     = $_POST["nom"] ;
                    //Prenom:
                    $prenom = $_POST["prenom"] ;
                    //Adresse:
                    $adresse = $_POST["adresse"] ;
                    //Adresse mail:
                    $mail    = $_POST["email"] ;
                    //Numéro de téléphone:
                    $tel       = $_POST["telephone"] ;


                    //Création de la requête SQL:
                    $sql = "INSERT INTO client (nom, prenom, adresse, email, telephone) VALUES ('$nom', '$prenom', '$adresse', '$mail', '$tel')" ;
                    

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully<br>"; 
                            echo "Nom : ".$nom."<br>";
                            echo "Prénom(s) : ".$prenom."<br>"; 
                            echo "Adresse : ".$adresse."<br>";
                            echo "Mail : ".$mail."<br>"; 
                            echo "Téléphone : ".$tel; 

                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
               
                $conn->close();
		    ?>
    <?php include ('footer.php'); ?>
    </body>
</html>

