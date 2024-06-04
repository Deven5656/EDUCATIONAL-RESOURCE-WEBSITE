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
   <title>NOTES</title>

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
<h1 class="heading">INFORMATION TECHNOLOGY</h1>
<section class="subjects">

   <h1 class="heading">SEMESTER 3</h1>

   <div class="box-containerdev">

      <div class="box">
         <img src="image/m.jfif" alt="">
         <h3>Mathemetics</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1C6QUnkCUxeIqbxsRJw5aM_KIczaphHhm/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1M39Be9dcmK1X3dMDdmDLRaPLhsextVFM/view?usp=sharing">
        <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/dsa.png" alt="">
         <h3>DSA</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1LciY34Ej0oTV-pxZr-gH-F_Wzt3fmQrh/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1EyCGnR5csFAv8anSePcgV3mWW8GS6SQx/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/dbms.jpeg" alt="">
         <h3>DBMS</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1vlhMA9fhqoW-6SMGDrw0d1Gr4bgXpFAV/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1riHUU5Oq3H9BR2Cc8Uxerw2QYfD_AFFk/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/poc.jfif" alt="">
         <h3>POC</h3>
         <a class="butnote" href="https://drive.google.com/drive/folders/1lI3Wq0dpDa9AdFyvbxcn9DcMIY_PiHxg?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1kxkRjEUFK9xn3crCvYUUDX2E1YeTQDbf/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>
      <div class="box">
         <img src="image/pcpf.jfif" alt="">
         <h3>PCPF</h3>
         <a class="butnote" href="https://drive.google.com/drive/folders/14CZEQoxlyYQ8kHOU_gjRPzCxM6wHB9Pd?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1UzGnqPDDzygb-KR8cIpf8efduIKHIdDU/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>
   </section>

      <section class="subjects">
         <h1 class="heading">SEMESTER 4</h1>

   <div class="box-containerdev">

      <div class="box">
         <img src="image/maths.png" alt="">
         <h3>mathemetics</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1gO8vZnq4cws5UhzB39JotUp6uLMSrSS-/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1nuoG6Hjf2La5LvXt9W6beT155FoX8l7a/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/cnnd.png" alt="">
         <h3>CNND</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1NeiUrzkOvpIHw8GMp7Q74pPfRPe1jmt0/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1hoGU3YHj8sl64g7IKb-irwRfng0-4PI3/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/coa.png" alt="">
         <h3>COA</h3>
         <a class="butnote" href="https://drive.google.com/drive/folders/12AXrV1INb3bqavsSMoGFFGnebEh6filr?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1K89hoWfQeqoW4TN6dOIZEKAytVeVczRd/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>

      <div class="box">
         <img src="image/ip.jpeg" alt="">
         <h3>AUTOMATA THEORY</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1XdxEaXV4CRhxs8xIH87iDwQj4bolAMvD/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1fydSafB0Ez8M_QpKtRziUoR8fT4jsOYu/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>
      <div class="box">
         <img src="image/os.jfif" alt="">
         <h3>Operating System</h3>
         <a class="butnote" href="https://drive.google.com/file/d/1dTUA32iEF_YFPa6z5RdJgx-Es24M5X1Q/view?usp=sharing">
            <button>PDF Notes</button>
         <a class="butnote" href="https://drive.google.com/file/d/1MvTDRblzg2oVMltdJH7W4vnhsEazHoRy/view?usp=sharing">
            <button>QUESTION PAPERS</button>
        </a>
      </div>
      </section>
      

      <section class="subjects">

         <h1 class="heading">SEMESTER 5</h1>
      
         <div class="box-containerdev">
      
            <div class="box">
               <img src="image/ip1.jpeg" alt="">
               <h3>INTERNET PROGRAMMING</h3>
               <a class="butnote" href="https://drive.google.com/file/d/1_wD0DkNzQb47MQ952bnWoghEn6NcGHq0/view?usp=sharing">
                  <button>PDF Notes</button>
               <a class="butnote" href="https://drive.google.com/file/d/1EXIEpbE6JDFBJ5lQvRyzc5PoGKivp1JJ/view?usp=sharing">
               <button>QUESTION PAPERS</button>
              </a>
            </div>
      
            <div class="box">
               <img src="image/se.jpeg" alt="">
               <h3>SOFTWARE ENGINEERING</h3>
               <a class="butnote" href="https://drive.google.com/file/d/1Y458QGo2IOqXqJSjui8bDd-g-XJLAQly/view?usp=sharing">
                  <button>PDF Notes</button>
               <a class="butnote" href="https://drive.google.com/file/d/1haWEZP0kgVmx-cUBi1ZPXdaJaFIIjC0u/view?usp=sharing">
               <button>QUESTION PAPERS</button>
              </a>
            </div>
      
            <div class="box">
               <img src="image/admt.jpeg" alt="">
               <h3>ADMT</h3>
               <a class="butnote" href="https://drive.google.com/drive/folders/1aECfjUmWvlAfmfAXciH4k6DvPdHU-JlK?usp=sharing">
                  <button>PDF Notes</button>
               <a class="butnote" href="https://drive.google.com/file/d/1haWEZP0kgVmx-cUBi1ZPXdaJaFIIjC0u/view?usp=sharing">
               <button>QUESTION PAPERS</button>
              </a>
            </div>
      
            <div class="box">
               <img src="image/eb.jpeg" alt="">
               <h3>E AND EB</h3>
               <a class="butnote" href="https://drive.google.com/file/d/1rVrkTnTQE8SVn73M5TD8RG-PxvBjylE3/view?usp=sharing">
                  <button>PDF Notes</button>
               <a class="butnote" href="https://drive.google.com/file/d/1-e_gUfVXsZqsmBNC9q7kroX0jK9jK5SW/view?usp=sharing">
              <button>QUESTION PAPERS</button>
              </a>
            </div>
            <div class="box">
               <img src="image/cns.jpeg" alt="">
               <h3>NETWORK SECURITY</h3>
               <a class="butnote" href="https://drive.google.com/file/d/1FTyR2dDPIOthH6-8hP7-E5kKbO9b_iV0/view?usp=sharing">
                  <button>PDF Notes</button>
               <a class="butnote" href="https://drive.google.com/file/d/1f5jjLZgbB3q1TUqefUdygTBQu1KtyIzA/view?usp=sharing">
              <button>QUESTION PAPERS</button>
              </a>
            </div>
         </section>
      
            <section class="subjects">
               <h1 class="heading">SEMESTER 6</h1>
      
         <div class="box-containerdev">
      
            <div class="box">
               <img src="image/mining.jpeg" alt="">
               <h3>DATA MINING AND BI</h3>
               <a class="butnote" href="#">
                  <button>PDF Notes</button>
               <a class="butnote" href="#">
              <button>QUESTION PAPERS</button>
              </a>
            </div>
      
            <div class="box">
               <img src="image/webx.jpeg" alt="">
               <h3>WEB X</h3>
               <a class="butnote" href="#">
                  <button>PDF Notes</button>
               <a class="butnote" href="#">
              <button>QUESTION PAPERS</button>
              </a>
            </div>
      
            <div class="box">
               <img src="image/wireless.jpeg" alt="">
               <h3>WIRELESS TECHNOLOGY</h3>
               <a class="butnote" href="#">
                  <button>PDF Notes</button>
               <a class="butnote" href="#">
              <button>QUESTION PAPERS</button>
              </a>
            </div>
      
            <div class="box">
               <img src="image/aids.jpeg" alt="">
               <h3>AI & DS 1</h3>
               <a class="butnote" href="#">
                  <button>PDF Notes</button>
               <a class="butnote" href="#">
              <button>QUESTION PAPERS</button>
              </a>
            </div>
            <div class="box">
               <img src="image/hack.jpeg" alt="">
               <h3>ETHICAL HACKING</h3>
               <a class="butnote" href="#">
                  <button>PDF Notes</button>
               <a class="butnote" href="#">
              <button>QUESTION PAPERS</button>
              </a>
            </div>
            </section>

            <section class="subjects">

               <h1 class="heading">SEMESTER 7</h1>
            
               <div class="box-containerdev">
            
                  <div class="box">
                     <img src="image/soft.jpeg" alt="">
                     <h3>SOFTWARE TESTING</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
            
                  <div class="box">
                     <img src="image/aids.jpeg" alt="">
                     <h3>AI & DS2</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
            
                  <div class="box">
                     <img src="image/ioe.jpeg" alt="">
                     <h3>IOE</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
            
                  <div class="box">
                     <img src="image/quantam.jpeg" alt="">
                     <h3>QUANTUM COMPUTING</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
                  <div class="box">
                     <img src="image/cyber.png" alt="">
                     <h3>CYBER SECURITIES AND LAW</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
               </section>
            
                  <section class="subjects">
                     <h1 class="heading">SEMESTER 8</h1>
            
               <div class="box-containerdev">
            
                  <div class="box">
                     <img src="image/java.png" alt="">
                     <h3>BIG DATA ANALYTICS</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
            
                  <div class="box">
                     <img src="image/python.png" alt="">
                     <h3>IOE</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
            
                  <div class="box">
                     <img src="image/css.png" alt="">
                     <h3>USER INTERACTION & DESIGN</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
                  </div>
            
                  <div class="box">
                     <img src="image/robo.jpeg" alt="">
                     <h3>ROBOTICS</h3>
                     <a class="butnote" href="#">
                        <button>PDF Notes</button>
                     <a class="butnote" href="#">
                    <button>QUESTION PAPERS</button>
                    </a>
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



