<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>JavaScript Array Sort</h2>

    <p>Click the buttons to sort the array alphabetically or numerically.</p>
    
    <button onclick="myFunction1()">Sort Alphabetically</button>
    <button onclick="myFunction2()">Sort Numerically</button>
    
    <p id="demo"></p>
    
    <script>
    var points = [40, 100, 1, 5, 25, 10];
    document.getElementById("demo").innerHTML = points;  
    
    function myFunction1() {
        points.sort();
        document.getElementById("demo").innerHTML = points;
    }
    function myFunction2() {
        points.sort(function(a, b){return a - b});
        document.getElementById("demo").innerHTML = points;
    }
    </script>
    <script>
        var a = {
            name: 'porsche',
            brand: 'sth',
            cost: 'num'
        };
        console.log(a["name"]);
        console.log(a.brand);
    </script>
</body>
</html>