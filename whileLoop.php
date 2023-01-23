<!DOCTYPE HTML>
<html>
    <style>
        div {
            align-self: start;
            width: 50%;
            border: 5px solid green;
            padding: 5px;
            margin: 10px;
        }
        .divIn{
            width: 45%;
            border: 3px solid red;
            padding: 2px;
            margin: 5px;
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
    while($count <= 12){
        $sum = $num * $count;
        echo "<div class='divIn'>";
        echo $num. "*". $count. " = ". $sum;
        $count++;
        echo "<br>";
        echo "</div>";
    }
?>
</div>
</body>
</html>
