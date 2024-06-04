<?php
require("config.php");

$name = $_GET['name'];
$id =$_GET['id'];
$query = "DELETE FROM `message` WHERE name ='$name'";
$query1 = "DELETE FROM `docs` WHERE id ='$id'";
$data = mysqli_query($conn,$query);
$data1 = mysqli_query($conn,$query1);

if($data || $data1)
{
    ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/deven/display.php" />

<?php
    echo"
    <script>
    alert('Deleted Successfully');
    window.location.href='display.php';
    </script>
    ";

}
else
{
    echo"
    <script>
    alert('Failed to Delete');
    window.location.href='display.php';
    </script>
    ";

}


?>