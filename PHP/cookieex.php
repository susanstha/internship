<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "Susan Shrestha";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?php
                if(!isset($_COOKIE[$cookie_name])) {
                    echo "Cookie named '" . $cookie_name . "' is not set!";
                } else {
                    echo "Cookie '" . $cookie_name . "' is set!<br>";
                    echo "Value is: " . $_COOKIE[$cookie_name];
                }
            ?>
            <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>