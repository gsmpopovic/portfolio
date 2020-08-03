<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact</title>
      <link href="./assets/css/style.css" type="text/css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Karla&family=Vollkorn&display=swap" rel="stylesheet">
      <!-- Font awesome link below --> 
      <script src="https://kit.fontawesome.com/332bfb5ae6.js" crossorigin="anonymous"></script>
   </head>
   <body>
      <header>
         <?php include("nav.php")?>
         <h1 class="h">Contact</h1>
      </header>
      <main>
         <div class="cols" id="w100">
         <div id="mb30">
            <div class="center">
               <h2>If you"d like to send me a message,</h2>
               <p class="rq"> all fields are required</p>
               <form action="process.php" method="POST">
                  <label>First name
                  <br>
                  <input type="text" name="firstName"placeholder="Enter your first name" id="p10" required></label>
                  <br>
                  <label>Last name
                  <br>
                  <input type="text" name="lastName" placeholder="Enter your last name" id="p10" required></label>
                  <br>
                  <label>E-mail
                  <br>
                  <input type="email" name="email" placeholder="Enter your e-mail" id="p10" required></label>
                  <br>
                  <label>Message
                  <br>
                  <textarea cols="50" rows="5" name="msg" placeholder="What's up?" id="p10" required></textarea></label>
                  <br>
                  <input type="submit" name="submit" id="submit" value="Say hello" id="mt20" required>
               </form>
               <?php require_once("process.php")?>
            </div>
         </div>
         <div id="w100" id="h50"class="rows" >
            <div id="w25">
               <h2>If you"d like to chat,</h2>
               <!-- Calendly link widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/georgesmpopovic/15min'});return false;"> <i class="far fa-calendar-alt"></i> Calendy</a>
<!-- Calendly link widget end -->
            </div>
            <div id="25">
               <h2> Check out my writing, </h2>
               <a href="https://medium.com/@gpopovic" target="_blank" class="link"> <i class="fab fa-medium"></i> Medium</a>
            </div>
            <div id="w25">
               <h2> Take a look at my LinkedIn, </h2>
               <a href="https://www.linkedin.com/in/george-popovic-b37b92185/" target="_blank" class="link"> <i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
         </div>
      </main>
   </body>
</html>