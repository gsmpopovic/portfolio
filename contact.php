<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact</title>
      <link href='./assets/css/style.css' type='text/css' rel='stylesheet'>
   </head>
   <body>
      <main id='background4'>
         <h1>Contact</h1>
         <div class='split-top-contact'>
            <div class='split-left'>
               <h2>If you'd like to send me a message,</h2>
               <form action="process.php" method="POST">
                  <label>First name
                  <br>
                  <input type='text' name='firstName'placeholder='Enter your first name'></label>
                  <br>
                  <label>Last name
                  <br>
                  <input type="text" name="lastName" placeholder='Enter your last name'></label>
                  <br>
                  <label>E-mail
                  <br>
                  <input type="email" name="email" placeholder="Enter your e-mail"></label>
                  <br>
                  <label>Message
                  <br>
                  <textarea col="50" row="50" name="msg" placeholder="What's up?"></textarea></label>
                  <br>
                  <input type="submit" name='submit' value="Say hello" style="margin-top: 20px;">
               </form>
               <?php require_once('process.php')?>
            </div>
            <div class='split-right'>
               <div class='cc'>
                  <h2>If you'd like to chat,</h2>
                  <!-- Calendly link widget begin -->
                  <h3>
                     <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                     <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
                     <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/georgesmpopovic/15min'});return false;" class='link'>Schedule time with me</a> 
                  </h3>
                  <!-- Calendly link widget end -->
               </div>
               <div class='cc'>
                  <h2> Check out my writing, </h2>
                  <h3>
                  <a href='https://medium.com/@gpopovic' target="_blank" class='link'>Medium</a></h3>
               </div>
            </div>
         </div>
         <div class='split-bottom'>
            <?php include_once('nav.php')?>
         </div>
      </main>
   </body>
</html>