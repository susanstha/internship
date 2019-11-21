<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?php
                include 'dataconn.php';
                // $sql = "CREATE TABLE Student(
                //     student_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                //     student_name VARCHAR(30) NOT NULL,
                //     student_address TEXT NOT NULL,
                //     student_contact VARCHAR(30) NOT NULL
                // )";
                // if ($conn->query($sql) === TRUE) {
                //     echo "Table Student created successfully";
                // } 
                // else {
                //     echo "Error creating table: " . $conn->error;
                // }

                $stmt = $conn->prepare("INSERT INTO Student(student_name, student_address, student_contact) VALUES (?,?,?)");
                $stmt->bind_param("sss", $sname, $address,$cnumber);

                $sname = $_POST["sname"];
                $address = $_POST["address"];
                $cnumber = $_POST["cnumber"];
                $stmt->execute();
            
                echo "New records created successfully";
            
                $stmt->close();

                $sql = "SELECT * FROM Student";
                $result = $conn->query($sql);

                // if ($result->num_rows > 0) {
                //     echo "<table><tr><th>ID</th><th>Student Name</th><th>Address</th><th>Contact</tr>";
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //         echo "<tr><td>".$row["student_id"]."</td><td>".$row["student_name"]."</td><td>".$row["student_address"]."</td><td>".$row["student_contact"]."</td></tr>";
                //     }
                //     echo "</table>";
                // } else {
                //     echo "0 results";
                // }
            
                $conn->close();
            ?>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($result as $key): ?>
                    <tr>
                        <td><?php echo $key["student_id"]?></td>
                        <td><?php echo $key["student_name"]?></td>
                        <td><?php echo $key["student_address"]?></td>
                        <td><?php echo $key["student_contact"]?></td>
                        <td>
                            <a href="<?php echo'dbForm.php?id='.$key["student_id"]?>">
                                <button>Edit</button>
                            </a>
                            <a href="">
                                <button>Delete</button>
                            </a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </table>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>