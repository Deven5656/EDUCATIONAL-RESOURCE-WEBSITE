<?php
require("config.php");

if(isset($_POST['register']))
{
  $user_exist_query="SELECT * FROM `reg` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
  $result=mysqli_query($conn,$user_exist_query);

  if($result)
  {
    if(mysqli_num_rows($result)>0)
    {
      $result_fetch=mysqli_fetch_assoc($result);
      if($result_fetch['username']==$_POST['username'])
      {
        echo"
        <script>
         alert('$result_fetch[username] - username already taken');
         window.location.href='register.php';
        </script>
        ";
      }
      else
      {
        echo"
        <script>
         alert('$result_fetch[email] - E-mail already registered');
         window.location.href='register.php';
        </script>
        ";
      }

    }
    else
    {
     $query="INSERT INTO `reg`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
     if(mysqli_query($conn,$query))
     {
      echo"
      <script>
      alert('Registered Succesfully');
      window.location.href='login.php';
      </script>
      ";
     }
     else
     {
      echo"
      <script>
      alert('Cannot run query');
      window.location.href='register.php';
      </script>
       ";
     }
    }

  }
  else
  {
    echo"
    <script>
    alert('Cannot run query');
    window.location.href='register.php';
    </script>
    ";
  }


}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #9fffe2;">
  <a class="navbar-brand " href="home.html">✒EduTech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">

  
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>

      
     
    </ul>
  </div>
</nav>

<div class="container mt-4">
<div class="text-center">
<h3>Please Register Here:</h3></div>
<hr>
<form action="" method="post">
  <div class="form-group">
  <div class="form-group col-md-6">
      <label for="inputname">Full Name</label>
      <input type="text" class="form-control" name="fullname" id="fname" placeholder="Enter Name" Required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputusername">Username</label>
      <input type="text" class="form-control" name="username" id="uname" placeholder="Username" Required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name ="email" id="inputemail" placeholder="E-mail" Required>
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword" placeholder="Password" Required>
    </div>
   
  <button type="submit" class="btn btn-primary" name="register">Sign up</button>
    
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
