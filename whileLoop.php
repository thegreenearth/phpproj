<!DOCTYPE HTML>
<html>
    <style>
        div {
            align-self: start;
            width: 40%;
            border: 5px solid green;
            padding: 5px;
            margin: auto;
        }
        .divIn{
            width: 35%;
            border: 2px solid red;
            padding: 3px;
            margin: auto;
        }
    </style>
<body>
<div>
<form action="WhileLoop.php" method="post">
กรุณากรอกตัวเลข: <input type="text" name="num">
<input type="submit">
</form>

<?php
    $count = 1;
    $num = $_POST["num"];
    settype($num,'int');
    echo "<h2>การทำซ้ำแบบ While Loop:</h2>";
    while($count <= 12){
        $sum = $num * $count;
        echo "<div class='divIn'>";
        echo $num. "*". $count. " = ". $sum;
        $count++;
        echo "<br>";
        echo "</div>";
    }
?>
<?php
    $num = $_POST["num"];
    settype($num,'int');
    echo "<h2>การทำซ้ำแบบ for Loop:</h2>";
    for($count=1;$count<=12;$count++){
        $sum = $num * $count;
        echo "<div class='divIn'>";
        echo $num. "*". $count. " = ". $sum;
        echo "<br>";
        echo "</div>";
    }
?>
</div>
</body>
</html>
