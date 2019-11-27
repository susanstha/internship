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
    <?php
        include 'dataconn.php';
        if (isset($_POST['sname']) && $_POST['sname'] && isset($_POST['address']) && $_POST['address'] && isset($_POST['cnumber']) && $_POST['cnumber']){
            $stmt = $conn->prepare("INSERT INTO Student(student_name, student_address, student_contact) VALUES (?,?,?)");
            $stmt->bind_param("sss", $sname, $address,$cnumber);
            $sname = $_POST["sname"];
            $address = $_POST["address"];
            $cnumber = $_POST["cnumber"];
            $stmt->execute();
            $stmt->close();

        }
        $sql = "SELECT * FROM Student ORDER BY student_id DESC";
        $result = $conn->query($sql);
    
        $conn->close();
    ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>List of Students</h1>
            <table class ="table table-dark table-hover">
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
                            <a href="<?php echo'dbForm2.php?id='.$key["student_id"]?>">
                                <button>Edit</button>
                            </a>
                            <a href="<?php echo'databaseDel.php?id='.$key["student_id"]?>">
                                <button onclick="confirm('Really?')">Delete</button>
                            </a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </table>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>

</body>
</html>