<!DOCTYPE html>
<html>
<head>
<title>การทำซ้ำ</title>
</head>
<body>
<form action="repeating.php" method="post">
  <label for="fname">กรุณากรอกข้อมูล (จำนวนเต็มบวก):</label>
  <input type="text" name="number">
  <input type="submit" value="Submit">
</form>
<h1>สูตรคูณแม่ :
    <?php 
        $num = $_POST["number"]; 
        settype($num,'int');
        echo $num;
    ?>
<?php
    $num = $_POST["number"];
    settype($num, 'int');
    echo "<h2>การทำซ้ำแบบ While Loop:</h2>";
    echo "<hr>";
    $counter = 1;
    while($counter <= 12){
        echo $num. "*". $counter. " = ". $num * $counter. "<br>";
        $counter++; //$counter = $counter + 1
    }
    
?>
<?php
    $num = $_POST["number"];
    settype($num, 'int');
    echo "<h2>การทำซ้ำแบบ Do While Loop:</h2>";
    echo "<hr>";
    $counter = 1;
    do{
        echo $num. "*". $counter. " = ". $num * $counter. "<br>";
        $counter++; //$counter = $counter + 1
    }while($counter <= 12);
    
?>
<?php
    $num = $_POST["number"];
    settype($num, 'int');
    echo "<h2>การทำซ้ำแบบ For Loop:</h2>";
    echo "<hr>";
    for($counter = 1;$counter <= 12; $counter++){
        echo $num. "*". $counter. " = ". $num * $counter. "<br>";
    }
?>
</body>
</html>