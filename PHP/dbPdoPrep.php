<?php
    include 'dbPdoConn.php';

     // prepare sql and bind parameters
     $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
     VALUES (:firstname, :lastname, :email)");
     $stmt->bindParam(':firstname', $firstname);
     $stmt->bindParam(':lastname', $lastname);
     $stmt->bindParam(':email', $email);
 
     // insert a row
     $firstname = "Bon";
     $lastname = "Doe";
     $email = "bon@example.com";
     $stmt->execute();
 
     // insert another row
     $firstname = "Bary";
     $lastname = "Moe";
     $email = "bary@example.com";
     $stmt->execute();
 
     // insert another row
     $firstname = "Lesse";
     $lastname = "Dooley";
     $email = "lesse@example.com";
     $stmt->execute();

     $conn = NULL;

?>