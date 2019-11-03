<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JS</title>
</head>
<body>
    <h1>My first JS file</h1>
    <div id="root"></div>
    <!-- <button onclick="one()">Click Me</button> -->

    <script type="text/javascript">
        // document.write("<hr>");
        // document.write("Hello World Wide Web");
        // document.write("<hr>");
        var x = 10;
        var y = 20;
        var z = x+y;
        console.log(z)
        document.getElementById("root").innerHTML = z;
        // function one() {
        //     alert("This is an Alert method");
        //     confirm("Are you sure?");
        //     prompt("What is your student id number?");
        // }
    </script>
    <!-- <script src="first.js"></script> -->
</body>
</html>