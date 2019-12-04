<?php
    include 'dbPdoConn.php';

    echo "<table style='border: dotted 1px black; text-align: center'>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width:150px;border:10px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }

    $conn = null;
    echo "</table>";
?>