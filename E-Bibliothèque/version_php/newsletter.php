<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>CONTACT</title>
	<link href="style/style2.css" rel="stylesheet"/>
</head>

<body>
	<?php include ('header.php'); ?>
	<div class="sisiny">
		<br>
<?php
    // S'il y des données de postées
    //if ($_SERVER['REQUEST_METHOD']=='POST') {
	if (isset($_POST['envoyer'])) {
      // (1) Code PHP pour traiter l'envoi de l'email
    
      // Récupération des variables et sécurisation des données
      $nom = htmlentities($_POST['anarana']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
      $prenom = htmlentities($_POST['fanarana']);
      //$objet = htmlentities($_POST['objet']);
      $email = htmlentities($_POST['mailaka']);
      $message = htmlentities($_POST['message']);
    
      // Variables concernant l'email
    
      $destinataire = 'az.raharijaona@gmail.com'; // Adresse email du webmaster (à personnaliser)
      $contenu = '<html><head><title> '.$objet.' </title></head><body>';
	  //$contenu .= '<div align="center">';
	  $contenu .= '<table align="center" width=60%>';
	  $contenu .= '<tr><td>';
	  $contenu .= '<h2>Quoi de neuf !</h2>';
	  $contenu .= '</td></tr>';	  
  	  $contenu .= '</table><br>';

	  //$contenu .= '<table align="center" width=50%><tr><td>';
	  $contenu .= '<table align="center" width=60%><tr><td>';
	  $contenu .= '<img src="harry-john.org/simplon/cv/images/nl.jpg">'; //Attention tsy misy http:// sy ny www
  	  $contenu .= '</td></tr></table>';
	  
	  $contenu .= '<table align="center" bgcolor=lightblue width=60%>';
	  //$contenu .= '<table align="center" bgcolor=lightblue>';
	  $contenu .= '<tr><td>';
      $contenu .= '<p>Vos information chez «BOOKINER.FR»</p>';
	  //$contenu .= '<p>--------------------------------</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
      $contenu .= '<p><strong>Prénom(s)</strong>: '.$prenom.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
	  $contenu .= '</td></tr>';	  
  	  $contenu .= '</table>';
  	  $contenu .= '<table align="center" width=60%><tr><td valign="top">';
	  //$contenu .= '<table><tr><td valign="top">';
  	  $contenu .= 'Contact : mailto:contact@bookiner.fr | Téléphone : 09.xx.xx.xx.xx';	  
  	  $contenu .= '</td></tr></table>';	  
	  //$contenu .= '</div>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
    
      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
	  //$headers .= 'From:'.$nom.' <'.$email.'>'."\r\n" .'Reply-To:'.$email."\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8'."\r\n"; //iso-8859-1
    
      // Envoyer l'email
      mail($destinataire, 'Newsletter en la personne de '.$nom.' '.$prenom, $contenu, $headers); // Fonction principale qui envoi l'email
	  echo '<script>alert("Le message a été envoyé avec succés ! \n Redirection vers le formulaire de contact");</script>';
      echo '<script>document.location.href = "contact.php";</script>';      
	  //header("location:form.php"); // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>
	</div>
	<?php include ('footer.php'); ?>
</body>
</html>
