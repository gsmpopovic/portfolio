<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact</title>
      <link href='./style.css' type='text/css' rel='stylesheet'>
   </head>
   <body>
      <div class='split-top'>
         <h1>Contact</h1>
         <div class='split-left'>
            <?php require_once('process.php'); ?>
            <h2>If you'd like to send me a message,</h2>
            <form action='process.php' method='POST'>
               <label>First name
               <br>
               <input type='text' name='firstName'placeholder='Enter your first name'></label>
               <br>
               <label>Last name
               <br>
               <input type='text' name='lastName'placeholder='Enter your last name'></label>
               <br>
               <label>E-mail
               <br>
               <input type='email'name='email'placeholder='Enter your e-mail'></label>
               <br>
               <label>Message
               <br>
               <textarea col='50' row='50' name='msg'placeholder="What's up?"></textarea></label>
               <br>
               <input type='submit' value='Say hello' style="margin-top: 20px;">
            </form>
         </div>
         <div class='split-rght'>
            <h2>If you'd like to schedule a call,</h2>
            <h3>Calendy</h3>
         </div>
      </div>
      <div class='split-bottom'>
         <?php include('nav.php')?>
      </div>
   </body>
</html>