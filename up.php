<?php
require("config.php");
session_start();
$userprofile = $_SESSION['user_name'];

if($userprofile==true)
{

}
else{
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<style>
#up{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
}

.btn {
          border: 2px solid gray;
          color: gray;
          background-color: white;
          padding: 8px 20px;
          border-radius: 8px;
          font-size: 20px;
          font-weight: bold;
    }


.upload-btn-wrapper input[type=file]{
  font-size: 100px;
  position: absolute;
   left: 0;
   top: 0;
   opacity: 0;
}
        
        input[type=submit] 
    {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
    }
      input[type=text], select 
    {
       width: 100%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 1px solid #ccc;
       border-radius: 4px;
       box-sizing: border-box;
       font-size: 18px;
    }

     label
     {
        font-size: 20px;
     }   
      </style>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="welcome.php" class="logo"> <i class="fa-solid fa-pen-nib"></i> EduTech </a>

   <nav class="navbar">
      
   <a href="welcome.php">HOME</a>
         <a href="dev.php">BRANCH</a>
         <a href="sv.php">VIDEOS</a>
         <a href="contact.php">CONTACT</a>
        
   </nav>

   <div class="icons">
      <h1><?php echo"".$_SESSION['user_name']?><a href="logout.php">  Logout</div></h1>
      </a>
   </div>

</header>

<!-- header section ends -->
<section>

<h1 class="heading">Upload Study Resources</h1>

<form action="up.php" method="post" enctype = "multipart/form-data">
     
<label for="fname">Your Name</label>
<input type="text" id="fname" name="username" placeholder="Enter your Name" Required>

<label for="eamil">Email</label>
<input type="text" id="fname" name="email" placeholder="Enter your Email" Required>

<label for="lname">Document</label>
<input type="text" id="lname" name="description" placeholder="Please specify Document Information" Required>


<div class="mb-3">
<label for="formFile" class="form-label"> CHOOSE FILE </label>
<input class="btn" type="file" id="formFile" name = "file" Required>
</div>  
</div>
  <p><p><br>
<input type="submit" value="Upload" name = "upload">
</form>
</section>



<!-- subjects section ends -->
<section id="top-section-main">
   <h2>About</h2>
<p>Our website is designed to provide free and conductive atmosphere for Mumbai University Students<br>
   Our aim is to impart deep disciplinary knowledge with an interdisciplinary bandwidth to the learners in order to make them problem solvers, leaders and entrepreneurs
</p>
</section>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3> <i class="fa-solid fa-pen-nib"></i> EduTech </h3>
         <p>FOLLOW FOR MORE</p>
         <div class="share">
            <a href="https://www.facebook.com/deven.gupta.12" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://instagram.com/anamika_zagade_?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="welcome.php" class="link">HOME</a>
         <a href="dev.php" class="link">BRANCH</a>
         <a href="sv.php" class="link">STUDY VIDEOS</a>
         <a href="contact.php" class="link">CONTACT</a>
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="contact.php" class="link">ASK QUESTION</a>
         <a href="contact.php" class="link">SEND FEEDBACK</a>
      </div>

     

   <div class="credit"> created by <span>MAD</span> | all rights reserved to Edutech </div>

</section>

<!-- footer section ends -->




<!-- custom js file link  -->
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts/responses.js"></script>
<script src="scripts/chat.js"></script>

</body>
</html>

<?php

if(isset($_POST['upload']))
{
$uname=$_POST['username'];
$eamil=$_POST['email'];
$dis=$_POST['description'];
$files = $_FILES['file'];

      $filename = $files['name'];
      $fileerror = $files['error'];
      $filetmp = $files['tmp_name'];

      $fileext = explode('.',$filename);
      $filecheck = strtolower(end($fileext));

      $fileextsorted = array('png','jpg','jpeg','pdf');
      if(in_array($filecheck,$fileextsorted))
      {
         $destinationfile = 'uploaded resource/'.$filename;
         move_uploaded_file($filetmp,$destinationfile);
         $query="INSERT INTO `docs`(`username`, `email`, `Discript`, `file_name`) VALUES ('$uname','$eamil','$dis','$destinationfile')";
         $result=mysqli_query($conn,$query);

         if($result)
         {
            echo"
            <script>
             alert('Uploaded Successfully');
             window.location.href='up.php';
            </script>
            ";
         }
         else{
            echo"
            <script>
             alert('Failed to Upload');
             window.location.href='up.php';
            </script>
            ";
         }

        }
}
?>