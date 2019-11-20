<!DOCTYPE html>
<?php
    // Start the session
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?php
                // Set session variables
                $_SESSION["favcolor"] = "green";
                $_SESSION["favanimal"] = "cat";
                echo "Session variables are set.";
            ?>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?php
                // Echo session variables that were set on previous page
                echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
                echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
            ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>