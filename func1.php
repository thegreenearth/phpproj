<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
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
            //  Define Variable
            global $num1;
            global $num2;
            $num1 = 9;
            $num2 = 2;
            echo "<h2>การเรียกใช้งาน Function : ";
            //  Define Function (การสร้าง Function)
            //  1. Function ที่ไม่มี Parameter และ ไม่มีการ Return ค่า
            function add(){
                $num1 = 5; // Local variable
                $num2 = 10;
                $sum = $num1 + $num2;
                echo "<br>Add<br>";
                echo $num1. " + ". $num2. " = ". $sum;
            }
            //  2. Function ที่มี Parameter และ ไม่มีการ Return ค่า
            function subtract($num1, $num2){
                $result = $num1 - $num2;
                echo "<br>Subtract<br>";
                echo $num1. " - ". $num2. " = ". $result;              
            }

            //  Call Function (การเรียกใช้งาน Function)
            //  1. การเรียกใช้งาน Function และไม่มี Arguments
            add();
            //  2. การเรียกใช้งาน Function มี Arguments
            subtract($num1, $num2);
            


        ?>
    </div>
</body>
</html>

