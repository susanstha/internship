<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JQUERY</title>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </head>
<body>
    <p id="b">Lorem ipsum</p>
    <button id="a">Click</button>
    <button id="c">Hide</button>
    <button id="d">Show</button>
<script>
    $(document).ready(function(){
        console.log("jquery started");
    });

    $("#a").click(function(){
        alert("alert")
    });

    $("#a").mouseenter(function(){
        console.log("mouse entered");
    });

    $("#a").mouseleave(function(){
        console.log("mouse left");
    });

    $("#b").css("color","red");

    $("#c").click(function(){
        $("#b").hide(1000);
    });

    $("#d").click(function(){
        $("#b").show(1000);
    });


</script>
</body>
</html>