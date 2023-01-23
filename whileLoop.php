<!DOCTYPE HTML>
<html>
    <style>
        div {
            align-self: start;
            width: 30%;
            border: 5px solid green;
            padding-left: 20px;
            padding-top: 20px;
            margin: auto;
        }
        .divIn{
            width: 30%;
            border: 2px solid red;
            padding-left: 30px;
            margin: 5px;
        }
    </style>
<body>
<div>
<form action="WhileLoop.php" method="post">
กรุณากรอกตัวเลข: <input type="text" name="num">
<input type="submit">
</form>
<h1>สูตรคูณแม่ <?php echo $_POST["num"]; ?>
<?php
    $count = 1;
    $num = $_POST["num"];
    settype($num,'int');
    echo "<h2>การทำซ้ำแบบ While Loop:</h2>";
    echo "<hr>";
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
    $count = 1;
    $num = $_POST["num"];
    settype($num,'int');
    echo "<h2>การทำซ้ำแบบ Do While Loop:</h2>";
    echo "<hr>";
    do{
        $sum = $num * $count;
        echo "<div class='divIn'>";
        echo $num. "*". $count. " = ". $sum;
        $count++;
        echo "<br>";
        echo "</div>";
    }while($count <= 12);
?>
<?php
    $num = $_POST["num"];
    settype($num,'int');
    echo "<h2>การทำซ้ำแบบ for Loop:</h2>";
    echo "<hr>";
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
