<?php
    include 'dataconn.php';
    if (!empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT student_id FROM Student WHERE student_id = $id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $sql = "DELETE FROM Student WHERE student_id=$id";
            $conn->query($sql);
            header("Location: dbformdb.php");
         }else{
            echo "<h1>Your search result is not available in our database</h1>";
         }
    }
    $conn->close();
?>