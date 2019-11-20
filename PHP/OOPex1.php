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
                class Fruit {
                public $name;
                public $color;
                public function __construct($name, $color) {
                    $this->name = $name;
                    $this->color = $color; 
                }
                protected function intro() {
                    echo "The fruit is {$this->name} and the color is {$this->color}."; 
                }
                }

                class Strawberry extends Fruit {
                public function message() {
                    echo "Am I a fruit or a berry?<br> ";
                    // Call protected function from within derived class - OK 
                    $this -> intro();
                }
                }
                $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
                $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
            ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>