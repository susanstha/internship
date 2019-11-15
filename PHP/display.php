<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
</head>
<body>

    <?php

        $name = $password = "";
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $password = $_POST["password"];
    
            }
        echo "<h2>Your Input are:</h2>";
        echo "<h4>".$name."<h4>";
        echo "<h4>".$password."<h4>";
    ?>
    
</body>
</html>