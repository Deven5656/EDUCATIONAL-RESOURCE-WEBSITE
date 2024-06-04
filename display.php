<?php
session_start();
echo "Welcome ".$_SESSION['user_name'];

?>
<html lang="en">
<head>
    <title>Display</title>
    <style>

        body
        {
            background: #d071f9;
        }

        table
        {
            background-color: white;
            border-collapse: collapse;
            width: 90%;
        }
                th, td {
                    padding: 8px;
                    text-align: center;
                    border-bottom: 1px solid #ddd;
                }

                tr:hover {
                    background-color: green;
                    }

        .delete,.view
        {
          color: white;
          background-color: red;
          border:0;
          border-radius:5px;
          height: 23px;
          width:80px;
          font-weight:bold;
          cursor:pointer;
          outline:none;
          text-align:center;
          border:1px solid black;
        }
.view{
  background-color: yellow;
  color: black;
  
}

    </style>
</head>





<?php
include("config.php");
error_reporting(0);

$userprofile = $_SESSION['user_name'];

if($userprofile==true)
{

}
else{
  header('location:login.php');
}


$query = "SELECT * FROM message";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0)
{
  ?>
<h2 align="center"><mark>Textbox Messages</mark></h2>
  <center><table border="1" cellspacing="7" width="80%">
    <tr>
    <th width="10%">NAME</th>
    <th width="20%">EMAIL</th>
    <th width="10%">PHONE NO</th>
    <th width="50%">MESSAGE</th>
    <th width="5%">Operation</th>
    <tr>

  <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['msg']."</td>

        <td>
        <a href='delete.php?name=$result[name]'><input type='sumbit' value='Delete' class='delete'></a>
        </td>
        <tr>";
    }
}
else
{
    echo "No records found";
}

?>
</table>





<?php


$query1 = "SELECT * FROM reg";
$data1 = mysqli_query($conn, $query1);

$total1 = mysqli_num_rows($data1);

if($total1 != 0)
{
  ?>
<section><h2 align="center"><mark>USERS DETAIL</mark></h2>
  <center><table border="1" cellspacing="7" width="80%">
    <tr>
    <th width="10%">NAME</th>
    <th width="10%">USERNAME</th>
    <th width="20%">EMAIL</th>
    <th width="10%">PASSWORD</th>
    <tr>
</section>
  <?php
    while($result1 = mysqli_fetch_assoc($data1))
    {
        echo "<tr>
        <td>".$result1['full_name']."</td>
        <td>".$result1['username']."</td>
        <td>".$result1['email']."</td>
        <td>".$result1['password']."</td>
        <tr>";
    }
}
else
{
    echo "No records found";
}

?>
</table>

<table>
  <?php
$query2 = "SELECT * FROM `docs`";
$data2 = mysqli_query($conn, $query2);

$total2 = mysqli_num_rows($data2);

if($total2>0)
{
  ?>
<h2 align="center"><mark>Uploaded Material</mark></h2>
  <center><table border="1" cellspacing="7" width="80%">
    <tr>
    <th width="10%">NAME</th>
    <th width="20%">EMAIL</th>
    <th width="30%">DESCRIPTION</th>
    <th width="20%">FILE NAME</th>
    <th width="10.2%">ACTION</th>
    <tr>

  <?php
    while($result = mysqli_fetch_assoc($data2))
    {
        echo "<tr>
        <td>".$result['username']."</td>
        <td>".$result['email']."</td>
        <td>".$result['Discript']."</td>
        <td>".$result['file_name']."</td>

        <td>
        <a href='view.php?id=$result[id]'><input type='sumbit' value='VIEW' class='view'></a>
    
        <a href='delete.php?id=$result[id]'><input type='sumbit' value='Delete' class='delete'></a>
        </td>
        <tr>";
    }
}
else
{
    echo "No records found";
}

?>
</table>

</center>



<a href="logout.php"><input type="submit" name="" value="LOGOUT" style="background: blue; color:white; height:35px; width: 100px; margin: top 20px;"></a>
</html>