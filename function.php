<!DOCTYPE HTML>
<html>
    <style>
        
    </style>
<!DOCTYPE html>
<html>
<head>
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
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body>
<div>
<h1>Dese User Define Function.</h1>

<form action="function.php" method="post">
กรุณากรอกตัวเลข: <br>
ระบุตัวเลขตัวที่ 1: <input type="text" name="num1"><br>
ระบุตัวเลขตัวที่ 2: <input type="text" name="num2"><br>
กรุณาเลือกโหมดประมวลผล: <br><select name="mode">
<option value="" disabled selected>เลือกโหมด</option>
    <option value="Add">บวก</option>
    <option value="Subtract">ลบ</option>
    <option value="Multiply">คูณ</option>
    <option value="Division">หาร</option>
</select>
<input type="submit">
</form>
<h1>การประมวลผลด้วยโหมด:
    <?php 
    isset( $_POST['mode'] ) ? $mode = $_POST['mode'] : $mode = "";
    isset( $_POST['num1'] ) ? $num1 = $_POST['num1'] : $num1 = "";
    isset( $_POST['num2'] ) ? $num2 = $_POST['num2'] : $num2 = "";
    settype($num1,'int');
    settype($num2,'int');
 
    //Add Function
    function add($num1, $num2){
        $sum = $num1 + $num2;
        echo $num1. " + " .$num2. " = ". $sum;
    }
    //Subtract Function
    function Subtract($num1, $num2){
        $result = $num1 - $num2;
        return $result;
    }
    //Multiply Function
    function Multiply(){ 
        isset( $_POST['mode'] ) ? $mode = $_POST['mode'] : $mode = "";
        isset( $_POST['num1'] ) ? $num1 = $_POST['num1'] : $num1 = "";
        isset( $_POST['num2'] ) ? $num2 = $_POST['num2'] : $num2 = "";
        settype($num1,'int');
        settype($num2,'int');
        $total = $num1 * $num2;
        echo $num1. " * " .$num2. " = ". $total;
    }
    //Multiply Function
    function Division(){ 
        isset( $_POST['mode'] ) ? $mode = $_POST['mode'] : $mode = "";
        isset( $_POST['num1'] ) ? $num1 = $_POST['num1'] : $num1 = "";
        isset( $_POST['num2'] ) ? $num2 = $_POST['num2'] : $num2 = "";
        settype($num1,'int');
        settype($num2,'int');
        $result = $num1 / $num2;
        return $result;
    }
        
        
        echo $mode."<br>";
        if($mode=="Add"){
            add($num1, $num2);
        }elseif($mode=="Subtract"){
            $result = Subtract($num1, $num2);
            echo $num1. " - " .$num2. " = ". $result;
        }elseif($mode=="Multiply"){
            Multiply();
        }elseif($mode=="Division"){
            $result = Division();
            echo $num1. " / " .$num2. " = ". $result;
        }else{
            echo "Can't Process.";
        }
        

    ?>
</div>

</body>
</html>

