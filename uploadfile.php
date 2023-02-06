<!DOCTYPE html>
<html>
        <style>
            div {
                        align-self: start;
                        width: 30%;
                        border: 5px solid green;
                        padding-left: 50px;
                        padding-right: 50px;
                        padding-top: 20px;
                        padding-bottom: 20px;
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
<body>
    <div> 
        <img src="upload/_MG_0352.JPG" width="100%">
        <hr>
        <form action=" upload.php" method="post" enctype="multipart/form-data">
        <h2>Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>
        <hr>
        &copy; <?php echo date("Y");?>
    </div>    
</body>

</html>