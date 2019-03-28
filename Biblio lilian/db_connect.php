<?php 

    $servername = "localhost";
    $username = "harryjo1";
    $password = "6b58Zp7hNz";
    $dbname = "harryjo1_biblio";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>