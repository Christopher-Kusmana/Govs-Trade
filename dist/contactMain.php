<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contactStyle.css">
    <title>Contact</title>
  </head>
  <body>
   <div class = "gridContainer">
     <!-- These Links will appear at top of each page -->
       <div id = "links">
           <a>Portfolio</a>
           <a>Marketplace</a>
           <a>Leaderboard</a>
           <a>Your Friends</a>
           <a href = "contactMain.php">Contact Us</a>
       </div>
       <div id = "content">
         <h1>Contact Us</h1>

         <!-- Need to attach these results to a JS file -->
           <form id="contactForm">


             <input type="text" id="name" name="name"  orm="contactForm" placeholder = "Your Name" required>
             <br>


             <input type="email" id="email" name="email" orm="contactForm" placeholder = "Your Email" required>
             <br>



             <textarea rows=2 name="message" id="message" columns=50 placeholder = "Message" required></textarea>
             <br>


             <input type = "submit" id="formSubmit">
           </form>
       </div>
   </div>
 </body>
</html>
