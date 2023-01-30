<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin&#39; rel='stylesheet' type='text/css'>
    <style>
        div {
            align-self: start;
            width: 30%;
            border: 5px solid purple;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 20px;
            margin: auto;
            font-family: 'Kanit', sans-serif;
        }
        .divIn{
            width: 30%;
            border: 2px solid red;
            padding-left: 30px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>การใช้งาน Function.</h1>
    <hr>
        <?php
          echo "User Define Function.";
          echo "<hr>";
          //การสร้าง Function
          // 1. ไม่มี Parameter และไม่มีการ Return ค่ากลับ
          echo "<h2>";
          function add(){
            $num1 = 5; // Local variable
            $num2 = 7;
            $sum = $num1 + $num2;
            echo "<br>Add Function<br>";
            echo $num1. " + ". $num2. " = ". $sum;
          }
          // 2. มี Parameter และไม่มีการ Return ค่ากลับ
          function sub($num1, $num2){
            $result = $num1 - $num2;
            echo "<br>Subtract Function<br>";
            echo $num1. " - ". $num2. " = ". $result;
          }
          // 3. ไม่มี Parameter มีการ Return ค่ากลับ
          function mul(){
            global $num1;
            global $num2;
            $num1 = 8; // Local variable
            $num2 = 4;
            $result = $num1 * $num2;
            echo "<br>Multiply Function<br>";
            return $result;            
          }
           // 4. มี Parameter มีการ Return ค่ากลับ
           function div($num1, $num2){
            $result = $num1 / $num2;
            echo "<br>Division Function<br>";
            return $result;            
          }
          // การเรียกใช้งาน Function (Call Function)
          add();
          echo "<br>";
          sub(5,2); //มี 2 Argument
          echo "<br>";
          $result = mul();
          echo $num1. " * ". $num2. " = ". $result;
          echo "<br>";
            $num1 = 9; 
            $num2 = 5;
          $result = div($num1, $num2);
          echo $num1. " / ". $num2. " = ". $result;
          echo "</h2>";
        ?>
    </div>
</body>
</html>