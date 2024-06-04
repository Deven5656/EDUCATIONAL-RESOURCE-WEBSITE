<html>
<head>
    <title>View Document</title>
</head>
<style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
</style>

<body>

<?php
require("config.php");

if(isset($_GET['id']))
{
    $file=$_GET['id'];
    $query="SELECT * FROM `docs` WHERE id='$file'";
    $result=mysqli_query($conn,$query);

    $data=mysqli_fetch_assoc($result);
    
    if($data){
        $fileread= $data['file_name'];
        header("Content-type: application/pdf");
        header('Content-Dispostion: inline;fliename="'.$fileread.'"');
        header('Content-Transfer-Encoding: binary');
        @readfile($fileread);
       }

}
else
{
    echo "Error";
}

?>
    
</body>
</html>