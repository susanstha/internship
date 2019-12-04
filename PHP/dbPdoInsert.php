<?php
    include 'dbPdoConn.php';

    // Insert Stmt

    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";
    // $conn->exec($sql);

    // Multiple Insert 

     // begin the transaction
     $conn->beginTransaction();
     // our SQL statements
     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('Jon', 'Doe', 'john@example.com')");
     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('Mary', 'Moe', 'mary@example.com')");
     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('Julie', 'Dooley', 'julie@example.com')");
 
     // commit the transaction
     $conn->commit();
    $conn=NULL;
?>