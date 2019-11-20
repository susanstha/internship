<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?php
                class Student {
                // Properties
                public $name;
                public $level;

                // Methods
                function set_name($name) {
                    $this->name = $name;
                }
                function set_level($level) {
                    $this->level = $level;
                }
                function get_name() {
                    return $this->name;
                }
                function get_level() {
                    return $this->level;
                }
                }
                $Susan = new Student();
                $Susan->set_name('Susan Shrestha');
                $Susan->set_level('Bachelor');


                echo $Susan->get_name();
                echo "<br>";
                echo $Susan->get_level();
            ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>