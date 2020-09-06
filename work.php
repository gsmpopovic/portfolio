<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>My Work</title>
      <link href='./assets/css/style.css' type='text/css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Karla&family=Vollkorn&display=swap" rel="stylesheet">
<!-- Font awesome link below --> 
<script src="https://kit.fontawesome.com/332bfb5ae6.js" crossorigin="anonymous"></script>
  
   </head>
   <body>
      <header>
         <?php include_once('./assets/inc/nav.php')?>         
         <h1 class='h'>My Work</h1>
      </header>
      <main>
         <div class="cols">
            <div class='rows'>
               <div id='w40'>
                  <h2> <a href='https://github.com/gsmpopovic/plaCRUD' target="_blank"> <i class="fab fa-github-square"></i> Idiomatic Plato</a></h2>
                  <p>This is a CRUD application which stores and presents information regarding specific idioms of Attic Greek(the dialect of Greek spoken by the ancient Athenians) that appear in the Ancient Greek philosopher Plato's dialogues. It currently
                     stores idioms from his dialogue, the <i>Meno</i>.
                  </p>
               </div>
               <div id='w40'>
                  <h2><a href='https://github.com/gsmpopovic/thePerfectCup' target="_blank"> <i class="fab fa-github-square"></i> The Perfect Cup</a></h2>
                  <p>The Perfect Cup is a website for a fictional coffee shop in Beverly Hills, California. It features information on the shop, its management, and its products, and provides a means of contact via geolocation and a form. In addition to
                     these, the site features a members-only blog which supports user creation, login, and validation.
                  </p>
               </div>
               <div class='rows'>
               <div id='w40'>
                  <h2> <a href='https://github.com/gsmpopovic/quantum-leap' target="_blank"> <i class="fab fa-github-square"></i> Quantum Leap</a></h2>
                  <p>Quantum Leap is a website for a vegetarian restaurant in Manhattan's Lower East side. It features information on the restaurant, a gallery of its menu items, and a contact page which supports SQL and NoSQL storsge.</p>
               </div>
            </div>
         </div>
      </main>
   </body>
</html>