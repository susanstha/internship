<?php
    include 'dbPdoConn.php';

    $sql = "CREATE DATABASE myDBPDO";
    // use exec() because no results are returned
    $conn->exec($sql);

    $conn = null;


?>