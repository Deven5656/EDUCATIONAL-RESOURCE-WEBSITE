<?php
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
   <title>Dev</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
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

<!-- home section starts  -->

<section class="search">
   <div class="srch1">
       <input id="srch" type="search" placeholder="Search" aria-label="Search" onchange="openPage()">
       <button class="btn btn-outline-success" type="submit">Search</button>
   </div>
  </section>
        

<!-- home section ends -->

<!-- subjects section starts  -->

<section class="notes">

   <h1 class="heading">BRANCH</h1>

   <div class="box-containerdev">

      <div class="box">
         <img src="image/fe.png" alt="">
         <h3>FE</h3>
         <a class="butnote" href="fe.php">
        <button>CLICK ME</button>
       </a>
       
      </div>

      <div class="box">
         <img src="image/it.jfif" alt="">
         <h3>INFORMATION TECHNOLOGY</h3>
         <a class="butnote" href="it.php">
            <button>CLICK ME</button>
           </a>
      </div>

      <div class="box">
         <img src="image/comp.jfif" alt="">
         <h3>COMPUTERS</h3>
         <a class="butnote" href="#">
            <button>CLICK ME</button>
           </a>
      </div>

     
      <div class="box">
         <img src="image/mech.png" alt="">
         <h3>MECHANICAL ENG</h3>
         <a class="butnote" href="#">
            <button>CLICK ME</button>
           </a>
      </div>

      <div class="box">
         <img src="image/electic.jfif" alt="">
         <h3>ELECTRICAL ENG</h3>
         <a class="butnote" href="#">
            <button>CLICK ME</button>
           </a>
      </div>
      <div class="box">
         <img src="image/civil.png" alt="">
         <h3>CIVIL ENG</h3>
         <a class="butnote" href="#">
            <button>CLICK ME</button>
           </a>
      </div>

      <div class="box">
         <img src="image/electro.jfif" alt="">
         <h3>ELECTRONIC & TELECOMMUNICATION</h3>
         <a class="butnote" href="#">
            <button>CLICK ME</button>
           </a>
      </div>
   </div>

</section>

<!-- subjects section ends -->

<!-- CHAT BAR BLOCK -->
<div class="chat-bar-collapsible">
   <button id="chat-button" type="button" class="collapsible">Chat with us!
       <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
   </button>

   <div class="content">
       <div class="full-chat-block">
           <!-- Message Container -->
           <div class="outer-container">
               <div class="chat-container">
                   <!-- Messages -->
                   <div id="chatbox">
                       <h5 id="chat-timestamp"></h5>
                       <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                   </div>

                   <!-- User input box -->
                   <div class="chat-bar-input-block">
                       <div id="userInput">
                           <input id="textInput" class="input-box" type="text" name="msg"
                               placeholder="Tap 'Enter' to send a message">
                           <p></p>
                       </div>

                       <div class="chat-bar-icons">
                           <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                               onclick="heartButton()"></i>
                           <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                               onclick="sendButton()"></i>
                       </div>
                   </div>

                   <div id="chat-bar-bottom">
                       <p></p>
                   </div>

               </div>
           </div>

       </div>
   </div>

</div>

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



