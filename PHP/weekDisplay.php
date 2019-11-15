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
            <h2>Simple Form</h2>
            <form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-group">
                    <label for="name">Enter a number here</label>
                    <input type="number" id="name" class="form-control-file border" name="number" min="1" max="8">
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="submit" class="btn btn-primary btn-outline-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
   
   <?php
        $number = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            
            switch ($number) {
                case "1":
                    echo "<h1>It is SUNDAY</h1>";
                    break;
                case "2":
                    echo "<h1>It is MONDAY</h1>";
                    break;
                case "3":
                    echo "<h1>It is TUESDAY</h1>";
                    break;
                case "4":
                    echo "<h1>It is WEDNESDAY</h1>";
                    break;
                case "5":
                    echo "<h1>It is THURSAY</h1>";
                    break;
                case "6":
                    echo "<h1>It is FRIDAY</h1>";
                    break;
                case "7":
                    echo "<h1>It is SATURDAY</h1>";
                    break;
                default:
                    echo "<h1>It is awesome day</h1>";
            }
        }
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>