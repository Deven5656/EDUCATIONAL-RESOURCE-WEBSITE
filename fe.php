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
   <title>First Year</title>

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

<section class="subjects">
    <h1 class="heading">FIRST YEAR ENGINEERING</h1>
<section>
   <h1 class="heading">SEMESTER 1</h1>

   <div class="box-containerdev">

      <div class="box">
         <img src="image/maths.png" alt="">
         <h3>Mathemetics</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1uuGJjRo1ol1NbV5IxDQEHmLHzSyUjmT4/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1n4f0hUixB_QPwE_ghM3KowXO7pmmI_zW/view?usp=sharing">
        <button>QUESTION PAPERS</button>
       </a>
      </div>

      <div class="box">
         <img src="image/phy1.jpeg" alt="">
         <h3>Physics</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1UxiO0bK1GGEJR5JVUKsfLigzEq45Ybq9/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1oRfcsKQ_9KuSNIbf_wet2NyhacH7Imld/view?usp=sharing">
         <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/chem1.jpeg" alt="">
         <h3>Chemistry</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1-rQQwIIZMan92cQIaPS8YnpMeVHiQNFr/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1lHUdubjvgaXGvUlXzBLzLeU-a_2G0d8o/view?usp=sharing">
         <button>QUESTION PAPERS</button>
        </a>
      </div>
      <div class="box">
        <img src="image/em.png" alt="">
        <h3>Mechanics</h3>
        <a class="butnote" href="https://drive.google.com/file/d/15dNhSSIOyh6VO-gsPXm8QdNk_AjCjVWv/view?usp=sharing">
            <button>PDF Notes</button>
        <a class="butnote" href="https://drive.google.com/file/d/1BQAh2mlNAKoJCUYjODo2Bw245cIb-BqP/view?usp=sharing">
        <button>QUESTION PAPERS</button>
       </a>
     </div>
     <div class="box">
        <img src="image/bee.jfif">
        <h3>Basic Electrical Engineering</h3>
        <a class="butnote" href="https://drive.google.com/file/d/1Hw4G9aKrZbADmW3peHMdI68piY47tNES/view?usp=sharing">
            <button>PDF Notes</button>
        <a class="butnote" href="https://drive.google.com/file/d/1JWiECR5uQMGluX4EABOwKgqLy2YYqlJT/view?usp=sharing">
        <button>QUESTION PAPERS</button>
       </a>
     </div>
</section>

<section>
      <h1 class="heading">SEMESTER 2</h1>
      <div class="box-containerdev">
      <div class="box">
         <img src="image/math.png" alt="">
         <h3>Mathemetics</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1IT_cVeLf3Y3ADmnzyz596wNdwwG_3OrO/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1VMlv04nVu-hEhkoeN5FBiH6kndiBAFxA/view?usp=sharing">
         <button>QUESTION PAPERS</button>
        </a>
      </div>
      <div class="box">
         <img src="image/chem2.jpeg" alt="">
         <h3>Chemistry</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1d0NxUc0XodsXqb11Mgmcspr_JHnRDdxY/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/19FaWQM_Z6SUsVRB9vyTBlNYqGWQVJBGC/view?usp=sharing">
         <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/phy2.jpeg" alt="">
         <h3>Physics</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1wmnUZNaeJT1K5KUJSHmfBvNmIkB0PnAa/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1SxsNoQT48H6FrM6pADtHtZ34Rh_EDKyj/view?usp=sharing">
         <button>QUESTION PAPERS</button>
        </a>
      </div>
      <div class="box">
        <img src="image/eg.png" alt="">
        <h3>Engg Graphics</h3>
        <a class="butnote" href="https://drive.google.com/file/d/128WSsZ0EQlJ8ioAShswJ9wddurwlw22w/view?usp=sharing">
            <button>PDF Notes</button>
        <a class="butnote" href="https://drive.google.com/file/d/1O8QO380FOIcebC1YOFYBTuRfwu3CX-Vv/view?usp=sharing">
        <button>QUESTION PAPERS</button>
       </a>
     </div>
     <div class="box">
        <img src="image/c.png" alt="">
        <h3>C programming</h3>
        <a class="butnote" href="https://drive.google.com/file/d/1ZAtF9ZcgAD6JsRU8PcUg9VPanaN6lX4X/view?usp=sharing">
            <button>PDF Notes</button>
        <a class="butnote" href="https://drive.google.com/drive/folders/1u2Mtj9nxrie-wNn0i_Kto33u46Xc37l2?usp=sharing">
        <button>QUESTION PAPERS</button>
       </a>
     </div>
</section> 


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



