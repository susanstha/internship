<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h4>Simple Multiplication Function</h> <br>
            <?php
                function mulNumbers($number1, $number2) {
                    $result = $number1 * $number2;
                    return $result;
                }
                echo "5 * 10 = " . mulNumbers(5, 10) . "<br>";
                echo "7 * 13 = " . mulNumbers(7, 13) . "<br>";
                echo "2 * 4 = " . mulNumbers(2, 4); 
            ?>
        </div>
   </div>

   <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h4>Array</h> <br>
            <?php
                $bike = array("V1", "V2", "V3");
                echo $bike[0];
                echo "<br>";
                echo $bike[1];
                echo "<br>";
                echo $bike[2];
            ?>
        </div>
   </div>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>