<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
?>
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'myDBPDO';

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    }
    catch(PDOException $e){
        echo "Not Connected: " .$e->getMessage();
    }
?>