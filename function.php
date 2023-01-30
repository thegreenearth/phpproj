<!DOCTYPE html>
<html>
<head>
<style>
div {
            align-self: start;
            width: 30%;
            border: 5px solid green;
            padding-left: 50px;
            padding-top: 20px;
            margin: auto;
    }
.divIn{
            width: 30%;
            border: 2px solid red;
            padding-left: 30px;
            margin: 5px;
    }
h2{
    font-family: "Times New Roman", Times, serif;
}
</style>
</head>
<body>
<div>
<h1>User Define Function.</h1>
<hr>
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
    <?php 
    isset( $_POST['mode'] ) ? $mode = $_POST['mode'] : $mode = "";
    isset( $_POST['num1'] ) ? $num1 = $_POST['num1'] : $num1 = "";
    isset( $_POST['num2'] ) ? $num2 = $_POST['num2'] : $num2 = "";
    settype($num1,'int');
    settype($num2,'int');
    echo "<h3>";
    echo "<br>Number1 = ".$num1."<br>";
    echo "Number2 = ".$num2."<br>";
    echo "</h3>";
    echo "<h1>ประมวลผลด้วยโหมด: ". $mode."</h1>";
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
//Mode Checking
echo "<h1>";         
    if($mode=="Add"){
        add($num1, $num2); // Call Function
    }elseif($mode=="Subtract"){
        $result = Subtract($num1, $num2); // Call Function
        echo $num1. " - " .$num2. " = ". $result;
    }elseif($mode=="Multiply"){
        Multiply(); // Call Function
    }elseif($mode=="Division"){
        $result = Division(); // Call Function
        echo $num1. " / " .$num2. " = ". $result;
    }else{
        echo "Can't Process.";
    }
echo "</h1>";   

    ?>
</div>

</body>
</html>

